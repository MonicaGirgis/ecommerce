@extends('layouts.all')


@section('title','Fashion')

@section('side-header')
    @include('layouts.all2')
@endsection

@section('content')
            <!-- breadcrumb start -->
            <div class="breadcrumb-area">
                <div class="container-fluid text-center">
                    <div class="breadcrumb-stye gray-bg ptb-100">
                        <h2 class="page-title">shop page</h2>
                        <ul>
                            <li><a href="{{ Route('home') }}">home</a></li>
                            <li class="active">shop</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- breadcrumb end -->







<!--edit all -->

            <!-- shop area start -->
            <div class="shop-area pt-100 pb-70">
                <div class="container-fluid">
                    <div class="shop-title-text text-center">
                        <h2>awesome collection 2020 </h2>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                    </div>		
                    <div class="shop-style-all mt-50">
                        <div class="row">
                            <div class="grid">
                            @foreach($prods as $prod)
                            @if($prod->available!=0)
                                 
                                <div class="col-md-3 col-sm-6 col-xs-12 grid-item cat1">
                                    <div class="shop hover-style mb-30">
                                        <div class="shop-img">
                                            <a href="preduct-details.html">
                                               <img src="http://127.0.0.1:8000/uplaod/{{$prod->img}}" alt="" />		
                                            </a>	
                                            <div class="shop-title title-style-1">
                                                <h3><a href="preduct-details.html">{{$prod->cat->name}}</a></h3>
                                                <span class="new-price">{{$prod->price}}</span>
                                            </div>
                                            <div class="product-cart">
                                                <a href="{{route('buying',$prod->name)}}"><i class="pe-7s-cart"></i></a>
                                            </div>	
                                        </div>							
                                    </div>
                                </div>
                                @elseif(!Auth::guest()&& Auth::user()->isAdmin ==1)
                                <div class="col-md-3 col-sm-6 col-xs-12 grid-item cat1">
                                    <div class="shop hover-style mb-30">
                                        <div class="shop-img">
                                            <a href="preduct-details.html">
                                               <img src="http://127.0.0.1:8000/uplaod/{{$prod->img}}" alt="" />		
                                            </a>	
                                            <div class="shop-title title-style-1">
                                                <h3><a href="preduct-details.html">{{$prod->cat->name}}</a></h3>
                                                <span class="new-price">{{$prod->price}}</span>
                                            </div>
                                            <div class="product-cart">
                                                <a href="{{route('buying',$prod->id)}}"><i class="pe-7s-cart"></i></a>
                                            </div>	
                                        </div>							
                                    </div>
                                </div>
                                @endif
                                @endforeach
                                
                                
                            </div>
                        </div>	
                    </div>
                </div>
            </div>			
            <!-- shop area end -->



@endsection