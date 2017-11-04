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
                                    
                                    <option value="default"@if($homeText[0]->color1=='default') selected="selected" @endif>default</option>

                                    <option value="primary" @if($homeText[0]->color1=='primary') selected="selected" @endif>primary</option>
                                    
                                    <option value="success" @if($homeText[0]->color1=='success') selected="selected" @endif>success</option>
                                    
                                    <option value="info" @if($homeText[0]->color1=='info') selected="selected" @endif>info</option>
                                    
                                    <option value="warning" @if($homeText[0]->color1=='warning') selected="selected" @endif>warning</option>
                                    
                                    <option value="danger" @if($homeText[0]->color1=='danger') selected="selected" @endif>danger</option>
                                    
                                    <option value="purple" @if($homeText[0]->color1=='purple') selected="selected" @endif>purple</option>
                                    
                                    <option value="pink" @if($homeText[0]->color1=='pink') selected="selected" @endif>pink</option>
                                    
                                    <option value="inverse" @if($homeText[0]->color1=='inverse') selected="selected" @endif>inverse</option>
                                    
                                    <option value="orange" @if($homeText[0]->color1=='orange') selected="selected" @endif>orange</option>
                                    
                                    <option value="brown" @if($homeText[0]->color1=='brown') selected="selected" @endif>brown</option>
                                    
                                    <option value="teal" @if($homeText[0]->color1=='teal') selected="selected" @endif>teal</option>

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
                                    <option value="default"@if($homeText[0]->color2=='default') selected="selected" @endif>default</option>

                                    <option value="primary" @if($homeText[0]->color2=='primary') selected="selected" @endif>primary</option>
                                    
                                    <option value="success" @if($homeText[0]->color2=='success') selected="selected" @endif>success</option>
                                    
                                    <option value="info" @if($homeText[0]->color2=='info') selected="selected" @endif>info</option>
                                    
                                    <option value="warning" @if($homeText[0]->color2=='warning') selected="selected" @endif>warning</option>
                                    
                                    <option value="danger" @if($homeText[0]->color2=='danger') selected="selected" @endif>danger</option>
                                    
                                    <option value="purple" @if($homeText[0]->color2=='purple') selected="selected" @endif>purple</option>
                                    
                                    <option value="pink" @if($homeText[0]->color2=='pink') selected="selected" @endif>pink</option>
                                    
                                    <option value="inverse" @if($homeText[0]->color2=='inverse') selected="selected" @endif>inverse</option>
                                    
                                    <option value="orange" @if($homeText[0]->color2=='orange') selected="selected" @endif>orange</option>
                                    
                                    <option value="brown" @if($homeText[0]->color2=='brown') selected="selected" @endif>brown</option>
                                    
                                    <option value="teal" @if($homeText[0]->color2=='teal') selected="selected" @endif>teal</option>
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
                                    <option value="default"@if($homeText[0]->color3=='default') selected="selected" @endif>default</option>

                                    <option value="primary" @if($homeText[0]->color3=='primary') selected="selected" @endif>primary</option>
                                    
                                    <option value="success" @if($homeText[0]->color3=='success') selected="selected" @endif>success</option>
                                    
                                    <option value="info" @if($homeText[0]->color3=='info') selected="selected" @endif>info</option>
                                    
                                    <option value="warning" @if($homeText[0]->color3=='warning') selected="selected" @endif>warning</option>
                                    
                                    <option value="danger" @if($homeText[0]->color3=='danger') selected="selected" @endif>danger</option>
                                    
                                    <option value="purple" @if($homeText[0]->color3=='purple') selected="selected" @endif>purple</option>
                                    
                                    <option value="pink" @if($homeText[0]->color3=='pink') selected="selected" @endif>pink</option>
                                    
                                    <option value="inverse" @if($homeText[0]->color3=='inverse') selected="selected" @endif>inverse</option>
                                    
                                    <option value="orange" @if($homeText[0]->color3=='orange') selected="selected" @endif>orange</option>
                                    
                                    <option value="brown" @if($homeText[0]->color3=='brown') selected="selected" @endif>brown</option>
                                    
                                    <option value="teal" @if($homeText[0]->color3=='teal') selected="selected" @endif>teal</option>
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