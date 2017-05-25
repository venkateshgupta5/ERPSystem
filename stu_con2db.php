  <?php
  session_start();

  include "stu_config_db.php";

  $regno= $_POST['s_regno'];
  $password = $_POST['s_password'];

  if (isset($_POST["s_login"]))
   {
    if($_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
      {
     $query = "SELECT * FROM basicdetails WHERE regno = '". mysqli_real_escape_string($link,$regno) ."' AND password = '". mysqli_real_escape_string($link,$password) ."'" ;
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
           die("Wrong Captcha Entered");
                }
    }
   else
   {
       echo "Empty input Login In"; // empty $_POST["submit2"]
   }