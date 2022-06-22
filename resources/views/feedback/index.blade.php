@extends('layouts.main')

@section('title')
    Feedback - @parent
@stop

@section('content')
    <div class="pb-5 text-center">
        <h2>Feedback</h2>
        <p class="lead">Please fill up form bellow and press send button</p>
    </div>
    @if ($errors->any())
        @foreach($errors->all() as $err)
            <x-alert type="danger" :message="$err"></x-alert>
        @endforeach

    @endif

    <div class="row g-5">
        <form class="needs-validation" novalidate method="post" action="{{route('feedback')}}">
            @csrf
            <div class="row g-3">
                <div class="col-sm-6">
                    <label for="firstName" class="form-label">First name</label>
                    <input type="text" class="form-control" id="firstName" name="firstName" placeholder="" value="" required value="{{old('firstname')}}">
                    <div class="invalid-feedback">
                        Valid first name is required.
                    </div>
                </div>

                <div class="col-sm-6">
                    <label for="lastName" class="form-label">Last name</label>
                    <input type="text" class="form-control" id="lastName" name="lastName" placeholder="" value="" required value="{{old('lastname')}}">
                    <div class="invalid-feedback">
                        Valid last name is required.
                    </div>
                </div>

                <div class="col-12">
                    <label for="description" class="form-label">You feedback text</label>
                    <textarea class="form-control" id="description" name="description" rows="10" required value="{{old('description')}}"></textarea>
                    <div class="invalid-feedback">
                        Please enter a valid description address for shipping updates.
                    </div>
                </div>

                <div class="text-center mt-5">
                    <button class="w-50 btn btn-primary btn-lg" type="submit">Send</button>
                </div>
            </div>
        </form>
    </div>

@endsection
