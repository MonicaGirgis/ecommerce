   <div class="modal fade mymodal" id="EditModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="login">
                                <div class="login-form-container">
                                    <div class="login-text">
                                        <h2>Edit Category</h2>
                                    </div>
                                    <div class="login-form">
                                        <form action="{{route('cat.edit',cat->id)}}" method="post" enctype="multipart/form-data">
                                            {{csrf_field()}}
											<div class="form-group">
												<label for="formGroupExampleInput">choose Category Id</label>
												<input type="number" name="product-id" class="form-control"  placeholder="Enter Id..">
											 </div>
											 <div class="button-box text-center">
                                                <><button type="search" class="default-btn" id="search">Search</button>
                                            </div>
											<div class="form-group">
												<label for="formGroupExampleInput">Edit Category Name</label>
												<input type="text" name="product-name" class="form-control"  placeholder="Name">
											 </div>
											 <div class="form-group">
												<label for="formGroupExampleInput">Edit Category Identification Image</label>
												<input type="file" name="product-image" class="form-control"  placeholder="Choose Image...">
											 </div>
                                            <div class="button-box text-center">
                                                <button type="submit" class="default-btn ">Save Changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>