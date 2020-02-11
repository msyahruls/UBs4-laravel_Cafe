@extends('layouts.app')
@section('content')
<section class="features section" style="padding: 50px 100px" id="productTable">
    <h2 class="section-title mt-0 text-center">Product Table</h2>
    <div class="table-responsive" style="margin-top: 15px">
        <!-- <p class="hero-cta is-revealing"><a class="button button-primary button-shadow" href="#">Add</a></p> -->
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th width="4%">No</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th width="24%">Category</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td width="4%">{{ ++$i }}</td>
                        <td width="14%" style="padding-top: 5px; padding-bottom: 5px; padding-right: auto; padding-left: auto; "><img src="{{ url('/') }}/images/{{ $product->product_image }}" class="img-thumbnail" width="75" /></td>
                        <td>{{ $product->product_name }}</td>
                        <td width="24%">{{ $product->category_name }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                
            </tfoot>
        </table>
    </div>
</section>
@stop