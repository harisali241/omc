@extends('layouts.customHome')
@section('customContent')

<div class="card-box">
	<h3>Categories</h3>
	<hr>

	<div class="row">
		<div class="col-xs-12">
			<div class="demo-box">
				<table class="table table-striped m-0 table-bordered">
					<thead>
						<tr>
							<th>No.</th>
							<th>Category Name</th>
							<th>Active</th>
						</tr>
					</thead>
					<tbody>@php $i=1; @endphp
					@foreach($category as $cate)
						<tr>
							<th scope="row">{{$i}}</th>
							<td>{{$cate->category_name}}</td>
							<form method="POST" action="{{url('category/'.$cate->id)}}">
								{{csrf_field()}}
								{{ method_field('DELETE') }}
							<td>
                                <button type="submit" class="btn-danger"><i class="fa fa-trash-o"></i></button>
							</td>
						</tr>
						@php $i++; @endphp
					@endforeach
					</tbody>
				</table>
			</div>

		</div>
	</div>
    <!--- end row -->

	

</div>

@endsection

@section('customScripts')

	<!-- Examples -->
    <script src="{{ asset('assets/plugins/magnific-popup/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-datatables-editable/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('assets/plugins/tiny-editable/mindmup-editabletable.js') }}"></script>
    <script src="{{ asset('assets/plugins/tiny-editable/numeric-input-example.js') }}"></script>

@endsection