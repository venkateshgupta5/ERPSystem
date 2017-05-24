<!DOCTYPE html>
<html>
<head>

   
   
   
	<title> ERP </title>

	<style type="text/css">
		{ * margin: 0; padding: 0; }

		body
		{
			font-family: arial;
			background-color: #ebebeb;
		}



		#header
		{
			background-color: black;
			height: 100px;
			width: 100%;
		}

		
		#logoArea
		{
			height: 100px;
			width: 270px;
			float : left;
			background-image: url('logo.png');
			background-size: cover;
		}

		.container
		{
			width: auto;
			height: 960px;
			margin: 0 auto;
		}

		#navArea
		{
			width: 100px;
			height: 50px;
			float: right;
			padding-top: 30px;
		}

		#nav
		{
			list-style: none;
			

		}

		#nav a
		{
			color: white;
			text-decoration: none;
		}

		#nav li
		{
			float: right;
			margin: 20px;
			background-color: #252525;
			padding: 20px;
			border:1px solid silver;
			border-radius: 5px;
		}

		#nav li:hover
		{
			background-color: gray;
		}

		.page
		{
			background-color: white;
			padding: 20px;

		}

		#footer
		{
			background-color: black;
			height: 40px;
			width: 100%;
			color: white;
		}
	</style>
</head>
<body>

	<div id="header">
		<div class ="container">
			<div id="logoArea"> </div>
			<div id="navArea"></div>
			<ul id="nav">
				<a href="studentlogin.php"> <li> STUDENT LOGIN </li> </a>
				<a href="facultylogin.php"> <li> FACULTY LOGIN </li> </a>
			</ul>
		</div>
	</div>

	<div id="mainArea">
		<div class="container page">
			<P> Welcome </P> 
		</div>
	</div>



	<div id="footer">
		<div class="container page"> All Rights Reserved 2017-18 </div>

	</div>

</body>
</html>

