@extends('layouts.admin')

@section('title')
    @parent - User - Edit
@endsection

@section('content')
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">User - Edit</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>
    </div>
    {{--    <div class="table-responsive">--}}
    <h4>User editing form</h4>
    <div class="row mb-3">
        <form method="post" action="{{route('admin.users.update',['user'=>$user])}}">
            @csrf
            @method('put')
            <div class="forms-group my-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" id="title" class="form-control col-10" name="name" placeholder="name"
                       value="{{$user->name}}"/>
                @error('name')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="forms-group my-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" id="email" class="form-control col-10" name="email" placeholder="email"
                       value="{{$user->email}}"/>
                @error('email')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="forms-group my-3 row row-cols-1 row-cols-sm-2">
                <div class="col my-1">
                    <span class="me-2">Created</span>
                    <span class="text-primary">{{$user->created_at}}</span>
                </div>
                <div class="col my-1">
                    <span class="me-2">Updated at</span>
                    <span class="text-primary">{{$user->updated_at}}</span>
                </div>
            </div>
            <div class="forms-group my-3">
                <input class="form-check-input" type="checkbox" id="is_admin" name="is_admin"
                       @if ($user->is_admin) checked @endif">
                @error('is_admin')
                <small class="text-danger">{{$message}}</small>
                @enderror
                <label for="is_admin" class="form-label ms-1">Admin rights</label>
            </div>
            <button type="submit" class="btn btn-outline-secondary">Update</button>
        </form>
    </div>
    {{--    </div>--}}
@endsection

