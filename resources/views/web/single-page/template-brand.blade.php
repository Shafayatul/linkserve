@extends('web.master')
@section('content')  
<section class="well1 ins2 mobile-center">
  <div class="container">

    <div class="col-sm-12" id="corporate_brand">


      <br><br>
      <h2>{{$corporate_brand->post_title}}</h2>
      <br><br>
      @if ($corporate_brand->preview_image != "")
      <img  class="img-responsive" src="{{asset(Storage::url($corporate_brand->preview_image))}}" alt="">
      @endif
      {{-- <p class="text-justify"> --}}
        {!! $corporate_brand->post_content !!}

      {{-- </p> --}}
    </div>

    <br>
    <hr>
    <br>

    <div class="col-sm-12" id="product_brands">
      <h2>{{$product_brands->post_title}}</h2>
      <br><br>
      @if ($product_brands->preview_image != "")
      <img  class="img-responsive" src="{{asset(Storage::url($product_brands->preview_image))}}" alt="">
      @endif
      {{-- <p class="text-justify"> --}}
        {!! $product_brands->post_content !!}

      {{-- </p> --}}
    </div>


  </div>
</section>				

@endsection