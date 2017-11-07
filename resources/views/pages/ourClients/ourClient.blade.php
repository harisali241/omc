@extends('layouts.mainHome')
@section('content')

	<br><br>

    <h3>OUR CLIENTS</h3>

    <hr>

	<div class="row">
        
        @foreach($clients as $client)

        <div class="col-xs-4 col-sm-3 col-md-2">
            <div class="card-box" style="padding: 5px 5px 5px 5px ; border-radius: 10px;">
                <img src="{{ asset('uploads/client/'.$client->client_image) }}" alt="image" class="img-responsive" style="border-radius: 10px;" />
            </div>
        </div>

        @endforeach

    </div>



    <br><br>
@endsection