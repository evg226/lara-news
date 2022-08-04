<?php

namespace App\QueryBuilders;

use App\Models\News;
use Illuminate\Contracts\Database\Query\Builder;
use Illuminate\Pagination\LengthAwarePaginator;


class QueryBuilderNews implements QueryBuilder
{

    public function getBuilder(): Builder
    {
        return News::query();
    }

    public function getNews(): LengthAwarePaginator
    {
        return
            News::
                with('category')
                ->paginate(10);
    }

    public function getById(News $news)
    {
        return
            News::find($news->id);
    }

}
