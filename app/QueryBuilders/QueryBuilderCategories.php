<?php

namespace App\QueryBuilders;

use App\Models\Category;
use App\Models\News;
use Illuminate\Contracts\Database\Query\Builder;
use Illuminate\Pagination\LengthAwarePaginator;
use phpDocumentor\Reflection\Types\Collection;

class QueryBuilderCategories
{
    public function getBuilder(): Builder
    {
        return Category::query();
    }

    public function getAll(): LengthAwarePaginator
    {
        return
            Category::
            select([
                'id',
                'title',
                'description',
                'created_at',
                'image'
            ])
                ->withCount('news')
                ->paginate(9);
    }

    public function getNews(Category $category): LengthAwarePaginator
    {
//        dd($category->id);
        return
            News::where(['category_id'=>$category->id])
                ->paginate(9);
    }

    public function getByID(int $id): Collection
    {
        return Category::select([
            'id', 'title', 'description', 'image', 'created_at', 'image'
        ])->findOrFail($id);
    }
}
