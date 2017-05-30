<!DOCTYPE html>
<html>
<head>
<style>
div.container {
    width: 100%;
    border: 1px solid gray;
}

header, footer {
    padding: 1em;
    color: white;
    background-color: black;
    clear: left;
    text-align: center;
}

nav {
    float: left;
    max-width: 260px;
    margin: 0;
    padding: 1em;
}

article {
	padding: 100px;
    margin-left: 170px;
    height: 800px; 
    border-left: 1px solid gray;
    overflow: hidden;
}
</style>
</head>
<body>

<div class="container">

<header>
   <h1>STUDENT LOGIN</h1>
</header>
  
<article>
<form name ="myForm" action="stu_con2db.php" method="post" onsubmit="return validateForm()" >
<P> <input type="integer" name="s_regno"  placeholder="Registration Number"></P>
<P><input type="password" name="s_password" placeholder="Password"></P>
<p> <img src="captcha.php" /><br> </p>
<p> Enter the captcha you see </p>
<p> <input name="captcha" type="text"> </p>
<P> <input type="submit" name="s_login" value="Log In"> </P>

</form>

<a href="stu_mod_4reg.php"> New Student! Not yet Registered? Register Now </a>



</article>
<script src="stu_form_check.js">

</script>

<footer>Copyright &copy; ERP solutions</footer>

</div>

</body>
</html>
