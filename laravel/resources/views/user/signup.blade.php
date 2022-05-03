@extends('layouts.app')

@section('content')

    <form action="/signup" method="POST">
        <div class="form-control">
            <label>Email</label>
            <input type="email" name="email">
        </div>
        <div class="form-control">
            <label>Name</label>
            <input type="name" name="name">
        </div>
        <div class="form-control">
            <label>Password</label>
            <input type="password" name="password">
        </div>
        <div class="form-control">
            <label>Password confirm</label>
            <input type="password" name="password_confirmation">
        </div>
        <div class="row">
            <div class="col-lg-12 text-end">
                <button class="btn btn-primary">SignUp</button>
            </div>
        </div>
    </form>

@endsection