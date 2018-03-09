<!DOCTYPE html>
<html lang="en">
  <base href="<?php echo base_url();?>" />
<!-- Mirrored from kodeforest.net/html/gameplay/player-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Jul 2017 13:44:41 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>EPL 2k18</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- DL Menu CSS -->
    <link href="assets/js/dl-menu/component.css" rel="stylesheet">
    <!-- Slick Slider CSS -->
    <link href="assets/css/slick.css" rel="stylesheet"/>
    <link href="assets/css/slick-theme.css" rel="stylesheet"/>
    <!-- ICONS CSS -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <link href="assets/css/svg-icons.css" rel="stylesheet">
    <!-- Pretty Photo CSS -->
    <link href="assets/css/prettyPhoto.css" rel="stylesheet">
    <!-- Typography CSS -->
    <link href="assets/css/typography.css" rel="stylesheet">
    <!-- Widget CSS -->
    <link href="assets/css/widget.css" rel="stylesheet">
    <!-- Shortcodes CSS -->
    <link href="assets/css/shortcodes.css" rel="stylesheet">
    <!-- Custom Main StyleSheet CSS -->
    <link href="assets/style.css" rel="stylesheet">
    <!-- Color CSS -->
    <link href="assets/css/color.css" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="assets/css/responsive.css" rel="stylesheet">
 
  </head>

  <body>
  <?php
  $player_photo = $mer2->FILENAME;
$minutes=0;
$match=0;
$goal=0;
$assist=0;
$shots=0;
$ontarget=NULL;
$fouls=NULL;
$yellow=0;
$red=0;
$offside=0;
$hatrick=0;


foreach ($rows as $r)
{ 
   $match++; 
   $minutes+=$r->minutes;
   if($r->goals=="3")
   {
    $hatrick++;
   }
   $goal+=$r->goals;
   $assist+=$r->assists;
   $shots+=$r->shots;
   $ontarget=$r->ontarget;
   $fouls+=$r->fouls;
   $yellow+=$r->yellow;
   $red+=$r->red;
   $offside+=$r->offsides;
}


?>

