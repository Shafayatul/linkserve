@extends('web.master')
@section('content')  


<section class="google-maps" id="contact_detail">
  <div id="map" style="width:100%;height:400px"></div>
</section>


<section class="well1">
  <div class="container" id="submit_a_query">
    <h2 class="text-center">Submit A Query</h2>
    <form method="post" action="" class="mailform off2">
      	<div class="col-md-6">
            <div class="form-group">
              <label>Your Name:</label>
            	<input type="text" name="name" class="form-control" >
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <label>Email: </label>
              <input type="text" name="email" class="form-control" >
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
              <label>Message:</label>
              <textarea name="message" class="form-control"   rows="10"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="mfControls col-md-12">
              <button type="submit" class="btn">Sumbit comment</button>
            </div>
        </div>
    </form>
  </div>
</section>


<section class="well3" id="contact">
  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <h1>{{ $contact->post_title}}</h1>

        {!! $contact->post_content!!}

      </div>
    </div>
  </div>
</section>
@endsection



@section('custom_front_page_script')

<script type="text/javascript">


  function myMap() {
    var mapOptions = {
        center: new google.maps.LatLng(23.810332, 90.412518),
          zoom: 10,
          mapTypeId: google.maps.MapTypeId.HYBRID
      }
  var map = new google.maps.Map(document.getElementById("map"), mapOptions);
  }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxSO2gg8cR-MBYmzUOFp0fHz6hlo2VZ_4&callback=myMap"></script>
@stop