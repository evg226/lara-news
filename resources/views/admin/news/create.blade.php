@extends('layouts.admin')

@php
    $pageName='News create';
@endphp

@section('title')
    @parent {{$pageName}}
@endsection

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">{{$pageName}}</h1>
        <div class="btn-toolbar mb-2 mb-md-0">

        </div>
    </div>
    <div class="table-responsive">
        <h4>News creating form</h4>
    </div>
@endsection

