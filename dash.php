	<?php
	   session_start();
	?>
	<!DOCTYPE html>z
	<html>
	<head>
		<title>NextEv</title>
		<link rel="stylesheet" type="text/css" href="css/dash.css">
		<script type="text/javascript" src="jquery.min.js"></script>
		<script type="text/javascript" src="script.js"></script>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/css.css">
		<link rel="stylesheet" type="text/css" href="sweetalert.css">
		<script type="text/javascript" src = "sweetalert.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
	</head>
	<script type="text/javascript">
		$(document).ready( function() {
			$('.button').click( function() {
				swal({
					  title: "Are you sure?",
					  text: "Do you want to update your Database?",
					  type: "warning",
					  showCancelButton: true,
					  confirmButtonColor: "#DD6B55",
					  confirmButtonText: "Confirm",
					  cancelButtonText: "Cancel",
					  closeOnConfirm: false,
					  closeOnCancel: false
				},
				function(isConfirm){
				  if (isConfirm) {
				   swal({
				        title:"Please Wait!",
				        text: "Updating your Database!",
				        timer: 2000,
				        showConfirmButton: false
				    }, function(){
					        swal({
		                        title:"Database updated!",
		                        text:"Click ok to continue",
		                        type:"success"
		                    }, function(){
		                        window.location.href="urg.php";
		                    });
				    });
				  } else {
				    swal("Cancelled", "Your Database is safe", "error");
				  }
				});
			});
		});
	</script>
	<body>
		<div class = "header">
			<div class="logo"><span style = "font-weight: 400;">EXUN</span>CLAN<span class="mau">[DASHBOARD]</span></div>
			<div class="nav">
				<div class = "nav-opt"><a href="index.html">Home</a></div>
				<div class = "nav-opt"><a href = "login.html">Search</a></div>
				<div class = "nav-opt"><a href="signup.html">Log Out</a></div>
			</div>
			</div>

			<!-- Body Starts -->
	<div class="min">
			<div class="button">Update the Database</div>
			<div class="or">OR</div>
			<div class="linee"></div>
			<a  href="urg.php"><div class="button2">Begin with the Old</div></a>
	</div>
	</body>
	</html>