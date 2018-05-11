<html>
<head>
<body style="background-color:powderblue;">
<style>
.center {
	text-align: center;
    margin: auto;
    width: 60%;
	height: 80%;
}
table, th, td {
	font-size:160%;
    border: 3px solid black;
	padding: 25px;
}

</style>
<div class="center">
<br>
<br><br><br><br><br><br><br><br><br>
<table border="1" style="width:100%" >
<tr>
   <th>name</th>
   <th>account</th>
   
   <th>aadhar</th>
   <th>amount</th>
   <th>email</th>
   <th>password</th>
   </tr>
   </div>
   
<?php
        
	$con = mysqli_connect("localhost",'root','');
	
	if(!$con)
	{
		echo 'Not Connected To Server';
	}
	
	if(!mysqli_select_db($con,'bank'))
	{
		echo 'Database Not Selected';
	}
	
	$name = $_POST['name'];

    $aad = $_POST['aadhar']; 
	
	
	$pass=$_POST['pass'];
	
	
	
	$sql = "SELECT * FROM user WHERE aadhar='$aad'";
	$result=$con->query($sql);
	if($result->num_rows>0){
		 
			while($row=$result->fetch_assoc()){
				      
					echo "<br><br><br><br><br><tr><td>".$row["name"]."</td><td>".$row["account"]."</td><td>".$row["aadhar"]."</td><td>".$row["amount"]."</td><td>".$row["email"]."</td><td>".$row["password"]."</td></tr>";
			}
			
	}
	else{
			echo "NO database";
	}
	$con->close();
?> 
</table>
<br>
<button onclick="window.location.href='index.html'" style="font-size:130%;"><p>Goto Home</p></button>

</body>
</head>
</html>
