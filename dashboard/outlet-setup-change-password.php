<?php

//From include Page : 
//script file
//$type => type of user 
//$url => link Success
//$urlfail => link Fail
//$member_ID => Update Password Based On User ID

$reset = new member("member",$ALVADB);

if(isset($_POST['reset']) && $_POST['reset']=="reset_form")
{
    $pw = mysqli_real_escape_string($ALVADB,$_POST['pw']);
    $cpw = mysqli_real_escape_string($ALVADB,$_POST['cpw']);

    if($pw==$cpw)
    {
        $input = array
        (
            'password' => $pw//$reset->setPassword($pw)
        );

        //Update Function From Class
        $reset->updateonly($input,'member_ID',$member_ID);

        echo "<script>window.location.href='$url';</script>";
        exit;
    }
    else
    {
        echo "<script>window.location.href='$urlfail';</script>";
        exit;
    }

}


?>
<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
    <div id="form-box" class="general-box">
        <form name="reset_form" method="POST" action="" enctype="multipart/form-data">
            <p id="form-sub-title">Change Password</p>
            <?php if (isset($_GET['edit'])) { $pw = $_GET['edit']; if ($pw == 'succ') { ?>
                <div class="alert alert-success" role="alert">
                    <p class="alert-heading">Member's Info successfully edited.</p>
                </div>
            <?php } } ?>
            <?php if (isset($_GET['format'])) { $pw = $_GET['format']; if ($pw == 'fail') { ?>
            <div class="alert alert-danger" role="alert">
                <p class="alert-heading">Photo Format Invalid (File Size: < 10MB | File Type: PNG, JPEG, JPG)</p>
            </div>
            <?php } } ?>
            <?php if (isset($_GET['upload'])) { $pw = $_GET['upload']; if ($pw == 'fail') { ?>
                <div class="alert alert-danger" role="alert">
                    <p class="alert-heading">Photo Fail to uplaod. Please try again.</p>
                </div>
            <?php } } ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="input-group">
                        <label>New Password</label>
                        <div id="psw-div">
                            <input type="password" class="form-control" id="psw" name="pw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                            <span id="psw-visable-icon" onclick="pw1()"><i class="ri-eye-fill" id="open-eye1"></i><i class="ri-eye-off-fill" id="close-eye1"></i></span>
                        </div>
                            <span id="note-p" class="note-color-1">Must be at least 8 characters.</span>
                        </div>
                    <div id="password_contain">
                        <p id="pw-ct-title">Password Must Contain :</p>
                        <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                        <p id="letter" class="invalid">At <b>lowercase</b> letter (a-z)</p>
                        <p id="capital" class="invalid">At least <b>uppercase</b> letter (A-Z)</p>
                        <p id="number" class="invalid">A least <b>number</b> (0-9)</p>
                    </div>
                    <div class="input-group">
                        <label>Re-Type New Password</label>
                        <div id="psw-div">
                            <input type="password" class="form-control" id="c_psw" name="cpw">
                            <span id="psw-visable-icon" onclick="pw()"><i class="ri-eye-fill" id="open-eye"></i><i class="ri-eye-off-fill" id="close-eye"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div id="form-btn-div">
                        <input type="hidden" name="reset" value="reset_form">
                        <button type="submit" id="general-btn" class="btn1"><i class="ri-save-3-fill"></i>Save Changes</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- PASSWORD VALITATION JS -->
<script src="<?php echo $base_url;?>/js/password-valitation/password-valitation.js"></script>
<script src="<?php echo $base_url;?>/assets/js/pages/passowrd-create.init.js"></script>
<!-- END OF PASSWORD VALITATION JS -->
