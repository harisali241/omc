@extends('layouts.mainHome')
@section('content')

	<br><br>

    <h3>Enquiry Form</h3>

    <hr>

    <div class="row">
            <div class="col-md-2"></div>
        <div class="card-box col-md-8">
            <h4>Product Enquiry</h4>
            <hr>
            @include('layouts.success')
                @include('layouts.error')
        <form class="form-horizontal" role="form" action="{{ route('enquiryForm.store') }}" method="POST"/>
                {{csrf_field()}}
            <div class="form-group row" style="padding-left:10px;padding-right: 10px;">               
                <div class="col-md-6">
                    <label class="control-label">First Name</label>
                    <input type="text" class="form-control" value="" name="first_name" placeholder="">
                </div>            
                
                <div class="col-md-6">
                    <label class="control-label">Last Name</label>
                    <input type="text" class="form-control" value="" name="last_name" placeholder="">
                </div>
            </div>


            <div class="form-group row" style="padding-left:10px;padding-right: 10px;">               
                <div class="col-md-6">
                    <label class="control-label">Email</label>
                    <input type="email" class="form-control" value="" name="email" placeholder="">
                </div>           
                
                <div class="col-md-6">
                    <label class="control-label">Phone Number</label>
                    <input type="text" class="form-control" value="" name="phone" placeholder="">
                </div>
            </div>

            <div class="form-group row" style="padding-left:10px;padding-right: 10px;">
            <div class="col-md-12">
                <label class="control-label">Product Name</label>
                <select class="select2 form-control select2-multiple" multiple="multiple" multiple data-placeholder="Choose ..." name="product[]">
                        @foreach($products as $product)
                        <option value="{{$product->product_name}}">{{$product->product_name}}</option>
                        @endforeach 
                </select>
            </div>
            </div>
                                                   
            <div class="form-group row">
            <div class="col-md-12">
                <label class="control-label" style="padding-left:10px;padding-right: 10px;">Enquiry</label>
                <div class="col-md-12">
                    <textarea id="textarea" class="form-control" maxlength="1000" rows="3" placeholder="" name="carousel_text" ></textarea>
                </div>
            </div>
            </div>


            <div class="form-group row">
                <div class="col-xs-12">
                    <label style="width:200px;padding-left:10px;padding-right:10px;float:left;"><img src="{!! captcha_url() !!}" alt="captcha"></label>
                
                    <input type="text" name="captcha" autocomplete="off" class="form-control" style="height:60px;width:200px;font-size:25px;float:left;">
            </div>


            <div class="form-group row">
            <div class="col-md-12"  style="padding-left:20px;padding-top:20px;">
                <button type="submit" class="btn btn-default waves-effect m-l-10">Done</button>
            </div>
            </div>

        </form>
        </div>
        
            <div class="col-md-2"></div>
    </div>



    <br><br>
@endsection

@section('scripts')

    <script src="{{ asset('assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/multiselect/js/jquery.multi-select.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-quicksearch/jquery.quicksearch.js') }}"></script>
    <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/bootstrap-select/js/bootstrap-select.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js')}}" type="text/javascript"></script>


    <script type="text/javascript" src="{{ asset('assets/pages/jquery.form-advanced.init.js') }}"></script>

@endsection