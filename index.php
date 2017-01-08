<?php
session_start();
include_once 'dbconnect.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"
      xmlns:h="http://java.sun.com/jsf/html"
      xmlns:f="http://xmlns.jcp.org/jsf/core"
      xmlns:c="http://xmlns.jcp.org/jsp/jstl/core">
    <head>
        <title>Home Rental System</title>
        <link href="css/bootstrap_1.css" rel='stylesheet' type='text/css' />
        <link href="css/style_1.css" rel='stylesheet' type='text/css' />
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

            <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
            <script src="js/jquery-1.11.1_1.min.js"></script>
            <script src="js/bootstrap_1.js"></script>

            <!---fonts-->
            <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
                <link href='//fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
                    <link href='//fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
                        <!---fonts-->
                        <script src="js/responsiveslides_1.min.js"></script>
                        <script>
                            $(function () {
                                $("#slider").responsiveSlides({
                                    auto: true,
                                    nav: false,
                                    speed: 500,
                                    namespace: "callbacks",
                                    pager: true,
                                });
                            });
                        </script>
                        <link href="css/owl.carousel_1.css" rel="stylesheet">
                            <script src="js/owl.carousel_1.js"></script>
                            <script>
                            $(document).ready(function () {
                                $("#owl-demo").owlCarousel({
                                    items: 1,
                                    lazyLoad: true,
                                    autoPlay: true,
                                    navigation: false,
                                    navigationText: false,
                                    pagination: true,
                                });
                            });
                            </script>
                        </link>
                    </link>
                </link> 
            </link>
        </meta>
    </head>
    <h:body>
        <?php ?> 
        <h:form id="formes">
            <h:outputText id="ifturn" value="#{turnfaces.returnIfturn()}" style="font-size: 0px"></h:outputText>
            <h:commandButton id="turnfaces" action="#{turnfaces.turntofaces()}" style="width: 0px;height: 0px;"></h:commandButton>
        </h:form>
        <script>
            //                alert("123");
            var ot = document.getElementById('formes:ifturn');
            var bu = document.getElementById('formes:turnfaces');
            //                alert("123");
            //                bu.click();
            if (ot.innerHTML == 'false')
            {
                bu.click();
            } else
            {
                ot.hidden = "true";
                bu.hidden = "true";
            }

            //                alert("2");
        </script>
        <div class="header-section">
            <div class="container">
                <div class="head-top">
                    <div class="social-icon">
                        <h:form id="form1">
                            <h:outputText id="loginname" value="#{detail.checklogin()}" style="font-size: 20px;color: #C6C7C7;text-decoration: none;outline: none;margin-left: 10px;margin-top: 20px;"></h:outputText>
                            <h:commandButton id="clogout" value="logout" action="#{detail.clear()}" style="color: rgb(4, 98, 98);text-decoration: none;outline: none;height: 30px;width: 80px;margin-left: 30px;"></h:commandButton>
                        </h:form>
                    </div>
                    <div class="email">
                        <ul>
                            <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email: <a href="mailto:1234567890@mail.com">HRS@mail.com</a> </li>
                            <?php if (isset($_SESSION['user_id'])) { ?>
                                <li><p>Signed in as <?php echo $_SESSION['user_name']; ?></p></li>
                                <li><a href="logout.php">Log Out</a></li>
                            <?php } else { ?>
                                <li><a href="login.php">Login</a></li>
                                <li><a href="register.php">Register</a></li>
                            <?php } ?>

                        </ul>
                        <script>
                            var la = document.getElementById('form1:loginname');
