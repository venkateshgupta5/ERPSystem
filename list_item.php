<!DOCTYPE html>
<html>
<head>
<?php
  session_start();

  $link = mysqli_connect('localhost','root','root');
  $database = mysqli_select_db($link,'student');

  if (!$link) {
    die("Connection failed: " . $link);
}
//for student
$result = mysqli_query($link,"SELECT name, email, mobile FROM basicdetails");

echo "<h2>For student information:-</h2>";
echo "<table border='1'>
<tr>
<th>name</th>
<th>email</th>
<th>mobile</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['mobile'] . "</td>";
echo "</tr>";
}
echo"</table>";


mysqli_close($link);
?>

