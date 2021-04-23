<?php
include("./includes/getfiles.php");

?>

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