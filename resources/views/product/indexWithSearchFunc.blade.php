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

    <div class="card">
        <div class="card-header">
            <form method="GET" role="search">
                <!-- {{ csrf_field() }} -->
                <div class="search-element">
                    <div class="input-group">
                      <input type="search" class="form-control" name="search" placeholder="Search" value="{{ request()->get('search') }}">
                      <span class="input-group-btn">
                        <button type="submit" class="btn btn-default">
                          <i class="fas fa-search"></i>
                        </button>
                      </span>
                    </div>
                </div>
            </form>
            <a href="{{ url('product') }}" class="btn btn-primary">All Data</a>
        </div>
        @if(isset($products))
        <div class="card-body">            
            <div class="table-responsive">
                <p class="hero-cta is-revealing"><a class="btn btn-primary" href="{{ route('product.create') }}"><i class="fas fa-plus"></i> Add</a></p>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width="4%">No</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th width="24%">Category</th>
                            <th width="12%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td width="4%">{{ ++$i }}</td>
                                <td width="14%" style="padding-top: 5px; padding-bottom: 5px; padding-right: auto; padding-left: auto; "><img src="{{ url('/') }}/images/{{ $product->product_image }}" class="img-thumbnail" width="75" /></td>
                                <td>{{ $product->product_name }}</td>
                                <td width="24%">{{ $product->category_name }}</td>
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
                        @endforeach
                    </tbody>
                </table>
                {!! $products->render() !!}
            </div>
        </div>
        @endif
        <div class="card-body">
        @if(isset($details))
            <div class="table-responsive">
                <p class="hero-cta is-revealing"><a class="btn btn-primary" href="{{ route('product.create') }}"><i class="fas fa-plus"></i> Add</a></p>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width="4%">No</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th width="24%">Category</th>
                            <th width="12%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($details as $product)
                            <tr>
                                <td width="4%">{{ ++$i }}</td>
                                <td width="14%" style="padding-top: 5px; padding-bottom: 5px; padding-right: auto; padding-left: auto; "><img src="{{ url('/') }}/images/{{ $product->product_image }}" class="img-thumbnail" width="75" /></td>
                                <td>{{ $product->product_name }}</td>
                                <td width="24%">{{ $product->category_name }}</td>
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
                        @endforeach
                    </tbody>
                </table>
                @if($details)
                    
                    {!! $details->appends(request()->except('page'))->render() !!}
                @endif
            </div>
        @elseif(isset($messages))
            <div class="alert alert-danger">
                <p>{{ $messages }}</p>
            </div>
        @endif
        </div>
    </div>
</section>
@stop