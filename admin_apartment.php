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

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $date = mysqli_real_escape_string($con, $_POST['date']);
    $description = mysqli_real_escape_string($con, $_POST['description']);
    $contact_result = mysqli_query($con, "SELECT * FROM contact WHERE name = '" . $name . "' and email = '" . $email . "' and description =  '" . $description . "' and date = '" . $date . "'");
}


?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>Home Rental System Admin</title>
	
	<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
	
	<script src="js/jquery-1.5.2.min.js" type="text/javascript"></script>
	<script src="js/hideshow.js" type="text/javascript"></script>
	<script src="js/jquery.tablesorter.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.equalHeight.js"></script>
	<script type="text/javascript">
	$(document).ready(function() 
    	{ 
      	  $(".tablesorter").tablesorter(); 
   	 } 
	);
	$(document).ready(function() {

	//When page loads...
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content

	//On Click Event
	$("ul.tabs li").click(function() {

		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});

});
    </script>
    <script type="text/javascript">
    $(function(){
        $('.column').equalHeight();
    });
</script>

</head>


<body>

	<header id="header">
		<hgroup>
			<h1 class="site_title"><a href="index.php">Home Rental System</a></h1>
			<h2 class="section_title">Dashboard</h2><div class="btn_view_site"><a href="#">View Site</a></div>
		</hgroup>
	</header> <!-- end of header bar -->
	
	<section id="secondary_bar">
		<div class="user">
			<p>Admin (<a href="#">3 Messages</a>)</p>
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="index.html">Website Admin</a> <div class="breadcrumb_divider"></div> <a class="current">Dashboard</a></article>
		</div>
	</section><!-- end of secondary bar -->
	
	<aside id="sidebar" class="column">
		<form class="quick_search">
			<input type="text" value="Quick Search" onfocus="if(!this._haschanged){this.value=''};this._haschanged=true;">
		</form>
		<hr/>
		<h3>Home Type</h3>
		<ul class="toggle">
			<li class="icn_new_article"><a href="admin_apartment.php">Apartment</a></li>
			<li class="icn_edit_article"><a href="admin_student.php">Student Accomodation</a></li>
			<li class="icn_categories"><a href="admin_meeting.php">Meeting Room</a></li>
			<li class="icn_tags"><a href="admin_daily.php">Daily Room</a></li>
			<li class="icn_edit_article"><a href="admin_parking.php">Parking</a></li>
		</ul>
		<h3>Renter</h3>
		<ul class="toggle">
			<li class="icn_view_users"><a href='#view_renter'>View Renter</a></li>
		</ul>
		<h3>Admin</h3>
		<ul class="toggle">
			
			<li class="icn_jump_back"><a href="index.php">Logout</a></li>
		</ul>
		
		<footer>
			<hr />
			<p><strong>Copyright &copy; 2016 Home Rental System Admin</strong></p>
			<p>Website by <a href="#">Group 9</a></p>
		</footer>
	</aside><!-- end of sidebar -->
	
	<section id="main" class="column">
		
		<h4 class="alert_info">Home Rental System Admin</h4>
		

		<article class="module width_3_quarter">
		<header><h3 class="tabs_involved" id='apartment'>Apartment Monitor</h3></header>

		<div class="tab_container">
			<div id="tab1" class="tab_content">
			<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr> 
   					<th></th> 
    				<th>Area</th> 
    				<th>Catefory</th> 
    				<th>Size</th> 
    				<th>Price</th>

				</tr> 
			</thead> 
			<tbody>
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
                           //$state = $sql_arr['state'];
                           echo "<tr><td>$id</td><td>$area</td><td>$category</td><td>$size</td><td>$price</td></tr>";
                       }
                ?>
				
			</tbody> 
			</table>
			</div><!-- end of #tab1 -->
			
		</div><!-- end of .tab_container -->
		
		</article><!-- end of content manager article -->
		
		<article class="module width_quarter">
			<header><h3>Messages</h3></header>
			<div class="message_list">
				<?php
                    
                    $sql = mysql_query("select * from contact");
                    $datarow = mysql_num_rows($sql); 
                       for($i=0;$i<$datarow;$i++){
                           $sql_arr = mysql_fetch_assoc($sql);
                           $name = $sql_arr['name'];
                           $email = $sql_arr['email'];
                           $dates = $sql_arr['dates'];
                           $description = $sql_arr['description'];
                          
                           echo "Name: $name<br>Email: $email<br>Date: $dates<br>Description: $description<hr/>";
                       }
                ?>
			</div>
			<footer>
				
			</footer>
		</article><!-- end of messages article -->
		
		<div class="clear"></div>
		
		
		<div class="spacer"></div>

		<article class="module width_full" id = 'view_renter'>
			<header><h3>Renter Detail</h3></header>
				<div class="module_content">
						<fieldset >
							<label>Detail</label>
								<table class="tablesorter" cellspacing="0"> 
									<thead> 
										<tr> 
						   					<th></th> 
						    				<th>name</th> 
						    				<th>email</th> 
					
										</tr> 
									</thead> 
									<tbody>
										<?php
						                    require 'conn.php';
						                    $sql = mysql_query("select * from users");
						                    $datarow = mysql_num_rows($sql); 
						                       for($i=0;$i<$datarow;$i++){
						                           $sql_arr = mysql_fetch_assoc($sql);
						                           $id = $sql_arr['id'];
						                           $name = $sql_arr['name'];
						                           $email = $sql_arr['email'];
						                           
						                           echo "<tr><td>$id</td><td>$name</td><td>$email</td></tr>";
						                       }
						                ?>
										
									</tbody> 
								</table>
						</fieldset>
				</div>		
		</article><!-- end of post new article -->
	</section>

</body>

</html>