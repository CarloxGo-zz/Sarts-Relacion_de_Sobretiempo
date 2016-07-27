<?php
include ("security_system.php");
?>
<HTML>
<HEAD>
<TITLE>Consulta Jornada. Sistema ARTS Online</TITLE>
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
.Estilo3 {color: #FF0000}
-->
</style>
</HEAD>

<BODY BGCOLOR=#FFFFFF background="images/bgb.gif" vlink="#0000FF" LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0 tracingsrc="images/-downdis.gif" tracingopacity="100" oncontextmenu="return false">
<td colspan="3" valign="middle"><div align="center">
  <table width="900" border="0">
    <tr>
      <td width="170"><img src="images/escudo cadafe azul.JPG" width="170" height="90"></td>
      <td width="516">&nbsp;</td>
      <td width="200"><div align="center"><a href="consulta_jornada.php"><img src="images/logosarts.JPG" width="200" height="99" border="0"></a></div></td>
    </tr>
  </table>
  <p>
<?php
include ("includes/bdkey.php");

$inicio_x_estruc=$_POST['inicio_x_estruc'];

$day1=substr($inicio_x_estruc,0,2);
$month1=substr($inicio_x_estruc,3,2);
$year1=substr($inicio_x_estruc,6,4);

// fecha inicio en formato aaaa-mm-dd
$newfecha1=$year1."-".$month1."-".$day1;

// fecha fin en formato aaaa-mm-dd
$fin_x_estruc=$_POST['fin_x_estruc'];

$day2=substr($fin_x_estruc,0,2);
$month2=substr($fin_x_estruc,3,2);
$year2=substr($fin_x_estruc,6,4);

$newfecha2=$year2."-".$month2."-".$day2;

$xestruc=$_POST['xestruc'];
if ($xestruc==0)
{
	echo "<H2><font color='red'> Error !!!</font></H2>";
	echo " ";
	echo "<H3><font color='red'>No seleccion&oacute; ninguna estructura,</font></H3>";
	echo " ";
	echo "<H3><font color='red'>por favor verifique, e int&eacute;ntelo de nuevo</font></H3>";
	echo '<div align="center">';
	echo '<table width="200" border="0">';
	echo '<tr>';
?>
</p>
  <form name="form1" method="post" action="consulta_jornada_estructura.php">
    <table width="112" border="0">
    <tr>
      <td width="106" height="50"><div align="left"><span class="t12b Estilo2">
        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="103" height="24">
          <param name="movie" value="button31.swf">
          <param name="quality" value="high">
          <embed src="button31.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="103" height="24" ></embed>
        </object>
      </span></div></td>
    </tr>
  </table>
  <p class="t12b Estilo2">
<?php
}else{

$radiobutton=$_POST['radiobutton'];
switch($radiobutton)
{
case 1:
$estselect=$_POST['jefatura'];
$result2 = mysql_query("SELECT * FROM jornada WHERE jefatura='$estselect' AND fecha BETWEEN '$newfecha1' AND '$newfecha2' order by ci");
break;

case 2:
$estselect=$_POST['estructura'];
$result2 = mysql_query("select * from jornada where estructura='$estselect' and fecha BETWEEN '$newfecha1' AND '$newfecha2' order by ci");
break;

case 3:
$estselect=$_POST['coordinacion'];
$result2 = mysql_query("select * from jornada where coordinacion='$estselect' and fecha BETWEEN '$newfecha1' AND '$newfecha2' order by ci");
break;

case 4:
$estselect=$_POST['gerencia'];
$result2 = mysql_query("select * from jornada where gerencia='$estselect' and fecha BETWEEN '$newfecha1' AND '$newfecha2' order by ci");
break;

case 5:
$estselect=$_POST['direccion'];
$result2 = mysql_query("select * from jornada where direccion='$estselect' and fecha BETWEEN '$newfecha1' AND '$newfecha2' order by ci");
break;

case 6:
$estselect=$_POST['region'];
$result2 = mysql_query("select * from jornada where region='$estselect' and fecha BETWEEN '$newfecha1' AND '$newfecha2' order by ci");
break;
}

switch($xestruc){

// --------------------------------------
// ------------------CASO 1
// --------------------------------------
case 1:
?>
<h2 class="t12b Estilo2"><em><strong><font color="#009900">Consulta de Jornadas </font></strong></em></h2>
<h2 class="t12b Estilo2"><em><strong><font color="#009900">Totales  entre el  <?php	$inicio_x_estruc=$_POST['inicio_x_estruc']; echo $inicio_x_estruc; ?> y el <?php	echo $fin_x_estruc; ?></font></strong></em></h2>
<p class="t12b Estilo2"><em><strong><font color="#009900">Para <?php echo $estselect; ?></font></strong></em></p>
<span class="Estilo19">Detallado: </span>
<table width="676" height="37" align="center" border="1">
	<tr bgcolor="#FFFFFF" bordercolor="#0000FF">
    <td width="38" height="31" class="t12b"><div align="center" class="Estilo19">SAL. (Hrs)</div></td>
	<td width="26" class="t12b"><div align="center" class="Estilo17">FER</div></td>
	<td width="38" class="t12b"><div align="center" class="Estilo17">HED (Hrs)</div></td>
    <td width="34" class="t12b"><div align="center" class="Estilo17">HEDP (Hrs) </div></td>
	<td width="41" class="t12b"><div align="center" class="Estilo17">TRCD (Hrs) </div></td>
    <td width="45" class="t12b"><div align="center" class="Estilo17">BONO (Hrs) </div></td>
	<td width="39" class="t12b"><div align="center" class="Estilo17">HEN (Hrs) </div></td>
	<td width="38" class="t12b"><div align="center" class="Estilo17">HENP (Hrs) </div></td>
	<td width="34" class="t12b"><div align="center" class="Estilo17">TRCN (Hrs) </div></td>
	<td width="38" class="t12b"><div align="center" class="Estilo17">VCI (Bs.F.) </div></td>
	<td width="42" class="t12b"><div align="center" class="Estilo17">VSI (Bs.F.) </div></td>
	<td width="36" class="t12b"><div align="center" class="Estilo17">KM (Bs.F.) </div></td>
	<td width="46" class="t12b"><div align="center" class="Estilo17">MAN (Bs.F.) </div></td>
	<td width="38" class="t12b"><div align="center" class="Estilo17">MOV (Bs.F.)</div></td>
	<td width="49" class="t12b"><div align="center" class="Estilo17">REP (Hrs) </div></td>
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
		$kmsum=$kmsum+$row["kilometraje"];
		$manejosum=$manejosum+$row["manejo"];
		$movilizacionsum=$movilizacionsum+$row["movilizacion"];
		
		$tipodia=$row["tipodia"];
		if ($tipodia==3) $septimoci=$septimoci+1;
		
		switch($row["reposo"])
		{
			case 4:	
				$repososumund=$repososumund+$row["reposo"]/4;
			break;
			case 8:
				$repososumund=$repososumund+$row["reposo"]/8;
			break;
		}
	}
?>
<tr>
    <td class="t12b"><div align="center" class="Estilo17"><?php echo $hdsum; ?></div></td>
	<td class="t12b"><div align="center" class="Estilo17"><?php echo $feriadosum; ?></div></td>
	<td class="t12b"><div align="center" class="Estilo17"><?php echo $hedsum; ?></div></td>
    <td class="t12b"><div align="center" class="Estilo17"><?php echo $hedpsum; ?></div></td>
	<td class="t12b"><div align="center" class="Estilo17"><?php echo $trcdsum; ?></div></td>
    <td class="t12b"><div align="center" class="Estilo17"><?php echo $bonocturnosum; ?></div></td>
	<td class="t12b"><div align="center" class="Estilo17"><?php echo $hensum; ?></div></td>
	<td class="t12b"><div align="center" class="Estilo17"><?php echo $henpsum; ?></div></td>
	<td class="t12b"><div align="center" class="Estilo17"><?php echo $trcnsum; ?></div></td>
	<td class="t12b"><div align="center" class="Estilo17"><?php echo $vcisum; ?></div></td>
	<td class="t12b"><div align="center" class="Estilo17"><?php echo $vsisum; ?></div></td>
	<td class="t12b"><div align="center" class="Estilo17"><?php echo $kmsum; ?></div></td>
	<td class="t12b"><div align="center" class="Estilo17"><?php echo $manejosum; ?></div></td>
	<td class="t12b"><div align="center" class="Estilo17"><?php echo $movilizacionsum; ?></div></td>
	<td class="t12b"><div align="center" class="Estilo17"><?php echo $repososumund; ?></div></td>
	</tr>
</table>
<span class="Estilo19">Consolidado:</span>
<table align="center" border="1">
<tr> 
<?php
echo '<td>Horas Extras Diurnas (HED+HEDP+TRCD) - Hrs </td><td><div align="center">'.$sumahed=$hedsum+$hedpsum+$trcdsum.'</div></td></tr>';
echo '<td>Horas Extras Nocturnas (HEN+HENP+TRCD) - Hrs</td><td><div align="center">'.$sumahen=$hensum+$henpsum+$trcnsum.'</div></div></td></tr>';
echo '<td>Horas Extras Totales (Diurnas + Nocturnas)- Hrs</td><td><div align="center">'.$sumhe=$sumahen+$sumahed.'</div></td></tr>';
echo '<td>7mos d&iacute;as trabajados -  D&iacute;a(s)</td><td><div align="center">'.$septimoci.'</div></td></tr>';
echo '<td>Vi&aacute;ticos (VCI+VSI) - Bs.F.</td><td><div align="center">'.$vt=$vcisum+$vsisum.'</div></td></tr>';
?>
</table>
<div align="center">
  <p class="t12b Estilo2">&nbsp;</p>
  <p class="t12b Estilo2">&nbsp;</p>
  <p class="t12b Estilo2">
		<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="103" height="24">
		<param name="movie" value="button31.swf">
		<param name="quality" value="high">
		<embed src="button31.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="103" height="24" ></embed>
    </object>
  </p>
</div>
<?php
break;

// --------------------------------------
// ------------------CASO 2
// --------------------------------------
case 2:
$citemp=0;
//$result5 = mysql_query("TRUNCATE tbl_temp");
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
$septimoci=0;
$resposoentreochoci=0;

if($citemp<$row["ci"])
	{
	$citemp=$row["ci"];
	$reposoentreochoci=0;
	$queryci = mysql_query("select * from jornada where ci='$citemp' and fecha BETWEEN '$newfecha1' AND '$newfecha2'");
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
			
		$hesumci=$hedsumci+$hensumci;
		$hesum=$hesum+$hedsumci+$hensumci;
		
		$viaticosumci=$viaticosumci+$row["vci"]+$row["vsi"];
		$viaticosum=$viaticosum+$row["vci"]+$row["vsi"];
		
		$kmsumci=$kmsumci+$row["kilometraje"];
		$kmsum=$kmsum+$row["kilometraje"];
		
		$manejosumci=$manejosumci+$row["manejo"];
		$manejosum=$manejosum+$row["manejo"];
		
		$movilizacionsumci=$movilizacionsumci+$row["movilizacion"];
		$movilizacionsum=$movilizacionsum+$row["movilizacion"];
		
		$day=substr($row["fecha"],8,2);
		$month=substr($row["fecha"],5,2);
		$year=substr($row["fecha"],0,4);
		
		$fechamysql=$year."-".$month."-".$day;
		$dia_semana=date ("l", mktime(0, 0, 0,$month, $day, $year));
		if ($row["tipodia"]==3)
			{
			$septimoci=$septimoci+1;
			$septimo=$septimo+1;
			}
			switch($row["reposo"]){
				case 8:
				$reposoentreochoci=$reposoentreochoci+1;
				$reposoentreocho=$reposoentreocho+1;
				break;
				case 4:
				$reposoentreochoci=$reposoentreochoci+1;
				$reposoentreocho=$reposoentreocho+1;
				break;
			}
		}
	
$sql = "INSERT INTO tbl_temp (ci,hd,feriado,hed,hen,sumhe,septimoci,viaticosumci,kilometraje,manejosumci,movilizacionsumci,reposo) VALUES ('$citemp','$hdsumci','$feriadosumci','$hedsumci','$hensumci','$hesumci','$septimoci','$viaticosumci','$kmsumci','$manejosumci','$movilizacionsumci','$reposoentreochoci')";
$result = mysql_query($sql);
}
}

