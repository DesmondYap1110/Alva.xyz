<?php
require_once('script.php');

UpdateService($ALVADB);
UpdateWarranty($ALVADB);
UpdateDiscount($ALVADB);
UpdateReferral($ALVADB);



//############################################################################################################################
//
//                                                               FUNCTION PART
//
//############################################################################################################################


//SECTION 1: SERViCE NAME => Aircond (Update)
function UpdateService($dbconn)
{
  if(isset($_POST['ID']))
  {
    $ID = mysqli_real_escape_string($dbconn,$_POST['ID']);
    $oem = mysqli_real_escape_string($dbconn,$_POST['oem']);
    $oem_my = mysqli_real_escape_string($dbconn,$_POST['oem_my']);
    $original = mysqli_real_escape_string($dbconn,$_POST['original']);

    $sql= "UPDATE `aircond_pricelist` SET oem='$oem' , oem_my='$oem_my' , original='$original' WHERE ID ='$ID' ";
    $query = mysqli_query($dbconn,$sql);

  }
}
//END OF THE SECTION 1: SERViCE NAME => Aircond (Update)


//SECTION 2: Warranty List (Update)
function UpdateWarranty($dbconn)
{
  if(isset($_POST['WID']))
  {
    $WID = mysqli_real_escape_string($dbconn,$_POST['WID']);
    $warranty = mysqli_real_escape_string($dbconn,$_POST['warranty']);

    $sql= "UPDATE `aircond_warranty` SET warranty='$warranty' WHERE ID ='$WID' ";
    $query = mysqli_query($dbconn,$sql);

  }

}
//END OF THE SECTION 2: Warranty List (Update)

//SECTION 3: Discount Rate (Update)
function UpdateDiscount($dbconn)
{
  if(isset($_POST['DID']))
  {
    $DID = mysqli_real_escape_string($dbconn,$_POST['DID']);
    $rate = mysqli_real_escape_string($dbconn,$_POST['rate']);
    $amount = mysqli_real_escape_string($dbconn,$_POST['amount']);

    $sql= "UPDATE `aircond_armp_rate` SET type='$rate' , amount='$amount' WHERE ID ='$DID' ";
    $query = mysqli_query($dbconn,$sql);

  }

}
//END OF THE SECTION 3: Discount Rate (Update)

//SECTION 4: Referral Rate (Update)
function UpdateReferral($dbconn)
{
  if(isset($_POST['RID']))
  {
    $RID = mysqli_real_escape_string($dbconn,$_POST['RID']);
    $rate = mysqli_real_escape_string($dbconn,$_POST['rate']);
    $amount = mysqli_real_escape_string($dbconn,$_POST['amount']);

    $sql= "UPDATE `aircond_armp_rate` SET referral_type='$rate' , referral_amount='$amount' WHERE ID ='$RID' ";
    $query = mysqli_query($dbconn,$sql);

  }

}
//END OF THE SECTION 4: Referral Rate (Update)

?>