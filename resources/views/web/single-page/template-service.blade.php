@extends('web.master')
@section('content')  
<section class="well1 ins2 mobile-center">
  <div class="container">

    <div class="col-sm-12" id="f__sla">


      <br><br>
      <h2>{{$f__sla->post_title}}</h2>
      <br><br>
      @if ($f__sla->preview_image != "")
      <img  class="img-responsive" src="{{asset(Storage::url($f__sla->preview_image))}}" alt="">
      @endif
      {{-- <p class="text-justify"> --}}
        {!! $f__sla->post_content !!}

      {{-- </p> --}}
    </div>

    <br>
    <hr>
    <br>

    <div class="col-sm-12" id="f__island">
      <h2>{{$f__island->post_title}}</h2>
      <br><br>
      @if ($f__island->preview_image != "")
      <img  class="img-responsive" src="{{asset(Storage::url($f__island->preview_image))}}" alt="">
      @endif
      {{-- <p class="text-justify"> --}}
        {!! $f__island->post_content !!}

      {{-- </p> --}}
    </div>

    <br>
    <hr>
    <br>

    <div class="col-sm-12" id="f__hotel_resort_customer">
      <h2>{{$f__hotel_resort_customer->post_title}}</h2>
      <br><br>
      @if ($f__hotel_resort_customer->preview_image != "")
      <img  class="img-responsive" src="{{asset(Storage::url($f__hotel_resort_customer->preview_image))}}" alt="">
      @endif
      {{-- <p class="text-justify"> --}}
        {!! $f__hotel_resort_customer->post_content !!}

      {{-- </p> --}}
    </div>

    <br>
    <hr>
    <br>

    <div class="col-sm-12" id="f__government_customer">
      <h2>{{$f__government_customer->post_title}}</h2>
      <br><br>
      @if ($f__government_customer->preview_image != "")
      <img  class="img-responsive" src="{{asset(Storage::url($f__government_customer->preview_image))}}" alt="">
      @endif
      {{-- <p class="text-justify"> --}}
        {!! $f__government_customer->post_content !!}

      {{-- </p> --}}
    </div>

   
    <br>
    <hr>
    <br>

    <div class="col-sm-12" id="f__wholesale">
      <h2>{{$f__wholesale->post_title}}</h2>
      <br><br>
      @if ($f__wholesale->preview_image != "")
      <img  class="img-responsive" src="{{asset(Storage::url($f__wholesale->preview_image))}}" alt="">
      @endif
      {{-- <p class="text-justify"> --}}
        {!! $f__wholesale->post_content !!}

      {{-- </p> --}}
    </div>


   
    <br>
    <hr>
    <br>

    <div class="col-sm-12" id="f__retail">
      <h2>{{$f__retail->post_title}}</h2>
      <br><br>
      @if ($f__retail->preview_image != "")
      <img  class="img-responsive" src="{{asset(Storage::url($f__retail->preview_image))}}" alt="">
      @endif
      {{-- <p class="text-justify"> --}}
        {!! $f__retail->post_content !!}

      {{-- </p> --}}
    </div>



  </div>
</section>				

@endsection