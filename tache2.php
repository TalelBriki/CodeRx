<?php
$db = mysqli_connect("localhost","root","",hb);
$comname=mysql_real_escape_string($POST['Company Name']);
$email=mysql_real_escape_string($POST['Email']);

$password1=mysql_real_escape_string($POST['Password']);
$password2=mysql_real_escape_string($POST['Verify Password']);

if ($password1==$password2){

	$password=md5($password1);
	$sql="insert into entreprise(nomE,email,password) values ('$password','$comname','$email')";
	mysql_query($db,$sql);
}
else {
	echo ("/////////////////////////");
}



?> 