<?php session_start();?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
   <meta charset="utf-8">
   <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

   <title>Home | Lightkids</title>
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
             <div class="col-md-offset-1 col-md-4" style="height:500px;margin-bottom: 20px; background-image: url('images/aboutus/1.JPG');background-repeat: no-repeat;background-position: center center; background-size: cover">
             
             </div>
               <div class=" col-md-6" style="background: white;margin-top: 20px;padding-left: 75px;padding-right: 75px">
                 
                     <center><h3 style="text-transform: none;">About Us</h3></center> <p style="color: #222">
                     LIGHT is a not-for-profit organization which is dedicated to provide a safe and secure environment for orphan, poor, abandoned, neglected and underprivileged children of India. Since 2006 we have been actively involved in the holistic development of children and the community.
Our main focus is on Dalit (Untouchable) children and communities as they are the underprivileged and poorest in Indian society. 
</p><p style="color: #222">
The word “Dalit” means “broken, downtrodden, or oppressed”. Dalits are people born into families in the lowest rung of India’s rigid social system. 250 million Dalit men, women and children face normalized prejudice, abuse and oppression everyday. 
</p><p style="color: #222">
Though laws in India give everyone equal status, Dalits still endure segregation and are considered ‘Untouchables’ due to ingrained cultural standards. The label of being Dalit determines the jobs they are allowed to perform, such as handling dead bodies, animals, street sweeping, or removing human waste. It keeps them as the lowest in society, and in the cycle of poverty. The Dalits are constantly robbed of their dignity in the name of ‘tradition’. 

                  </p>
                 

               </div>
          </div>
       </div>

         <div class="container-fluid">
          <div class="row">
              <div class="col-md-offset-1 col-md-7" style="color: black; background: white;margin-top: 20px;padding-left: 120px;padding-right: 120px;">
             <center><h4 style="text-transform: none">Our Mission</h4></center>
<p style="color: #222">
We are committed to helping India’s Dalits overcome oppression, realize their human worth and dignity and gain self-reliance. Our mission is to bring hope and to empower the Dalit people by providing access to quality education, healthcare and vocational training. We believe everyone should have a chance at a bright future. 
</p><p  style="color: #222">
We give every Dalit child the chance to develop their full potential by realizing their human worth, social equality and dignity.We train Dalit children and women, enabling them to escape poverty and build a brighter future for their family.
</p><p style="color: #222">
We strive to change attitudes around this practice and to give the Dalit people what every human being deserves: to live free of discrimination, economically, socially and spiritually.
</p><p style="color: #222">
We work among various communities and do not discriminate on the basis of caste, ethnicity, nationality, or religious identity.
</p>
</div>
             <div class="col-md-4" style="height:500px;margin-bottom: 20px; background-image: url('images/aboutus/2.JPG');background-repeat: no-repeat;background-position: center top;">
              
             </div>
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