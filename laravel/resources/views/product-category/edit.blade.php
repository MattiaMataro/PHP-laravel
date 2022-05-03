@extends('layouts.backoffice')

@section('content')
    <form action="/product-categories/{{ $productCategory->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input class="form-control" id="name" name="name" value="{{ $productCategory->name }}">
            @error('name')
                <div class="alert alert-danger mt-4">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="product-category">Product Category</label>
            <select id="product-category" name="product-category-id">
                <option value=""></option>
                @foreach($categories as $category)
                    <option
                        value="{{ $category->id }}"
                        @if($category->id === $productCategory->product_category_id) selected @endif
                    >
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="row">
            <div class="col-lg-12 mt-2">
                <button class="btn btn-primary">Edit</button>
            </div>
        </div>
    </form>
@endsection