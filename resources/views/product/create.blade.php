@extends('layouts.admin')
@section('content')
<section class="features section" id="productTable">
    <div class="section-header">
      <h1>Add Product</h1>
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

    <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
        <div class="card col-lg-6">
            <div class="card-body">
                @csrf
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                  <label>Category</label>
                  <select class="form-control" name="category">
                    @foreach($categories as $category)
                      <option value="{{ $category->category_id }}">{{ $category->category_name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" name="price">
                </div>
                <div class="form-group">
                  <label>Image</label>
                  <div id="image-preview" class="image-preview">
                    <label for="image-upload" id="image-label">Choose File</label>
                    <input type="file" name="image" id="customFile">
                  </div>
                </div>
            </div>
            <div class="card-footer text-right">
               <button class="btn btn-primary mr-1" type="submit">Submit</button>
               <button class="btn btn-secondary" type="reset">Reset</button>
             </div>
        </div>
    </form>
</section>
@stop