@extends('frontend.layouts.master')
@section('title','Home')
@section('content')
<div class="row">
    <div class="col-sm-3">
        <div class="left-sidebar">
            <h2>Category</h2>
            <div class="panel-group category-products" id="accordian">
                <!--category-productsr-->
                @foreach ($categories as $cat)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><a href="{{ route('category', [$cat->slug]) }}">{{ $cat->name }}</a>
                        </h4>

                    </div>
                </div>
                @endforeach

            </div>
            <!--/category-products-->

            <div class="brands_products">
                <!--brands_products-->
                <h2>Brands</h2>
                <div class="brands-name">
                    <ul class="nav nav-pills nav-stacked">
                        <li><a href="#"> <span class="pull-right">(50)</span>Acne</a></li>
                        <li><a href="#"> <span class="pull-right">(56)</span>Grüne Erde</a></li>
                        <li><a href="#"> <span class="pull-right">(27)</span>Albiro</a></li>
                        <li><a href="#"> <span class="pull-right">(32)</span>Ronhill</a></li>
                        <li><a href="#"> <span class="pull-right">(5)</span>Oddmolly</a></li>
                        <li><a href="#"> <span class="pull-right">(9)</span>Boudestijn</a></li>
                        <li><a href="#"> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
                    </ul>
                </div>
            </div>
            <!--/brands_products-->

            <div class="price-range">
                <!--price-range-->
                <h2>Price Range</h2>
                <div class="well text-center">
                    <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600"
                        data-slider-step="5" data-slider-value="[250,450]" id="sl2"><br />
                    <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
                </div>
            </div>
            <!--/price-range-->
            <div class="shipping text-center">
                <!--shipping-->
                <img src="images/home/shipping.jpg" alt="" />
            </div>
            <!--/shipping-->
        </div>
    </div>
    <div class="col-sm-9 padding-right">
        <div class="features_items">
            <!--features_items-->
            <h2 class="title text-center">{{ $category->name }}</h2>
            @foreach ($featured_products as $product)
            <div class="col-sm-4">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{ asset($product['image']) }}" alt="" />
                            <h2>${{ $product['price'] }}</h2>
                            <p>{{ $product['title'] }}</p>
                            <a href="{{ $product['slug'] }}" class="btn btn-default add-to-cart"><i
                                    class="fa fa-shopping-cart"></i>Add to
                                cart</a>
                        </div>
                        <div class="product-overlay">
                            <div class="overlay-content">
                                <h2>${{ $product['price'] }}</h2>
                                <p>{{ $product['title'] }}</p>
                                <a href="{{ $product['slug'] }}" class="btn btn-default add-to-cart"><i
                                        class="fa fa-shopping-cart"></i>Add
                                    to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="choose">
                        <ul class="nav nav-pills nav-justified">
                            <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                            <li><a href="{{ route('category', [$product->category->slug]) }}"><i
                                        class="fa fa-file-o"></i>{{ $product->category->name }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            {{ $featured_products->links() }}
        </div>
        <!--features_items-->
    </div>
</div>
@endsection