<!--kode Wrapper Start-->  
<div class="kode_wrapper"> 
   

   <!--Header 2 Wrap Start-->
    <header class="kode_header_2">
        <!--Header 2 Top Bar Start-->
        <div class="kf_top_bar">
            <div class="container">
               
                <div class="kf_right_dec">
                  
                    <ul class="kf_user">
                        <li><a href="<?php echo site_url('main/about_us') ?>">About Us</a></li>
                        <li><a href="<?php echo site_url('main/contact') ?>">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--Header 2 Top Bar End-->
        <div class="container">
            <!--Logo Bar Start-->
            <div class="kode_logo_bar">
                <!--Logo Start-->
                <div class="logo">
                    <a href="<?php echo site_url('main/index') ?>">
                        <img src="assets/images/logo.png" alt="">
                    </a>
                </div>
                <!--Logo Start-->
                <!--Navigation Wrap Start-->
                <div class="kode_navigation">
                    <!--Navigation Start-->
                    <ul class="nav">
                        <li><a href="<?php echo site_url('main/index') ?>">home</a></li>
                        <li><a href="<?php echo site_url('main/latest_result') ?>">results</a></li>
                        <li><a href="<?php echo site_url('main/fixtures') ?>">fixtures</a></li>
                        <li><a href="<?php echo site_url('main/auction') ?>">auction</a></li>
                        <li><a href="<?php echo site_url('main/gallery') ?>">gallery</a></li>

                        <li>
                            <a href="#" style=" pointer-events: none;cursor: default;">team</a>
                            <ul>
                                <li><a href="<?php echo site_url('main/team_details/1') ?>">KOMBAN CS</a></li>
                                <li><a href="<?php echo site_url('main/team_details/2') ?>">ITTI KANDAM BROTHERS</a></li>
                                <li><a href="<?php echo site_url('main/team_details/3') ?>">EC CHEKUTHANZ</a></li>
                                <li><a href="<?php echo site_url('main/team_details/4') ?>">MINNAL EEE</a></li>
                                <li><a href="<?php echo site_url('main/team_details/5') ?>">MECH HARAMI</a></li>
                                <li><a href="<?php echo site_url('main/team_details/6') ?>">CIVIL VAMBANS</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!--DL Menu Start-->
                    <div id="kode-responsive-navigation" class="dl-menuwrapper">
                        <button class="dl-trigger">Open Menu</button>
                        <ul class="dl-menu">
                            <li><a href="<?php echo site_url('main/index') ?>">home</a></li>
                            <li class="menu-item kode-parent-menu"><a href="<?php echo site_url('main/latest_result') ?>">results</a></li>
                            <li class="menu-item kode-parent-menu"><a href="<?php echo site_url('main/fixtures') ?>">fixtures</a></li>
                            <li class="menu-item kode-parent-menu"><a href="<?php echo site_url('main/auction') ?>">auction</a></li>
                            <li class="menu-item kode-parent-menu"><a href="<?php echo site_url('main/gallery') ?>">gallery</a></li>                            
                            <li class="menu-item kode-parent-menu"><a href="#">team</a>
                                <ul class="dl-submenu">
                                    <li><a href="<?php echo site_url('main/team_details/1') ?>">KOMBAN CS</a></li>
                                    <li><a href="<?php echo site_url('main/team_details/2') ?>">ITTI KANDAM BROTHERS</a></li>
                                    <li><a href="<?php echo site_url('main/team_details/3') ?>">EC CHEKUTHANZ</a></li>
                                    <li><a href="<?php echo site_url('main/team_details/4') ?>">MINNAL EEE</a></li>
                                    <li><a href="<?php echo site_url('main/team_details/5') ?>">MECH HARAMI</a></li>
                                    <li><a href="<?php echo site_url('main/team_details/6') ?>">CIVIL VAMBANS</a></li>
                                </ul>
                            </li>
                                              
                        </ul>
                    </div>
                    <!--DL Menu END-->


                    <!--Navigation End-->
                    <a href="<?php echo site_url('main/about_us') ?>" class="kf_cart">
                        <i class="fa fa-laptop"></i>
                        <div class="text">
                            <span>Designed By</span>
                            <em>CSE</em>
                        </div>
                    </a>
                </div>
                <!--Navigation Wrap End-->
            </div>
            <!--Logo Bar End-->
        </div>
    </header>
    <!--Header 2 Wrap End-->



    <!--Inner Banner Start-->
    <div class="innner_banner">
        <div class="container">
            <h3>player detail</h3>
            
        </div>
    </div>
    <!--Inner Banner End-->
    <div class="kode_content_wrap">
        <section class="blog_detail_wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                       
                            <!--Featured 2 Slider Start-->
                            
                                    <div class="text_wrper">
                                        <!--thumb Footer Start-->
                                      
                                        <!--thumb Footer End-->
                                        <div class="text_2">
                                            <span class="label2">EPL 2018</span>
                                            <h6><img src="<?php echo base_url('assets/extra-images/jersi.jpg')?>" width=20>
                                            <?php echo $mer2->JERSEY;?> &nbsp; &nbsp;
                                            <?php echo $mer2->NAME;?> </h6>
                                            <em class="kf_date"></em>
                                            <p>
                                            </p>     
                                            <!--Game Highlights thumb Start-->
                                            <div class="kf_highlight">
                                               
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <div class="thumb">
                                                           <img src="<?php echo base_url($player_photo);?>" width=20 height=260>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <div class="text">
                                                            
                                                            <ul class="list_meta">
                                                                <li><em><strong><?php echo $mer2->NAME;?></strong></em></li>
                                                                <li><em><strong><?php echo $mer2->BRANCH;echo " department"?></strong></em></li>
                                                                <li><em><strong>TEAM : <?php echo $mer2->TEAM;?></strong></em></li>
                                                                <li><em><strong>TRANSFER FEE : <?php echo $mer2->PRICE;?></strong></em></li>
                                                                <li><em><strong>PLAYING POSITION : <?php echo $mer2->PLAYING_STYLE;?></strong></em></li>

                                                     
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>  

                                            <!--Game Highlights thumb End-->
                                            <!--Blockquote Start-->
                                            
                                            <!--Blockquote End--> 
                                         //<div class="kf_plyer_rating2">
                                                <div class="kf_plyer_rating">
                                                    <span>
                                                        <strong>matches</strong>
                                                         <b><?php echo $match;?></b>
                                                    </span>
                                                    <span>
                                                        <strong>minutes played</strong>
                                                        <b><?php echo $minutes;?></b>
                                                    </span>
                                                    <span>
                                                        <strong>goals</strong>
                                                        <b><?php echo $goal;?></b>
                                                    </span>
                                                </div>




                                                <ul class="kf_table2 kf_tableaside">
                                               
                                                    <li>
                                                        <div>
                                                            <span>
                                                               <strong>assist</strong>
                                                               <em></em>
                                                            </span>
                                                        </div>
                                                        <div>
                                                           <span>
                                                               <strong>shots</strong>
                                                               <em></em>
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span>
                                                               <strong>shots on target</strong>
                                                               <em></em>
                                                            </span>
                                                        </div>
                                                        <div>
                                                           <span>
                                                               <strong>Hatrick</strong>
                                                               <em></em>
                                                            </span>
                                                        </div>
                                                    </li>
                                                      <li>
                                                        <div>
                                                            <span>
                                                               
                                                               <strong><?php echo $assist; ?></strong>
                                                               <em></em>
                                                            </span>
                                                        </div>
                                                        <div>
                                                           <span>
                                                               <strong><?php echo $shots; ?></strong>
                                                               <em></em>
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span>
                                                               <strong><?php echo $ontarget; ?></strong>
                                                               
                                                              
                                                               <em></em>
                                                          
                                                            </span>
                                                        </div>
                                                         <div>
                                                            <span>
                                                               
                                                               <strong><?php echo $hatrick;?></strong>
                                                               <em></em>
                                                               
                                                            </span>
                                                        </div>
                                                       
                                                    </li>
                                                    <li>
                                                        <div>
                                                            <span>
                                                               
                                                                <strong>yellow</strong>
                                                               <em></em>
                                                            </span>
                                                        </div>
                                                        <div>
                                                           <span>
                                                               <strong>Red</strong>
                                                               <em></em>
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span>
                                                               <strong>offside</strong>
                                                               <em></em>
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span>
                                                               
                                                               <strong>fouls</strong>
                                                               <em></em>
                                                            </span>
                                                        </div>
                                                        
                                                    </li>
                                                  
                                                    <li>
                                                        <div>
                                                            <span>
                                                               <strong><?php echo $yellow;?></strong>
                                                               <em></em>
                                                            </span>
                                                        </div>
                                                        <div>
                                                           <span>

                                                               <strong><?php echo $red;?></strong>
                                                             
                                                               <em></em>
                                                              
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span>
                                                               <strong><?php echo $offside;?></strong>
                                                               <em></em>
                                                            </span>
                                                        </div>
                                                         <div>
                                                           <span>
                                                               <strong><?php echo $fouls;?></strong>
                                                               <em></em>
                                                            </span>
                                                        </div>
                                                       
                                                    </li>
                                         
                                                </ul>
                                                
                                            </div>
                                        </div> 
                                        <!--Tags Start--> 
                                        
                                        <!--Tags End--> 
                                    </div>
                            
                            
                            <!--Featured 2 Slider End-->
                         
                            <!--Comment Wrap Start-->
                           
                            <!--Comment Wrap End-->
                            <!--Comment Input Form Wrap Start-->
                           
                            <!--Comment Input Form Wrap End-->
                        
                    </div>
                    
                </div>
            </div>
        </section>
    </div>
    <!--Main Content Wrap End-->
    

   <!--ticker Wrap Start-->
    <div class="kf_ticker-wrap twitter_ticker">
        <div class="container">
            <div class="kf_ticker">
                <span><i class="fa fa-twitter"></i></span>
                <div class="kf_ticker_slider">
                    <ul class="ticker">
                        <li><p style="color:white !important;font-size: 17px !important;text-align: center !important;">
                            KEEP CALM AND PLAY FOOTBALL
                        </p></li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--ticker Wrap End-->
  
    <!--Footer Wrap End-->
    <!--Copy Right Wrap Start-->
    <div class="copy_right3">
        <div class="container">
            <p>2018 @ College of Engineering, Designed by CSE</p>
            <ul class="kf_social3">
                <li><a href=https://www.facebook.com/EPL2k17/><i class="fa fa-facebook"></i></a></li>

            </ul>
        </div>
    </div>
    <!--Copy Right Wrap End-->
    <!--Register Pop Up Wrap Start-->
    <div class="modal fade" id="search" tabindex="-1" role="dialog" aria-labelledby="search">
        <div class="modal-dialog" role="document">
            <div class="input_dec">
                <input type="text" placeholder="search......">
                <button class="btn_icon"><i class="fa fa-search"></i></button>
            </div>
        </div>
    </div>        
    <!--Register Pop Up Wrap End-->
