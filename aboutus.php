<!DOCTYPE html>
<html>
    <head>
        <title>About Us</title>	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
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
                    <form role="form" name="loginform">
                        <fieldset>
                          
    
                            <h4>Our Company</h4>
                            <ul class="nav-bottom">
                                
                                <li>Mobile : +46 (072) 1234567</li>
                                <li>WeChat: Homerentalsystem</li>
                                <li>Facebook: Homerentalsystem</li>
                                
                            </ul>   
            
                            <h4>About Us</h4>
                                <ul class="nav-bottom">
                                    <li>Wang Cheng:             Scrum Master</li>
                                    <li>Ravi Shankar Kondoju:   Product Owner </li>
                                    <li>Song Jiaqi:             Developer & tester</li>
                                    <li>Zhan Wenkai:            Developer & tester</li>
                                    <li>Liu Qianwen:            Developer & tester</li>
                                    <li>Li Yucheng:             Developer & tester</li>
                                    <li>Wu Songtao:             Developer & tester</li>   
                                </ul>   
           
                            <h4>Customer Support</h4>
                            <p>Mon-Fri, 7AM-7PM </p>
                            <p>Sat-Sun, 8AM-5PM </p>
                            <p>1234567890</p>
                                
   
                        </fieldset>
                    </form>
                    <span class="text-danger"><?php
                        if (isset($errormsg)) {
                            echo $errormsg;
                        }
                        ?></span>
                </div>
            </div>
           

        </div>
    </body>
</html>
