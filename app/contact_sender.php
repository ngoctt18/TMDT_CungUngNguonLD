<?php
	include_once('../config.php');
	include_once('func/contact.php');

	if(!empty($_POST['name']) || !empty($_POST['email']) || !empty($_POST['phone']) ||!empty($_POST['message'])){

		$name = htmlspecialchars($_POST['name']);
		$email = htmlspecialchars($_POST['email']);
		$phone = htmlspecialchars($_POST['phone']);
		$message = htmlspecialchars($_POST['message']);


		if(contact_insert($name, $email, $phone, $message)){
			$result = true;
		} else {
			$result = false;
		}
		echo $result;
	}


?>