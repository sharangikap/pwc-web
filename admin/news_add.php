@include('admin.tech_header');
@if(session()->has('message'))
            <div class="alert alert-success">

              <button type="button" class="close" data-dismiss="alert" aria-hidden="false">&times;</button>

              {{session()->get('message')}}
            </div>
          @endif
<div class="container-fluid py-4" style="min-height: 700px;">
	<h1>Add Product</h1>


	<ol class="breadcrumb mt-4 mb-4 bg-light p-2 border">
		<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="Product.php">Product Management</a></li>
        <li class="breadcrumb-item active">Add Product</li>
    </ol>



    <div class="card mb-4">
    	<div class="card-header">
    		<i class="fas fa-user-plus"></i> Add New Product
        </div>
        <div class="card-body">
		<form action="/new/Products-Add" method="POST" enctype="multipart/form-data">
            @csrf 
        		<div class="row">
        			<div class="col-md-6">
        				<div class="mb-3">
        					<label class="form-label">Product Name</label>
        					<input type="text" name="title" id="Product_name" class="form-control" />
        				</div>
        			</div>
					<div class="col-md-6">
        				<div class="mb-3">
        					<label class="form-label">Product Description</label>
        					<input type="text" name="Description" id="description" class="form-control" />
        				</div>
        			</div>
        			<div class="col-md-6">
        				<div class="mb-3">
        					<label class="form-label">Select Brand</label>
        					<select name="brand" id="Product_author" class="form-control">
							<option value="" selected="">Select Brand</option>
							@foreach($brand as $data)
                <option value="{{$data->brand_name}}">{{$data->brand_name}}</option>
                @endforeach
        					</select>
        				</div>
        			</div>
        		</div>
        		<div class="row">
        			<div class="col-md-6">
        				<div class="mb-3">
        					<label class="form-label">Select Category</label>
        					<select name="catagory" id="Product_category" class="form-control">
							<option value="" selected="">Add a catagory</option>
							@foreach($catagory as $catagory)
                <option value="{{$catagory->catagory_name}}">{{$catagory->catagory_name}}</option>
                @endforeach
        					</select>
        				</div>
        			</div>
					<div class="col-md-6">
        				<div class="mb-3">
        					<label class="form-label">Price_USD</label>
        					<input type="text" name="price_USD" id="Product_isbn_number" class="form-control" />
        				</div>
        			</div>
        			<!--<div class="col-md-6">
						
        				<div class="mb-3">
        					<label class="form-label">Select Subcategory</label>
        					<select name="Product_location_rack" id="Product_location_rack" class="form-control">
        				
        					</select>
        				</div>-->
        			</div>
        		</div>
        		<div class="row">
        			<div class="col-md-6">
        				<div class="mb-3">
        					<label class="form-label">Price</label>
        					<input type="text" name="price_lk" id="Product_isbn_number" class="form-control" />
        				</div>
        			</div>
        			<div class="col-md-6">
        				<div class="mb-3">
        					<label class="form-label">Qty</label>
        					<input type="number" name="quantity" id="Product_no_of_copy" step="1" class="form-control" />
        				</div>
        			</div>
					<div class="col-md-6">
        				<div class="mb-3">
        					<label class="form-label">Images</label>
        					<input type="file" name="image" id="Product_no_of_copy" class="form-control" accept=".jpg, .jpeg, .png, .webp" multiple />
        				</div>
        			</div>
        		</div>
        		<div class="mt-4 mb-3 text-center">
        			<input type="submit" name="add_Product" class="btn btn-success" value="Add" />
        		</div>
        	</form>
        </div>
    </div>


@include ('admin.tech_footer');