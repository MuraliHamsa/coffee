@extends('layouts.app')

@section('content')

           <!-- Slider Start-->
            <div class="fullwidthbanner-container">
               <div class="fullwidthbanner rslider">
                  <ul>
                     <!-- THE FIRST SLIDE -->
                     <li data-delay="6000" data-masterspeed="300" data-transition="fade">
                        <div class="slotholder"><img src="{{asset('public/img/slider/slider4.jpg')}}" data-fullwidthcentering="on" alt="Pixma"></div>
                        <div class="caption modern_big_bluebg h1 lft tp-caption start"
                           data-x="40"
                           data-y="85"
                           data-speed="700"
                           data-endspeed="800"
                           data-start="1000"
                           data-easing="easeOutQuint"
                           data-endeasing="easeOutQuint">
                           <h3>MAILING LISTS BY INDUSTRY</h3>
                        </div>
                       <!--  <div class="caption list_slide lfb tp-caption start" 
                           data-easing="easeOutExpo" 
                           data-start="1400" 
                           data-speed="1050" 
                           data-y="180" 
                           data-x="40">
                           <div class="list-slide">
                              <i class="fa fa-camera slide-icon"></i>
                              <h5 class="dblue"> 10 predefined color skins </h5>
                           </div>
                        </div> -->
                        <div class="caption list_slide lfb tp-caption start" 
                           data-easing="easeOutExpo" 
                           data-start="1800" 
                           data-speed="1200" 
                           data-y="300" 
                           data-x="50">
                           <!-- <div class="list-slide"> -->
                               <img src="{{asset('public/img/logo.png')}}" alt="iMac Responsive" width="250px" height="150px">

                              <!-- <h3 class="list-slide" style="color: #165b71;"> We Create The Opportunities</h3> -->
                           <!-- </div> -->
                        </div>

                        <div class="caption list_slide lfb tp-caption start" 
                           data-easing="easeOutExpo" 
                           data-start="2200" 
                           data-speed="1350" 
                           data-y="260" 
                           data-x="40">
                           <div class="list-slide">
                              <!-- <i class="fa fa-code slide-icon"></i> -->
                              <h3 class="dblue" style="color:#444444;text-shadow: 0 0 5px #A5F1FF, 0 0 10px #A5F1FF,
             0 0 20px #A5F1FF, 0 0 30px #A5F1FF,
             0 0 40px #A5F1FF;"> Welcome to Pro Accurate Data </h3>
                           </div>
                          
                        </div>
                        <!-- <div class="caption lfb caption_button_1 fadeout tp-caption start pull-right"
                           data-x="40"
                           data-y="330"
                           data-speed="900"
                           data-endspeed="300"
                           data-start="2700"
                           data-hoffset="-70"
                           data-easing="easeOutExpo">
                           <a class="btn-special hidden-xs btn-grey" href="#">Learn More</a>
                        </div> -->
                     <!--    <div class="caption lfb caption_button_2 fadeout tp-caption start"
                           data-x="210"
                           data-y="330"
                           data-speed="800"
                           data-endspeed="300"
                           data-start="2900"
                           data-hoffset="70"
                           data-easing="easeOutExpo">
                           <a class="btn-special hidden-xs btn-color" href="#">We Create The Opportunities</a>
                        </div> -->
                     </li>
                     <!-- THE RESPONSIVE SLIDE -->
                     <li data-transition="fade" data-slotamount="1" data-masterspeed="300">
                        <img src="{{asset('public/img/slider/slider5.jpg')}}" data-fullwidthcentering="on" alt="">
                        <div class="caption large_text sft"
                           data-x="660"
                           data-y="54"
                           data-speed="300"
                           data-start="800"
                           data-easing="easeOutExpo"  ><h3>Success</h3> </div>
                  <!--       <div class="caption medium_text sfl"
                           data-x="689"
                           data-y="92"
                           data-speed="300"
                           data-start="1100"
                           data-easing="easeOutExpo"  >AND</div> -->
                      <!--   <div class="caption large_text sfr"
                           data-x="738"
                           data-y="88"
                           data-speed="300"
                           data-start="1100"
                           data-easing="easeOutExpo"  ><span class="dblue">RESPONSIVE</span></div> -->
                       <!--  <div class="caption list_slide lfb tp-caption start" 
                           data-easing="easeOutExpo" 
                           data-start="1400" 
                           data-speed="1050" 
                           data-y="180" 
                           data-x="660">
                           <div class="list-slide">
                              <i class="fa fa-eye slide-icon"></i>
                              <h5> Retina Ready </h5>
                           </div>
                        </div> -->
                        <div class="caption list_slide lfb tp-caption start" 
                           data-easing="easeOutExpo" 
                           data-start="1800" 
                           data-speed="1200" 
                           data-y="220" 
                           data-x="660">
                           <div class="list-slide">
                               <h3> Success Depends On Work </h3>
                           </div>
                        </div>
                      <!--   <div class="caption list_slide lfb tp-caption start" 
                           data-easing="easeOutExpo" 
                           data-start="2200" 
                           data-speed="1350" 
                           data-y="260" 
                           data-x="660">
                           <div class="list-slide">
                              <i class="fa fa-check slide-icon"></i>
                              <h5> Crossbrowser Compatible </h5>
                           </div>
                        </div> -->
                    <!--     <div class="caption list_slide lfb tp-caption start" 
                           data-easing="easeOutExpo" 
                           data-start="2600" 
                           data-speed="1350" 
                           data-y="300" 
                           data-x="660">
                           <div class="list-slide">
                              <i class="fa fa-twitter slide-icon"></i>
                              <h5> Twitter 1.1 API Support </h5>
                           </div>
                        </div> -->
                    <!--     <div class="caption list_slide lfb tp-caption start" 
                           data-easing="easeOutExpo" 
                           data-start="3000" 
                           data-speed="1350" 
                           data-y="340" 
                           data-x="660">
                           <div class="list-slide">
                              <i class="fa fa-th slide-icon"></i>
                              <h5> Bootstrap Framework </h5>
                           </div>
                        </div> -->
                        <div class="caption lfl"
                           data-x="53"
                           data-y="30"
                           data-speed="300"
                           data-start="1400"
                           data-easing="easeOutExpo">
                           <img src="{{asset('public/img/121.jpg')}}" alt="iMac Responsive" width="300px" height="200px">
                        </div>
                        <div class="caption lfl"
                           data-x="323"
                           data-y="145"
                           data-speed="300"
                           data-start="1500"
                           data-easing="easeOutExpo">
                           <img src="{{asset('public/img/122.jpg')}}" alt="iPad Responsive" width="300px" height="200px">
                        </div>
                        <!-- <div class="caption lfl"
                           data-x="472"
                           data-y="253"
                           data-speed="300"
                           data-start="1600"
                           data-easing="easeOutExpo">
                           <img src="{{asset('public/img/slider/responsive-iphone.png')}}" alt="iPhone Responsive">
                        </div> -->
                     </li>
                  </ul>
               </div>
            </div>
            <!-- Slider End--> 

               <div class="divider"></div>
            <!-- 3 Column Services -->
            <div class="services">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h3 class="title">OUR SERVICES</h3>
                     </div>
                     <!--  <p style="text-align: justify-all;">Xprotean Pro a Best Web Designing Company, We are analyzing our valued Customer’s Requirement Top to Bottom and search engine Target audience. We Build quality and quantity responsive websites to Reach Target Customers, Branding Promotion, increase Traffics and Capitalize on Revenue. In our Top Web Designing, We develope the up-to-date technologies to design and deliver web and digital user interfaces. Our Website Designer, Our experts are building CMS-Content Management Website to Suit our customer to manage their website. Get our website Designer and website Developers in manages your entire web services without Hassel free communication.</p> -->
                     <div class="clearfix"></div>
                     <div class="col-lg-4 col-md-4 col-sm-4 bottom-pad">
                        <div class="content-box ch-item">
                           <div class="ch-info-wrap">
                              <div class="ch-info">
                                 <div class="ch-info-front ch-img-1"><i class="fa fa-cloud"></i></div>
                                 <div class="ch-info-back">
                                    <i class="fa fa-cloud"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="content-box-info">
                              <h4>Pro Accurate Data’s Industry</h4>
                              <p>
                                 Pro Accurate Data is the most successful brand in providing authentic and accurate mailing lists. Our Industry Mailing lists cover more than 100 industries to enable successful sales and marketing campaigns.
                              </p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-4 bottom-pad">
                        <div class="content-box ch-item">
                           <div class="ch-info-wrap">
                              <div class="ch-info">
                                 <div class="ch-info-front ch-img-1"><i class="fa fa-hdd-o"></i></div>
                                 <div class="ch-info-back">
                                    <i class="fa fa-hdd-o"></i>
                                 </div>
                              </div>
                           </div>
                           <div class="content-box-info">
                              <h4>HEALTHCARE EXECUTIVES EMAIL LIST</h4>
                                          <p>When you choose Pro Accurate Data as your health care list vendor, we give you access to the decisions makers in healthcare institutions across North America, Europe, Asia and Australia. We’ll also segment your healthcare mailing list on the basis of several selects including, </p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-4 bottom-pad">
                        <div class="content-box ch-item">
                           <div class="ch-info-wrap">
                              <div class="ch-info">
                                 <div class="ch-info-front ch-img-1"><i class="fa fa-users"></i></div>
                                 <div class="ch-info-back">
                                    <i class="fa fa-users"></i>
                                 </div>
                              </div>
                           </div>
                           <div class="content-box-info">
                               <h4>Manufacturing Industry Mailing List</h4>
                              <p>
                                 Much of industrial marketing depends on contacting upper level management and presenting your sales pitch to them. However, instead of wading through a sea of junior corporate bureaucrats until you’re finally admitted into the inner sanctum, we propose an easier, faster and more cost-effective way to get in touch with top manufacturing executives – targeted direct marketing. 
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="content-box ch-item">
                           <div class="ch-info-wrap">
                              <div class="ch-info">
                                 <div class="ch-info-front ch-img-1"><i class="fa fa-cog"></i></div>
                                 <div class="ch-info-back">
                                    <i class="fa fa-cog"></i>
                                 </div>
                              </div>
                           </div>
                           <div class="content-box-info">
                              
                              <h4>REAL ESTATE INDUSTRY MAILING LIST</h4>
                              <p>
                                There are a variety of reasons why one would need a comprehensive real estate agents list. Maybe you are looking forward to taking advantage of business-to-business marketing and offer a service valuable to real estate agents. Or, you are in need of moving real estate business in the unknown areas.  

                              </p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="content-box ch-item">
                           <div class="ch-info-wrap">
                              <div class="ch-info">
                                 <div class="ch-info-front ch-img-1"><i class="fa fa-compress"></i></div>
                                 <div class="ch-info-back">
                                    <i class="fa fa-compress"></i>
                                 </div>
                              </div>
                           </div>
                           <div class="content-box-info">
                              <h4>MINING INDUSTRY</h4>
                              <p>
                                Mining Industry is one of the biggest industries in the world. While it exists in many countries, London is known as the capital of global mining houses. Places like Rio Tinto Group, BHP Billiton, and Anglo American PLC tops the list. The USA is also one among the largest mining countries but ranks second since it is mostly dominated by the coal and other non-metal minerals.
                              </p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="content-box ch-item">
                           <div class="ch-info-wrap">
                              <div class="ch-info">
                                 <div class="ch-info-front ch-img-1"><i class="fa fa-clock-o"></i></div>
                                 <div class="ch-info-back">
                                    <i class="fa fa-clock-o"></i>
                                 </div>
                              </div>
                           </div>
                           <div class="content-box-info">
                             
                              <h4>Printing and Publishing Industry</h4>
                              <p>
                                 The printing and publishing industry is one of the employment generating industries in the world. It can also be said as the oldest business where people started it out with publishing houses. Today, the technology has seeped into digital publishing taking up much of the revenue stream.
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="content-box ch-item">
                           <div class="ch-info-wrap">
                              <div class="ch-info">
                                 <div class="ch-info-front ch-img-1"><i class="fa fa-cog"></i></div>
                                 <div class="ch-info-back">
                                    <i class="fa fa-cog"></i>
                                 </div>
                              </div>
                           </div>
                           <div class="content-box-info">
                              <h4>INSURANCE SERVICE INDUSTRY</h4>
                              <p>
                                 Target insurance industry which includes Auto Insurance, Gap Insurance, Health Insurance, Accident, Sickness, Unemployment Insurance, Casualty, Life, Property and more, with Mail Prospects Insurance industry mailing list . With our Insurance industry mailing list you can contact the right decision makers or the business executives, worldwide in the Insurance sector.

                              </p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="content-box ch-item">
                           <div class="ch-info-wrap">
                              <div class="ch-info">
                                 <div class="ch-info-front ch-img-1"><i class="fa fa-compress"></i></div>
                                 <div class="ch-info-back">
                                    <i class="fa fa-compress"></i>
                                 </div>
                              </div>
                           </div>
                           <div class="content-box-info">
                              <h4>ADVERTISING MEDIA</h4>
                              <p>
                               Pro Accurate Data can be the answer for all your queries to generate effective leads and branding activities. And targeting to this section of executives would be easier than ever with Pro Accurate Data’s targeted advertising and media mailing list. Updated quarterly to provide the most, timely accurate information and all our list of advertising agencies mailing databases cover key industries from Design to Retail.
                              </p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="content-box ch-item">
                           <div class="ch-info-wrap">
                              <div class="ch-info">
                                 <div class="ch-info-front ch-img-1"><i class="fa fa-clock-o"></i></div>
                                 <div class="ch-info-back">
                                    <i class="fa fa-clock-o"></i>
                                 </div>
                              </div>
                           </div>
                           <div class="content-box-info">
                             <h4>Telecom Decision Makers</h4>
                              <p>
                                 Pro Accurate Data highly targeted Telecom Decision Makers Mailing List has been developed by closely interacting within the top industry sources to develop a marketing strategy promising increased deliverability. Staying on the top within the industry requires collecting influential information like the who’s who, which’s where and how to reach them quickly and effectively.
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>   
               </div>
            </div>


                <div class="divider"></div>

              <!-- Features start -->  
            <div class="features bottom-pad">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h3  class="title">Other Services</h3>
                        <div class="row">
                           <div class="circular-nav">
                              <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 animate_afl">
                                 <div id="cn-tabs">
                                    <div class="service service-1">
                                       <div class="cn-content">
                                          <h4>BUSINESS SERVICES INDUSTRY EXECUTIVES LIST</h4>
                                          <p> Pro Accurate Data Services’ Business Services Industry Executives List offers sales teams the ability to connect with the decision makers involved in delivering business services to multiple industries. This list helps you skip all the unwanted people who come on your way to connect with the actual decision makers of the company.

