<?php
require_once('script.php');


if (isset($_GET['mid'])) 
{
	$mid = mysqli_real_escape_string($ALVADB, $_GET['mid']);
  $status = mysqli_real_escape_string($ALVADB, $_GET['status']);
  $togo= $_GET['togo'];
	
	if($status == 0 || $status == 1){
		$updateSQL = "UPDATE `member` SET status='$status' WHERE ID='$mid'";
		$Result1 = mysqli_query($ALVADB, $updateSQL) or die(mysqli_error($ALVADB));
		
		$updateGoTo = "$togo.php";
		header(sprintf("Location: %s", $updateGoTo));
	} else {
		$insertGoTo = "$togo.php?process=invalid";
		header(sprintf("Location: %s", $insertGoTo));
	}	
}

if (isset($_GET['oid'])) 
{
	$oid = mysqli_real_escape_string($ALVADB, $_GET['oid']);
  $status = mysqli_real_escape_string($ALVADB, $_GET['status']);
  $togo= $_GET['togo'];
	
	if($status == 0 || $status == 1){
		$updateSQL = "UPDATE `outlet_module` SET status='$status' WHERE ID='$oid'";
		$Result1 = mysqli_query($ALVADB, $updateSQL) or die(mysqli_error($ALVADB));
		
		$updateGoTo = "$togo.php";
		header(sprintf("Location: %s", $updateGoTo));
	} else {
		$insertGoTo = "$togo.php?process=invalid";
		header(sprintf("Location: %s", $insertGoTo));
	}	
}
?>