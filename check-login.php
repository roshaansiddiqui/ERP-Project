<?php
include 'conn.php';


if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['role'])) {

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

	$username = test_input($_POST['username']);
	$password = test_input($_POST['password']);
	$role = test_input($_POST['role']);

	if (empty($username)) {
		header("Location: login3.php?error=User Name is Required");
	}else if (empty($password)) {
		header("Location: login3.php?error=Password is Required");
	}else {

		// Hashing the password
		// $password = md5($password);
        
        $sql = "SELECT * FROM login WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
        	// the user name must be unique
        	$row = mysqli_fetch_assoc($result);
        	if ($row['password'] === $password && $row['role'] == $role) {
        		//$_SESSION['name'] = $row['name'];
        		$_SESSION['password'] = $row['password'];
        		$_SESSION['role'] = $row['role'];
        		$_SESSION['username'] = $row['username'];
				
				if(strcmp($row['password'], $password) == 0){
		switch($username){
			case "roshaan":
				header("Location: navbar.php");
				break;
			case "amna":
				header("Location: payments.php");
				break;
			case "arsalan":
				header("Location: management.php");
				break;
			case "salesman":
				header("Location: salespersons.php");
				break;
		}
	}
				
			header("Location: navbaruser.php");

        	}else {
        		header("Location: login3.php?error=Incorect User name or password");
        	}
        }else {
        	header("Location: login3.php?error=Incorect User name or password");
        }

	}
	
}else {
	header("Location: user_data_print.php");
}
?>