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

if(isset($_GET['id'])){
    $id = $_GET['id']; 
    
    $sql = "DELETE FROM USER3 WHERE id = $id";
     
     if($con->query($sql)===TRUE)
     {
     echo "ban ghi moi da xoa";
     }
     else
     {
         echo "Loi: ".$con->error;
     }
 }
$con->close();
?>