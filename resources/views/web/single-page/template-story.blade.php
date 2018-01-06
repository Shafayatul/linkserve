@extends('web.master')
@section('content')  
<section class="well1 ins2 mobile-center">
  <div class="container">

    <div class="col-sm-12" id="male_shop">


      <br><br>
      <h2>{{$male_shop->post_title}}</h2>
      <br><br>
      @if ($male_shop->preview_image != "")
      <img  class="img-responsive" src="{{asset(Storage::url($male_shop->preview_image))}}" alt="">
      @endif
      {{-- <p class="text-justify"> --}}
        {!! $male_shop->post_content !!}

      {{-- </p> --}}
    </div>

    <br>
    <hr>
    <br>

    <div class="col-sm-12" id="Hulhumale">
      <h2>{{$Hulhumale->post_title}}</h2>
      <br><br>
      @if ($Hulhumale->preview_image != "")
      <img  class="img-responsive" src="{{asset(Storage::url($Hulhumale->preview_image))}}" alt="">
      @endif
      {{-- <p class="text-justify"> --}}
        {!! $Hulhumale->post_content !!}

      {{-- </p> --}}
    </div>

    <br>
    <hr>
    <br>

    <div class="col-sm-12" id="Kulhudhuffushi">
      <h2>{{$Kulhudhuffushi->post_title}}</h2>
      <br><br>
      @if ($Kulhudhuffushi->preview_image != "")
      <img  class="img-responsive" src="{{asset(Storage::url($Kulhudhuffushi->preview_image))}}" alt="">
      @endif
      {{-- <p class="text-justify"> --}}
        {!! $Kulhudhuffushi->post_content !!}

      {{-- </p> --}}
    </div>

    <br>
    <hr>
    <br>

    <div class="col-sm-12" id="addu_city">
      <h2>{{$addu_city->post_title}}</h2>
      <br><br>
      @if ($addu_city->preview_image != "")
      <img  class="img-responsive" src="{{asset(Storage::url($addu_city->preview_image))}}" alt="">
      @endif
      {{-- <p class="text-justify"> --}}
        {!! $addu_city->post_content !!}

      {{-- </p> --}}
    </div>



  </div>
</section>				

@endsection