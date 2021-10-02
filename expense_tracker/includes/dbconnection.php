<!-- This is for connection between database and source program -->
<?php
$con=mysqli_connect("localhost", "root", "", "detsdb");
if(mysqli_connect_errno()){
echo "Connection Fail".mysqli_connect_error();
}

  ?>
