@extends('layouts.admin')

@section('title')
    @parent - Feedbacks
@endsection

@section('content')
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Feedbacks </h1>
        {{$feedbacks->links()}}
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Firstname</th>
                <th scope="col">Lastname</th>
                <th scope="col">Is saw</th>
                <th scope="col">Created&nbsp;at</th>
                <th scope="col">Manage</th>
            </tr>
            </thead>
            <tbody>
            @forelse($feedbacks as $feedback)
                <tr>
                    <td>{{$feedback->id}}</td>
                    <td>{{$feedback->firstname}}</td>
                    <td>{{$feedback->lastname}}</td>
                    <td>
                        <input class="form-check-input" type="checkbox" value="" id="is_saw" name="is_saw"
                               @if($feedback->is_saw) checked @endif
                               disabled >
                    </td>
                    <td>{{$feedback->created_at}}</td>
                    <td class="py-0"  style="width:90px">
                        <form method="post" action="{{route('admin.feedbacks.update',['feedback'=>$feedback])}}"
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
                <h4>No feedbacks</h4>
            @endforelse
            </tbody>
        </table>

    </div>
@endsection
