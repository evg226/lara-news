@extends('layouts.main')
@section('title')
    List of categories - @parent
@stop

@section('content')
    <h1>Categories List</h1>
    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 g-3">
        @forelse ($categories as $category)
            <a href="{{route('categories.item',['categoryId'=>$category['id']])}}"
               class="col">
                <div class="card shadow-sm h-100">
                    <img src="{{$category['image']}}" class="card-img-top" alt="{{$category['title']}} image"
                         width="100%">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h5 class="card-title text-dark">{{$category['title']}}</h5>
                        <p class="card-text text-secondary">{{$category['description']}}</p>
                        <div class="btn btn-primary">Show these news</div>
                    </div>
                </div>

            </a>
        @empty
            <a href="{{route('news')}}">
                <h3>No any categories</h3>
                <p>Please go to all news</p>
            </a>
        @endforelse
    </div>
@endsection
