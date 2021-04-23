<?php

include("./includes/header.php");
include("./includes/simple_html_dom.php");
$html=file_get_html("https://www.cricbuzz.com/cricket-match/live-scores");
$live_text=file_get_html("https://www.cricbuzz.com/live-cricket-scores/30385/14th-match-indian-premier-league-2020");
$logos=file_get_html("https://www.google.com/search?q=ipl");
$team=file_get_html("https://www.google.com/search?q=ipl#sie=m;/g/11k7xtxhgk;5;/m/03b_lm1;dt;fp;1");
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
?>
  

    <div class="container-fluid">
            
            <div id="lsc_app" class="row">
                
                <!-- Start Section Header Bar -->
                <section id="lsc_header_bar" class="col-12">
                    <div class="row lsc_page_title_row">
                        <!-- <div class="col-2">
                            <i class="fa fa-chevron-left"></i>
                        </div> -->
                        <div class="col-12 lsc_page_title text-center font-weight-bold">
                            Get IPL
                        </div>
                    </div>
                </section>
                <!-- End Section Header Bar -->
                
                <!-- Start Section Header -->
                <section id="lsc_header" class="col-12">
                    <div class="row lsc_series_meta_row">
                        <div class="col-12">
                            <span class="lsc_series_meta_detail">
                            <?php
                                echo $html->find('h3[class=cb-lv-scr-mtch-hdr inline-block]',0)->plaintext;
                             ?>
                            
                            </span>
                            <span class="lsc_series_meta_title">
                            <?php
                                echo $html->find('div[class=cb-text-live]',0)->plaintext;
                            ?>
                            </span>
                        </div>
                    </div>
                    <div class="row lsc_match_meta_row">
                        <div class="col-4 lsc_team_left">
                            <img src="./img/sunrise.png" class="lsc_team_icon" width="30px" height="60px"/>
                            <div class="lsc_team_stat">
                                <ul>
                                    <li>
                                    <?php
                                    echo $html->find('div[class=cb-hmscg-bwl-txt cb-ovr-flo]',0)->plaintext;
                                    ?></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-4 lsc_match_score_meta">
                            <span class="lsc_match_score">Text
                            </span>
                            <span class="lsc_match_time">Overs: 4/20</span>
                        </div>
                        <div class="col-4 lsc_team_right">
                            <img src="./img/delhi.png" class="lsc_team_icon" width="30px" height="60px"/>
                            
                            <div class="lsc_team_stat">
                                <ul>
                                <li><?php
                                       echo $html->find('div[class=cb-hmscg-bat-txt ]',0)->plaintext;

                                    ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row lsc_page_tabs">
                        <div class="col-12">
                            <ul>
                                <li onclick="location.href = 'index';">
                                    <span>Batsman</span>
                                </li>
                                <li class="active" onclick="location.href = 'bowlers';">
                                    <span>Bowlers</span>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </section>
                <!-- End Section Header -->

                <!-- Start Section Body -->
                <div id="container">
                    <iframe id="embed" src="https://www.news18.com/cricketnext/series/ipl-2020/points-table.html" scrolling="no"></iframe>
                </div>
                <!-- End Section Body -->
               
                <!-- Start Section Footer -->
                <section id="lsc_footer" class="col-12">
                    <div class="row lsc_app_footer_row">
                        <div class="col-12 lsc_footer_tabs">
                            <ul>
                                <li class="active" onclick="location.href = 'index';">
                                    <span>
                                    <i class="fas fa-chart-line"></i>
                                    </span>
                                </li>
                                <li onclick="location.href = 'live';">
                                    <span>
                                    <i class="fab fa-chromecast"></i>
                                    </span>
                                </li>
                                <li onclick="location.href = 'terms';">
                                    <span>
                                    <i class="fas fa-info-circle"></i>
                                    </span>
                                </li>
                                <li onclick="location.href = 'logout';">
                                    <span>
                                    <i class="fas fa-sign-out-alt"></i>
                                    </span>
                                </li>
                            </ul>
                            <span class="lsc_sep"></span>
                        </div>
                    </div>
                </section>
                <!-- End Section Footer -->

             

            </div>

        </div>
    <?php 
        if(isset($_GET['success'])){
            echo "<script>Swal.fire(
				'&#128525; HURRAY &#128525;',
				'You Have Successfully Registered.',
				'success'
			);</script>"; 
        }
    ?>


<?php
  include("./includes/footer.php");
?>











<!-- <a class="cb-text-link ng-binding" ng-href="/profiles/14628/abdul-samad" ng-bind="batsmen.batName" href="/profiles/14628/abdul-samad">Abdul Samad</a> -->