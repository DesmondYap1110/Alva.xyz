<?php
    require_once('script.php');
?>
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-layout-mode="dark">
<head>
    <meta charset="utf-8">
    <title>Reset Password | <?php echo $base_name; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- HEADER CONS SECTION -->
    <?php include "inc/header-cons.php"; ?>
    <!-- END OF HEADER CONS SECTION -->

    <!-- COLOR THEME SECTION -->
    <?php include "inc/color-theme.php"; ?>
    <!-- END OF COLOR THEME SECTION -->

    <style type="text/css">
        #password-contain {
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 0.5rem;
            background: linear-gradient(58deg, #151b24, #1d2634);
        }
    </style>
</head>
<body>

    <!-- FORM SECTION -->
    <section id="form-section">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-5">
                    <form name="reset_psw_form" method="POST" action="">
                        <div id="form-div">
                            <div id="logo-div">
                                <img src="<?php echo $base_url; ?>/img/logo.png" alt="<?php echo $base_name; ?>" title="<?php echo $base_name; ?>">
                            </div>
                            <div id="form-title-div">
                                <p id="form-title" class="fn_animated_text">Reset Password</p>
                                <p id="form-p" class="fn_animated_text">Please insert your new login password.</p>
                            </div>
                            <?php if (isset($_GET['pw'])) { $pw = $_GET['pw']; if ($pw == 'unmatch') { ?>
                            <div class="alert alert-danger" role="alert">
                                <p class="alert-heading">Sorry, passwords not match. Please try again.</p>
                            </div>
                            <?php } } ?>

                            <?php if (isset($_GET['pw'])) { $pw = $_GET['pw']; if ($pw == 'invalid') { ?>
                            <div class="alert alert-danger" role="alert">
                                <p class="alert-heading">Your password must contain at least 8 characters, 1 number, 1 capital letter and 1 lowercase letter.</p>
                            </div>
                            <?php } } ?>
                            <div class="input-div">
                                <!-- <label>Password</label> -->
                                <div id="psw-div">
                                    <input type="password" class="form-control" id="psw" name="pw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required placeholder="New Password">
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
                            <div class="input-div">
                                <!-- <label>Confirm Password</label> -->
                                <div id="psw-div">
                                    <input type="password" class="form-control" id="c_psw" name="cpw" required placeholder="Re-Type New Password">
                                    <span id="psw-visable-icon" onclick="pw()"><i class="ri-eye-fill" id="open-eye"></i><i class="ri-eye-off-fill" id="close-eye"></i></span>
                                </div>
                            </div>
                            <div id="input-btn-div">
                                <button type="button" id="gnlbtncl2" class="gnlbtn"><span>Reset Password</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- END OF FORM SECTION -->
    
    <!-- FOOTER CONS SECTION -->
    <?php include "inc/footer-cons.php"; ?>
    <!-- END OF FOOTER CONS SECTION -->

    <!-- ANIMATED TEXT JS -->
    <?php include "inc/animated-text.php"; ?>
    <!-- END OF ANIMATED TEXT JS -->

    <!-- PASSWORD VALITATION JS -->
    <?php include "inc/password-valitation.php"; ?>
    <!-- END OF PASSWORD VALITATION JS -->

</body>
</html>