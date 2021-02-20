<?php 

include('config.php');
$id=$_GET['id'];
$type=$_GET['type'];

if($type=='bookcar')
{
	$qu="delete from findcar where id='$id'";
	$result=mysqli_query($conn,$qu);
	if($result)
	{
		header("location:findcar-details.php");
	}
	else
		{
			header("location:findcar-details.php");
		}
}

else if($type=='enquiry')
	{
		$qu="delete from enquiry where id='$id'";
		$result=mysqli_query($conn,$qu);
		if($result)
		{
			header("location:enquiry-details.php");
		}
		else
			{
				header("location:enquiry-details.php");
			}
	}

?>