@extends('layouts.app')

@section('content')

            <!-- Product Content Start-->
            <div class="product-lead bottom-pad" style="background-image:url(public/img/products/mms/p6.jpg)">
               <div class="container">
                  <div class="row">
                     <div class="col-md-4 col-sm-12 col-xs-12 text-center animate_afl d1">
                        <img src="{{asset('public/img/products/mms/mms.png')}}" alt="iPhone5c">
                     </div>
                     <div class="col-md-8 col-sm-12 col-xs-12 animate_afr d3">
                        <div class="app-service">
                           <h3>MEDICAL MANAGEMENT</h3>
                           <h4> A KEY TO DELIVER APPOSITE HEALTHCARE FACILITIES</h4>
                           <p>Journal of Hospital & Medical Management provide such international discussion platform where information among the interested individuals could be shared. 
                           </p>
                          <!--  <p>
                              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                           </p> -->
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
                        <h3 class="title">MEDICAL MANAGEMENT</h3>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-12 col-md-12 col-xs-12">
                        <div class="row portfolio-pad">
                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item animate_afc d2">
                              <div class="portfolio-item">
                                 <a href="{{asset('public/img/products/mms/mm1.jpg')}}" class="portfolio-item-link" data-rel="prettyPhoto" >
                                    <span class="portfolio-item-hover"></span>
                                    <span class="fullscreen"><i class="fa fa-search"></i></span><img src="{{asset('public/img/products/mms/mm1.jpg')}}" alt=" "/>
                                 </a>
                                 <div class="portfolio-item-title">
                                    <a href="single-project.html">HEALTH CARE SYSTEMS</a>
                                       <p>
                                         Health care system, an organized plan of health services refer to system or program by which health care is made available to population and financed by government, private enterprise or both. Primary care includes early detection and prevention of disease.
                                       </p>
                                 </div>
                                 <div class="clearfix"></div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item animate_afc d3">
                               <div class="portfolio-item">
                                  <a href="{{asset('public/img/products/mms/mm2.jpg')}}" class="portfolio-item-link" data-rel="prettyPhoto" >
                                  <span class="portfolio-item-hover"></span><span class="fullscreen"><i class="fa fa-search"></i></span><img src="{{asset('public/img/products/mms/mm2.jpg')}}" alt=" "/>
                                  </a>
                                  <div class="portfolio-item-title">
                                     <a href="single-project.html">MEDICAL CASE MANAGEMENT</a>
                                     <p>
                                        Medical case management is a collaborative process that facilitates recommended treatment plans to assure the appropriate medical care is provided to disabled, ill or injured individuals. It is a role frequently overseen by patient advocates.
                                     </p>
                                  </div>
                                  <div class="clearfix"></div>
                               </div>
                           </div>
                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item animate_afc d4">
                               <div class="portfolio-item">
                                  <a href="{{asset('public/img/products/mms/mm3.jpg')}}" class="portfolio-item-link" data-rel="prettyPhoto" >
                                  <span class="portfolio-item-hover"></span><span class="fullscreen"><i class="fa fa-search"></i></span><img src="{{asset('public/img/products/mms/mm3.jpg')}}" alt=" "/>
                                  </a>
                                  <div class="portfolio-item-title">
                                     <a href="single-project.html">HOSPITAL PHARMACY</a>
                                     <p>
                                       Hospital pharmacies are pharmacies usually found within the premises of a hospital. Hospital pharmacies usually stock a larger range of medications, including more specialized and investigational medications, than would be feasible in the community setting.
                                     </p>
                                  </div>
                                  <div class="clearfix"></div>
                               </div>
                           </div>
                        </div>
                        <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 animate_afl d1">
                        <h3 class="title">WHY CHOOSE US?</h3>
                     </div>
                  </div>
                  <p style="text-align: center; font-size: 20px;">Three reasons to work together.</p>
                        <div class="row">
                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item animate_afc d5">
                               <div class="portfolio-item">
                                  <a href="{{asset('public/img/portfolio/portfolio-4.jpg')}}" class="portfolio-item-link" data-rel="prettyPhoto" >
                                  <span class="portfolio-item-hover"></span><span class="fullscreen"><i class="fa fa-search"></i></span><img src="{{asset('public/img/portfolio/portfolio-4.jpg')}}" alt=" "/>
                                  </a>
                                  <div class="portfolio-item-title">
                                     <!-- <a href="single-project.html">Camera Icon</a> -->
                                     <p>
                                        Increase demand or support for health services and argue against misconceptions about health.
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
                                     <!-- <a href="single-project.html">Penguin</a> -->
                                     <p>
                                       Providing patient treatment with specialized staff and equipment.
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
                                     <!-- <a href="single-project.html">Sound Box</a> -->
                                     <p>
                                        Journal of Hospital & Medical Management provide information among the individuals could be shared.
                                     </p>
                                  </div>
                                  <div class="clearfix"></div>
                               </div>
                           </div>
                        </div>
                           <div class="clearfix"></div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Recent work end-->


@endsection
