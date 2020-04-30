@extends('layouts.all')

@section('title','Fashion')

@section('side-header')
    @include('layouts.all2')
@endsection

@section('content')
        <div class="container-fluid ptb-90">
             <div class="row">
                 <div class="table-responsive">
							<table class="table table-striped table-sm">
							  <thead>
								<tr>
								  <th>#User</th>
								  <th>Comment</th>
								</tr>
							  </thead>
							  <tbody id="product_list">
							  @foreach($msgs as $msg)
								<tr>
								  <td>{{$msg->user->name}}</td>
								  <td>{{$msg->msg}}</td>
								</tr>
								@endforeach
								
							  </tbody>
							</table>
				  </div>
                
            </div>    
        </div>    
@endsection