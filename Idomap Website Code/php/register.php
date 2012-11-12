<?php

	$dbh = new PDO('mysql:host=localhost;dbname=testPHP', "user", "grayCamry");
	
	if (isset($_POST['userName'])){
		$usrname = $_POST['userName'];
		$first = $_POST['firstName'];
		$last = $_POST['lastName'];
		$email = $_POST['email'];
		$pass = hash(md5, $_POST['password']);
		$confirm = hash(md5, $_POST['confirm']);
		$birthMonth = $_POST['birthMonth'];
		$sex = $_POST['sex'];
		$privacy = $_POST['privacy'];
				
		//$sth = $dbh->prepare("INSERT INTO members VALUES (?, ?, ?, ?)");
		//$sth->execute(array("$usrname", "$first", "$last", "$pass"));
		echo "Username: $usrname <br> Name: $first $last <br> email: $email <br> Password hash: $pass <br> Confirm: $confirm <br> Birthday: $birthMonth <br> Sex: $sex <br> Privacy: $privacy ";

	}

	//header('Location: ../index.html');
?>