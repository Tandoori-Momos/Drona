<?php
	session_start();
	error_reporting(0);

	$host = "127.0.0.1";
    $username = "root";
    $pass = "";
    $db = "classes";

    $conn = new mysqli($host,$username,$pass,$db);

  if (isset($_POST['comment'])) {

    $comment_data = $_POST['comment'];
    $user_data = ucfirst($_SESSION['fname']) . " " . ucfirst($_SESSION['lname']);
    $time_data = date("h:ia");

    if (ctype_space($comment_data)) {
  		die('Error');
  } else {

    $ins = "INSERT INTO feed(user,time,comment)
    VALUES('$user_data','$comment_data','$time_data')";

 	if ($conn->query($ins)) {
 		echo "";
 	} else {
 		die("Error" . $conn->error);
 	}


  }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="message.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
	
</head>
<body>
<div class = "main">
<div class = "header">
		
		<div class="nav">
			<div class = "nav-opt"><a href="dash.php">&larr; Back to Dashboard</a></div>
		</div>

	</div>

	<div class = "text-pos">
		<div class = "heading">Message Apollo Hospital!</div>
		<div class = "text">Get started by contacting an institution below!</div>
	</div>
	<div class = "box">
		<div class = "upper"><span>Apollo  Hospital </span></div>
		<br><br><br><br><br><br>
	
	<?php
		 $request = "SELECT * FROM feed LIMIT 50";

      $res = $conn->query($request);

      if ($res->num_rows > 0) {
        while ($row = $res->fetch_assoc()) {

          $comment_final = $row["time"];
          
          $data = "<div class = 'message-box'><div class = 'triangle'></div>	
			<div class = 'message-content'>". $comment_final ." </div></div>";

      echo $data . "<br>";



        }
      }
	?>
		
		<form method="post">
		<input type = "text" name = "comment" Placeholder = "Enter a message...">
		</form>

	</div>	
</div>
</body>
</html>