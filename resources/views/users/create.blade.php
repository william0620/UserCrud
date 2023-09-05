@extends('users.layout')

@section('content')

<h1>Create A New User</h1>

@if(Session::has('success'))
<div class="alert alert-success">
    {{ Session::get('success') }}
    @php
    Session::forget('success');
    @endphp
</div>
@endif

<form method="POST" action="{{ route('users.store') }}">

    {{ csrf_field() }}

    <div class="form-group">
        <label>Name:</label>
        <input type="text" name="name" class="form-control" placeholder="Name">
        @if ($errors->has('name'))
        <span class="text-danger">{{ $errors->first('name') }}</span>
        @endif
    </div>

    <div class="form-group">
        <label>Email:</label>
        <input type="text" name="email" class="form-control" placeholder="Email">
        @if ($errors->has('email'))
        <span class="text-danger">{{ $errors->first('email') }}</span>
        @endif
    </div>

    <div class="form-group">
        <label>Password:</label>
        <input type="password" name="password" class="form-control" placeholder="Password">
        @if ($errors->has('password'))
        <span class="text-danger">{{ $errors->first('password') }}</span>
        @endif
    </div>

    <div class="form-group">
        <button class="btn btn-success btn-submit">Submit</button>
    </div>
</form>
@endsection