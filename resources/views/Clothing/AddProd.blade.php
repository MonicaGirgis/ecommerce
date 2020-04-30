
<div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="login">
                                <div class="login-form-container">
                                    <div class="login-text">
                                        <h2>Add Prodcut</h2>
                                    </div>
                                    <div class="login-form">
                                    <form action="{{route('prod.store')}}" method="post" enctype="multipart/form-data">
                                        {{csrf_field()}}
											<div class="form-group">
												<label for="formGroupExampleInput">Product Name</label>
												<input type="text" name="product-name" class="form-control" id="formGroupExampleInput" placeholder="Enter Product Name">
											 </div>
											 <div class="form-group">
												<label for="formGroupExampleInput2">Product Id</label>
												<input type="number" name="product-id" class="form-control" id="formGroupExampleInput2" placeholder="Enter Product Id">
											 </div>
                                            <div class="form-group">
												<label for="formGroupExampleInput">Product Price</label>
												<input type="text" name="product-price" class="form-control" id="formGroupExampleInput3" placeholder="Enter Product Price">
											 </div>
											 <div class="form-group">
												<label for="formGroupExampleInput2">Product Quantity</label>
												<input type="number" name="product-quantity" class="form-control" id="formGroupExampleInput4" placeholder="Enter Product Quantity">
											 </div>
											 <div class="form-group">
												<label for="formGroupExampleInput2">Product Description</label>
												<input type="text" name="product-description" class="form-control" id="formGroupExampleInput4" placeholder="Enter Product Description">
											 </div>
                                             <div class="form-group">
												<label for="formGroupExampleInput2">Product Category</label>
												<select class="form-control category_list" name="category_id">
													@foreach($cats as $cat)
														<option value="{{$cat->id}}">{{$cat->name}}</option>
													@endforeach
												</select>
											 </div>
											 <div class="form-group">
												<label for="formGroupExampleInput2">Product Image</label>
												<input type="file" name="img" class="form-control" id="formGroupExampleInput5" placeholder="Enter Product Image">
											 </div>
                                            <div class="button-box">
                                                <div class="login-toggle-btn">
                                                    <p style=" float: right;">Add new Category <a href="{{route('cat.create')}}" data-toggle="modal" data-target="#AddCategoryModal"><span style="color: blue;">Add Category</span></a></p>
                                                </div>
                                                <button type="submit" class="default-btn floatright">Add Product</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>