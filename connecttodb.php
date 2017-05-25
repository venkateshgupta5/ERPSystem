<?php
session_start();
include "link2studentdatabse.php";


if (isset($_POST["regsubmit"]))




If($_REQUEST['regeno']=='' || $_REQUEST['regname']=='' || $_REQUEST['regemail']==''|| $_REQUEST['regmob']=='' || $_REQUEST['regpass']=='')
{
Echo "please fill the empty field.";
}
Else
{
$strsql="INSERT INTO logininfo(regno, Name, email, mobile, Password) VALUES('".$_POST['regeno']."', '".$_POST['regname']."', '".$_POST['regemail']."', '".$_POST['regmob']."' ,'".$_POST['regpass']."')";

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