<?php

include "stu_config_db.php";
if(isset($_POST['submit'])) 
{
	print_r($_POST['checkbox']); 
   $arrlength = count($_POST['checkbox']); foreach
    for ($i = 0; $i <= arrlength; $i++) 
    {

      if(isset($_explode['checkbox[$i]']))
      {
      mysqli_query($link,"insert into attendance(28May) value ('1')"); 
      }
      else
      {
         mysqli_query($link,"insert into attendance(28May) value ('0')"); 
      } 
   }   
echo'<script>alert("Saved Successfully")</script>';  
}   
?> 