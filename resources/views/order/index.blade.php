@extends('layouts.main')

@section('title')
    Order for API - @parent
@stop

@section('content')
    <div class="py-5 text-center">
        <h2>Order for API Data</h2>
        <p class="lead">Please fill up fields bellow to make order for API information</p>
    </div>
    <div class="row g-5">
        <form class="needs-validation" novalidate method="post" action="{{route('order')}}">
            @csrf
            <div class="row g-3">
                <div class="col-sm-6">
                    <label for="firstName" class="form-label">First name</label>
                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="" value="{{old('firstname')}}" required>
                    <div class="invalid-feedback">
                        Valid first name is required.
                    </div>
                </div>

                <div class="col-sm-6">
                    <label for="lastName" class="form-label">Last name</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="" value="{{old('lastname')}}" required>
                    <div class="invalid-feedback">
                        Valid last name is required.
                    </div>
                </div>

                <div class="col-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required placeholder="you@example.com" value="{{old('email')}}">
                    <div class="invalid-feedback">
                        Please enter a valid email address.
                    </div>
                </div>

                <div class="col-6">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="+79991115533" required value="{{old('phone')}}">
                    <div class="invalid-feedback">
                        Please enter a valid phone
                    </div>
                </div>

                <div class="col-12">
                    <label for="description" class="form-label">Description of requested information</label>
                    <textarea class="form-control" id="description" name='description' rows="10" required>{{old('description')}}</textarea>
                    <div class="invalid-feedback">
                        Please enter a valid information.
                    </div>
                </div>

                <div class="text-center mt-5">
                    <button class="w-50 btn btn-primary btn-lg" type="submit">Order</button>
                </div>
            </div>
        </form>

@endsection