We are among the front runners in possessing the most updated contacts of prospective customers and business technology users. 
The fields covered by Pro Accurate Data include complete contact details like:
</p>
                                          <!-- <a href="#">Read More <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a> -->
                                          <div class="clearfix"></div>
                                       </div>
                                       <div class="clearfix"></div>
                                    </div>
                                    <div class="service service-2">
                                       <div class="cn-content">
                                          <h4>3D PRINTING PROFESSIONALS EMAIL LIST
</h4>
                                          <p> Throughout the world, 3D printing technology has grown with $3.07B in 2013 and is expected to reach $12.8 billion by the end of 2018 and is expected to exceed $21B worldwide by 2020. Industry experts predict that, it’s a huge change the world is going to witness in the coming years and 3D printing is going to transform almost every major industry and destined to change the way we live 3D printing, in other words, additive manufacturing is a process of making a three dimensional solid object that can be drawn out of thin air from a digital file. Creating 3D printed object is achieved using additive processes. In an additive process, the object is created using many layers until the structure is completely created. Each layer in the object is in the form of thinly sliced horizontal cross-section of the eventual object.
</p>
                                          <!-- <a href="#">Read More <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a> -->
                                          <div class="clearfix"></div>
                                       </div>
                                    </div>
                                    <div class="service service-3">
                                       <div class="cn-content">
                                          <h4>EDUCATION INDUSTRY MAILING LIST</h4>
                                          <p>If you wish to target educational institutions worldwide that offer academic and professional courses, then contact Mail Prospects’ for its exclusive Education Sector/industry mailing list. Our customized education industry mailing list can enable you to reach thousands of decision makers or the executives within the education industry worldwide.

Pro Accurate Data provides the most accurate and latest education mailing list that consists of contact details of all the decision makers in the education industry. We provide a safe and undated mailing list that will help in rolling out your direct marketing campaigns and generate quality leads.
</p>
                                          <!-- <a href="#">Read More <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a> -->
                                       </div>
                                       <div class="clearfix"></div>
                                    </div>
                                    <div class="service service-4">
                                       <div class="cn-content">
                                          <h4>IT Executives List</h4>
                                          <p>Buy Prepackaged & Customized IT Executives List, IT Decision Makers Lists and IT Executives Mailing List By SIC Code That Let You Reach Targeted Markets In The USA, UK, Canada, Europe & Australia!

IT jobs in the United States are expected to grow much faster than other employment avenues, and will represent a sizable chunk of the economy.</p>
                                          <!-- <a href="#">Read More <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a> -->
                                       </div>
                                       <div class="clearfix"></div>
                                    </div>
                                    <div class="service service-5">
                                       <div class="cn-content">
                                          <h4>Food and Beverage Mailing List</h4>
                                          <p> If you’ve been looking at marketing your products to the Food and Beverage industry, Pro Accurate Data can immeasurably ease the pain of launching a campaign. Our comprehensive business mailing lists will give you the ability to effortlessly reach out to food and beverage industry executives without the time and labor-intensive process of prospecting. And reaching out to executives is perhaps the most vital part of any Pro Accurate Data sales campaign, especially one aimed at the Food and Beverage industry.</p>
                                          <!-- <a href="#">Read More <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a> -->
                                       </div>
                                       <div class="clearfix"></div>
                                    </div>
                                    <div class="service service-6">
                                       <div class="cn-content">
                                          <h4>HEALTHCARE EXECUTIVES EMAIL LIST</h4>
                                          <p>When you choose Pro Accurate Data as your health care list vendor, we give you access to the decisions makers in healthcare institutions across North America, Europe, Asia and Australia. We’ll also segment your healthcare mailing list on the basis of several selects including,
Pro Accurate Data’s Healthcare email database can massively extend your marketing coverage of the healthcare industry in the Northern Hemisphere. Our health care lists are unsurpassed in terms of reach and place hundreds of thousands of key healthcare executives at your fingertips. Furthermore, you can narrow down your target markets and create customized marketing material aimed at specific industry divisions, </p>
                                          <!-- <a href="#">Read More <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a> -->
                                       </div>
                                       <div class="clearfix"></div>
                                    </div>
                                    <div class="service service-7">
                                       <div class="cn-content">
                                          <h4>AutoCad</h4>
                                          <p>AutoCAD is a commercial computer-aided design (CAD) and drafting software application. Developed and marketed by Autodesk,AutoCAD was first released in December 1982 as a desktop app running on microcomputers with internal graphics controllers. Before AutoCAD was introduced, most commercial CAD programs ran on mainframe computers or minicomputers, with each CAD operator (user) working at a separate graphics terminal. Since 2010, AutoCAD was released as a mobile- and web app as well, marketed as AutoCAD 360.AutoCAD is used across a wide range of industries, by architects, project managers, engineers, graphic designers, and many other professionals. It was supported by 750 training centers worldwide in 1994.A video card (also called a display card, graphics card, display adapter or graphics adapter).</p>
                                          <!-- <a href="#">Read More <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a> -->
                                       </div>
                                       <div class="clearfix"></div>
                                    </div>
                                    <div class="service service-8">
                                       <div class="cn-content">
                                          <h4>Manufacturing Industry Mailing List</h4>
                                          <p>Much of industrial marketing depends on contacting upper level management and presenting your sales pitch to them. However, instead of wading through a sea of junior corporate bureaucrats until you’re finally admitted into the inner sanctum, we propose an easier, faster and more cost-effective way to get in touch with top manufacturing executives – targeted direct marketing.
