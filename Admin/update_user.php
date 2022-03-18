<?php

$dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "attendance system";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
?>
<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$roll_no=$_POST['roll_no'];
$email=$_POST['email'];
$age_y=$_POST['age_y'];
$age_m=$_POST['age_m'];
$password1=$_POST['password1'];
$date_time=$_POST['date_time'];



$update=$conn->query("UPDATE users SET email='$email',fname='$fname',lname='$lname',roll_no='$roll_no',age_y='$age_y',age_m='$age_m',password1='$password1',date_time='$date_time' WHERE email='$email'");
  if  ($update){
        ?> <script type="text/javascript">
                 alert("updated Successfully");
                 window.location.href='user_view.php';
            </script>
             <?php
    }else{
        ?> <script type="text/javascript">
                 alert("User not updated");
            </script>
             <?php
    }


?>