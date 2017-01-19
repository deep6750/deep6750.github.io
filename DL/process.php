<?php
include('connection.php');

if(isset($_REQUEST['roll']))
{
	$roll = $_REQUEST['roll'];

	$date = $_REQUEST['date'];
  
	$teamC = "";

	foreach($_REQUEST['team'] as $team)
	{
		$teamC .= $team . "-";
	}

	$periodC = "";

	foreach($_REQUEST['period'] as $period)
	{
		$periodC .= $period . ",";
	}

	$checkdata=" SELECT roll FROM team WHERE roll='$roll' ";

	$query=mysqli_query($con,$checkdata);

	if(mysqli_num_rows($query)>0)
	{

		$query = "INSERT INTO dl(roll,date,team,period) VALUES ('$roll','$date','$team','$periodC')";
		$result = mysqli_query($con,$query);
		 if(($result)>0)
		 { 
			 header("Location:success.html");
		 }
		 else
		 {
			 header("Location:index.html?msg=error");
		 }
	} 
	 else
	 {
		
			echo '<script language="javascript">';
			echo 'alert("Access Denied \n Contact : Office Of Student Association ");';
			echo 'window.location.href="index.html";';
			echo '</script>';
	  
	 }
	 

}
?>

