@extends('layouts.app')

@section('content')

   <!-- Content Start -->
         <div id="main">
      
            <!-- Main Content start-->
            <div class="content">
               <div class="container">
                  <div class="row">
                     <div class="posts-block col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <!-- Recent work start-->
                        <div class="#">
                           <!-- Slider Start-->
                           <h3>Cyber Security</h3>
                           <div class="recentwork_wrapper">
                           <div class="post-image">
                              <a href="{{asset('public/img/slider/cyber.jpg')}}" data-rel="prettyPhoto">
                              <span class="img-hover"></span>
                              <span class="fullscreen"><i class="fa fa-search"></i></span>
                              <img src="{{asset('public/img/slider/cyber.jpg')}}" alt="">
                              </a>
                           </div>
                        </div>
                           </div>
                           <div class="post-content top-pad">
                           <p> Cyberspace and its underlying infrastructure are vulnerable to a wide range of risk stemming from both physical and cyber threats and hazards. Sophisticated cyber actors and nation-states exploit vulnerabilities to steal information and money and are developing capabilities to disrupt, destroy, or threaten the delivery of essential services. A range of traditional crimes are now being perpetrated through cyberspace. This includes the production and distribution of child pornography and child exploitation conspiracies, banking and financial fraud, intellectual property violations, and other crimes, all of which have substantial human and economic consequences.Cyberspace is particularly difficult to secure due to a number of factors: the ability of malicious actors to operate from anywhere in the world, the linkages between cyberspace and physical systems, and the difficulty of reducing vulnerabilities and consequences in complex cyber networks. Of growing concern is the cyber threat to critical infrastructure, which is increasingly subject to sophisticated cyber intrusions that pose new risks. As information technology becomes increasingly integrated with physical infrastructure operations, there is increased risk for wide scale or high-consequence events that could cause harm or disrupt services upon which our economy and the daily lives of millions of Americans depend. In light of the risk and potential consequences of cyber events, strengthening the security and resilience of cyberspace has become an important homeland security mission.</p>

                           </div>
                        </div>
                        <!-- Recent work end-->
                     </div>
                     <!-- Left Section End -->
                     <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 sidebar">
                    
                  </div>
                  <div class="divider"></div>
                  <div class="row">
                     <!-- Recent works start-->
                     <div class="portfolio">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                           <h3 class="title">WHAT WE DO</h3>
                        </div>
                        <p style="text-align: center; font-size: 20px;">5 DIFFERENT TYPES OF CYBER ATTACKS AND HOW THEY AFFECT YOUR BUSINESS</p>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 item">
                           <div class="portfolio-item">
                              <a href="{{asset('public/img/portfolio/cyber1.jpg')}}" class="portfolio-item-link" data-rel="prettyPhoto" >
                              <span class="portfolio-item-hover"></span>
                              <span class="fullscreen"><i class="fa fa-search"></i></span><img src="{{asset('public/img/portfolio/cyber1.jpg')}}" alt=" "/>
                              </a>
                              <div class="portfolio-item-title">
                                 <a href="single-project.html">INFORMATION SHARING</a>
                                 <p>
                                    Information sharing is essential to the protection of critical infrastructure and to furthering cyber security for the nation.
                                 </p>
                              </div>
                              <div class="clearfix"></div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 item">
                           <div class="portfolio-item">
                              <a href="{{asset('public/img/portfolio/cyber2.jpg')}}" class="portfolio-item-link" data-rel="prettyPhoto" >
                              <span class="portfolio-item-hover"></span>
                              <span class="fullscreen"><i class="fa fa-search"></i></span><img src="{{asset('public/img/portfolio/cyber2.jpg')}}" alt=" "/>
                              </a>
                              <div class="portfolio-item-title">
                                 <a href="single-project.html">CYBER SAFETY</a>
                                 <p>
                                  Phishing is perhaps the most commonly reported form of cyber attack, said Caracciolo.
                                 </p>
                              </div>
                              <div class="clearfix"></div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 item">
                           <div class="portfolio-item">
                              <a href="{{asset('public/img/portfolio/cyber3.jpg')}}" class="portfolio-item-link" data-rel="prettyPhoto" >
                              <span class="portfolio-item-hover"></span>
                              <span class="fullscreen"><i class="fa fa-search"></i></span><img src="{{asset('public/img/portfolio/cyber3.jpg')}}" alt=" "/>
                              </a>
                              <div class="portfolio-item-title">
                                 <a href="single-project.html">Office Workers</a>
                                 <p>
                                    Every time we connect to the Internet, we make decisions that affect our cyber security.
                                 </p>
                              </div>
                              <div class="clearfix"></div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 item">
                           <div class="portfolio-item">
                              <a href="{{asset('public/img/portfolio/cyber4.jpg')}}" class="portfolio-item-link" data-rel="prettyPhoto" >
                              <span class="portfolio-item-hover"></span>
                              <span class="fullscreen"><i class="fa fa-search"></i></span><img src="{{asset('public/img/portfolio/cyber4.jpg')}}" alt=" "/>
                              </a>
                              <div class="portfolio-item-title">
                                 <a href="single-project.html">CYBER SECURITY AND PRIVACY</a>
                                 <p>
                                    We empowers its cyber security programs to succeed by integrating privacy protections from the outset.
                                 </p>
                              </div>
                              <div class="clearfix"></div>
                           </div>
                        </div>
                        <div class="clearfix"></div>
                     </div>
                  </div>
               </div>
               <!-- Recent work end-->
            </div>
            <!-- Main Content end-->
         </div>
         <!-- Content End -->

@endsection
