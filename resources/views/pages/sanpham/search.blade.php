@extends('welcome')
@section('content')

<h2 style="margin-top: 100px;" class="title text-center">Kết Quả</h2>

                    <div class="features_items"> 
                        <div class="col">
                            @foreach($search_product as $key => $product)
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="{{URL::to('public/upload/product/'.$product->product_image)}}" alt="" />
                                            <h2> {{ number_format(floatval($product->product_price)).' '.'VND'}}</h2>
                                            <p>{{$product->product_name}}</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shpping-cart">Thêm vào giỏ </i></a>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                            <h2> {{ number_format(floatval($product->product_price)).' '.'VND'}}</h2>
                                            <p>{{$product->product_name}}</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shpping-cart">Thêm vào giỏ </i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="choose">
                                        <ul class="nav nav-pills nav-justified">
                                            <li><a href="#"><i class="fa fa-plus-square">Yêu thích</i></a></li>
                                            <li><a href="#"><i class="fa fa-plus-square">Chia sẻ</i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        
                    </div>


@endsection