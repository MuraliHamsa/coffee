@extends('layouts.app')

@section('content')

   <!-- Content Start -->
         <div id="main">
            <!-- Title, Breadcrumb Start-->
           <!--  <div class="breadcrumb-wrapper">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <h2 class="title">Portfolio Single Page</h2>
                     </div>
                     <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <div class="breadcrumbs pull-right">
                           <ul>
                              <li>You are here:</li>
                              <li><a href="index.html">Home</a></li>
                              <li><a href="#">Portfolio</a></li>
                              <li>Portfolio Single Page</li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div> -->
            <!-- Title, Breadcrumb End-->
            <!-- Main Content start-->
            <div class="content">
               <div class="container">
                  <div class="row">
                     <div class="posts-block col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <!-- Recent work start-->
                        <div class="#">
                           <!-- Slider Start-->
                           <h3>Mobility Services</h3>
                           <div class="recentwork_wrapper">
                           <div class="post-image">
                              <a href="{{asset('public/img/slider/mobi.jpg')}}" data-rel="prettyPhoto">
                              <span class="img-hover"></span>
                              <span class="fullscreen"><i class="fa fa-search"></i></span>
                              <img src="{{asset('public/img/slider/mobi.jpg')}}" alt="">
                              </a>
                           </div>
                        </div>
                           
                           <div class="post-content top-pad">
                              <p>
                                Mobility continues to be one of the most disruptive technologies in its impact and reach. Enterprises are constantly challenged to keep pace with accelerated proliferation of devices with multiple form factors on different platforms. Enterprises are ﬁnding it difficult to maximize the potential of mobility opportunities for consumer engagement, workplace solutions and partner engagement.Mindtree with its integrated suite of service offerings deﬁnes, architects, implements and maintains mobility solutions.We understand the importance of customer experience for any mobile solution and our team of user experience designers ensures our solutions deliver compelling and engaging experiences. Our solutions enable mobile users to efficiently create, share or consume relevant information on the move.
                              </p>
                              <p>
                                Implemented mobile brand marketing websites for 50+ brands leading to increased consumer engagement for a CPG ﬁrm.Deﬁned enterprise mobile strategy and technology roadmap for a global apparel and sports goods retailer.Implemented a tablet based solution for a leading jewelry retailer which allows consumers to leverage the solution to place reverse auction by viewing live TV feed on the tablet.Enabled a leading hotel chain to deliver differentiated and customer centric offering for its meeting and events customers with a mobile based mobile based request creation and fulﬁllment solution.Sales force automation, ﬁeld intelligence and optimised route planning solution for a global CPG player led to higher inventory turnover, improved proﬁtability and increased revenues.Implemented marketing solutions for product promotions over mobile channel which resulted in increased consumer engagement for a leading credit card provider.
                              </p>
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
                           <h3 class="title">Related Projects</h3>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 item">
                           <div class="portfolio-item">
                              <a href="{{asset('public/img/portfolio/mob.jpg')}}" class="portfolio-item-link" data-rel="prettyPhoto" >
                              <span class="portfolio-item-hover"></span>
                              <span class="fullscreen"><i class="fa fa-search"></i></span><img src="{{asset('public/img/portfolio/mob.jpg')}}" alt=" "/>
                              </a>
                              <div class="portfolio-item-title">
                                 <a href="single-project.html">MOBILE APPLICATIONS</a>
                                 <p>
                                  Development of enterprise and consumer applications using industrialized processes, assets and tools that differentiate our clients in the market and enhance productivity..
                                 </p>
                              </div>
                              <div class="clearfix"></div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 item">
                           <div class="portfolio-item">
                              <a href="{{asset('public/img/portfolio/mob1.jpg')}}" class="portfolio-item-link" data-rel="prettyPhoto" >
                              <span class="portfolio-item-hover"></span>
                              <span class="fullscreen"><i class="fa fa-search"></i></span><img src="{{asset('public/img/portfolio/mob1.jpg')}}" alt=" "/>
                              </a>
                              <div class="portfolio-item-title">
                                 <a href="single-project.html">MOBILITY STRATEGY</a>
                                 <p>
                                    A suite of strategy and business architecture services that help clients develop and implement enterprise mobility solutions and innovative .. 
                                 </p>
                              </div>
                              <div class="clearfix"></div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 item">
                           <div class="portfolio-item">
                              <a href="{{asset('public/img/portfolio/mob2.jpg')}}" class="portfolio-item-link" data-rel="prettyPhoto" >
                              <span class="portfolio-item-hover"></span>
                              <span class="fullscreen"><i class="fa fa-search"></i></span><img src="{{asset('public/img/portfolio/mob2.jpg')}}" alt=" "/>
                              </a>
                              <div class="portfolio-item-title">
                                 <a href="single-project.html">MOBILE APPLICATION & DEVICE TESTING</a>
                                 <p>
                                   Industrialized and comprehensive testing approach for mobile devices supported by  automated testing assets and tools..
                                 </p>
                              </div>
                              <div class="clearfix"></div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 item">
                           <div class="portfolio-item">
                              <a href="{{asset('public/img/portfolio/mob3.jpg')}}" class="portfolio-item-link" data-rel="prettyPhoto" >
                              <span class="portfolio-item-hover"></span>
                              <span class="fullscreen"><i class="fa fa-search"></i></span><img src="{{asset('public/img/portfolio/mob3.jpg')}}" alt=" "/>
                              </a>
                              <div class="portfolio-item-title">
                                 <a href="single-project.html">ENHANCED PRODUCTIVITY</a>
                                 <p>
                                   When users on the go or working from remote locations are able to access the same tools and applications they use at their desktops, they can work more efficiently
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
