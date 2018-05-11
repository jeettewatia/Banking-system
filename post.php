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
		 
			while($row=$result->fetch_assoc()){
				      
					$y=$row["amount"];
			}
			
	}
	$amount=$amount;
	$sql = "UPDATE user SET amount ='$amount' WHERE aadhar ='$aad'";
	
	if(!mysqli_query($con,$sql))
	{
		echo 'not updated';
	}
	else
	{
		echo 'update';
	}
	header("refresh:25; url=index.html");
?> 
