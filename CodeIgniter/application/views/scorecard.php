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
        .form_custom{
             width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 3px solid #ccc;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    outline: none;
        }


    .stats td{
        border: 0;
        text-align: center;
        font-size: 17px;
        color: black;
        font-family: Palatino,Palatino Linotype,Palatino LT STD,Book Antiqua,Georgia,serif;
    }    

    .lineup{
        max-width: 350px;
        border: 1px solid #ccc;
        float: left !important;
        margin-top: 30px;
    }    
    .lineup th{
        background-color: #000059;
        font-weight: bold;
        font-size: 16px;
        color: white;
        font-family: Palatino,Palatino Linotype,Palatino LT STD,Book Antiqua,Georgia,serif;
    }
    .lineup td,a{
        border:0;
        font-size: 14px;
        color: black;
        font-family: Palatino,Palatino Linotype,Palatino LT STD,Book Antiqua,Georgia,serif;
    }    
    .lineup_2{
        max-width: 350px;
        border: 1px solid #ccc;
        float: right !important;
        margin-top: 30px;



    }    
    .lineup_2 th{
        background-color: #000059;
        font-weight: bold;
        font-size: 16px;
        color: white;
        font-family: Palatino,Palatino Linotype,Palatino LT STD,Book Antiqua,Georgia,serif;
    }
    .lineup_2 td{
        border:0;
        font-size: 14px;
        color: black;
        font-family: Palatino,Palatino Linotype,Palatino LT STD,Book Antiqua,Georgia,serif;
    }  
    .form_head{
        font-size: 19px;
        text-align: center;
        color: black;
        font-family: Palatino,Palatino Linotype,Palatino LT STD,Book Antiqua,Georgia,serif;
        font-weight: bold;
    }
    .key_events{
        max-width: 350px;
        border: 1px solid #ccc;

    }
    .key_events th{
        background-color: #000059;
        font-weight: bold;
        font-size: 16px;
        color: white;
        text-align: center;
        font-family: Palatino,Palatino Linotype,Palatino LT STD,Book Antiqua,Georgia,serif;

    }
    .key_events td{
        border: none;
        font-size: 12px;
        font-family: Palatino,Palatino Linotype,Palatino LT STD,Book Antiqua,Georgia,serif;
    }
    .key_name{
        font-size: 15px;
        color: black;

    }
    .key_col_1{
        padding-right: 5px;
        text-align: right;
        width: 45%;
        line-height: 1.3;
        border-right: 1px solid #ccc!important;
    }
    .key_col_2{
        width: 10%;
        text-align: center;
        vertical-align: middle;
        padding: 7px!important;
    }
    .key_col_3{
        padding-right: 5px;
        text-align: left;
        width: 45%;
        line-height: 1.3;
        border-left: 1px solid #ccc!important;
    }
    .key_empty{
        line-height: 1.3;
        border-right: 1px solid #ccc;
    }
    .player_detail{
        color: black;
        font-family: Palatino,Palatino Linotype,Palatino LT STD,Book Antiqua,Georgia,serif;
    }
    .player_detail_number{
        width: 15%;
    }
