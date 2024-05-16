@extends('backoffice.layouts.master')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">product</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            edit product
        </div>
        <div class="card-body">
            {{-- <a class="btn btn-dark" href="/product/add">add product </a> --}}
            <form method="POST" action="{{ url('product/update') }}">
            @csrf
                <input class="form-control" name="id" type="hidden" placeholder="name@example.com" value="{{ $product->id }}"/>
                <div class="form-floating mb-3">
                    <input class="form-control" name="title" type="text" placeholder="name@example.com" value="{{ $product->title }}"/>
                    <label for="title">Title</label>
                    @error('title')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" name="price" type="text" placeholder="name@example.com" value="{{ $product->price }}" />
                    <label for="price">Price</label>
                    @error('price')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="desc" placeholder="desc" value="{{ $product->desc }}">
                    <label for="desc">desc</label>
                    @error('desc')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form mb-3">
                    <label class=" mb-3" for="type">type </label>
                    <select class="form-select" name="type" id=" type">
                        <option value="dinner" {{ $product->type=='dinner'?'selected':'' }}>Dinner</option>
                        <option value="lunch" {{ $product->type=='lunch'?'selected':'' }}>Lunch</option>
                        <option value="breakfast" {{ $product->type=='breakfast'?'selected':'' }}>Breakfast</option>
                        <option value="dessert" {{ $product->type=='dessert'?'selected':'' }}>Dessert</option>
                        <option value="drinks" {{ $product->type=='drinks'?'selected':'' }}>Drinks</option>
                    </select>
                    @error('type')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                
                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
               
            </form>
        </div>
    </div>
</div>
@endsection