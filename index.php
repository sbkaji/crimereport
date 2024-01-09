
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crimereport";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//echo "Connected successfully";
?>

<html>
<head>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #DDD;
}

tr:hover {background-color: #D6EEEE;}
</style>
</head>
<body>
<table>
  <tr>
    <th>Crime Type</th>
    <th>Age</th>
    <th>Date</th>
    <th>Crime By Male</th>
    <th>Crime By Female</th>
    <th>Crime City</th>
    <th>Radius</th>
  </tr>
  
<?php

$sql = "SELECT * FROM crime";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      ?>


  <tr>
    <td><?php echo $row['crimetype'];?></td>
    <td><?php echo $row['agegroup'];?></td>
    <td><?php echo $row['date'];?></td>
    <td><?php echo $row['cmbym'];?></td>
    <td><?php echo $row['cmbyf'];?></td>
    <td><?php echo $row['crimecity'];?></td>
    <td><?php echo $row['radius'];?></td>
  </tr>
  <tr>
    <?php } ?>
</tr> 
</table>

<?php

    

} else {
  echo "0 results";
}
$conn->close();

?>
