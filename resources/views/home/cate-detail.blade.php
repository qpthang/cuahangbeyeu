@extends('layout.massive')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <title>{{$cate->c_name}}</title>
            <!--product option-->
            <h1>{{$cate->c_name}}</h1>
            <div class="row">
                @foreach ($prod as $p)
                <div class="col-md-4">
                    <!--product list-->
                    <div class="product-list">
                        <div class="product-img">
                            <a href="#">
                                <img src="{{asset('massive/img/product/1.jpg')}}" alt="" />
                            </a>
                            <a href="#">
                                <img src="{{asset('massive/img/product/1-alt.jpg')}}" alt="" />
                            </a>
                            
                        </div>
                        <div class="product-title">
                            <h5><a href="#">{{$p->p_name}}</a></h5>
                        </div>
                        <div class="product-price">
                            {{$p->p_price}}
                        </div>
                        <div class="product-btn">
                            <a href="#" class="btn btn-extra-small btn-dark-border  "><i class="fa fa-shopping-cart"></i> Add to cart</a>
                        </div>
                    </div>
                    <!--product list-->
                </div>
                @endforeach
                

                <div class="text-center col-md-12">
                    <ul class="pagination custom-pagination">
                        {{$prod->links()}}
                    </ul>
                </div>

            </div>
        </div>
        
        <div class="col-md-3 ">
            <!--product category-->
            <div class="widget">
                <div class="heading-title-alt text-left heading-border-bottom">
                    <h6 class="text-uppercase">product category</h6>
                </div>
                @php
                    $cateMenu=App\Category::all();
                @endphp
                <ul class="widget-category">
                    @foreach ($cateMenu as $cmn)
                        <li><a href="{{route('cate.detail',['cateSlug'=>$cmn->slug])}}">{{$cmn->c_name}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <!--product category-->

            <!--price filter-->
            <div class="widget">
                <div class="heading-title-alt text-left heading-border-bottom">
                    <h6 class="text-uppercase">price filter</h6>
                </div>
                <form method="post" action="{{route('product.filter')}}">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <input type="text" name="pricefrom" id="pricefrom" class=" form-control" placeholder="From, VND" maxlength="100">
                        </div>

                        <div class="col-xs-12 form-group">
                            <input type="text" name="priceto" id="priceto" class=" form-control" placeholder="To, VND" maxlength="100">
                        </div>
                        <div class=" col-xs-12 form-group">
                            <button  type="submit" class="btn btn-small btn-dark-border  btn-transparent">Filter</button>
                        </div>
                    </div>
                </form>
            </div>
            <!--price filter-->


            <!--top rated product-->
            <div class="widget">
                <div class="heading-title-alt text-left heading-border-bottom">
                    <h6 class="text-uppercase">Top Rated Products</h6>
                </div>
                @php
                    $productMenu=App\Product::Where('p_hotproduct',1)->get();
                @endphp
                <ul class="widget-latest-post">
                    @foreach($productMenu as $prdm)
                    <li>
                        <div class="thumb">
                            <a href="#">
                                <img src="{{asset('massive/img/product/4.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="w-desk">
                            <a href="#">{{$prdm->p_name}}</a>
                            <div class="price">{{$prdm->p_price}}</div>
                            <div class="product-cart">
                                <a href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
            <!--top rated product-->


            <!--product tags-->
            <div class="widget">
                <div class="heading-title-alt text-left heading-border-bottom">
                    <h6 class="text-uppercase">PRODUCT TAGS</h6>
                </div>
                <div class="widget-tags">
                    <a href="#">Accessories</a>
                    <a href="#">Branding</a>
                    <a href="#">Belts</a>
                    <a href="#">Cloth</a>
                    <a href="#">Kids</a>
                    <a href="#">Watch</a>
                    <a href="#">Shoes</a>
                </div>
            </div>
            <!--product tags-->

        </div>

    </div>
    <input type="hidden" id="ajaxToken" value="{{csrf_token()}}">
</div>
@endsection