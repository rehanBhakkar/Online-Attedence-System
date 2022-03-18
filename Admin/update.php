<?php

$dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "attendance system";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>update page</title>
</head>
<body>
	<form action="update_user.php"method="post" accept-charset="utf-8">
	<?php
$email=$_GET['id'];
$select=$conn->query("SELECT * from users where email='$email'");
$row  = mysqli_fetch_array($select);
	?>
<input type="text" class="form-control w-50 ml-5" name="fname"value="<?php  echo $row['fname'] ?>"><br>
<input type="text" class="form-control  w-50  ml-5 " name="lname"value="<?php  echo $row['lname'] ?>"><br>
<input type="text" class="form-control  w-50  ml-5" name="roll_no"value="<?php  echo $row['roll_no'] ?>"><br>
<input type="text" class="form-control  w-50  ml-5" name="email"value="<?php  echo $row['email'] ?>"><br>
<input type="text" class="form-control  w-50  ml-5" name="age_y"value="<?php  echo $row['age_y'] ?>"><br>
<input type="text" class="form-control  w-50  ml-5" name="age_m"value="<?php  echo $row['age_m'] ?>"><br>
<input type="text" class="form-control  w-50  ml-5" name="password1"value="<?php  echo $row['password1'] ?>"><br>
<input type="text" class="form-control  w-50  ml-5" name="date_time"value="<?php  echo $row['date_time'] ?>"><br>
<button type="submit"name="submit"class="btn btn-success">update</button>
</form>
</body>
</html>