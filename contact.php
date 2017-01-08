<?php
session_start();

if (isset($_SESSION['user_id'])) {
    header("Location: index.php");
}

include_once 'dbconnect.php';


$error = false;

if (isset($_POST['signup'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $dates = mysqli_real_escape_string($con, $_POST['dates']);
    $description = mysqli_real_escape_string($con, $_POST['description']);


    if (!preg_match("/^[a-zA-Z ]+$/", $name)) {
        $error = true;
        $name_error = "Name must contain only alphabets and space";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = true;
        $email_error = "Please Enter Valid Email ID";
    }
    if (strlen($dates) < 6) {
        $error = true;
        $dates_error = "dates must be minimum of 6 characters";
    }
    
    if (!$error) {
        if (mysqli_query($con, "INSERT INTO contact(name,email,dates,description) VALUES('" . $name . "', '" . $email . "', '" . $dates . "', '" . $description . "')")) {
            $successmsg = "Successfully Sent! ";
        } else {
            $errormsg = "Error in sent...Please try again later!";
        }
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Contact </title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport" >
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
        <link href="css/login.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
        <script src="js/jquery-1.10.2.js"></script> 
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

        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <!-- add header -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Home rental system</a>
                </div>
                <!-- menu items -->
                <div class="collapse navbar-collapse" id="navbar1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="login.php">Login</a></li>
                        <li class="active"><a href="register.php">Register</a></li>
                    </ul>
                </div>
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
                    <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="signupform">
                        <fieldset>
                            <legend>Contact Us</legend>

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" placeholder="Enter Full Name" required value="<?php if ($error) echo $name; ?>" class="form-control" />
                                <span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
                            </div>

                            <div class="form-group">
                                <label for="name">Email</label>
                                <input type="text" name="email" placeholder="Email" required value="<?php if ($error) echo $email; ?>" class="form-control" />
                                <span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
                            </div>

                            <div class="form-group">
                                <label for="name">Dates</label>
                                <input type="dates" name="dates" placeholder="dates" required class="form-control" />
                                <span class="text-danger"><?php if (isset($dates_error)) echo $dates_error; ?></span>
                            </div>

                            <div class="form-group">
                                <label for="name">Description</label>
                                <input type="dates" name="description" placeholder="Write you message here!" required class="form-control" />
                                <span class="text-danger"><?php if (isset($description_error)) echo $description_error; ?></span>
                            </div>

                            <div class="form-group">
                                <input type="submit" name="signup" value="Submit" class="btn btn-primary" />
                            </div>
                        </fieldset>
                    </form>
                    <span class="text-success"><?php
                        if (isset($successmsg)) {
                            echo $successmsg;
                        }
                        ?></span>
                    <span class="text-danger"><?php
                        if (isset($errormsg)) {
                            echo $errormsg;
                        }
                        ?></span>
                </div>
            </div>
            
        </div>
        <script src="js/jquery-1.10.2.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>