</div>
<!--kode Wrapper End-->





    <!--Jquery Library-->
   <script src="assets/js/jquery.js"></script>
    <!--Bootstrap core JavaScript-->
    <script src="assets/js/bootstrap.js"></script>
    <!--Slick Slider JavaScript-->
    <script src="assets/js/slick.min.js"></script>
    <!--Number Count (Waypoints) JavaScript-->
    <!-- <script src="assets/js/downCount.js"></script> -->
    <script src="assets/js/waypoints-min.js"></script>
    <!--Dl Menu Script-->
    <script src="assets/js/dl-menu/modernizr.custom.js"></script>
    <script src="assets/js/dl-menu/jquery.dlmenu.js"></script>
    <!--Progress bar JavaScript-->
    <script src="assets/js/jprogress.js" type="text/javascript"></script>
    <!--Pretty Photo JavaScript-->
    <script src="assets/js/jquery.prettyPhoto.js"></script>
    <!--Custom JavaScript-->
    <script src="assets/js/custom.js"></script>
  </body>

  <script>
        // Set the date we're counting down to
        // USE this to change ETA
        var countDownDate = new Date("July 29, 2017 20:25:15").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

        // Get todays date and time
        var now = new Date().getTime();

        // Find the distance between now an the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        document.getElementById("demo").innerHTML = days + "d " + hours + "h "
        + minutes + "m " + seconds + "s ";

        // If the count down is over, write some text 
        if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "GAME STARTED";
        }
        }, 1000);
</script>


<!-- Mirrored from kodeforest.net/html/gameplay/player-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Jul 2017 13:44:41 GMT -->
</html>
