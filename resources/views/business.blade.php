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
                           <h3>Business Intelligence</h3>
                           <div class="recentwork_wrapper">
                           <div class="post-image">
                              <a href="{{asset('public/img/slider/busi.jpg')}}" data-rel="prettyPhoto">
                              <span class="img-hover"></span>
                              <span class="fullscreen"><i class="fa fa-search"></i></span>
                              <img src="{{asset('public/img/slider/busi.jpg')}}" alt="">
                              </a>
                           </div>
                        </div>
                           
                           <div class="post-content top-pad">
                              <p>
                               Business Intelligence (BI) comprises the strategies and technologies used by enterprises for the data analysis of business information. BI technologies provide historical, current and predictive views of business operations. Common functions of business intelligence technologies include reporting, online analytical processing, analytics, data mining, process mining, complex event processing, business performance management, benchmarking, text mining, predictive analytics and prescriptive analytics. BI technologies can handle large amounts of structured and sometimes unstructured data to help identify, develop and otherwise create new strategic business opportunities. They aim to allow for the easy interpretation of these big data. Identifying new opportunities and implementing an effective strategy based on insights can provide businesses with a competitive market advantage and long-term stability.

Business intelligence can be used by enterprises to support a wide range of business decisions - ranging from operational to strategic. Basic operating decisions include product positioning or pricing. Strategic business decisions involve priorities, goals and directions at the broadest level. In all cases, BI is most effective when it combines data derived from the market in which a company operates (external data) with data from company sources internal to the business such as financial and operations data (internal data). When combined, external and internal data can provide a complete picture which, in effect, creates an "intelligence" that cannot be derived from any singular set of data.Amongst myriad uses, business intelligence tools empower organizations to gain insight into new markets, to assess demand and suitability of products and services for different market segments and to gauge the impact of marketing efforts.

Often[quantify] BI applications use data gathered from a data warehouse (DW) or from a data mart, and the concepts of BI and DW combine as "BI/DW" or as "BIDW". A data warehouse contains a copy of analytical data that facilitate decision support.
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
                              <a href="{{asset('public/img/portfolio/bus1.jpg')}}" class="portfolio-item-link" data-rel="prettyPhoto" >
                              <span class="portfolio-item-hover"></span>
                              <span class="fullscreen"><i class="fa fa-search"></i></span><img src="{{asset('public/img/portfolio/bus1.jpg')}}" alt=" "/>
                              </a>
                              <div class="portfolio-item-title">
                                 <a href="single-project.html">APPLICATION DEVELOPMENT</a>
                                 <p>
                                   To build solutions that satisfy your business requirements. It also includes developing a prototype while evaluating a product to better understand the features and functionalities of the product/technology
                                 </p>
                              </div>
                              <div class="clearfix"></div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 item">
                           <div class="portfolio-item">
                              <a href="{{asset('public/img/portfolio/portfolio-3.jpg')}}" class="portfolio-item-link" data-rel="prettyPhoto" >
                              <span class="portfolio-item-hover"></span>
                              <span class="fullscreen"><i class="fa fa-search"></i></span><img src="{{asset('public/img/portfolio/portfolio-3.jpg')}}" alt=" "/>
                              </a>
                              <div class="portfolio-item-title">
                                 <a href="single-project.html">SOLUTION DESIGN AND IMPLEMENTATION</a>
                                 <p>
                                    To design,develop and deploy the Cognos solution.This includes activities such as design, installation,development testing, usertraining, and deployment.
                                 </p>
                              </div>
                              <div class="clearfix"></div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 item">
                           <div class="portfolio-item">
                              <a href="{{asset('public/img/portfolio/bus2.jpg')}}" class="portfolio-item-link" data-rel="prettyPhoto" >
                              <span class="portfolio-item-hover"></span>
                              <span class="fullscreen"><i class="fa fa-search"></i></span><img src="{{asset('public/img/portfolio/bus2.jpg')}}" alt=" "/>
                              </a>
                              <div class="portfolio-item-title">
                                 <a href="single-project.html">SUPPORT AND MAINTENANCE
</a>
                                 <p>
                                    For Cognos solutions deployed in your organization.This includes application enhancement, support and maintenance, and upgrades.While there are many ways to fall short in the BI game.
                                 </p>
                              </div>
                              <div class="clearfix"></div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 item">
                           <div class="portfolio-item">
                              <a href="{{asset('public/img/portfolio/bus5.jpg')}}" class="portfolio-item-link" data-rel="prettyPhoto" >
                              <span class="portfolio-item-hover"></span>
                              <span class="fullscreen"><i class="fa fa-search"></i></span><img src="{{asset('public/img/portfolio/bus5.jpg')}}" alt=" "/>
                              </a>
                              <div class="portfolio-item-title">
                                 <a href="single-project.html">DATA MART DEVELOPMENT</a>
                                 <p>
                                  The data in this report is collected from real end users, meticulously verified for veracity, exhaustively analyzed, and visualized in easy to understand charts and graphs.Each product is compared  with all other.
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
