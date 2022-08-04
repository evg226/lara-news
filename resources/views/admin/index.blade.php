@extends('layouts.admin')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Admin Panel {{\Illuminate\Support\Facades\Auth::user()->name}}</h1>
        @php $msg='You has got access to admin panel!' @endphp
        <div class="btn-group me-2">
        </div>
    </div>
    <x-alert type="success" :message="$msg"></x-alert>
    <x-alert type="warning" message="Select entity in the sidebar"></x-alert>
    @push('jsAdmin')
        <script>console.log('Welcome to admin page js console')</script>
    @endpush

@endsection
