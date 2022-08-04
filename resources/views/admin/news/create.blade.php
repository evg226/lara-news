@extends('layouts.admin')

@php
    $pageName='News create';
@endphp

@section('title')
    @parent {{$pageName}}
@endsection

@section('content')
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create News</h1>
        <div class="btn-toolbar mb-2 mb-md-0">

        </div>
    </div>
    <h4>News creating form</h4>
    <div class="row mb-5">
        <form method="post" action="{{route('admin.news.store')}}">
            @csrf
            <div class="forms-group row">
                <div class="forms-group mb-3 col col-12 col-sm-6">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" id="title"
                           class="form-control col-10 @error('title') border-danger @enderror"
                           name="title" placeholder="Title"
                           value="{{old('title')}}" />
                    @error('title')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="forms-group mb-3 col col-12 col-sm-6">
                    <label for="author" class="form-label">Author</label>
                    <input type="text" id="author"
                           class="form-control @error('author') border-danger @enderror"
                           name="author" placeholder="Author"
                           value="{{old('author')}}"/>
                    @error('author')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="forms-group row">
                <div class="forms-group mb-3 col col-12 col-sm-6">
                    <label for="description" class="form-label">Description</label>
                    <textarea id="description" class="form-control" name="description"
                              rows="2">{!!old('description')!!}</textarea>
                </div>
                <div class="forms-group mb-3 col col-12 col-sm-6">
                    <label for="image" class="form-label">Image</label>
                    <input type="text" id="image"
                           class="form-control col-10 @error('image') border-danger @enderror"
                           name="image" placeholder="Image"
                           value="{{old('image')}}"/>
                    @error('image')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="forms-group my-3">
                <label for="content" class="form-label">Content</label>
                @error('content')
                <small class="text-danger">{{$message}}</small>
                @enderror
                <textarea id="content" class="form-control @error('content') border-danger @enderror"
                          name="content" rows="10">{!!old('content')!!}</textarea>
            </div>
            <div class="forms-group row">
                <div class="forms-group mb-3 col col-12 col-sm-6">
                    <label for="status" class="form-label">Status</label>
                    <select id="status" class="form-control @error('status') border-danger @enderror" name="status">
                        <option @if(old('status')==='Draft') selected @endif>Draft</option>
                        <option @if(old('status')==='Active') selected @endif>Active</option>
                        <option @if(old('status')==='Blocked') selected @endif>Blocked</option>
                    </select>
                    @error('status')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="forms-group mb-3 col col-12 col-sm-6">
                    <label for="category_id" class="form-label">Category</label>
                    <select id="category" class="form-control @error('category_id') border-danger @enderror" name="category_id">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}"
                                    @if ($category->id===(int)old('category_id')) selected @endif
                            >{{$category->title}}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-outline-secondary mt-2 col-12 col-sm-6 col-md-4 col-lg-3">Create
                </button>
            </div>
        </form>
    </div>

@endsection

