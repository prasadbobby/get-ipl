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
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Get IPL</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="./dashboard">
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
					<h1>Queries</h1>
					<div class="table-responsive">
							<?php
							$sql = "SELECT * FROM query ORDER BY id DESC";
							$exec = Query($sql);
							$prodNo = 0;
							if(mysqli_num_rows($exec) < 1	) {
								?>
									<p class="lead">You Have 0 Queries At The Moment</p>
								<?php
							}else{ ?>
							<table class="table table-hover">
							<tr>
								<th>Sno.</th>
								<th>User Name</th>
								<th>Email</th>
								<th>Query</th>
								<th>Action</th>
							</tr>
							<?php
								while (($post = mysqli_fetch_assoc($exec)) && ($prodNo<20)) {
									$qid = $post['id'];
									$name = $post['name'];
									$email = $post['email'];
									$query = $post['comment'];
									?>
									<tr>
									<td><?php echo $qid; ?></td>
									<td><?php echo $name; ?></td>
									<td><?php echo $email; ?></td>
									<td><?php echo $query; ?></td>
									<td><?php echo "<a class='btn btn-danger' href='./Include/signup.php?qid=$qid'>Delete</a>"; ?></td>
									</tr>
									<?php
									$prodNo++;
								}
							}
							?>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<?php
	if(isset($_GET['done'])){
		echo "<script>Swal.fire({
			icon: 'success',
			title: 'Deleted',
			text: 'Query has been deleted.',
		});</script>";
	}
?>
</body>
</html>