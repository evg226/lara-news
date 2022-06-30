<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use App\QueryBuilders\QueryBuilderNews;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function index(QueryBuilderNews $queryBuilderNews,Category $category)
    {
        return view('news.list', ['newsList' => $queryBuilderNews->getByCategoryId($category->id)]);
    }

    public function show(QueryBuilderNews $queryBuilderNews,Category $category,News $news)
    {
        return view('news.item', ['category'=>$category,'newsItem' => $queryBuilderNews->getById($news)]);
    }
}
