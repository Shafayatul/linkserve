@extends('web.master')
@section('content')  
<section class="well1 ins2 mobile-center">
  <div class="container">

    <div class="row">
      <div class="col-sm-12" id="about_us">

        <br><br>
        <h2>{{$about_us->post_title}}</h2>
        <br><br>
        @if ($about_us->preview_image != "")
        <img  class="img-responsive" src="{{asset(Storage::url($about_us->preview_image))}}" alt="">
        @endif
        {{-- <p class="text-justify"> --}}
          {!! $about_us->post_content !!}

        {{-- </p> --}}
      </div>

      <br>
      <hr>
      <br>

      <div class="col-sm-12" id="mission">
        <h2>{{$mission->post_title}}</h2>
        <br><br>
        @if ($mission->preview_image != "")
        <img  class="img-responsive" src="{{asset(Storage::url($mission->preview_image))}}" alt="">
        @endif
        {{-- <p class="text-justify"> --}}
          {!! $mission->post_content !!}

        {{-- </p> --}}
      </div>

      <br>
      <hr>
      <br>

      <div class="col-sm-12" id="vision">
        <h2>{{$vision->post_title}}</h2>
        <br><br>
        @if ($vision->preview_image != "")
        <img  class="img-responsive" src="{{asset(Storage::url($vision->preview_image))}}" alt="">
        @endif
        {{-- <p class="text-justify"> --}}
          {!! $vision->post_content !!}

        {{-- </p> --}}
      </div>

      <br>
      <hr>
      <br>

      <div class="col-sm-12" id="values">
        <h2>{{$values->post_title}}</h2>
        <br><br>
        @if ($values->preview_image != "")
        <img  class="img-responsive" src="{{asset(Storage::url($values->preview_image))}}" alt="">
        @endif
        {{-- <p class="text-justify"> --}}
          {!! $values->post_content !!}

        {{-- </p> --}}
      </div>

     
      <br>
      <hr>
      <br>

      <div class="col-sm-12" id="our_team">
        <h2>{{$our_team->post_title}}</h2>
        <br><br>
        @if ($our_team->preview_image != "")
        <img  class="img-responsive" src="{{asset(Storage::url($our_team->preview_image))}}" alt="">
        @endif
        {{-- <p class="text-justify"> --}}
          {!! $our_team->post_content !!}

        {{-- </p> --}}
      </div>



    </div>
  </div>
</section>				

@endsection