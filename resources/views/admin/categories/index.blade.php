@extends('layouts.admin')

@php
    $pageName='Categories List';
@endphp

@section('title')
    @parent {{$pageName}}
@endsection

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">{{$pageName}}</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{route('admin.categories.create')}}" class="btn btn-sm btn-outline-secondary">Create category</a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Image path</th>
            </tr>
            </thead>
            <tbody>
            @forelse($categories as $category)
            <tr>
                <td>{{$category['id']}}</td>
                <td>{{$category['title']}}</td>
                <td>{{$category['description']}}</td>
                <td>{{$category['image']}}</td>
            </tr>
            @empty
                <h4>No any item of category</h4>
                <p>Please create a new category</p>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection
