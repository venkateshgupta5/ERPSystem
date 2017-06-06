
<?php
  session_start();
 
  $link = mysqli_connect('localhost','root','root');
  $database = mysqli_select_db($link,'student');

  if (!$link) {
    die("Connection failed: " . $link);
}
//for student
$result = mysqli_query($link,"SELECT regno FROM attendance");

echo "<h2> Attendance Sheet </h2>";
echo "<table border='1'>
<tr>

<th>regno</th>
<th>status</th>
</tr>";
echo "<form method='post' action='upload_att.php'>"; 
while($row = mysqli_fetch_array($result))
{

echo "<tr>";

echo "<td>" . $row['regno'] . "</td>";      
echo "<td> <input type = 'checkbox' value='".$row['regno'] ."'name = 'checkbox[]'> </td>";
echo "<input type ='hidden' value='".$row['regno'] ." name='foo'>"; 
echo "</tr>";
}
echo"</table>"; 


echo "<input type='submit' name='submit' value='SAVE'>";  
echo "</form>";
?>
