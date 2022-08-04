@extends('layouts.admin')

@section('title')
    @parent - Users
@endsection

@section('content')
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Users</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>
    </div>
    <div class="table-responsive">
        {{$users->links()}}
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">E-mail</th>
                <th scope="col">Created&nbsp;at</th>
                <th scope="col">Updated</th>
                <th scope="col">Admin</th>
                <th scope="col">Manage</th>
            </tr>
            </thead>
            <tbody>
            @forelse($users as $user)
                <tr id="user_{{$user->id}}">
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>{{$user->updated_at}}</td>
                    <td>@if ($user->is_admin)
                            Yes
                        @endif</td>
                    <td class="text-nowrap align-middle py-0">
                        <a href="{{route('admin.users.edit',['user'=>$user->id])}}"
                           class="btn text-primary px-1 py-0 h-100 text-decoration-none">
                            <small>Edit</small>
                        </a>
                        <a href="javascript:;"
                           onclick="del({{$user->id}})"
                           class="btn py-0 h-100 text-danger p-1 text-decoration-none"><small>Del</small>
                        </a>

                    </td>
                </tr>
            @empty
                <h4>No any item of users</h4>
                <p>Please register a new user</p>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection
@push('jsUsersAdmin')
    <script>
        async function del(id) {
            if (confirm('Do you want to delete ' + id + "?")) {
                try {
                    const response = await fetch("/admin/users/" + id, {
                        method: 'DELETE',
                        headers:
                            {
                                'X-CSRF-TOKEN':
                                    document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                            }
                    });
                    const result = await response.json();
                    if (result){
                        if (result['rows']) {
                            document.querySelector('#user_' + id).remove()
                        } else if (result['error']){
                            console.log(result['error'])
                        }
                    }
                } catch (e) {
                    console.log(e.message)
                }
            }


        }


    </script>
@endpush
