
@extends('layouts.mainHome')
@section('content')
	<br><br><br><br>
	        <div class="row">
	            <div class="col-md-12">
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
			</div>
			<!-- end row -->
			<br><br>

			<div class="row">
			<div class="col-lg-12">
                <div class="panel panel-border panel-{{$homeText[0]->color1}}">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{$homeText[0]->heading1}}</h3>
                    </div>
                    <div class="panel-body">
                        <p>{{$homeText[0]->text1}}</p>
                    </div>
                </div>
            </div>
        	</div>

        	<div class="row">
			<div class="col-lg-6">
                <div class="panel panel-border panel-{{$homeText[0]->color2}}">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{$homeText[0]->heading2}}</h3>
                    </div>
                    <div class="panel-body">
                        <p>{{$homeText[0]->text2}}</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="panel panel-border panel-{{$homeText[0]->color3}}">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{$homeText[0]->heading3}}</h3>
                    </div>
                    <div class="panel-body">
                        <p>{{$homeText[0]->text3}}</p>
                    </div>
                </div>
            </div>
        	</div>

        	<div class="row port m-b-20">
                    <div class="portfolioContainer">
                        <div class="col-sm-6 col-md-4 natural personal">
                            <div class="thumb">
                                <a href="{{ asset('uploads/g1.jpg') }}" class="image-popup" title="Screenshot-1">
                                    <img src="{{ asset('uploads/g1.jpg') }}" class="thumb-img" alt="work-thumbnail">
                                </a>
                                <div class="gal-detail">
                                    <h4>Image</h4>
                                    <p class="text-muted">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, illo,
                                        iste itaque voluptas corrupti ratione reprehenderit magni similique.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 creative personal photography">
                            <div class="thumb">
                                <a href="{{ asset('uploads/g2.jpg') }}" class="image-popup" title="Screenshot-2">
                                    <img src="{{ asset('uploads/g2.jpg') }}" class="thumb-img" alt="work-thumbnail">
                                </a>
                                <div class="gal-detail">
                                    <h4>Image</h4>
                                    <p class="text-muted">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, illo,
                                        iste itaque voluptas corrupti ratione reprehenderit magni similique.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 natural creative">
                            <div class=" thumb">
                                <a href="{{ asset('uploads/g3.jpg') }}" class="image-popup" title="Screenshot-3">
                                    <img src="{{ asset('uploads/g3.jpg') }}" class="thumb-img" alt="work-thumbnail">
                                </a>
                                <div class="gal-detail">
                                    <h4>Image</h4>
                                    <p class="text-muted">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, illo,
                                        iste itaque voluptas corrupti ratione reprehenderit magni similique.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 personal photography">
                            <div class="thumb">
                                <a href="{{ asset('uploads/g4.jpg') }}" class="image-popup" title="Screenshot-4">
                                    <img src="{{ asset('uploads/g4.jpg') }}" class="thumb-img" alt="work-thumbnail">
                                </a>
                                <div class="gal-detail">
                                    <h4>Image</h4>
                                    <p class="text-muted">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, illo,
                                        iste itaque voluptas corrupti ratione reprehenderit magni similique.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 creative photography">
                            <div class="thumb">
                                <a href="{{ asset('uploads/g5.jpg') }}" class="image-popup" title="Screenshot-5">
                                    <img src="{{ asset('uploads/g5.jpg') }}" class="thumb-img" alt="work-thumbnail">
                                </a>
                                <div class="gal-detail">
                                    <h4>Image</h4>
                                    <p class="text-muted">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, illo,
                                        iste itaque voluptas corrupti ratione reprehenderit magni similique.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 natural photography">
                            <div class="thumb">
                                <a href="{{ asset('uploads/g6.jpg') }}" class="image-popup" title="Screenshot-6">
                                    <img src="{{ asset('uploads/g6.jpg') }}" class="thumb-img" alt="work-thumbnail">
                                </a>
                                <div class="gal-detail">
                                    <h4>Image</h4>
                                    <p class="text-muted">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, illo,
                                        iste itaque voluptas corrupti ratione reprehenderit magni similique.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 personal photography creative">
                            <div class="thumb">
                                <a href="{{ asset('uploads/g7.jpg') }}" class="image-popup" title="Screenshot-7">
                                    <img src="{{ asset('uploads/g7.jpg') }}" class="thumb-img" alt="work-thumbnail">
                                </a>
                                <div class="gal-detail">
                                    <h4>Image</h4>
                                    <p class="text-muted">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, illo,
                                        iste itaque voluptas corrupti ratione reprehenderit magni similique.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 creative photography natural">
                            <div class="thumb">
                                <a href="{{ asset('uploads/g8.jpg') }}" class="image-popup" title="Screenshot-8">
                                    <img src="{{ asset('uploads/g8.jpg') }}" class="thumb-img" alt="work-thumbnail">
                                </a>
                                <div class="gal-detail">
                                    <h4>Image</h4>
                                    <p class="text-muted">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, illo,
                                        iste itaque voluptas corrupti ratione reprehenderit magni similique.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 hidden-sm natural personal">
                            <div class="thumb">
                                <a href="{{ asset('uploads/g9.jpg') }}" class="image-popup" title="Screenshot-9">
                                    <img src="{{ asset('uploads/g9.jpg') }}" class="thumb-img" alt="work-thumbnail">
                                </a>
                                <div class="gal-detail">
                                    <h4>Image</h4>
                                    <p class="text-muted">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, illo,
                                        iste itaque voluptas corrupti ratione reprehenderit magni similique.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div><!-- end portfoliocontainer-->
                </div> <!-- End row -->


            <br><br>
@endsection