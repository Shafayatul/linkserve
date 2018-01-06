<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <link rel="icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">

  <script src="{{ URL::asset('js_front/jquery.js')}}"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <link rel="stylesheet" href="{{ URL::asset('css_front/grid.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('css_front/style.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('css_front/camera.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('css_front/owl-carousel.css')}}">

    <script src="{{ URL::asset('js_front/jquery-migrate-1.2.1.js')}}"></script><!--[if lt IE 9]>
    <html class="lt-ie9">
      <div style="clear: both; text-align:center; position: relative;">
      <a href="http://windows.microsoft.com/en-US/internet-explorer/.."><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    </html>
    <script src="{{ URL::asset('js_front/html5shiv.js')}}"></script><![endif]-->
    <script src="{{ URL::asset('js_front/device.min.js')}}"></script>

    <script src="{{ URL::asset('js_front/custom.js')}}"></script>
  </head>
  <body>

    {{-- FACEBOOK SDK CODE --}}
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.11';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>



    <div class="page">
      <!--
      ========================================================
      							HEADER
      ========================================================
      
      
    -->
    <header>
      <div class="container">

        <div class="row">
          <div class="col-sm-6">
            <div class="brand">
              <h1 class="brand_name">
                <a href="{!! url('/'); !!}"><img src="{{asset('images_front/Company-Logo.png')}}" alt="Link Serve" style="float:left;width:320px;height:auto;"></a>
              </h1>
            </div>              
          </div>
          <div class="col-sm-6 text-right">

            <a href=""><img class="lang_flag" src="{{asset('images_front/maldives.png')}}"> </a>
            <span id="lang_slash">/</span> 
            <a href=""><img class="lang_flag" src="{{asset('images_front/usa.png')}}"></a>

            <br>
            <div class="row">
              <div class="col-sm-8 col-xs-6">
                <a href="{{ $facebook }}"><span class="fa fa-facebook fa-2x" style="color:skyblue;"></span></a>&nbsp;&nbsp;&nbsp;
                <a href="{{ $twitter }}"><span class="fa fa-twitter fa-2x" style="color:skyblue;"></span></a>&nbsp;&nbsp;&nbsp;
                <a href="{{ $instagram }}"><span class="fa-instagram fa-2x" style="color:skyblue;"></span></a>&nbsp;&nbsp;&nbsp;
              </div>
              <div class="col-sm-4 col-xs-6">
                <form action="{!! url('search/') !!}" class="search-form" id="search-form" method="post">
                    <div class="form-group has-feedback">
                    <label for="search" class="sr-only">Search</label>
                    <input type="text" class="form-control" name="search" id="search" placeholder="search">
                      <span class="glyphicon glyphicon-search form-control-feedback"></span>
                  </div>
                </form>
              </div>
            </div>

            {{-- <span class="fa fa-search fa-2x" style="color:skyblue;">&nbsp;&nbsp;Search</span>  --}}

          </div>
        </div> {{-- ./row --}}
      </div>
      <div id="stuck_container" class="stuck_container">
        <div class="container">
          <nav class="nav">
            <ul data-type="navbar" class="sf-menu">
              <li class="active"><a href="{!! url('/'); !!}">Home</a></li>
              <li>
                <a href="#">Company Profile</a>
                <ul>
                  <li><a href="{!! url('posts/profile/about_us') !!}">About Us</a></li>
                  <li><a href="{!! url('posts/profile/mission') !!}">Mission</a></li>
                  <li><a href="{!! url('posts/profile/vision') !!}">Vision</a></li>
                  <li><a href="{!! url('posts/profile/values') !!}">Values</a></li>
                  <li><a href="{!! url('posts/profile/our_team') !!}">Our Team</a></li>
                </ul>
              </li>
              <li>
                <a href="#">Brands</a>
                <ul>
                  <li><a href="{!! url('posts/brand/corporate_brand') !!}">Corporate Brands</a></li>
                  <li><a href="{!! url('posts/brand/product_brands') !!}">Product Brands</a></li>
                </ul>
              </li>
              <li class="">
                <a href="#">Our Stores</a>
                <ul style="display: none;">
                  <li><a href="{!! url('posts/story/male_shop') !!}">Male Shops x 2</a></li>
                  <li><a href="{!! url('posts/story/hulhumale') !!}">Hulhumale’ Link Serve Plus</a></li>
                  <li><a href="{!! url('posts/story/kulhudhuffushi') !!}">Kulhudhuffushi</a></li>
                  <li><a href="{!! url('posts/story/addu_city') !!}">Addu City Link Serve Plus</a></li>       
                </ul>
              </li>
              <li>
                <a href="{!! url('posts/single/solution') !!}">Solutions</a>
              </li>
              <li>  
                <a href="#">Partners & Clients</a>
                 <ul>
                  <li><a href="{!! url('posts/showPartnersClients/partners') !!}">Partners</a></li>
                  <li><a href="{!! url('posts/showPartnersClients/clients') !!}">Clients</a></li>
                </ul>
              </li>
              <li>
                <a href="#">Media</a>
                <ul>
                  <li><a href="{!! url('posts/showMedia/White_Papers') !!}">White Papers</a></li>
                  <li><a href="{!! url('posts/showMedia/News') !!}">News</a></li>
                  <li><a href="{!! url('downloads') !!}">Downloads</a></li>
                  <li><a href="{!! url('galleries') !!}">Gallery</a></li>
                  <li><a href="{!! url('posts/showMedia/Events') !!}">Events</a></li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
