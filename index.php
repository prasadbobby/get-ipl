<?php

include("./includes/header.php");
include("./includes/getfiles.php");
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
                    <div class="row lsc_series_meta_row" id="header-comment">
                        
                        <script type="text/javascript">
                        $(document).ready(function(){
                            $('#header-comment').load("./header-comment.php");
                            setInterval(function(){
                            $('#header-comment').load("./header-comment.php");

                            },350000);
                        });
                        </script>
                    </div>
                    <div class="row lsc_match_meta_row">
                        <div class="col-4 lsc_team_left">
                            <img src="./img/teams/<?php echo $limg;?>" class="lsc_team_icon" width="30px" height="60px"/>
                            <div class="lsc_team_stat" id="left-score">
                            <script type="text/javascript">
                                $(document).ready(function(){
                                    $('#left-score').load("./left-score.php");
                                    setInterval(function(){
                                    $('#left-score').load("./left-score.php?one");

                                    },30000);
                                });
                            </script>
                            </div>
                        </div>
                        <div class="col-4 lsc_match_score_meta">
                            <span class="lsc_match_score">
                            </span>
                            <!-- <span class="lsc_match_time">V/S</span> -->
                            <img src="./img/vs.png" alt="" style="width:130px;filter:invert(1);">
                        </div>
                        <div class="col-4 lsc_team_right">
                            <img src="./img/teams/<?php echo $rimg;?>" class="lsc_team_icon" width="30px" height="60px"/>
                            
                            <div class="lsc_team_stat" id="right-score">
                                
                                <script type="text/javascript">
                                $(document).ready(function(){
                                    $('#right-score').load("./right-score.php");
                                    setInterval(function(){
                                    $('#right-score').load("./right-score.php");

                                    },60000);
                                });
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="row lsc_page_tabs">
                        <div class="col-12">
                            <ul>
                                <li class="active" onclick="location.href = 'index';">
                                    <span>Stats</span>
                                </li>
                                <li onclick="location.href = 'point-table';">
                                    <span>Point tables</span>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </section>
                <!-- End Section Header -->

                <!-- Start Section Body -->
                <section id="lsc_body" class="col-12">
                    <div class="row lsc_match_stats_row">
                        <div class="col-3 justify-content-center align-self-center">
                            <span class="lsc_match_stat_num"><img src="https://img.icons8.com/material/24/000000/cricketer.png" style="filter: invert(1);"/></span>
                        </div>
                        <div class="col-6 justify-content-center align-self-center" id="batsman">
                        <script type="text/javascript">
                            $(document).ready(function(){
                                $('#batsman').load("./batsman-refresh.php");
                                setInterval(function(){
                                $('#batsman').load("./batsman-refresh.php");

                                },60000);
                            });
                            </script>
                        </div>
                        <div class="col-3 justify-content-center align-self-center">
                            <span class="lsc_match_stat_num"><img src="https://img.icons8.com/material/24/000000/cricketer.png" style="filter: invert(1);"/></span>
                        </div>
                    </div>
                    <div class="row lsc_match_stats_row">
                        <div class="col-3 justify-content-center align-self-center">
                            <span class="lsc_match_stat_num"><img src="https://img.icons8.com/material-rounded/24/000000/baseball-ball.png" style="filter: invert(1);"/></span>
                        </div>
                        <div class="col-6 justify-content-center align-self-center" id="bowler">
                            <script type="text/javascript">
                                $(document).ready(function(){
                                    $('#bowler').load("./bowler-refresh.php");
                                    setInterval(function(){
                                    $('#bowler').load("./bowler-refresh.php");

                                    },60000);
                                });
                            </script>
                        </div>
                        <div class="col-3 justify-content-center align-self-center">
                            <span class="lsc_match_stat_num"><img src="https://img.icons8.com/material-rounded/24/000000/baseball-ball.png" style="filter: invert(1);"/></span>
                        </div>
                    </div>
                </section>
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
                                    <i class="fab fa-chromecast" style="color:red;  "></i>
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










