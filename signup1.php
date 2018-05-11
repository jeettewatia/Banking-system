<?php
        
	$con = mysqli_connect('localhost','root','');
	
	if(!$con)
	{
		echo 'Not Connected To Server';
	}
	
	if(!mysqli_select_db($con,'bank'))
	{
		echo 'Database Not Selected';
	}
	
	$name = $_POST['name'];
	$account = $_POST['account'];
    $aad = $_POST['aadhar']; 
	$amount=$_POST['amount'];
	$eml=$_POST['email'];
	$pass=$_POST['password'];
	$sql = "SELECT * FROM user WHERE aadhar='$aad'";
	$result=$con->query($sql);
	if($result->num_rows>0){
		 
			echo "user already exist";
			
	}
	else{
		$sql = "INSERT INTO `user`(`name`, `account`, `aadhar`, `amount`, `email`, `password`) VALUES ('$name','$account','$aad','$amount','$eml','$pass')";
		
		if(!mysqli_query($con,$sql))
		{
			echo 'not inserted';
		}
		else
		{
			echo 'inserted';
		}
	}
	header("refresh:2; url=index.html");
?> 
