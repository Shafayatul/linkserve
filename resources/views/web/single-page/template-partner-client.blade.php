@extends('web.master')
@section('content')  
<section class="well1 ins2 mobile-center">
  <div class="container">

    <div class="col-sm-12" id="partners">


      <br><br>
      <h2>{{$partners->post_title}}</h2>
      <br><br>
      @if ($partners->preview_image != "")
      <img  class="img-responsive" src="{{asset(Storage::url($partners->preview_image))}}" alt="">
      @endif
      {{-- <p class="text-justify"> --}}
        {!! $partners->post_content !!}

      {{-- </p> --}}
    </div>

    <br>
    <hr>
    <br>

    <div class="col-sm-12" id="clients">
      <h2>{{$clients->post_title}}</h2>
      <br><br>
      @if ($clients->preview_image != "")
      <img  class="img-responsive" src="{{asset(Storage::url($clients->preview_image))}}" alt="">
      @endif
      {{-- <p class="text-justify"> --}}
        {!! $clients->post_content !!}

      {{-- </p> --}}
    </div>



  </div>
</section>				

@endsection