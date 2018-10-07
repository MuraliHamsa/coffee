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
                           <h3>IT Services</h3>
                           <div class="recentwork_wrapper">
                           <div class="post-image">
                              <a href="{{asset('public/img/slider/it.jpg')}}" data-rel="prettyPhoto">
                              <span class="img-hover"></span>
                              <span class="fullscreen"><i class="fa fa-search"></i></span>
                              <img src="{{asset('public/img/slider/it.jpg')}}" alt="">
                              </a>
                           </div>
                        </div>
                           
                           <div class="post-content top-pad">
                              <p>
                                 Information technology (IT) is the application of computers to store, study, retrieve, transmit and manipulate data, or information, often in the context of a business or other enterprise.IT is considered a subset of information and communications technology (ICT). In 2012, Zuppo proposed an ICT hierarchy where each hierarchy level "contain[s] some degree of commonality in that they are related to technologies that facilitate the transfer of information and various types of electronically mediated communications".The term is commonly used as a synonym for computers and computer networks, but it also encompasses other information distribution technologies such as television and telephones. Several industries are associated with information technology, including computer hardware, software, electronics, semiconductors, internet, telecom equipment, and e-commerce.
                              </p>
                              <p>
                                 Electronic computers, using either relays or valves, began to appear in the early 1940s. The electromechanical Zuse Z3, completed in 1941, was the world's first programmable computer, and by modern standards one of the first machines that could be considered a complete computing machine. Colossus, developed during the Second World War to decrypt German messages was the first electronic digital computer. Although it was programmable, it was not general-purpose, being designed to perform only a single task. It also lacked the ability to store its program in memory; programming was carried out using plugs and switches to alter the internal wiring.[12][page needed] The first recognisably modern electronic digital stored-program computer was the Manchester Small-Scale Experimental Machine (SSEM), which ran its first program on 21 June 1948.\


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
                              <a href="{{asset('public/img/portfolio/portfolio-2.jpg')}}" class="portfolio-item-link" data-rel="prettyPhoto" >
                              <span class="portfolio-item-hover"></span>
                              <span class="fullscreen"><i class="fa fa-search"></i></span><img src="{{asset('public/img/portfolio/142.png')}}" alt=" "/>
                              </a>
                              <div class="portfolio-item-title">
                                 <a href="single-project.html">Fico</a>
                                 <p>
                                    FICO was founded in 1956 as Fair, Isaac and Company by engineer William Fair and mathematician Earl Isaac. The two met while working at the Stanford Research Institute in Menlo Park, California. Selling its first credit scoring system two years after the company's creation,FICO pitched its system to fifty American lenders.
                                 </p>
                              </div>
                              <div class="clearfix"></div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 item">
                           <div class="portfolio-item">
                              <a href="{{asset('public/img/portfolio/portfolio-3.jpg')}}" class="portfolio-item-link" data-rel="prettyPhoto" >
                              <span class="portfolio-item-hover"></span>
                              <span class="fullscreen"><i class="fa fa-search"></i></span><img src="{{asset('public/img/portfolio/123.jpg')}}" alt=" "/>
                              </a>
                              <div class="portfolio-item-title">
                                 <a href="single-project.html">Bpo Services</a>
                                 <p>
                                      Let us help you do your job with a customized IT support plan that is cost-effective, offers backups that work, security that keeps hackers out retaining old customers and providing service excellence – a winning formula which pays rich dividends and technology that drives profitability and growth
                                 </p>
                              </div>
                              <div class="clearfix"></div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 item">
                           <div class="portfolio-item">
                              <a href="{{asset('public/img/portfolio/portfolio-4.jpg')}}" class="portfolio-item-link" data-rel="prettyPhoto" >
                              <span class="portfolio-item-hover"></span>
                              <span class="fullscreen"><i class="fa fa-search"></i></span><img src="{{asset('public/img/portfolio/digi.jpg')}}" alt=" "/>
                              </a>
                              <div class="portfolio-item-title">
                                 <a href="single-project.html">DIGITAL MARKETING</a>
                                 <p>
                                  We are an internet marketing company specialized in ethical search engine optimization (SEO), Search Engine Advertising (SEA) and Web Analytics. We guarantee an efficient and profitable optimization of your website. With strong knowledge and experience we make your website a winner. 
                                 </p>
                              </div>
                              <div class="clearfix"></div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 item">
                           <div class="portfolio-item">
                              <a href="{{asset('public/img/portfolio/portfolio-5.jpg')}}" class="portfolio-item-link" data-rel="prettyPhoto" >
                              <span class="portfolio-item-hover"></span>
                              <span class="fullscreen"><i class="fa fa-search"></i></span><img src="{{asset('public/img/portfolio/skill.jpg')}}" alt=" "/>
                              </a>
                              <div class="portfolio-item-title">
                                 <a href="single-project.html">SKILL DEVELOPMENT</a>
                                 <p>With us you will discover new experiences of dynamics and supportive atmosphere. Your horizons will be broadened and you would feel the liberating powers of new ideas and enlightenment. You will be involved in our core fabric of flexibility, creativity and innovation.liberating powers of new ideas and enlightenment.
                                  
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
