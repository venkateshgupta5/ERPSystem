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
<form action="connect.php" method="post">
Name: <input type="text" name="name"><br>
Password: <input type="password" name="pass"><br>
<input type="submit" name="login" value="Log In">
</form>

<a href="openmodal.php"> New Student! Not yet Registered? Register Now </a>



</article>

<footer>Copyright &copy; ERP solutions</footer>

</div>

</body>
</html>
