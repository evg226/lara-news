<?php

declare(strict_types=1);

namespace App\QueryBuilders;

use Illuminate\Contracts\Database\Query\Builder;

interface QueryBuilder
{
    public function getBuilder(): Builder;
}
