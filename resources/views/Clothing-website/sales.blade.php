@extends('layouts.all')


@section('title','Fashion')

@section('side-header')
    @include('layouts.all2')
@endsection

@section('content')







<!--edit all -->
            <div class="ptb-40">
				<div class="container-fluid">
					<div class="row">
						<h2 class="pb-20">All times Sales Statistics</h2>
							<div class="table-responsive">
							<table class="table table-striped table-sm">
							  <thead>
								<tr>
								  <th>#Id</th>
								  <th>Image_product</th>
								  <th>Name_product</th>
								  <th>Remain_amount</th>
								  <th>sale_amount</th>
								  <th>Category</th>
								  <th>Status</th>
								</tr>
							  </thead>
							  <tbody id="product_list">
								
								<tr>
								  <td>{{$prodbest->id}}</td>
								  <td><img src=" http://127.0.0.1:8000/uplaod/{{$prodbest->img}} " alt=""  width="128px" height="128px"></td>
								  <td>{{$prodbest->name}}</td>
								  <td>{{$prodbest->available}}</td>
								  <td>{{$prodbest->sale}}</td>
								  <td>{{$prodbest->cat->name}}</td>
								  <td><span style="color: red; "><b>Highest Sale</b></span></td>
								</tr>
@foreach($prodsf as $prodf)
								<tr>
								<td>{{$prodf->id}}</td>
								  <td><img src=" http://127.0.0.1:8000/uplaod/{{$prodf->img}} " alt=""  width="128px" height="128px"></td>
								  <td>{{$prodf->name}}</td>
								  <td>{{$prodf->available}}</td>
								  <td>{{$prodf->sale}}</td>
								  <td>{{$prodf->cat->name}}</td>
								  <td><span style="color: yellow; "><b>needed</b></span></td>
								</tr>
@endforeach
@foreach($prods0 as $prod)
								<tr>
								  <td>{{$prod->id}}</td>
								  <td><img src=" http://127.0.0.1:8000/uplaod/{{$prod->img}} " alt=""  width="128px" height="128px"></td>
								  <td>{{$prod->name}}</td>
								  <td>{{$prod->available}}</td>
								  <td>{{$prod->sale}}</td>
								  <td>{{$prod->cat->name}}</td>
								  <td><span style="color: yellow; "><b>no sale</b></span></td>
								</tr>
@endforeach
							  </tbody>
							</table>
						  </div>
						</main>
					  </div>
					</div>





			<canvas class="my-4 w-20" id="myChart" width="300" height="70"></canvas> 




@endsection