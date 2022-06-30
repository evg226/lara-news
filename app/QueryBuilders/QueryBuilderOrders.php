<?php

namespace App\QueryBuilders;

use Illuminate\Contracts\Database\Query\Builder;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Models\Order;

class QueryBuilderOrders
{
    public function getBuilder(): Builder
    {
        return \App\Models\Order::query();
    }

    public function getAll(): LengthAwarePaginator
    {
        return
            Order::select([
                'id',
                'firstname',
                'lastname',
                'email',
                'phone',
                'is_saw'
            ])
                ->paginate(10);
    }

}

