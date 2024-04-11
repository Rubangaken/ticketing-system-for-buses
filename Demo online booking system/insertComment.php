<?php
include 'connect.php';

$Name =$_POST['name'];
$Email =$_POST['email'];
$CustomerFeedback =$_POST['customerFeedback'];

$insertquery = "INSERT INTO message_tbl(names, email, customerFeedback) VALUES('$Name', '$Email', '$CustomerFeedback')";

$insertdata = $connect->query($insertquery);

if ($insertdata == true) {

    echo "data inserted successfully";
}else{

    echo "inserting data failed";
};

?>