@extends('layouts.customHome')
@section('customContent')

<div class="card-box">
	<h3>Add New Category</h3>
	<hr>

	<form class="form-horizontal" role="form" action="{{ route('category.store') }}" method="POST">
		{{csrf_field()}}

		<div class="form-group">
	        <label class="col-md-2 control-label">Category Name :</label>
	        <div class="col-md-6">
	            <input type="text" class="form-control" value="" name="category_name">
	        </div>
	    </div>

	   
        <div class="form-group row">
        	<div class="col-xs-12">
            	<button type="submit" class="btn btn-default waves-effect" style="margin-left:20px;">Save</button>
        	</div>
        </div>
		
		
	</form>
	

</div>

@endsection

@section('customScripts')

	
@endsection