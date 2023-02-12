<?php
/*------------------------------------------------------------------------------

                             This is Login Function (login.function.php)

------------------------------------------------------------------------------*/




/* --------------------------------------------------
                    Login Script
-------------------------------------------------- */

function login($dbC,$base_url)
{
    
    if(isset($_POST["submit"]) && ($_POST["submit"]=="login_form"))
    {
        $username = mysqli_real_escape_string($dbC, $_POST['uname']);
        $pw = mysqli_real_escape_string($dbC, $_POST['pw']);
        $staylog = mysqli_real_escape_string($dbC, $_POST['stay_login'])?1:0;

        //Database of User Table --  configuration here
        $sql= "SELECT * FROM `user` WHERE username='$username'";
        
        $query = mysqli_query($dbC,$sql) or die(mysqli_error($dbC));
        $row = mysqli_fetch_assoc($query);
        $total=mysqli_num_rows($query);

        if($total>0)
        {
            checkPass
            (
                $pw,
            $staylog,
                $row,
                    1, //Type of User OR PRIVILEGED  --  configuration here
            $base_url,
            $dbC
            );

        }
        else
        {
            $fail = "index.php?login=fail";
            header(sprintf("Location: %s",$fail));
        }
    }

}

//Check Password
function checkPass($pw,$staylog,$row,$type,$base_url,$dbco)
{
    if(password_verify($pw,$row['password']))
    {
        if($row['status']==1)
        {
            if($row['type']==$type)
            {
                if (PHP_VERSION >= 5.1) 
                {
                    session_regenerate_id(true);
                } 
                else 
                {
                    session_regenerate_id();
                }

                $session_id = session_id();
                $latest_time = date("Y-m-d H:i:s");
                $user_IP = $_SERVER['REMOTE_ADDR'];
                $access_type = 1;
                $userid = $row['user_ID'];

                $_SESSION['useridadm'] = NULL;
                unset($_SESSION['useridadm']);

                $_SESSION['useridadm'] = $row['user_ID'];

                if($staylog==1)
                {
                    // Set the cookie for 1 year
                    setcookie('staylogadm', $row['user_ID'], time() + (86400 * 365));

                }
               
                 // Clear lockout history
                 $updateSQL = 
                 "
                 UPDATE `user` 
                 SET session_ID='$session_id', 
                 last_activity='$latest_time' 
                 WHERE user_ID='$userid'
                 ";
                 $Result1 = mysqli_query($dbco, $updateSQL) or die(mysqli_error($dbco));

                 $insertSQL = 
                 "
                 INSERT INTO user_logs 
                 (user_IP, access_date, access_type, user_ID) 
                 VALUES
                 ('$user_IP', '$latest_time', '$access_type', '$userid')
                 ";

                 $Result2 = mysqli_query($dbco, $insertSQL) or die(mysqli_error($dbco));

                 if (isset($_SESSION['PrevUrl']) && true) 
                 {
                     $GLOBALS ['MM_redirectLoginSuccess'] = $_SESSION['PrevUrl'];	
                 }

                //  $success = $base_url."/dashboard";
                 $success = $base_url."/dashboard/service-package.php";
                 header(sprintf("Location: %s",$success)); 

            }
            else
            {
                $fail = "index.php?login=fail";
                header(sprintf("Location: %s",$fail));
            }
        }
        else
        {
            $fail = "index.php?login=block";
            header(sprintf("Location: %s",$fail));
        }
        

    }
    else
    {
        $fail = "index.php?login=fail";
        header(sprintf("Location: %s",$fail));
    }

}


function staylogin($dbconn,$base_url)
{
    if (isset($_COOKIE['staylogadm']))
    {
        if (isset($_GET['logout'])) 
        {
            setcookie("staylogadm", "", time()-3600);
        } 
        else 
        {
            $staylogadm = $_COOKIE['staylogadm'];

            // Get user account if username match
            mysqli_select_db($dbconn, $database);
            $query_user = "SELECT * FROM `user` WHERE user_ID='$staylogadm'";
            $user = mysqli_query($dbconn, $query_user) or die(mysqli_error($dbconn));
            $row_user = mysqli_fetch_assoc($user);
            $totalRows_user = mysqli_num_rows($user);

            if($totalRows_user > 0)
            {
                $userid = $row_user['user_ID'];
                $status = $row_user['status'];
                $type = $row_user['type'];

                if($status == 1)
                {
                    if($type == 1)
                    {
                        if (PHP_VERSION >= 5.1) 
                        {
                            session_regenerate_id(true);} else {session_regenerate_id();
                        }
    
                        $session_id = session_id();
                        $latest_time = date("Y-m-d H:i:s");
                        $user_IP = $_SERVER['REMOTE_ADDR'];
                        $access_type = 1;
    
                        // Clear and reset session
                        $_SESSION['useridadm'] = NULL;
                        unset($_SESSION['useridadm']);
    
                        // Declare session variables and assign them
                        $_SESSION['useridadm'] = $userid;

                        // Clear lockout history
                        $updateSQL = "UPDATE `user` SET session_ID='$session_id', last_activity='$latest_time' WHERE user_ID='$userid'";
                        $Result1 = mysqli_query($dbconn, $updateSQL) or die(mysqli_error($dbconn));
    
                        $insertSQL = "INSERT INTO user_logs (user_IP, access_date, access_type, user_ID) VALUES ('$user_IP', '$latest_time', '$access_type', '$userid')";
                        $Result2 = mysqli_query($dbconn, $insertSQL) or die(mysqli_error($dbconn));
    
                        if (isset($_SESSION['PrevUrl']) && true) 
                        {
                            $GLOBALS['MM_redirectLoginSuccess'] = $_SESSION['PrevUrl'];	
                        }
    
                        // $success = $base_url."/dashboard";
                        $success = $base_url."/dashboard/service-package.php";
                        header(sprintf("Location: %s",$success));
                    }
                    else
                    {
                        $fail = "index.php?login=fail";
                        header(sprintf("Location: %s",$fail));
                    }
                }
                else
                {
                    $fail = "index.php?login=block";
                    header(sprintf("Location: %s",$fail));
                }
            }
            else
            {
                $fail = "index.php?login=fail";
                header(sprintf("Location: %s",$fail));
            }

        }

    }

}


?>