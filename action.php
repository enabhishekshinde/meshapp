<?php
$serverName="localhost";
$userName="root";
$passward="";
$dbName="mesh";
$con=mysqli_connect($serverName, $userName,$passward,$dbName);
if(!$con){
    echo "not connected";
}
// defing variable
$first=$_POST["First"];
$last=$_POST["Last"];
$start=$_POST["Start"];
$end=$_POST["End"];
$amount=$_POST["Amount"];
$reamian=$_POST["Reamain"];

$sql="INSERT INTO `customerdata`(`FirstName`, `LastName`, `StartDate`, `EndDate`, `Amount`, `Reamaining`) VALUES ('[$first]','[$last]','[$start]','[$end]','[$amount]','[$reamian]')";
$result=mysqli_query($con , $sql);
if($result){
    echo "data sibmitted";
}else{
    echo "data not submitted";
}


?>