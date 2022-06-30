<?php

namespace App\Providers;

use Illuminate\Support\Facades\Storage;

class DataImportProvider
{
    protected $data = [];

    public function loadData(string $file = 'data.json')
    {
        $dataString = Storage::disk('local')->get($file);
        $ext = explode('.', $file)[1];
        if ($ext === 'csv') {
            $this->handleCsv($dataString);
        } else if ($ext === 'json') {
            $this->handleJson($dataString);
        }
        return $this->data;
    }

    protected function handleCsv($dataString)
    {
        $dataLine = explode(PHP_EOL, $dataString);
        array_pop($dataLine);
        $dataArray = [];
        foreach ($dataLine as $line) {
            $dataArray[] = explode(',', $line);
        }
        $keys = array_shift($dataArray);
        $this->data = array_map(function ($value) use ($keys) {
            if (count($value) < count($keys)) {
                for ($i = 1; count($keys) - count($value); $i++) $value[] = '';
            }
            return array_combine($keys, $value);
        }, $dataArray);
    }

    protected function handleJson($dataString)
    {
        $dataJson = json_decode($dataString, true);
        $this->recurseTree($dataJson);

    }

    protected function recurseTree($treeArray, $parentId = null)
    {
        foreach ($treeArray as $element) {
            $elementFlat = ['parent_id' => $parentId];
            foreach ($element as $key => $value) {
                if (!is_array($value)) {
                    $elementFlat[$key] = $value;
                } else {
                    $this->recurseTree($value, $elementFlat['id']);
                }
            }
            $this->data[] = $elementFlat;
        }
    }
}
