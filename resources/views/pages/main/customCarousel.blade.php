@extends('layouts.customHome')

@section('customContent')
	

<div class="card-box">

<h3>Carousel</h3>
<hr>

	<div class="row">
		<div class="col-md-4"></div>
        <div class="col-md-4">
            <!-- START carousel-->
            <div id="carousel-example-captions" data-ride="carousel" class="carousel slide">
                <ol class="carousel-indicators">
                    @foreach($carousel as $caro)
                    <li data-target="#carousel-example-captions" data-slide-to="{{$caro->sort_order}}" class="@if($caro->sort_order == 1) active @endif"></li>
                    @endforeach
                </ol>
                <div role="listbox" class="carousel-inner">
                    @foreach($carousel as $caro)
                    <div class="item @if($caro->sort_order == 1) active @endif">
                        <img src="{{asset('uploads/carousel/'.$caro->carousel_image)}}" style="width:100%!important;" alt="First slide image">
                        <div class="carousel-caption">
                            <h3 class="text-white font-600">{{$caro->carousel_label}}</h3>
                            <p>
                                {{$caro->carousel_text}}
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <a href="#carousel-example-captions" role="button" data-slide="prev" class="left carousel-control"> <span aria-hidden="true" class="fa fa-angle-left"></span> <span class="sr-only">Previous</span> </a>
                <a href="#carousel-example-captions" role="button" data-slide="next" class="right carousel-control"> <span aria-hidden="true" class="fa fa-angle-right"></span> <span class="sr-only">Next</span> </a>
            </div>
            <!-- END carousel-->
        </div>  
        <div class="col-md-4"></div>         
	</div>
	<!-- end row -->
	<hr>

	
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Upload Image</h3>
				</div>
				<div class="panel-body">
					<ul class="nav nav-pills m-b-30 pull-left">
						<li class="active">
							<a href="#nite1" data-toggle="tab" aria-expanded="true">One</a>
						</li>
						<li class="">
							<a href="#nite2" data-toggle="tab" aria-expanded="true">Two</a>
						</li>
						<li class="">
							<a href="#nite3" data-toggle="tab" aria-expanded="true">Three</a>
						</li>
						<li class="">
							<a href="#nite4" data-toggle="tab" aria-expanded="true">Four</a>
						</li>
						<li class="">
							<a href="#nite5" data-toggle="tab" aria-expanded="true">Five</a>
						</li>
						<li class="">
							<a href="#nite6" data-toggle="tab" aria-expanded="true">Six</a>
						</li>
						<li class="">
							<a href="#nite7" data-toggle="tab" aria-expanded="true">Seven</a>
						</li>
						<li class="">
							<a href="#nite8" data-toggle="tab" aria-expanded="true">Eight</a>
						</li>
						<li class="">
							<a href="#nite9" data-toggle="tab" aria-expanded="true">Nine</a>
						</li>
					</ul>
					<div class="tab-content br-n pn">
						@foreach($carousels as $caro)
						<div id="nite{{$caro->sort_order}}" class="tab-pane @if($caro->sort_order == 1) active @endif">
							<div class="row">

                            <form class="form-horizontal" role="form" action="{{ route('carousel.store')}}" method="POST" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <input type="hidden" name="sort_order" value="{{$caro->sort_order}}">
								<div class="col-md-10 col-sm-8">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Label</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" value="" name="carousel_label" placeholder="{{$caro->carousel_label}}">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Text area</label>
                                        <div class="col-md-10">
                                            <textarea id="textarea" class="form-control" maxlength="50" rows="3" placeholder="{{$caro->carousel_text}}" name="carousel_text" ></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Image<span class="text-danger">*</span></label>
                                        <div class="col-md-10">
                                        	<input type="file" class="filestyle" data-placeholder="{{$caro->carousel_image}}" name="carousel_image">
                                            <p class="text-muted m-b-30 font-13">
                                                Only allow image dimensions (with=1600,hight=800), format (jpeg, png), max.size(2mpx).
                                            </p>
                                        </div>
                                    </div>
                                    @if( $caro->sort_order == 1) 
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Active</label>
                                            <div class="col-md-10">
                                            <p class="text-success font-17 m-t-5" style="cursor:pointer;">
                                                Always active
                                            </p>
                                            </div>
                                        </div>
                                    @else
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Active</label>
                                            <input type="checkbox" id="switch{{$caro->sort_order}}" switch="bool" name="status" />
                                            <label for="switch{{$caro->sort_order}}" data-on-label="Yes" data-off-label="No"></label>
                                        </div>
                                    @endif
                                    
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-default waves-effect" style="float:right;margin-top:-25px;">Done</button>
                                    </div>
								</div>
								<div class="col-md-2 col-sm-4">
									<img src="{{ asset('uploads/carousel/'.$caro->carousel_image) }}" class="img-responsive thumbnail m-r-15" width="100%;" name="carousel_image">
								</div>

                            </form>

							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
        <!-- end col -->
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

            @foreach($carousels as $caro)

                if( {{$caro->active}} == 1) {
                     $("#switch{{$caro->sort_order}}").prop("checked","checked");
                }else{
                     $("#switch{{$caro->sort_order}}").removeAttr("checked");
                }
               
            @endforeach

        });


    </script>




@endsection