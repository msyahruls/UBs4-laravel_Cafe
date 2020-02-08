@extends('layouts.admin')
@section('content')
<section class="features section" id="categoryTable">
    <div class="section-header">
      <h1>Category Table</h1>
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
        <div class="card-body">
             <div class="table-responsive">
                <p class="hero-cta is-revealing"><a class="btn btn-primary" href="{{ route('category.create') }}"><i class="fas fa-plus"></i> Add</a></p>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width="4%">No</th>
                            <th>Name</th>
                            <th>Product</th>
                            <th width="12%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td width="4%">{{ ++$i }}</td>
                                <td>{{ $category->category_name }}</td>
                                <td width="5%">{{ $category->product->count() }}</td>
                                <td width="12%">
                                    <form action="{{ route('category.destroy', $category->category_id) }}" method="POST">
                                        <div class="btn-group">
                                            <a class="btn btn-sm btn-info view_modal color" href="{{ route('category.show',$category->category_id) }}"><i class="fas fa-eye"></i></a>
                                            <a class="btn btn-sm btn-warning edit_modal color" href="{{ route('category.edit',$category->category_id) }}"><i class="fas fa-pen"></i></a>
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
            </div>
        </div>
    </div>
</section>
@stop