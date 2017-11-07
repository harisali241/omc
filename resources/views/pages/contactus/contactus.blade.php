@extends('layouts.mainHome')

@section('content')

	<br><br>

	<h3>{{ $contact->heading }}</h3>
	<hr>
	<br>
	

	<div class="row">

		{!! $contact->area !!}

	</div>


	<br><br>

@endsection