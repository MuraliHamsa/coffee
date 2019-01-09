   @extends('layouts.app')

   @section('content')


   <!-- Content Start -->
         <div id="main">
            
            <!-- Main Content start-->
            <div class="content">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12" id="contact-form">
                        <h3 class="title">Contact-Us</h3>
                        <p>
                          LET'S WORK TOGETHER ON YOUR NEXT PROJECT
                        </p>
                        <p>
                           Please be patient while waiting for response. (24/7 Support!)
                        </p>
                        <div class="divider"></div>
                        <form method="post" class="reply" id="contact">
                           <fieldset>
                              <div class="row">
                                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Name: <span>*</span></label>
                                    <input class="form-control" id="name" name="name" type="text" value="" required>
                                 </div>
                                 <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label> <span>*</span></label>
                                    <input class="form-control" type="email" id="email" name="email" value="" required>
                                 </div> -->
                              </div>
                              <div class="row">
                                 <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                    <label>Email: <span>*</span></label>
                                    <input class="form-control" type="email" id="email" name="email" value="" required>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label>Message: <span>*</span></label>
                                    <textarea class="form-control" id="text" name="text" rows="3" cols="40" required></textarea>
                                 </div>
                              </div>
                           </fieldset>
                           <button class="btn-normal btn-color submit  bottom-pad" type="submit">Send</button>
                           <div class="success alert-success alert" style="display:none">Your message has been sent successfully.</div>
                           <div class="error alert-error alert" style="display:none">E-mail must be valid and message must be longer than 100 characters.</div>
                           <div class="clearfix">
                           </div>
                        </form>
                     </div>
                     <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6">
                        <div class="address widget">
                           <h3 class="title">USA</h3>
                           <ul class="contact-us">
                              <li>
                                 <i class="fa fa-map-marker"></i>
                                 <p>
                                    <strong class="contact-pad">Address:</strong><address>L300, E Royal Lane, Suite 127, Irving-Texas,<br>  TX 75039, USA.</address>
                                 </p>
                              </li>
                              <li>
                                 <i class="fa fa-envelope"></i>
                                 <p>
                                    <strong>Email:</strong><a href="#">info@xproteanpro.in</a>
                                 </p>
                              </li>
                              <li>
                                 <i class="fa fa-envelope"></i>
                                 <p>
                                    <strong>Email:</strong><a href="#">career@xproteanpro.in</a>
                                 </p>
                              </li>
                           </ul>
                        </div>
                        <!-- <div class="contact-info widget">
                           <h3 class="title">Australia</h3>
                           <ul class="contact-us">
                              <li>
                                 <i class="fa fa-map-marker"></i>
                                 <p>
                                    <strong class="contact-pad">Address:</strong>Level 9, 155 Pacific Hwy,<br> St Leonards NSW 2065,<br> Australia.
                                 </p>
                              </li>
                              <li>
                                 <i class="fa fa-envelope"></i>
                                 <p>
                                    <strong>Email:</strong><a href="#">info@xproteanpro.in</a>
                                 </p>
                              </li>
                              <li>
                                 <i class="fa fa-envelope"></i>
                                 <p>
                                    <strong>Email:</strong><a href="#">career@xproteanpro.in</a>
                                 </p>
                              </li>
                           </ul>
                        </div> -->
                        <!-- <div class="follow widget">
                           <h3 class="title">Singapore</h3>
                           <ul class="contact-us">
                              <li>
                                 <i class="fa fa-map-marker"></i>
                                 <p>
                                    <strong class="contact-pad">Address:</strong>13 Marina Boulevard, #18-05, Marina Bay Financial Centre Tower,<br> Singapore.
                                 </p>
                              </li>
                              <li>
                                 <i class="fa fa-envelope"></i>
                                 <p>
                                    <strong>Email:</strong><a href="#">info@xproteanpro.in</a>
                                 </p>
                              </li>
                              <li>
                                 <i class="fa fa-envelope"></i>
                                 <p>
                                    <strong>Email:</strong><a href="#">career@xproteanpro.in</a>
                                 </p>
                              </li>
                           </ul>
                        </div> -->
                     </div>
                  </div>
                  <!-- <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h3 class="title">Our Location</h3>
                        <div id="maps" class="google-maps">
                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.8946020249437!2d77.63032411437457!3d12.91449519089337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae148d165d377d%3A0xb5e14006fc47162f!2sXprotean+Pro+PVT.+LTD.!5e0!3m2!1sen!2sin!4v1510698631994" allowfullscreen></iframe>
                        </div>
                       
                     </div>
                  </div> -->
                  <div class="divider"></div>
               </div>
            </div>
            <!-- Main Content end-->
         </div>
         <!-- Content End -->

         @endsection
