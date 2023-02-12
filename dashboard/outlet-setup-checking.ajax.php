<?php
require_once('script.php');
require_once('../php/class/member.class.php');

//_____________________________________________________________________
//Check Existing Email and ID 
//All Outlet Setup Add and Insert File are using this function
//______________________________________________________________________
//

if(isset($_POST['info']))
{
    $info = mysqli_real_escape_string($ALVADB, $_POST['info']);

    // $typeOfInfo : 0 => member_ID (Add)
    // $typeOfInfo : 1 => Email (Add)
    // $typeOfInfo : 2 => Outlet Module ID (Add)
    // $typeOfInfo : 3 => member_ID (Edit)
    // $typeOfInfo : 4 => Email (Edit)
    // $typeOfInfo : 5 => Outlet Module ID (Edit)
    
    $typeOfInfo = mysqli_real_escape_string($ALVADB, $_POST['type']); 
   


    $isExist = new member("member",$ALVADB);
    $LocationisExist = new member("outlet_module",$ALVADB);

    if($typeOfInfo==0)
    {
      //Check Exist ID when adding
      $check = $isExist -> verifydata("member_ID" , $info);

    }
    elseif($typeOfInfo==1)
    {
      //Check Exist Email when adding
      //How to Include:
      //eg: onchange="checkExist(1)" 
      $check = $isExist -> verifydata("email" , $info);
    }
    elseif($typeOfInfo==2)
    {
      //Check Exist Outlet Module when adding
      //How to Include:
      //eg: onchange="checkExist(2)" 
      $check = $LocationisExist -> verifydata("outlet_ID" , $info);
    }
    elseif($typeOfInfo==3)
    {
      //Edit Version ID Verify
      //How to Include:
      //eg: onchange="checkExist2(3,'member_ID')" The member_ID cover with php tag

      $member_ID = mysqli_real_escape_string($ALVADB, $_POST['ID']); 

      if($info==$member_ID) //If Input ID is my profile ID
      {
        $check = 0;
      }
      elseif($info!=$member_ID) //If Input ID is not my profile ID
      {
        $check = $isExist -> verifydata("member_ID" , $info);
      }

    }
    elseif($typeOfInfo==4)
    {
      //Edit Version Email Verify
      //How to Include:
      //eg: onchange="checkExist2(4,'email')" The email cover with php tag

      $member_ID = mysqli_real_escape_string($ALVADB, $_POST['ID']); 

      $isMyEmail = $isExist-> verifydatac(" AND member_ID='$member_ID' AND email='$info'" );

      if($isMyEmail==0) //is false
      {
        $check = $isExist -> verifydata("email" , $info);
      }
      elseif($isMyEmail==1)//is true 
      {
        $check=0;
      }

    }
    elseif($typeOfInfo==5)
    {
      // Edit Version Of Outlet Module
      //How to Include:
      //eg: onchange="checkExist2(5,'outlet_ID')" The outlet_ID cover with php tag

      $outlet_ID = mysqli_real_escape_string($ALVADB, $_POST['ID']); 

      if($info==$outlet_ID) //If Input outlet ID is current editting outlet ID
      {
        $check = 0;
      }
      elseif($info!=$outlet_ID) //If Input outlet ID is current editting outlet ID
      {
        $check = $LocationisExist -> verifydata("outlet_ID" , $info);
      }

    }

    echo $check;

}

//_____________________________________________________________________
//Display the Address Based On select data 
//File using this function: outlet-setup-manager-add.php
//_____________________________________________________________________
//

if(isset($_POST['oid']))
{
  $info = mysqli_real_escape_string($ALVADB, $_POST['oid']);

  $sql="SELECT * FROM `outlet_module` WHERE outlet_ID='$info' AND deleted='0'";
  $query = mysqli_query($ALVADB,$sql) or die (mysqli_error($ALVADB));
  $row = mysqli_fetch_assoc($query);

  echo $row['address'];
}

?>