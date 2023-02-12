<?php
require_once('script.php');


UpdatePrice($ALVADB);
UpdateAddOn($ALVADB);
UpdateDiscount($ALVADB);
UpdateReferral($ALVADB);

//############################################################################################################################
//
//                                                               FUNCTION PART
//
//############################################################################################################################

//SECTION 1:  Tint Price List (Update)
function UpdatePrice($dbconn)
{
  if(isset($_POST['PID']))
  {
    $PID = mysqli_real_escape_string($dbconn,$_POST['PID']);
    $price = mysqli_real_escape_string($dbconn,$_POST['price']);
    $warranty = mysqli_real_escape_string($dbconn,$_POST['warranty']);

    $sql= "UPDATE `tint_pricelist` SET price='$price' , warranty='$warranty' WHERE ID ='$PID' ";
    $query = mysqli_query($dbconn,$sql) or die(mysqli_error($dbconn));
  }

}
//END OF THE SECTION 1:  Tint Price List Add On(Update)

//SECTION 2:  Tint Price List (Update)
function UpdateAddOn($dbconn)
{
  if(isset($_POST['AID']))
  {
    $AID = mysqli_real_escape_string($dbconn,$_POST['AID']);
    $price = mysqli_real_escape_string($dbconn,$_POST['price']);

    $sql= "UPDATE `tint_addon_pricelist` SET price='$price' WHERE ID ='$AID' ";
    $query = mysqli_query($dbconn,$sql) or die(mysqli_error($dbconn));
  }

}
//END OF THE SECTION 2:  Tint Price List Add On (Update)

//SECTION 3: Discount Rate (Update)
function UpdateDiscount($dbconn)
{
  if(isset($_POST['DID']))
  {
    $DID = mysqli_real_escape_string($dbconn,$_POST['DID']);
    $rate = mysqli_real_escape_string($dbconn,$_POST['rate']);
    $amount = mysqli_real_escape_string($dbconn,$_POST['amount']);
    
    $sql= "UPDATE `tint_armp_rate` SET type='$rate' , amount='$amount' WHERE ID ='$DID' ";
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

    $sql= "UPDATE `tint_armp_rate` SET referral_type='$rate' , referral_amount='$amount' WHERE ID ='$RID' ";
    $query = mysqli_query($dbconn,$sql);

  }

}
//END OF THE SECTION 4: Referral Rate (Update)


?>