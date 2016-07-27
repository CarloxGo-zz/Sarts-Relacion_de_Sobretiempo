<?php
session_start();
if ($_SESSION["autentificado"] != "SI") {
    header("Location: sesion.php");
    exit();
}
?>
<HTML>
<HEAD>
<TITLE>Eliminar Datos de trabajador</TITLE>
</head>
<body>
<?php

if (($_POST[no]) or ($_POST[regresar]))
{

$respuesta1="elim_traba.php";
echo "<meta HTTP-EQUIV='refresh' content='1;url=$respuesta1'>";

}else{

$dbh = mysql_connect("localhost", "wwwsart_root", "M4X1mu5") or die("No se pudo conectar a la base de datos".mysql_error());
mysql_select_db("wwwsart_sarts",$dbh);

$sSQL="update traba Set condicion='2' Where ci='$cedul'";
$respuesta2="elim_traba_x_user_exitosa.html";
echo "<meta HTTP-EQUIV='refresh' content='1;url=$respuesta2'>";

}

mysql_query($sSQL);
?>
</BODY>
</HTML>