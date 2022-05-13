<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet" />

    <link type="text/css" type="text/css" href="<?php echo base_url('assets'); ?>/login/fonts/icomoon/style.css"
        rel="stylesheet" />

    <link type="text/css" href="<?php echo base_url('assets'); ?>/login/css/owl.carousel.min.css" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link type="text/css" href="<?php echo base_url('assets'); ?>/login/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Style -->
    <link type="text/css" href="<?php echo base_url('assets'); ?>/login/css/style.css" rel="stylesheet" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
    <script>
    $(window).load(function() {
        $("#preloader").delay(3000).fadeOut("slow");
    });
    </script>
    <script type="text/javascript">
    function myFunction() {
        var x = document.getElementById("inputPassword");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
    </script>

    <title>Login</title>
</head>

<body>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="<?php echo base_url('assets'); ?>/login/images/undraw_remotely_2j6y.svg" alt="Image"
                        class="img-fluid">
                </div>
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="mb-4">
                                <h3>Sign In</h3>
                                <p class="mb-4">Welcome!</p>
                            </div>

                            <form action="auth/proses" method="post">
                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>"
                                    value="<?php echo $this->security->get_csrf_hash(); ?>">

                                <div class="form-group first">
                                    <label for="username">Username</label>
                                    <input name="username" type="text" class="form-control" id="username"
                                        required="required">

                                </div>
                                <div class="form-group last mb-4">
                                    <label for="password">Password</label>
                                    <input name="password" type="password" class="form-control" id="password"
                                        required="required">

                                </div>

                                <div class="d-flex mb-5 align-items-center">
                                    <label class="control control--checkbox mb-0"><span class="caption">Remember
                                            me</span>
                                        <input type="checkbox" checked="checked" />
                                        <div class="control__indicator"></div>
                                    </label>
                                    <span class="ml-auto"><a href="#" class="forgot-pass">Forgot
                                            Password</a></span>
                                </div>

                                <input type="submit" value="Log In" class="btn btn-block btn-primary">

                                <span class="d-block text-left my-4 text-muted">&mdash; or login with
                                    &mdash;</span>

                                <div class="social-login">
                                    <a href="#" class="facebook">
                                        <span class="icon-facebook mr-3"></span>
                                    </a>
                                    <a href="#" class="twitter">
                                        <span class="icon-twitter mr-3"></span>
                                    </a>
                                    <a href="#" class="google">
                                        <span class="icon-google mr-3"></span>
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <script type="text/javascript" src="<?php echo base_url('assets'); ?>/login/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets'); ?>/login/js/popper.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets'); ?>/login/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets'); ?>/login/js/main.js"></script>

    <script>
    $(".js-tilt").tilt({
        scale: 1.1,
    });
    </script>
    <!--===============================================================================================-->
    <script src="<?php echo base_url("assets/login_repo/js/main.js"); ?>"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>

</body>

</html>