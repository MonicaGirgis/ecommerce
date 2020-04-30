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
                        <h2 class="page-title">product details</h2>
                        <ul>
                            <li><a href="{{ Route('home') }}">home</a></li>
                            <li class="active">product details</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--edit all -->







            <!-- breadcrumb end -->
            <div class="page-section section ptb-100">
                <div class="container-fluid">
                    <div class="row mb-60">
						<div class="row mb-40">
                            
                            <div class="col-xs-7">                   
                                <ul class="nav nav-tabs" role="tablist">
                                    @foreach($cats as $cat)
                                        <li role="presentation" class="active">
                                            <a href="{{ Route('categories',$cat->id)}}">{{$cat->name}} <span id="nofprod">{{$cat->count}}</span>
                                            </a></li>
                                    @endforeach    
                                    

                                </ul>
							</div>
                            @if(!Auth::guest()&&Auth::user()->isAdmin ==1)
                                {{$id}}
                                <div class="col-xs-5 user">
                                    <div class="col-xs-3 user">
                                                <a href="#" data-toggle="modal" data-target="#AddCategoryModal"><i class="pe-7s-plus"></i></a>
                                    </div>
                                    
                                    <div class="col-xs-1 user">
                                        <a href="{{route('cat.edit',$id)}}"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#EditProdModal"> <i class="pe-7s-edit"></i></button></a>
                                        
                                    <!--    <a href="{{route('cat.edit',$cat->id)}}" data-toggle="modal" data-target="#EditModal"><i class="pe-7s-edit"></i></a> -->
                                    </div>
                                    <div class="col-xs-1 user">
                                        <br>
                                        <form method="post" action="{{route('cat.destroy',$id)}}">
                                            
                                            {{csrf_field()}}
                                            {{method_field('Delete')}}
                                                <button>
                                                
                                                    <i class="pe-7s-trash"></i>
                                                    
                                                </button>
                                        </form>
                                    </div> 
                                                
                                </div>
                            @endif
				   	  </div>	
                   <!-- Tab panes -->
                <div class="tab-content col-xs-12">
                        <div role="tabpanel" class="pro-info-tab tab-pane fade in active"  id="tabone" >
                            @foreach($prods as $prod)
                            @if($prod->available!=0)
                                <div class="row mb-40">
                                <div class="col-md-5 col-sm-6 col-xs-12 mb-40">	
                                    <!-- Tab panes -->
                                    <div class="tab-content mb-10">
                            <div class="pro-large-img tab-pane active" id="pro-large-img-1">
                                <img src=" http://127.0.0.1:8000/uplaod/{{$prod->img}} " alt="" />
                     </div>
                     
                </div>
                       
             </div>
                    <!-- QuickView Product Details -->
                     <!-- QuickView Product Details -->
                     <div class="col-md-7 col-sm-6 col-xs-12 mb-40">
                        <div class="product-details section">
                            <!-- Title -->
                            <h1 class="title">{{$prod->name}}</h1>
                            <!-- Price Ratting -->
                            <div class="price-ratting section">
                                <!-- Price -->
                                <span class="price float-left"><span class="new">€ {{$prod->price}}</span></span>
                             
                            </div>
                            <!-- Short Description -->
                            <div class="short-desc section">
                                <h5 class="pd-sub-title">Quick Overview</h5>
                                <p> {{$prod->des}}<br><br> Remaining  peices : <span id=" remain_p" style="color: blue;">{{$prod->available}} </span> </p>
                            </div>
                            
                            <!-- Quantity Cart -->
                            <div class="quantity-cart section">
                                
                            
                                <button class="add-to-cart" id="addcart" type="submit"><a href="{{route('buying',$prod->id)}}" >add to cart </a></button>
                               
                            </div>
							<!-- delet and edit-->
								<div class="del_edit" >
                                @if(!Auth::guest()&&Auth::user()->isAdmin ==1)
									<a href="{{route('prod.edit',$prod->id)}}"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#EditProdModal"> <i class="pe-7s-edit"></i></button></a>
                               
                                    <form method="post" action="{{route('prod.destroy',$prod->id)}}">
                                        
                                        {{csrf_field()}}
                                        {{method_field('Delete')}}
                                        <button type="submit" class="btn btn-danger" ><i class="pe-7s-trash"></i></button>
                                    </form>
                            	@endif
                                </div>
                            <!--end -->
                    
                        </div>
                    </div>
                    </div> 
                    @elseif(!Auth::guest()&&Auth::user()->isAdmin ==1)
                    <div class="row mb-40">
                    <div class="col-md-5 col-sm-6 col-xs-12 mb-40">	
                        <!-- Tab panes -->
                        <div class="tab-content mb-10">
                            <div class="pro-large-img tab-pane active" id="pro-large-img-1">
                                <img src=" http://127.0.0.1:8000/uplaod/{{$prod->img}} " alt="" />
                            </div>
                     
                        </div>
                       
                    </div>
                    <!-- QuickView Product Details -->
                     <!-- QuickView Product Details -->
                     <div class="col-md-7 col-sm-6 col-xs-12 mb-40">
                        <div class="product-details section">
                            <!-- Title -->
                            <h1 class="title">{{$prod->name}}</h1>
                            <!-- Price Ratting -->
                            <div class="price-ratting section">
                                <!-- Price -->
                                <span class="price float-left"><span class="new">€ {{$prod->price}}</span></span>
                             
                            </div>
                            <!-- Short Description -->
                            <div class="short-desc section">
                                <h5 class="pd-sub-title">Quick Overview</h5>
                                <p> {{$prod->des}}<br><br> Remaining  peices : <span id=" remain_p" style="color: blue;">{{$prod->available}} </span> </p>
                            </div>
                            
                            <!-- Quantity Cart -->
                            <div class="quantity-cart section">

                                 <a href="{{route('buying',$prod->name)}}" >add to cart </a>
                                 
                            </div>
							<!-- delet and edit-->
								<div class="del_edit" >
									<a href="{{route('prod.edit',$prod->id)}}"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#EditProdModal"> <i class="pe-7s-edit"></i></button></a>
                               
                                    <form method="post" action="{{route('prod.destroy',$prod->id)}}">
                                        
                                        {{csrf_field()}}
                                        {{method_field('Delete')}}
                                        <button type="submit" class="btn btn-danger" ><i class="pe-7s-trash"></i></button>
                                    </form>								</div>
                            <!--end -->
                    
                        </div>
                    </div>
                    </div>
                @endif
                @endforeach
               
                            <!--end -->
                    
                        </div>
                    </div>
                </div>

            </div>
        </div>
                    
                    
                    
                    
                    </div>
                        </div>
            </div>
            <!-- page section end -->



            

@endsection