@extends('layouts.admin')

@section('title')
    @parent - Orders
@endsection

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Orders </h1>
        {{$orders->links()}}
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Firstname</th>
                <th scope="col">Lastname</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Is saw</th>
                <th scope="col">Created&nbsp;at</th>
                <th scope="col">Manage</th>
            </tr>
            </thead>
            <tbody>
            @forelse($orders as $order)
            <tr>
                <td>{{$order->id}}</td>
                <td>{{$order->firstname}}</td>
                <td>{{$order->lastname}}</td>
                <td>{{$order->email}}</td>
                <td>{{$order->phone}}</td>
                <td>
                    <input class="form-check-input" type="checkbox" value="" id="is_saw" name="is_saw"
                           @if($order->is_saw) checked @endif
                           disabled >
                </td>
                <td>{{$order->created_at}}</td>
                <td class="text-nowrap align-middle py-0">
                    <form method="post" action="{{route('admin.orders.update',['order'=>$order])}}"
                          class="align-middle">
                        @csrf
                        @method('put')
                        <input class="form-check-input" type="checkbox" value="" id="is_saw" name="is_saw"
                               checked hidden>
                        <button type="submit" class="btn btn-sm text-primary px-1 py-0 h-100">View</button>
                        <a href="javascript:;"
                           class="btn py-0 text-danger p-1 text-decoration-none"><small>Del</small></a>
                    </form>
                </td>
            </tr>
            @empty
                <h4>No any item of orders</h4>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection
