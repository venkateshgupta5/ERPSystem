<?php
session_start();

$link = mysqli_connect('localhost','root','root');
$database = mysqli_select_db($link,'facultylogin');

$user = $_POST['fname'];
$pass = $_POST['fpass'];

if (isset($_POST["flogin"]))
 {
   $query = "SELECT * FROM faculty WHERE Name = '". mysqli_real_escape_string($link,$user) ."' AND Password = '". mysqli_real_escape_string($link,$pass) ."'" ;
     $result = mysqli_query($link,$query);
     if (mysqli_num_rows($result) == 1) 
      {
        echo "pass"; //Pass, do something
      } 
       else 
      {
        echo "fail"; //Fail
      }

 }
 else
 {
     echo "Empty input Login In"; // empty $_POST["submit2"]
 }