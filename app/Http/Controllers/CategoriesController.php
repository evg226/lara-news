<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function show()

    {
        $categories = $this->getCategories();
        return view('categories.list', ['categories' => $categories]);
    }

}
