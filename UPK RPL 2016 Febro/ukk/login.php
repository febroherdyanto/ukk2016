<?php session_start();

if(!isset($_SESSION['klinik'])){ ?>

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN ADMINISTRATOR & PEGAWAI POLIKLINIK</title>
<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css" media="screen">
<link href="asset/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="asset/css/smoothness/jquery-ui.css">
<style>
*{margin:0; padding:0}
body{background:#294072; font-family: 'Source Sans Pro', sans-serif}
.form{width:400px; margin:0 auto; background:#1C2B4A; margin-top:150px}
.header{height:44px; background:#17233B}
.header h2{height:44px; line-height:44px; color:#fff; text-align:center}
.login{padding:0 20px}
.login span.un{width:10%; text-align:center; color:#0C6; border-radius:3px 0 0 3px}
.text{background:#12192C; width:90%; border-radius:0 3px 3px 0; border:none; outline:none; color:#999;
		font-family: 'Source Sans Pro', sans-serif} 
.text,.login span.un{display:inline-block; vertical-align:top; height:40px; line-height:40px;
	background:#12192C;}

.btn{height:40px; border:none; background:#0C6; width:50%; outline:none; font-family: 'Source Sans Pro',
	sans-serif; font-size:20px; font-weight:bold; color:#eee; border-bottom:solid 3px #093;
	border-radius:3px; cursor:pointer}
ul li{height:40px; margin:15px 0; list-style:none}
.span{display:table; width:100%; font-size:14px;}
.ch{display:inline-block; width:50%; color:#CCC}
.ch a{color:#CCC; text-decoration:none}
.ch:nth-child(2){text-align:right}
/*bottom*/
.sign{width:100%; padding:0 5%; height:50px; display:table; background:#17233B}
.sign div{display:inline-block; width:50%; line-height:50px; color:#ccc; font-size:14px}
.up{text-align:right}
.up a{display:block; background:#096; text-align:center; height:35px; line-height:35px; width:50%;
	font-size:16px; text-decoration:none; color:#eee; border-bottom:solid 3px #006633; 
	border-radius:3px; font-weight:bold; margin-left:50%}
@media(max-width:480px){ .form{width:100%}}
</style>

<!--/ Pemanggilan JS -->
<script type="text/javascript" src="asset/js/jquery-2.0.0.js"></script>
<script type="text/javascript" src="asset/js/bootstrap.js"></script>
</head>
<body onload="document.FrmLogin.username.focus();">

<div class="form">
<div class="header"><h2>Sign In</h2></div>
<div class="login">
<form name="FrmLogin" method="post" action="config/ceklogin.php">
<ul>
<li>
<span class="un"><i class="fa fa-user"></i></span><input type="text" required class="text"
	placeholder="Masukkan Username Anda" name="username" />
</li>
<li>
<span class="un"><i class="fa fa-lock"></i></span><input type="password" required class="text"
	placeholder="Masukkan Password Anda" name="password" />
</li>

<li>
<span class="un"><img src="asset/captcha/captcha.php">
</li>
<li>
<span class="un"><i class="fa fa-pin"></i></span><input type="text" required class="text"
	placeholder="Masukkan karakter di atas" name="captcha" />
</li>

<li>
<input type="submit" value="LOGIN" class="btn">
</li>
</ul>
</form>

</div><br/>
<div class="sign">
<div class="need"><a href="#">UPK RPL 2016 - Febro H</a></div>
</div>
</div>

</body>
</html>

<?php }else{
	echo "<script>document.location.href='index.php?halaman=Utama';</script>";
}
?>

