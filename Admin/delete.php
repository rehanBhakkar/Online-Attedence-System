<?php

$dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "attendance system";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 $email=$_GET['id'];
 $query=$conn->query("DELETE from users where email='$email'");
 if  ($query){
        ?> <script type="text/javascript">
                 alert("deleted Successfully");
                 window.location.href='user_view.php';
            </script>
             <?php
    }else{
        ?> <script type="text/javascript">
                 alert("data not deleted");
            </script>
             <?php
    }
?>