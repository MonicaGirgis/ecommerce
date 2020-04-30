@extends('layouts.app')

@section('content')
<br>
    
        @foreach($prods as $pro)
            <div class="well">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">       
                        {{$pro->name}}
                        
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        {{$pro->cat->name}} 
                        @if(!Auth::guest()&& Auth::user()->isAdmin==1)
                        <a href="{{route('prod.edit',$pro->id)}}" class="btn btn-info"> edit</a>

                        @endif
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <a href="{{route('prod.show',$pro->id)}}">{{$pro->img}}</a>
                        @if(!Auth::guest()&& Auth::user()->isAdmin==1)
                        <form method="post" action="{{route('prod.destroy',$pro->id)}}">
                            <!--
                                link edite is get so I used tage <a> 
                                delete method delete not get or post 
                                so I used form and hidden input
                             -->
                             {{csrf_field()}}
                            <!-- <input type="hidden" name="_method" value="DELETE "> 
                                or {{method_field('methodName')}}
                            -->
                            {{method_field('Delete')}}
                            <br>
                            <button class="btn btn-danger pull-right">Delete</button>
                        </form>
                    </div>
                </div>
                <hr>
            </div>
            @endif 
        @endforeach
        <a href="{{route('prod.create')}}" class="btn btn-info"> ADD</a>
@endsection