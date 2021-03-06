<!DOCTYPE html>
<html>
<head>
    <title> Student Registration </title>

<style>
#modalDialog {
	position: fixed;
	font-family: Arial, Helvetica, sans-serif;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	background: rgba(0,0,0,0.8);
	z-index: 99999;
	opacity:0;
	-webkit-transition: opacity 400ms ease-in;
	-moz-transition: opacity 400ms ease-in;
	transition: opacity 400ms ease-in;
	pointer-events: none;
}


.modalDialog:target {
	opacity:1;
	pointer-events: auto;
}

.modalDialog > div {
	width: 400px;
	position: relative;
	margin: 10% auto;
	padding: 5px 20px 13px 20px;
	border-radius: 10px;
	background: #fff;
	background: -moz-linear-gradient(#fff, #999);
	background: -webkit-linear-gradient(#fff, #999);
	background: -o-linear-gradient(#fff, #999);
}



.close {
	background: #606061;
	color: #FFFFFF;
	line-height: 25px;
	position: absolute;
	right: -12px;
	text-align: center;
	top: -10px;
	width: 24px;
	text-decoration: none;
	font-weight: bold;
	-webkit-border-radius: 12px;
	-moz-border-radius: 12px;
	border-radius: 12px;
	-moz-box-shadow: 1px 1px 3px #000;
	-webkit-box-shadow: 1px 1px 3px #000;
	box-shadow: 1px 1px 3px #000;
}

.close:hover { background: #00d9ff; }

/*For our close button we set the ba 
</style>


</head>
<body>
<div id="openmodal" class="modalDialog">
    <div>
    <a href="fac_login_page.php" title="Close" class="close">X</a>
		<h2>Registration Details </h2>
		<form name="reg_form" action="fac_upload_2db.php" method="post" onsubmit="return validateregForm()">
			<input type="integer" name="regno" placeholder="Reg Number"> <br>
			<input type="text" name="name" placeholder="Name"> <br>
			<input type="text" name="email" placeholder="E-Mail ID"> <br>
			<input type="integer" name="mobile" placeholder="Mobile Number"> <br>
			<input type="password" name="password" placeholder="Password"> <br>

			<p> <input type="submit" name="f_reg_submit" value="Register"> </p>
		</form>
		
	</div>
</div>
<script src="validateregdetails.js"></script>
</body>
</html>
