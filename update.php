<?php
//khai bao bien
$sv = "localhost";
$u="id16290530_000webhostnhucut";
$p="123456789!!aA";
$db = "id16290530_phpanlol";
//////////////////////////////// tao ket noi
$con = new mysqli($sv,$u,$p,$db);
if($con->connect_error)
{
    die("Loi ket noi: ".$con->connect_error);
}

if(isset($_GET['id'])&&isset($_GET['fullname'])&&isset($_GET['username'])&&isset($_GET['email'])){
    $id = $_GET['id'];
    $fullname = $_GET['fullname'];//GET[truong1] la nhan gia tri cua truong 1
    $username = $_GET['username'];
    $email = $_GET['email'];
    $sql = "UPDATE USER3 SET fullname ='$fullname', username ='$username', email ='$email' WHERE id = '$id'"
     if($con->query($sql)===TRUE)
     {
     echo "ban ghi moi da duoc sua";
     }
     else
     {
         echo "Loi: ".$con->error;
     }
 }
$con->close();
?>