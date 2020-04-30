<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title') </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
		
		<!-- all css here -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/pe-icon-7-stroke.css') }}">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/meanmenu.css') }}">
        <link rel="stylesheet" href="{{ asset('css/shortcodes/shortcode.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
        <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>

         <!-- Scripts -->
         <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
    
        <div class="waraper">
              <!-- ## Header ## -->
              <header>
                <div class="header-area">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3 col-lg-3  col-sm-4 col-xs-4">
                                
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-2 col-xs-2 text-center">
                                <div class="main-menu display-inline">
                                    <nav>
                                        <ul class="menu">
                                            <li><a href="{{ Route('home') }}">HOME <i class="pe-7s-angle-down"></i></a></li>
                                            <li><a href="#">pages <i class="pe-7s-angle-down"></i></a>
                                                <ul>
                                                    <li><a href="{{ Route('shop') }}">shop</a></li>
                                                    <li><a href="{{ Route('cart') }}">cart</a></li>
                                                    <li><a href="{{ Route('categories',1) }}">Categories</a></li>
                                                    <li><a href="{{ Route('contact') }}">contact us</a></li>
                                                </ul>
                                            </li>
                                            
                                            <li><a href="{{ Route('shop') }}">shop</a></li>
                                          
                                            <li><a href="{{ Route('contact') }}">CONTACT</a></li>
                                            @if(!Auth::guest()&&Auth::user()->isAdmin ==1)
                                            <li><a href="{{ Route('sales') }}">Statistic</a></li>
                                            @endif
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-3 col-xs-6 col-sm-6 text-right text-sm text-res">
                                    @yield('side-header')
                                    <!-- <div class="user">
                                        <a href="{{ route('login') }}" data-toggle="modal" data-target="#loginModal"><i class="pe-7s-add-user"></i></a>
                                    </div> -->
                                    <div class="user">
                                    @if (Auth::guest())
                                        <a href="#" data-toggle="modal" data-target="#loginModal"><i class="pe-7s-add-user"></i></a>
                                    
                                        <!-- <a href="{{ route('register') }}"  data-target="#loginModal"><i class="pe-7s-add-user"></i></a> -->
                                    @else
                                        </li>
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                         {{ Auth::user()->name }} <i class="pe-7s-angle-down"></i><span class="caret"></span> 
                                        </a>
                                        <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>

                                                <!-- <li class="nav-item dropdown">
                                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                        {{ Auth::user()->name }} <span class="caret"></span>
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();
                                                                        document.getElementById('logout-form').submit();">
                                                            {{ __('Logout') }}
                                                        </a>

                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            @csrf
                                                        </form>
                                                    </div>
                                                </li> -->
                                    @endif
                                    </div>

                            </div>
                        </div>
                        <div class="mobile-menu"></div>
                    </div>
                </div>
            </header>
            @yield('content')





<!-- edit img in footer-->



<!-- edit all modal -->








