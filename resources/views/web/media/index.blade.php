@extends('web.master')
@section('content')  
<section class="well1 ins2 mobile-center">
  <div class="container">
    <h2 style="text-transform: uppercase;">{{str_replace("_"," ",$type)}} :</h2>
    <hr>
    <br><br>
	
    <?php $cnt=0;?>
    @foreach($posts as $post)
      @if($cnt%3==0)
        <div class="row ">
      @endif

        <div class="col-sm-4 custom_blank_space">
          @if ($post->preview_image != "")
          <img src="{{asset(Storage::url($post->preview_image))}}" alt="">
          @endif
          <h3>{{$post->post_title}}</h3>
          <p class="text-justify">
            {!! substr($post->post_content, 0, 200) !!}
            @if(strlen($post->post_content) >200)
              ...
            @endif
          </p><a href="{!! url('single/'.$post->id) !!}" class="btn ">Read more</a>
        </div>

      <?php $cnt++;?>
      @if(($cnt%3==0) && (!$loop->last))
        </div>
        <hr class="hide_in_mobile">
      @elseif(($cnt%3 != 0) && ($loop->last))
        </div>
      @endif
      
    @endforeach


    <div class="text-center">
    {!! $posts->links(); !!}
    </div>



  </div>
</section>				

@endsection


@section('custom_front_page_script')
<script type="text/javascript">

  $(document).ready(function(){

     if ($(window).width() < 768){
      $(".hide_in_mobile").hide();
      $(".custom_blank_space").append("<hr>");

     }

  });  

</script>



@stop