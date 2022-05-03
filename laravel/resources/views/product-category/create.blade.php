@extends('layouts.backoffice')

@section('content')
    <form action="/product-categories" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input class="form-control" id="name" name="name">
            @error('name')
                <div class="alert alert-danger mt-4">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="product-category">Product Category</label>
            <select id="product-category" name="product-category-id">
                <option value=""></option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="row">
            <div class="col-lg-12 mt-2">
                <button class="btn btn-primary">Create</button>
            </div>
        </div>
    </form>
@endsection