<!-- footer area start -->
<footer class="footer-area">
                <div class="container-fluid">
                    <div class="row">

                                

                                 <div class="col-md-3 col-sm-6">
                                    <div class="footer-title res-mrg">
                                        <h3>Support</h3>
                                        <div class="footer-menu">
                                            <ul>
                                                <li><a href="#">Careers</a></li>
                                                <li><a href="#">Sale products</a></li>
                                                <li><a href="#">Terms & Condition</a></li>
                                                <li><a href="#">Delivery Inforamtion</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 hidden-sm">
                                    <div class="footer-title res-mrg">
                                        <h3>Quick Links</h3>
                                        <div class="footer-menu">
                                            <ul>
                                                <li><a href="{{ Route('login') }}">Login</a></li>
                                                <li><a href="{{ Route('cart') }}">My Cart</a></li>
                                                <li><a href="{{ Route('shop') }}">Shop</a></li>
                                                <li><a href="{{ Route('home') }}">Checkout</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>        
                        
                        
                       
                        <div class="col-md-3 col-sm-12">
                            <div class="footer-title res-mrg-2">
                                <h3>newsletter</h3>
                                <div class="footer-newsletter">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="footer-bottom text-center ptb-20">
                        <p>
                            © 2020
                            . All Rights Reserved.
                        </p>
                    </div>
                </div>
            </footer>
            <!-- footer area end -->


            <!-- loginModal -->
            <div class="modal fade" id="loginModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="login">
                                <div class="login-form-container">
                                    <div class="login-text">
                                        <h2>login</h2>
                                        <span>Please login using account detail bellow.</span>
                                    </div>
                                    <div class="login-form">
                                            <form method="POST" action="{{ route('login') }}">
                                                @csrf

                                                <div class="form-group row">
                                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="{{ __('E-Mail Address') }}" value="{{ old('email') }}" required autofocus>
                                                
                                                        @if ($errors->has('email'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </span>
                                                        @endif
                                                </div>

                                                <div class="form-group row">

                                                
                                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="{{ __('Password') }} ">
                                                    
                                                        @if ($errors->has('password'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('password') }}</strong>
                                                            </span>
                                                        @endif
                                                    
                                                </div>

                                                <div class="button-box">
                                                    <div class="login-toggle-btn">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="remember">{{ __('Remember me') }}</label>
                                                        @if (Route::has('password.request'))
                                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                            {{ __('Forgot Your Password?') }}
                                                            </a>
                                                        @endif
                                                        <p style=" float: right;">Create new account <a href="{{ Route('register') }}"><span style="color: blue;">register now</span></a></p>


                                                   


                                                    </div>
                                                    <button type="submit" class="default-btn floatright">{{ __('Login') }}</button>
                                                </div>

                        
                                            </form>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>






            <!-- AddCategoryModalModal start -->
            <div class="modal fade" id="AddCategoryModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="login">
                                <div class="login-form-container">
                                    <div class="login-text">
                                        <h2>Add Category</h2>
                                    </div>
                                    <div class="login-form">
                                        <form action="{{route('cat.store')}}" method="post" enctype="multipart/form-data">
                                            {{csrf_field()}}
                                            <input type="text" name="category-name" placeholder="Category Name" value="{{old('category-name')}}">
                                            <input type="numder" name="category-id" placeholder="Category Id">
											<input type="file" name= "img"  placeholder="choose category image">
                                            <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                                            <div class="button-box">
                                                <div class="login-toggle-btn">
                                                    <p style=" float: right;">Add new Product <a href="{{route('prod.create')}}" data-toggle="modal" data-target="#AddProdModal"><span style="color: blue;">Add Product</span></a></p>
                                                </div>
                                                <button type="submit" class="default-btn floatright">Add Category</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- AddCategoryModalModal end -->


			<!-- AddProdModal -->
            <div class="modal fade" id="AddProdModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="login">
                                <div class="login-form-container">
                                    <div class="login-text">
                                        <h2>Add Prodcut</h2>
                                    </div>
                                    <div class="login-form">
                                        <form action="{{route('prod.store')}}" method="post" enctype="multipart/form-data">
                                            {{csrf_field()}}        
                                            <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                                            <div class="form-group">
												<label for="formGroupExampleInput">Product Name</label>
												<input type="text" name="product-name" class="form-control" id="formGroupExampleInput" placeholder="Enter Product Name">
											 </div>
											 <div class="form-group">
												<label for="formGroupExampleInput2">Product Id</label>
												<input type="text" name="product-id" class="form-control" id="formGroupExampleInput2" placeholder="Enter Product Id">
											 </div>
                                            <div class="form-group">
												<label for="formGroupExampleInput">Product Price</label>
												<input type="text" name="product-price" class="form-control" id="formGroupExampleInput3" placeholder="Enter Product Price">
											 </div>
											 <div class="form-group">
												<label for="formGroupExampleInput2">Product Quantity</label>
												<input type="number" name="product-quantity" class="form-control" id="formGroupExampleInput4" placeholder="Enter Product Quantity">
											 </div>
											 <div class="form-group">
												<label for="formGroupExampleInput2">Product Description</label>
												<input type="text" name="product-description" class="form-control" id="formGroupExampleInput4" placeholder="Enter Product Description">
											 </div>
                                             <div class="form-group">
												<label for="formGroupExampleInput2">Product Category</label>
												<!--all  not found cats
                                                     
                                                     
                                                     
                                                     
                                                     
                                                     
                                                     
                                                     
                                                     
                                                     
                                                -->
											 </div>
											 <div class="form-group">
												<label for="formGroupExampleInput2">Product Image</label>
												<input type="file" name="img" class="form-control" id="formGroupExampleInput5" placeholder="Enter Product Image">
											 </div>
                                            <div class="button-box">
                                                <div class="login-toggle-btn">
                                                    <p style=" float: right;">Add new Category <a href="{{route('cat.create')}}" data-toggle="modal" data-target="#AddCategoryModal"><span style="color: blue;">Add Category</span></a></p>
                                                </div>
                                                <button type="submit" class="default-btn floatright">Add Product</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- AddProdModal end -->

























        <!-- all js here -->
        <script src="{{ asset('js/vendor/jquery-1.12.0.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/jquery.meanmenu.js') }}"></script>
        <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('js/waypoints.min.js') }}"></script>
        <script src="{{ asset('js/ajax-mail.js') }}"></script>
        <script src="{{ asset('js/plugins.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>

    </body>
</html>
