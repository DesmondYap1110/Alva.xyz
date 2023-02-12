<?php
    require_once('script.php');
?>
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-layout-mode="dark">
<head>
    <meta charset="utf-8">
    <title>Forgot Password | <?php echo $base_name; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- HEADER CONS SECTION -->
    <?php include "inc/header-cons.php"; ?>
    <!-- END OF HEADER CONS SECTION -->

    <!-- COLOR THEME SECTION -->
    <?php include "inc/color-theme.php"; ?>
    <!-- END OF COLOR THEME SECTION -->

    <style type="text/css">
        #secure-btn-div button {
            width: 100%;
        }
    </style>
</head>
<body>

    <!-- FORM SECTION -->
    <section id="form-section">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-5">
                    <form name="forgot_psw_form" method="POST" action="">
                        <div id="form-div">
                            <div id="logo-div">
                                <img src="<?php echo $base_url; ?>/img/logo.png" alt="<?php echo $base_name; ?>" title="<?php echo $base_name; ?>">
                            </div>
                            <div id="form-title-div">
                                <p id="form-title" class="fn_animated_text">Forgot Password</p>
                                <p id="form-p" class="fn_animated_text">Please insert the email address that registered with us.</p>
                            </div>
                            <?php if (isset($_GET['acc'])) { $acc = $_GET['acc']; if ($acc == 'invalid') { ?>
                            <div class="alert alert-danger" role="alert">
                                <p class="alert-heading">The email you entered does not belongs to any account.</p>
                            </div>
                            <?php } } ?>

                            <?php if (isset($_GET['email'])) { $email = $_GET['email']; if ($email == 'fail') { ?>
                            <div class="alert alert-danger" role="alert">
                                <p class="alert-heading">Sorry, we are currently facing technical issues. Please try again later or you may contact our support team with regards to this issue.</p>
                            </div>
                            <?php } } ?>
                            <div class="input-div">
                                <!-- <label>Email Address</label> -->
                                <input type="email" class="form-control" id="email" name="email" maxlength="150" placeholder="Email Address" required>
                            </div>
                            <div id="link-div">
                                <p id="link-p">
                                    Remember your password? <a href="<?php echo $base_url; ?>">Back to Login</a>
                                </p>
                            </div>
                            <!-- <div id="input-btn-div">
                                <input type="hidden" name="submit" value="login_form">
                                <button type="submit" id="gnlbtncl2" class="gnlbtn"><span>Login</span></button>
                            </div> -->
                            <div id="secure-btn-div">
                                <button type="button" id="gnlbtncl2" class="gnlbtn"><span>Submit</span></button>
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

</body>
</html>