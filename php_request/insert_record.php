<?php

include 'dbconnect.php';

 $f_name = $_POST['first_name'];
 $l_name = $_POST['last_name'];
 $email = $_POST['email'];

 $Sql_Query = "insert into tbl_user (first_name,last_name,email) values ('$f_name','$l_name','$email')";

 if(mysqli_query($con,$Sql_Query)){

 echo 'Data Inserted Successfully';

 }
 else{

 echo 'Try Again';

 }
 mysqli_close($con);
?>
