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
            <h2 class="page-title">contact us</h2>
            <ul>
                <li><a href="{{ Route('home') }}">home</a></li>
                <li class="active">contact us</li>
            </ul>
        </div>
    </div>
</div>
<!-- breadcrumb end -->







    <!--edit all -->

<!-- @if(Auth::guest())
<a href="route('login')" data-toggle="modal" data-target="#loginModal"><i class="pe-7s-add-user"></i></a>
                                        

@endif -->

            <!-- contact-area start -->
            <div class="contact-area ptb-100">
                <div class="container-fluid map-contact">
                    <div class="row">
                        <div class="col-lg-7 col-md-7 col-sm-12 text-center">
                            <div class="contact-from gray-bg">
                                <form id="contact-form" action="{{route('msg.store')}}" method="post">
                                    {{csrf_field()}} 
                                    <textarea name="message" placeholder="Your message"></textarea>
                                    @if(!Auth::guest())
                                           
                                        <input name="name" type="hidden" value= "{{Auth::user()->name}}">
                                        <input name="id" type="hidden" value= "{{Auth::user()->id}}">
                                        @if(!Auth::guest()&&Auth::user()->isAdmin ==1)
                                        <button class="submit" type="button"><a href="{{route('msg.index')}}">show Massages</a></button>
                                        @endif
                                        <button class="submit" type="submit">Send Massage</button>
                                    @else
                                    <a href="{{route('login')}}" data-toggle="modal" data-target="#loginModal"><button class="submit" type="button">login</button></a>
                                        
                                    @endif
                                </form>
                                <p class="form-messege"></p>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-12">
                            <div class="communication contact-from">
                                <div class="single-communication">
                                    <div class="communication-icon">
                                        <i class="fa fa-home" aria-hidden="true"></i>
                                    </div>
                                    <div class="communication-text">
                                        <h3>Address:</h3>
                                        <p>Miata 309 S Main St,Stafford, KS 67578</p>
                                    </div>
                                </div>
                                <div class="single-communication">
                                    <div class="communication-icon">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                    </div>
                                    <div class="communication-text">
                                        <h3>Phone:</h3>
                                        <p>0123 456 789   -   15 2368 4597</p>
                                    </div>
                                </div>
                                <div class="single-communication">
                                    <div class="communication-icon">
                                        <i class="fa fa-fax" aria-hidden="true"></i>
                                    </div>
                                    <div class="communication-text">
                                        <h3>Fax:</h3>
                                        <p>0123 456 789   -   15 2368 4597</p>
                                    </div>
                                </div>
                                <div class="single-communication">
                                    <div class="communication-icon">
                                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    </div>
                                    <div class="communication-text">
                                        <h3>Email:</h3>
                                        <p><a href="https://bootexperts.com/support/login.php">support.center@gmail.com</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contact-map pb-10">
                <div id="hastech"></div>
            </div>
            <!-- contact-area end -->



@endsection