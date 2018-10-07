@extends('layouts.app')

@section('content')
<div id="main">
         
            <!-- Main Content start-->
            <div class="content">
               <div class="container">

          <div class="row">
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <!-- Tab Start -->
                        <h3 class="title">Solid Works</h3>
                        <div class="widget tabs animate_afc">
                           <div id="horizontal-tabs">

                              <img src="{{asset('public/img/slider/solid/0.jpg')}}">
        
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
                                    <h3 class="title">Solid Works</h3>
                                 </div>
                              </div>
                              <div class="clearfix"></div>
                              <div id="testimonials-carousel" class="testimonials-carousel carousel slide animate_afc">
                                 <h3>SolidWorks is a solid modeling computer-aided design (CAD) </h3>
                              <p>SolidWorks is a solid modeling computer-aided design (CAD) and computer-aided engineering (CAE) computer program that runs on Microsoft Windows. SolidWorks is published by Dassault Systèmes.According to the publisher, over two million engineers and designers at more than 165,000 companies were using SolidWorks as of 2013.[2] Also according to the company, fiscal year 2011–12 revenue for SolidWorks totalled $483 million.SolidWorks Corporation was founded in December 1993 by Massachusetts Institute of Technology graduate Jon Hirschtick. Hirschtick used $1 million he had made while a member of the MIT Blackjack Team to set up the company.[4] Initially based in Waltham, Massachusetts, United States, Hirschtick recruited a team of engineers with the goal of building 3D CAD software that was easy-to-use, affordable, and available on the Windows desktop. Operating later from Concord, Massachusetts, SolidWorks released its first product SolidWorks 95, in November 1995.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="clearfix"></div>
                  </div>
               </div>
            </div>
         </div>

   <!-- Content Start -->
         <div id="main">
         
            <!-- Main Content start-->
            <div class="content">
               <div class="container">
                 
                  <div class="divider"></div>
                  <div class="row">
                     <!-- Recent works start-->
                     <div class="portfolio">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                           <h3 class="title">Solid Works</h3>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 item">
                           <div class="portfolio-item">
                              <a href="{{asset('public/img/portfolio/solid/1.jpg')}}" class="portfolio-item-link" data-rel="prettyPhoto" >
                              <span class="portfolio-item-hover"></span>
                              <span class="fullscreen"><i class="fa fa-search"></i></span><img src="{{asset('public/img/portfolio/solid/1.jpg')}}" alt=" "/>
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
                              <a href="{{asset('public/img/portfolio/solid/2.jpg')}}" class="portfolio-item-link" data-rel="prettyPhoto" >
                              <span class="portfolio-item-hover"></span>
                              <span class="fullscreen"><i class="fa fa-search"></i></span><img src="{{asset('public/img/portfolio/solid/2.jpg')}}" alt=" "/>
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
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 item">
                           <div class="portfolio-item">
                              <a href="{{asset('public/img/portfolio/solid/3.jpg')}}" class="portfolio-item-link" data-rel="prettyPhoto" >
                              <span class="portfolio-item-hover"></span>
                              <span class="fullscreen"><i class="fa fa-search"></i></span><img src="{{asset('public/img/portfolio/solid/3.jpg')}}" alt=" "/>
                              </a>
                              <div class="portfolio-item-title">
                                 <a href="single-project.html">Computer program</a>
                                 <p>
                                    A computer program is a collection of instructions[1] that performs a specific task when executed by a computer. A computer requires programs to function.A computer program is usually written by a computer programmer in a programming language.
                                 </p>
                              </div>
                              <div class="clearfix"></div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 item">
                           <div class="portfolio-item">
                              <a href="{{asset('public/img/portfolio/solid/4.jpg')}}" class="portfolio-item-link" data-rel="prettyPhoto" >
                              <span class="portfolio-item-hover"></span>
                              <span class="fullscreen"><i class="fa fa-search"></i></span><img src="{{asset('public/img/portfolio/solid/4.jpg')}}" alt=" "/>
                              </a>
                              <div class="portfolio-item-title">
                                 <a href="single-project.html">Microsoft Windows</a>
                                 <p>
                                   Microsoft Windows, or simply Windows, is a group of several graphical operating system families, all of which are developed, marketed, and sold by Microsoft. Each family caters to a certain sector of the computing industry.
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
