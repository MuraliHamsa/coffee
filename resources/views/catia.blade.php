@extends('layouts.app')

@section('content')
<div id="main">
         
            <!-- Main Content start-->
            <div class="content">
               <div class="container">

          <div class="row">
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <!-- Tab Start -->
                        <h3 class="title">Catia</h3>
                        <div class="widget tabs animate_afc">
                           <div id="horizontal-tabs">

                              <img src="{{asset('public/img/slider/catia/0.jpg')}}">
        
                           </div>
                        </div>
                        <!-- Tab End -->
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <!-- Testimonials Widget Start -->
                        <div class="row">
                           <div class="testimonials widget">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="testimonials-title">
                                    <h3 class="title">Catia</h3>
                                 </div>
                              </div>
                              <div class="clearfix"></div>
                              <div id="testimonials-carousel" class="testimonials-carousel carousel slide animate_afc">
                                 <h3>computer aided three-dimensional interactive application</h3>
                              <p>CATIA (an acronym of computer aided three-dimensional interactive application, pronounced /kəˈtiə/) is a multi-platform software suite for computer-aided design (CAD), computer-aided manufacturing (CAM), computer-aided engineering (CAE), PLM and 3D, developed by the French company Dassault Systèmes.CATIA started as an in-house development in 1977 by French aircraft manufacturer Avions Marcel Dassault, at that time customer of the CADAM software to develop Dassault's Mirage fighter jet. It was later adopted by the aerospace, automotive, shipbuilding, and other industries.Initially named CATI (conception assistée tridimensionnelle interactive – French for interactive aided three-dimensional design ), it was renamed CATIA in 1981 when Dassault created a subsidiary to develop and sell the software and signed a non-exclusive distribution agreement with IBM.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="clearfix"></div>
                  </div>
               </div>
            </div>
         </div>

   
               <div class="container">
                 
                  <div class="divider"></div>
                  <div class="row">
                     <!-- Recent works start-->
                     <div class="portfolio">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                           <h3 class="title">Catia</h3>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 item">
                           <div class="portfolio-item">
                              <a href="{{asset('public/img/portfolio/catia/1.jpg')}}" class="portfolio-item-link" data-rel="prettyPhoto" >
                              <span class="portfolio-item-hover"></span>
                              <span class="fullscreen"><i class="fa fa-search"></i></span><img src="{{asset('public/img/portfolio/catia/1.jpg')}}" alt=" "/>
                              </a>
                              <div class="portfolio-item-title">
                                 <a href="single-project.html">Software suite</a>
                                 <p>
                                    A software suite or application suite is a collection of computer programs —usually application software or programming software— of related functionality, often sharing a similar user interface and the ability to easily exchange data .
                                 </p>
                              </div>
                              <div class="clearfix"></div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 item">
                           <div class="portfolio-item">
                              <a href="{{asset('public/img/portfolio/catia/2.jpg')}}" class="portfolio-item-link" data-rel="prettyPhoto" >
                              <span class="portfolio-item-hover"></span>
                              <span class="fullscreen"><i class="fa fa-search"></i></span><img src="{{asset('public/img/portfolio/catia/2.jpg')}}" alt=" "/>
                              </a>
                              <div class="portfolio-item-title">
                                 <a href="single-project.html">Computer-aided design</a>
                                 <p>
                                   Computer-aided design (CAD) is the use of computer systems (or workstations) to aid in the creation, modification, analysis, or optimization of a design. CAD software is used to increase the productivity of the designer, improve the quality of design.
                                 </p>
                              </div>
                              <div class="clearfix"></div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 item">
                           <div class="portfolio-item">
                              <a href="{{asset('public/img/portfolio/catia/3.jpg')}}" class="portfolio-item-link" data-rel="prettyPhoto" >
                              <span class="portfolio-item-hover"></span>
                              <span class="fullscreen"><i class="fa fa-search"></i></span><img src="{{asset('public/img/portfolio/catia/3.jpg')}}" alt=" "/>
                              </a>
                              <div class="portfolio-item-title">
                                 <a href="single-project.html">Computer-aided manufacturing</a>
                                 <p>
                                    Computer-aided manufacturing (CAM) is the use of software to control machine tools and related ones in the manufacturing of workpieces.This is not the only definition for CAM, but it is the most common.
                                 </p>
                              </div>
                              <div class="clearfix"></div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 item">
                           <div class="portfolio-item">
                              <a href="{{asset('public/img/portfolio/catia/4.jpg')}}" class="portfolio-item-link" data-rel="prettyPhoto" >
                              <span class="portfolio-item-hover"></span>
                              <span class="fullscreen"><i class="fa fa-search"></i></span><img src="{{asset('public/img/portfolio/catia/4.jpg')}}" alt=" "/>
                              </a>
                              <div class="portfolio-item-title">
                                 <a href="single-project.html">Computer-aided engineering</a>
                                 <p>
                                    Computer-aided engineering (CAE) is the broad usage of computer software to aid in engineering analysis tasks. It includes finite element analysis (FEA), computational fluid dynamics (CFD), multibody dynamics (MBD), and optimization.
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
   

@endsection
