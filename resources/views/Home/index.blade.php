@extends('layouts.frontbase')

@section('title','Real Estate')

 @section('slider')
 @include('home.slider')
@endsection

  @section('content')
  

 
  <!-- Pre Loader -->
  <div id="aa-preloader-area">
    <div class="pulse"></div>
  </div>
  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-angle-double-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,900&display=swap" rel="stylesheet">

  <!-- Advance Search -->
  <section id="aa-advance-search">
    <div class="container">
      <div class="aa-advance-search-area">
        <div class="form">
         <div class="aa-advance-search-top">
            <div class="row">
              <div class="col-md-4">
                <div class="aa-single-advance-search">
                  <input type="text" placeholder="Type Your Location">
                </div>
              </div>
              
              <div class="col-md-2">
                <div class="aa-single-advance-search">
                  <select>
                   <option value="0" selected>Category</option>
                    <option value="1">Flat</option>
                    <option value="2">Land</option>
                    <option value="3">Plot</option>
                    <option value="4">Commercial</option>
                  </select>
                </div>
              </div>

              <div class="col-md-2">
                <div class="aa-single-advance-search">
                  <input type="text" placeholder="Min-Price">
                </div>
              </div>

              <div class="col-md-2">
                <div class="aa-single-advance-search">
                  <input type="text" placeholder="Max-Price">
                </div>
              </div>
              
              <div class="col-md-2">
                <div class="aa-single-advance-search">
                  <input class="aa-search-btn" type="submit" value="Search">
                </div>
              </div>
             
              <div class="aa-advance-search-bottom">
           <div class="row">
            <div class="col-md-4">
            <div class="aa-single-advance-search">
                  <h1></h1>
                </div>
              </div>
              <div class="col-md-6">
            <div class="aa-single-advance-search">
                  <h1><p style="color:DodgerBlue  ;font-family:Playfair Display;font-weight:bold;font-size:160%">Home Showcase</p></h1>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Advance Search -->




  <!-- Latest property -->
  <section id="aa-latest-property">
    <div class="container">
      <div class="aa-latest-property-area">
        <div class="aa-title">
        </div>
        <div class="aa-latest-properties-content">
          <div class="row">
            
          @foreach($houselist as $rs)
            <div class="col-md-4">
              <article class="aa-properties-item">
                <a href="{{route('house',['id'=>$rs->id])}}" class="aa-properties-item-img">
                  <img src="{{asset('storage/img/'.$rs->image)}}" alt="">
                </a>
                <div class="aa-tag for-sale">
                  For Sale
                </div>
                <div class="aa-properties-item-content">
                  <div class="aa-properties-info">
                    <span>{{$rs->numberofrooms}} Rooms</span>
                    <span>{{$rs->numberofbathrooms}} Baths</span>
                    <span>{{$rs->metre}} SQ FT</span>
                  </div>
                  <div class="aa-properties-about">
                    <h3><a href="{{route('house',['id'=>$rs->id])}}">{{$rs->title}}</a></h3>
                    <p>{{$rs->description}}</p>                      
                  </div>
                  <div class="aa-properties-detial">
                    <span class="aa-price">
                    ${{$rs->price}}
                    </span>
                    <a href="{{route('house',['id'=>$rs->id])}}" class="aa-secondary-btn">View Details</a>
                  </div>
                </div>
              </article>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Latest property -->



  <!-- Service section -->
  <section id="aa-service">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-service-area">
            <div class="aa-title">
              <h2>Our Service</h2>
              <span></span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum sit ea nobis quae vero voluptatibus.</p>
            </div>
            <!-- service content -->
            <div class="aa-service-content">
              <div class="row">
                <div class="col-md-3">
                  <div class="aa-single-service">
                    <div class="aa-service-icon">
                      <span class="fa fa-home"></span>
                    </div>
                    <div class="aa-single-service-content">
                      <h4><a href="#">Property Sale</a></h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto repellendus quasi asperiores itaque dolorem at.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="aa-single-service">
                    <div class="aa-service-icon">
                      <span class="fa fa-check"></span>
                    </div>
                    <div class="aa-single-service-content">
                      <h4><a href="#">Property Rent</a></h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto repellendus quasi asperiores itaque dolorem at.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="aa-single-service">
                    <div class="aa-service-icon">
                      <span class="fa fa-crosshairs"></span>
                    </div>
                    <div class="aa-single-service-content">
                      <h4><a href="#">Property Development</a></h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto repellendus quasi asperiores itaque dolorem at.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="aa-single-service">
                    <div class="aa-service-icon">
                      <span class="fa fa-bar-chart-o"></span>
                    </div>
                    <div class="aa-single-service-content">
                      <h4><a href="#">Market Analysis</a></h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto repellendus quasi asperiores itaque dolorem at.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Service section -->


 <!-- Our Agent Section-->
 <section id="aa-agents">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-agents-area">
            <div class="aa-title">
              <h2>Our Agents</h2>
              <span></span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum sit ea nobis quae vero voluptatibus.</p>
            </div>
            <!-- agents content -->
            <div class="aa-agents-content">
              <ul class="aa-agents-slider">
                <li>
                  <div class="aa-single-agents">
                    <div class="aa-agents-img">
                      <img src="{{asset('assets')}}/img/agents/agent-1.png" alt="agent member image">
                    </div>
                    <div class="aa-agetns-info">
                      <h4><a href="#">Philip Smith</a></h4>
                      <span>Top Agent</span>
                      <div class="aa-agent-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="aa-single-agents">
                    <div class="aa-agents-img">
                      <img src="{{asset('assets')}}/img/agents/agent-5.png" alt="agent member image">
                    </div>
                    <div class="aa-agetns-info">
                      <h4><a href="#">Adam Barney</a></h4>
                      <span>Expert Agent</span>
                      <div class="aa-agent-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="aa-single-agents">
                    <div class="aa-agents-img">
                      <img src="{{asset('assets')}}/img/agents/agent-3.png" alt="agent member image">
                    </div>
                    <div class="aa-agetns-info">
                      <h4><a href="#">Paul Walker</a></h4>
                      <span>Director</span>
                      <div class="aa-agent-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="aa-single-agents">
                    <div class="aa-agents-img">
                      <img src="{{asset('assets')}}/img/agents/agent-4.png" alt="agent member image">
                    </div>
                    <div class="aa-agetns-info">
                      <h4><a href="#">John Smith</a></h4>
                      <span>Jr. Agent</span>
                      <div class="aa-agent-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                      </div>
                    </div>
                  </div>
                </li>
                 <li>
                  <div class="aa-single-agents">
                    <div class="aa-agents-img">
                      <img src="{{asset('assets')}}/img/agents/agent-1.png" alt="agent member image">
                    </div>
                    <div class="aa-agetns-info">
                      <h4><a href="#">Philip Smith</a></h4>
                      <span>Top Agent</span>
                      <div class="aa-agent-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="aa-single-agents">
                    <div class="aa-agents-img">
                      <img src="{{asset('assets')}}/img/agents/agent-5.png" alt="agent member image">
                    </div>
                    <div class="aa-agetns-info">
                      <h4><a href="#">Adam Barney</a></h4>
                      <span>Expert Agent</span>
                      <div class="aa-agent-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="aa-single-agents">
                    <div class="aa-agents-img">
                      <img src="{{asset('assets')}}/img/agents/agent-3.png" alt="agent member image">
                    </div>
                    <div class="aa-agetns-info">
                      <h4><a href="#">Paul Walker</a></h4>
                      <span>Director</span>
                      <div class="aa-agent-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="aa-single-agents">
                    <div class="aa-agents-img">
                      <img src="{{asset('assets')}}/img/agents/agent-4.png" alt="agent member image">
                    </div>
                    <div class="aa-agetns-info">
                      <h4><a href="#">John Smith</a></h4>
                      <span>Jr. Agent</span>
                      <div class="aa-agent-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Our Agent Section-->
  <!-- About us -->
  <section id="aa-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-about-us-area">
            <div class="row">
              <div class="col-md-5">
                <div class="aa-about-us-left">
                  <img src="{{asset('assets')}}/img/about-us.png" alt="image">
                </div>
              </div>
              <div class="col-md-7">
                <div class="aa-about-us-right">
                  <div class="aa-title">
                    <h2>About Us</h2>
                    <span></span>
                  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat ab dignissimos vitae maxime adipisci blanditiis rerum quae quos! Id at rerum maxime modi fugit vero corrupti, ad atque sit laborum ipsum sunt blanditiis suscipit odio, aut nostrum assumenda nobis rem a maiores temporibus non commodi laboriosam, doloremque expedita! Corporis, provident?</p>                  
                  <ul>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, blanditiis.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia.</li>                    
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, blanditiis.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia.</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / About us -->
  @endsection