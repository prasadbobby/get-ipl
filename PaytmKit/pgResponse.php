<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");
?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<?php
// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");
$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application�s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.


if($isValidChecksum == "TRUE") {
	if ($_POST["STATUS"] == "TXN_SUCCESS") {
		$TXNAMOUNT=$_POST['TXNAMOUNT'];
		$ORDERID=$_POST['ORDERID'];
		$STATUS= $_POST['STATUS'];
		$TXNID = $_POST['TXNID'];
		$TXNDATE = $_POST['TXNDATE'];
		$NAME = $_GET['uid'];

		$server = 'localhost';
		$username = 'root';
		$password = '';
		$db_name = 'ipl';
		$con = mysqli_connect($server, $username, $password, $db_name) or die(mysqli_connec_errno());
		$sql = "INSERT INTO payments (TXNDATE,USER_NAME,TXNID,TXNAMOUNT,ORDERID,STATUS) VALUES('$TXNDATE','$NAME','$TXNID','$TXNAMOUNT','$ORDERID','$STATUS')";
		if(mysqli_query($con,$sql)){
		}
		echo "<h3 style='color:green;'>Transaction Successful. Redirecting you to Live TV.</h3>";
		echo "<script>Swal.fire(
			'&#128525; HURRAY &#128525;',
			'Thank you for your donation. You were Redirecting to Live Tv in 15sec.',
			'success'
		);</script>";  
		echo "<script>
			setTimeout(function () {
					window.location.href = '../live.php';
				}, 5000);
			</script>";
		//Process your transaction here as success transaction.
		//Verify amount & order id received from Payment gateway with your application's order id and amount.
	}
	else {
		echo "<h3 style='color:red;'>Please try again. Redirecting you to initial step.</h3>";
		echo "<script>Swal.fire(
			'Oops!',
			'Transaction Failed',
			'warning'
		);</script>"; 
		echo "<script>
			setTimeout(function () {
					window.location.href = '../terms.php';
				}, 5000);
			</script>";
	}
}
else {
	echo "<h3 style='color:red;'>Please try again. Redirecting you to initial step.</h3>";
	echo "<script>Swal.fire(
		'Oops!',
		'Transaction is suspicious',
		'warning'
	);</script>"; 
	echo "<script>
		setTimeout(function () {
				window.location.href = '../terms.php';
			}, 5000);
		</script>";
	//Process transaction as suspicious.
}

?>