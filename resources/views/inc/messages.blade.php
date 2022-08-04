@if (session()->has('success'))
    <x-alert type="success" :message="session()->get('success')" />
@endif

@if (session()->has('error'))
    <x-alert type="'danger" :message="session()->get('error')" />
@endif

@if ($errors->any())
                <x-alert type="danger" message="There are any errors in this form" />
{{--        @foreach($errors->all() as $err)--}}
{{--            <x-alert type="danger" :message="$err"></x-alert>--}}
{{--        @endforeach--}}
@endif
