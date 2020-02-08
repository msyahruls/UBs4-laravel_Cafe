@extends('layouts.admin')
@section('content')
<section class="features section" id="categoryTable">
    <div class="section-header">
      <h1>Show Category</h1>
    </div>
    <div class="card col-lg-6">
            <div class="card-body">
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" name="name" value="{{ $category->category_name }}" readonly="">
                </div>
                <div class="form-group">
                  <label>Product</label>
                  <textarea class="form-control" readonly="" style="height: 100px; max-height: 150px; min-height: 80px">
@foreach($category->product as $t){{ $t->product_name }},@endforeach</textarea>
                </div>
            </div>
        </div>
</section>
@stop