@extends('layouts.mainHome')

@section('content')

	@include('includes.carousel')

	<br><br>

	<h3>{{ $about->heading }}</h3>
	<hr>
	<br>
	

	<div class="row">

		{!! $about->area !!}

	</div>


	<br><br>

@endsection