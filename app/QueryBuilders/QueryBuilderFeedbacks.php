<?php

namespace App\QueryBuilders;

use Illuminate\Contracts\Database\Query\Builder;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Models\Feedback;

class QueryBuilderFeedbacks implements QueryBuilder
{
    public function getBuilder(): Builder
    {
        return Feedback::query();
    }

    public function getAll(): LengthAwarePaginator
    {
        return
            Feedback::select([
                'id',
                'firstname',
                'lastname',
                'is_saw',
                'created_at'
            ])
            ->paginate(10);
    }

}
