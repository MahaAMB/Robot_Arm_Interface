<! DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>Engine 1</title>
</head>

    <body>

<?php 
/* DB Connection */
$db_con =  new mysqli('localhost:3306','root', '', 'robotarmtask1') or Die("\n Unable to connect:"  . mysqli_error());

/* Fetching the data from the DB */
$sql = "SELECT * FROM enginestable WHERE EngineNum = '1'";
$result = mysqli_query($db_con,$sql);
$row = mysqli_fetch_array($result, MYSQLI_BOTH);
        
print("Engine 1's Degree= " .$row[2]);
?>

</body>
</html>