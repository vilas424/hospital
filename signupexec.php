<?php
	//Start the session
	session_start();
        //Include database connection details
	require_once('connect_db.php');

	//Array to store validation errors
	$errmsg_arr = array();

	//Validation error flag
	$errflag = false;

	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}


	//Sanitize the POST values
	$firstname = clean($_POST['firstname']);
	$lastname =clean($_POST['lastname']);
        $age =clean($_POST['age']);
        $gender=clean($_POST['gender']);
        $address=clean($_POST['address']);
        $username= clean($_POST['username']);
        $password = clean($_POST['password']);
        $cpassword= clean($_POST['cpassword']);
        
        
	//Input Validations
	if($firstname == '') {
		$errmsg_arr[] = 'firstname is missing';
		$errflag = true;
	}
	if($lastname == '') {
		$errmsg_arr[] = 'lastname is missing';
		$errflag = true;
	}
        if($age == '') {
		$errmsg_arr[] = 'age is missing';
		$errflag = true;
	}
        if($gender == '') {
		$errmsg_arr[] = 'department name is missing';
		$errflag = true;
	}
        if($address == '') {
		$errmsg_arr[] = 'email is missing';
		$errflag = true;
	}
        if($username == '') {
		$errmsg_arr[] = 'contact number is missing';
		$errflag = true;
	}
        
        if ($password==null || $password=="")
        {
                $errmsg_arr[] = 'Password must be confirmed';
		$errflag = true;
        }
        if ($cpassword!=$password)
        { 
        	$errmsg_arr[] = 'Passwords are not matching';
		$errflag = true;
        }
        
      
	

	//Create INSERT query
	$qry = "INSERT INTO register(firstname,lastname,age,gender,address,username,password,cpassword) VALUES('$firstname','$lastname','$age','$gender','$address','$username','$password','$cpassword')";
	$result = @mysql_query($qry);
        


	//Check whether the query was successful or not
	if($result) {
		header("location: signsuccess.php");
		exit();
	}else {
		die("Query failed");
	}
?>