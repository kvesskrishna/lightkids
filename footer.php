<div id="footer" class="widget-footer">
               <footer>
                  <div class="container">
                     <div class="row">
                        <div class="col-lg-4 col-md-6">
                           <div class="widget">
                              <h3 class="wg-title">Light Home</h3>
                              <p>
                                 (A Home for Hope and Promised Future)<br>
                                 Gollanapalli, Gannavaram,<br>
                              Krishna (Dist.) - 521101,<br>
                           Andhra Pradesh, INDIA </p>
                              <p class="phone-block">
                                 +91 9490 332 838
                              </p>
                             
                           </div> <!-- widget -->
                        </div>
                         <div class="col-lg-4 col-md-6">
                           <div class="widget">
                              <h3 class="wg-title">Quick Links</h3>
                              <p>
                                 <ul style="list-style: none;">
                                    <li><a href="about" style="color: grey;font-size: 16px">About</a></li>
                                   
                                    <li><a href="light-home" style="color: grey">LIGHT Home</a></li>
                                    <li><a href="our-school" style="color: grey">Our School</a></li>
                                    <li><a href="#" style="color: grey">Donate</a></li>

                                 </ul>
                              </p>
                           </div> <!-- widget -->
                        </div>
                        <div class="col-lg-4 col-md-6">
                           <div class="widget" style="margin-bottom: 0px">
                              <h3 class="wg-title">Contact Us</h3>
                               <?php
                     if (isset($_SESSION['sendcontact'])) {
                       # code...
                      echo '<h6 class="text-success">Thank you! We have received your message! We will be in touch with you very soon.</h6>';
                      unset($_SESSION['sendcontact']);
                     }
                     ?>
                              <form role="form" class="contact-form validation-engine " method="post" action="sendcontact">
                                 <div class="form-group">
                                    <label class="sr-only" for="input_name_widget">Name *</label>
                                    <input type="text" name="name" class="form-control validate[required]" id="input_name_widget" placeholder="Name *">
                                 </div>
                                 <div class="form-group">
                                    <label class="sr-only" for="input_email_widget">Email *</label>
                                    <input type="email" name="email" class="form-control validate[required,custom[email]]" id="input_email_widget" placeholder="Email *">
                                 </div>
                                 <div class="form-group">
                                    <label class="sr-only" for="input_message_widget">Message</label>
                                    <textarea name="message" class="form-control validate[required]" rows="4" id="input_message_widget" placeholder="Message"></textarea>
                                 </div>
                                 <button type="submit" name="send" class="btn btn-default btn-wide">Send</button>
                                 <span class="loading-spinner" style="display:none;"></span>
                              </form>
                           </div>
                        </div>
                       
                     </div>
                  </div>
                  <div class="ft-copyright">
                     <div class="container">
                        <div class="mb-social">
                           <a href="#"><i class="fa fa-twitter"></i></a>
                           <a href="#"><i class="fa fa-facebook"></i></a>
                           <a href="#"><i class="fa fa-google-plus"></i></a>
                        </div>
                        <p>© 2017 All rights reserved. <a href="http://www.lightkids.org">Lightkids.org</a> Developed by <span><a href="http://www.karthikeyainfominds.com" style="color: grey">Karthikeya Infominds</a></span></p>
                     </div>
                  </div>
               </footer>
            </div>