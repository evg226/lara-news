@extends('layouts.admin')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Admin Panel</h1>
        @php $msg='You has got access to admin panel!' @endphp
        <div class="btn-group me-2">
        </div>
    </div>
    <x-alert type="success" :message="$msg"></x-alert>
    <x-alert type="warning" message="Select entity in the sidebar"></x-alert>
    @push('jsAdmin')
        <script>console.log('Welcome to admin page js console')</script>
    @endpush
{{--    <div class="table-responsive">--}}
{{--        <table class="table table-striped table-sm">--}}
{{--            <thead>--}}
{{--            <tr>--}}
{{--                <th scope="col">Entities</th>--}}
{{--            </tr>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--            <tr>--}}
{{--                <td><a href="<?=route('admin.categories')?>" class="btn btn-sm">Categories >></a></td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td><a href="<?=route('admin.news')?>" class="btn btn-sm">News >></a></td>--}}
{{--            </tr>--}}
{{--            </tbody>--}}
{{--        </table>--}}
{{--    </div>--}}
@endsection
