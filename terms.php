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
                
            <!-- Start Section Body -->
             <section id="lsc_body" class="col-12">
                 <h3 class="text-center">Terms and Conditions</h3>
                    <div class="row lsc_match_stats_row">
                        <div class="col-3 justify-content-center align-self-center">
                            <span class="lsc_match_stat_num"><i class="far fa-hand-point-right"></i></span>
                        </div>
                        <div class="col-6 justify-content-center align-self-center">
                            <span class="lsc_match_stat_desc">
                                <!-- <i class="fa fa-dot-circle-o"></i> -->
                                <span>
                                <form method="post" action="./PaytmKit/pgRedirect.php">
                                    <input hidden id="ORDER_ID" tabindex="1" maxlength="20" size="20" name="ORDER_ID" autocomplete="off" value="<?php echo  "ORDS" . rand(10000,99999999)?>">
                                    <input hidden id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="<?php echo $_SESSION['user_name']?>">
                                    <input hidden id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail">
                                    <input hidden id="CHANNEL_ID" tabindex="4" maxlength="12" size="12" name="CHANNEL_ID" autocomplete="off" value="WAP">
                                    <input hidden title="TXN_AMOUNT" tabindex="10" type="text" name="TXN_AMOUNT" value="10">
                                    <input class="btn btn-info" value="Donate Rs. 10" type="submit"	onclick=""></td>
                                </form>                       
                                </span>
                            </span>
                        </div>
                       
                    </div>
                    <div class="row lsc_match_stats_row">
                        <div class="col-3 justify-content-center align-self-center">
                        <span class="lsc_match_stat_num"><i class="far fa-hand-point-right"></i></span>
                        </div>
                        <div class="col-6 justify-content-center align-self-center">
                            <span class="lsc_match_stat_desc">
                                <!-- <i class="fa fa-square-o"></i> -->
                                <span>
                                    You can watch LIVE TV only after donation. It's one time donation only. No need to donate again. 
                                </span>
                            </span>
                        </div>
                      
                    </div>
                    <div class="row lsc_match_stats_row">
                        <div class="col-3 justify-content-center align-self-center">
                        <span class="lsc_match_stat_num"><i class="far fa-hand-point-right"></i></span>
                        </div>
                        <div class="col-6 justify-content-center align-self-center">
                            <span class="lsc_match_stat_desc">
                                <!-- <i class="fa fa-hand-paper-o"></i> -->
                                <span>This Website and App is for Education purpose only.</span>
                            </span>
                        </div>
                       </div>
                    <div class="row lsc_match_stats_row">
                        <div class="col-3 justify-content-center align-self-center">
                        <span class="lsc_match_stat_num"><i class="far fa-hand-point-right"></i></span>
                        </div>
                        <div class="col-6 justify-content-center align-self-center">
                            <span class="lsc_match_stat_desc">
                                <!-- <i class="fa fa-users"></i> -->
                                <span>You are donating Rs 10 to test the Website and App.</span>
                            </span>
                        </div>
                        <!-- <div class="col-3 justify-content-center align-self-center">
                            <span class="lsc_match_stat_num">*</span>
                        </div> -->
                    </div>
                    <div class="row lsc_match_stats_row">
                        <div class="col-3 justify-content-center align-self-center">
                        <span class="lsc_match_stat_num"><i class="far fa-hand-point-right"></i></span>
                        </div>
                        <div class="col-6 justify-content-center align-self-center">
                            <span class="lsc_match_stat_desc">
                                <!-- <i class="fa fa-hand-paper-o"></i> -->
                                <span>We don't own the live stream.</span>
                            </span>
                        </div>
                       </div>
                       <div class="row lsc_match_stats_row">
                        <div class="col-3 justify-content-center align-self-center">
                        <span class="lsc_match_stat_num"><i class="far fa-hand-point-right"></i></span>
                        </div>
                        <div class="col-6 justify-content-center align-self-center">
                            <span class="lsc_match_stat_desc">
                                <!-- <i class="fa fa-hand-paper-o"></i> -->
                                <span>If their is any kind of issues.Please fill the form at login page. We will contact you as soon as possible.</span>
                            </span>
                        </div>
                       </div>
                </section>
                <!-- End Section Body -->


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
                                <li onclick="location.href = 'live';">
                                    <span>
                                    <i class="fab fa-chromecast" style="color:red;"></i>
                                    </span>
                                </li>
                                <li  class="active" onclick="location.href = 'terms';">
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
if(isset($_GET['notcomp'])){
    echo "<script>Swal.fire(
        'Oops!',
        'You have to donate Rs 10 to watch LIVE TV',
        'error'
    );</script>"; 
}
include("./includes/footer.php");
?>