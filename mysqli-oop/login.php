<?php 
session_start();

$errorMessage = '';
if (isset ($_POST['txtUserId']) && isset($_POST['txtPassword'])){
	include 'library/config.php';
	include 'library/opendb.php';

	$userId = $_POST['txtUserId'];
	$password = $_POST['txtPassword'];
	
	$sql = "SELECT user_id FROM user WHERE user_id = '$userId' AND user_password = PASSWORD ('$password')";
	$result = mysql_query($sql) or die('Query filed.' .mysql_error());

	if (mysql_num_rows($result)==1){
		$_SESSION['basic_is_logged_in'] = true;
		header('Location: index.php');
		exit;
	}else{
		$errorMessage = 'Sorry, wrong username / password';
	}
	include'library/closedb.php';
}
?>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html"; charset="iso-8859-1">
	<title>Login Form</title>
	<style type="text/css">
		.style5{
			color: #0000FF;
			font-weight: bold;
		}
	</style>
</head>
<body>
<?php
if ($errorMessage !='') {
?>
<p><div align="center"><span class="style5"><?php echo $errorMessage; ?> </span></p>	
<?php
}
?>
</div>
</div>
<form action="" method="post" name="frmLogin" id="frmLogin">
	<table width="400" border="1" align="center">
		<tr>
			<th width="160" scope="col"><div align="left">User Id</div></th>
			<th width="224" scope="col"><div align="left"><input name="txtUserId" type="text" id="txtUserId"></div></th>
		</tr>
		<tr>
			<td><div align="left">Password</div></td>
			<td><input name="txtPassword" type="password" id="txtPassword"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" name="btnLogin" id="btnLogin" value="Login"></td>
		</tr>
	</table>
</form>
</body>
</html>