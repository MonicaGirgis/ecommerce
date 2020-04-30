
@extends('layouts.all')

@section('title','History')

@section('side-header')
    @include('layouts.all2')
@endsection
@section('content')


<!-- EditProdModal -->
<div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="login">
                                <div class="login-form-container">
                                        <h2>Edit Prodcut</h2>
                                    </div>
                                    <div class="login-form">
                                        <form action="{{route('prod.update',$prod->id)}}" method="post" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                            <input type="hidden" name="_method" value="PUT">
											
											<div class="form-group">
												<label for="formGroupExampleInput">Product Name</label>
												<input type="text" name="product-name" class="form-control" id="formGroupExampleInput" placeholder="Enter Product Name" value="{{$prod->name}}">
											 </div>
											 <div class="form-group">
												<label for="formGroupExampleInput2">Product Id</label>
												<input type="number" name="product-id" class="form-control" id="formGroupExampleInput2" placeholder="Enter Product Id" value="{{$prod->id}}">
											 </div>
                                            <div class="form-group">
												<label for="formGroupExampleInput">Product Price</label>
												<input type="text" name="product-price" class="form-control" id="formGroupExampleInput3" placeholder="Enter Product Price" value="{{$prod->price}}">
											 </div>
											 <div class="form-group">
												<label for="formGroupExampleInput2">Product Quantity</label>
												<input type="number" name="product-quantity" class="form-control" id="formGroupExampleInput4" placeholder="Enter Product Quantity" value="{{$prod->available}}">
											 </div>
											 <div class="form-group">
												<label for="formGroupExampleInput2">Product Description</label>
												<input type="text" name="product-description" class="form-control" id="formGroupExampleInput4" placeholder="Enter Product Description" value="{{$prod->des}}">
											 </div>
                                             <div class="form-group">
												<label for="formGroupExampleInput2" >Product Category</label>
												<select class="form-control category_list" name="category_id" value="{{$prod->catId}}">
													@foreach($cats as $cat)
														<option value="{{$cat->id}}">{{$cat->name}}</option>
													@endforeach
												</select>
											 </div>
											 <div class="form-group">
												<label for="formGroupExampleInput2">Product Image</label>
												<input type="file" name="img" class="form-control" id="formGroupExampleInput5" placeholder="Enter Product Image" value="http://127.0.0.1:8000/uplaod/{{$prod->img}}">
											 </div>
                                            <div class="button-box">
                                                <button type="submit" class="default-btn floatright">edit Product</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- EditProdModal end -->
    @include('layouts.error')
@endsection
            