//                                                    alert(la.innerHTML);
                            if (la.innerHTML == 'Please login~')
                            {
                                document.getElementById('form1:clogout').hidden = "true";
                            } else
                            {
                                document.getElementById('loginlab2').hidden = "true";
                            }
                        </script>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <nav class="navbar navbar-default">

                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>				  
                        <div class="navbar-brand">
                            <h1><a href="index.php"><span>Home </span>Rental</a></h1>
                        </div>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li ><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home Type<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="student.php">Student accommodation</a></li>
                                    <li><a href="apartment.php">Apartment</a></li>
                                    <li><a href="daily.php">Daily room</a></li>
                                    <li><a href="parking.php">Parking</a></li>
                                    <li><a href="meeting.php">Meeting room</a></li>
                                </ul>
                            </li>
                            <li><a href="aboutus.php">About us</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li><a href="adminlogin.php">Administrator</a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="slider">
            <div class="callbacks_container">
                <ul class="rslides" id="slider">
                    <div class="slid banner1">
                        <div class="caption">
                            <h3>Pay rent online</h3>
                            <p>Paying rent online to make it easy and convenient.</p>

                        </div>
                    </div>
                    <div class="slid banner2">	
                        <div class="caption">
                            <h3>A variety of housing</h3>
                            <p>We provide kinds of housing to rent, you will find what you like.</p>

                        </div>
                    </div>
                    <div class="slid banner3">	
                        <div class="caption">
                            <h3>Formal website</h3>
                            <p>Protect your information security and account security.</p>

                        </div>
                    </div>
                </ul>
            </div>
        </div>
        <!-- banner -->
        <div class="content">

            <div class="friend-agent">
                <div class="container">
                    <div class="friend-grids">
                        <div class="col-md-4 friend-grid">
                            <img src="images/p.png"></img>
                            <h4>Low-price but good house</h4>
                            <p>You can get the best house in lowest price.</p>
                        </div>
                        <div class="col-md-4 friend-grid">
                            <img src="images/p1.png"></img>
                            <h4>Friendly Agents</h4>
                            <p>We are your helpful friends among house agents.If you need any help, contact us.</p>
                        </div>
                        <div class="col-md-4 friend-grid">
                            <img src="images/p2.png"></img>
                            <h4>New listings are updated at any time</h4>
                            <p>Remember to check the listings at any time, perhaps there will be your favorite house.</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="offering">
                <div class="container">
                    <h3>We offer several types of houses for your reference</h3>
                    <div class="offer-grids">
                        <div class="col-md-6 offer-grid">
                            <div class="offer-grid1">
                                <h4><a >Appartment</a></h4>
                                <div class="offer1">
                                    <div class="offer-left">
                                        <a  class="mask"><img src="images/p3.jpg" class="img-responsive zoom-img" alt=""/></a>
                                    </div>
                                    <div class="offer-right">
                                        <h5><label>Kr</label> 7,500 Per Month - <span>Single Family Home</span></h5>
                                        <p>It's a house with a single family living in.</p>

                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 offer-grid">
                            <div class="offer-grid1">
                                <h4><a >Student Accommodation</a></h4>
                                <div class="offer1">
                                    <div class="offer-left">
                                        <a class="mask"><img src="images/p4.jpg" class="img-responsive zoom-img" alt=""/></a>
                                    </div>
                                    <div class="offer-right">
                                        <h5><label>Kr</label> 3,250 Per Month - <br><span>For Student</span></h5>
                                        <p>A flat which you can share your room with some other roommates</p>

                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="offer-grids">
                        <div class="col-md-6 offer-grid">
                            <div class="offer-grid1">
                                <h4><a>Meeting Room</a></h4>
                                <div class="offer1">
                                    <div class="offer-left">
                                        <a class="mask"><img src="images/p5.jpg" class="img-responsive zoom-img" alt=""/></a>
                                    </div>
                                    <div class="offer-right">
                                        <h5><label>Kr</label> 300 Per day - <span>Office</span></h5>
                                        <p>Offered for office staff, bright and capacious. </p>

                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 offer-grid">
                            <div class="offer-grid1">
                                <h4><a >Daily Room</a></h4>
                                <div class="offer1">
                                    <div class="offer-left">
                                        <a class="mask"><img src="images/dailyroom.jpg" class="img-responsive zoom-img" alt=""/></a>
                                    </div>
                                    <div class="offer-right">
                                        <h5><label>Kr</label> 800 Per Day - <span>Hotel</span></h5>
                                        <p>Day Room, to your family warmth.</p>

                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                </div>
            </div>

        </div>				
        <!-- footer -->
        <div class="footer-section">
            <div class="container">
                <div class="footer-grids">
                    <div class="col-md-3 footer-grid">
                        <h4>About The Home Rental System</h4>
                        <p>Home Rental System has the most houses between the same type websites.It is undisputably authoritative and representative.</p>
                    </div>


                    <div class="col-md-3 footer-grid">
                        <h4>Get In Touch</h4>
                        <p>1234 Road</p>
                        <p>Freephone : +1 234 567 890</p>
                        <p>Telephone : +1 234 567 890</p>
                        <p>FAX : + 1 234 567 890</p>
                        <p>E-mail : <a> HRS@mail.com</a></p>
                    </div>
                    <div class="clearfix"> </div>
                </div>

            </div>
        </div>
        <!-- footer -->
        <!-- copy -->
        <div class="copy-section">
            <div class="container">
                <p>&#169; 2016 The Home Rental. All rights reserved | Design by group 9</p>
            </div>
        </div>
        <!-- copy -->
        <!-- login -->
        <div class="modal fade" name="myModal" id="myModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content modal-info">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>						
                    </div>
                    <div class="modal-body real-spa">
                        <div class="login-grids">
                            <div class="login">

                                <div class="login-right">
                                    <h:form id="form5">
                                        <table>
                                            <tr><h3>Login</h3></tr>
                                            <tr>
                                                <td><label>Username</label></td>
                                                <tr><td><input type="text"  id="nname" placeholder="Enter Username" required style="display: inline-block;width: 270px;text-align: left;height: 25px;font-size: 15px;"/></td></tr>


                                                <tr>
                                                    <td><label>Password:</label></td>
                                                    <tr><td><input type="password" id="npass" placeholder="Enter Password"  required  style="display: inline-block;width: 270px;text-align: left;height: 25px;font-size: 15px;"/></td>

                                                    </tr>
                                                    <tr>
                                                        <td><h: id="nsubmit" button type="submit" value="#{detail.password}"  required  style="margin-left:50px;width:270px;"/></td>
                                                    </tr>  
                                                    </table>
                                                    <h:commandButton value="Login now" action="#{detail.login()}" styleClass="button"/></h:form>
                                                    </div>							
                                                    </div>
                                                    <p>By logging in you agree to our <a href="#">Terms</a> and <a href="#">Conditions</a> and <a href="#">Privacy Policy</a></p>
                                                    </div>
                                                    </div>
                                                    </div>
                                                    </div>
                                                    </div>
                                                    <!-- //login -->
                                                    <!-- Register -->
                                                    <div class="modal fade" name="myModal" id="myModal1" tabindex="-1" role="dialog">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content modal-info">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>						
                                                                </div>
                                                                <div class="modal-body real-spa">
                                                                    <div class="login-grids">
                                                                        <div class="login">
                                                                            <div class="login-right">
                                                                                <h:form id="form3">
                                                                                    <h3>Register </h3>
                                                                                    <h:outputText id="ifres" value="#{detail.checkres()}"></h:outputText>
                                                                                    <script>
                                                                                        var la = document.getElementById('form3:ifres');
                                                                                        la.hidden = true;
                                                                                        if (la.innerHTML == 'yes')
                                                                                        {
                                                                                            alert('register achieved.');
                                                                                        }
                                                                                    </script>
                                                                                    <table>
                                                                                        <tr>
                                                                                            <td>Name:</td>
                                                                                            <td>
                                                                                                <h:inputText id="fName" value="#{detail.username}" style="width:270px;"  required="true" requiredMessage="Please enter username" validator="#{detail.validateName}"></h:inputText>
                                                                                                <h:message for="fName"  style="color:red"/>    
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>Mobile:</td>
                                                                                            <td>
                                                                                                <h:inputText id="fMobile" value="#{detail.mobilenum}" style="width:270px;" required="true" requiredMessage="Please enter mobilenumber"></h:inputText>
                                                                                                <h:message for="fMobile"  style="color:red"/>    
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>Email</td>
                                                                                            <td>
                                                                                                <h:inputText id="fEmail" value="#{detail.emailid}" style="width:270px;" required="true" requiredMessage="Please enter emailId" validator="#{detail.validateEmail}" validatorMessage="Invalid e-mail Id"></h:inputText>
                                                                                                <h:message for="fEmail" id="nameError" style="color:red"/>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>Password:</td>
                                                                                            <td>
                                                                                                <h:inputSecret id="pass" value="#{detail.password}" style="width:270px;" required="true" requiredMessage="Please enter password" validatorMessage="Password must be minimum 5 characters long" validator="#{detail.validateFinalPassword}">
                                                                                                    <f:validateLength minimum="5"/></h:inputSecret>
                                                                                                <h:message for="pass" style="color:red"/>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>Password again</td>
                                                                                            <td>
                                                                                                <h:inputSecret id="cpass" value="#{detail.passwordcon}" style="width:270px;" required="true" requiredMessage="Please enter passwordconfirm" validator="#{detail.validateCPassword}"></h:inputSecret>
                                                                                                <h:message for="cpass" style="color:red"/>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                    <h:commandButton id="cres" value="Submit" action="#{detail.action()}"></h:commandButton>
                                                                                    <h:message for="cres" style="color: green" />
                                                                                </h:form>
                                                                            </div>
                                                                            <div class="clearfix"></div>								
                                                                        </div>
                                                                        <p>By logging in you agree to our <a href="#">Terms</a> and <a href="#">Conditions</a> and <a href="#">Privacy Policy</a></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- //Register -->                      
                                                    </h:body>
                                                    </html>
