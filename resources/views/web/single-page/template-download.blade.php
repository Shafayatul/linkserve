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


    	<div class="row">
    		<div class="col-sm-9">
				{!! $post->post_content !!}
    		</div>
    		<div class="col-sm-3">
    			<h3>Files to downlaod:</h3>
            	<?php $cnt = 1;?>
            	<ul>
            	@foreach ($files as $file)
                    <li class="text-center">
                        <a class="thumbnail downlaod-file" href="{{asset(Storage::url($file))}}" download>
                            <i class="fa fa-download" aria-hidden="true"></i> File - {{$cnt}}
                        </a>
                    </li>
                    <?php $cnt++;?>
                @endforeach
                </ul>
    		</div>
    	</div>


    </div>
</div>	

@endsection