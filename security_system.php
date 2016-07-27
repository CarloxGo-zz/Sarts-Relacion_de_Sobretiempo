<?php
ini_set("session.use_only_cookies","1");
ini_set("session.use_trans_sid","0");
session_start();
session_set_cookie_params(0, "/", $_SERVER["HTTP_HOST"], 0);

if($_SESSION["autentificado"] != "SI")	{
    header("Location: sesion.php");
	session_name("conex_user");
	exit();
}else{
    $fechaGuardada = $_SESSION["ultimoacceso"];
    $ahora = date("Y-n-j H:i:s");
    $tiempo_transcurrido = (strtotime($ahora)-strtotime($fechaGuardada));
    if($tiempo_transcurrido >= 2100){
    	session_destroy();
		header("Location: sesion.php");
    }else{
    	$_SESSION["ultimoacceso"] = $ahora;
	}
}
?>