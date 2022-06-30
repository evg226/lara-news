@extends('layouts.admin')

@section('title')
    @parent - Categories - Edit
@endsection

@section('content')
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Categories - Edit</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>
    </div>
    {{--    <div class="table-responsive">--}}
    <h4>Category editing form</h4>
    <div class="row mb-3">
        <form method="post" action="{{route('admin.categories.update',['category'=>$category])}}">
            @csrf
            @method('put')
            <div class="forms-group my-3">
                <label for="title" class="form-label">Image</label>
                <input type="text" id="title" class="form-control col-10" name="title" placeholder="Title"
                       value="{{$category->title}}"/>
            </div>
            <div class="forms-group my-3">
                <label for="description" class="form-label">Description</label>
                <textarea id="description" class="form-control" name="description"
                          rows="5">{!!$category->description!!}</textarea>
            </div>
            <div class="forms-group my-3">
                <label for="image" class="form-label">Title</label>
                <input type="text" id="image" class="form-control col-10" name="image" placeholder="Image"
                       value="{{$category->image}}"/>
            </div>
            <button type="submit" class="btn btn-outline-secondary">Update</button>
        </form>
    </div>
    {{--    </div>--}}
@endsection

