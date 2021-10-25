<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<title>Exam Management</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Validate Login & Register Forms Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Meta tag Keywords -->

	<!-- css files -->
	<link rel="stylesheet" href="web12/css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="web12/css/font-awesome.min.css" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/web12/css?family=Magra:400,700&amp;subset=latin-ext" rel="stylesheet">
	<!-- //web-fonts -->
</head>

<body>
<?php
include 'connect.php';
mysqli_select_db($conn,"exammanagemnet");
session_start();
?>
	<!-- title -->
	<h1>
		Exam Management
	</h1>
	<!-- //title -->

	<!-- content -->
	<div class="container-agille">
		<div class="formBox level-login">
			<div class="box loginBox">
				<h3 align="center">Login </h3>
				<form class="form" action="#" method="post">
					<div class="f_row-2">
						<input type="text" class="input-field" placeholder="Staff ID" name="txtstaffid" required>
					</div>
					<div class="f_row-2 last">
						<input type="password" name="txtpassword" placeholder="Password" class="input-field" required>
					</div>
					<input class="submit-w3" type="submit" value="Login" name="btnlogin"><br>
					<a href="stafflogin.php" style="color:white"><br><u>Staff Login<u></a> 
					
				</form>
			</div>
			
		</div>
	</div>
	<!-- //content -->

	<!-- copyright -->
	<div class="footer-w3ls">
		
	</div>
	<!-- //copyright -->


	<!-- js files -->
	<!-- Jquery -->
	<script src="web12/js/jquery-2.2.3.min.js"></script>
	<!-- //Jquery -->
	<!-- input fields js -->
	<script src="web12/js/input-field.js"></script>
	<!-- //input fields js -->

	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->
	<!-- //js files -->

 <?php

 if(isset($_POST['btnlogin']))
{
  if( !empty($_POST['txtstaffid']) && !empty($_POST['txtpassword']))
			   {
				   $qry="select * from staff where staffid='{$_POST['txtstaffid']}' and password='{$_POST['txtpassword']}'";
				   $res=$conn->query($qry);
                   if($res->num_rows>0)
                   {
                       $rest=$res->fetch_assoc();
                       $_SESSION["staffid"]=$rest["staffid"];
                       $_SESSION["staffid"]=$_POST["txtstaffid"];
                       header('location:staff homepage.php');
                   }
                   else{
                    echo "<font color='black'>Invalid username and password</font>";
                   }
				  
	           }
              else
			   {
				   echo "<font color='black'>Invalid username and password</font>";
			   }
}

?>


</body>

</html>