@extends('layouts.customHome')
@section('customContent')

<div class="card-box">
	<h3>Images</h3>
	<hr>


    <div class="row">

    	@foreach($homeImages as $homeImage)
    	<form action="{{ url('home/image_update_'.$homeImage->id) }}" method="POST" enctype="multipart/form-data">
    		{{csrf_field()}}
        <div class="col-md-4">
            <div class="thumbnail">
                <img src="{{asset('uploads/homeImages/'.$homeImage->image_name)}}" class="img-responsive">
                <div class="caption">
                	<div class="form-group row">
                        <div class="col-xs-12">
                        	<p class="text-muted font-13">
                                Only allow image dimensions (min_width=800,min_hight=600)-(max_width=2272,max_hight=1704), format (jpeg, png), max.size(4MP).
                            </p>
                        	<input type="file" class="filestyle" data-placeholder="{{$homeImage->image_name}}" name="image_name" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <input type="text" class="form-control" value="{{$homeImage->heading}}" name="heading" data-toggle="tooltip" data-placement="top" title="" data-original-title="heading">
                        </div>
                    </div>
    				<div class="form-group row">
                        <div class="col-md-12">
                            <textarea id="textarea" class="form-control" maxlength="500" rows="3" name="textarea" data-toggle="tooltip" data-placement="top" title="" data-original-title="Text">{{$homeImage->textarea}}</textarea>
                        </div>
                    </div>
                   	<div class="form-group row">
                   		<div class="col-xs-12">
                   		<table width="130px">
	                        <tr>
	                        	<td><label class="control-label">Active</label></td>
	                        	<td><input type="checkbox" id="switch{{$homeImage->id}}" switch="bool" name="status" />
	                        	<label for="switch{{$homeImage->id}}" data-on-label="Yes" data-off-label="No"></label></td>
                    		</tr>
                    	</table>
                    	</div>
                    </div>
                    <div class="form-group row">
                    	<div class="col-md-4 col-sm-2 col-xs-4">
                        	<button type="submit" class="btn btn-primary waves-effect waves-light">Update</button>  
                        </div>
                    </form>
                        <div class="col-md-4 col-sm-2 col-xs-4">
                        	<form action="{{url('/home/image_delete_'.$homeImage->id)}}" method="POST">
    							{{csrf_field()}}
                        	<button type="submit" class="btn btn-danger waves-effect waves-light">Delete</button>
                        	</form>
                        </div>
                        <div class="col-md-4 col-sm-8 col-xs-4">
	                        
	                    </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        
    </div>

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

    <script type="text/javascript">
        
        $(document).ready(function(){

            @foreach($homeImages as $homeImage)

                if( {{$homeImage->active}} == 1) {
                     $("#switch{{$homeImage->id}}").prop("checked","checked");
                }else{
                     $("#switch{{$homeImage->id}}").removeAttr("checked");
                }
               
            @endforeach

        });


    </script>

@endsection