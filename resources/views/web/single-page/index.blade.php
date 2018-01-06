@extends('web.master')
@section('content')  
<section class="well1 ins2 mobile-center">
  <div class="container">

    <div class="col-sm-12 custom_blank_space">
      <br><br>
      <h2>{{$post->post_title}}</h2>
      <br><br>

      @if ($post->preview_image != "")
        <img  class="img-responsive" src="{{asset(Storage::url($post->preview_image))}}" alt="">
      @endif

      {{-- <p class="text-justify"> --}}
        {!! $post->post_content !!}

      {{-- </p> --}}
    </div>

  </div>
</section>				

@endsection