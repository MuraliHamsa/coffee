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
                           <h3>Migration To Cloud</h3>
                           <div class="recentwork_wrapper">
                           <div class="post-image">
                              <a href="{{asset('public/img/slider/cloud.jpg')}}" data-rel="prettyPhoto">
                              <span class="img-hover"></span>
                              <span class="fullscreen"><i class="fa fa-search"></i></span>
                              <img src="{{asset('public/img/slider/cloud.jpg')}}" alt="">
                              </a>
                           </div>
                        </div>
                           
                           <div class="post-content top-pad">
                              <p>
Cloud migration sometimes involves moving data or other business elements between cloud environments, which is known as cloud-to-cloud migration. The process of transitioning to a different cloud provider is known as cloud service migration. In any case, successful migration to a service provider’s environment may require the use of middleware, such as a cloud integration tool, to bridge any gaps between the vendor’s and the customer’s (or other vendor’s) technologies.

Transitioning to the cloud or between cloud environments presents the usual IT issues, but the problems are compounded by having data stored and managed remotely, by external organizations and often in multiple locations. Among these issues are special considerations for privacy, interoperability, data and application portability, data integrity, business continuity, and security.
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
                              <a href="{{asset('public/img/portfolio/aws.jpg')}}" class="portfolio-item-link" data-rel="prettyPhoto" >
                              <span class="portfolio-item-hover"></span>
                              <span class="fullscreen"><i class="fa fa-search"></i></span><img src="{{asset('public/img/portfolio/aws.jpg')}}" alt=" "/>
                              </a>
                              <div class="portfolio-item-title">
                                 <a href="single-project.html">ProtectV for AWS Marketplace</a>
                                 <p>
                                  protects sensitive workloads throughout the lifecycle - from its creation, through each transaction and change of hands, each snapshot, and its storage in the cloud.  data back to the company’s data center, which also would have required increased storage and compute capacity.
                                 </p>
                              </div>
                              <div class="clearfix"></div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 item">
                           <div class="portfolio-item">
                              <a href="{{asset('public/img/portfolio/aws1.jpg')}}" class="portfolio-item-link" data-rel="prettyPhoto" >
                              <span class="portfolio-item-hover"></span>
                              <span class="fullscreen"><i class="fa fa-search"></i></span><img src="{{asset('public/img/portfolio/aws1.jpg')}}" alt=" "/>
                              </a>
                              <div class="portfolio-item-title">
                                 <a href="single-project.html">Virtual KeySecure for AWS Marketplace</a>
                                 <p>
                                   centralizes key management for ProtectV-secured virtual instances, using a hardened virtual security appliance that runs in the AWS cloud—enabling you virtualized and cloud infrastructure, increasing security and compliance for sensitive data.
                                 </p>
                              </div>
                              <div class="clearfix"></div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 item">
                           <div class="portfolio-item">
                              <a href="{{asset('public/img/portfolio/aws2.jpg')}}" class="portfolio-item-link" data-rel="prettyPhoto" >
                              <span class="portfolio-item-hover"></span>
                              <span class="fullscreen"><i class="fa fa-search"></i></span><img src="{{asset('public/img/portfolio/aws2.jpg')}}" alt=" "/>
                              </a>
                              <div class="portfolio-item-title">
                                 <a href="single-project.html">Network HSM</a>
                                 <p>
                                   single-tenant appliance located in the AWS cloud for your cryptographic storage needs to securely generate, store, and manage the cryptographic keys used for data encryption, such that they are accessible only with explicit authorization by your administrators.
                                 </p>
                              </div>
                              <div class="clearfix"></div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 item">
                           <div class="portfolio-item">
                              <a href="{{asset('public/img/portfolio/aws3.jpg')}}" class="portfolio-item-link" data-rel="prettyPhoto" >
                              <span class="portfolio-item-hover"></span>
                              <span class="fullscreen"><i class="fa fa-search"></i></span><img src="{{asset('public/img/portfolio/aws3.jpg')}}" alt=" "/>
                              </a>
                              <div class="portfolio-item-title">
                                 <a href="single-project.html">TOOLS FOR CLOUD MIGRATION</a>
                                 <p>
                                    Migrating applications to a private, public, or hybrid cloud is a complex undertaking, and it’s no surprise that various types of cloud migration tools have come into favor to help to automate and evaluate the migration process.reducing insurance premiums for appropriate customers. 
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
