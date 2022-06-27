@extends('layouts.main')
@section('title')
    List of news - @parent
@stop


@section('content')
    <h1 class="text-center mb-5">News List - {{$newsList[0]->category_title}} </h1>
    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 g-3">
        @forelse($newsList as $news)
            <a class="col text-secondary text-decoration-none" href="{{route('news.item',['id'=>$news->id])}}">
                <div class="card shadow-sm h-100">
                    <img src="{{$news->image}}" alt="{{$news->image}}" width="100%">
                    <div class="card-body d-flex flex-column justify-content-between align-items-start">
                        <h4 class="text-dark">{{$news->title}}</h4>
                        <p class="card-text">
                            {{$news->description}}
                            <span class="text-primary">More>></span>
                        </p>
                        <small class="align-self-end mt-2">
                            <div class="me-2"><strong>Author</strong> : {{$news->author}}</div>
                            <div class=""><strong>Created</strong> : {{$news->published_at}}</div>
                        </small>

                    </div>
                </div>
            </a>
        @empty
            <h3>No any news today</h3>
        @endforelse

    </div>
@endsection

{{--<h1>News list page </h1>--}}
{{--<?php if (isset($newsList[0])):?>--}}
{{--    <h3><a href="<?=route('categories.')?>">Categories: </a> <?=$newsList[0]['categoryId']?></h3>--}}
{{--<?php endif;?>--}}

{{--<div style="display: flex; flex-wrap: wrap; justify-content: space-evenly">--}}
{{--    <?php foreach ($newsList as $newsItem): ?>--}}
{{--        <a style="width: 320px; text-decoration: none" href="<?=route('news.item',['id'=>$newsItem['id']])?>">--}}

{{--            <h4><?=$newsItem['author']?></h4>--}}
{{--            <div><img src="<?=$newsItem['image']?>" alt="<?=$newsItem['image']?>" width="100%"></div>--}}
{{--            <p><?=?></p>--}}
{{--            <p><?=?></p>--}}
{{--        </a>--}}
{{--    <?php endforeach; ?>--}}
{{--</div>--}}
