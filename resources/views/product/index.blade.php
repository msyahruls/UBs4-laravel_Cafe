@extends('layouts.admin')
@section('content')
<section class="features section" id="productTable">
    <div class="section-header">
      <h1>Product Table</h1>
    </div>

    @if ($message = Session::get('success'))
      <div class="card">
          <div class="card-body">
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
          </div>
      </div>
    @endif

    <div class="row">
        <div class="col-12 col-md-9 col-lg-9">
            <div class="card">
                <div class="card-header">
                    <form method="GET" role="search">
                        <div class="search-element">
                            <div class="input-group">
                              <input type="search" class="form-control" name="search" placeholder="Search" value="{{ request()->get('search')   }}">
                              <span class="input-group-btn">
                                <button type="submit" class="btn btn-default">
                                  <i class="fas fa-search"></i>
                                </button>
                              </span>
                            </div>
                        </div>
                    </form>
                    <a href="{{ url('product') }}" class="btn btn-secondary">All Data</a>
                </div>
            </div>
        </div>
        <div  class="col-12 col-md-3 col-lg-3">
            <div class="card">
                <div class="card-header align-items-center">
                    <a class="btn btn-success" href="{{ url('product/export') }}">Export Data</a>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">            
            <div class="table-responsive">
                <p class="hero-cta is-revealing">
                    <a class="btn btn-primary" href="{{ route('product.create') }}"><i class="fas fa-plus"></i> Add</a>
                </p>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width="4%">No</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th width="24%">Category</th>
                            <th width="24%">Price</th>
                            <th width="12%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($products as $product)
                            <tr>
                                <td width="4%">{{ ++$i }}</td>
                                <td width="14%" style="padding-top: 5px; padding-bottom: 5px; padding-right: auto; padding-left: auto; "><img src="{{ url('/') }}/images/{{ $product->product_image }}" class="img-thumbnail" width="75" /></td>
                                <td>{{ $product->product_name }}</td>
                                <td width="24%">{{ $product->category_name }}</td>
                                <td width="24%">{{ $product->product_price }}</td>
                                <td width="12%">
                                    <form action="{{ route('product.destroy', $product->product_id) }}" method="POST">
                                        <div class="btn-group">
                                            <a class="btn btn-sm btn-info view_modal color" href="{{ route('product.show', $product->product_id) }}"><i class="fas fa-eye"></i></a>
                                            <a class="btn btn-sm btn-warning edit_modal color" href="{{ route('product.edit', $product->product_id) }}"><i class="fas fa-pen"></i></a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger delete color"><i class="fas fa-trash"></i></button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" style="padding: 20px">
                                    <div class="alert alert-danger">
                                      Data Not Found
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                {!! $products->appends(request()->except('page'))->render() !!}
            </div>
        </div>
    </div>
</section>
@stop