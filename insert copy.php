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

$sql = "SELECT * FROM USER3"
$result = $con->query($sql);
if($result->num_rows > 0)
{
   while($row = $result->fetch_assoc())//doc du lieu tung dong
   {
       while($row = $row->fetch_assoc){
       echo "id: "+$row["id"]." -Fullname: ".$row["fullname"]."<br>"."USERNAME".$row["username"]."<br>"."Email".$row["email"]."<br>";
    
       }
    } 
    
}
else{
    echo "Khong co du lieu "
}

$con->close();
?>