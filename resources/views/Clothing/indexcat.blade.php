@extends('layouts.app')

@section('content')

@foreach($prods as $prod)
    {{$prod->cat->name}}
    <br>
    @endforeach
@endsection