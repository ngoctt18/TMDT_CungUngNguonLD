<?php
	// Khai báo khởi tạo
	define('HOST', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');
	define('DB_NAME', 'tmdt'); 

	// Hàm kết nối
	$conn = mysqli_connect(HOST, DB_USERNAME, DB_PASSWORD, DB_NAME) or die ("Could not connect to mysql");
	mysqli_set_charset($conn, "utf8");
	if (!$conn) {
		echo 'Connect error: ' . mysql_connect_error();
	}



