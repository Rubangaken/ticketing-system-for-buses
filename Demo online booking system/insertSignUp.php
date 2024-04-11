<?php
require_once 'connect.php';


$userName  = $_POST['userName'];
$Name  = $_POST['Name'];
$contact  = $_POST['contact'];
$address  = $_POST['address'];



$insert = "INSERT INTO customerDetails_tbl(`user_name`,`Name`,`contact`, `address`) VALUES('$userName','$Name','$contact','$address')";
$insertData = $connect->query($insert);
if ($insertData == true) {
  echo "inserting data Successfull";
}else{
    echo  "inserting data failed";
}

?>