@extends('layouts.user')
@section('content')
    <section class="ftco-menu">
        <div class="container">
            <div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Discover</span>
            <h2 class="mb-4">Our Products</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>

        <div class="row d-md-flex">
            <div class="col-lg-12 ftco-animate p-md-5">
                <div class="row">
                    <div class="col-md-12 d-flex align-items-center">
                        <div class="tab-content ftco-animate" id="v-pills-tabContent">
                          <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">

                            @foreach($categories as $category)
                            <h3>{{ $category->category_name }}</h3>
                            <div class="row">

                                @forelse($category->product as $product)
                                <div class="col-md-3 text-center">
                                    <div class="menu-wrap">
                                        <a href="#" class="menu-img img mb-2" style="background-image: url({{ url('/') }}/images/{{ $product->product_image }});"></a>
                                        <div class="text">
                                            <h3><a href="#">{{ $product->product_name }}</a></h3>
                                            <p>{{ $product->category_name }}</p>
                                            <p class="price"><span>IDR {{ $product->product_price }}</span></p>
                                            <p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                <div class="col-md-12 text-center btn btn-danger disabled">
                                    <!-- <div class="menu-wrap"> -->
                                        <div class="text">
                                            <h4><a href="#">No Product</a></h4>
                                        </div>
                                    <!-- </div> -->
                                </div>
                                @endforelse

                            </div>
                            @endforeach
                          </div>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection