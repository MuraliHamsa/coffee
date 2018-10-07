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
                           <h3>We Create The Opportunities</h3>
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
                           data-y="220" 
                           data-x="40">
                           <!-- <div class="list-slide"> -->
                               <img src="{{asset('public/img/slider/mob3.png')}}" alt="iMac Responsive">
                              <!-- <h3 class="list-slide" style="color: #165b71;"> We Create The Opportunities</h3> -->
                           <!-- </div> -->
                        </div>
                        <!-- <div class="caption list_slide lfb tp-caption start" 
                           data-easing="easeOutExpo" 
                           data-start="2200" 
                           data-speed="1350" 
                           data-y="260" 
                           data-x="40">
                           <div class="list-slide">
                              <i class="fa fa-code slide-icon"></i>
                              <h5 class="dblue"> Working Ajax Contact Form </h5>
                           </div>
                        </div> -->
                       <!--  <div class="caption lfb caption_button_1 fadeout tp-caption start"
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
                           <img src="{{asset('public/img/slider/mob.png')}}" alt="iMac Responsive">
                        </div>
                        <div class="caption lfl"
                           data-x="323"
                           data-y="145"
                           data-speed="300"
                           data-start="1500"
                           data-easing="easeOutExpo">
                           <img src="{{asset('public/img/slider/php.png')}}" alt="iPad Responsive">
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
                              <h4>Information Technology</h4>
                              <p>
                                 Information Technology Services (ITS) caters to the diverse technology needs of University of Iowa students, employees, and visitors. ITS provides technical support, resources, and services to help everyone at the UI work smarter, faster, and safer.
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
                              <h4>Digital Marketing</h4>
                              <p>
                                Customers are actively looking for solutions just like yours. The question is, are your products and services easy to find where it matters most. Do your messages connect and inspire action in a meaningful way.
                              </p>
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
                              <h4>Out Sourcing</h4>
                              <p>
                                 Outsourcing is not just a method of gaining a one-time cost advantage, but an effective strategy for gaining and maintaining competitive advantages when executed as part of an overall sourcing strategy.
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
                              <h4>Management Services</h4>
                              <p>
                                 Achieve maximum cost savings and business agility. Ensure that your cloud-based resources are working optimally.
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
                              <h4>Creative</h4>
                              <p>
                                 A part of the economy that creates wealth by offering creativity for hire to other businesses. Creative Services also means a department within a company that does creative work such as writing, designing, and production.
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
                              <h4>24/7 Support</h4>
                              <p>
                                 provides around the clock professional customer support services and complete call center operations. Our client base consists of a wide range of international companies that are specializing in various industries.
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
                        <h3  class="title">Our Models</h3>
                        <div class="row">
                           <div class="circular-nav">
                              <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 animate_afl">
                                 <div id="cn-tabs">
                                    <div class="service service-1">
                                       <div class="cn-content">
                                          <h4>IT Services</h4>
                                          <p> Information technology (IT) is the application of computers to store, study, retrieve, transmit and manipulate data, or information, often in the context of a business or other enterprise.IT is considered a subset of information and communications technology (ICT). In 2012, Zuppo proposed an ICT hierarchy where each hierarchy level "contain[s] some degree of commonality in that they are related to technologies that facilitate the transfer of information and various types of electronically mediated communications".The term is commonly used as a synonym for computers and computer networks, but it also encompasses other information distribution technologies such as television and telephones. Several industries are associated with information technology, including computer hardware, software, electronics, semiconductors, internet, telecom equipment, and e-commerce.</p>
                                          <!-- <a href="#">Read More <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a> -->
                                          <div class="clearfix"></div>
                                       </div>
                                       <div class="clearfix"></div>
                                    </div>
                                    <div class="service service-2">
                                       <div class="cn-content">
                                          <h4>Mobility Services</h4>
                                          <p> Mobility continues to be one of the most disruptive technologies in its impact and reach. Enterprises are constantly challenged to keep pace with accelerated proliferation of devices with multiple form factors on different platforms. Enterprises are ﬁnding it difficult to maximize the potential of mobility opportunities for consumer engagement, workplace solutions and partner engagement.Mindtree with its integrated suite of service offerings deﬁnes, architects, implements and maintains mobility solutions.We understand the importance of customer experience for any mobile solution and our team of user experience designers ensures our solutions deliver compelling and engaging experiences. Our solutions enable mobile users to efficiently create, share or consume relevant information on the move.</p>
                                          <!-- <a href="#">Read More <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a> -->
                                          <div class="clearfix"></div>
                                       </div>
                                    </div>
                                    <div class="service service-3">
                                       <div class="cn-content">
                                          <h4>Bomt</h4>
                                          <p>Leo_Technosoft_Logo EXPERTISE SOLUTIONS COMPANY INDUSTRIES PORTFOLIO BUILD Product Development SERVE IT Services MANAGE Cyber Security EXTEND Enterprise Mobility Build-Operate-Market-Transform (BOMT) Model BOMT model is an innovative hybrid partner product development services that offers a low-risk, hassle-free, cost-effective global sourcing strategy, which blends the advantages of traditional outsourcing trends. This business model is for StartUps, Entrepreneurs and ISVs that creates opportunities for increasing revenue and maximizing ROI thus enabling them to achieve business transformation together. The business model feasibility of BOMT explains how much it can be helpful for Startups. The gestation of a business idea results in the incubation of a product or service that the business will offer.</p>
                                          <!-- <a href="#">Read More <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a> -->
                                       </div>
                                       <div class="clearfix"></div>
                                    </div>
                                    <div class="service service-4">
                                       <div class="cn-content">
                                          <h4>SaaS</h4>
                                          <p>Software as a service (SaaS) allows users to connect to and use cloud-based apps over the Internet. Common examples are email, calendaring and office tools (such as Microsoft Office 365).SaaS provides a complete software solution which you purchase on a pay-as-you-go basis from a cloud service provider. You rent the use of an app for your organisation and your users connect to it over the Internet, usually with a web browser. All of the underlying infrastructure, middleware, app software and app data are located in the service provider’s data center.SaaS-Tenant enables a single instance of your application to serve thousands of tenants. SaaS multi tenant application saves users from arduous task of building robust, scalable cloud solution and let them focus on their business logic.</p>
                                          <!-- <a href="#">Read More <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a> -->
                                       </div>
                                       <div class="clearfix"></div>
                                    </div>
                                    <div class="service service-5">
                                       <div class="cn-content">
                                          <h4>ERP</h4>
                                          <p> The term ERP was coined in 1990 by Gartner1, but its roots date to the 1960s. Back then, the concept applied to inventory management and control in the manufacturing sector.ERP is usually referred to as a category of business-management software typically a suite of integrated applications—that an organization can use to collect, store, manage and interpret data from these many business.Implementing ERP typically requires changes in existing business processes. Poor understanding of needed process changes prior to starting implementation is a main reason for project failure. ERP systems can be extended with third–party software.ERP vendors typically provide access to data and features through published interfaces. Extensions offer features such as:Reporting, and republishing.Implementing ERP typically requires changes in existing business processes.</p>
                                          <!-- <a href="#">Read More <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a> -->
                                       </div>
                                       <div class="clearfix"></div>
                                    </div>
                                    <div class="service service-6">
                                       <div class="cn-content">
                                          <h4>DATA MANAGEMENT</h4>
                                          <p>THE CONCEPT OF "DATA MANAGEMENT" AROSE IN THE 1980S AS TECHNOLOGY MOVED FROM SEQUENTIAL PROCESSING (FIRST CARDS, THEN TAPE) TO RANDOM ACCESS PROCESSING.The scope and scale of structured and unstructured data that financial firms manage continues to grow exponentially, calling for innovative approaches that can deliver automated, accurate and timely decision making.Data management initiatives improve data quality by assigning a team responsible for data's accuracy, accessibility, consistency, and completeness, among other metrics.Data management initiatives are aimed at achieving a number of objectives including offering better visibility to internal and  to aid the efficiency of enterprise knowledge workers by reducing confusion.</p>
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
                                          <h4>Catia</h4>
                                          <p>CATIA (an acronym of computer aided three-dimensional interactive application, pronounced /kəˈtiə/) is a multi-platform software suite for computer-aided design (CAD), computer-aided manufacturing (CAM), computer-aided engineering (CAE), PLM and 3D, developed by the French company Dassault Systèmes.CATIA started as an in-house development in 1977 by French aircraft manufacturer Avions Marcel Dassault, at that time customer of the CADAM software to develop Dassault's Mirage fighter jet. It was later adopted by the aerospace, automotive, shipbuilding, and other industries.Initially named CATI (conception assistée tridimensionnelle interactive – French for interactive aided three-dimensional design ), it was renamed CATIA in 1981 when Dassault created a subsidiary to develop.</p>
                                          <!-- <a href="#">Read More <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a> -->
                                       </div>
                                       <div class="clearfix"></div>
                                    </div>
                                    <div class="service service-9">
                                       <div class="cn-content">
                                          <h4>Quality Engineering</h4>
                                          <p>IT services are increasingly interlinked in workflows across platform boundaries, device and organisational boundaries, for example in cyber-physical systems, business-to-business workflows or when using cloud services. In such contexts, quality engineering facilitates the necessary all-embracing consideration of quality attributes.In such contexts an "end-to-end" view of quality from management to operation is vital. Quality Engineering integrates methods and tools from Enterprise architecture-management, software-product management, IT service management, software engineering and Systems Engineering, and from software quality management and information security management. Software product management is the process of managing software that is built and implemented as a product.</p>
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
            <div class="recentworks bottom-pad">
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
                              </div>
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
                                 </div>
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
                              </div>
                           </div>
                           <div class="clearfix"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Recent work end-->
                         
              <!-- Our Clients Start-->
            <div class="our-clients">
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
                              </div>
                              <div class="clearfix"></div>
                               <h3 class="title">Our Clients</h3>
                              <div class="row">
                                 <div id="client-carousel" class="client-carousel carousel slide">
                                    <div class="carousel-inner">
                                       <div class="item active">
                                          <!-- <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 item animate_afc d1">
                                             <div class="item-inner"><a href="#"><img alt="" src="{{asset('public/img/clientslogo/logo-1.png')}}"></a></div>
                                          </div> -->
                                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 item animate_afc d2">
                                             <div class="item-inner"><a href="#"><img alt="" src="{{asset('public/img/clientslogo/logo-5.png')}}"></a></div>
                                          </div>
                                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 item animate_afc d3">
                                             <div class="item-inner"><a href="#"><img alt="" src="{{asset('public/img/clientslogo/logo-3.png')}}"></a></div>
                                          </div>
                                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 item animate_afc d4">
                                             <div class="item-inner"><a href="#"><img alt="" src="{{asset('public/img/clientslogo/logo-4.png')}}"></a></div>
                                          </div>
                                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 item animate_afc d5">
                                             <div class="item-inner"><a href="#"><img alt="" src="{{asset('public/img/clientslogo/logo-5.png')}}"></a></div>
                                          </div>
                                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 item animate_afc d6">
                                             <div class="item-inner"><a href="#"><img alt="" src="{{asset('public/img/clientslogo/logo-2.png')}}"></a></div>
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
