@extends('layouts.admin')

@php
    $pageName='News create';
@endphp

@section('title')
    @parent {{$pageName}}
@endsection

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create News</h1>
        <div class="btn-toolbar mb-2 mb-md-0">

        </div>
    </div>
    <h4>News creating form</h4>
    @if ($errors->any())
        @foreach($errors->all() as $err)
            <x-alert type="danger" :message="$err"></x-alert>
        @endforeach

    @endif
    <div class="row mb-3">
        <form method="post" action="{{route('admin.news.store')}}">
            @csrf
            <div class="forms-group my-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" id="title" class="form-control col-10" name="title" placeholder="Title"value="{{old('title')}}" />
            </div>
            <div class="forms-group my-3">
                <label for="author" class="form-label">Author</label>
                <input type="text" id="author" class="form-control" name="author" placeholder="Author"value="{{old('author')}}"/>
            </div>
            <div class="forms-group my-3">
                <label for="description" class="form-label">Description</label>
                <textarea id="description" class="form-control" name="description" rows="5">{!!old('description')!!}</textarea>
            </div>
            <div class="forms-group my-3">
                <label for="description" class="form-label">Image</label>
                <input type="file" id="image" class="form-control" name="image"/>
            </div>
            <div class="forms-group my-3">
                <label for="status" class="form-label">Status</label>
                <select id="status" class="form-control" name="status">
                    <option @if(old('status')==='Draft') selected @endif>Draft</option>
                    <option @if(old('status')==='Active') selected @endif>Active</option>
                    <option @if(old('status')==='Blocked') selected @endif>Blocked</option>
                </select>
            </div>
            <button type="submit" class="btn btn-outline-secondary">Create</button>
        </form>
    </div>

@endsection

