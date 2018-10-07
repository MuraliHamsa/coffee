@extends('layouts.app')

@section('content')

            <!-- Product Content Start-->
            <div class="product-lead bottom-pad" style="background-image:url(public/img/products/sm/p8.jpg)">
               <div class="container">
                  <div class="row">
                     <div class="col-md-4 col-sm-12 col-xs-12 text-center animate_afl d1">
                        <img src="{{asset('public/img/products/sm/sm.png')}}" alt="iPhone5c">
                     </div>
                     <div class="col-md-8 col-sm-12 col-xs-12 animate_afr d3">
                        <div class="app-service">
                           <h3>SAVING MANAGEMENT</h3>
                           <h4>DISCOVER THE QUICKEST ROUTE TO YOUR SAVINGS GOALS.</h4>
                           <p>organizations could be doing a better job evaluating and prioritizing savings ideas, getting buy-in, tracking implementation, and measuring progress against targets.  
                           </p>
                           <!-- <p>
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
                        <h3 class="title">SAVING MANAGEMENT</h3>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-12 col-md-12 col-xs-12">
                        <div class="row portfolio-pad">
                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item animate_afc d2">
                              <div class="portfolio-item">
                                 <a href="{{asset('public/img/products/sm/sm1.jpg')}}" class="portfolio-item-link" data-rel="prettyPhoto" >
                                    <span class="portfolio-item-hover"></span>
                                    <span class="fullscreen"><i class="fa fa-search"></i></span><img src="{{asset('public/img/products/sm/sm1.jpg')}}" alt=" "/>
                                 </a>
                                 <div class="portfolio-item-title">
                                    <a href="single-project.html">LONG-TERM SAVING</a>
                                       <p>
                                          For long-term goals think about investing some of your money. Get some financial advice to work out a good investment strategy to reach your goals.
                                       </p>
                                 </div>
                                 <div class="clearfix"></div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item animate_afc d3">
                               <div class="portfolio-item">
                                  <a href="{{asset('public/img/products/sm/sm2.jpg')}}" class="portfolio-item-link" data-rel="prettyPhoto" >
                                  <span class="portfolio-item-hover"></span><span class="fullscreen"><i class="fa fa-search"></i></span><img src="{{asset('public/img/products/sm/sm2.jpg')}}" alt=" "/>
                                  </a>
                                  <div class="portfolio-item-title">
                                     <a href="single-project.html">SHORT-TERM SAVING</a>
                                     <p>
                                       short-term goals is to reduce your spending on non-essential items, like entertainment, dining out, memberships or subscriptions.
                                     </p>
                                  </div>
                                  <div class="clearfix"></div>
                               </div>
                           </div>
                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item animate_afc d4">
                               <div class="portfolio-item">
                                  <a href="{{asset('public/img/products/sm/sm3.jpg')}}" class="portfolio-item-link" data-rel="prettyPhoto" >
                                  <span class="portfolio-item-hover"></span><span class="fullscreen"><i class="fa fa-search"></i></span><img src="{{asset('public/img/products/sm/sm3.jpg')}}" alt=" "/>
                                  </a>
                                  <div class="portfolio-item-title">
                                     <a href="single-project.html">EMERGENCIES SAVING</a>
                                     <p>
                                        Set your goals, create your savings plan and begin to make your dreams a reality.
                                        It's a good idea to put some money aside for emergencies.
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
