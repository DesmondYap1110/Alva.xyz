<?php

require_once('script.php');


UpdatePrice($ALVADB);
UpdateAdd($ALVADB);
UpdateDiscount($ALVADB);
UpdateReferral($ALVADB);



//############################################################################################################################
//
//                                                               FUNCTION PART
//
//############################################################################################################################

//SECTION 1: Price List of Service of Coat (Update)
function UpdatePrice($dbconn)
{
  if(isset($_POST['ID']))
  {
    $ID = mysqli_real_escape_string($dbconn,$_POST['ID']);
    $price = mysqli_real_escape_string($dbconn,$_POST['price']);
    $warranty = mysqli_real_escape_string($dbconn,$_POST['warranty']);
    $warranty_desc= rewarranty($warranty);

    $sql= "UPDATE `coat_pricelist` SET price='$price' , warranty='$warranty' , warranty_desc='$warranty_desc' WHERE ID ='$ID' ";
    $query = mysqli_query($dbconn,$sql) or die (mysqli_error($dbconn));

  }

}

function rewarranty($warranty)
{
  if($warranty==0)
  {
    return "Lifetime";
  }
  elseif($warranty==1)
  {
    return $warranty."Year";
  }
  else
  {
    return $warranty."Years";
  }

}

//END OF THE SECTION 1: Price List of Service of Coat (Update)


//SECTION 2: Add On (Update)
function UpdateAdd($dbconn)
{
  if(isset($_POST['AID']))
  {
    $AID = mysqli_real_escape_string($dbconn,$_POST['AID']);
    $price = mysqli_real_escape_string($dbconn,$_POST['price']);

    $sql= "UPDATE `coat_addon_pricelist` SET price='$price' WHERE ID ='$AID' ";
    $query = mysqli_query($dbconn,$sql) or die (mysqli_error($dbconn));

  }

}

//END OF THE SECTION 2: Add On (Update)

//SECTION 3: Discount Rate (Update)
function UpdateDiscount($dbconn)
{
  if(isset($_POST['DID']))
  {
    $DID = mysqli_real_escape_string($dbconn,$_POST['DID']);
    $rate = mysqli_real_escape_string($dbconn,$_POST['rate']);
    $amount = mysqli_real_escape_string($dbconn,$_POST['amount']);

    $sql= "UPDATE `coat_armp_rate` SET type='$rate' , amount='$amount' WHERE ID ='$DID' ";
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

    $sql= "UPDATE `coat_armp_rate` SET referral_type='$rate' , referral_amount='$amount' WHERE ID ='$RID' ";
    $query = mysqli_query($dbconn,$sql);

  }

}
//END OF THE SECTION 4: Referral Rate (Update)


?>