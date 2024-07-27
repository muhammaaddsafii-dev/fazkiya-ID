@extends('layouts.master')

@section('content')
    <!-- shop section -->

    <section class="shop_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Our Products
                </h2>
            </div>
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="box">
                            <a href="">
                                <div class="img-box">
                                    <img src="https://cdn-project-desa.s3.ap-southeast-1.amazonaws.com/{{ $product->image }}"
                                        alt="">
                                </div>
                                <h6 class="text-center mb-5">
                                    {{ $product->name }}
                                </h6>
                                <div>
                                    <h6 class="d-flex justify-content-between">
                                        <div class="text-danger my-auto">
                                            Rp. {{ $product->price }}
                                        </div>
                                        <div class="btn btn-sm btn-outline-danger"
                                            onclick="window.location.href='/google.com';"
                                            style="cursor: pointer;">
                                            Buy
                                        </div>

                                    </h6>
                                </div>
                                <div class="new">
                                    <span>
                                        New
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- <div class="btn-box">
                <a href="">
                    View All Products
                </a>
            </div> --}}
        </div>
    </section>

    <!-- end shop section -->
@endsection
