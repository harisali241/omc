<br><br><br><br>
<div class="row">
    <div class="col-md-12">
        <!-- START carousel-->
<div id="carousel-example-captions" data-ride="carousel" class="carousel slide">
    <ol class="carousel-indicators">
            @php $i=0; @endphp
        @foreach($carousel as $caro)
        <li data-target="#carousel-example-captions" data-slide-to="{!!$i!!}" class="@if($caro->sort_order == 1) active @endif"></li>
            @php $i++; @endphp
        @endforeach
    </ol>
    <div role="listbox" class="carousel-inner" >
        @foreach($carousel as $caro)
        <div class="item @if($caro->sort_order == 1) active @endif">
            <img src="{{asset('uploads/carousel/'.$caro->carousel_image)}}" style="width:100% !important;" alt="First slide image">
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