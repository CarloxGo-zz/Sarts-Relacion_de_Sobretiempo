<?php
include ("security_system.php");
?>
<HTML>
<HEAD>
<TITLE>Consulta General Trabajadores Activos. Sistema ARTS Online</TITLE>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<link rel="stylesheet" href="main.css" type="text/css" http-equiv="Window-target" content="_top"/>


<script type="text/javascript" language="JavaScript1.2" src="stmenu.js"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<script type="text/javascript" src="js/prototype.js"></script>
	<script type="text/javascript" src="js/scriptaculous.js"></script>
	<script type="text/javascript" src="js/wforms.js"></script>
	<script type="text/javascript" src="js/localization-es.js"></script>
	<script type="text/javascript" src="js/contact.js"></script>
	<script type="text/javascript" src="/mint/mint.js.php"></script>
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen, projection" />
	
	
<style type="text/css">
<!--
.Estilo2 {font-size: 18px}
.Estilo9 {
	color: #000000;
	font-size: 12px;
}
.Estilo17 {color: #0000FF; font-family: Geneva, Arial, Helvetica, sans-serif; }
.Estilo19 {color: #0000FF}
.Estilo20 {color: #FF3300; }
.Estilo23 {
	font-size: 9px;
	font-weight: bold;
}
.Estilo26 {font-size: 16px}
-->
</style>
</HEAD>

<BODY BGCOLOR=#FFFFFF background="images/bgb.gif" vlink="#0000FF" LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0 tracingsrc="images/-downdis.gif" tracingopacity="100" oncontextmenu="return false">
<td colspan="3" valign="middle"><div align="center">
  <form name="consultar_jornada" method="post" action="imprimir_jornada_estructura.php">
<?php
include ("includes/bdkey.php");

$result2 = mysql_query("select * from jornada where jefatura='$estselect' and fecha BETWEEN '$newfecha1' AND '$newfecha2' order by ci");
break;


?>
</table>

<table width="718" border="0">
  <tr>
    <td width="712" class="Estilo9"><div align="right" class="Estilo20">
      <p align="center" class="Estilo26">Nota: (1) Los reposos son tomados como unitarios al totalizarlos (2) Las HED y HEN son totalizadas con las programadas, bonos y tiempos de reposo, as&iacute; como los vi&aacute;ticos sumados en un &uacute;nico valor. </p>
      </div></td>
  </tr>
</table>
<p>&nbsp;</p>
</form>
<p class="t12g Estilo19">&iquest;Desea volver? </p>
<table width="243" border="0">
                                  <tr>
                                    <td width="113"><font color="#FF0000" size="2"><a title="Ayuda sobre el manejo del SARTS" href="#">
                                      <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="103" height="24">
                                        <param name="BGCOLOR" value="">
                                        <param name="movie" value="button32.swf">
                                        <param name="quality" value="high">
                                        <embed src="button32.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="103" height="24" ></embed>
                                      </object>
                                    </a></font></td>
                                    <td width="114"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="103" height="24">
                                        <param name="movie" value="button19.swf">
                                        <param name="quality" value="high">
                                        <embed src="button19.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="103" height="24" ></embed>
                                    </object></td>
                                  </tr>
    </table>
                                </div></td>

</BODY>
</HTML>