<!DOCTYPE html>
<html>
<head>
    <title> Faculty Login</title>
    <style>
        div.container
        {
            width: 100%;
            border : 1px solid gray;
        }
        header, footer {
            padding: 1em;
            color: white;
            background-color: black;
            clear: left;
            text-align: center;
        }

        nav
        {
            float: left;
            max-width: 260px;
            margin: 0px;
            padding: 1em;

        }

        article
        {
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
    <h1> FACULTY LOGIN </h1></header>

    <article>
        <form action="connectf.php" method="post">

            Name : <input type="text" name="fname"> <br>
            Password : <input type="password" name="fpass"> <br>
            <input type="submit" name="flogin" value="LOG IN">
        </form>
        <p> <a href="#"> New Faculty! Not yet registered? Register now </a> </p>
    </article>
    <footer>Copyright &copy; ERP solutions</footer>
</div>

</body>
</html>