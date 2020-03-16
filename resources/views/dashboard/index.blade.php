@extends('layouts.admin')
@section('content')
<section class="features section" id="">
    <div class="section-header">
      <h1>Dashboard</h1>
    </div>

    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <a href="{{ url('category') }}">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="fas fa-coffee"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Categories</h4>
                  </div>
                  <div class="card-body">
                    {{ $categories->count() }}
                  </div>
                </div>
              </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <a href="{{ url('product') }}">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Products</h4>
                  </div>
                  <div class="card-body">
                    {{ $products->count() }}
                  </div>
                </div>
              </div>
            </a>
        </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="fas fa-users"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Customers</h4>
                  </div>
                  <div class="card-body">
                    1,201
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                  <i class="fas fa-user-tie"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Staff</h4>
                  </div>
                  <div class="card-body">
                    47
                  </div>
                </div>
              </div>
            </div>
    </div>

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
                    <a href="{{ url('dashboard') }}" class="btn btn-secondary">All Data</a>
                </div>
            </div>
        </div>
        <div  class="col-12 col-md-3 col-lg-3">
            <div class="card">
                <div class="card-header align-items-center">
                    <a class="btn btn-success" href="{{ url('dashboard/export') }}">Export Data</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        @foreach($categories as $category)
        <div class="col-12 col-md-6 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4>{{ $category->category_name }}</h4>
                </div>
                <div class="card-body">
                     <div class="table-responsive">
                        <table class="table table-sm table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($category->product as $t)
                                    <tr>
                                        <td>{{ $t->product_name }}</td>
                                        <td width="15%">{{ $t->product_price }}</td>
                                    </tr>
                                @empty
                                     <tr>
                                        <td colspan="2" style="padding: 5px">
                                            <div class="alert alert-danger" style="margin: auto; padding: 5px 20px">
                                                No Data
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="2" >
                                        Total : {{ $category->product->count() }}
                                    </td>
                                </th>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
@stop