@extends('layouts.customHome')
@section('customContent')

<div class="card-box">
	<h3>Add New Product</h3>
	<hr>

	<form class="form-horizontal" role="form" action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
		{{csrf_field()}}
	<div class="row"><br>	
        <div class="col-md-8 col-sm-8">
        	<div class="form-group">
                <label class="col-md-2 control-label">Product Image<span class="text-danger">*</span></label>
                <div class="col-md-10">
                	<input type="file" class="filestyle" data-placeholder="No File" name="product_image">
                    <p class="text-muted font-13">
                        Only allow image dimensions (min_width=800,min_hight=600)-(max_width=2272,max_hight=1704), format (jpeg, png), max.size(4MP).
                    </p>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Product name</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" value="" name="product_name">
                </div>
            </div>
			<div class="form-group">
                <label class="col-md-2 control-label">Product Description</label>
                <div class="col-md-10">
                    <textarea id="textarea" class="form-control" maxlength="500" rows="3" name="product_detail" ></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Active</label>
                <input type="checkbox" id="switch" switch="bool" name="status" />
                <label for="switch" data-on-label="Yes" data-off-label="No"></label>
            </div>
            <div class="form-group">
            	<label class="col-md-2 control-label"></label>
                <button type="submit" class="btn btn-default waves-effect">Save</button>
            </div>
		</div>
		<div class="col-md-4 col-sm-4">
				
		</div>
	</div>
	</form>	


	
</div>

@endsection

@section('customScripts')
	
	

	<script src="{{ asset('assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/multiselect/js/jquery.multi-select.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-quicksearch/jquery.quicksearch.js') }}"></script>
    <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/bootstrap-select/js/bootstrap-select.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}" type="text/javascript"></script>

    <script type="text/javascript" src="{{ asset('assets/plugins/autocomplete/jquery.mockjax.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/autocomplete/jquery.autocomplete.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/autocomplete/countries.js') }}"></script>
    <script type="text/javascript" src="{{ asset('c_assets/pages/jquery.autocomplete.init.js') }}"></script>

    <script type="text/javascript" src="{{ asset('c_assets/pages/jquery.form-advanced.init.js') }}"></script>

@endsection	
