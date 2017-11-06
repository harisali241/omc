@extends('layouts.customHome')
@section('customContent')

<div class="card-box">
	<h3>About Us</h3>
	<hr>

	<form class="form-horizontal" role="form" action="{{ route('about.store') }}" method="POST" enctype="multipart/form-data">
		{{csrf_field()}}
		<div class="form-group">
	        <label class="col-md-2 control-label">Heading :</label>
	        <div class="col-md-6">
	            <input type="text" class="form-control" value="{{$about->heading}}" name="heading">
	        </div>
	    </div>

	    <div class="form-group">
	    
	    <!-- end row -->
			<div class="row">
				<div class="col-sm-12">
					<div class="card-box">
						<textarea id="elm1" name="area">{{ $about->area }}</textarea>
					</div>
				</div>
			</div>
	    <!-- End row -->

        </div>


        <div class="form-group row">
        	<div class="col-xs-12">
            	<button type="submit" class="btn btn-default waves-effect" style="margin-left:20px;">Save</button>
        	</div>
        </div>
			
	</form>

</div>

@endsection

@section('customScripts')

	<!--Wysiwig js-->
    <script src="{{asset('assets/plugins/tinymce/tinymce.min.js')}}"></script>

    <script type="text/javascript">
    	$(document).ready(function () {
		    if($("#elm1").length > 0){
		        tinymce.init({
		            selector: "textarea#elm1",
		            theme: "modern",
		            height:300,
		            plugins: [
		                "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
		                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
		                "save table contextmenu directionality emoticons template paste textcolor"
		            ],
		            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
		            style_formats: [
		                {title: 'Bold text', inline: 'b'},
		                {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
		                {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
		                {title: 'Example 1', inline: 'span', classes: 'example1'},
		                {title: 'Example 2', inline: 'span', classes: 'example2'},
		                {title: 'Table styles'},
		                {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
		            ]
		        });
		    }
		});
    </script>

@endsection