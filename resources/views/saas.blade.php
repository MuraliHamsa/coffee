@extends('layouts.app')

@section('content')

		            <div class="divider"></div>
			<div class="container">
               	   <div class="row">
                     <div class="col-lg-12">
                        <h3 class="title">Saas</h3>
                     </div>
                     <div class="clearfix"></div>
                       <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 animate_afr">
                                 <!-- <img src="{{asset('public/img/team/team.jpg')}}" alt=""> -->
                      <img src="{{asset('public/img/slider/saas.jpg')}}">
                  </div>
                     <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 animate_afl">
                        <h4>What is SaaS? Software as a service</h4>
                        <p>
                           Software as a service (SaaS) allows users to connect to and use cloud-based apps over the Internet. Common examples are email, calendaring and office tools (such as Microsoft Office 365).SaaS provides a complete software solution which you purchase on a pay-as-you-go basis from a cloud service provider. You rent the use of an app for your organisation and your users connect to it over the Internet, usually with a web browser. All of the underlying infrastructure, middleware, app software and app data are located in the service provider’s data center.
                        </p>
                     </div>
                   
              </div>
          </div>
      <div class="services-big">
          <div class="container">
                  <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h3 class="title">SaaS-Tenant</h3>
                     </div>
                     <div class="clearfix"></div>
                     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="content-box">
                           <div class="content-box-icon">
                              <img src="{{asset('public/img/portfolio/saas1.jpg')}}" alt=" "/>
                           </div>
                           <div class="content-box-info">
                              <h4>SaaS-Tenant</h4>
                              <p>
                                  SaaS-Tenant enables a single instance of your application to serve thousands of tenants. SaaS multi tenant application saves users from arduous task of building robust, scalable cloud solution and let them focus on their business logic. 
                              </p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="content-box">
                           <div class="content-box-icon">
                              <img src="{{asset('public/img/portfolio/saas2.jpg')}}" alt=" "/>
                           </div>
                           <div class="content-box-info">
                              <h4>SaaS-Tenant</h4>
                              <p>SaaS provider implies that you are moving from a packaged software model, a "product organization" to a "service organization" with hassle free management. 
                              </p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="content-box">
                           <div class="content-box-icon">
                              <img src="{{asset('public/img/portfolio/saas3.jpg')}}" alt=" "/>
                           </div>
                           <div class="content-box-info">
                              <h4>SaaS-Tenant</h4>
                              <p>
                                 SaaS-Tenant can be deployed on public or private infrastructure, providing freedom from lock-in and tremendous increases in developer productivity, infrastructure utilization, and app management agility. 
                              </p>
                           </div>
                        </div>
                     </div>
                     <!-- 3 Column Services End-->
                     <div class="clearfix"></div>
                  </div>
               </div>
           </div>

                <div class="divider"></div>
           <div class="service-reasons">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h3 class="title">“WHAT WOULD AN APP LOOK LIKE IF IT WAS BUILT FROM THE GROUND UP TO LIVE IN THE CLOUD, TO CONNECT CUSTOMERS THE WAY THE INTERNET HAS BEEN, TO BE SOCIAL, TO DO ALL THE REST?” WRITES WARFIELD. “WELCOME TO SAAS MULTITENANT.</h3>
                     </div>
                     <div class="divider"></div>
                     <div class="reasons">
                        <div class="col-lg-4 col-md-4 col-sm-4 animate_afc d1">
                           <div class="content-box big ch-item bottom-pad-small">
                              <div class="ch-info-wrap">
                                 <div class="ch-info">
                                    <div class="ch-info-front ch-img-1">
                                      <img src="{{asset('public/img/saa2.png')}}"><!--  <i class="fa fa-rocket"></i> --></div>
                                    <div class="ch-info-back">
                                       <img src="{{asset('public/img/saa2.png')}}">
                                    </div>
                                 </div>
                              </div>
                              <div class="content-box-info">
                                 <h3>Doug</h3>
                                 <p>
                                    “Web Apps built from scratch rarely aren’t Multi-Tenant; the debate only comes up with legacy software vendors migrating to SaaS and trying to justify their cutting corners.”
                                 </p>
                                 <!-- <a href="#">Read More <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a> -->
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 animate_afc d2">
                           <div class="content-box big ch-item bottom-pad-small">
                              <div class="ch-info-wrap">
                                 <div class="ch-info">
                                    <div class="ch-info-front ch-img-1"><img src="{{asset('public/img/saa1.png')}}"></div>
                                    <div class="ch-info-back">
                                      <img src="{{asset('public/img/saa1.png')}}">
                                    </div>
                                 </div>
                              </div>
                              <div class="content-box-info">
                                 <h3>Lincoln Murphy</h3>
                                 <p>
                                    I believe that a growth engine that doesn’t take into consideration Customer Success, retention, churn mitigation, and expansion revenue in addition to Acquisition-based growth is not an efficient growth engine.
                                 </p>
                                 <!-- <a href="#">Read More <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a> -->
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 animate_afc d3">
                           <div class="content-box big ch-item">
                              <div class="ch-info-wrap">
                                 <div class="ch-info">
                                    <div class="ch-info-front ch-img-1"><img src="{{asset('public/img/saa3.png')}}"></div>
                                    <div class="ch-info-back">
                                      <img src="{{asset('public/img/saa3.png')}}">
                                    </div>
                                 </div>
                              </div>
                              <div class="content-box-info">
                                 <h3>Bryan Johnson</h3>
                                 <p>
                                    There’s just so many reasons for considering multi-instance over multi-tenancy, but let me give you one. An application that must run on-prem OR in the cloud. Build it once, my ignorant friend, build it once.
                                 </p>
                                 <!-- <a href="#">Read More <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a> -->
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>


@endsection
