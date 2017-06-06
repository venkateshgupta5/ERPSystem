<?php
include('stu_config_db.php');

if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  
  
$sql = "SELECT * FROM Student ";  
$rs_result = mysqli_query($link, $sql); 
?>

<?php  
while ($row = mysqli_fetch_assoc($rs_result)) {
?>  
            <tr>  
            <td><?php echo $row["regno"]; ?></td>  
            <td><?php echo $row["name"]; ?></td>  
            <td><?php echo $row["email"]; ?></td>  
            </tr>  
<?php  
};  
?>