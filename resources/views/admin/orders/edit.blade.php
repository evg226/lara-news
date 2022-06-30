@extends('layouts.admin')

@section('title')
    @parent - Orders
@endsection

@section('content')
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Orders</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>
    </div>
    <h4>Feedback #{{$order->id}} Info</h4>
    <div class="row my-4">
        <div class="col d-sm-flex flex-wrap">
            <h6 class="py-2 col-sm-5 col-lg-3">Firstname : <span class="text-primary">{{$order->firstname}}</span>
            </h6>
            <h6 class="py-2 col-sm-5 col-lg-3">Lastname : <span class="text-primary">{{$order->lastname}}</span>
            </h6>
            <h6 class="py-2 col-sm-5 col-lg-3">Email : <span class="text-primary">{{$order->email}}</span>
            </h6>
            <h6 class="py-2 col-sm-5 col-lg-3">Phone : <span class="text-primary">{{$order->phone}}</span>
            </h6>
        </div>
        <hr>
        <div class="col py-2">
            <h6 class="py-2">Description</h6>
            <div class="py-2">
                {{$order->description}}
            </div>
        </div>
        <div class="py-2 px-0">
            <a href="{{route('admin.orders')}}"
               class="btn text-primary"
            >Goto admin panel</a>
        </div>
    </div>

@endsection

