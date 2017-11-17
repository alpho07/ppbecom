<!-- BEGIN SIDEBAR -->
<div class="page-sidebar " id="main-menu">
    <!-- BEGIN MINI-PROFILE -->
    <div class="page-sidebar-wrapper" id="main-menu-wrapper">

        <!-- BEGIN SIDEBAR MENU -->
        <p class="menu-title">BROWSE <span class="pull-right"><a href="javascript:;"><i class="fa fa-refresh"></i></a></span></p>
        <ul>
            @if(Auth::user()->role=='Administrator')

            <li  class=""  > <a href="/administrator"> <i class="fa fa-user"></i>  <span class="title">Administrators</span></a></li>

            @endif

                @if(Auth::user()->role=='Administrator' || Auth::user()->role=='Manager' )
            <li class="start"> <a href="#"> <i class="fa fa-rocket"></i> <span class="title">Categories</span> <span class="selected"></span> </span> </a>
                <ul class="sub-menu">
                    <li > <a href="/administrator/categories"> Parent categories </a> </li>
                    <li > <a href="/administrator/subcategories"> Sub Categories </a> </li>

                </ul>
            </li>
                @endif
                @if(Auth::user()->role=='Administrator' || Auth::user()->role=='Manager' )
            <li class=""> <a href="/administrator/clients"> <i class="fa fa-user"></i>  <span class="title">Clients</span></a></li>
                @endif
            <li class=""> <a href="/administrator/orders"> <i class="fa fa-suitcase"></i>  <span class="title">Orders</span></a></li>
                @if(Auth::user()->role=='Administrator' || Auth::user()->role=='Manager' )
            <li class=""> <a href="/administrator/products"> <i class="fa fa-heart"></i>  <span class="title">Products</span></a></li>
            <li class=""> <a href="/administrator/reviews"> <i class="fa fa-comments"></i>  <span class="title">Reviews</span></a></li>
                @endif
                @if(Auth::user()->role=='Administrator')
                    <li class=""> <a href="/administrator/coupons"> <i class="fa fa-money"></i>  <span class="title">Coupons</span></a></li>
                <li class="start"> <a href="#"> <i class="fa fa-rocket"></i> <span class="title">Payments</span> <span class="selected"></span> </span> </a>
                <ul class="sub-menu">
                    <li > <a href="/administrator/payments"> Paypal </a> </li>


                </ul>
            </li>
                @endif
            <li class=""> <a href="/administrator/system"> <i class="fa fa-gear"></i>  <span class="title">System</span></a></li>
            <li class=""> <a href="/administrator/seo"> <i class="fa fa-globe"></i>  <span class="title">Seo</span></a></li>
            <li class=""> <a href="/administrator/auth/logout"> <i class="fa fa-power-off"></i>  <span class="title">Logout</span></a></li>


        </ul>

        <div class="clearfix"></div>
        <!-- END SIDEBAR MENU -->
    </div>
</div>

<div class="footer-widget">
    <div class="progress transparent progress-small no-radius no-margin">
        <div data-percentage="79%" class="progress-bar progress-bar-success animate-progress-bar" ></div>
    </div>
    <div class="pull-right">
        <div class="details-status"> <span data-animation-duration="560" data-value="86" class="animate-number"></span>% </div>
        <a href="/administrator/auth/logout"><i class="fa fa-power-off"></i></a></div>
</div>

<!-- END SIDEBAR -->