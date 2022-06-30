<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\QueryBuilders\QueryBuilderCategories;

class CategoryController extends Controller
{
    public function index(QueryBuilderCategories $queryBuilderCategories)
    {
        return view('categories.list', ['categories' => $queryBuilderCategories->getAll()]);
    }

    public function show(QueryBuilderCategories $queryBuilderCategories, Category $category)
    {
        return view('news.list', ['category'=>$category,'newsList' => $queryBuilderCategories->getNews($category)]);
    }

}
