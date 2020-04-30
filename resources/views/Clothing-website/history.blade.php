@extends('layouts.all')

@section('title','History')

@section('content')







<!--edit all -->


         <!-- page section start -->
         <div class="shop-area ptb-90">
            <div class="container-fluid">		
                <div class="shop-style-all">
                    <h2 class="pb-30">Purchased Items</h2>
                    <div class="row">
                        <div class="grid">
                        @if(!Auth::guest())
                            @foreach( Auth::user()->prods as $prod)

                                <div class="col-md-3 col-sm-6 col-xs-12 grid-item cat1">
                                    <div class="shop-img">
                                            <img src="uplaod/{{$prod->img}}" alt="" />	
                                    </div>	
                                    <!-- Title -->
                                    <h1 class="title">{{ $prod->prod_id }}</h1>
                                    <!-- Price Ratting -->
                                    <div class="price-ratting section">
                                        <!-- Price -->
                                        <span class="price float-left"><span class="new">€ {{$prod->price}}</span></span>
                                    
                                    </div>
                                    <!-- Short Description -->
                                    <div class="short-desc section">
                                        <h5 class="pd-sub-title">The date of purchase
                                        </h5>
                                        <p style="color: red;"><b>{{$prod->created_at}}</b></p>
                                    </div>		
                                    <!-- Short quantity-->
                                    						
                                </div>
                            @endforeach
                        @else
                            <a href="route('login')" data-toggle="modal" data-target="#loginModal">
                            <button type="submit" class="default-btn floatright">login </button>
                            </a>
                        @endif
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        <!-- page section end -->



@endsection