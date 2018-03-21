var style_selector_html = ' \
<div class="style-selector sts-hidden"> \
   <div class="sts-inner"> \
      <a href="#" class="sts-toggler"><i class="fa fa-cog"></i></a> \
      <div class="sts-body"> \
         <div class="sts-header">Style Selector</div> \
         <div class="sts-content"> \
            <div class="sts-h2">Typography examples</div> \
            <div class="sts-select sts-font-select"> \
               <select> \
                  <option value="Oxygen">Oxygen (default)</option> \
                  <option value="Droid Sans">Droid Sans</option> \
                  <option value="Raleway">Raleway</option> \
                  <option value="Open Sans">Open Sans</option> \
                  <option value="Noto Sans">Noto Sans</option> \
                  <option value="Maven Pro">Maven Pro</option> \
                  <option value="Quicksand">Quicksand</option> \
                  <option value="Domine">Domine</option> \
                  <option value="Noticia Text">Noticia Text</option> \
                  <option value="Karla">Karla</option> \
               </select> \
            </div> \
            <div class="sts-h2">Container width</div> \
            <div class="sts-select sts-container-select"> \
               <select> \
                  <option value="1200">1200px</option> \
                  <option value="960">960px</option> \
               </select> \
            </div> \
            <div class="sts-h2">Layout / Design style</div> \
            <div class="sts-left"> \
               <a href="#" class="sts-layout-option sts-menubar-over"> \
                  Sidebar over content <br> \
                  <img src="style-selector/img/layout1.jpg" alt=""> \
               </a> \
            </div> \
            <div class="sts-right"> \
               <a href="#" class="sts-layout-option sts-menubar-push"> \
                  Sidebar pushes content <br> \
                  <img src="style-selector/img/layout2.jpg" alt=""> \
               </a> \
            </div> \
            <div class="sts-left"> \
               <a href="top-menu-onepage.html" class="sts-layout-option"> \
                  OnePage <span class="sts-new">new</span><br> \
                  <img src="style-selector/img/onepage.jpg" alt=""> \
               </a> \
            </div> \
            <div class="sts-right"> \
               <a href="top-menu-home-1.html" class="sts-layout-option"> \
                  Top menu version <br> \
                  <img src="style-selector/img/topmenu.jpg" alt=""> \
               </a> \
            </div> \
            <div class="sts-clear"></div> \
         </div> \
      </div> \
   </div> \
</div> \
';

var style_selector_styles = ' \
   <link rel="stylesheet" href="style-selector/style-selector.css"> \
   <link href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet" type="text/css"> \
   <link href="http://fonts.googleapis.com/css?family=Raleway:300,700" rel="stylesheet" type="text/css"> \
   <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,700" rel="stylesheet" type="text/css"> \
   <link href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700" rel="stylesheet" type="text/css"> \
   <link href="http://fonts.googleapis.com/css?family=Maven+Pro:400,700" rel="stylesheet" type="text/css"> \
   <link href="http://fonts.googleapis.com/css?family=Quicksand:300,400,700" rel="stylesheet" type="text/css"> \
   <link href="http://fonts.googleapis.com/css?family=Domine:400,700" rel="stylesheet" type="text/css"> \
   <link href="http://fonts.googleapis.com/css?family=Noticia+Text:400,700" rel="stylesheet" type="text/css"> \
   <link href="http://fonts.googleapis.com/css?family=Karla:400,700" rel="stylesheet" type="text/css"> \
';


$(document).ready(function() {
   
   // Add style selector styles
   $('head').append(style_selector_styles);

   // Add style selector html code
   $('body').append(style_selector_html);

   var $style_selector = $('.style-selector');

   // Style selector toggler
   $('.sts-toggler').click(function(e){
      e.preventDefault();
      $style_selector.toggleClass('sts-hidden');
   });

   // Font selector
   $('.sts-font-select select').change(function(){
      $('body').css({'font-family':$(this).val()});
   });

   // Container selector
   $('.sts-container-select select').change(function(){
      if($(this).val() == '960'){
         $('body').addClass('cont-960');
      }else{
         $('body').removeClass('cont-960');
      }
   });

   // Menubar 
   $('.sts-menubar-over').click(function(e){
      e.preventDefault();
      $('body').addClass('menu-bar-ontop');
   });
    $('.sts-menubar-push').click(function(e){
      e.preventDefault();
      $('body').removeClass('menu-bar-ontop');
   });
   


}); // ready

