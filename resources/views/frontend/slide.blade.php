{{-- @extends('welcome')
@section('slide')
     --}}

<section id="slider"><!--slider-->

    <center>
    <div class="slide_view">
       
                <div id="myslide" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <?php $i=0; ?>
                        @foreach ($list_slide as $keysl => $slide )
                        <li data-target="#myslide" data-slide-to="{{$i}}"
                            @if ($i==0) {
                                class="active"
                            }
                            @endif

                        ></li>
                        <?php $i++ ?>
                        @endforeach
                    </ol>
                    
                    <div class="carousel-inner">
                        <?php $i=0; ?>
                        @foreach ($list_slide as $keysl => $slide )
                        <div 
                            @if ($i==0)
                                class="item active"
                            @else
                                class="item"
                            @endif
                        >
                        <?php $i++ ?> 
                            <img class="slide-image" src="public/uploads/products/{{$slide->banner_image}}"  alt="" />
                        </div>
                        
                        @endforeach
                    </div>
                    
                    <a class="left carousel-control" href="#myslide" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myslide" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

    </div>
</center>
</section><!--/slider-->
{{-- @endsection --}}