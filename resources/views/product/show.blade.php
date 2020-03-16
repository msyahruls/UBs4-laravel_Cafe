@extends('layouts.admin')
@section('content')
<section class="features section" id="productTable">
    <div class="section-header">
      <h1>Show Product</h1>
    </div>
    <div class="card col-lg-6">
            <div class="card-body">
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" name="name" value="{{ $product->product_name }}" readonly="">
                </div>
                <div class="form-group">
                  <label>Category</label>
                  @foreach($categories as $category)
                    <input type="text" class="form-control" name="category" value="{{ $category->category->category_name }}" readonly="">
                  @endforeach
                </div>
                <div class="form-group">
                  <label>Price</label>
                  <input type="text" class="form-control" name="price" value="{{ $product->product_price }}" readonly="">
                </div>
                <div class="form-group">
                  <label>Image</label>
                  <img src="{{ url('/') }}/images/{{ $product->product_image }}" class="img-thumbnail" />
                </div>
            </div>
    </div>
</section>
@stop