</header>


<main>
	@yield('content')
</main>

      <!--
      ========================================================
                                  FOOTER
      ========================================================
    -->
    <footer>
      <section class="well3">
        <div class="container">
          <ul class="row contact-list">
            <li class="col-sm-4">
              <div class="box">
                <h5 class="widgetheading">Company Profile</h5>
                <ul class="link-list">
                  <li><a href="{!! url('posts/profile/about_us') !!}">About Us</a></li>
                  <li><a href="{!! url('posts/profile/mission') !!}">Mission</a></li>
                  <li><a href="{!! url('posts/profile/vision') !!}">Vision</a></li>
                  <li><a href="{!! url('posts/profile/values') !!}">Values</a></li>
                  <li><a href="{!! url('posts/profile/our_team') !!}">Our Team</a></li>
                </ul>
              </div>
              <div class="box">

               <h5>Contact Us</h5>

               <ul class="link-list">
                <li><a href="{!! url('contact/contact_detail') !!}">Contact Details</a></li>
                <li><a href="{!! url('contact/submit_a_query') !!}">Submit a query</a></li>
                <li><a href="{!! url('contact/contact') !!}">Contact</a></li>
              </ul>
              <li class="col-sm-4">
                <div class="box">


                <h5 class="widgetheading">Link Serve & You</h5>

                <ul class="link-list">
                  <li><a href="{!! url('/posts/linkserve/f__guarantees_warranties') !!}">Guarantees & Warranties </a></li>
                  <li><a href="{!! url('/posts/linkserve/f__goods_return_policy') !!}">Goods Return Policy</a></li>
                  <li><a href="{!! url('/posts/linkserve/f__career') !!}">Career</a></li>
                  <li><a href="{!! url('/posts/linkserve/f__job_opportunities') !!}">Job Opportunities</a></li>
                </ul>
                <br>
                <div class="box">
                  <h5 class="widgetheading">Services</h5>

                  <ul class="link-list">
                    <li><a href="{!! url('/posts/service/f__sla') !!}">SLA</a></li>
                    <li><a href="{!! url('/posts/service/f__island') !!}">Island Customers</a></li>
                    <li><a href="{!! url('/posts/service/f__hotel_resort_customer') !!}">Hotel & Resort Customers</a></li>
                    <li><a href="{!! url('/posts/service/f__government_customer') !!}">Government Customers</a></li>
                    <li><a href="{!! url('/posts/service/f__wholesale') !!}">Wholesale</a></li>
                    <li><a href="{!! url('/posts/service/f__retail') !!}">Retail</a></li>
                  </ul>

                </div>

                <li class="col-sm-4">

                 <div class="box">
                  <h5 class="widgetheading">Media</h5>

                  <ul class="link-list">
                    <li><a href="{!! url('posts/showMedia/White_Papers') !!}">White Papers</a></li>
                    <li><a href="{!! url('posts/showMedia/News') !!}">News</a></li>
                    <li><a href="{!! url('posts/showMedia/Downloads') !!}">Downloads</a></li>
                    <li><a href="{!! url('posts/showMedia/Gallery') !!}">Gallery</a></li>
                    <li><a href="{!! url('posts/showMedia/Events') !!}">Events</a></li>

                  </ul><br>


                  <div class="input-group">
                    <input type="email" class="form-control" placeholder="Enter your email" id="subscribe_email">
                    <span class="input-group-btn">
                      <button class="btn btn-theme-footer" type="button" id="subscribe_submit">Subscribe</button>
                    </span>
                  </div>

                  <br><br>


                  <div class="box">

                    <div class="box_aside">
                      <div class="fb-like" data-href="https://www.facebook.com/InnovaITbd/" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                    </div>
                  </li>
                </ul>
              </div>
            </section>
            <section>
              <div class="container">
                <div class="copyright">Link Serve Private Limited © <span id="copyright-year"></span>.&nbsp;&nbsp;<a href="{!! url('/posts/single/privacy_policy') !!}">Privacy Policy</a>

                </div>
              </div>
            </section>
          </footer>
        </div>
        <script src="{{ URL::asset('js_front/script.js')}}"></script>
        <script src="{{ URL::asset('js_front/smoothscroll.js')}}"></script>
        @yield('custom_front_page_script')


        <input type="hidden" id="hidden-scroll-id" value="<?php if (isset($id)) { echo $id; } else { echo ""; } ?>">


      </body>
      </html>
