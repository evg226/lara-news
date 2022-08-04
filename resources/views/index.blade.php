@extends('layouts.main')
@section('content')
    <div>
        <h1>Welcome GB Laravel news portal</h1>
        <p>Our news are the most trufull in the World!</p>
        <h3>Choose an option from the list bellow:</h3>
        <ul>
            <li><a href="{{route('categories')}}">Categories</a></li>
{{--            <li><a href="{{route('news')}}">All news</a></li>--}}
            <li><a href="{{route('admin.')}}">Admin panel</a></li>
            <li><a href="{{route('feedback')}}">Leave Feedback</a></li>
            <li><a href="{{route('order')}}">Make Order for info</a></li>
        </ul>
    </div>
@endsection
