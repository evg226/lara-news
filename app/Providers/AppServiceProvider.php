<?php

namespace App\Providers;

use App\QueryBuilders\QueryBuilder;
use App\QueryBuilders\QueryBuilderCategories;
use App\QueryBuilders\QueryBuilderFeedbacks;
use App\QueryBuilders\QueryBuilderNews;
use App\QueryBuilders\QueryBuilderOrders;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(QueryBuilder::class,QueryBuilderCategories::class);
        $this->app->bind(QueryBuilder::class,QueryBuilderNews::class);
        $this->app->bind(QueryBuilder::class,QueryBuilderFeedbacks::class);
        $this->app->bind(QueryBuilder::class,QueryBuilderOrders::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrapFive();
    }
}
