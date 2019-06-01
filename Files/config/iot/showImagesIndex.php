<?php
/*$mysqli = new mysqli("localhost", "root", "", "arq_db") or die($mysqli->connect_error);
$table = 'teste';
$result = $mysqli->query("SELECT * FROM $table") or die($mysqli->error);

while($data = $result->fetch_assoc()){
  echo "<h2>{$data['freguesia']}</h2>";
  echo "<img src='{$data['foto']}' width='40%' height='40%'>";

}*/

$hostname = "localhost";
$dbname = "arq_db";
$username = "root";
$password= "";

$conn = mysqli_connect($hostname, $username, $password, $dbname);
$sql = "select * from teste";
$result = mysqli_query($conn, $sql);
while ($row=mysqli_fetch_array($result)) {
  echo "<td>";
  echo "<p>".$row['freguesia']."</p>";
  echo "</td>";
  echo "<td>";
  echo '<img src="data:image/jpeg;base64,'.base64_encode($row['foto']).'"height ="100%" width="100%"/>';
  echo "</td>";
}

?>
