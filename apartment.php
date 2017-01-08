<?php
session_start();
include_once 'dbconnect.php';
$_SESSION['url'] = $_SERVER['REQUEST_URI'];

if (isset($_SESSION['parking_id']) != "") {
    header("Location: index.php");
}

if (isset($_POST['homerentalsystem'])) {

    $area = mysqli_real_escape_string($con, $_POST['area']);
    $category = mysqli_real_escape_string($con, $_POST['category']);
    $size = mysqli_real_escape_string($con, $_POST['size']);
    $price = mysqli_real_escape_string($con, $_POST['price']);
    $result = mysqli_query($con, "SELECT * FROM admin WHERE area = '" . $area . "' and category = '" . $category . "' and size =  '" . $size . "' and price = '" . $price . "'");

    
}


?>
<html>
    <head>
        <title>Apartment</title>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery.min.js"></script>
        <!-- Custom Theme files -->
        <!--menu-->
        <script src="js/scripts.js"></script>
        <link href="css/styles.css" rel="stylesheet">
        <link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />

        <!--//menu-->
        <!--theme-style-->
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
        <!--//theme-style-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Real Home Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <style type="text/css">
            table.imagetable {
                font-family: verdana,arial,sans-serif;
                font-size:11px;
                color:#333333;
                border-width: 1px;
                border-color: #999999;
                border-collapse: collapse;
            }
            table.imagetable th {
                background:#b5cfd2 url('cell-blue。jpg');
                border-width: 1px;
                padding: 8px;
                border-style: solid;
                border-color: #999999;
            }
            table.imagetable td {
                background:#dcddc0 url('cell-grey。jpg');
                border-width: 1px;
                padding: 8px;
                border-style: solid;
                border-color: #999999;
            }
        </style>
    </head>
    <body>
        <!--header-->
        <div class="navigation">
            <div class="container-fluid">
                <nav class="pull">
                    <ul>
                        <li><a  href="index.php">Home</a></li>
                        <li><a  href="#">About Us</a></li>
                        <li><a  href="#">Blog</a></li>
                        <li><a  href="#">Terms</a></li>
                        <li><a  href="#">Privacy</a></li>
                        <li><a  href="#">Contact</a></li>
                    </ul>
                </nav>			
            </div>
        </div>
        <div class="header">
            <div class="container">
                <!--logo-->
                <div class="logo">
                    <h1><a href="index.php">Home rental system</a></h1>
                </div>
                <!--//logo-->
                <div class="top-nav">
                    <ul class="right-icons">
                        <li><span ><i class="glyphicon glyphicon-phone"> </i>+1234567890</span></li>
                        <?php if (isset($_SESSION['user_id'])) { ?>
                            <li><p style="color: white">Signed in as <?php echo $_SESSION['user_name']; ?></p></li>
                            <li><a href="logout.php">Log Out</a></li>
                        <?php } else { ?>
                            <li> </i><a href="login.php">Login</a></li>
                            <li><a href="register.php">Register</a></li>
                        <?php } ?>
                        <li><a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i> </a></li>

                    </ul>
                    <div class="nav-icon">
                        <div class="hero fa-navicon fa-2x nav_slide_button" id="hero">
                            <a href="#"><i class="glyphicon glyphicon-menu-hamburger"></i> </a>
                        </div>	
                        <!---
                        <a href="#" class="right_bt" id="activator"><i class="glyphicon glyphicon-menu-hamburger"></i>  </a>
                --->
                    </div>
                    <div class="clearfix"> </div>
                    <!---pop-up-box---->

                    <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
                    <script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
                    <!---//pop-up-box---->
                    <div id="small-dialog" class="mfp-hide">
                        <!----- tabs-box ---->
                        <div class="sap_tabs">	
                            <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                                <ul class="resp-tabs-list">
                                    <li class="resp-tab-item " aria-controls="tab_item-0" role="tab"><span>All Homes</span></li>
                                    <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>For Sale</span></li>
                                    <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>For Rent</span></li>
                                    <div class="clearfix"></div>
                                </ul>				  	 
                                <div class="resp-tabs-container">
                                    <h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>All Homes</h2><div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">
                                        <div class="facts">
                                            <div class="login">
                                                <input type="text" value="Search Address, Neighborhood, City or Zip" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                            this.value = 'Search Address, Neighborhood, City or Zip';
                                                        }">		
                                                <input type="submit" value="">
                                            </div>        
                                        </div>
                                    </div>
                                    <h2 class="resp-accordion" role="tab" aria-controls="tab_item-1"><span class="resp-arrow"></span>For Sale</h2><div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
                                        <div class="facts">									
                                            <div class="login">
                                                <input type="text" value="Search Address, Neighborhood, City or Zip" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                            this.value = 'Search Address, Neighborhood, City or Zip';
                                                        }">		
                                                <input type="submit" value="">
                                            </div> 
                                        </div>	
                                    </div>									
                                    <h2 class="resp-accordion" role="tab" aria-controls="tab_item-2"><span class="resp-arrow"></span>For Rent</h2><div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
                                        <div class="facts">
                                            <div class="login">
                                                <input type="text" value="Search Address, Neighborhood, City or Zip" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                            this.value = 'Search Address, Neighborhood, City or Zip';
                                                        }">		
                                                <input type="submit" value="">
                                            </div> 
                                        </div>	
                                    </div>
                                </div>
                            </div>
                            <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
                            <script type="text/javascript">
                                                    $(document).ready(function () {
                                                        $('#horizontalTab').easyResponsiveTabs({
                                                            type: 'default', //Types: default, vertical, accordion           
                                                            width: 'auto', //auto or any width like 600px
                                                            fit: true   // 100% fit in a container
                                                        });
                                                    });
                            </script>	
                        </div>
                    </div>
                    <script>
                        $(document).ready(function () {
                            $('.popup-with-zoom-anim').magnificPopup({
                                type: 'inline',
                                fixedContentPos: false,
                                fixedBgPos: true,
                                overflowY: 'auto',
                                closeBtnInside: true,
                                preloader: false,
                                midClick: true,
                                removalDelay: 300,
                                mainClass: 'my-mfp-zoom-in'
                            });

                        });
                    </script>


                </div>
                <div class="clearfix"> </div>
            </div>	
        </div>
        <!--//-->	
        <div class=" banner-buying">
            <div class=" container">
                <h3><span>Apartment</span> </h3> 
                <!---->
                <div class="menu-right">
                    <ul class="menu">
                        <li class="item1"><a href="#"> Menu<i class="glyphicon glyphicon-menu-down"> </i> </a>
                            <ul class="cute">
                                <li class="subitem1"><a href="index.php">Home</a></li>
                                <li class="subitem3"><a href="apartment.php">Apartment </a></li>
                                <li class="subitem1"><a href="daily.php">Daily room </a></li>
                                <li class="subitem2"><a href="meeting.php">Meeting room</a></li>
                                <li class="subitem2"><a href="student.php">Accommodation</a></li>
                                <li class="subitem2"><a href="parking.php">Parking</a></li>
                                <li class="subitem3"><a href="about.php">About us</a></li>
                                <li class="subitem3"><a href="contact.php">Contact</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
                <!--initiate accordion-->
                <script type="text/javascript">
                    $(function () {
                        var menu_ul = $('.menu > li > ul'),
                                menu_a = $('.menu > li > a');
                        menu_ul.hide();
                        menu_a.click(function (e) {
                            e.preventDefault();
                            if (!$(this).hasClass('active')) {
                                menu_a.removeClass('active');
                                menu_ul.filter(':visible').slideUp('normal');
                                $(this).addClass('active').next().stop(true, true).slideDown('normal');
                            } else {
                                $(this).removeClass('active');
                                $(this).next().stop(true, true).slideUp('normal');
                            }
                        });

                    });
                </script>

            </div>
        </div>
        <!--//header-->
        <div class="container">

            <div class="price">
                <div class="price-grid" style="width:1050px; height:225px; overflow:scroll;">
                    <table class = "imagetable" style='text-align:left;' border='1' cellspacing="0" width="1032px" id="dataTableDetail" align="center">
                        <tr><th>ID</th><th>AREA</th><th>CATEGORY</th><th>SIZE(m2)</th><th>PRICE(Kr)</th><th>CHOOSE</th></tr>
                        <?php
                            require 'conn.php';
                            $sql = mysql_query("select * from apartment");
                            $datarow = mysql_num_rows($sql); 
                               for($i=0;$i<$datarow;$i++){
                                   $sql_arr = mysql_fetch_assoc($sql);
                                   $id = $sql_arr['id'];
                                   $area = $sql_arr['area'];
                                   $category = $sql_arr['category'];
                                   $size = $sql_arr['size'];
                                   $price = $sql_arr['price'];
                                   $state = $sql_arr['state'];
                                   echo "<tr><td>$id</td><td>$area</td><td>$category</td><td>$size</td><td>$price</td><td>$state</td></tr>";
                               }
                        ?>
                    </table>
                    <div class="clearfix"> </div>
                </div>
                <div class="submit_link">
                    <form action="confirmation.php" method = 'post'>
                        <input type="submit" value="submit">       
                    </form>  
                </div>
            </div>
            <!---->
            <div class="top-grid">
                <h3>Indoor display</h3>
                <div class="grid-at">
                    <div class="col-md-3 grid-city">
                        <div class="grid-lo">
                            <a href="#">
                                <figure class="effect-layla">
                                    <img class=" img-responsive" src="images/2.jpg" alt="img06">
                                    <figcaption>
                                        <h4></h4>

                                    </figcaption>			
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 grid-city">
                        <div class="grid-lo">
                            <a href="#">
                                <figure class="effect-layla">
                                    <img class=" img-responsive" src="images/4.jpg" alt="img06">
                                    <figcaption>
                                        <h4></h4>

                                    </figcaption>			
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 grid-city grid-city1">
                        <div class="grid-me">
                            <div class="col-md-8 grid-lo1">
                                <div class=" grid-lo">
                                    <a href="#">
                                        <figure class="effect-layla">
                                            <img class=" img-responsive" src="images/5.jpg" alt="img06">
                                            <figcaption>
                                                <h4 class="effect1"></h4>

                                            </figcaption>			
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 grid-lo2">
                                <div class=" grid-lo">
                                    <a href="#">
                                        <figure class="effect-layla">
                                            <img class=" img-responsive" src="images/ab.jpg" alt="img06">
                                            <figcaption>
                                                <h4 class="effect2"></h4>

                                            </figcaption>			
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>	
                        <div class="grid-me">
                            <div class="col-md-6 grid-lo3">
                                <div class=" grid-lo">
                                    <a href="#">
                                        <figure class="effect-layla">
                                            <img class="img-responsive" src="images/at.jpg" alt="img06">
                                            <figcaption>
                                                <h4 class="effect3"></h4>

                                            </figcaption>			
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 grid-lo4">
                                <div class=" grid-lo">
                                    <a href="#">
                                        <figure class="effect-layla">
                                            <img class="img-responsive" src="images/bo.jpg" alt="img06">
                                            <figcaption>
                                                <h4 class="effect3"></h4>

                                            </figcaption>			
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>	
                    </div>
                    <div class="clearfix"> </div>
                </div>

            </div>
        </div>
        <!---->
        <!--premium-project-->

        <!--//premium-project-->
        <!---->
        <div class="container">
            <div class="future">
                <h3 >Samples Show</h3>
                <div class="content-bottom-in">
                    <ul id="flexiselDemo1">			
                        <li><div class="project-fur">
                                <a href="#" ><img class="img-responsive" src="images/de10.jpg" alt="" /></a>
                                <div class="fur">
                                    <div class="fur1">
                                        <span class="fur-money">5000kr - 10000kr </span>
                                        <h6 class="fur-name"><a href="#">House style</a></h6>
                                        <span></span>
                                    </div>
                                    <div class="fur2">
                                        <span></span>
                                    </div>
                                </div>					
                            </div></li>
                        <li><div class="project-fur">
                                <a href="#" ><img class="img-responsive" src="images/de3.jpg" alt="" />	</a>
                                <div class="fur">
                                    <div class="fur1">
                                        <span class="fur-money">5500kr - 10000kr </span>
                                        <h6 class="fur-name"><a href="#">House style</a></h6>
                                        <span></span>
                                    </div>
                                    <div class="fur2">
                                        <span></span>
                                    </div>
                                </div>					
                            </div></li>
                        <li><div class="project-fur">
                                <a href="#" ><img class="img-responsive" src="images/de6.jpg" alt="" />	</a>
                                <div class="fur">
                                    <div class="fur1">
                                        <span class="fur-money">2000kr - 4000kr </span>
                                        <h6 class="fur-name"><a href="#">House style</a></h6>
                                        <span></span>
                                    </div>
                                    <div class="fur2">
                                        <span></span>
                                    </div>
                                </div>					
                            </div></li>
                        <li><div class="project-fur">
                                <a href="#" ><img class="img-responsive" src="images/pc3.jpg" alt="" />	</a>
                                <div class="fur">
                                    <div class="fur1">
                                        <span class="fur-money">3500kr - 6500kr </span>
                                        <h6 class="fur-name"><a href="#">House style</a></h6>
                                        <span></span>
                                    </div>
                                    <div class="fur2">
                                        <span></span>
                                    </div>
                                </div>					
                            </div></li>
                    </ul>
                    <script type="text/javascript">
                        $(window).load(function () {
                            $("#flexiselDemo1").flexisel({
                                visibleItems: 4,
                                animationSpeed: 1000,
                                autoPlay: true,
                                autoPlaySpeed: 3000,
                                pauseOnHover: true,
                                enableResponsiveBreakpoints: true,
                                responsiveBreakpoints: {
                                    portrait: {
                                        changePoint: 480,
                                        visibleItems: 1
                                    },
                                    landscape: {
                                        changePoint: 640,
                                        visibleItems: 2
                                    },
                                    tablet: {
                                        changePoint: 768,
                                        visibleItems: 3
                                    }
                                }
                            });

                        });
                    </script>
                    <script type="text/javascript" src="js/jquery.flexisel.js"></script>
                </div>
            </div>
        </div>
        <!--footer-->
        <div class="footer">
            <div class="container">
                <div class="footer-top-at">
                    <div class="col-md-3 amet-sed">
                        <h4>Our Company</h4>
                        <ul class="nav-bottom">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Mobile</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Blog</a></li>

                        </ul>	
                    </div>
                    <div class="col-md-3 amet-sed ">
                        <h4>Work With Us</h4>
                        <ul class="nav-bottom">
                            <li><a href="#">Business Development</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Feedback</a></li>	
                        </ul>	
                    </div>
                    <div class="col-md-3 amet-sed">
                        <h4>Customer Support</h4>
                        <p>Mon-Fri, 7AM-7PM </p>
                        <p>Sat-Sun, 8AM-5PM </p>
                        <p>1234567890</p>
                        <ul class="nav-bottom">
                            <li><a href="#">We Chat</a></li>
                            <li><a href="#">Frequently Asked Questions</a></li>
                            <li><a href="#">Make a Suggestion</a></li>
                        </ul>	
                    </div>

                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="col-md-4 footer-logo">
                        <h2><a href="index.php">Home rental system</a></h2>
                    </div>
                    <div class="col-md-8 footer-class">
                        <p ><a target="_blank" href="#"></a></p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!--//footer-->
    </body>
</html>
