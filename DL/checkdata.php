<?php

include('connection.php');
if(isset($_REQUEST['roll_no']))
{
 $roll=$_REQUEST['roll_no'];

 $checkdata=" SELECT roll FROM team WHERE roll='$roll' ";

 $query=mysqli_query($con,$checkdata);

 if(mysqli_num_rows($query)>0)
 {
  echo '<span style="color:green;">&#x2714;</span>';
 }
 else
 {
     
	 echo '<span style="color:red;">&#10008;</span>';
  
 }
 exit();
}

?>