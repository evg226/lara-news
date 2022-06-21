@extends('layouts.main')
<style>
    .form_create {
        max-width: 320px;
        border: 2px solid #cbd5e0;
        border-radius: 10px;
        padding: 20px;
    }

    .form_create label {
        display: flex;
        justify-content: space-between;
        margin: 10px 0;
    }

    .form_create > label > input, .form_create > label > textarea {
        padding: 5px;
        width: 70%;
    }

    .form_create button {
        width: 50%;
        cursor: pointer;
        padding: 5px;
        margin-top: 10px;
    }

    .form_create_chk {
        display: flex;
        align-items: center;
    }

    .form_create_chk > input {
        width: 16px;
        height: 16px;
        margin-right: 10px;
    }

    .form_create_button {
        text-align: center;
    }
</style>

@section('title')
    Sign in - @parent
@stop

@section('content')
    <h1 class="mb-5 text-center">User Login Page</h1>
    <form name="login" method="post" action="<?= route('user.login') ?>">
    <div class="form_create mx-auto">
        <label>Username
            <input type="text" name="username" placeholder="Username"/>
        </label>
        <label>Password
            <input type="password" name="password" placeholder="password"/>
        </label>
        <label>
            <div class="form_create_chk">
                <input type="checkbox" name="remember_me"/>
                Remember me
            </div>
        </label>
        <div class="form_create_button">
            <button type="submit">Login</button>
        </div>
    </div>
    </form>
@endsection
