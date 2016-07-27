<?php
include ("security_system.php");
?>
<HTML>
<HEAD>
<TITLE>Consulta General Trabajadores Eliminados por Usuarios. Sistema ARTS Online</TITLE>
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
.Estilo1 {font-size: 14px}
.Estilo2 {font-size: 18px}
-->
</style>
</HEAD>
<BODY BGCOLOR=#FFFFFF background="images/bgb.gif" vlink="#0000FF" LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0 tracingsrc="images/-downdis.gif" tracingopacity="100"  oncontextmenu="return false">
<td colspan="3" valign="middle"><div align="center"> 
<table width="778" border="0" cellspacing="0" cellpadding="0">
  <tr>
<td align="right" background="images/index_01.gif"><img src="images/index_03.gif" width=59 height=34 alt=""><a href="inicio.html"><img src="images/index_ini.gif" alt="" width=82 height=34 border="0"></a><img src="images/index_faq.GIF" width=82 height=34 alt=""><img src="images/index_link.gif" width=89 height=34 alt=""><a href="finalizar_sesion.php" target="_self"><img src="images/index_sarts.gif" alt="" width=71 height=34 border="0"></a><img src="images/index_contac.GIF" width=85 height=34 alt=""></td>
  </tr>
</table>
<table width="778" border="0" cellspacing="0" cellpadding="0">
  <tr>
	<td width="450" background="images/index_23.gif"><img src="images/index_22.gif" width=174 height=35 alt=""></td>
	<td background="images/index_27.gif"><img src="images/index_25.jpg" width=96 height=35 alt=""><img src="images/index_soft.GIF" width=92 height=35 alt=""></td>
  </tr>
</table>
<h2>
  <?php
$dbh = mysql_connect("localhost", "wwwsart_root", "M4X1mu5") or die("No se pudo conectar a la base de datos".mysql_error());
mysql_select_db("wwwsart_sarts",$dbh);

$result = mysql_query("select * from traba where condicion='2'");

?>
</h2>
<form name="form2" method="post" action="">
  <h2 class="t12b Estilo2"><em><strong><font color="#009900">Consulta de Trabajadores Eliminados</font></strong></em></h2>
  <h2 class="t12b Estilo2"><em><strong><font color="#009900">por Usuarios </font></strong></em></h2>
  <table width="838" height="39" align="center" border="1">
  <tr bgcolor="#FFFFFF" bordercolor="#0000FF"> 
    <th width="76"><span class="Estilo1">Cedula de Identidad </span></th>
	<th width="109" bgcolor="#FFFFFF"><span class="Estilo1">Nombres</span></th>
    <th width="109"><span class="Estilo1">Apellidos</span></th>
	<th width="124"><span class="Estilo1">Estructura</span></th>
    <th width="88"><p align="center" class="Estilo1">Jefatura de L&iacute;neas </p>      </th>
	<th width="144"><span class="Estilo1">Cargo</span></th>
	<th width="52">Horario</th>
	<th width="50">Estatus</th>
	<th width="28">Mnj</th>
	<th width="28">Cnd</th>
	</tr>
<?php
//3. Mostramos los registros en un array de php 

while ($row=mysql_fetch_array($result))
{
echo '<tr><td>'.$row["ci"].'</td>';

echo '<td>'.$row["nombres"].'</td>';

echo '<td>'.$row["apellidos"].'</td>';

echo '<td>'.$row["estructura"].'</td>';

echo '<td>'.$row["jefatura"].'</td>';

echo '<td>'.$row["cargo"].'</td>';

echo '<td>'.$row["horario"].'</td>';

echo '<td>'.$row["estatus"].'</td>';

echo '<td>'.$row["manejo"].'</td>';

echo '<td>'.$row["condicion"].'</td></tr>';
}
mysql_free_result($result)
?>
</table>


  
</form>
<p>&iquest;Desea volver?
					          </p>
                                <table width="243" border="0">
                                  <tr>
                                    <td width="113"><font color="#FF0000" size="2"><a title="Ayuda sobre el manejo del SARTS" href="#">
                                      <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="103" height="24">
                                        <param name="BGCOLOR" value="">
                                        <param name="movie" value="button25.swf">
                                        <param name="quality" value="high">
                                        <embed src="button25.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="103" height="24" ></embed>
                                      </object>
                                    </a></font></td>
                                    <td width="114"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="103" height="24">
                                        <param name="movie" value="button19.swf">
                                        <param name="quality" value="high">
                                        <embed src="button19.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="103" height="24" ></embed>
                                    </object></td>
                                  </tr>
                                </table>
                                <p>&nbsp;</p>
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
<!-- End ImageReady Slices -->
</BODY>
</HTML>