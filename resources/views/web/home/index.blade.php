@extends('web.master')
@section('content')  

  <section class="camera_container">
    <div id="camera" class="camera_wrap">

      @foreach($sliders as $slider)
      <div data-src="{{asset(Storage::url($slider->preview_image))}}">
        <div class="camera_caption fadeIn">
          <div class="container">
            <div class="row">
              <div class="preffix_6 col-sm-6"><center>{{$slider->post_title}}</center></div>
            </div>
          </div>
        </div>
      </div>
      @endforeach

    </div>
  </section>

  
  <section>
    <div class="container banner_wr">
      <ul class="banner">
        <center>
          <li><br>
            <div class="fa-sun-o"></div>
            <h3>Renewable<br/>Energy</h3>

          </li>
          <li><br>
            <div class="fa-unlock-alt"></div>
            <h3>Security<br/>Solutions</h3>

          </li>
          <li><br>
            <div class="fa-file"></div>
            <h3>Software<br/>solutions</h3>

          </li>
          <li><br>
            <div class="fa-connectdevelop"></div>
            <h3>Networking<br/>Solutions</h3>

          </li>

          <li>
            <div class="fa-database"></div>
            <h3>Server Storage & <br/>Backup Solutions</h3>

          </li>

          <li><br>
            <div class="fa-fire"></div>
            <h3>Firewall<br/>Solutions</h3>

          </li>

          <li><br>
            <div class="fa-cogs"></div>
            <h3>Integrated<br/>Solutions</h3>

          </li>

        </center>


      </ul>
    </div>
  </section>
  <section class="well ins1">
    <div class="container hr">
      <ul class="row product-list">
        <li class="col-sm-6">
          <div class="box wow fadeInRight">
            <div class="box_aside">
              <div class="icon fa-comments"></div>
            </div>
            <div class="box_cnt__no-flow">
              <h3><a href="#">{{$home_block_1->post_title}}</a></h3>
              {{$home_block_1->post_content}}
            </div>
          </div>
          <hr>
          <div data-wow-delay="0.2s" class="box wow fadeInRight">
            <div class="box_aside">
              <div class="icon fa-calendar-o"></div>
            </div>
            <div class="box_cnt__no-flow">
              <h3><a href="#">{{$home_block_2->post_title}}</a></h3>
              {{$home_block_2->post_content}}
            </div>
          </div>
        </li>
        <li class="col-sm-6">
          <div data-wow-delay="0.3s" class="box wow fadeInRight">
            <div class="box_aside">
              <div class="icon fa-group"></div>
            </div>
            <div class="box_cnt__no-flow">
              <h3><a href="#">{{$home_block_3->post_title}}</a></h3>
              {{$home_block_3->post_content}}
            </div>
          </div>
          <hr>
          <div data-wow-delay="0.4s" class="box wow fadeInRight">
            <div class="box_aside">
              <div class="icon fa-thumbs-up"></div>
            </div>
            <div class="box_cnt__no-flow">
              <h3><a href="#">{{$home_block_4->post_title}}</a></h3>
              {{$home_block_4->post_content}}
            </div>
          </div>
        </li>
      </ul>
    </div>
  </section>
  <section class="well1">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
            <h2>{{$about->post_title}}</h2><img src="{{asset(Storage::url($about->preview_image))}}" alt="" style="border: #57aacd 1px solid;">
            <p class="text-justify">
              {!! $about->post_content !!}
            </p>
        </div>
        <div class="col-sm-4">
          <h2>{{ $service->post_title }}</h2>
          {!! $service->post_content !!}
          <br><br>



          
          <div class="owl-carousel">
            @foreach($testimonials as $testimonial)
            <div class="item">
              <blockquote class="box">
                <div class="box_aside"><img src="{{asset(Storage::url($testimonial->preview_image))}}" alt=""></div>
                <div class="box_cnt__no-flow">
                  <p>
                    <q>{!! $testimonial->post_content !!}</q>
                  </p>
                  <cite><a href="#">{{$testimonial->post_title}}</a></cite>
                </div>
              </blockquote>
            </div>
            @endforeach
{{--             <div class="item">
              <blockquote class="box">
                <div class="box_aside"><img src="{{ URL::asset('images_front/page-1_img03.jpg')}}" alt=""></div>
                <div class="box_cnt__no-flow">
                  <p>
                    <q>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</q>
                  </p>
                  <cite><a href="#">Testimonial 2</a></cite>
                </div>
              </blockquote>
            </div>
            <div class="item">
              <blockquote class="box">
                <div class="box_aside"><img src="{{ URL::asset('images_front/page-1_img04.jpg')}}" alt=""></div>
                <div class="box_cnt__no-flow">
                  <p>
                    <q>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</q>
                  </p>
                  <cite><a href="#">Testimonial 3</a></cite>
                </div>
              </blockquote>
            </div>
            <div class="item">
              <blockquote class="box">
                <div class="box_aside"><img src="{{ URL::asset('images_front/page-1_img05.jpg')}}" alt=""></div>
                <div class="box_cnt__no-flow">
                  <p>
                    <q>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</q>
                  </p>
                  <cite><a href="#">Incididunt ut labor</a></cite>
                </div>
              </blockquote>
            </div> --}}
          </div>
        </div>

       


        <div class="col-sm-4">
          <div class="info-box">
            <h2 class="fa-comment">Request Quote</h2>
            <hr>
            <h3>Ask professionals:</h3>
            <dl>
              <dt>Monday - Friday:</dt>
              <dd>8am-7pm</dd>
            </dl>
            <dl>
              <dt>Saturday:</dt>
              <dd>8am-5pm</dd>
            </dl>
            <dl>
              <dt>Sunday:</dt>
              <dd>1pm-5pm</dd>
            </dl>
            <hr>
            <h3>24/7 Online Support:</h3>
            <dl>
              <dt>800-2345-6789</dt>
            </dl>
          </div>


          <div class="owl-carousel">
            @foreach($team_members as $team_member)
              <div class="item">
                <blockquote class="box">
                 <center>     <cite><a href="">{{$team_member->post_title}}</a></cite></center>
                 <img src="{{asset(Storage::url($team_member->preview_image))}}" alt="">
                 <div class="box_cnt__no-flow">

                  <center><cite><a href="">{!! $team_member->post_content !!}</a></cite></center>  
                </div>
              </blockquote>
            </div>
            @endforeach

{{--           <div class="item">
            <blockquote class="box">
              <div class="box_aside"><img src="{{ URL::asset('images_front/shahid.jpg')}}" alt=""></div>
              <div class="box_cnt__no-flow">

                <cite><a href="#">Team Member 2</a></cite>
              </div>
            </blockquote>
          </div>
          <div class="item">
            <blockquote class="box">
              <div class="box_aside"><img src="{{ URL::asset('images_front/page-1_img04.jpg')}}" alt=""></div>
              <div class="box_cnt__no-flow">

                <cite><a href="#">Team Member 3</a></cite>
              </div>
            </blockquote>
          </div>
          <div class="item">
            <blockquote class="box">
              <div class="box_aside"><img src="{{ URL::asset('images_front/page-1_img05.jpg')}}" alt=""></div>
              <div class="box_cnt__no-flow">

                <cite><a href="#">Incididunt ut labor</a></cite>
              </div>
            </blockquote>
          </div> --}}

        </div>
      </div>
    </div>
  </div>
</section>

@endsection