?>
<h2 class="t12b Estilo2"><em><strong><font color="#009900">Consulta de Jornadas </font></strong></em></h2>
<h2 class="t12b Estilo2"><em><strong><font color="#009900">Detallado  entre el  <?php	echo $inicio_x_estruc; ?> y el <?php	echo $fin_x_estruc; ?></font></strong></em></h2>
<p class="t12b Estilo2"><em><strong><font color="#009900">Para <?php echo $estselect; ?></font></strong></em></p>
<table height="37" align="center" border="1">
	<tr bgcolor="#FFFFFF" bordercolor="#0000FF">
	<td width="36" class="t12b"><div align="center" class="Estilo19">
	  <div align="center">C&eacute;dula</div></td>
	<td width="48" class="t12b"><div align="center" class="Estilo19">
	  <div align="center">Nombres
	</div></td>
	<td width="47" class="t12b"><div align="center" class="Estilo19">
	  <div align="center">Apellidos
	</div></td>
    <td width="52" class="t12b"><div align="center" class="Estilo19">SAL.(Hrs)</div></td>
	<td width="54" class="t12b"><div align="center" class="Estilo17">FER.(D&Iacute;A)</div></td>
	<td width="54" class="t12b"><div align="center" class="Estilo17">HED.(Hrs)</div></td>
    <td width="54" class="t12b"><div align="center" class="Estilo17">HEN.(Hrs)</div></td>
	<td width="69" class="t12b">
	<?php if($_POST[ordenar]==1)
		{
		?>
		<div align="center" class="Estilo3 Estilo17"><strong>HE SUMA (Hrs)</strong>
		<?php
		}else{
		?>
		<div align="center" class="Estilo17">HE SUMA (Hrs)
		<?php
		}
		?>
	</div></td>
    <td width="70" class="t12b"><div align="center" class="Estilo17">7MO D&Iacute;A</div></td>
	<?php if($_POST[ordenar]==2)
		{
		?>
		<td width="53" class="t12b"><div align="center" class="Estilo3 Estilo17"><strong>Vi&aacute;ticos (Bs.F.)</strong>
		<?php
		}else{
		?>
		<td width="53" class="t12b"><div align="center" class="Estilo17">Vi&aacute;ticos (Bs.F.)
		<?php
		}
		?>
	</div></td>
	<td width="74" class="t12b"><div align="center" class="Estilo17">KM. (Bs.F.)</div></td>
	<td width="69" class="t12b"><div align="center" class="Estilo17">MAN. (Bs.F.)</div></td>
	<td width="70" class="t12b"><div align="center" class="Estilo17">MOV. (Bs.F.)</div></td>
	<td width="59" class="t12b">
	<?php if($_POST[ordenar]==3)
		{
		?>
		<div align="center" class="Estilo3 Estilo17"><strong>REP. (D&Iacute;A)</strong>
		<?php
		}else{
		?>
		<div align="center" class="Estilo17">REP. (D&Iacute;A)
		<?php
		}
		?>
		</div></td>
	  
	  </div></td>
	</tr>
