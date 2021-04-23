<?php
include("./includes/getfiles.php");

?>



<ul>
<li>
<?php echo $new_text->find('h3[class=teamName]',1)->plaintext; ?>
</li>
<li>
<?php echo $new_text->find('h4[class=teamRun scoreInnFirstR]',0)->plaintext; ?>
</li>
<li>
<?php echo $new_text->find('p[class=teamRunRate runRateInnFirstR]',0)->plaintext; ?>
</li>
</ul>