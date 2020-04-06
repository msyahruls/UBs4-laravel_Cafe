@extends('layouts.admin')
@section('content')
<section class="features section" id="productTable">
    <div class="section-header">
      <h1>Edit Product</h1>
    </div>

    @if (count($errors) > 0)
      <div class="card col-lg-6">
          <div class="card-body">
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          </div>
      </div>
    @endif

    <form action="{{ route('product.update',$product->product_id) }}" method="post" enctype="multipart/form-data">
        <div class="card col-lg-6">
            <div class="card-body">
                @csrf
                @method('PUT')
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" name="name" value="{{ $product->product_name }}">
                </div>
                <div class="form-group">
                  <label>Category</label>
                  <select class="form-control" name="category">                    
                    @foreach($categories as $category)
                      <option value="{{ $category->category_id }}" {{ $category->category_id == $product->product_category ? 'selected="selected"' : '' }} >{{ $category->category_name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Price</label>
                  <input type="text" class="form-control" name="price" value="{{ $product->product_price }}">
                </div>
                <div class="form-group">
                  <label>Image</label>
                  <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFile" name="image">
                      <label class="custom-file-label" for="customFile">Choose file</label>
                  </div>
                  <img src="{{ url('/') }}/images/{{ $product->product_image }}" class="img-thumbnail" width="100" />
                  <input type="hidden" name="hidden_image" value="{{ $product->product_image }}" />
                </div>
            </div>
            <div class="card-footer text-right">
               <button class="btn btn-primary mr-1" type="submit">Submit</button>
               <!-- <button class="btn btn-secondary" type="reset">Cancel</button> -->
             </div>
        </div>
    </form>
</section>
@stop