<tr>
<?php
	switch($_POST[ordenar])
		{
		case 1:
			$result3 = mysql_query("select * from tbl_temp ORDER BY sumhe DESC");
		break;
		case 2:
			$result3 = mysql_query("select * from tbl_temp ORDER BY viaticosumci DESC");
		break;
		case 3:
			$result3 = mysql_query("select * from tbl_temp ORDER BY reposo DESC");
		break;
		}

while ($row=mysql_fetch_array($result3))
	{
	$cedul=$row[ci];
	$query = mysql_query("SELECT * FROM traba WHERE ci='$cedul'");
		while ($columna=mysql_fetch_array($query))
			{
			$cedula=$columna[ci];
			$nombres=$columna[nombres];
			$apellidos=$columna[apellidos];
			}
?>
    <td class="t12b"><div align="center" class="Estilo17"><?php echo $cedula; ?></div></td>
	<td class="t12b"><div align="left" class="Estilo17"><?php echo $nombres; ?></div></td>
	<td class="t12b"><div align="left" class="Estilo17"><?php echo $apellidos; ?></div></td>
	<td class="t12b"><div align="right" class="Estilo17"><?php echo $row[hd]; ?></div></td>
	<td class="t12b"><div align="right" class="Estilo17"><?php $feriado=str_replace('.',',',$row[feriado]); echo $feriado; ?></div></td>
	<td class="t12b"><div align="right" class="Estilo17"><?php $hed=str_replace('.',',',$row[hed]); echo $hed; ?></div></td>
    <td class="t12b"><div align="right" class="Estilo17"><?php $hen=str_replace('.',',',$row[hen]); echo $hen; ?></div></td>
	<td class="t12b">
	<?php if($_POST[ordenar]==1)
		{
		?>
		<div align="right" class="Estilo3 Estilo17"><strong>
		<?php $sumhe=str_replace('.',',',$row[sumhe]); echo $sumhe; ?></strong>
		<?php
		}else{
		?>
		<div align="right" class="Estilo17">
		<?php $sumhe=str_replace('.',',',$row[sumhe]); echo $sumhe; 
		}
	?>
	</div></td>
    <td class="t12b"><div align="right" class="Estilo17"><?php $septimoci=str_replace('.',',',$row[septimoci]); echo $septimoci; ?></div></td>
	<td class="t12b">
	<?php if($_POST[ordenar]==2)
		{
		?>
		<div align="right" class="Estilo3 Estilo17"><strong>
		<?php $viaticosumci=str_replace('.',',',$row[viaticosumci]); echo $viaticosumci; ?></strong>
		<?php
		}else{
		?>
		<div align="right" class="Estilo17">
		<?php $viaticosumci=str_replace('.',',',$row[viaticosumci]); echo $viaticosumci;
		}
	?>
	</div></td>
	<td class="t12b"><div align="right" class="Estilo17"><?php echo $row[kilometraje]; ?></div></td>
	<td class="t12b"><div align="right" class="Estilo17"><?php $manejosumci=str_replace('.',',',$row[manejosumci]); echo $manejosumci; ?></div></td>
	<td class="t12b"><div align="right" class="Estilo17"><?php echo $row[movilizacionsumci]; ?></div></td>
	<td class="t12b">
	<?php if($_POST[ordenar]==3)
		{
		?>
		<div align="right" class="Estilo3 Estilo17"><strong><?php $reposo=str_replace('.',',',$row[reposo]); echo $reposo; ?></strong>
		<?php
		}else{
		?>
		<div align="right" class="Estilo17"><?php $reposo=str_replace('.',',',$row[reposo]); echo $reposo;
		}
		?>
	</div></td>
	</tr>
<?php
}

