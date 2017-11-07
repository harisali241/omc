@extends('layouts.customHome')  
@section('customContent')

<div class="card-box">

	<h3>Our Clients</h3>
	<hr>
	
	<div class="row">
        
        @foreach($clients as $client)

        <div class="col-xs-4 col-sm-3 col-md-2">
            <div class="card-box" style="padding: 5px 5px 5px 5px ; border-radius: 10px;">
                <img src="{{ asset('uploads/client/'.$client->client_image) }}" alt="image" class="img-responsive" style="border-radius: 10px;" />
                <div class="row">
	                <div class="col-xs-12">
			        	<input type="file" class="filestyle" data-placeholder="No File" name="client_image">
			            <p class="text-muted font-13">
			                Only allow image format (jpeg, png), max.size(4MP).
			            </p>
			        </div>
		    	</div>
		    	<div class="form-group row">
                        <div class="col-xs-12">
                        <table width="130px">
                            <tr>
                                <td><label class="control-label">Active</label></td>
                                <td><input type="checkbox" id="switch{{$client->id}}" switch="bool" name="status" />
                                <label for="switch{{$client->id}}" data-on-label="Yes" data-off-label="No"></label></td>
                            </tr>
                        </table>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="" style="padding-left:10px;float:left;">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Update</button>  
                        </div>
                    </form>
                        <div class="" style="padding-left:10px;float:left;">
                            <form action="{{url('client/'.$client->id)}}" method="POST">
                                {{csrf_field()}}
                                {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger waves-effect waves-light">Delete</button>
                            </form>
                        </div>
                        <div class="col-md-4 col-sm-8 col-xs-4">
                            
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


@endsection