@extends('layouts.admin')

@php
    $pageName='News List';
@endphp

@section('title')
    @parent {{$pageName}}
@endsection

@section('content')
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">{{$pageName}}</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{route('admin.news.create')}}" class="btn btn-sm btn-outline-secondary">Create news</a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        {{$newsList->links()}}
        <table class="table table-striped table-xs">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Category</th>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">Description</th>
                <th scope="col">Created at</th>
                <th scope="col">Status</th>
                <th scope="col">Admin</th>
            </tr>
            </thead>
            <tbody>
            @forelse($newsList as $news)
                <tr>
                    <td>{{$news->id}}</td>
                    <td>{{$news->category->title}}</td>
                    <td>{{$news->title}}</td>
                    <td>{{$news->author}}</td>
                    <td>{{$news->description}}</td>
                    <td class="text-nowrap">{{$news->created_at}}</td>
                    <td class="text-center">{{$news->status}}</td>
                    <td class="text-nowrap align-middle py-0">
                        <a href="{{route('admin.news.edit',['news'=>$news->id])}}"
                           class="btn text-primary px-1 py-0 h-100 text-decoration-none">
                            <small>Edit</small>
                        </a>
                        <a href="javascript:;" class="btn py-0 h-100 text-danger p-1 text-decoration-none"><small>Del</small></a>
                    </td>
                </tr>
            @empty
                <h3>No any items to view</h3>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection
