<?php
include ("security_system.php");
?>
<HTML>
<HEAD>
<TITLE>Consulta Individual de Trabajador Activo. Sistema ARTS Online</TITLE>
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
.Estilo3 {color: #0033FF}
.Estilo4 {color: #FFFFFF}
.Estilo5 {color: #0000FF}
.Estilo6 {
	color: #000000;
	font-size: 14px;
}
.Estilo9 {font-family: tahoma; text-decoration: none;}
-->
</style>
</HEAD>

<BODY BGCOLOR=#FFFFFF background="images/bgb.gif" vlink="#0000FF" LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0 tracingsrc="images/-downdis.gif" tracingopacity="100" oncontextmenu="return false">
<td colspan="3" valign="middle"><div align="center">
  <form name="form2" method="post" action="">
  <table width="900" border="0">
    <tr>
      <td width="170"><img src="images/escudo cadafe azul.JPG" alt="escudo cadafe" width="170" height="90"></td>
      <td width="516">&nbsp;</td>
      <td width="200"><div align="center"><a href="consulta_jornada.php"><img src="images/logosarts.JPG" alt="logo sarts" width="200" height="99" border="0"></a></div></td>
    </tr>
  </table>
  <h2 class="t12b Estilo2">&nbsp;</h2>
  <h2 class="t12b Estilo2"><em><strong><font color="#009900">Consulta Individual de Trabajador</font></strong></em></h2>
  <h2 class="t12b Estilo2"><em><strong><font color="#009900">Totales de Jornada entre el <?php	echo $_POST['fechaini']; ?></font><span class="Estilo4"></span><font color="#009900"> y el <em><strong><font color="#009900"><?php echo $_POST['fechafin'] ?></font></strong></em></font><span class="Estilo4"></span><font color="#009900"></font></strong></em></h2>
  <table width="751" height="68" border="0">
    <tr>
      <td width="81" class="t12g Estilo3">Apellidos</td>
      <td width="174" class="t12g Estilo3">
<?php
// Conexion el servidor
include ("includes/bdkey.php");

//validacion de variables
$cedul=$_POST['cedul'];
$result1 = mysql_query("select * from traba where ci='$cedul' and condicion='1'");

while ($row=mysql_fetch_array($result1)){
		   echo '<input name="apellidos" size="22" type="text" readonly="readonly" value="'.$row[apellidos].'">';
		  ?></td>
      <td width="57" class="t12g Estilo3">C.I.</td>
      <td width="207" class="t12g Estilo3"><?php
		  echo '<input name="ci" size="22" type="text" readonly="readonly" value="'.$cedul.'">';
		  ?></td>
      <td width="91" class="t12g Estilo3">Estructura</td>
      <td width="115" class="t12g Estilo3"><?php
		  echo '<input name="jefatura" size="22" maxlength="22" type="text" readonly="readonly" value="'.$row[id_estructura].'">';
		  ?></td>
    </tr>
    <tr>
      <td class="t12g Estilo3">Nombres</td>
      <td class="t12g Estilo3"><?php
		  echo '<input name="nombres" size="22" maxlength="22" type="text" readonly="readonly" value="'.$row[nombres].'">';
		  ?></td>
      <td class="t12g Estilo3">cargo</td>
      <td class="t12g Estilo3"><?php
		  echo '<input name="cargo" size="22" maxlength="22" type="text" readonly="readonly" value="'.$row[cargo].'">';
		  ?></td>
      <td class="t12g Estilo3">jefatura</td>
      <td class="t12g Estilo3"><?php
		  echo '<input name="jefatura" size="22" maxlength="22" type="text" readonly="readonly" value="'.$row[jefatura].'">';
		  ?></td>
    </tr>
  </table>
  <span class="t12b Estilo6">
  <?php
}
$newfecha1=$_POST['newfecha1'];
$newfecha2=$_POST['newfecha2'];

$result2 = mysql_query("SELECT * FROM jornada WHERE ci='$cedul' AND fecha BETWEEN '$newfecha1' AND '$newfecha2' ORDER BY fecha");

$xid=$_POST['xid'];
switch($xid){
case 1:
?>
  </span>
  <table width="766" height="39" align="center" border="1">
  <tr bgcolor="#FFFFFF" bordercolor="#0000FF"> 
	<th width="37" class="Estilo6"><div align="center" class="Estilo9">SAL.</div></th>
	<th width="38" class="Estilo6"><div align="center" class="Estilo9">FER</div></th>
	<th width="42" class="Estilo6"><div align="center" class="Estilo9">HED</div></th>
    <th width="48" class="Estilo6"><div align="center" class="Estilo9">HEDP</div></th>
	<th width="48" class="Estilo6"><div align="center" class="Estilo9">TRCD</div></th>
    <th width="38" class="Estilo6"><div align="center" class="Estilo9">BONO</div></th>
	<th width="48" class="Estilo6"><div align="center" class="Estilo9">HEN</div></th>
	<th width="37" class="Estilo6"><div align="center" class="Estilo9">HEDP</div></th>
	<th width="45" class="Estilo6"><div align="center" class="Estilo9">TRCN</div></th>
	<th width="67" class="Estilo6"><div align="center" class="Estilo9">VCI</div></th>
	<th width="69" class="Estilo6"><div align="center" class="Estilo9">VSI</div></th>
	<th width="37" class="Estilo6"><div align="center" class="Estilo9">KM</div></th>
	<th width="49" class="Estilo6"><div align="center" class="Estilo9">MAN</div></th>
	<th width="49" class="Estilo6"><div align="center" class="Estilo9">MOV</div></th>
	<th width="29" class="Estilo6"><div align="center" class="Estilo9">REP</div></th>
	</tr>
<?php
	while ($row=mysql_fetch_array($result2))
		{
		$hdsum=$hdsum+$row["hd"];
		$feriadosum=$feriadosum+$row["feriado"];
		$hedsum=$hedsum+$row["hed"];
		$hedpsum=$hedpsum+$row["hedp"];
		$trcdsum=$trcdsum+$row["trcd"];
		$bonocturnosum=$bonocturnosum+$row["bonocturno"];
		$hensum=$hensum+$row["hen"];
		$henpsum=$henpsum+$row["henp"];
		$trcnsum=$trcnsum+$row["trcn"];
		$vcisum=$vcisum+$row["vci"];
		$vsisum=$vsisum+$row["vsi"];
		$kmsum=$kmsum+$row["km"];
		$manejosum=$manejosum+$row["manejo"];
		$movilizacionsum=$movilizacionsum+$row["movilizacion"];
		$repososum=$repososum+$row["reposo"];
		}

$resposoentreocho=($repososum/8);

echo '<tr><td class="t12b">'.$hdsum.'</td>';

echo '<td class="t12b">'.$feriadosum.'</td>';

echo '<td class="t12b">'.$hedsum.'</td>';

echo '<td class="t12b">'.$hedpsum.'</td>';

echo '<td class="t12b">'.$trcdsum.'</td>';

echo '<td class="t12b">'.$bonocturnosum.'</td>';

echo '<td class="t12b">'.$hensum.'</td>';

echo '<td class="t12b">'.$henpsum.'</td>';

echo '<td class="t12b">'.$trcnsum.'</td>';

echo '<td class="t12b">'.$vcisum.'</td>';

echo '<td class="t12b">'.$vsisum.'</td>';

echo '<td class="t12b">'.$kmsum.'</td>';

echo '<td class="t12b">'.$manejosum.'</td>';

echo '<td class="t12b">'.$movilizacionsum.'</td>';

echo '<td class="t12b">'.$resposoentreocho.'</td></tr>';

break;

?>
</table>
  
  <span class="t12b Estilo6">
  <?php
case 2:
?>
  </span>
  <table width="768" height="39" align="center" border="1">
  <tr bgcolor="#FFFFFF" bordercolor="#0000FF"> 
    <th width="71"><div align="center" class="t12b Estilo5">FECHA</div></th>
	<th width="28"><div align="center" class="t12b Estilo5">SAL.</div></th>
	<th width="22"><div align="center" class="t12b Estilo5">FER</div></th>
	<th width="26"><div align="center" class="t12b Estilo5">HED</div></th>
    <th width="37"><div align="center" class="t12b Estilo5">HEDP</div></th>
	<th width="41"><div align="center" class="t12b Estilo5">TRCD</div></th>
    <th width="41"><div align="center" class="t12b Estilo5">BONO</div></th>
	<th width="51"><div align="center" class="t12b Estilo5">HEN</div></th>
	<th width="38"><div align="center" class="t12b Estilo5">HEDP</div></th>
	<th width="32"><div align="center" class="t12b Estilo5">TRCN</div></th>
	<th width="70"><div align="center" class="t12b Estilo5">VCI</div></th>
	<th width="70"><div align="center" class="t12b Estilo5">VSI</div></th>
	<th width="28"><div align="center" class="t12b Estilo5">KM</div></th>
	<th width="28"><div align="center" class="t12b Estilo5">MAN</div></th>
	<th width="30"><div align="center" class="t12b Estilo5">MOV</div></th>
	<th width="55"><div align="center" class="t12b Estilo5">REP</div></th>
	</tr>
<?php
while ($row=mysql_fetch_array($result2))
{
list($year,$month,$day) = explode("-",$row["fecha"]);
$fechamod=$day."-".$month."-".$year;

echo '<tr><td class="t12b">'.$fechamod.'</td>';
echo '<td class="t12b">'.$row["hd"].'</td>';
$hdsum=$hdsum+$row["hd"];
echo '<td class="t12b">'.$row["feriado"].'</td>';
$feriadosum=$feriadosum+$row["feriado"];
echo '<td class="t12b">'.$row["hed"].'</td>';
$hedsum=$hedsum+$row["hed"];
echo '<td class="t12b">'.$row["hedp"].'</td>';
$hedpsum=$hedpsum+$row["hedp"];
echo '<td class="t12b">'.$row["trcd"].'</td>';
$trcdsum=$trcdsum+$row["trcd"];
echo '<td class="t12b">'.$row["bonocturno"].'</td>';
$bonocturnosum=$bonocturnosum+$row["bonocturno"];
echo '<td class="t12b">'.$row["hen"].'</td>';
$hensum=$hensum+$row["hen"];
echo '<td class="t12b">'.$row["henp"].'</td>';
$henpsum=$henpsum+$row["henp"];
echo '<td class="t12b">'.$row["trcn"].'</td>';
$trcnsum=$trcnsum+$row["trcn"];
echo '<td class="t12b">'.$row["vci"].'</td>';
$vcisum=$vcisum+$row["vci"];
echo '<td class="t12b">'.$row["vsi"].'</td>';
$vsisum=$vsisum+$row["vsi"];
echo '<td class="t12b">'.$row["km"].'</td>';
$kmsum=$kmsum+$row["km"];
echo '<td class="t12b">'.$row["manejo"].'</td>';
$manejosum=$manejosum+$row["manejo"];
echo '<td class="t12b">'.$row["movilizacion"].'</td>';
$movilizacionsum=$movilizacionsum+$row["movilizacion"];
echo '<td class="t12b">'.$row["reposo"].'</td></tr>';
$repososum=$repososum+$row["reposo"];
}

$resposoentreocho=($repososum/8);
echo '<tr><td class="t12b">========</td>';
echo '<tr><td class="t12b">TOTAL</td>';
echo '<td class="t12b">'.$hdsum.'</td>';

echo '<td class="t12b">'.$feriadosum.'</td>';

echo '<td class="t12b">'.$hedsum.'</td>';

echo '<td class="t12b">'.$hedpsum.'</td>';

echo '<td class="t12b">'.$trcdsum.'</td>';

echo '<td class="t12b">'.$bonocturnosum.'</td>';

echo '<td class="t12b">'.$hensum.'</td>';

echo '<td class="t12b">'.$henpsum.'</td>';

echo '<td class="t12b">'.$trcnsum.'</td>';

echo '<td class="t12b">'.$vcisum.'</td>';

echo '<td class="t12b">'.$vsisum.'</td>';

echo '<td class="t12b">'.$kmsum.'</td>';

echo '<td class="t12b">'.$manejosum.'</td>';

echo '<td class="t12b">'.$movilizacionsum.'</td>';

echo '<td class="t12b">'.$resposoentreocho.'</td></tr>';

break;
}
mysql_free_result($result1) and mysql_free_result($result2)
?>
</table>

  <p>
</form>
<p class="t12g Estilo5">&iquest;Desea volver?
  </p>
</p>
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
