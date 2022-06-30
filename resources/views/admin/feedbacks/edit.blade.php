@extends('layouts.admin')

@section('title')
    @parent - Feedbacks
@endsection

@section('content')
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Feedbacks</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>
    </div>
    <h4>Feedback #{{$feedback->id}} Info</h4>
    <div class="row my-4">
        <div class="col-12 d-sm-flex">
            <h6 class="py-2 me-sm-3">Firstname : <span class="text-primary">{{$feedback->firstname}}</span>
            </h6>
            <h6 class="py-2">Lastname : <span class="text-primary">{{$feedback->lastname}}</span>
            </h6>
        </div>
        <hr>
        <div class="col-12 py-2">
            <h6 class="py-2">Description</h6>
            <div class="py-2">
                {{$feedback->description}}
            </div>
        </div>
        <div class="py-2 px-0">
            <a href="{{route('admin.feedbacks')}}"
               class="btn text-primary"
            >Goto admin panel</a>
        </div>
    </div>

@endsection

