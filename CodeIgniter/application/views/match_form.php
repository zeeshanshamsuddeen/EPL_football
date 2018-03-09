<!DOCTYPE html>
<html lang="en">
<base href="<?php echo base_url();?>" />


<!-- Mirrored from kodeforest.net/html/gameplay/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Jul 2017 13:39:07 GMT -->
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
 
 <style type="text/css">
     
 </style>
  </head>

  <body>

MATCH FORM FOR GAME

    <?php echo form_open('main/match_form_database'); ?>

    match_id : <?php echo form_input('match_id'); ?><br>
    win : <?php 
                $options1 = array(
                                        'KOMBAN CS'         => 'KOMBAN CS',
                                        'ITTI KANDAM BROTHERS'           => 'ITTI KANDAM BROTHERS',
                                        'EC CHEKUTHANZ'         => 'EC CHEKUTHANZ',
                                        'MINNAL EEE'         => 'MINNAL EEE',
                                        'MECH HARAMI'           => 'MECH HARAMI',
                                        'CIVIL VAMBANS'         => 'CIVIL VAMBANS',
                                        'draw' => 'draw'

                                );
                echo form_dropdown('win', $options1, 'KOMBAN CS'); 
                ?><br>
    referee_1 : <?php echo form_input('referee_1'); ?><br>
    referee_2 : <?php echo form_input('referee_2'); ?><br>
    referee_3 : <?php echo form_input('referee_3'); ?><br>
    mom : <?php echo form_input('mom'); ?><br>
    formation_1 : <?php echo form_input('form_1'); ?><br>
    formation_2 : <?php echo form_input('form_2'); ?><br>
    posession_1 : <?php echo form_input('poss_1'); ?><br>
    posession_2 : <?php echo form_input('poss_2'); ?><br>
  	passes_1 : <?php echo form_input('passes_1'); ?><br>
    passes_2 : <?php echo form_input('passes_2'); ?><br>
  	corners_1 : <?php echo form_input('corners_1'); ?><br>
    corner_2 : <?php echo form_input('corners_2'); ?><br>


    <?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>
    <?php echo form_close(); ?>

    <a href='<?php echo site_url('main/admin') ?>'>admin</a><br>
    <a href='<?php echo site_url('main/player_form_123558484') ?>'>player form</a><br>
    <a href='<?php echo site_url('main/log_out') ?>'>Log Out</a>






      <!--Jquery Library-->
    <script src="assets/js/jquery.js"></script>
    <!--Bootstrap core JavaScript-->
    <script src="assets/js/bootstrap.js"></script>
    <!--Slick Slider JavaScript-->
    <script src="assets/js/slick.min.js"></script>
    <!--Number Count (Waypoints) JavaScript-->
    <script src="assets/js/downCount.js"></script>
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

<!-- Mirrored from kodeforest.net/html/gameplay/latest-result.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Jul 2017 13:43:21 GMT -->
</html>
