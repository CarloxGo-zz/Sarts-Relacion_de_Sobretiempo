<?php
include ("security_system.php");
?>
<HTML>
<HEAD>
<TITLE>Imprimir Consulta de Jornada. Sistema ARTS Online</TITLE>
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
.Estilo9 {color: #000000}
.Estilo17 {color: #0000FF; font-family: Geneva, Arial, Helvetica, sans-serif; }
.Estilo19 {color: #0000FF}
.Estilo20 {color: #FF3300; }
.Estilo23 {
	font-size: 14px;
	font-weight: bold;
}
-->
</style>
</HEAD>

<BODY BGCOLOR=#FFFFFF background="images/bgb.gif" vlink="#0000FF" LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0 tracingsrc="images/-downdis.gif" tracingopacity="100" onLoad="window.print()" oncontextmenu="return false">



<div align="center"><table width="722" border="0">
  <tr>
    <td width="765"><img src="images/escudo cadafe azul.JPG" width="139" height="76"></td>
  </tr>
</table> </div>
<td colspan="3" valign="middle"><div align="center">
<form name="form2" method="post" action="">
<?php
include ("includes/bdkey.php");
echo "fecha1=".$_POST[newfecha1];

switch($radiobutton){
case 1:
$result2 = mysql_query("select * from jornada where jefatura='$estselect' and fecha BETWEEN '$newfecha1' AND '$newfecha2' order by ci");
break;

case 2:
$result2 = mysql_query("select * from jornada where estructura='$estselect' and fecha BETWEEN '$newfecha1' AND '$newfecha2' order by ci");
break;

case 3:
$result2 = mysql_query("select * from jornada where coordinacion='$estselect' and fecha BETWEEN '$newfecha1' AND '$newfecha2' order by ci");
break;

case 4:
$result2 = mysql_query("select * from jornada where gerencia='$estselect' and fecha BETWEEN '$newfecha1' AND '$newfecha2' order by ci");
break;

case 5:
echo $direccion;
$result2 = mysql_query("select * from jornada where direccion='$estselect' and fecha BETWEEN '$newfecha1' AND '$newfecha2' order by ci");
break;

case 6:
$result2 = mysql_query("select * from jornada where region='$estselect' and fecha BETWEEN '$newfecha1' AND '$newfecha2' order by ci");
break;
}


?>
<h2 class="t12b Estilo2"><em><strong><font color="#009900">Consulta de Jornadas </font></strong></em></h2>
  <h2 class="t12b Estilo2"><em><strong><font color="#009900">Totales  entre el  <?php	echo $fecha1; ?> y el <?php	echo $fecha2; ?></font></strong></em></h2>
  <p class="t12b Estilo2"><em><strong><font color="#009900">Para </font></strong></em></p>
<?php
switch($xestruc){
case 1:
?>
<span class="Estilo19">Detallado: </span>
<span class="t12b Estilo2"><em><strong><font color="#009900"><?php echo $estselect; ?></font></strong></em></span>
<table width="676" height="37" align="center" border="1">
	<tr bgcolor="#FFFFFF" bordercolor="#0000FF"> 
    <th width="38" height="31" class="t12b"><div align="center" class="Estilo19">SAL. (Hrs)</div></th>
	<th width="26" class="t12b"><div align="center" class="Estilo17">FER</div></th>
	<th width="38" class="t12b"><div align="center" class="Estilo17">HED (Hrs)</div></th>
    <th width="34" class="t12b"><div align="center" class="Estilo17">HEDP (Hrs) </div></th>
	<th width="41" class="t12b"><div align="center" class="Estilo17">TRCD (Hrs) </div></th>
    <th width="45" class="t12b"><div align="center" class="Estilo17">BONO (Hrs) </div></th>
	<th width="39" class="t12b"><div align="center" class="Estilo17">HEN (Hrs) </div></th>
	<th width="38" class="t12b"><div align="center" class="Estilo17">HENP (Hrs) </div></th>
	<th width="34" class="t12b"><div align="center" class="Estilo17">TRCN (Hrs) </div></th>
	<th width="38" class="t12b"><div align="center" class="Estilo17">VCI (Bs.F.) </div></th>
	<th width="42" class="t12b"><div align="center" class="Estilo17">VSI (Bs.F.) </div></th>
	<th width="36" class="t12b"><div align="center" class="Estilo17">KM</div></th>
	<th width="46" class="t12b"><div align="center" class="Estilo17">MAN (Bs.F.) </div></th>
	<th width="38" class="t12b"><div align="center" class="Estilo17">MOV (Bs.F.)</div></th>
	<th width="49" class="t12b"><div align="center" class="Estilo17">REP (Hrs) </div></th>
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

		$day=substr($row["fecha"],8,2);
		$month=substr($row["fecha"],5,2);
		$year=substr($row["fecha"],0,4);
		$dia_semana=date ("l", mktime(0, 0, 0,$month, $day, $year));
		if ($dia_semana=="Sunday") $domci=$domci+1;
		
		switch($row[reposo])
		{
			case 4:	
				$repososum=$repososum+$row[reposo]+4;
			break;
			case 8:
				$repososum=$repososum+$row[reposo];
			break;
			case 0:
				$repososum=$repososum+$row[reposo];
			break;
		}

	}

$resposoentreocho=($repososum/8);

echo '<tr><td>'.$hdsum.'</td>';

echo '<td>'.$feriadosum.'</td>';

echo '<td>'.$hedsum.'</td>';

echo '<td>'.$hedpsum.'</td>';

echo '<td>'.$trcdsum.'</td>';

echo '<td>'.$bonocturnosum.'</td>';

echo '<td>'.$hensum.'</td>';

echo '<td>'.$henpsum.'</td>';

echo '<td>'.$trcnsum.'</td>';

echo '<td>'.$vcisum.'</td>';

echo '<td>'.$vsisum.'</td>';

echo '<td>'.$kmsum.'</td>';

echo '<td>'.$manejosum.'</td>';

echo '<td>'.$movilizacionsum.'</td>';

echo '<td>'.$resposoentreocho.'</td></tr>';

?>
</table>
<span class="Estilo19">Consolidado:</span>
<table align="center" border="1">
<tr bgcolor="#FFFFFF" bordercolor="#0000FF"> 
<?php
echo '<td>Horas Extras diurnas (HED+HEDP+TRCD)</td><td>'.$sumahed=$hedsum+$hedpsum+$trcdsum.' Hrs.</td></tr>';
echo '<td>Horas Extras nocturnas (HEN+HENP+TRCD)</td><td>'.$sumahen=$hensum+$henpsum+$trcnsum.' Hrs.</td></tr>';
echo '<td>Horas Extras Totales (Diurnas + Nocturnas)</td><td>'.$sumhe=$sumahen+$sumahed.' Hrs.</td></tr>';
echo '<td>Domingos trabajados</td><td>'.$domci.' dia(s)</td></tr>';
echo '<td>Vi&aacute;ticos (VCI+VSI)</td><td>'.$vt=$vcisum+$vsisum.' Bs.F.</td></tr>';
?>
</table>

<span class="Estilo23">
<?php
mysql_free_result($result2);
break;
?>

<?php
case 2:
?>
</span>
<table width="779" height="39" align="center" border="1">
	<tr bgcolor="#FFFFFF" bordercolor="#0000FF"> 
   	<td width="52" class="t12b Estilo23"><div align="center">C.I.</div></td>
	<td width="186" class="t12b Estilo23"><div align="center">APELLIDO Y NOMBRE</div></td>
	<td width="36" class="t12b Estilo23"><div align="center">SAL. (Hrs)</div></td>
	<td width="27" class="t12b Estilo23"><div align="center">FER</div></td>
	<td width="40" class="t12b Estilo23"><div align="center">HED (Hrs) </div></td>
    <td width="40" class="t12b Estilo23"><div align="center">HEN (Hrs) </div></td>
	<td width="60" class="t12b Estilo23"><div align="center">TOTAL HE(Hrs) </div></td>
	<td width="51" class="t12b Estilo23"><div align="center">DOMG. (D&iacute;a) </div></td>
	<td width="50" class="t12b Estilo23"><div align="center">VTCO. (Bs.F.) </div></td>
	<td width="28" class="t12b Estilo23"><div align="center">KM</div></td>
	<td width="46" class="t12b Estilo23"><div align="center">MAN (Bs.F.)</div></td>
	<td width="49" class="t12b Estilo23"><div align="center">MOV. (Bs.F.) </div></td>
	<td width="32" class="t12b Estilo23"><div align="center">REP </div></td>
	</tr>
<?php
$citemp=0;
while ($row=mysql_fetch_array($result2))
{
$hdsumci=0;
$feriadosumci=0;
$hedsumci=0;
$hensumci=0;
$hesumci=0;
$viaticosumci=0;
$kmsumci=0;
$manejosumci=0;
$movilizacionsumci=0;
$repososumci=0;
$domci=0;
$resposoentreochoci=0;

if($citemp<>$row[ci]){
	$citemp=$row[ci];
	echo '<tr><td>'.$row[ci].'</td>';
	$ci=$row[ci];
	$queryci = mysql_query("select * from jornada where ci='$row[ci]' and fecha BETWEEN '$newfecha1' AND '$newfecha2'");
	while ($row=mysql_fetch_array($queryci))
	{
	$hdsumci=$hdsumci+$row["hd"];
	$hdsum=$hdsum+$row["hd"];
	
	$feriadosumci=$feriadosumci+$row["feriado"];
	$feriadosum=$feriadosum+$row["feriado"];
	
	$hedsumci=$hedsumci+$row["hed"]+$row["hedp"]+$row["trcd"];
	$hedsum=$hedsum+$row["hed"]+$row["hedp"]+$row["trcd"];
	
	$hensumci=$hensumci+$row["hen"]+$row["bonocturno"]+$row["henp"]+$row["trcn"];
	$hensum=$hensum+$row["hen"]+$row["bonocturno"]+$row["henp"]+$row["trcn"];
	
	$hesumci=$hensumci+$hedsumci;
	$hesum=$hedsum+$hensum;
	
	$viaticosumci=$viaticosumci+$row["vci"]+$row["vsi"];
	$viaticosum=$viaticosum+$row["vci"]+$row["vsi"];
	
	$kmsumci=$kmsumci+$row["km"];
	$kmsum=$kmsum+$row["km"];
	
	$manejosumci=$manejosumci+$row["manejo"];
	$manejosum=$manejosum+$row["manejo"];
	
	$movilizacionsumci=$movilizacionsumci+$row["movilizacion"];
	$movilizacionsum=$movilizacionsum+$row["movilizacion"];
	
	$day=substr($row["fecha"],8,2);
	$month=substr($row["fecha"],5,2);
	$year=substr($row["fecha"],0,4);
	
	$dia_semana=date ("l", mktime(0, 0, 0,$month, $day, $year));
	if ($dia_semana=="Sunday")
	{
	$domci=$domci+1;
	$dom=$dom+1;
	}
	switch($row[reposo]){
	case 4:	
		$repososumci=$repososumci+$row[reposo]+4;
		$repososum=$repososum+$row[reposo]+4;
	break;
	case 8:
		$repososumci=$repososumci+$row[reposo];
		$repososum=$repososum+$row[reposo];
	break;
	}
	$resposoentreochoci=$repososumci/8;
	$resposoentreocho=$repososum/8;
	}
	$query= mysql_query("select nombres,apellidos from traba where ci='$ci'");
	while ($row=mysql_fetch_array($query))
	{
	echo '<td>'.$row[apellidos].", ".$row[nombres].'</td>';
	}
	echo '<td>'.$hdsumci.'</td>';
	
	echo '<td>'.$feriadosumci.'</td>';
	
	echo '<td>'.$hedsumci.'</td>';
	
	echo '<td>'.$hensumci.'</td>';
	
	echo '<td class="Estilo20">'.$hesumci.'</td>';
	
	echo '<td class="Estilo20">'.$domci.'</td>';
		
	echo '<td>'.$viaticosumci.'</td>';
	
	echo '<td>'.$kmsumci.'</td>';
	
	echo '<td>'.$manejosumci.'</td>';
	
	echo '<td>'.$movilizacionsumci.'</td>';
	
	echo '<td>'.$resposoentreochoci.'</td></tr>';
	
}
}
echo '<tr><td></td></td>';
echo '<tr><td></td></td>';
echo '<tr><td></td></td>';
echo '<tr><td>====</td>';
echo '<td>=TOTAL=</td>';
echo '<td>'.$hdsum.'</td>';
echo '<td>'.$feriadosum.'</td>';
echo '<td>'.$hedsum.'</td>';
echo '<td>'.$hensum.'</td>';
echo '<td class="Estilo20">'.$hesum.'</td>';
echo '<td class="Estilo20">'.$dom.'</td>';
echo '<td >'.$viaticosum.'</td>';
echo '<td>'.$kmsum.'</td>';
echo '<td>'.$manejosum.'</td>';
echo '<td>'.$movilizacionsum.'</td>';
echo '<td>'.$resposoentreocho.'</td></tr>';


break;
}

?>
</table>
</form>
<table width="718" border="0">
  <tr>
    <td width="712" class="Estilo9"><div align="right" class="Estilo20">
      <p align="center"><span class="Estilo9">Nota:</span> (1) Los reposos son tomados como unitarios al totalizarlos (2) Las HED y HEN son totalizadas con las programadas, bonos y tiempos de reposo, as&iacute; como los vi&aacute;ticos sumados en un &uacute;nico valor.   </p>
      </div></td>
  </tr>
</table>
<p><a href="consulta_jornada.php"><img src="images/060508icon4.gif" width="871" height="78" border="0"></a></p>
</div></td>

</BODY>
</HTML>
