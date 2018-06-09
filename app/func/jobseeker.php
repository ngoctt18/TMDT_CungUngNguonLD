<?php 
// employerRegister
function jobseekerRegister($username, $phone_num, $representative_name, $company_name, $email, $address, $password) {

	global $conn;
	$created_at = date("Y-m-d H:i:s");

	$sql = "INSERT INTO `users` (`namecompany`, `representative`, `email`, `username`, `password`, `phone`, `address`, `type_user`, `created_at`, `status`) VALUES ('{$company_name}', '{$representative_name}', '{$email}', '{$username}', '{$password}', '{$phone_num}', '{$address}', 3, '{$created_at}', 1 ) ";

	// echo $sql;	die;

	if(mysqli_query($conn, $sql)){
        return true;
    } else {
    	return false;
        echo mysqli_error($conn);
    }
}




 ?>