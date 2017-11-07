@extends('layouts.mainHome')
@section('content')

	<br><br>

    <h3>PRODUCTS</h3>

    <hr>

    <div class="card-box">

    <!-- SECTION FILTER
    ================================================== -->

        <div class=" port m-b-20">
            <div class="portfolioContainer">
                    @php $i=1; @endphp
                @foreach($products as $product)
                 @if($i / 3 == 0) <div class="row"> @endif
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
                 @if($i / 3 == 0) </div> @endif
                        @php $i++; @endphp
                @endforeach

            </div><!-- end portfoliocontainer-->
        </div> <!-- End row -->


	</div>
@endsection

@section('scripts')

        <!-- isotope filter plugin -->
        <script type="text/javascript" src="{{ asset('assets/plugins/isotope/js/isotope.pkgd.min.js')}}"></script>

        <!-- Magnific popup -->
        <script type="text/javascript" src="{{ asset('assets/plugins/magnific-popup/js/jquery.magnific-popup.min.js')}}"></script>


        <script type="text/javascript">
            $(window).load(function(){
                var $container = $('.portfolioContainer');
                $container.isotope({
                    filter: '*',
                    animationOptions: {
                        duration: 750,
                        easing: 'linear',
                        queue: false
                    }
                });

                $('.portfolioFilter a').click(function(){
                    $('.portfolioFilter .current').removeClass('current');
                    $(this).addClass('current');

                    var selector = $(this).attr('data-filter');
                    $container.isotope({
                        filter: selector,
                        animationOptions: {
                            duration: 750,
                            easing: 'linear',
                            queue: false
                        }
                    });
                    return false;
                });
            });
            $(document).ready(function() {
                $('.image-popup').magnificPopup({
                    type: 'image',
                    closeOnContentClick: true,
                    mainClass: 'mfp-fade',
                    gallery: {
                        enabled: true,
                        navigateByImgClick: true,
                        preload: [0,1] // Will preload 0 - before current, and 1 after the current image
                    }
                });
            });
        </script>


@endsection