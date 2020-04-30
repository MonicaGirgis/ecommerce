@extends('layouts.all')

@section('content')

                   
                    <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                    </div>
                        <div class="modal-body">
                            <div class="login">
                                <div class="login-form-container">
                                    <div class="login-text">
                                        <h2>Add Category</h2>
                                    </div>
                                    <div class="login-form">
                                        <form action="{{route('cat.store')}}" method="post" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                            <input type="text" name="category-name" placeholder="Category Name" value="{{old('category-name')}}">
                                            <input type="number" name="category-id" placeholder="Category Id">
											<input type="file"  name= "img" placeholder="choose category image">
                                            <div class="button-box">
                                                <div class="login-toggle-btn">
                                                    <p style=" float: right;">Add new Product <a href="{{route('prod.create')}}" data-toggle="modal" data-target="#AddProdModal"><span style="color: blue;">Add Product</span></a></p>
                                                </div>
                                                <button type="submit" class="default-btn floatright">Add Category</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                       
                
 @endsection