@extends('layouts.app')

@section('content')

            <!-- Product Content Start-->
            <div class="product-lead bottom-pad" style="background-image:url(public/img/products/cm/p3.jpg)">
               <div class="container">
                  <div class="row">
                     <div class="col-md-4 col-sm-12 col-xs-12 text-center animate_afl d1">
                        <img src="{{asset('public/img/products/cm/cm.png')}}" alt="iPhone5c">
                     </div>
                     <div class="col-md-8 col-sm-12 col-xs-12 animate_afr d3">
                        <div class="app-service">
                           <h3>CLOUD MANAGEMENT</h3>
                           <h4>CLIENT–SERVER MODEL</h4>
                           <p>Client–server computing refers broadly to any distributed application that distinguishes between service providers and service requestors.  
                           </p>
                           <h4>COMPUTER BUREAU</h4>
                           <p>
                              A service bureau providing computer services, particularly from the 1960s to 1980s.
                           </p>
                           <h4>GRID COMPUTING</h4>
                           <p>A form of distributed and parallel computing, whereby a 'super and virtual computer' is composed of a cluster of networked, loosely coupled computers acting in concert to perform very large tasks.</p>
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
                        <h3 class="title">CLOUD MANAGEMENT</h3>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-12 col-md-12 col-xs-12">
                        <div class="row portfolio-pad">
                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item animate_afc d2">
                              <div class="portfolio-item">
                                 <a href="{{asset('public/img/products/cm/c1.jpg')}}" class="portfolio-item-link" data-rel="prettyPhoto" >
                                    <span class="portfolio-item-hover"></span>
                                    <span class="fullscreen"><i class="fa fa-search"></i></span><img src="{{asset('public/img/products/cm/c1.jpg')}}" alt=" "/>
                                 </a>
                                 <div class="portfolio-item-title">
                                    <a href="single-project.html">JAVA PERFORMANCE MONITORING</a>
                                       <p>
                                          Developers can now easily identify slow internal invocations (methods) in the Java code and view the entire pathway in serving the web request in a tree view. The trace will chart the sequence of invocations of the URL from filters to user defined methods.You can also identify the SQL queries executed during the transaction.
                                       </p>
                                 </div>
                                 <div class="clearfix"></div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item animate_afc d3">
                               <div class="portfolio-item">
                                  <a href="{{asset('public/img/products/cm/c2.jpg')}}" class="portfolio-item-link" data-rel="prettyPhoto" >
                                  <span class="portfolio-item-hover"></span><span class="fullscreen"><i class="fa fa-search"></i></span><img src="{{asset('public/img/products/cm/c2.jpg')}}" alt=" "/>
                                  </a>
                                  <div class="portfolio-item-title">
                                     <a href="single-project.html">.NET APPLICATION MONITORING</a>
                                     <p>
                                        Pinpoint slow .NET application code. Using Site24x7 APM Insight easily identify slow internal invocations (methods) in the .NET code and trace the execution details for URLs. The trace will chart the sequence of internal invocations of the URL allowing you to drill down into transactions to view stack traces and SQL queries for slow or failed requests.
                                     </p>
                                  </div>
                                  <div class="clearfix"></div>
                               </div>
                           </div>
                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item animate_afc d4">
                               <div class="portfolio-item">
                                  <a href="{{asset('public/img/products/cm/c3.jpg')}}" class="portfolio-item-link" data-rel="prettyPhoto" >
                                  <span class="portfolio-item-hover"></span><span class="fullscreen"><i class="fa fa-search"></i></span><img src="{{asset('public/img/products/cm/c3.jpg')}}" alt=" "/>
                                  </a>
                                  <div class="portfolio-item-title">
                                     <a href="single-project.html">PHP APPLICATION MONITORING</a>
                                     <p>
                                        With the help of various performance metrics, we provide a detail view on the performance of the application and identify how customer experience can be improved. Key metrics like Apdex Score, Response Time and Throughput enables you to identify bottlenecks that hinder your application performance.
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
