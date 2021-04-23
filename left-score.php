<?php
include("./includes/getfiles.php");

?>
<?php
if(isset($_GET['one'])){
  $ncount = 1;
  $sql = "UPDATE users SET count = '$ncount' WHERE username = '$_SESSION[user_name]'";
  $exe = Query($sql);}
?>
<ul>
<li>
<?php echo $new_text->find('h3[class=teamName]',0)->plaintext; ?>
</li>
<li>
<?php echo $new_text->find('h4[class=teamRun scoreInnFirstL]',0)->plaintext; ?>
</li>
<li>
<?php echo $new_text->find('p[class=teamRunRate runRateInnFirstL]',0)->plaintext; ?>
</li>
</ul>