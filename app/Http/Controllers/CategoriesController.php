<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Externals;
use App\Models\Sources;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function show()

    {
        $model= app(Category::class);
        $categories = $model->getCategories();
        return view('categories.list', ['categories' => $categories]);
    }

}
