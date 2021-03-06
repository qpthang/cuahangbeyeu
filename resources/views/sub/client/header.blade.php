<header class="l-header">

    <div class="l-navbar l-navbar_t-light l-navbar_expand js-navbar-sticky">
        <div class="container-fluid">
            <nav class="menuzord js-primary-navigation" role="navigation" aria-label="Primary Navigation">

                <!--logo start-->
                <a href="{{route('homepage')}}" class="logo-brand">
                    <img class="retina" src="{{asset('massive/img/logo.png')}}" alt="Massive">
                </a>
                <!--logo end-->

                <!--mega menu start-->
                <ul class="menuzord-menu menuzord-right c-nav_s-standard">
                    <li><a href="{{route('homepage')}}">Home</a>
                    </li>
                    <li><a href="{{route('news')}}">News</a>
                    </li>

                    <li class="nav-divider" aria-hidden="true"><a href="javascript:void(0)">|</a>
                    </li>

                    <li class="cart-info">
                        <a href="javascript:void(0)"><i class="fa fa-shopping-cart"></i> cart(2)</a>
                        <div class="megamenu megamenu-quarter-width ">
                            <div class="megamenu-row">
                                <div class="col12">

                                    <!--cart-->
                                    <table class="table cart-table-list table-responsive">
                                        <tr>
                                            <td>
                                                <a href="#">
                                                    <img src="{{asset('massive/img/product/1.jpg')}}" alt="" />
                                                </a>
                                            </td>
                                            <td><a href="#"> Women's Top</a>
                                            </td>
                                            <td>X4</td>
                                            <td>$ 122.00</td>
                                            <td>
                                                <a href="#" class="close">
                                                    <img src="{{asset('massive/img/product/close.png')}}" alt="" />
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#">
                                                    <img src="{{asset('massive/img/product/2.jpg')}}" alt="" />
                                                </a>
                                            </td>
                                            <td><a href="#"> Men's T-shirt</a>
                                            </td>
                                            <td>X4</td>
                                            <td>$ 122.00</td>
                                            <td>
                                                <a href="#" class="close">
                                                    <img src="{{asset('massive/img/product/close.png')}}" alt="" />
                                                </a>
                                            </td>
                                        </tr>
                                    </table>

                                    <div class="total-cart pull-right">
                                        <ul>
                                            <li><span>Sub Total</span>  <span>$ 2000.00 </span>
                                            </li>
                                            <li><span>Total </span>  <span>$ 2000.00 </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="s-cart-btn pull-right">
                                        <a href="shop-cart.html" class="btn btn-small btn-theme-color"> View cart</a>
                                        <a href="#" class="btn btn-small btn-dark-solid"> Checkout</a>
                                    </div>
                                    <!--cart-->

                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <a href="javascript:void(0)"><i class="fa fa-search"></i> Search</a>
                        <div class="megamenu megamenu-quarter-width navbar-search">
                            <form role="searchform" action="{{route('search_product')}}">
                                <input type="text" class="form-control"  name="keyword" placeholder="Search Here">
                            </form>
                        </div>
                    </li>
                </ul>
                <!--mega menu end-->

            </nav>
        </div>
    </div>

</header>