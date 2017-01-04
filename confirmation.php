<?php
session_start();

if (isset($_SESSION['user_id']) != "") {
    header("Location: index.php");
}

include_once 'dbconnect.php';


if (isset($_POST['apartment'])) {

    $id = mysqli_real_escape_string($con, $_POST['id']);
    $area = mysqli_real_escape_string($con, $_POST['area']);
    $result = mysqli_query($con, "SELECT * FROM apartment WHERE id = '" . $id . "' and area = '" . $area . "'");

    if ($row = mysqli_fetch_array($result)) {
        $_SESSION['apartment_id'] = $row['id'];
        $_SESSION['apartment_area'] = $row['area'];
        header("Location: index.php");
    } else {
        $errormsg = "Incorrect Email or Password!";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Confirmation </title>	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
        <link href="css/login.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-1.10.2.js"></script> 
        <script src="js/bootstrap.min.js"></script>
        <script>
            $(window).load(function () {
                $('img.bgfade').hide();
                var dg_H = $(window).height();
                var dg_W = $(window).width();
                $('#wrap').css({'height': dg_H, 'width': dg_W});
                function anim() {
                    $("#wrap img.bgfade").first().appendTo('#wrap').fadeOut(1500);
                    $("#wrap img").first().fadeIn(1500);
                    setTimeout(anim, 3000);
                }
                anim();
            })
            $(window).resize(function () {
                window.location.href = window.location.href
            })
        </script>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="#bs-example-navbar-collapse-1" data-target="#navbar1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Home rental system</a>

            </div>

            <div class="collapse navbar-collapse" id="navbar1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="login.php">Login</a></li>
                    <li><a href="register.php">Register</a></li>
                </ul>
            </div>

        </nav>
        <div id="wrap">

            <img class="bgfade" src="images/bnr1.jpg" alt=""/>
            <img class="bgfade" src="images/bnr2.jpg" alt=""/>
            <img class="bgfade" src="images/bnr3.jpg" alt=""/>


        </div>

        <div class="container">

            <div class="row">
                <div class="col-md-4 col-md-offset-4 well">
                    <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
                        <fieldset>
                            <legend>Confirmation</legend>

                            <div class="form-group">
                                <label for="name">ID</label>
                                <?php echo $_POST["id"]; ?>
                            </div>

                            <div class="form-group">
                                <label for="name">Payment</label>
                                <p>Please Scan: </p>
                                <img src="images/alipay.png" width="150px" height="150px">
                            </div>

                            <div class="form-group">
                                <input type="submit" name="Confirm" value="Confirm" class="btn btn-primary" />

                            </div>
                
                        </fieldset>
                    </form>
                    <span class="text-danger"><?php
                        if (isset($errormsg)) {
                            echo $errormsg;
                        }
                        ?></span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center">	
                    New User? <a href="register.php">Sign Up Here</a>
                </div>
            </div>

        </div>
    </body>
</html>