</p>
                                          <!-- <a href="#">Read More <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a> -->
                                       </div>
                                       <div class="clearfix"></div>
                                    </div>
                                    <div class="service service-9">
                                       <div class="cn-content">
                                          <h4>REAL ESTATE INDUSTRY MAILING LIST</h4>
                                          <p>There are a variety of reasons why one would need a comprehensive real estate agents list. Maybe you are looking forward to taking advantage of business-to-business marketing and offer a service valuable to real estate agents. Or, you are in need of moving real estate business in the unknown areas.

Real Estate agents operate in a competitive market with commercial property sellers often search for a listing agent. With the increasing cost of advertising and marketing, real estate agents database can be a valuable resource. Nurtured consistently in targeted marketing channels, this database will certainly grow your business.
</p>
                                          <!-- <a href="#">Read More <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a> -->
                                       </div>
                                       <div class="clearfix"></div>
                                    </div>
                                 </div>
                                 <div class="clearfix"></div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1 animate_afr">
                                 <div class="cn-wrapper">
                                    <ul>
                                       <li class="circle-1 circle"><a class="active" href="#"><span class="fa fa-hand-o-right"></span></a></li>
                                       <li class="circle-2 circle"><a href="#"><span class="fa fa-hand-o-right"></span></a></li>
                                       <li class="circle-3 circle"><a href="#"><span class="fa fa-hand-o-right"></span> </a></li>
                                       <li class="circle-4 circle"><a href="#"><span class="fa fa-hand-o-right"></span></a></li>
                                       <li class="circle-5 circle"><a href="#"><span class="fa fa-hand-o-right"></span></a></li>
                                       <li class="circle-6 circle"><a href="#"><span class="fa fa-hand-o-right"></span></a></li>
                                       <li class="circle-7 circle"><a href="#"><span class="fa fa-hand-o-right"></span> </a></li>
                                       <li class="circle-8 circle"><a href="#"><span class="fa fa-hand-o-right"></span></a></li>
                                       <li class="circle-9 circle"><a href="#"><span class="fa fa-hand-o-right"></span></a></li>
                                    </ul>
                                    <div class="clearfix"></div>
                                 </div>
                              </div>
                              <div class="clearfix"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Features End --> 

                <!-- Recent works start-->
            <!-- <div class="recentworks bottom-pad">
               <div class="container">
                  <h3 class="title">Our Team</h3>
                  <div class="row">
                     <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 animate_afl d1">
                        <div class="portfolio-desc">
                           <div class="portfolio-item">
                          <a class="portfolio-item-link"  >
                                          <span class="portfolio-item-hover"></span><img src="{{asset('public/img/portfolio/office/abdul1.jpg')}}" alt=" "/>
                                          </a>
                                          <div class="portfolio-item-title">
                                             <a>Mr. ABDUL RAZAQ</a>
                                             <p>
                                                Branch Manager
                                             </p>
                                          </div>
                                          <div class="clearfix"></div>
                                       </div>
                        </div>
                     </div>
                     <div class="col-lg-9 col-md-9 col-xs-12">
                        <div class="row">
                           <div id="portfolio-carousel" class="portfolio-carousel slide">
                              <div class="carousel-inner">
                                 <div class="item active">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item animate_afc d2">
                                         <div class="portfolio-item">
                                          <a class="portfolio-item-link"><span class="portfolio-item-hover"></span>
                                          <img src="{{asset('public/img/portfolio/office/kabitha.jpg')}}" alt=" "/>
                                          </a>
                                          <div class="portfolio-item-title">
                                             <a>Ms. KABITA</a>
                                             <p>
                                                HR Executive
                                             </p>
                                          </div>
                                          <div class="clearfix"></div>
                                       </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item animate_afc d3">
                                       <div class="portfolio-item">
                                          <a class="portfolio-item-link"><span class="portfolio-item-hover"></span>
                                          <img src="{{asset('public/img/portfolio/office/saritha.jpg')}}" alt=" "/>
                                          </a>
                                          <div class="portfolio-item-title">
                                             <a>Ms. SARITA</a>
                                             <p>
                                                HR Executive
                                             </p>
                                          </div>
                                          <div class="clearfix"></div>
                                       </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item animate_afc d4">
                                       <div class="portfolio-item">
                                           <a class="portfolio-item-link">
                                          <span class="portfolio-item-hover"></span><img src="{{asset('public/img/portfolio/office/shilpa.jpg')}}" alt=" "/>
                                          </a>
                                          <div class="portfolio-item-title">
                                             <a>Mrs. SHILPA KAVTEKAR</a>
                                             <p>
                                                Java Trainer
                                             </p>
                                          </div>
                                          <div class="clearfix"></div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- <div class="item">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item">
                                       <div class="portfolio-item">
                                          <a href="{{asset('public/img/portfolio/portfolio-4.jpg')}}" class="portfolio-item-link" data-rel="prettyPhoto" >
                                          <span class="portfolio-item-hover"></span><span class="fullscreen"><i class="fa fa-search"></i></span><img src="{{asset('public/img/portfolio/portfolio-4.jpg')}}" alt=" "/>
                                          </a>
                                          <div class="portfolio-item-title">
                                             <a>Jithendra</a>
                                             <p>
                                                UI Lead
                                             </p>
                                          </div>
                                          <div class="clearfix"></div>
                                       </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item">
                                       <div class="portfolio-item">
                                          <a href="{{asset('public/img/portfolio/portfolio-5.jpg')}}" class="portfolio-item-link" data-rel="prettyPhoto" >
                                          <span class="portfolio-item-hover"></span><span class="fullscreen"><i class="fa fa-search"></i></span><img src="{{asset('public/img/portfolio/portfolio-5.jpg')}}" alt=" "/>
                                          </a>
                                          <div class="portfolio-item-title">
                                             <a href="single-project.html">Shilpa</a>
                                             <p>
                                                Java Trainer
                                             </p>
                                          </div>
                                          <div class="clearfix"></div>
                                       </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item">
                                       <div class="portfolio-item">
                                          <a href="{{asset('public/img/portfolio/portfolio-6.jpg')}}" class="portfolio-item-link" data-rel="prettyPhoto" >
                                          <span class="portfolio-item-hover"></span><span class="fullscreen"><i class="fa fa-search"></i></span><img src="{{asset('public/img/portfolio/portfolio-6.jpg')}}" alt=" "/>
                                          </a>
                                          <div class="portfolio-item-title">
                                             <a href="single-project.html">Krishna Reddy</a>
                                             <p>
                                                Testing Lead Manual/Automation
                                             </p>
                                          </div>
                                          <div class="clearfix"></div>
                                       </div>
                                    </div>
                                 </div> -->
                           <!--    </div>
                           </div>
                           <div class="clearfix"></div>
                        </div>
                     </div>
                  </div>
                   <div class="divider"></div>
                  <div class="row">
                     <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 animate_afl d1">
                        <div class="portfolio-desc">
                           <div class="portfolio-item">
                                          <a class="portfolio-item-link">
                                          <span class="portfolio-item-hover"></span><img src="{{asset('public/img/portfolio/office/syed.jpg')}}" alt=" "/>
                                          </a>
                                          <div class="portfolio-item-title">
                                             <a>Mr. SYED BILAL</a>
                                             <p>
                                                Developer Lead (PHP & SEO)
                                             </p>
                                          </div>
                                          <div class="clearfix"></div>
                                       </div>
                        </div>
                     </div>
                     <div class="col-lg-9 col-md-9 col-xs-12">
                        <div class="row">
                           <div id="portfolio-carousel" class="portfolio-carousel slide">
                              <div class="carousel-inner">
                                 <div class="item active">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item animate_afc d2">
                                         <div class="portfolio-item">
                                          <a class="portfolio-item-link">
                                          <span class="portfolio-item-hover"></span><img src="{{asset('public/img/portfolio/office/jithendra.jpg')}}" alt=" "/>
                                          </a>
                                          <div class="portfolio-item-title">
                                             <a>Mr. JITHENDRA KAVETI</a>
                                             <p>
                                                Web Designing Lead
                                             </p>
                                          </div>
                                          <div class="clearfix"></div>
                                       </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item animate_afc d3">
                                       <div class="portfolio-item">
                                          <a class="portfolio-item-link">
                                          <span class="portfolio-item-hover"></span><img src="{{asset('public/img/portfolio/office/krishna.jpg')}}" alt=" "/>
                                          </a>
                                          <div class="portfolio-item-title">
                                             <a>Mr. KRISHNA REDDY</a>
                                             <p>
                                                Testing Lead (Manual & Automation)
                                             </p>
                                          </div>
                                          <div class="clearfix"></div>
                                       </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item animate_afc d4">
                                       <div class="portfolio-item">
                                          <a class="portfolio-item-link">
                                          <span class="portfolio-item-hover"></span><img src="{{asset('public/img/portfolio/office/staff.jpg')}}" alt=" "/>
                                          </a>
                                          <div class="portfolio-item-title">
                                             <a>EMPLOYEES</a>
                                             <p>
                                                Office Floor
                                             </p>
                                          </div>
                                          <div class="clearfix"></div>
                                       </div>
                                    </div>
                                 </div> -->
                                 <!-- <div class="item">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item">
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
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item">
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
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item">
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
                            <!--   </div>
                           </div>
                           <div class="clearfix"></div>
                        </div>
                     </div>
                  </div>
               </div> -->
            <!-- </div> --> -->
            <!-- Recent work end-->
                         
              <!-- Our Clients Start-->
            <div class="our-clients" style="height:200px;">
               <div class="container">
                  <div class="row">
                     <div class="client">
                        <div class="client-logo">
                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <div class="clients-title">
                                
                               <!--   <div class="carousel-controls pull-right">
                                    <a class="prev" href="#client-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                                    <a class="next" href="#client-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
                                    <div class="clearfix"></div>
                                 </div> -->
                              </div><br>
                              <div class="clearfix"></div>
                               <center><h3 class="title">Our Clients</h3></center>
                              <div class="row">
                                 <div id="client-carousel" class="client-carousel carousel slide">
                                    <div class="carousel-inner">
                                       <div class="item active">
                                          <!-- <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 item animate_afc d1">
                                             <div class="item-inner"><a href="#"><img alt="" src="{{asset('public/img/clientslogo/logo-1.png')}}"></a></div>
                                          </div> -->
                                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 item animate_afc d2">
                                             <div class="item-inner"><a href="#"><img alt="" src="{{asset('public/img/12.png')}}"></a></div>
                                          </div>
                                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 item animate_afc d3">
                                             <div class="item-inner"><a href="#"><img alt="" src="{{asset('public/img/13.png')}}"></a></div>
                                          </div>
                                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 item animate_afc d4">
                                             <div class="item-inner"><a href="#"><img alt="" src="{{asset('public/img/14.png')}}"></a></div>
                                          </div>
                                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 item animate_afc d5">
                                             <div class="item-inner"><a href="#"><img alt="" src="{{asset('public/img/clientslogo/logo-5.png')}}"></a></div>
                                          </div>
                                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 item animate_afc d6">
                                             <div class="item-inner"><a href="#"><img alt="" src="{{asset('public/img/12.png')}}"></a></div>
                                          </div>
                                       </div>
                                       <div class="item">
                                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 item">
                                             <div class="item-inner"><a href="#"><img alt="" src="{{asset('public/img/clientslogo/logo-5.png')}}"></a></div>
                                          </div>
                                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 item">
                                             <div class="item-inner"><a href="#"><img alt="" src="{{asset('public/img/clientslogo/logo-1.png')}}"></a></div>
                                          </div>
                                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 item">
                                             <div class="item-inner"><a href="#"><img alt="" src="{{asset('public/img/clientslogo/logo-3.png')}}"></a></div>
                                          </div>
                                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 item">
                                             <div class="item-inner"><a href="#"><img alt="" src="{{asset('public/img/clientslogo/logo-2.png')}}"></a></div>
                                          </div>
                                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 item">
                                             <div class="item-inner"><a href="#"><img alt="" src="{{asset('public/img/clientslogo/logo-4.png')}}"></a></div>
                                          </div>
                                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 item">
                                             <div class="item-inner"><a href="#"><img alt="" src="{{asset('public/img/clientslogo/logo-5.png')}}"></a></div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Our Clients End -->

@endsection
