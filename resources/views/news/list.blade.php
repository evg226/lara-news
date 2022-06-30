@extends('layouts.main')
@section('title')
    List of news - @parent
@stop


@section('content')
    <h1 class="text-center mb-5">News List - {{$category->title}}</h1>
    <a class="btn btn-outline-secondary text-decoration-none"
       href="{{route('categories')}}"
    > << Back to categories</a>
    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 g-3 my-4">
        @forelse($newsList as $news)
            <a class="col text-secondary text-decoration-none"
               href="{{route('categories.news.item',['category'=>$news->category_id,'news'=>$news->id])}}">
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
            <h3>No any news in this category</h3>
        @endforelse

    </div>
@endsection

