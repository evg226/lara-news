<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use App\QueryBuilders\QueryBuilderNews;
use Illuminate\Http\Request;
use Psy\Util\Str;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(QueryBuilderNews $queryBuilderNews)
    {
        return view('admin.news.index', ['newsList' => $queryBuilderNews->getNews()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.news.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required'],
            'image' => ['required'],
            'content' => ['required'],
            'author' => ['required']
        ]);
        $validated = $request->only([
            'title',
            'author',
            'image',
            'description',
            'content',
            'category_id',
            'status'
        ]);
        $validated['slug'] = \Str::slug($validated['title']);
        $news = News::create($validated);
        if ($news) {
            return
                redirect()->route('admin.news')
                    ->with('success', 'News added successfully');
        } else {
            return
                back()
                    ->with('error', 'Error. Not created');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param News $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        $categories = Category::all();
        return view('admin.news.edit', [
            'news' => $news,
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param News $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $request->validate([
            'title' => ['required'],
            'image' => ['required'],
            'content' => ['required'],
            'author' => ['required']
        ]);
        $validated = $request->only([
            'title',
            'author',
            'image',
            'description',
            'content',
            'category_id',
            'status'
        ]);
        $validated['slug'] = \Str::slug($validated['title']);
        $news = $news->fill($validated);
        if ($news->save()) {
            return
                redirect()->route('admin.news')
                    ->with('success', 'News updated successfully');
        } else {
            return
                back()
                    ->with('error', 'Error. Not updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        //
    }
}
