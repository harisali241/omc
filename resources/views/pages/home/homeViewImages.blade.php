@extends('layouts.customHome')
@section('customContent')

<div class="card-box">
	<h3>Images</h3>
	<hr>


    <div class="row">

        @foreach($products as $product)
        <form action="{{ url('/home/image_status_'.$product->id) }}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
        <div class="col-md-4">
            <div class="thumbnail">
                <img src="{{asset('uploads/product/'.$product->product_image)}}" class="img-responsive">
                <div class="caption">
                    <div class="gal-detail">
                        <h4>{{$product->product_name}}</h4>
                        <p class="text-muted">
                            {{$product->product_detail}}
                        </p>
                    </div>
                    <div class="form-group row">
                        <div class="col-xs-12">
                        <table width="130px">
                            <tr>
                                <td style="padding-left:15px;"><label class="control-label">Active</label></td>
                                <td><input type="checkbox" id="switch{{$product->id}}" switch="bool" name="status" />
                                <label for="switch{{$product->id}}" data-on-label="Yes" data-off-label="No"></label></td>
                            </tr>
                        </table>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="" style="padding-left:25px;float:left;">
                            <button type="submit" class="btn btn-default waves-effect waves-light">Done</button>  
                        </div>
                    
                        <div class="col-md-4 col-sm-8 col-xs-4">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
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

            @foreach($products as $product)

                if( {{$product->home_status}} == 1) {
                    $("#switch{{$product->id}}").prop("checked","checked");
                }else{
                    $("#switch{{$product->id}}").removeAttr("checked");
                }
               
            @endforeach

        });


    </script>

@endsection