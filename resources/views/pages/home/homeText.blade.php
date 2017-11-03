@extends('layouts.customHome')
@section('customContent')

<div class="card-box">

	<h3>Headings And Text</h3>
	<hr>
  <form class="form-horizontal" role="form" action="{{ url('/home/text-store') }}" method="POST">
    {{csrf_field()}}
    <div class="form-group">
        <button type="submit" class="btn btn-default waves-effect">Save</button>
    </div>
	<div class="row">
		<div class="col-lg-12">
            <div class="panel panel-border panel-{{$homeText[0]->color1}}">
                <div class="panel-heading">
                    <div class="row">
                        <div class="form-group">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" value="{{$homeText[0]->heading1}}" name="heading1">
                            </div>
                            <div class="col-sm-6">
                                <select class="form-control select2" name="color1">
                                    <option disabled selected="selected">{{$homeText[0]->color1}}</option>
                                    <option value="default">default</option>
                                    <option value="primary">primary</option>
                                    <option value="success">success</option>
                                    <option value="info">info</option>
                                    <option value="warning">warning</option>
                                    <option value="danger">danger</option>
                                    <option value="purple">purple</option>
                                    <option value="pink">pink</option>
                                    <option value="inverse">inverse</option>
                                    <option value="orange">orange</option>
                                    <option value="brown">brown</option>
                                    <option value="teal">teal</option>
                                </select>
                            </div>
                        </div>
                    </div>                
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <textarea id="textarea" class="form-control" maxlength="500" rows="3" name="text1">
                                {{$homeText[0]->text3}}
                            </textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>

    <div class="row">
		<div class="col-lg-12">
            <div class="panel panel-border panel-{{$homeText[0]->color2}}">
                <div class="panel-heading">
                    <div class="row">
                        <div class="form-group">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" value="{{$homeText[0]->heading2}}" name="heading2">
                            </div>
                            <div class="col-sm-6">
                                <select class="form-control select2" name="color2">
                                    <option disabled selected="selected">{{$homeText[0]->color2}}</option>
                                    <option value="default">default</option>
                                    <option value="primary">primary</option>
                                    <option value="success">success</option>
                                    <option value="info">info</option>
                                    <option value="warning">warning</option>
                                    <option value="danger">danger</option>
                                    <option value="purple">purple</option>
                                    <option value="pink">pink</option>
                                    <option value="inverse">inverse</option>
                                    <option value="orange">orange</option>
                                    <option value="brown">brown</option>
                                    <option value="teal">teal</option>
                                </select>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <textarea id="textarea" class="form-control" maxlength="500" rows="3" name="text2">
                                {{$homeText[0]->text2}}
                            </textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-border panel-{{$homeText[0]->color3}}">
                <div class="panel-heading">
                    <div class="row">
                        <div class="form-group">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" value="{{$homeText[0]->heading3}}" name="heading3">
                            </div>
                            <div class="col-sm-6">
                                <select class="form-control select2" name="color3">
                                    <option disabled selected="selected">{{$homeText[0]->color3}}</option>
                                    <option value="default">default</option>
                                    <option value="primary">primary</option>
                                    <option value="success">success</option>
                                    <option value="info">info</option>
                                    <option value="warning">warning</option>
                                    <option value="danger">danger</option>
                                    <option value="purple">purple</option>
                                    <option value="pink">pink</option>
                                    <option value="inverse">inverse</option>
                                    <option value="orange">orange</option>
                                    <option value="brown">brown</option>
                                    <option value="teal">teal</option>
                                </select>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <textarea id="textarea" class="form-control" maxlength="500" rows="3" name="text3">
                                {{$homeText[0]->text3}}
                            </textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>
  </form>
</div>

@endsection

@section('customScripts')

    <script src="{{asset('assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/plugins/multiselect/js/jquery.multi-select.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/plugins/jquery-quicksearch/jquery.quicksearch.j') }}s"></script>
    <script src="{{asset('assets/plugins/select2/js/select2.min.js') }}" type="text/javascript"></script>
    <script src="{{asset('assets/plugins/bootstrap-select/js/bootstrap-select.min.js') }}" type="text/javascript"></script>
    <script src="{{asset('assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js') }}" type="text/javascript"></script>
    <script src="{{asset('assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js') }}" type="text/javascript"></script>
    <script src="{{asset('assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}" type="text/javascript"></script>

    <script type="text/javascript" src="{{asset('assets/plugins/autocomplete/jquery.mockjax.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/plugins/autocomplete/jquery.autocomplete.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/plugins/autocomplete/countries.js') }}"></script>
    <script type="text/javascript" src="{{asset('c_assets/pages/jquery.autocomplete.init.js') }}"></script>

    <script type="text/javascript" src="{{asset('c_assets/pages/jquery.form-advanced.init.js') }}"></script>

@endsection