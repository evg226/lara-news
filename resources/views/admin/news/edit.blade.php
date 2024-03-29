@extends('layouts.admin')

@php
    $pageName='News Update';
@endphp

@section('title')
    @parent - {{$pageName}} - {{$news->title}}
@endsection

@section('content')
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">{{$pageName}} - {{$news->title}}</h1>
        <div class="btn-toolbar mb-2 mb-md-0">

        </div>
    </div>
    <h4>News creating form</h4>
    <div class="row mb-5">
        <form method="post" action="{{route('admin.news.update',['news'=>$news->id])}}">
            @csrf
            @method('put')
            <div class="forms-group row">
                <div class="forms-group mb-3 col col-12 col-sm-6">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" id="title" class="form-control col-10" name="title" placeholder="Title"
                           value="{{$news->title}}"/>
                </div>
                <div class="forms-group mb-3 col col-12 col-sm-6">
                    <label for="author" class="form-label">Author</label>
                    <input type="text" id="author" class="form-control" name="author"
                           value="{{$news->author}}"/>
                </div>
            </div>
            <div class="forms-group row">
                <div class="forms-group mb-3 col col-12 col-sm-6">
                    <label for="description" class="form-label">Description</label>
                    <textarea id="description" class="form-control" name="description"
                              rows="2">{!!$news->description!!}</textarea>
                </div>
                <div class="forms-group mb-3 col col-12 col-sm-6">
                    <label for="image" class="form-label">Image</label>
                    <input type="text" id="image" class="form-control col-10" name="image" placeholder="Image"
                           value="{{$news->image}}"/>
                </div>
            </div>
            <div class="forms-group my-3">
                <label for="content" class="form-label">Content</label>
                <textarea id="content" class="form-control" name="content" rows="10">{!!$news->content!!}</textarea>
            </div>
            <div class="forms-group row">
                <div class="forms-group mb-3 col col-12 col-sm-6">
                    <label for="status" class="form-label">Status</label>
                    {{$news->status}}
                    <select id="status" class="form-control" name="status">
                        <option @if($news->status==='Draft') selected @endif>Draft</option>
                        <option @if($news->status==='Active') selected @endif>Active</option>
                        <option @if($news->status==='Blocked') selected @endif>Blocked</option>
                    </select>
                </div>
                <div class="forms-group mb-3 col col-12 col-sm-6">
                    <label for="category_id" class="form-label">Category</label>
                    <select id="category" class="form-control" name="category_id">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}"
                                    @if ($category->id===$news->category_id) selected @endif
                            >{{$category->title}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-outline-secondary mt-2 col-12 col-sm-6 col-md-4 col-lg-3">Update
                </button>
            </div>
        </form>
    </div>

@endsection

