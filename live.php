<?php

include("./includes/header.php");

?>
<?php
  $ncount = 1;
  $sql = "UPDATE users SET count = '$ncount' WHERE username = '$_SESSION[user_name]'";
  $exe = Query($sql);
?>
  <div class="container-fluid">
            
            <div id="lsc_app" class="row">
                
                <!-- Start Section Header Bar -->
                <section id="lsc_header_bar" class="col-12">
                    <div class="row lsc_page_title_row">
                        <div class="col-2" onclick="goBack()">
                            <i class="fa fa-chevron-left"></i>
                        </div>
                        <div class="col-8 lsc_page_title font-weight-bold">
                            Get IPL
                        </div>
                    </div>
                </section>
                <!-- End Section Header Bar -->
                

                <iframe onunload="frameload()" class="frame" src="newlive.php" frameborder="0" scrolling="no" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
                    <script type="text/javascript">
                    function frameload(){
                    alert("iframe loaded")
                    }
                    </script>
                <?php
                    $status='TXN_SUCCESS';
                    $txnamount=10;
                    $quer = "SELECT * FROM payments where USER_NAME = '$_SESSION[user_name]' AND STATUS = '$status' AND TXNAMOUNT = '$txnamount';";
                    $exe = Query($quer) or die(mysqli_error($con));
                    if(mysqli_num_rows($exe) > 0){
                    }
                    else{
                            $post = mysqli_fetch_assoc($exe);
                            echo "<script>
                            setTimeout(function () {
                                window.location.href = './terms?notcomp';
                             }, 30000);
                            </script>"; 
                    }
                ?>
                <!-- Start Section Footer -->
                <section id="lsc_footer" class="col-12">
                    <div class="row lsc_app_footer_row">
                        <div class="col-12 lsc_footer_tabs">
                            <ul>
                                <li onclick="location.href = 'index';">
                                    <span>
                                    <i class="fas fa-chart-line"></i>
                                    </span>
                                </li>
                                <li class="active" onclick="location.href = 'live';">
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
include("./includes/footer.php");
?>