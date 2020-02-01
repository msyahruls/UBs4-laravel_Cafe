@extends('layouts.app')
@section('content')
<section class="features section" style="padding: 50px 100px" id="productTable">
    <h2 class="section-title mt-0 text-center">Product Table</h2>
    <div class="table-responsive" style="margin-top: 15px">
        <p class="hero-cta is-revealing"><a class="button button-primary button-shadow" href="#">Add</a></p>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th width="4%">No</th>
                    <th>Name</th>
                    <th width="24%">Category</th>
                    <th width="12%">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach($items as $value)
                    <tr>
                        <td width="4%"><?php echo $no++; ?></td>
                        <td>{{ $value->name }}</td>
                        <td width="24%">{{ $value->category }}</td>
                        <td width="12%">
                            <div class="btn-group">
                                <button class="btn btn-sm btn-info view_modal color" id="view_data" value="{{ $value->id }}" >👁</button>
                                <button class="btn btn-sm btn-warning edit_modal color" id="edit_data" value="{{ $value->id }}" >✏</button>
                                <button class="btn btn-sm btn-danger delete color" value="{{ $value->id }}">🗑</button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@stop