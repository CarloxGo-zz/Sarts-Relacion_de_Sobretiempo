<?php
include ("security_system.php");
ini_set('error_reporting',0);
?>
<HTML>
<HEAD>
<TITLE>Incluir Usuario en la BD. Sistema ARTS Online</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<link rel="stylesheet" href="main.css" type="text/css" http-equiv="Window-target" content="_top"/>
<style type="text/css">
<!--
.Estilo27 {color: #009900}
.Estilo28 {color: #0000FF}
.Estilo29 {color: #FFFFFF}
.Estilo30 {font-size: 12px; text-decoration: none; font-family: tahoma;}
a:link {
	color: #333333;
}
a:visited {
	color: #666666;
}
.Estilo31 {font-size: 16px}
-->
</style>
<script type="text/javascript" language="JavaScript1.2" src="stmenu.js"></script>
</HEAD>
<BODY BGCOLOR=#FFFFFF background="images/bgb.gif" LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0 onLoad="MM_preloadImages('images/18-1.gif','images/8-1.gif')" tracingsrc="images/-downdis.gif" tracingopacity="100" oncontextmenu="return false">
<td colspan="2" valign="middle"><div align="center"> 
       <table width="778" border="0" cellspacing="0" cellpadding="0">
  <tr>
	<td align="right" background="images/index_01.gif"><img src="images/index_03.gif" width=59 height=34 alt=""><a href="inicio.html"><img src="images/index_ini.gif" alt="" width=82 height=34 border="0"></a><img src="images/index_faq.GIF" width=82 height=34 alt=""><img src="images/index_link.gif" width=89 height=34 alt=""><a href="finalizar_sesion.php"><img src="images/index_sarts.gif" alt="" width=71 height=34 border="0"></a><img src="images/index_contac.GIF" width=85 height=34 alt=""></td>
  </tr>
</table>
<table width="778" border="0" cellspacing="0" cellpadding="0">
  <tr>
	<td> <div align="right"> 
        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="778" height="174">
          <param name="movie" value="SartsFlash-01.swf">
          <param name="quality" value="high">
        <embed src="SartsFlash-01.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="778" height="174"></embed></object>
        <font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif"></font></div></td>
  </tr>
</table>
<table width="778" border="0" cellspacing="0" cellpadding="0">
  <tr>
	<td width="450" background="images/index_23.gif"><img src="images/index_22.gif" width=174 height=35 alt=""></td>
	<td background="images/index_27.gif"><img src="images/index_25.jpg" width=96 height=35 alt=""><img src="images/index_soft.GIF" width=92 height=35 alt=""></td>
  </tr>
</table>
<table width="778" border="0" cellspacing="0" cellpadding="0" bgcolor="#FAFAFA">
  <tr>
	<td width="481" align="right" bgcolor="#FFFFFF"> 
	  <table width="535" border="0" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bgcolor="#FFFFFF">
		<tr>
		  
		</tr>
	  </table>
	  <table width="535" border="0" cellspacing="0" cellpadding="0">
		<tr> 
		  <td width="5">&nbsp;</td>
		  <td width="23" align="center" bgcolor="#FFFFFF">&nbsp; </td>
		  <td width="507" valign="top" class="bg_product"> 
			<table width="526" border="0" cellspacing="0" cellpadding="0">
                  <tr> 
				<td width="508" bgcolor="#FFFFFF" class="t12b"><table width="101%" border="0" cellspacing="0" cellpadding="0">
                        <tr> 
                          <td height="471" align="center" bgcolor="#FFFFFF">
<p>
<?phpphp
echo '<table border=1>';
echo '<tr><td>CI</td><td>'.$ci=$_POST["ci"].'</td></tr>';
echo '<tr><td>Nombres</td><td>'.$nombres=$_POST["nombres"].'</td></tr>';
echo '<tr><td>Apellidos</td><td>'.$apellidos=$_POST["apellidos"].'</td></tr>';
echo '<tr><td>E-mail</td><td>'.$email=$_POST["email"].'</td></tr>';
echo '<tr><td>User</td><td>'.$user=$_POST["user"].'</td></tr>';
echo '<tr><td>Estructura</td><td>'.$estructura=$_POST["estructura"].'</td></tr>';

$pass=$_POST["pwd"];

include ("includes/bdkey.php");

$result = mysql_query("select * from estructura where estruc='$estructura'");

while ($row=mysql_fetch_array($result))
{
echo '<tr><td>Nivel</td><td>'.$nivel=$row[nivel].'</td></tr>';
}

echo '</table>';

//$sql ="INSERT INTO usuarios (ci,nombres,apellidos,email,user,pass,estructura,nivel) VALUES('$ci','$nombres','$apellidos','$email','$user','$pass','$estructura','$nivel')";

//mysql_close($dbh);
echo " Estruc = ".$estructura." // ";

$result2 = mysql_query("SELECT * FROM estructura WHERE estruc='$estructura'");

while ($row=mysql_fetch_array($result2))
{
echo " Estructura bd = ".$row[estruc]." // ";
echo " Id = ".$row[id_estructura]." // ";
echo " Nivel = ".$row[nivel]." // ";
echo " Zona = ".$row[zona]." // ";
}
?>
</p>
				<div align="center">
						<div align="center">
                                <h1 class="Estilo27"><font size="+2">Sus datos 
                                  fueron guardados con &eacute;xito!!! </font></h1>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
</div>
                            </div>
					        <div align="center">
					          <p class="t12g Estilo28">&iquest;Desea incluir otro Usuario? </p>
					          <table width="243" border="0">
                                <tr>
                                  <td width="113"><font color="#FF0000" size="2"><a title="Ayuda sobre el manejo del SARTS" href="#">
                                    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="103" height="24">
                                      <param name="movie" value="button28.swf">
                                      <param name="quality" value="high">
                                      <embed src="button28.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="103" height="24" ></embed>
                                    </object>
                                  </a></font></td>
                                  <td width="114"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="103" height="24">
                                    <param name="movie" value="button19.swf">
                                    <param name="quality" value="high">
                                    <embed src="button19.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="103" height="24" ></embed>
                                  </object></td>
                                </tr>
                              </table>
					        </div>
                            <h1 align="right">&nbsp;                            </h1>
                            <h1 align="right">&nbsp;</h1>
                            <p align="right">&nbsp;</p>
                            <p align="right">&nbsp;</p>
                            <p align="right">&nbsp;</p>
                            <h1 align="right">&nbsp;</h1>
                            <h1 align="right">&nbsp;</h1>
                            <h1 align="right">&nbsp;</h1>
                            <h1 align="right">
                              <table width="47%" border="0" cellspacing="0" cellpadding="0">
                                <tr> </tr>
                              </table>
                          </h1></td>
					</tr>
				  </table>				</td>
				<td width="16">&nbsp;</td>
			  </tr>
			</table>		  </td>
		</tr>
	  </table>
	  <table width="5" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td width="5">&nbsp;</td>
        </tr>
      </table>
      </td>
	    <td width="297" valign="top" background="images/index_32.gif">
		

 <div align="center" class="t12g">
        <p class="t14w Estilo30"><span class="t14w Estilo31">Sistema ARTS </span></p>
        </div>
      <ul class="Estilo9">
        <li class="Estilo11 Estilo26 Estilo29"><span class="Estilo30"><a title="inicio.htm" href="inicio.html" target="_top">Inicio</a></span></li>
        <li class="Estilo11 Estilo26 Estilo29"><span class="Estilo30"><a title="antecedentes.htm" href="antecedentes.htm" target="_top">Antecedentes</a></span></li>
        <li class="Estilo11 Estilo26 Estilo29"><span class="Estilo30"><a title="Objetivos.html" href="Objetivos.html" target="_top">Objetivos</a></span></li>
        <li class="Estilo11 Estilo26 Estilo29"><span class="Estilo30">Trabajadores 
            </span>
          <ul>
              <li><span class="Estilo30"><a title="cargar_traba.php" href="cargar_traba.php" target="_self">Inclusion - Carga</a></span></li>
              <li><span class="Estilo30"><a title="consulta_trabaj.php" href="consulta_trabaj.php" target="_self">Consulta - Reporte</a></span></li>
              <li><span class="Estilo30"><a title="actualizar_trabaj.php" href="actualizar_trabaj.php" target="_self">Modificacion</a></span></li>
              <li><span class="Estilo30"><a title="elim_traba.php" href="elim_traba.php" target="_self">Eliminacion</a></span></li>
              <li><span class="Estilo30"><a title="menu_graficar_trabaj.php" href="menu_graficar_trabaj.php" target="_self">Graficacion</a></span></li>
            </ul>
        </li>
        <li class="Estilo11 Estilo26 Estilo29"><span class="Estilo30">Jornadas 
            </span>
          <ul>
              <li><span class="Estilo30"><a title="cargar_jornada.html" href="cargar_jornada.php" target="_self">Inclusion - Carga</a></span></li>
              <li><span class="Estilo30"><a title="consulta_jornada.php" href="consulta_jornada.php" target="_self">Consulta - Reporte</a></span></li>
              <li><span class="Estilo30"><a title="actualizar_jornada.php" href="actualizar_jornada.php" target="_self">Modificacion</a></span></li>
              <li><span class="Estilo30"><a title="delete_jornada.php" href="delete_jornada.php" target="_self">Eliminacion</a></span></li>
              <li><span class="Estilo30"><a title="menu_graficar_jornada.php" href="menu_graficar_jornada.php" target="_self">Graficacion</a></span></li>
            </ul>
        </li>
        <li class="Estilo11 Estilo26 Estilo29"><span class="Estilo30">Menu Admin
            </span>
          <ul>
              <li><span class="Estilo30"><strong>Trabajadores</strong>
                  </span>
                <ul>
                    <li><span class="Estilo30"><a title="consulta_trabaj.php" href="consulta_trabaj.php" target="_self">Consulta - Reporte</a></span></li>
                    <li><span class="Estilo30"><a title="actualizar_trabaj.php" href="actualizar_trabaj.php" target="_self">Modificacion</a></span></li>
                    <li><span class="Estilo30"><a title="elim_traba.php" href="elim_traba.php" target="_self">Eliminacion</a></span></li>
                    <li><span class="Estilo30"><a title="menu_graficar_trabaj.php" href="menu_graficar_trabaj.php" target="_self">Graficacion</a></span></li>
                  </ul>
              </li>
              <li><span class="Estilo30"><strong>Usuarios </strong>
                  </span>
                <ul>
                    <li><span class="Estilo30"><a title="cargar_user.php" href="cargar_user.php" target="_self">Inclusion - Carga</a></span></li>
                    <li><span class="Estilo30"><a title="consulta_user.php" href="consulta_user.php" target="_self">Consulta - Reporte</a></span></li>
                    <li><span class="Estilo30"><a title="actualizar_user.php" href="actualizar_user.php" target="_self">Modificacion</a></span></li>
                    <li><span class="Estilo30"><a title="elim_user.php" href="elim_user.php" target="_self">Eliminacion</a></span></li>
                    <li><span class="Estilo30"><a title="menu_graficar_user.php" href="menu_graficar_user.php" target="_self">Graficacion</a></span></li>
                  </ul>
              </li>
              <li><span class="Estilo30"><a title="consulta_jornada.php" href="consulta_jornada.php" target="_self">Consulta - Reporte</a></span></li>
              <li><span class="Estilo30"><a title="actualizar_jornada.php" href="actualizar_jornada.php" target="_self">Modificacion</a></span></li>
              <li><span class="Estilo30"><a title="elim_jornada.php" href="elim_jornada.php" target="_self">Eliminacion</a></span></li>
            </ul>
        </li>
        <li class="Estilo11 Estilo26 Estilo29"><span class="Estilo30"><a title="download.html" href="download.html" target="_self">Descargas</a></span></li>
        <li class="Estilo11 Estilo26 Estilo29"><span class="Estilo30"><a href="menu_sarts.html">Sistema ARTS </a></span></li>
        <li class="Estilo11 Estilo26 Estilo29"><span class="Estilo30">Contacto SARTS</span></li>
        <li class="Estilo11 Estilo26 Estilo29"><span class="Estilo30">FAQ 
            </span>
          <ul>
              <li><span class="Estilo30">Preguntas Generales</span></li>
              <li><span class="Estilo30">Manual de Usuario</span></li>
            </ul>
        </li>
        <li class="Estilo11 Estilo26 Estilo29"><span class="Estilo30">Ayuda Online (proximamente)</span></li>
        <li class="Estilo11 Estilo26 Estilo28"><span class="t12w Estilo29">Forums (proxi</span>manete)</li>
        </ul>
  
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
		  <td><img src="images/index_57.gif" width=240 height=1 alt=""></td>
		</tr>
	  </table>
	  <table width="243" border="0" cellspacing="0" cellpadding="0">
		<tr valign="top">		</tr>
	  </table>
	  <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
		  <td><img src="images/index_57.gif" width=240 height=1 alt=""></td>
		</tr>
	  </table>
      <div align="left">
        <div align="center"><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Desarrollado 
          para:</strong></font></strong></font></strong></font>        </div>
        <div align="center"><img src="images/logo%20de%20cadafe_2.gif" width="148" height="90"></div>
            <p align="center"><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong><font color="#CCCCCC" size="4">Regi&oacute;n 
              4</font></strong></font></strong></font></strong></font></p>
            <p align="center">
          <script>
dows = new Array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sabado");
months = new Array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
now = new Date();
dow = now.getDay();
d = now.getDate();
m = now.getMonth();
h = now.getTime();
y = now.getFullYear();
document.write(dows[dow]+" "+d+" de "+months[m]+" de "+y);
//--></script></p></div></td>
  </tr>
</table>
<table width="778" border="0" cellspacing="0" cellpadding="0">
  <tr>
	<td background="images/index_66.gif" class="t12w"><b>&nbsp;&nbsp;&copy;2006-2007 
      MaxSystem.NET &nbsp;Derechos Reservados</b></td>
	<td width="102"><img src="images/index_69.jpg" width=102 height=36 alt=""></td>
	<td width="222" background="images/index_70.gif" align="center" class="t12w"><div align="center"><a href="#" class="t12w"><b>Data/Privacidad</b></a><b> 
        • <a href="#" class="t12w">Accesabilidad</a></b></div></td>
  </tr>
</table>

      </div></td>
</BODY>
</HTML>