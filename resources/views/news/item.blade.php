@extends('layouts.main')

@section('title')
    {{$newsItem['title']}} - @parent
@stop

@section('content')
    <div class="p-3 text-center bg-light">
        <div class="my-2">
            <h1 class="display-4 fw-normal">{{$newsItem['title']}}</h1>
            <p class="lead fw-normal"></p>
        </div>
        <small class="shadow-sm row row-cols-sm-2 pb-2 justify-content-between">
            <a class="col-sm-3 p-0"
               href="{{route('categories.item',['categoryId'=>$newsItem['categoryId']])}}">
                View category: {{ $newsItem['categoryId']}}
            </a>
            <div class="col-sm-9 d-flex flex-column flex-sm-row justify-content-sm-end">
                <span class="text-nowrap pe-2">Author: {{$newsItem['author']}}</span>
                <span class="text-nowrap">Created at: {{$newsItem['created_at']}}</span>
            </div>
        </small>
    </div>
    <div class="my-3 my-sm-4">
        <div class="col-sm-8 col-md-6 col-lg-4 float-start me-3 mb-4 mb-sm-0">
            <img src="{{$newsItem['image']}}" class="img-fluid" alt="{{$newsItem['title']}}">
        </div>
        <div>{{$newsItem['description']}}</div>
    </div>
@endsection


