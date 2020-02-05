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
                  <input type="text" class="form-control" name="name" value="{{ $product->name }}" readonly="">
                </div>
                <div class="form-group">
                  <label>Category</label>
                  <input type="text" class="form-control" name="category" value="{{ $product->category }}" readonly="">
                </div>                
            </div>
        </div>
</section>
@stop