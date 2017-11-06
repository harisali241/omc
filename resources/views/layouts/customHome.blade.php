<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:700" rel="stylesheet"> 
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

	<title>O.M.C</title>

	    <link rel="stylesheet" href="{{ asset('assets/plugins/morris/morris.css') }}">

        <!-- Plugins css-->
        <link href="{{ asset('assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/plugins/multiselect/css/multi-select.css') }}"  rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/plugins/bootstrap-select/css/bootstrap-select.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css') }}" rel="stylesheet" />

        <!-- Tooltipster css -->
        <link rel="stylesheet" href="{{ asset('assets/plugins/tooltipster/tooltipster.bundle.min.css') }}">

         <!-- Summernote css -->
        <link href="{{ asset('assets/plugins/summernote/summernote.css') }}" rel="stylesheet" />

        <!-- Jquery filer css -->
        <link href="{{ asset('assets/plugins/jquery.filer/css/jquery.filer.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/plugins/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css') }}" rel="stylesheet" />


        <link href="{{ asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="{{ asset('c_assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('c_assets/css/core.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('c_assets/css/components.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('c_assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('c_assets/css/pages.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('c_assets/css/menu.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('c_assets/css/responsive.css') }}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="{{ asset('assets/plugins/switchery/switchery.min.css') }}">

        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="{{ asset('c_assets/js/modernizr.min.js') }}"></script>

<!-- <style type="text/css">
			.href-color a{
				color:rgb(73, 73, 73) !important;
			}
			.href-color i{
				color:rgb(73, 73, 73) !important;
			}
		</style> -->

</head>
<body class="fixed-left">

<!-- Begin page -->
    <div id="wrapper">

        @include('layouts.success')
        @include('layouts.error')

        <!-- Top Bar Start -->
        <div class="topbar">
        <!-- End Navigation Bar-->
            @include('includes.customHeader')

        </div>

            @include('includes.customMenu')


        <div class="content-page" style="margin-top: 30px;">
            <div class="content">

            <div id="error-box">
                @include('layouts.error')
                @include('layouts.success')
            </div>


            @yield('customContent')

		    @include('includes.footer') 

            </div>
		</div>
	

    </div>
        <script>
            var resizefunc = [];
        </script>

       <!-- jQuery  -->
        <script src="{{ asset('c_assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('c_assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('c_assets/js/detect.js') }}"></script>
        <script src="{{ asset('c_assets/js/fastclick.js') }}"></script>
        <script src="{{ asset('c_assets/js/jquery.blockUI.js') }}"></script>
        <script src="{{ asset('c_assets/js/waves.js') }}"></script>
        <script src="{{ asset('c_assets/js/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('c_assets/js/jquery.scrollTo.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/switchery/switchery.min.js') }}"></script>

        <!-- Tooltipster js -->
        <script src="{{ asset('assets/plugins/tooltipster/tooltipster.bundle.min.js') }}"></script>
        <script src="{{ asset('c_assets/pages/jquery.tooltipster.js') }}"></script>


        @yield('customScripts')

        <!-- App js -->
        <script src="{{ asset('c_assets/js/jquery.core.js') }}"></script>
        <script src="{{ asset('c_assets/js/jquery.app.js') }}"></script>

</body>
</html>