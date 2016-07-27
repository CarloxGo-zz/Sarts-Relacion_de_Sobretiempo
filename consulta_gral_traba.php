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
.Estilo4 {
	color: #0000FF;
	text-decoration: none;
	font-family: tahoma;
	font-size: 10px;
}
.Estilo5 {font-size: 10px}
.Estilo7 {color: #0000FF}
-->
</style>
</HEAD>

<BODY BGCOLOR=#FFFFFF background="images/bgb.gif" vlink="#0000FF" LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0 tracingsrc="images/-downdis.gif" tracingopacity="100" oncontextmenu="return false">
<td colspan="3" valign="middle"><div align="center"> 
<table width="778" border="0" cellspacing="0" cellpadding="0">
  <tr>
<td align="right" background="images/index_01.gif"><img src="images/index_03.gif" width=59 height=34 alt=""><a href="inicio.html" target="_top"><img src="images/index_ini.gif" alt="" width=82 height=34 border="0"></a><img src="images/index_faq.GIF" width=82 height=34 alt=""><img src="images/index_link.gif" width=89 height=34 alt=""><a href="menu_sarts.html" target="_blank"><img src="images/index_sarts.gif" alt="" width=71 height=34 border="0"></a><img src="images/index_contac.GIF" width=85 height=34 alt=""></td>
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
include ("includes/bdkey.php");
$radiobutton=$_POST['radiobutton'];
switch ($radiobutton){
	case 6:
		$est=$region=$_POST['region'];
		$result = mysql_query("SELECT * FROM traba WHERE region='$region' AND condicion='1' ORDER BY estructura");
	break;

	case 5:
		$est=$direccion=$_POST['direccion'];
		$result = mysql_query("SELECT * FROM traba WHERE direccion='$direccion' AND condicion='1' order by estructura");
		
	break;

	case 4:
		$est=$gerencia=$_POST['gerencia'];
		$result = mysql_query("SELECT * FROM traba WHERE gerencia='$gerencia' AND condicion='1' order by estructura");
	break;

	case 3:
		$est=$coordinacion=$_POST['coordinacion'];
		$result = mysql_query("select * FROM traba WHERE coordinacion='$coordinacion' AND condicion='1' order by (estructura and jefatura)");
	break;

	case 2:
		$est=$estructura=$_POST['estructura'];
		$result = mysql_query("SELECT * FROM traba WHERE estructura='$estructura' AND condicion='1' order by ci");
	break;

	case 1:
		$est=$jefatura=$_POST['jefatura'];
		$result = mysql_query("SELECT * FROM traba WHERE jefatura='$jefatura' AND condicion='1' order by ci");
	break;
}

?>
</h2>
<form name="form2" method="post" action="">
  <h2 class="t12b Estilo2"><em><strong><font color="#009900">Consulta General de Trabajadores </font></strong></em></h2>
  <h2 class="t12b Estilo2"><em><strong><font color="#009900">por Estructura</font></strong></em> </h2>
  <table width="769" height="39" align="center" border="1">
  <tr bgcolor="#FFFFFF" bordercolor="#0000FF"> 
    <th width="54" class="t12g Estilo7 Estilo5">c.i.</th>
	<th width="74" bgcolor="#FFFFFF" class="t12g Estilo7 Estilo5">Nombres</th>
    <th width="74" class="t12g Estilo7 Estilo5">Apellidos</th>
	<th width="125" class="t12g Estilo7 Estilo5">Estructura</th>
    <th width="124" class="t12g"><p align="center" class="Estilo4 Estilo5">Jefatura</p>      </th>
	<th width="117" class="t12g Estilo7 Estilo5">Cargo</th>
	<th width="57" class="t12g Estilo7 Estilo5">Horario</th>
	<th width="60" class="t12g Estilo7"><div align="center" class="Estilo5">Estatus</div></th>
	<th width="26" class="t12g Estilo7 Estilo5"><div align="center">Mnj</div></th>
	</tr>
<?php
//3. Mostramos los registros en un array de php 

while ($row=mysql_fetch_array($result))
{
echo '<tr><td class="t12b Estilo5"><div align="center">'.$row["ci"].'</div></td>';

echo '<td class="t12b Estilo5">'.$row["nombres"].'</td>';

echo '<td class="t12b Estilo5">'.$row["apellidos"].'</td>';

echo '<td class="t12b Estilo5"><div align="center">'.$row["estructura"].'</div></td>';

echo '<td class="t12b Estilo5"><div align="center">'.$row["jefatura"].'</div></td>';

echo '<td class="t12b Estilo5"><div align="center">'.$row["cargo"].'</div></td>';

echo '<td class="t12b Estilo5"><div align="center">'.$row["horario"].'</div></td>';

echo '<td class="t12b Estilo5"><div align="center">'.$row["estatus"].'</div></td>';

echo '<td class="t12b Estilo5"><div align="center">'.$row["manejo"].'</div></td></tr>';
}
mysql_free_result($result)
?>
</table>
</form>
<span class="t12g Estilo7">&iquest;Desea volver? </span>
<table width="243" border="0">
                                  <tr>
                                    <td width="113"><font color="#FF0000" size="2"><a title="Ayuda sobre el manejo del SARTS" href="#">
                                      
          <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="103" height="24">
            <param name="BGCOLOR" value="">
            <param name="BASE" value=".">
            <param name="movie" value="button21.swf">
            <param name="quality" value="high">
            <embed src="button21.swf" width="103" height="24" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" base="." ></embed> 
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

</BODY>
</HTML>
