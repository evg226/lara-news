<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function show(int $categoryId = null)
    {
        $model = app(News::class);
        $newsList = $model->getNewsByCategoryId($categoryId);
        return view('news.list', ['newsList' => $newsList]);
    }

    public function showById(int $id)
    {
        $model = app(News::class);
        $newsItem = $model->getNewsById($id);
        return view('news.item', ['newsItem' => $newsItem]);
    }
}
