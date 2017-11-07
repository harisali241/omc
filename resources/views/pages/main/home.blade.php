
@extends('layouts.mainHome')
@section('content')

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
            <br>

            <h3>Our Products</h3>
            <hr>

            <div class="card-box">

        	<div class="row port m-b-20">
                <div class="portfolioContainer">
                        @php $i=1; @endphp
                    @foreach($products as $product)

                        <div class="col-sm-6 col-md-4 natural personal">
                            <div class="thumb">
                                <a href="{{ asset('uploads/product/'.$product->product_image) }}" class="image-popup" title="Screenshot-{!!$i!!}">
                                    <img src="{{ asset('uploads/product/'.$product->product_image) }}" class="thumb-img" alt="work-thumbnail">
                                </a>
                                <div class="gal-detail">
                                    <h4>{{$product->product_name}}</h4>
                                    <p class="text-muted">
                                        {{$product->product_detail}}
                                    </p>
                                </div>
                            </div>
                        </div>
                            @php $i++; @endphp
                    @endforeach

                </div><!-- end portfoliocontainer-->
            </div> <!-- End row -->

            </div>
            <br><br>
@endsection