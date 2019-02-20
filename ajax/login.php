<?php include '../connection/db.php'; ?>
<?php 

function login(){
	GLOBAL $db;
	if($_GET['login_form'] && $_GET['login_form'] == 'true'){
		echo $email = $_POST['login_email'];
		echo $password = $_POST['login_password'];
	}
}

login();

 ?>