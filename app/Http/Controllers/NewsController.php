<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function show(int $categoryId = null)
    {
        $news = $this->getNews($categoryId);
        return view('news.list', ['newsList' => $news]);
    }

    public function showById(int $id)
    {
        $newsItem = $this->getNewsById($id);
        return view('news.item', ['newsItem' => $newsItem]);
    }
}
