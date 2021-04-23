<style>
table {
   empty-cells: hide;
   pointer-events:none;
   cursor:default;
    color:#fff;
    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
}
.table-responsive{
    margin-bottom: 40px !important;
    
}
::-webkit-scrollbar {
  width: 7px;
}
::-webkit-scrollbar-thumb {
  background: rgba(0,0,0,.3);
  border-radius:12px;
}
table.table th, table.table td {
  text-align:center;
}
thead tr th{
  background: #fff;
  color: #000;
  font-size: 15px;
  font-weight:bold;
  text-transform: uppercase;
  padding: 14px 0;  
}
thead tr th:nth-child(odd){
  display:none;
}
tbody tr td:nth-child(odd){
  display:none;
}

td h3{
  display:none;
}
</style>

<?php

include("./includes/header.php");
include("./includes/getfiles.php");
$url = "https://www.news18.com/cricketnext/series/ipl-2020/points-table.html";
$html = file_get_html($url);
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
                                    $('#left-score').load("./left-score.php");

                                    },60000);
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
                                <li onclick="location.href = 'index';">
                                    <span>Stats</span>
                                </li>
                                <li class="active" onclick="location.href = 'point-table';">
                                    <span>Point tables</span>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </section>
                <!-- End Section Header -->

                <!-- Start Section Body -->
                <div class="table-responsive table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl">
                <table class="table  table-hover table-fixed">
                    <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">TEAMS</th>
                        <th scope="col"></th>
                        <th scope="col">MATCHES</th>
                        <th scope="col"></th>
                        <th scope="col">WON</th>
                        <th scope="col"></th>
                        <th scope="col">LOST</th>
                        <th scope="col"></th>
                        <th scope="col">TIED</th>
                        <th scope="col"></th>
                        <th scope="col">NR</th>
                        <th scope="col"></th>
                        <th scope="col">POINTS</th>
                        <th scope="col"></th>
                        <th scope="col">NRR</th>
                    </tr>
                    </thead>
                <?php
                foreach($html -> find('tbody') as $first){
                foreach($first->find('tr') as $line){

                    echo "<tr>";
                    foreach($line->find('td') as $data){
                        echo "<td>$data</td>";
                    }
                    echo "</tr>";
                }
                }
                ?>
                </tbody>
                </table>
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
                                    <i class="fab fa-chromecast" style="color:red;"></i>
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