<?php require_once('./Include/Sessions.php') ?>
<?php require_once('./Include/functions.php') ?>
<?php
$query = "SELECT * FROM matchinfo where id = 0;";
$exec = Query($query) or die(mysqli_error($con));
if( $exec ){
	$post = mysqli_fetch_assoc($exec);
	$hinfo = $post['info'];
	$score = $post['score'];
  $bowler = $post['bowler'];
  $batclass = $post['batclass'];
  $bat = "table[class='$batclass']";
  $limg= $post['limg'];
  $rimg = $post['rimg'];  
}
include("./includes/simple_html_dom.php");
$html=file_get_html($hinfo);
// $live_text=file_get_html("https://www.cricbuzz.com/live-cricket-scores/30390/15th-match-indian-premier-league-2020");
$new_text=file_get_html($score);
$bowler=file_get_html($bowler);

?>