</style>
  </head>

  <body>

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
            <h3>scorecard</h3>
            <ul class="breadcrumb">
                <li><a href="<?php echo site_url('main/index') ?>">Home</a></li>
                <li class="active"><span>scorecard</span></li>
            </ul>
        </div>
    </div>



     <?php
        $shots_1=$shots_2=$ontarget_1=$ontarget_2=$fouls_1=$fouls_2=0;
        $yellow_1=$yellow_2=$red_1=$red_2=$offsides_1=$offsides_2=$goals_1=$goals_2=0;
        $own_goals_1=$own_goals_2=0;
        foreach ($player_game as $player) {
            if($player->team_id == 1){
                $goals_1 = $goals_1 + $player->goals;
                $shots_1 = $shots_1 + $player->shots;
                $ontarget_1 = $ontarget_1 + $player->ontarget;
                $fouls_1 = $fouls_1 + $player->fouls;
                $yellow_1 = $yellow_1 + $player->yellow;
                $red_1 = $red_1 + $player->red;
                $offsides_1 = $offsides_1 + $player->offsides;
                $own_goals_1 = $own_goals_1 + $player->own_goals;
            }
            else{
                $goals_2 = $goals_2 + $player->goals;
                $shots_2 = $shots_2 + $player->shots;
                $ontarget_2 = $ontarget_2 + $player->ontarget;
                $fouls_2 = $fouls_2 + $player->fouls;
                $yellow_2 = $yellow_2 + $player->yellow;
                $red_2 = $red_2 + $player->red;
                $offsides_2 = $offsides_2 + $player->offsides;
                $own_goals_2 = $own_goals_2 + $player->own_goals;
            }
    } ?>


        <!--Inner Banner End-->
    <div class="kode_content_wrap">
        <section class="kf_overview margin-0">
            <div class="container">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="overview">
                        <div class="overview_wrap">
                            <div class="row">
                               
                                <div class="col-md-8">
                                    <div class="kf_overview kf_current_match_wrap">
                                        <!--Heading 1 Start-->
                                        <h6 class="kf_hd1 margin_0">
                                            <span>match result</span>
                                        </h6>
                                        <!--Heading 1 End-->
                                        <!--Kf Opponents Outer Start-->
                                        <div class="kf_opponents_outerwrap">
                                            <h6 class="kf_h4">
                                                <span><?php echo $all_details['round']; ?></span>
                                                <em><?php echo date("d F, Y", strtotime($all_details['date'])); ?>
                                                </em>
                                                <em>
                                                    <br>
                                                        <b>REFEREES :</b> 
                                                        <?php echo $all_details['referee_1'] ?>, <?php echo $all_details['referee_2'] ?>, <?php     echo $all_details['referee_3'] ?>
                                                </em>
                                            </h6>
                                            <!--Kf Opponents Start-->
                                            <div class="kf_opponents_wrap">
                                                <div class="kf_opponents_dec">
                                                    <span><img src="<?php foreach ($team_details as $team) 
                                                     {if($all_details['play_team_1'] == $team->NAME) { echo $team->FILENAME;  }} ?>"
                                                     alt=""></span>
                                                    <div class="text" >
                                                        <h6><a href="#" style=" pointer-events: none;cursor: default;">
                                                        <?php echo $all_details['play_team_1'] ?>
                                                        </a></h6>
                                                    </div>
                                                </div>
                                                <div class="kf_opponents_gols">
                                                    <h5><span>
                                                        <?php echo $goals_1+$own_goals_2 ?> - <?php echo $goals_2+$own_goals_1 ?>
                                                    </span></h5>
                                                    
                                                    
                                                    
                                                </div>
                                                <div class="kf_opponents_dec span_right">
                                                    <span><img src="<?php foreach ($team_details as $team) 
                                                     {if($all_details['play_team_2'] == $team->NAME) { echo $team->FILENAME;  }} ?>"
                                                     alt=""></span>
                                                    <div class="text">
                                                        <h6><a href="#" style=" pointer-events: none;cursor: default;"><?php echo $all_details['play_team_2'] ?></a></h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Kf Opponents End-->

                                           
                                            <table class="stats">
                                                </tr>
                                                    <tr>
                                                    <td><?php echo $all_details['poss_1'] ?>%</td>
                                                    <td>Possession</td>
                                                    <td><?php echo $all_details['poss_2'] ?>%</td>
                                                </tr>
                                                <tr>
                                                    <td><?php echo $shots_1 ?></td>
                                                    <td>Shots</td>
                                                    <td><?php echo $shots_2 ?></td>
                                                </tr>
                                                <tr>
                                                    <td><?php echo $ontarget_1 ?></td>
                                                    <td>Shots on Target</td>
                                                    <td><?php echo $ontarget_2 ?></td>
                                                
                                                <tr>
                                                    <td><?php echo $all_details['passes_1'] ?></td>
                                                    <td>Passes Completed</td>
                                                    <td><?php echo $all_details['passes_2'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td><?php echo $fouls_1 ?></td>
                                                    <td>Fouls</td>
                                                    <td><?php echo $fouls_2 ?></td>
                                                </tr>
                                                <tr>
                                                    <td><?php echo $yellow_1 ?></td>
                                                    <td>Yellow Cards</td>
                                                    <td><?php echo $yellow_2 ?></td>
                                                </tr>
                                                    <tr>
                                                    <td><?php echo $red_1 ?></td>
                                                    <td>Red Cards</td>
                                                    <td><?php echo $red_2 ?></td>
                                                </tr>
                                                <tr>
                                                    <td><?php echo $offsides_1 ?></td>
                                                    <td>Offsides</td>
                                                    <td><?php echo $offsides_2 ?></td>
                                                </tr>
                                                <tr>
                                                    <td><?php echo $all_details['corners_1'] ?></td>
                                                    <td>Corners</td>
                                                    <td><?php echo $all_details['corners_2'] ?></td>
                                                </tr>
                                            </table>





                                            
                                            <span class="extra_custom" style="font-size: 16px;font-family: 'Garamond';">
                                               
                                                <br><b>MAN OF THE MATCH :</b>
                                                <?php echo $all_details['mom'] ?>
                                                



                                            </span>
                                        </div>
                                    </div>
                                    <div class="kf_overview kf_current_match_wrap">
                                        <table class="lineup">
                                            <tr>
                                                <th>
                                                    <img src="<?php foreach ($team_details as $team) 
                                                     {if($all_details['play_team_1'] == $team->NAME) { echo $team->FILENAME;  }} ?>"
                                                     alt="" height=30>
                                                    &nbsp;&nbsp; LINE UP
                                                </th>
                                                
                                            </tr>
                                            <?php foreach ($games_players as $gp) { ?>
                                            <tr><td>
                                                    <?php if($gp->game_id == $id && $gp->team_id == 1 && $gp->start == 1){ ?>
                                                    <a href="<?php echo site_url('main/player_detail/').$gp->ID ?>">
                                                    <?php echo $gp->NUMBER?>
                                                    &nbsp;&nbsp;
                                                    <?php echo $gp->NAME; ?> </a>
                                                <?php } ?>
                                            </td></tr>
                                            <?php } ?>
                                            <tr>
                                                <th>SUBSTITUTES</th>
                                            </tr>
                                            <?php foreach ($substitutes_1 as $sub) { ?>
                                            <tr><td>
                                                    <a href="<?php echo site_url('main/player_detail/').$sub->ID ?>">
                                                    <?php echo $sub->NUMBER?>
                                                    &nbsp;&nbsp;
                                                    <?php echo $sub->NAME; ?></a>
                                            </td></tr>
                                            <?php } ?>
                                        </table>
                                   
                                        <table class="lineup_2">
                                            <tr>
                                                <th>
                                                    <img src="<?php foreach ($team_details as $team) 
                                                     {if($all_details['play_team_2'] == $team->NAME) { echo $team->FILENAME;  }} ?>"
                                                     alt="" height=30>
                                                    &nbsp;&nbsp; LINE UP
                                                </th>
                                                
                                            </tr>
                                            <?php foreach ($games_players as $gp) { ?>
                                            <tr><td>
                                                    <?php if($gp->game_id == $id && $gp->team_id == 2 && $gp->start == 1){ ?>
                                                    <a href="<?php echo site_url('main/player_detail/').$gp->ID ?>">
                                                    <?php echo $gp->NUMBER ?>
                                                    &nbsp;&nbsp;
                                                    <?php echo $gp->NAME; ?> </a>
                                                <?php } ?>
                                            </td></tr>
                                            <?php } ?>
                                            <tr>
                                                <th>SUBSTITUTES</th>
                                            </tr>
                                            <?php foreach ($substitutes_2 as $sub) { ?>
                                            <tr><td>
                                                    <a href="<?php echo site_url('main/player_detail/').$sub->ID ?>">
                                                    <?php echo $sub->NUMBER ?>
                                                    &nbsp;&nbsp;
                                                    <?php  echo $sub->NAME; ?> </a>
                                            </td></tr>
                                            <?php } ?>
                                        </table>
                                    </div>
                                </div>

                                    

                                <aside class="col-md-4">
                                    <!--Widget League Table Start-->
                                    <div class="widget widget_ranking widget_league_table">
                                        <div class="form_head">
                                            <?php echo($all_details['play_team_1']) ?>
                                            
                                            ( <?php echo($all_details['form_1']) ?> )
                                        </div>
                                        <img src="
                                            <?php echo 'assets/formation/';echo($all_details['match_id']);echo '_1';echo '.jpg'; ?>
                                        ">
                                        <br><br>
                                        <div class="form_head">
                                            <?php echo($all_details['play_team_2']) ?>
                                            
                                            ( <?php echo($all_details['form_2']) ?> )
                                        </div>
                                        <img src="
                                            <?php echo 'assets/formation/';echo($all_details['match_id']);echo '_2';echo '.jpg'; ?>
                                        ">

                                       
                                    
                                  </div>
                                </div>
                                    <!--Widget League Table End-->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>







     <div class="kode_content_wrap">
        <section class="kf_overview margin-0">
            <div class="container">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="overview">
                        <div class="overview_wrap">
                            <div class="row">
                               
                                <div class="col-md-8">
                                    <div class="kf_overview kf_current_match_wrap">
                                        <!--Heading 1 Start-->
                                        <h6 class="kf_hd1 margin_0">
                                            <span><?php echo $all_details['play_team_1'] ?></span>
                                        </h6>

                                        <table class="player_detail">
                                            <tr>
                                                <th>Name</th>
                                                <th class="player_detail_number">Min</th>
                                                <th class="player_detail_number">Goals(assists)</th>
                                                <th class="player_detail_number">Shots</th>
                                            </tr>

                                            <?php foreach ($player_game as $player) { 
                                                if($player->team_id == 1 ){ ?>
                                                <tr>
                                                    <td><a href="<?php echo site_url('main/player_detail/').$player->ID ?>">
                                                        <?php echo $player->NAME ?></a></td>
                                                    <td class="player_detail_number"><?php echo $player->minutes ?></td>
                                                    <td class="player_detail_number"><?php echo $player->goals ?>
                                                        (<?php echo $player->assists; ?>)</td>
                                                    <td class="player_detail_number"><?php echo $player->shots ?>
                                                        (<?php echo $player->ontarget ?>)
                                                    </td>
                                                </tr>
                                                <?php }} ?>

                                        </table>


                                    </div>

                                    <div class="kf_overview kf_current_match_wrap">
                                        <!--Heading 1 Start-->
                                        <h6 class="kf_hd1 margin_0">
                                            <span><?php echo $all_details['play_team_2'] ?></span>
                                        </h6>

                                        <table class="player_detail">
                                            <tr>
                                                <th>Name</th>
                                                <th class="player_detail_number">Min</th>
                                                <th class="player_detail_number">Goals(assists)</th>
                                                <th class="player_detail_number">Shots</th>
                                            </tr>

                                            <?php foreach ($player_game as $player) { 
                                                if($player->team_id == 2 ){ ?>
                                                <tr>
                                                    <td><a href="<?php echo site_url('main/player_detail/').$player->ID ?>">
                                                        <?php echo $player->NAME ?></a></td>
                                                    <td class="player_detail_number"><?php echo $player->minutes ?></td>
                                                    <td class="player_detail_number"><?php echo $player->goals ?>
                                                        (<?php echo $player->assists; ?>)</td>
                                                    <td class="player_detail_number"><?php echo $player->shots ?>
                                                        (<?php echo $player->ontarget ?>)
                                                    </td>
                                                </tr>
                                                <?php }} ?>

                                        </table>


                                    </div>
                                </div>

                                <aside class="col-md-4">
                                    <!--Widget League Table Start-->
                                    <div class="widget widget_ranking widget_league_table">
                                        

                                       <table class="key_events">
                                            <th colspan="3">KEY EVENTS</th>
                                            <?php foreach($timeline as $time){ ?>
                                                <tr><td class="key_empty" colspan="3">&nbsp;</td></tr><tr>
                                                    <?php if($time->team_id == 1){ 
                                                        if($time->goal != NULL) { ?>
                                                            <td class="key_col_1">
                                                                <?php echo $time->minute ?>'<br>
                                                                <span class="key_name"><?php echo $time->goal ?></span><br>goal
                                                            </td>   
                                                            <td class="key_col_2"><img src="assets/timeline_icons/goal.jpg"></td>
                                                            <td></td>
                                                        <?php }
                                                        if($time->yellow != NULL) { ?>
                                                            <td class="key_col_1">
                                                                <?php echo $time->minute ?>'<br>
                                                                <span class="key_name"><?php echo $time->yellow ?></span><br>yellow card
                                                            </td>   
                                                            <td class="key_col_2"><img src="assets/timeline_icons/yellow.jpg"></td>
                                                            <td></td>   
                                                        <?php }
                                                        if($time->red != NULL) { ?>
                                                            <td class="key_col_1">
                                                                <?php echo $time->minute ?>'<br>
                                                                <span class="key_name"><?php echo $time->red ?></span><br>red card
                                                            </td>   
                                                            <td class="key_col_2"><img src="assets/timeline_icons/red.jpg"></td>
                                                            <td></td>   
                                                        <?php } 
                                                        if($time->sub_in != NULL) { ?>
                                                            <td class="key_col_1">
                                                                <?php echo $time->minute ?>'<br>
                                                                <span class="key_name"><?php echo $time->sub_in ?></span><br>
                                                                <?php echo $time->sub_out ?>
                                                            </td>   
                                                            <td class="key_col_2"><img src="assets/timeline_icons/sub.jpg"></td>
                                                            <td></td>           
                                                            
                                                    <?php }} ?>

                                                    <?php if($time->team_id == 2){ 
                                                        if($time->goal != NULL) { ?>
                                                            <td></td>   
                                                            <td class="key_col_2"><img src="assets/timeline_icons/goal.jpg"></td>
                                                            <td class="key_col_3">
                                                                <?php echo $time->minute ?>'<br>
                                                                <span class="key_name"><?php echo $time->goal ?></span><br>goal
                                                            </td>
                                                        <?php }
                                                        if($time->yellow != NULL) { ?>
                                                            <td></td>   
                                                            <td class="key_col_2"><img src="assets/timeline_icons/yellow.jpg"></td>
                                                            <td class="key_col_3">
                                                                <?php echo $time->minute ?>'<br>
                                                                <span class="key_name"><?php echo $time->yellow ?></span><br>yellow card
                                                            </td>   
                                                        <?php }
                                                        if($time->red != NULL) { ?>
                                                            <td></td>   
                                                            <td class="key_col_2"><img src="assets/timeline_icons/red.jpg"></td>
                                                            <td class="key_col_3">
                                                                <?php echo $time->minute ?>'<br>
                                                                <span class="key_name"><?php echo $time->red ?></span><br>red card
                                                            </td>   
                                                        <?php } 
                                                        if($time->sub_in != NULL) { ?>
                                                            <td></td>   
                                                            <td class="key_col_2"><img src="assets/timeline_icons/sub.jpg"></td>
                                                            <td class="key_col_3">
                                                                <?php echo $time->minute ?>'<br>
                                                                <span class="key_name"><?php echo $time->sub_in ?></span><br>
                                                                <?php echo $time->sub_out ?>
                                                            </td>           
                                                            
                                                    <?php }} ?> 


                                                </tr>
                                            <?php } ?>  
                                            <tr><td class="key_empty" colspan="3">&nbsp;</td></tr>
                                        </table>
                                    
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>






    







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
