@extends('layouts.app')

@section('content')
      <div id="main">
         
            <!-- Main Content start-->
            <div class="content">
               <div class="container">

          <div class="row">
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <!-- Tab Start -->
                        <h3 class="title">Auto Cad</h3>
                        <div class="widget tabs animate_afc">
                           <div id="horizontal-tabs">
                              <h3>AutoCAD</h3>
                              <p>AutoCAD is a commercial computer-aided design (CAD) and drafting software application. Developed and marketed by Autodesk,AutoCAD was first released in December 1982 as a desktop app running on microcomputers with internal graphics controllers. Before AutoCAD was introduced, most commercial CAD programs ran on mainframe computers or minicomputers, with each CAD operator (user) working at a separate graphics terminal. Since 2010, AutoCAD was released as a mobile- and web app as well, marketed as AutoCAD 360.AutoCAD is used across a wide range of industries, by architects, project managers, engineers, graphic designers, and many other professionals. It was supported by 750 training centers worldwide in 1994.</p>
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
                                    <h3 class="title">AutoCad</h3>
                                 </div>
                              </div>
                              <div class="clearfix"></div>
                              <div id="testimonials-carousel" class="testimonials-carousel carousel slide animate_afc">
                                 <img src="{{asset('public/img/slider/autocad/0.jpg')}}">
        
                              </div>
                           </div>
                        </div>
                     </div>
                   
                  </div>
               </div>
            </div>
         </div>

   <!-- Content Start -->
   

               <div class="container">
                 
                  <div class="divider"></div>
                  <div class="row">
                     <!-- Recent works start-->
                     <div class="portfolio">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                           <h3 class="title"> AutoCad Models</h3>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 item">
                           <div class="portfolio-item">
                              <a href="{{asset('public/img/portfolio/autocad/1.jpg')}}" class="portfolio-item-link" data-rel="prettyPhoto" >
                              <span class="portfolio-item-hover"></span>
                              <span class="fullscreen"><i class="fa fa-search"></i></span><img src="{{asset('public/img/portfolio/autocad/1.jpg')}}" alt=" "/>
                              </a>
                              <div class="portfolio-item-title">
                                 <a href="#">Video card</a>
                                 <p>
                                   A video card (also called a display card, graphics card, display adapter or graphics adapter) is an expansion card which generates a feed of output images to a display (such as a computer monitor). Frequently, these are advertised as discrete or dedicated graphics cards, emphasizing the distinction.
                                 </p>
                              </div>
                              <div class="clearfix"></div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 item">
                           <div class="portfolio-item">
                              <a href="{{asset('public/img/portfolio/autocad/2.jpg')}}" class="portfolio-item-link" data-rel="prettyPhoto" >
                              <span class="portfolio-item-hover"></span>
                              <span class="fullscreen"><i class="fa fa-search"></i></span><img src="{{asset('public/img/portfolio/autocad/2.jpg')}}" alt=" "/>
                              </a>
                              <div class="portfolio-item-title">
                                 <a href="single-project.html">Graphical Terminals</a>
                                 <p>
                                   A graphical terminal can display images as well as text. Graphical terminals are divided into vector-mode terminals, and raster mode.A vector-mode display directly draws lines on the face of a cathode-ray tube under control of the host computer system. The lines are continuously formed, but since the speed of electronics. 
                                 </p>
                              </div>
                              <div class="clearfix"></div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 item">
                           <div class="portfolio-item">
                              <a href="{{asset('public/img/portfolio/autocad/3.png')}}" class="portfolio-item-link" data-rel="prettyPhoto" >
                              <span class="portfolio-item-hover"></span>
                              <span class="fullscreen"><i class="fa fa-search"></i></span><img src="{{asset('public/img/portfolio/autocad/3.png')}}" alt=" "/>
                              </a>
                              <div class="portfolio-item-title">
                                 <a href="single-project.html">Autodesk</a>
                                 <p>
                                    Autodesk, Inc. is an American multinational software corporation that makes software for the architecture, engineering, construction, manufacturing, media, and entertainment industries. Autodesk is headquartered in San Rafael, California, and features a gallery of its customers' work[3] in its San Francisco building. 
                                 </p>
                              </div>
                              <div class="clearfix"></div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 item">
                           <div class="portfolio-item">
                              <a href="{{asset('public/img/portfolio/autocad/4.jpg')}}" class="portfolio-item-link" data-rel="prettyPhoto" >
                              <span class="portfolio-item-hover"></span>
                              <span class="fullscreen"><i class="fa fa-search"></i></span><img src="{{asset('public/img/portfolio/autocad/4.jpg')}}" alt=" "/>
                              </a>
                              <div class="portfolio-item-title">
                                 <a href="single-project.html">microcomputer</a>
                                 <p>
                                   A microcomputer is a small, relatively inexpensive computer with a microprocessor as its central processing unit (CPU). It includes a microprocessor, memory, and minimal input/output (I/O) circuitry mounted on a single printed circuit board. Microcomputers became popular in the 1970s and 1980s. 
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
