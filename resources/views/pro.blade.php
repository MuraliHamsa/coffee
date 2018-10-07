@extends('layouts.app')

@section('content')
      <div id="main">
         
            <!-- Main Content start-->
            <div class="content">
               <div class="container">

          <div class="row">
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <!-- Tab Start -->
                        <h3 class="title">Pro-E</h3>
                        <div class="widget tabs animate_afc">
                           <div id="horizontal-tabs">
                              <h3>Pro-E and Creo</h3>
                              <p>PTC Creo, formerly known as Pro/ENGINEER is a parametric, integrated 3D CAD/CAM/CAE solution created by Parametric Technology Corporation (PTC). It was the first to market with parametric, feature-based, associative solid modeling software. The application runs on Microsoft Windows platform, and provides solid modeling, assembly modelling and drafting, finite element analysis, direct and parametric modelling, sub-divisional and nurbs surfacing, and NC and tooling functionality for mechanical engineers. It features a suite of 10 applications which work within the same program.Basically a business strategy to capture more market share by introducing Ribbon interface like Microsoft Office & adding direct or explicit modeling, a different concept altogether.</p>
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
                                    <h3 class="title"> Pro-E</h3>
                                 </div>
                              </div>
                              <div class="clearfix"></div>
                              <div id="testimonials-carousel" class="testimonials-carousel carousel slide animate_afc">
                                 <img src="{{asset('public/img/slider/pro/0.jpg')}}">
        
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
                           <h3 class="title">Pro-E</h3>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 item">
                           <div class="portfolio-item">
                              <a href="{{asset('public/img/portfolio/pro/1.png')}}" class="portfolio-item-link" data-rel="prettyPhoto" >
                              <span class="portfolio-item-hover"></span>
                              <span class="fullscreen"><i class="fa fa-search"></i></span><img src="{{asset('public/img/portfolio/pro/1.png')}}" alt=" "/>
                              </a>
                              <div class="portfolio-item-title">
                                 <a href="single-project.html">Solid Modeling</a>
                                 <p>
                                    Solid modeling (or modelling) is a consistent set of principles for mathematical and computer modeling of three-dimensional solids. Solid modeling is distinguished from related areas of geometric modeling and computer graphics by its emphasis on physical fidelity.
                                 </p>
                              </div>
                              <div class="clearfix"></div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 item">
                           <div class="portfolio-item">
                              <a href="{{asset('public/img/portfolio/pro/2.png')}}" class="portfolio-item-link" data-rel="prettyPhoto" >
                              <span class="portfolio-item-hover"></span>
                              <span class="fullscreen"><i class="fa fa-search"></i></span><img src="{{asset('public/img/portfolio/pro/2.png')}}" alt=" "/>
                              </a>
                              <div class="portfolio-item-title">
                                 <a href="single-project.html">Assembly Modeling</a>
                                 <p>
                                   Assembly modeling is a technology and method used by computer-aided design and product visualization computer software systems to handle multiple files that represent components within a product. The components within an assembly are represented as solid or surface models.
                                 </p>
                              </div>
                              <div class="clearfix"></div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 item">
                           <div class="portfolio-item">
                              <a href="{{asset('public/img/portfolio/pro/3.png')}}" class="portfolio-item-link" data-rel="prettyPhoto" >
                              <span class="portfolio-item-hover"></span>
                              <span class="fullscreen"><i class="fa fa-search"></i></span><img src="{{asset('public/img/portfolio/pro/3.png')}}" alt=" "/>
                              </a>
                              <div class="portfolio-item-title">
                                 <a href="single-project.html">Technical Drawing</a>
                                 <p>
                                    Technical drawing, drafting or drawing, is the act and discipline of composing drawings that visually communicate how something functions or is constructed.Technical drawing is essential for communicating ideas in industry and engineering. To make the drawings easier to understand.
                                 </p>
                              </div>
                              <div class="clearfix"></div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 item">
                           <div class="portfolio-item">
                              <a href="{{asset('public/img/portfolio/pro/4.jpg')}}" class="portfolio-item-link" data-rel="prettyPhoto" >
                              <span class="portfolio-item-hover"></span>
                              <span class="fullscreen"><i class="fa fa-search"></i></span><img src="{{asset('public/img/portfolio/pro/4.jpg')}}" alt=" "/>
                              </a>
                              <div class="portfolio-item-title">
                                 <a href="single-project.html">Finite element method</a>
                                 <p>
                                    The finite element method (FEM) is a numerical method for solving problems of engineering and mathematical physics. It is also referred to as finite element analysis (FEA). Typical problem areas of interest include structural analysis, heat transfer, fluid flow, mass transport, and electromagnetic potential.
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
