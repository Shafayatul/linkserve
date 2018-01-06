@extends('web.master')
@section('content')  
<section class="well1 ins2 mobile-center">
  <div class="container">

    <div class="col-sm-12" id="f__guarantees_warranties">


      <br><br>
      <h2>{{$f__guarantees_warranties->post_title}}</h2>
      <br><br>
      @if ($f__guarantees_warranties->preview_image != "")
      <img  class="img-responsive" src="{{asset(Storage::url($f__guarantees_warranties->preview_image))}}" alt="">
      @endif
      {{-- <p class="text-justify"> --}}
        {!! $f__guarantees_warranties->post_content !!}

      {{-- </p> --}}
    </div>

    <br>
    <hr>
    <br>

    <div class="col-sm-12" id="f__goods_return_policy">
      <h2>{{$f__goods_return_policy->post_title}}</h2>
      <br><br>
      @if ($f__goods_return_policy->preview_image != "")
      <img  class="img-responsive" src="{{asset(Storage::url($f__goods_return_policy->preview_image))}}" alt="">
      @endif
      {{-- <p class="text-justify"> --}}
        {!! $f__goods_return_policy->post_content !!}

      {{-- </p> --}}
    </div>

    <br>
    <hr>
    <br>

    <div class="col-sm-12" id="f__career">
      <h2>{{$f__career->post_title}}</h2>
      <br><br>
      @if ($f__career->preview_image != "")
      <img  class="img-responsive" src="{{asset(Storage::url($f__career->preview_image))}}" alt="">
      @endif
      {{-- <p class="text-justify"> --}}
        {!! $f__career->post_content !!}

      {{-- </p> --}}
    </div>

    <br>
    <hr>
    <br>

    <div class="col-sm-12" id="f__job_opportunities">
      <h2>{{$f__job_opportunities->post_title}}</h2>
      <br><br>
      @if ($f__job_opportunities->preview_image != "")
      <img  class="img-responsive" src="{{asset(Storage::url($f__job_opportunities->preview_image))}}" alt="">
      @endif
      {{-- <p class="text-justify"> --}}
        {!! $f__job_opportunities->post_content !!}

      {{-- </p> --}}
    </div>



  </div>
</section>				

@endsection