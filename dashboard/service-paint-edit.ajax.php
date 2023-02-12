<?php
require_once('script.php');

UpdateService($ALVADB);
UpdateDiscount($ALVADB);
UpdateReferral($ALVADB);


//############################################################################################################################
//
//                                                               FUNCTION PART
//
//############################################################################################################################

//SECTION 1: SERViCE NAME => Paint (Update)
function UpdateService($dbconn)
{
  if(isset($_POST['ID']))
  {
    $ID = mysqli_real_escape_string($dbconn,$_POST['ID']);
    $price = mysqli_real_escape_string($dbconn,$_POST['price']);
    $warranty = mysqli_real_escape_string($dbconn,$_POST['warranty']);


    $sql= "UPDATE `paint_pricelist` SET price='$price' , warranty='$warranty' WHERE ID ='$ID' ";
    $query = mysqli_query($dbconn,$sql) or die(mysqli_error($dbconn));

    echo "123";

  }
}
//END OF THE SECTION 1: SERViCE NAME => Paint (Update)

//SECTION 2: Discount Rate (Update)
function UpdateDiscount($dbconn)
{
  if(isset($_POST['DID']))
  {
    $DID = mysqli_real_escape_string($dbconn,$_POST['DID']);
    $rate = mysqli_real_escape_string($dbconn,$_POST['rate']);
    $amount = mysqli_real_escape_string($dbconn,$_POST['amount']);
    
    $sql= "UPDATE `paint_armp_rate` SET type='$rate' , amount='$amount' WHERE ID ='$DID' ";
    $query = mysqli_query($dbconn,$sql);

  }

}
//END OF THE SECTION 3: Discount Rate (Update)

//SECTION 3: Referral Rate (Update)
function UpdateReferral($dbconn)
{
  if(isset($_POST['RID']))
  {
    $RID = mysqli_real_escape_string($dbconn,$_POST['RID']);
    $rate = mysqli_real_escape_string($dbconn,$_POST['rate']);
    $amount = mysqli_real_escape_string($dbconn,$_POST['amount']);

    $sql= "UPDATE `paint_armp_rate` SET referral_type='$rate' , referral_amount='$amount' WHERE ID ='$RID' ";
    $query = mysqli_query($dbconn,$sql);

  }

}
//END OF THE SECTION 4: Referral Rate (Update)
?>