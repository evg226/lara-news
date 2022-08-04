<?php

namespace App\QueryBuilders;

use App\Models\User;
use Illuminate\Contracts\Database\Query\Builder;
use Illuminate\Pagination\LengthAwarePaginator;

class QueryBuilderUsers implements QueryBuilder
{

    public function getBuilder(): Builder
    {
        return User::query();
    }

    public function getAll(): LengthAwarePaginator
    {
        return User::select(
            'id',
            'name',
            'email',
            'created_at',
            'updated_at',
            'is_admin'
        )
            ->paginate(10);
    }

    public function getById(User $user)
    {
        return
            User::find($user->id);
    }
}
