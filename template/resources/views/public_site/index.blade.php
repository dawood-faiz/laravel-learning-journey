@extends('public_site.layouts.main')
@push('title')
  <title>WEBWING | Home</title>
@endpush
@section('main-section')
    
   <!-- banner -->
   <section class="banner_main">
      <div class="container">
         <div class="row">
            <div class="col-md-7 col-lg-7">
               <div class="text-bg">
                  <h1>Trusted and <br>Professional Advisers</h1>
                  <span>for your Business</span>
                  <p>Showcase your Profile to the world using online CV builder and Get Hired Faster</p>
                  <a href="{{ url('/about') }}">About us</a>
               </div>
            </div>
            <div class="col-md-5 col-lg-5">
               <div class="ban_img">
                  <figure><img src="{{ url('public_site/images/ba_ing.png') }}" alt="#" /></figure>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- end banner -->
   <!-- about section -->
   <div id="about" class="about">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-12 col-lg-7">
               <div class="about_box">
                  <div class="titlepage">
                     <h2><strong class="yellow">About US</strong><br> WE CAN HELP YOUR business GROW</h2>
                  </div>
                  <h3>EVERYTHING YOU NEED IN ONE SOLUTION</h3>
                  <span>HELP YOUR NEXT CAREER MOVE MORE SMOOTHER AND <br> MORE EFFICIENT</span>
                  <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of usingt</p>
                  <span class="try">TRY ONLINE CV BUILDER FOR Free</span>
                  <a class="read_morea" href="#">Get Started <i class="fa fa-angle-right" aria-hidden="true"></i></a>
               </div>
            </div>
            <div class="col-md-12 col-lg-5">
               <div class="about_img">
                  <figure><img src="{{ url('public_site/images/about_img2.jpg') }}" alt="#" /></figure>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- about section -->
   <!-- service section -->
   <div id="service" class="service">
      <div class="container">
         <div class="row">
            <div class="col-md-7">
               <div class="titlepage">
                  <h2><strong class="yellow">service</strong><br> WE CAN HELP YOUR business GROW</h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-4 col-sm-6">
               <div id="ho_color" class="service_box">
                  <img src="{{ url('public_site/images/service_icon1.png') }}" alt="#" />
                  <h3>DIGITAL marketing</h3>
                  <p>Lorem Ipsum is simply dummy text of the printing and1500s, </p>
               </div>
            </div>
            <div class="col-md-4 col-sm-6">
               <div id="ho_color" class="service_box">
                  <img src="{{ url('public_site/images/service_icon2.png') }}" alt="#" />
                  <h3>FINANCIAL PLANING</h3>
                  <p>Lorem Ipsum is simply dummy text of the printing and1500s, </p>
               </div>
            </div>
            <div class="col-md-4 col-sm-6">
               <div id="ho_color" class="service_box">
                  <img src="{{ url('public_site/images/service_icon3.png') }}" alt="#" />
                  <h3>DIGITAL marketing</h3>
                  <p>Lorem Ipsum is simply dummy text of the printing and1500s, </p>
               </div>
            </div>
            <div class="col-md-4 col-sm-6">
               <div id="ho_color" class="service_box">
                  <img src="{{ url('public_site/images/service_icon4.png') }}" alt="#" />
                  <h3>BUSINESS CONSULTING</h3>
                  <p>Lorem Ipsum is simply dummy text of the printing and1500s, </p>
               </div>
            </div>
            <div class="col-md-4 col-sm-6">
               <div id="ho_color" class="service_box">
                  <img src="{{ url('public_site/images/service_icon5.png') }}" alt="#" />
                  <h3>MARKETING RESEARCH</h3>
                  <p>Lorem Ipsum is simply dummy text of the printing and1500s, </p>
               </div>
            </div>
            <div class="col-md-4 col-sm-6">
               <div id="ho_color" class="service_box">
                  <img src="{{ url('public_site/images/service_icon6.png') }}" alt="#" />
                  <h3>UX RESEARCH</h3>
                  <p>Lorem Ipsum is simply dummy text of the printing and1500s, </p>
               </div>
            </div>
            <div class="col-md-12">
               <a class="read_more" href="#">Read More</a>
            </div>
         </div>
      </div>
   </div>
   </div>
   <!-- service section -->
   <!-- portfolio -->
   <div class="portfolio">
      <div class="container">
         <div class="row">
            <div class="col-md-12 ">
               <div class="titlepage">
                  <h2><strong class="yellow">PORTFOLIO</strong><br> CHOOSE A PROFESSIONAL DESIGN</h2>
                  <span>Websites</span>
                  <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distrib</p>
               </div>
            </div>
         </div>
      </div>
      <div id="myCarousel" class="carousel slide portfolio_Carousel " data-ride="carousel">
         <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
         </ol>
         <div class="carousel-inner">
            <div class="carousel-item active">
               <div class="container">
                  <div class="carousel-caption ">
                     <div class="row">
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="{{ url('public_site/images/potf1.jpg') }}" alt="#" />
                              <div class="middle">
                                 <div class="text2">View More</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="{{ url('public_site/images/potf2.jpg') }}" alt="#" />
                              <div class="middle">
                                 <div class="text2">View More</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="{{ url('public_site/images/potf3.jpg') }}" alt="#" />
                              <div class="middle">
                                 <div class="text2">View More</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="{{ url('public_site/images/potf4.jpg') }}" alt="#" />
                              <div class="middle">
                                 <div class="text2">View More</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <a class="read_more" href="#">Read More</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="container">
                  <div class="carousel-caption">
                     <div class="row">
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="{{ url('public_site/images/potf1.jpg') }}" alt="#" />
                              <div class="middle">
                                 <div class="text2">View More</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="{{ url('public_site/images/potf2.jpg') }}" alt="#" />
                              <div class="middle">
                                 <div class="text2">View More</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="{{ url('public_site/images/potf3.jpg') }}" alt="#" />
                              <div class="middle">
                                 <div class="text2">View More</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="{{ url('public_site/images/potf4.jpg') }}" alt="#" />
                              <div class="middle">
                                 <div class="text2">View More</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <a class="read_more" href="#">Read More</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="container">
                  <div class="carousel-caption">
                     <div class="row">
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="{{ url('public_site/images/potf1.jpg') }}" alt="#" />
                              <div class="middle">
                                 <div class="text2">View More</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="{{ url('public_site/images/potf2.jpg') }}" alt="#" />
                              <div class="middle">
                                 <div class="text2">View More</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="{{ url('public_site/images/potf3.jpg') }}" alt="#" />
                              <div class="middle">
                                 <div class="text2">View More</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="{{ url('public_site/images/potf4.jpg') }}" alt="#" />
                              <div class="middle">
                                 <div class="text2">View More</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <a class="read_more" href="#">Read More</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
         </a>
         <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
         </a>
      </div>
   </div>
   <!-- end portfolio section -->
   <!-- business  section -->
   <div class="business">
      <div class="container">
         <div class="row">
            <div class="col-md-7">
               <div class="titlepage">
                  <h2><strong class="yellow">CREATE</strong><br>PERSONALISED Business</h2>
                  <p>ss normal distribution of letters, as opposed to using </p>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-3 col-sm-6">
               <div id="ho_color" class="business_box">
                  <i><img src="{{ url('public_site/images/business_icon1.png') }}" alt="#" /></i>
                  <h3>23</h3>
                  <p>NOMINATIONS </p>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div id="ho_color" class="business_box">
                  <i><img src="{{ url('public_site/images/business_icon2.png') }}" alt="#" /></i>
                  <h3>31</h3>
                  <p>AGENCIES</p>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div id="ho_color" class="business_box">
                  <i><img src="{{ url('public_site/images/business_icon3.png') }}" alt="#" /></i>
                  <h3>7</h3>
                  <p>AWARDS</p>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div id="ho_color" class="business_box">
                  <i><img src="{{ url('public_site/images/business_icon4.png') }}" alt="#" /></i>
                  <h3>8</h3>
                  <p>Supported </p>
               </div>
            </div>
            <div class="col-md-12">
               <a class="read_more" href="#">Read More</a>
            </div>
         </div>
      </div>
   </div>
   <!-- end business  section -->
   <!-- team  section -->
   <div id="team" class="team">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2><strong class="yellow">Team</strong><br>We Have a Professional Team of Business Analysts.</h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12">
               <div id="team" class="carousel slide team_Carousel " data-ride="carousel">
                  <ol class="carousel-indicators">
                     <li data-target="#team" data-slide-to="0" class="active"></li>
                     <li data-target="#team" data-slide-to="1"></li>
                     <li data-target="#team" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="container">
                           <div class="carousel-caption ">
                              <div class="row">
                                 <div class="col-md-4 col-sm-6">
                                    <div id="ho_bg" class="team_img">
                                       <img src="{{ url('public_site/images/team1.png') }}" alt="#" />
                                       <div class="ho_socal">
                                          <ul class="social_icont">
                                             <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                             <li> <a href="#"> <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-4 col-sm-6">
                                    <div id="ho_bg" class="team_img">
                                       <img src="{{ url('public_site/images/team2.png') }}" alt="#" />
                                       <div class="ho_socal">
                                          <ul class="social_icont">
                                             <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                             <li> <a href="#"> <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-4 col-sm-6 d_none1">
                                    <div id="ho_bg" class="team_img ">
                                       <img src="{{ url('public_site/images/team3.png') }}" alt="#" />
                                       <div class="ho_socal">
                                          <ul class="social_icont">
                                             <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                             <li> <a href="#"> <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="container">
                           <div class="carousel-caption">
                              <div class="row">
                                 <div class="col-md-4 col-sm-6 d_none1">
                                    <div id="ho_bg" class="team_img ">
                                       <img src="{{ url('public_site/images/team1.png') }}" alt="#" />
                                       <div class="ho_socal">
                                          <ul class="social_icont">
                                             <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                             <li> <a href="#"> <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-4 col-sm-6">
                                    <div id="ho_bg" class="team_img">
                                       <img src="{{ url('public_site/images/team2.png') }}" alt="#" />
                                       <div class="ho_socal">
                                          <ul class="social_icont">
                                             <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                             <li> <a href="#"> <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-4 col-sm-6">
                                    <div id="ho_bg" class="team_img">
                                       <img src="{{ url('public_site/images/team3.png') }}" alt="#" />
                                       <div class="ho_socal">
                                          <ul class="social_icont">
                                             <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                             <li> <a href="#"> <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="container">
                           <div class="carousel-caption">
                              <div class="row">
                                 <div class="col-md-4 col-sm-6">
                                    <div id="ho_bg" class="team_img">
                                       <img src="{{ url('public_site/images/team1.png') }}" alt="#" />
                                       <div class="ho_socal">
                                          <ul class="social_icont">
                                             <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                             <li> <a href="#"> <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-4 col-sm-6 d_none1">
                                    <div id="ho_bg" class="team_img ">
                                       <img src="{{ url('public_site/images/team2.png') }}" alt="#" />
                                       <div class="ho_socal">
                                          <ul class="social_icont">
                                             <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                             <li> <a href="#"> <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-4 col-sm-6">
                                    <div id="ho_bg" class="team_img">
                                       <img src="{{ url('public_site/images/team3.png') }}" alt="#" />
                                       <div class="ho_socal">
                                          <ul class="social_icont">
                                             <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                             <li> <a href="#"> <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <a class="carousel-control-prev" href="#team" role="button" data-slide="prev">
                     <i class="fa fa-chevron-left" aria-hidden="true"></i>
                  </a>
                  <a class="carousel-control-next" href="#team" role="button" data-slide="next">
                     <i class="fa fa-chevron-right" aria-hidden="true"></i>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end team  section -->
   <!-- testimonial -->
   <div id="client" class="testimonial">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2><strong class="yellow">testimonial</strong><br>What is Syas our clients</h2>
               </div>
            </div>
         </div>
      </div>
      <div id="testimo" class="carousel slide testimonial_Carousel " data-ride="carousel">
         <ol class="carousel-indicators">
            <li data-target="#testimo" data-slide-to="0" class="active"></li>
            <li data-target="#testimo" data-slide-to="1"></li>
            <li data-target="#testimo" data-slide-to="2"></li>
         </ol>
         <div class="carousel-inner">
            <div class="carousel-item active">
               <div class="container">
                  <div class="carousel-caption ">
                     <div class="row">
                        <div class="col-md-6 offset-md-3">
                           <div class="test_box">
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                              <i><img src="{{ url('public_site/images/cos.jpg') }}" alt="#" /></i> <span>Consectetur</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="container">
                  <div class="carousel-caption">
                     <div class="row">
                        <div class="col-md-6 offset-md-3">
                           <div class="test_box">
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                              <i><img src="{{ url('public_site/images/cos.jpg') }}" alt="#" /></i> <span>Consectetur</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="container">
                  <div class="carousel-caption">
                     <div class="row">
                        <div class="col-md-6 offset-md-3">
                           <div class="test_box">
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                              <i><img src="{{ url('public_site/images/cos.jpg') }}" alt="#" /></i> <span>Consectetur</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <a class="carousel-control-prev" href="#testimo" role="button" data-slide="prev">
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
         </a>
         <a class="carousel-control-next" href="#testimo" role="button" data-slide="next">
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
         </a>
      </div>
   </div>
   <!-- end testimonial -->
   <!-- contact  section -->
   <div id="contact" class="contact ">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2><strong class="yellow">Contact us</strong><br>Request a call back</h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-8 offset-md-2">
               <form id="post_form" class="contact_form">
                  <div class="row">
                     <div class="col-md-12 ">
                        <input class="contact_control" placeholder=" Name" type="type" name="Name">
                     </div>
                     <div class="col-md-12">
                        <input class="contact_control" placeholder="Email" type="type" name="Email">
                     </div>
                     <div class="col-md-12">
                        <input class="contact_control" placeholder="Phone Number " type="type" name="Phone Number ">
                     </div>
                     <div class="col-md-12">
                        <textarea class="textarea" placeholder="Message" type="type" Message="Name">Message </textarea>
                     </div>
                     <div class="col-md-12">
                        <button class="send_btn">Send</button>
                     </div>
               </form>
            </div>
         </div>
      </div>
   </div>
   </div>
   <!-- end contact  section -->

@endsection