@extends('frontend.master')

@section('content')

<section>
    <div class="container">
        <div class="row">
            @include('frontend.sidebar')

            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">All Items</h2>
                    @if(Session::has('success-msg'))
                        <p class="alert alert-success">{{ Session::get('success-msg') }}</p>
                    @endif
                    @if(Session::has('paid-msg'))
                        <p class="alert alert-success">{{ Session::get('paid-msg') }}</p>
                    @endif

                    @foreach ($products as $product)

                    <div class="col-sm-6" >
                        <div class="product-image-wrapper" onclick="location.href='/product_details/{{$product->id}}'">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    @if (sizeof($product->images) > 0)
                                    <img style="width: 300px;height: 300px" src="{{$product->images[0]->image}}" alt="" />
                                    @endif
                                    <h2>{{$product->offer_price}}$</h2>
                                    <p>{{$product->name}}</p>
                                    <a href="/product/{{$product->id}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div><!--features_items-->
                <div class="pull-right">
                    {!! $products->render() !!}
                </div>
            </div>
        </div>
    </div>
</section>

@stop
