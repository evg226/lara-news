<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Externals extends Model
{
    use HasFactory;

    protected $table = 'externals';

    public function get()
    {
        return DB::table($this->table)->select([
            'id', 'title', 'description', 'published_at', 'source_id', 'image', 'author'
        ])->get();
    }

    public function getBySourceId(int $category_id)
    {
        return DB::table($this->table)
            ->join('sources', 'sources.id', '=', $this->table . '.source_id')
            ->where(['source_id' => $category_id])
            ->get(['externals.*', 'sources.name as source_title']);
    }

    public function getById (int $id)
    {
        return DB::table($this->table)
            ->join('sources', 'sources.id', '=', $this->table . '.source_id')
            ->where(['externals.id' => $id])
            ->get(['externals.*', 'sources.name as source_name'])[0];
    }
}
