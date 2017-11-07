@extends('layouts.customHome')  
@section('customContent')

<div class="card-box">

	<h3>Add New Client</h3>
	<hr>
	

	<form class="form-horizontal" role="form" action="{{ route('client.store') }}" method="POST" enctype="multipart/form-data">
		{{csrf_field()}}

		<div class="form-group">
            <label class="col-md-2 control-label">Client Image<span class="text-danger">*</span></label>
            <div class="col-md-6">
            	<input type="file" class="filestyle" data-placeholder="No File" name="client_image">
                <p class="text-muted font-13">
                    Only allow image format (jpeg, png), max.size(4MP).
                </p>
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