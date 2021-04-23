<?php
include("./includes/getfiles.php");

?>



<span class="lsc_match_stat_desc">
<i class="fa fa-dot-circle-o"></i>
<span>
<?php
// echo $new_text->find('tr[class=active]','h3[class=playername]',0)->plaintext;
foreach($new_text->find($bat) as $names){
    foreach($names->find('tr[class=active]') as $name)
    {
        foreach($name->find('a') as $li)
        {
            echo $li;
            echo "<br>";
        }
    }
}
?>
</span>
</span>