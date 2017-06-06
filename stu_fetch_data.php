<?php


  $conn = mysqli_connect($localhost, $root, $root, $student);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT regno, name, email FROM Student";
$result = mysqli_query($conn, $sql);
?>

   <table border="1">
  <thead>
    <tr>
    <th>Reg-No</th>
      <th>Name</th>
      <th>Email</th>
      <th>Mobile</th>
    </tr>
    <br>
  </thead>
  <tbody
   
   <?php
   if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      ?php
        <tr> echo $row["id"] <\tr>
        " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";

   }
   
   echo 
   "Registered Student <br></br>";
   
   mysql_close($conn);

?>