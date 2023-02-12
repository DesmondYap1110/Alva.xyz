<?php
//This is the function for display the address when address is selected

//Make sure input of ID of 
//Location is id = "location"
//Address is id = "address"
//In order to using the javascript


//=============================================================================================

// <select class="form-control js-example-basic-single" id="location" name="location" required onchange="displayAddress()">
//     <!-- Put the onchange="displayAddress()" in select input of location -->
//     <!-- import from "../../dashboard/inc/display-address.js"-->
//
//     <option disabled selected>Select Location</option>
//     
//     ///////////// YOUR PHP FUNCTION //////////// 
//
//     selectlocation($ALVADB); //From this function $ALVADB is Location
//
//     /////////// YOUR PHP FUNCTION //////////// 
//     
// </select>


//============================================================================================

//Without Selected
function selectlocation($dbconn)
{
    $sql="SELECT * FROM `outlet_module` WHERE status = '1' AND deleted='0' ";
    $query = mysqli_query($dbconn,$sql) or die(mysqli_error($dbconn));
    $total_row = mysqli_num_rows($query);

    while($row=mysqli_fetch_assoc($query))
    {
        echo
        '
        <option value="'.$row['outlet_ID'].'"> '.$row['location'].' </option>
        ';
    }
}

//Got Selected default Based On their value
function selectlocation2($dbconn,$data)
{
    $sql="SELECT * FROM `outlet_module` WHERE status = '1' AND deleted='0' ";
    $query = mysqli_query($dbconn,$sql) or die(mysqli_error($dbconn));
    $total_row = mysqli_num_rows($query);

    while($row=mysqli_fetch_assoc($query))
    {
        echo
        '
        <option value="'.$row['outlet_ID'].'"  '.isselected($row['outlet_ID'],$data).'> '.$row['location'].' </option>
        ';
    }

}

function isselected($value,$data)
{
    if($value==$data)
    {
        return 'selected';
    }

}
?>

<script src="../../dashboard/inc/display-address.js"></script>
<!-- In inc folder -->
<!-- Consists ajax need to configure -->
