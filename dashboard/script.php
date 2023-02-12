<?php 

	require_once('../Cons/dbconn.php');

	if (!isset($_SESSION)) 
	{
		session_start();
	}

	$base_url = "https://alvaerp.winnefy.xyz";
	$base_url_adm = "https://alvaerp.winnefy.xyz";
	$base_url_dashboard = "https://alvaerp.winnefy.xyz/dashboard";
	$base_name = "Alva";

	if(isset($_SESSION['useridadm']))
	{
		$userid = $_SESSION['useridadm'];

		$query_user = "SELECT * FROM `user` WHERE user_ID='$userid'";
		$user = mysqli_query($ALVADB, $query_user) or die(mysqli_error($ALVADB));
		$row_user = mysqli_fetch_assoc($user);
		$totalrow_user = mysqli_num_rows($user);
		$type = $row_user['type'];
		$pww = $row_user['password'];
		$pkey = $row_user['product_key'];

		if(!$totalrow_user)
		{
		    $force = $base_url;
		    header(sprintf("Location: %s",$force));
		}
		$logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";

		if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true")) 
		{
			//to fully log out a visitor we need to clear the session varialbles
			$_SESSION['MM_Username_Adm'] = NULL;
			$_SESSION['MM_UserGroup_Adm'] = NULL;
			$_SESSION['PrevUrl'] = NULL;
			$_SESSION['MM_NewSession_Adm'] = NULL;
			$_SESSION['FirstLoginSession'] = NULL;
			$_SESSION['useridadm'] = NULL;
			unset($_SESSION['MM_Username_Adm']);
			unset($_SESSION['MM_UserGroup_Adm']);
			unset($_SESSION['PrevUrl']);
			unset($_SESSION['MM_NewSession_Adm']);
			unset($_SESSION['FirstLoginSession']);
			unset($_SESSION['useridadm']);
	  
			setcookie("staylogadm", "", time()-3600);
			
			$updateSQL = "UPDATE `user` SET session_ID=NULL, last_activity=NULL WHERE user_ID='$userid'";

			$Result1 = mysqli_query($ALVADB, $updateSQL) or die(mysqli_error($ALVADB));
			
			// Insert User Logs
			$user_IP = $_SERVER['REMOTE_ADDR'];
			$latest_time = date("Y-m-d H:i:s");
			$access_type = 0;
			
			$insertSQL = "INSERT INTO user_logs (user_IP, access_date, access_type, user_ID) VALUES ('$user_IP', '$latest_time', '$access_type', '$userid')";

			$Result2 = mysqli_query($ALVADB, $insertSQL) or die(mysqli_error($ALVADB));
			
			$logoutGoTo = "$base_url/index.php?logout=true";
			if ($logoutGoTo) 
			{
			    header("Location: $logoutGoTo");
			    exit;
			}
		 }

	}

	if(!isset($_SESSION['useridadm']))
	{
		$force = $base_url;
		header(sprintf("Location: %s",$force));
	}

?>