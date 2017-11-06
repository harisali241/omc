
@extends('layouts.mainHome')
@section('content')
	<br><br><br><br>
	        
            @include('includes.carousel')


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
                        @php $i=1; @endphp
                    @foreach($homeImages as $homeImage)

                        <div class="col-sm-6 col-md-4 natural personal">
                            <div class="thumb">
                                <a href="{{ asset('uploads/homeImages/'.$homeImage->image_name) }}" class="image-popup" title="Screenshot-{!!$i!!}">
                                    <img src="{{ asset('uploads/homeImages/'.$homeImage->image_name) }}" class="thumb-img" alt="work-thumbnail">
                                </a>
                                <div class="gal-detail">
                                    <h4>{{$homeImage->heading}}</h4>
                                    <p class="text-muted">
                                        {{$homeImage->textarea}}
                                    </p>
                                </div>
                            </div>
                        </div>
                            @php $i++; @endphp
                    @endforeach

                </div><!-- end portfoliocontainer-->
            </div> <!-- End row -->


            <br><br>
@endsection