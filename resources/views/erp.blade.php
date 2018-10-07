@extends('layouts.app')

@section('content')

            <!-- Product Content Start-->
            <div class="product-lead bottom-pad" style="background-image:url(public/img/products/erp/p1.jpg)">
               <div class="container">
                  <div class="row">
                     <div class="col-md-4 col-sm-12 col-xs-12 text-center animate_afl d1">
                        <img src="{{asset('public/img/products/erp/erp.png')}}" alt="iPhone5c">
                     </div>
                     <div class="col-md-8 col-sm-12 col-xs-12 animate_afr d3">
                        <div class="app-service">
                           <h3>ERP SYSTEMS</h3>
                          <!--  <h4>We provide all kinds of iPhone application design and development services.</h4>
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.Vivamus diam diam, fermentum sed dapibus eget, egestas sed eros. Lorem fermentum ipsum dolor sit amet.Lorem fermentum diam diam.  
                           </p> -->
                           <p>
                             The term ERP was coined in 1990 by Gartner1, but its roots date to the 1960s. Back then, the concept applied to inventory management and control in the manufacturing sector. 
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
                        <h3 class="title">ERP Systems</h3>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-12 col-md-12 col-xs-12">
                        <div class="row portfolio-pad">
                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item animate_afc d2">
                              <div class="portfolio-item">
                                 <a href="{{asset('public/img/products/erp/i1.jpg')}}" class="portfolio-item-link" data-rel="prettyPhoto" >
                                    <span class="portfolio-item-hover"></span>
                                    <span class="fullscreen"><i class="fa fa-search"></i></span><img src="{{asset('public/img/products/erp/i1.jpg')}}" alt=" "/>
                                 </a>
                                 <div class="portfolio-item-title">
                                    <a href="single-project.html">HISTORY</a>
                                       <p>
                                          ERP is usually referred to as a category of business-management software typically a suite of integrated applications—that an organization can use to collect, store, manage and interpret data from these many business 
                                       </p>
                                 </div>
                                 <div class="clearfix"></div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item animate_afc d3">
                               <div class="portfolio-item">
                                  <a href="{{asset('public/img/products/erp/i2.jpg')}}" class="portfolio-item-link" data-rel="prettyPhoto" >
                                  <span class="portfolio-item-hover"></span><span class="fullscreen"><i class="fa fa-search"></i></span><img src="{{asset('public/img/products/erp/i2.jpg')}}" alt=" "/>
                                  </a>
                                  <div class="portfolio-item-title">
                                     <a href="single-project.html">PROCESS PREPRATION</a>
                                     <p>
                                       Implementing ERP typically requires changes in existing business processes. Poor understanding of needed process changes prior to starting implementation is a main reason for project failure.
                                     </p>
                                  </div>
                                  <div class="clearfix"></div>
                               </div>
                           </div>
                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item animate_afc d4">
                               <div class="portfolio-item">
                                  <a href="{{asset('public/img/products/erp/i3.jpg')}}" class="portfolio-item-link" data-rel="prettyPhoto" >
                                  <span class="portfolio-item-hover"></span><span class="fullscreen"><i class="fa fa-search"></i></span><img src="{{asset('public/img/products/erp/i3.jpg')}}" alt=" "/>
                                  </a>
                                  <div class="portfolio-item-title">
                                     <a href="single-project.html">EXTENSIONS</a>
                                     <p>
                                        ERP systems can be extended with third–party software.ERP vendors typically provide access to data and features through published interfaces. Extensions offer features such as:Reporting, and republishing.
                                     </p>
                                  </div>
                                  <div class="clearfix"></div>
                               </div>
                           </div>
                        </div>
                        <hr>

          <p style="text-align: center;margin-top: 50px; font-size: 30px;">ERP's scope usually implies significant changes to staff work processes and practices</p>

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
