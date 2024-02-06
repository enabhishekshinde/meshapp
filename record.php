<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
h2{
  text-align:center;
  color:#588c7e;
}
  </style>
</head>
<body>
  <h2>TRANSACTION</h2>
  <table>
     <tr>
    <th>firstname</th>
    <th>lastname</th>
    <th>StartDate</th>
    <th>EndDate</th>
    <th>Amount</th>
    <th>Reamaining</th>
   </tr> 
<?php
$conn=mysqli_connect("localhost","root","","mesh");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql ="select FirstName,LastName,StartDate,EndDate,Amount,Reamaining from customerdata";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["FirstName"]."<td>".$row["LastName"]."<td>".$row["StartDate"]."<td>".$row["EndDate"]."<td>".$row["Amount"]."<td>".$row["Reamaining"]."<td><td>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>
</table>
</body>
</html>