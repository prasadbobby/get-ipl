<?php
include("./includes/getfiles.php");

?>


<span class="lsc_match_stat_desc">
    <i class="fa fa-square-o"></i>
    <span>
    <?php
    //   echo $live_text->find('a[class=cb-text-link]',1)->plaintext;
    
    foreach($bowler->find('table[class=cs-table table2]') as $ball)
    {
        foreach($ball->find('h3[class=playername]') as $p)
        {
            echo $p;
        }
    }
    ?>
    </span>
</span>