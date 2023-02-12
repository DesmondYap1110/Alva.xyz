<?php 

  require_once('Cons/dbconn.php');

	if (!isset($_SESSION)) {
	  session_start();
	}

	$base_url = "https://alvaerp.winnefy.xyz";
	$base_name = "Alva";

	if(isset($_SESSION['useridadm'])){
		$userid = $_SESSION['useridadm'];

		$query_user = "SELECT * FROM `user` WHERE user_ID='$userid'";
		$user = mysqli_query($ALVADB, $query_user) or die(mysqli_error($ALVADB));
		$row_user = mysqli_fetch_assoc($user);
		$totalRows_user = mysqli_num_rows($user);

		if($totalRows_user > 0)
		{
			$status = $row_user['status'];
			$type = $row_user['type'];

			// $goto = $base_url."/dashboard";
			$goto = $base_url."/dashboard/service-package.php";
			header(sprintf("Location: %s",$goto));
			
		}else{
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
			
			$logoutGoTo = $base_url."?logout=true";
			if ($logoutGoTo) {
			   header("Location: $logoutGoTo");
			   exit;
			}
		}
	}

	

?>