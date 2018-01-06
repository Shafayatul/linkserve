@extends('web.master')
@section('content')  


<style type="text/css">
	.hide-bullets {
	    list-style:none;
	    margin-left: -40px;
	    margin-top:20px;
	}

	.thumbnail {
	    padding: 0;
	}

	.carousel-inner>.item>img, .carousel-inner>.item>a>img {
	    width: 100%;
	}	
</style>
<?php
	$files = explode(",",$post->files);
?>



<div class="container">
    <div id="main_area">

    	<div class="row">
    		<div class="col-sm-12">
		      <br><br>
		      <h2 class="text-center">{{$post->post_title}}</h2>
		      <br><br>    			
    		</div>
    	</div>


        <!-- Slider -->
        <div class="row">
            <div class="col-sm-6" id="slider-thumbs">
                <!-- Bottom switcher of slider -->
                <ul class="hide-bullets">
                	<?php $cnt = 0;?>
                	@foreach ($files as $file)
	                    <li class="col-sm-3">
	                        <a class="thumbnail" id="carousel-selector-{{$cnt}}">
	                            <img src="{{asset(Storage::url($file))}}">
	                        </a>
	                    </li>
	                    <?php $cnt++;?>
                    @endforeach
                </ul>
            </div>
            <div class="col-sm-6">
                <div class="col-xs-12" id="slider">
                    <!-- Top part of the slider -->
                    <div class="row">
                        <div class="col-sm-12" id="carousel-bounding-box">
                            <div class="carousel slide" id="myCarousel">
                                <!-- Carousel items -->
                                <div class="carousel-inner">
                                	<?php 
	                                	$cnt = 0;
	                                	$active = "active";
                                	?>
                                	@foreach ($files as $file)
                                    <div class="{{$active}} item" data-slide-number="{{$cnt}}">
                                        <img src="{{asset(Storage::url($file))}}">
                                    </div>
					                    <?php $cnt++;$active="";?>
				                    @endforeach                                    
                                </div>
                                <!-- Carousel nav -->
                                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/Slider-->
        </div>


        <div class="row">
        	<div class="col-sm-12">
        		<br>
				{!! $post->post_content !!}
				<br>        		
        	</div>
        </div>

    </div>
</div>	

@endsection




@section("custom_front_page_script")

	<script type="text/javascript">
		jQuery(document).ready(function($) {

		    $('#myCarousel').carousel({
		            interval: 5000
		    });

		    //Handles the carousel thumbnails
		    $('[id^=carousel-selector-]').click(function () {
		    var id_selector = $(this).attr("id");
		    try {
		        var id = /-(\d+)$/.exec(id_selector)[1];
		        console.log(id_selector, id);
		        jQuery('#myCarousel').carousel(parseInt(id));
		    } catch (e) {
		        console.log('Regex failed!', e);
		    }
		});
		    // When the carousel slides, auto update the text
		    $('#myCarousel').on('slid.bs.carousel', function (e) {
		             var id = $('.item.active').data('slide-number');
		            $('#carousel-text').html($('#slide-content-'+id).html());
		    });
		});	
	</script>

@stop