<! DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>Direction of Engine 4</title>
</head>

    <body>

<?php 
/* DB Connection */
$db_con =  new mysqli('localhost:3306','root', '', 'robotarmtask1') or Die("\n Unable to connect:"  . mysqli_error());

/* Fetching the data from the DB */
$sql = "SELECT * FROM fullcontrolpanelmobile WHERE EngineNum = '4'";
$result = mysqli_query($db_con,$sql);
$row = mysqli_fetch_array($result, MYSQLI_BOTH);       
print($row[3]);
?>

</body>
</html>