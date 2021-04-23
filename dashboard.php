<?php require_once('./Include/Sessions.php') ?>
<?php require_once('./Include/functions.php') ?>
<?php ConfirmLogin();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Dashboard</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	<?php
	$c=0;
		if(isset($_POST['update'])){
			$hlink = $_POST['hlink'];
			$slink = $_POST['slink'];
			$blink = $_POST['blink'];
			$bclass = $_POST['bclass'];
			$limg = $_POST['limg'];
			$rimg = $_POST['rimg'];
			$sql = "UPDATE matchinfo SET info ='$hlink', score='$slink' ,bowler='$blink',batclass='$bclass',limg='$limg',rimg='$rimg' WHERE id = '0'";
			$exec = Query($sql);
			$c=1;
		}
		$query = "SELECT * FROM matchinfo where id = 0;";
		$exec = Query($query) or die(mysqli_error($con));
		if( $exec ){
			$post = mysqli_fetch_assoc($exec);
			$hinfo = $post['info'];
			$score = $post['score'];
			$bowler = $post['bowler'];
			$batclass = $post['batclass'];
		}
	?>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Get IPL</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="dashboard">
					<span class="glyphicon glyphicon-th"></span>
					 &nbsp;Dashboard</a>
			</li>
      <li><a href="./query">
					<span class="glyphicon glyphicon-list"></span>
					&nbsp;Queries</a>
			</li>
      <li><a href="./Include/Logout">
					<span class="glyphicon glyphicon-log-out"></span>
					&nbsp;Logout</a>
			</li>
    </ul>
  </div>
</nav>
	<div class="container-fluid">
		<div class="main" id="dashboard">
			<div class="col-xs-10">
				<div>
					<h1>Dashboard</h1>
					<div class="table-responsive">
						<center>
							<form action="dashboard.php" method="POST" enctype="multipart/form-data">
								<h5>Header info Link: EX= <span style="font-size:10px;color:red">https://www.cricbuzz.com/cricket-match/live-scores</span></h5>
								<input type="text" class="form-control input-sm" required value="<?php echo $hinfo;?>" name="hlink">
								<h5>Score Link: (Full scorecard) EX= <span style="font-size:10px;color:red">https://www.news18.com/cricketnext/cricket-live-scorecard/delhi-capitals-vs-kolkata-knight-riders-live-score-full-ddkr10032020197703.html</span></h5>
								<input type="text" class="form-control input-sm" required  name="slink" value="<?php echo $score;?>">
								<h5>Bowler Link: EX= <span style="font-size:10px;color:red">https://www.news18.com/cricketnext/cricket-live-scorecard/delhi-capitals-vs-kolkata-knight-riders-live-score-ddkr10032020197703.html</span></h5>
								<input type="text" class="form-control input-sm" required value="<?php echo $bowler?>" name="blink">
								<h5>Bat man Class(get form Score Link): EX= <span style="font-size:10px;color:red">match-table battingInfo_delhi_capitals_firstInnings</span></h5>
								<input type="text" class="form-control input-sm" required value="<?php echo $batclass?>" name="bclass">
								<br>
								<h5>Left img: (Check score board for name)</h5>
								<select name="limg">
									<option value="bangalore.png">bangalore</option>
									<option value="chennai.png">chennai</option>
									<option value="delhi.png">delhi</option>
									<option value="hyderabad.png">hyderabad</option>
									<option value="kolkata.png">kolkata</option>
									<option value="mumbai.png">mumbai</option>
									<option value="punjab.jpg">punjab</option>
									<option value="rajasthan.png">rajasthan</option>
								</select>
								<h5>Right img: (Check score board for name)</h5>
								<select name="rimg">
									<option value="bangalore.png">bangalore</option>
									<option value="chennai.png">chennai</option>
									<option value="delhi.png">delhi</option>
									<option value="hyderabad.png">hyderabad</option>
									<option value="kolkata.png">kolkata</option>
									<option value="mumbai.png">mumbai</option>
									<option value="punjab.jpg">punjab</option>
									<option value="rajasthan.png">rajasthan</option>
								</select>
								<br>
								<hr>
								<button class="btn" style="margin-top: 15px;width:150px;" name="update">Update</button></center>
						</form>
						</center>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<?php
	if($c == 1){
		echo "<script>Swal.fire({
			icon: 'success',
			title: 'UPDATED',
			text: 'Content has been updated.',
		});</script>";
	}
?>
</body>
</html>