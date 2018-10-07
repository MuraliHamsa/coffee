@extends('layouts.app')

@section('content')

            <!-- Product Content Start-->
            <div class="product-lead bottom-pad" style="background-image:url(public/img/products/dm/p2.jpe)">
               <div class="container">
                  <div class="row">
                     <div class="col-md-4 col-sm-12 col-xs-12 text-center animate_afl d1">
                        <img src="{{asset('public/img/products/dm/dm.png')}}" alt="iPhone5c">
                     </div>
                     <div class="col-md-8 col-sm-12 col-xs-12 animate_afr d3">
                        <div class="app-service">
                           <h3>DATA MANAGEMENT</h3>
                           
                           <p>THE CONCEPT OF "DATA MANAGEMENT" AROSE IN THE 1980S AS TECHNOLOGY MOVED FROM SEQUENTIAL PROCESSING (FIRST CARDS, THEN TAPE) TO RANDOM ACCESS PROCESSING. 
                           </p>
                          
                           <div class="divider"></div>
                           <div class="learnmore">
                              <a class="btn-special btn-grey" href="#">Learn More</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div> 
            <!-- Product Content end--> 
                        <!-- Recent works start-->
            <div class="bottom-pad">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 animate_afl d1">
                        <h3 class="title">WHAT OUR CLINTE SAYS</h3>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-12 col-md-12 col-xs-12">
                        <div class="row portfolio-pad">
                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item animate_afc d2">
                              <div class="portfolio-item">
                                 <a href="{{asset('public/img/products/dm/d1.jpg')}}" class="portfolio-item-link" data-rel="prettyPhoto" >
                                    <span class="portfolio-item-hover"></span>
                                    <span class="fullscreen"><i class="fa fa-search"></i></span><img src="{{asset('public/img/products/dm/d1.jpg')}}" alt=" "/>
                                 </a>
                                 <div class="portfolio-item-title">
                                    <a href="single-project.html">JEREMY DUPONT</a>
                                       <p>
                                          The scope and scale of structured and unstructured data that financial firms manage continues to grow exponentially, calling for innovative approaches that can deliver automated, accurate and timely decision making.
                                       </p>
                                 </div>
                                 <div class="clearfix"></div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item animate_afc d3">
                               <div class="portfolio-item">
                                  <a href="{{asset('public/img/products/dm/d2.jpg')}}" class="portfolio-item-link" data-rel="prettyPhoto" >
                                  <span class="portfolio-item-hover"></span><span class="fullscreen"><i class="fa fa-search"></i></span><img src="{{asset('public/img/products/dm/d2.jpg')}}" alt=" "/>
                                  </a>
                                  <div class="portfolio-item-title">
                                     <a href="single-project.html">STEVE ANDERS</a>
                                     <p>
                                        Data management initiatives improve data quality by assigning a team responsible for data's accuracy, accessibility, consistency, and completeness, among other metrics.
                                     </p>
                                  </div>
                                  <div class="clearfix"></div>
                               </div>
                           </div>
                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item animate_afc d4">
                               <div class="portfolio-item">
                                  <a href="{{asset('public/img/products/dm/d3.jpg')}}" class="portfolio-item-link" data-rel="prettyPhoto" >
                                  <span class="portfolio-item-hover"></span><span class="fullscreen"><i class="fa fa-search"></i></span><img src="{{asset('public/img/products/dm/d3.jpg')}}" alt=" "/>
                                  </a>
                                  <div class="portfolio-item-title">
                                     <a href="single-project.html">BRYAN JOHNSON</a>
                                     <p>
                                       Data management initiatives are aimed at achieving a number of objectives including offering better visibility to internal and  to aid the efficiency of enterprise knowledge workers by reducing confusion.
                                     </p>
                                  </div>
                                  <div class="clearfix"></div>
                               </div>
                           </div>
                        </div>
                        <!-- <div class="row">
                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item animate_afc d5">
                               <div class="portfolio-item">
                                  <a href="{{asset('public/img/portfolio/portfolio-4.jpg')}}" class="portfolio-item-link" data-rel="prettyPhoto" >
                                  <span class="portfolio-item-hover"></span><span class="fullscreen"><i class="fa fa-search"></i></span><img src="{{asset('public/img/portfolio/portfolio-4.jpg')}}" alt=" "/>
                                  </a>
                                  <div class="portfolio-item-title">
                                     <a href="single-project.html">Camera Icon</a>
                                     <p>
                                        Icon / Device
                                     </p>
                                  </div>
                                  <div class="clearfix"></div>
                               </div>
                           </div>
                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item animate_afc d6">
                               <div class="portfolio-item">
                                  <a href="{{asset('public/img/portfolio/portfolio-5.jpg')}}" class="portfolio-item-link" data-rel="prettyPhoto" >
                                  <span class="portfolio-item-hover"></span><span class="fullscreen"><i class="fa fa-search"></i></span><img src="{{asset('public/img/portfolio/portfolio-5.jpg')}}" alt=" "/>
                                  </a>
                                  <div class="portfolio-item-title">
                                     <a href="single-project.html">Penguin</a>
                                     <p>
                                        Animal / Nature
                                     </p>
                                  </div>
                                  <div class="clearfix"></div>
                               </div>
                           </div>
                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item animate_afc d7">
                               <div class="portfolio-item">
                                  <a href="{{asset('public/img/portfolio/portfolio-6.jpg')}}" class="portfolio-item-link" data-rel="prettyPhoto" >
                                  <span class="portfolio-item-hover"></span><span class="fullscreen"><i class="fa fa-search"></i></span><img src="{{asset('public/img/portfolio/portfolio-6.jpg')}}" alt=" "/>
                                  </a>
                                  <div class="portfolio-item-title">
                                     <a href="single-project.html">Sound Box</a>
                                     <p>
                                        Audio / Sound
                                     </p>
                                  </div>
                                  <div class="clearfix"></div>
                               </div>
                           </div>
                        </div> -->
                           <div class="clearfix"></div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Recent work end-->


@endsection
