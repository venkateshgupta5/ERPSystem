<?php
session_start();
include "stu_config_db.php";


if (isset($_POST["stu_reg"]))




If($_REQUEST['regno']=='' || $_REQUEST['name']=='' || $_REQUEST['email']==''|| $_REQUEST['mobile']=='' || $_REQUEST['password']=='')
{
Echo "please fill the empty field.";
}
Else
{
$strsql="INSERT INTO basicdetails(regno, name, email, mobile, password) VALUES('".$_POST['regno']."', '".$_POST['name']."', '".$_POST['email']."', '".$_POST['mobile']."' ,'".$_POST['password']."')";

//$strsql="INSERT INTO student (username,password,pname,email,mobile,post) VALUES ('avinash', 'avinash', 'avinash', 'avinash', '96','12')";
mysqli_query($link,$strsql) or die(mysqli_error($link));
echo "Successfully Registered";
}
/*if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}*/
?>