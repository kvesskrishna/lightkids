<?php session_start();?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
   <meta charset="utf-8">
   <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

   <title>Contact | Lightkids</title>
   <meta name="description" content="">
   <meta name="keywords" content="">

   <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
   <link rel="icon shortcut" href="assets/img/logo.png">
   <link href='http://fonts.googleapis.com/css?family=Oxygen:400,700' rel='stylesheet' type='text/css'>

   <link rel="stylesheet" href="style.css">

   <link rel="stylesheet" href="assets/plugins/layerslider/css/layerslider.css">

   <script src="assets/js/vendor/modernizr-2.6.2.min.js"></script>
</head>
   <body data-spy="scroll" data-target=".top-main-menu-scrollspy" data-offset="60">
      <div id="wrapper" class="no-menubar">
         <div id="main">
        <?php require_once('header.php');?>
      
          <!--ACTUAL PAGE CONTENT-->
                    <div class="container-fluid">
         
          <div class="row">
             <div class="col-md-5" style="margin-bottom: 20px; background-image: url('');background-repeat: no-repeat;background-position: center center; background-size: cover">
               <img src="images/contact.JPG" width="100%" height="600px">
             </div>
             <div class="col-md-7" style="background: white;margin-top: 20px;padding: 25px;padding-left: 75px;">
                 
                     <h3 style="text-transform: none;">Contact Us</h3>
                     <?php
                     if (isset($_SESSION['sendcontact'])) {
                       # code...
                      echo '<h6 class="text-success">Thank you! We have received your message! We will be in touch with you very soon.</h6>';
                      unset($_SESSION['sendcontact']);
                     }
                     ?>
                     <form role="form" method="post" action="sendcontact.php" class="contact-form validation-engine ">
                                 <div class="form-group">
                                    <label class="sr-only" for="input_name_widget">Name *</label>
                                    <input type="text" name="name" class="form-control validate[required]" id="input_name_widget" placeholder="Name *">
                                 </div>
                                 <div class="form-group">
                                    <label class="sr-only" for="input_email_widget">Email *</label>
                                    <input type="email" name="email" class="form-control validate[required,custom[email]]" id="input_email_widget" placeholder="Email *">
                                 </div>
                                 <div class="form-group">
                                    <label class="sr-only" for="input_email_widget">Phone *</label>
                                    <input type="text" name="phone" class="form-control validate[required]" id="input_name_widget" placeholder="Phone *">
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
      
       
            <?php require_once('subscribe.php');?>
            <?php require_once('footer.php');?>
            

         </div> <!-- main -->

      </div> <!-- wrapper -->

      <script src="assets/js/vendor/jquery-1.10.2.min.js"></script>
      <script src="assets/js/vendor/jquery-ui-1.10.4.custom.min.js"></script>
      <script src="assets/js/vendor/jquery.touchSwipe.min.js"></script>

      <script src="assets/js/bootstrap/carousel.js"></script>
      <script src="assets/js/bootstrap/tab.js"></script>
      <script src="assets/js/bootstrap/collapse.js"></script>
      <script src="assets/js/bootstrap/scrollspy.js"></script>
      <script src="assets/js/bootstrap/affix.js"></script>
      <script src="assets/js/bootstrap/transition.js"></script>

      <!--[if IE]><script type="text/javascript" src="assets/js/vendor/excanvas.js"></script><![endif]-->
      <script src="assets/js/vendor/jquery.knob.min.js"></script>
      <script src="assets/js/vendor/fastclick.min.js"></script>
      <script src="assets/js/vendor/jquery.stellar.min.js"></script>

      <script src="assets/js/vendor/jquery.mousewheel.js"></script>
      <script src="assets/js/vendor/perfect-scrollbar.min.js"></script>
      <script src="assets/js/vendor/jquery.mtmenu.js"></script>

      <script src="assets/js/vendor/isotope.pkgd.min.js"></script>

      <script src="assets/js/vendor/jquery.validationEngine.js"></script>
      <script src="assets/js/vendor/jquery.validationEngine-en.js"></script>

      <!-- LayerSlider script files -->
      <script src="assets/plugins/layerslider/js/greensock.js" type="text/javascript"></script>
      <script src="assets/plugins/layerslider/js/layerslider.transitions.js" type="text/javascript"></script>
      <script src="assets/plugins/layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>

      <script src="assets/js/plugins.js"></script>
      <script src="assets/js/main.js"></script>
      <script type="text/javascript">
   $(document).ready(function(){
$("#subscribebtn").click(function(){
var subname = $("#subname").val();
var submail = $("#submail").val();
//alert(subname);

var dataString = 'subname='+ subname + '&submail='+ submail;

// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "ajaxsubmit.php",
data: dataString,
cache: false,
success: function(result){
alert(result);
}
});

});
});

</script>
   </body>
</html>