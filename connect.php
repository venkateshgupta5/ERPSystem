  <?php
  session_start();

  $link = mysqli_connect('localhost','root','root');
  $database = mysqli_select_db($link,'Login Info');

  $user = $_POST['name'];
  $pass = $_POST['pass'];

  if (isset($_POST["login"]))
   {
    if($_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
    {
      $query = "SELECT * FROM logininfo WHERE Name = '". mysqli_real_escape_string($link,$user) ."' AND Password = '". mysqli_real_escape_string($link,$pass) ."'" ;
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