<?php 

// checkUsername
function checkUsername($username){
  global $conn;

  $sql = "Select * From users Where username = '{$username}'";

  $result = mysqli_query($conn, $sql);

  if(mysqli_num_rows($result) > 0)
    return true;
  else 
    return false;
}


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


// checkLoginJobseeker
function checkLoginJobseeker($usernameJK, $password){
  
  global $conn;

  $sql = "SELECT * FROM users WHERE username = '{$usernameJK}' AND password = '{$password}' AND type_user = 3";
  
  
  // echo $sql;die;
  
  $result = mysqli_query($conn, $sql);
  
  if (mysqli_num_rows($result) > 0)
    return true;
  else
    return false;
}


// getInforJobseekerLogin
function getInforJobseekerLogin($usernameJK){
  global $conn;
  $employerAcc = array();

  $sql = "SELECT * FROM users WHERE username = '{$usernameJK}'";

  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
          $employerAcc[] = $row;
      }
  }
  return $employerAcc;
}

 ?>