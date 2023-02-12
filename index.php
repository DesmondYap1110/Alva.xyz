<?php
    require_once('script.php');
    require_once('php/function/login.function.php');

    staylogin($ALVADB,$base_url);
    login($ALVADB,$base_url);

?>
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-layout-mode="dark">
<head>
    <meta charset="utf-8">
    <title>Login | <?php echo $base_name; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- HEADER CONS SECTION -->
    <?php include "inc/header-cons.php"; ?>
    <!-- END OF HEADER CONS SECTION -->

    <style>
        
    </style>
</head>
<body>

 <!-- FORM SECTION -->
 <section id="form-section">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-5 col-md-8" id="mb-div">
                    <form name="login_form" method="POST" action="" autocomplete="off" id="login_form">
                        <div id="form-div">
                            <div id="logo-div">
                                <img src="<?php echo $base_url; ?>/img/logo.png" alt="<?php echo $base_name; ?>" title="<?php echo $base_name; ?>">
                            </div>
                            <div id="form-title-div">
                                <p id="form-title" class="fn_animated_text">Welcome Back !</p>
                                <p id="form-p" class="fn_animated_text">Login to manage your account.</p>
                            </div>
                            <?php if (isset($_GET['pw'])) { $register = $_GET['pw']; if ($register == 'success') { ?>
                            <div class="alert alert-success" role="alert">
                                <p class="alert-heading">Password Reset Successfully.</p>
                            </div>
                            <?php } } ?>

                            <?php if (isset($_GET['reset'])) { $reset = $_GET['reset']; if ($reset == 'sent') { ?>
                            <div class="alert alert-success" role="alert">
                                <p class="alert-heading">The instructions to reset your password has been sent to your email. Please check your email.</p>
                            </div>
                            <?php } } ?>

                            <?php if (isset($_GET['reset'])) { $reset = $_GET['reset']; if ($reset == 'success') { ?>
                            <div class="alert alert-success" role="alert">
                                <p class="alert-heading">Your password has been reset successfully. Please login with your new password.</p>
                            </div>
                            <?php } } ?>

                            <?php if (isset($_GET['login'])) { $login = $_GET['login']; if ($login == 'fail') { ?>
                            <div class="alert alert-danger" role="alert">
                                <p class="alert-heading">Invalid login credentials. Please try to login again.</p>
                            </div>
                            <?php } } ?>

                            <?php if (isset($_GET['login'])) { $login = $_GET['login']; if ($login == 'connected') { ?>
                            <div class="alert alert-danger" role="alert">
                                <p class="alert-heading">Your account has already been connected in another device or browser. Please disconnect from another device and continue logging on.</p>
                            </div>
                            <?php } } ?>

                            <?php if (isset($_GET['login'])) { $login = $_GET['login']; if ($login == 'pending') { ?>
                            <div class="alert alert-danger" role="alert">
                                <p class="alert-heading">Your account has not been verified yet. Please try again later or contact our support team regards to this issue.</p>
                            </div>
                            <?php } } ?>

                            <?php if (isset($_GET['login'])) { $login = $_GET['login']; if ($login == 'block') { ?>
                            <div class="alert alert-danger" role="alert">
                                <p class="alert-heading">Your account has been temporarily disabled. Please contact our support team regards to this issue.</p>
                            </div>
                            <?php } } ?>

                            <?php if (isset($_GET['process'])) { $process = $_GET['process']; if ($process == 'invalid') { ?>
                            <div class="alert alert-danger" role="alert">
                                <p class="alert-heading">Invalid Process.</p>
                            </div>
                            <?php } } ?>
                            <div class="input-div">
                                <!-- <label class="fn_animated_text">Username</label> -->
                                <input type="text" class="form-control" id="uname" name="uname" maxlength="150" required placeholder="Username" autocomplete="username">
                            </div>
                            <div class="input-div">
                                <!-- <label class="fn_animated_text">Password</label> -->
                                <input type="password" class="form-control" id="pw" name="pw" maxlength="30" required placeholder="Password" autocomplete="pw">
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-6">
                                    <div id="check-div">
                                        <input class="form-check-input" type="checkbox" name="stay_login" id="stay_login">
                                        <label class="form-check-label" for="stay_login">Stay Login<?php?></label>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-6">
                                    <div id="link-div" style="text-align: right;">
                                        <p id="link-p">
                                            <a href="<?php echo $base_url; ?>/forgot-password.php">Forgot Password?</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div id="input-btn-div">
                                <input type="hidden" name="submit" value="login_form">
                                <button type="submit" id="gnlbtncl2" class="gnlbtn"><span>Login</span></button>
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

    <script>
        (function() {
            var login_form = document.getElementById('login_form');
            login_form.type = 'text';
            login_form.removeAttribute('autocomplete');
        })();
    </script>

</body>
</html>