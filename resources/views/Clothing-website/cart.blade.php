@extends('layouts.all')

@section('title','Clothing-website | Contact Us')

@section('side-header')
    @include('layouts.all2')
@endsection

@section('content')
            <!-- breadcrumb start -->
            <div class="breadcrumb-area">
                <div class="container-fluid text-center">
                    <div class="breadcrumb-stye gray-bg ptb-100">
                        <h2 class="page-title">cart page</h2>
                        <ul>
                            <li><a href="#">home</a></li>
                            <li><a href="#">shop</a></li>
                            <li class="active">cart</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- breadcrumb end -->
            <!-- shopping-cart-area start -->
            <div class="cart-main-area ptb-100">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h1 class="cart-heading">Cart</h1>
                            <form action="#">
                                <div class="table-content table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="product-name">remove</th>
                                                <th class="product-price">images</th>
                                                <th class="product-name">Product</th>
                                                <th class="product-price">Price</th>
                                                <th class="product-quantity">Quantity</th>
                                                <th class="product-subtotal">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $temp=0 ?>
                                        @foreach($prods as $prod)
                                            @if(session($prod->name))
                                                <tr>
                                                <td class="product-remove"><a href="{{route('forgetSession',$prod->name)}}"><i class="fa fa-times"></i></a></td>
                                                <td class="product-thumbnail">
                                                    <img src=" http://127.0.0.1:8000/uplaod/{{$prod->img}} " alt="" width="100px" height="88px">
                                                    </td>
                                                    <td class="product-name"><a href="#">{{$prod->name}}</a></td>
                                                    <td class="product-price"><span class="amount">{{$prod->price}}</span></td>
                                                    <td class="product-quantity">
                                                        <input value="{{session()->get($prod->name)}}" type="number" name="{{$prod->name}}">
                                                    </td>
                                                    <?php $temp += session()->get($prod->name) * $prod->price ?>
                                                    <td class="product-subtotal">{{session()->get($prod->name) * $prod->price}}</td>
                                                </tr>
                                            @endif
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="coupon-all">
                                            <div class="coupon2">
                                                <form method="post" action="{{ route('update') }}" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('put')
                                                        <input class="button" name="update_cart" value="Update cart" type="submit">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 col-md-offset-7 col-sm-12 col-xs-12">
                                        <div class="cart-total">
                                            <h2>Cart totals</h2>
                                            <ul>
                                                <li>Subtotal<span>{{ $temp }} </span></li>
                                                <li>Total<span><?php echo $temp ?></span></li>
                                            </ul>
                                            <a href="{{route('store')}}">Proceed to checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- shopping-cart-area end -->



@endsection