?>
</table>
<span class="Estilo19">Consolidado:</span>
<table align="center" border="1">
<tr bgcolor="#FFFFFF" bordercolor="#0000FF"> 
<?php
echo '<td>Horas Extras Diurnas (HED+HEDP+TRCD) - Hrs</td><td>'.$sumahed=$hedsum+$hedpsum+$trcdsum.'</td></tr>';
echo '<td>Horas Extras Nocturnas (HEN+HENP+TRCD) -  Hrs.</td><td>'.$sumahen=$hensum+$henpsum+$trcnsum.'</td></tr>';
echo '<td>Horas Extras Totales (Diurnas + Nocturnas) - Hrs.</td><td>'.$sumhe=$sumahen+$sumahed.'</td></tr>';
echo '<td>7mos d&iacute;as trabajados -  d&iacute;a(s)</td><td>'.$septimo.'</td></tr>';
echo '<td>Vi&aacute;ticos (VCI+VSI) -  Bs.F.</td><td>'.$viaticosum.'</td></tr>';
$result5 = mysql_query("TRUNCATE tbl_temp");
?>
</table>
<div align="center">
  <p class="t12b Estilo2">&nbsp;</p>
  <p class="t12b Estilo2">&nbsp;</p>
  <p class="t12b Estilo2">
		<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="103" height="24">
		<param name="movie" value="button31.swf">
		<param name="quality" value="high">
		<embed src="button31.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="103" height="24" ></embed>
    </object>
  </p>
</div>
<?php
break;
}
}
?>

</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</form>
</div></td>
</BODY>
</HTML>