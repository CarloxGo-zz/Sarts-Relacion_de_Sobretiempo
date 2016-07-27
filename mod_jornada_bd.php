<?php
include ("security_system.php");
ini_set('error_reporting',0);
?>
<HTML>
<HEAD>
<TITLE>Modificacion ficha de trabajador</TITLE>
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
.Estilo3 {color: #069300}
.Estilo5 {color: #0000FF}
-->
</style>
</HEAD>

<BODY BGCOLOR=#FFFFFF background="images/bgb.gif" vlink="#0000FF" LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0 tracingsrc="images/-downdis.gif" tracingopacity="100" oncontextmenu="return false">
<td colspan="3" valign="middle"><div align="center"> 
<table width="778" border="0" cellspacing="0" cellpadding="0">
  <tr>
<td align="right" background="images/index_01.gif"><img src="images/index_03.gif" width=59 height=34 alt=""><a href="inicio.html"><img src="images/index_ini.gif" alt="" width=82 height=34 border="0"></a><img src="images/index_faq.GIF" width=82 height=34 alt=""><img src="images/index_link.gif" width=89 height=34 alt=""><a href="finalizar_sesion.php" target="_self"><img src="images/index_sarts.gif" alt="" width=71 height=34 border="0"></a><img src="images/index_contac.GIF" width=85 height=34 alt=""></td>
  </tr>
</table>
<table width="778" border="0" cellspacing="0" cellpadding="0">
  <tr>
	<td> <div align="right">
	  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="778" height="174">
        <param name="movie" value="3.swf">
        <param name="quality" value="high">
        <embed src="3.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="778" height="174" ></embed>
      </object>
	  <font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif"></font></div></td>
  </tr>
</table>
<table width="778" border="0" cellspacing="0" cellpadding="0">
  <tr>
	<td width="450" background="images/index_23.gif"><img src="images/index_22.gif" width=174 height=35 alt=""></td>
	<td background="images/index_27.gif"><img src="images/index_25.jpg" width=96 height=35 alt=""><img src="images/index_soft.GIF" width=92 height=35 alt=""></td>
  </tr>
</table>
<h2>&nbsp;</h2>
<form name="form2" method="post" action="">
  <h2 class="t12b Estilo2">
<?php
include ("includes/bdkey.php");
$kmm=$_POST['kmm'];
$man=$_POST['man'];

$qry1=mysql_query("SELECT * FROM aditamentos");

while ($row1=mysql_fetch_array($qry1))
		{
		$manejobd=$row1[manejo];
		$largo_si=$row1[largo_si];
		$largo_ci=$row1[largo_ci];
		$corto_si=$row1[corto_si];
		$corto_ci=$row1[corto_ci];
		}

$fecharef=$_POST[fecham];	
$cim=$_POST['cim'];
$qry2=mysql_query("SELECT * FROM traba where ci='$cim'");
while ($row2=mysql_fetch_array($qry2))
		{
		$man=$row2['manejo'];
		$regionm=$row2['region'];
		$direccionm=$row2['direccion'];
		$gerenciam=$row2['gerencia'];
		$coordinacionm=$row2['coordinacion'];
		$id_estructuram=$row2['id_estructura'];
		$estructuram=$row2['estructura'];
		$jefaturam=$row2['jefatura'];
		}

		switch($tipodia)
		{
		case 1:
			if($kmm<25)
					{
						$vcim=0;
						$vsim=0;
						$kilometrajem=0;
					}
			if($kmm>=25 && $kmm<100)
					{
						$vcim=$corto_ci;
						$vsim=$corto_si;
						if($vehiculo_propio=="on")
						{
						$kilometrajem=$kmm*2*0.1;
						}else{
						$kilometrajem=0;
						}
					}
				if($kmm>=100)
					{
						$vcim=$largo_ci;
						$vsim=$largo_si;	
						if($vehiculo_propio=="on")
						{
						$kilometrajem=$kmm*2*0.1;
						}else{
						$kilometrajem=0;
						}
					}
			switch($man)
				{
				case "SI":
					$manejom;
				break;
				case "NO":
					$manejom=0;
				break;
				}
			$clave221m;
				break;
			
			case 2:
				if($kmm<25)
					{
						$vcim=0;
						$vsim=0;
						$kilometrajem=0;
					}
				if($kmm>=25 && $kmm<100)
					{
						$vcim=$corto_ci;
						$vsim=$corto_si;
						if($vehiculo_propio=="on")
						{
						$kilometrajem=$kmm*2*0.1;
						}else{
						$kilometrajem=0;
						}
					}
				if($kmm>=100)
					{
						$vcim=$largo_ci;
						$vsim=$largo_si;
						if($vehiculo_propio=="on")
						{
						$kilometrajem=$kmm*2*0.1;
						}else{
						$kilometrajem=0;
						}	
					}
			$hdm=$_POST['hdm'];
			$feriadom=$_POST['feriadom'];
			$hedm=$_POST['hedm'];
			$hedpm=$_POST['hedpm'];
			$trcdm=$_POST['trcdm'];
			$bonocturnom=$_POST['bonocturnom'];
			$henm=$_POST['henm'];
			$henpm=$_POST['henpm'];
			$trcnm=$_POST['trcnm'];
			switch($man)
				{
				case "SI":
					$manejom=$manejobd*$manejom;
				break;
				case "NO":
					$manejom=0;
				break;
				}
				$movilizacionm=$_POST['movilizacionm'];
				echo "clave 221".$clave221m=$_POST['clave221m'];
				$clave277m=$_POST['clave277m'];
				$reposom=$_POST['reposom'];
				$lugarm=$_POST['lugarm'];
				$observacionm=$_POST['observacionm'];
			break;
		
		case 2:
			if($kmm<25)
					{
						$vcim=0;
						$vsim=0;
						$kilometrajem=0;
					}
			if($kmm>=25 && $kmm<100)
					{
						$vcim=$corto_ci;
						$vsim=$corto_si;
						if($vehiculo_propio=="on")
						{
						$kilometrajem=$kmm*2*0.1;
						}else{
						$kilometrajem=0;
						}
					}
				if($kmm>=100)
					{
						$vcim=$largo_ci;
						$vsim=$largo_si;	
						if($vehiculo_propio=="on")
						{
						$kilometrajem=$kmm*2*0.1;
						}else{
						$kilometrajem=0;
						}
					}
			switch($man)
				{
				case "SI":
					$manejom;
				break;
				case "NO":
					$manejom=0;
				break;
				}
			$clave221m;
				break;
			
			case 2:
				if($kmm<25)
					{
						$vcim=0;
						$vsim=0;
						$kilometrajem=0;
					}
				if($kmm>=25 && $kmm<100)
					{
						$vcim=$corto_ci;
						$vsim=$corto_si;
						if($vehiculo_propio=="on")
						{
						$kilometrajem=$kmm*2*0.1;
						}else{
						$kilometrajem=0;
						}
					}
				if($kmm>=100)
					{
						$vcim=$largo_ci;
						$vsim=$largo_si;
						if($vehiculo_propio=="on")
						{
						$kilometrajem=$kmm*2*0.1;
						}else{
						$kilometrajem=0;
						}	
					}
			$hdm=$_POST['hdm'];
			$feriadom=$_POST['feriadom'];
			$hedm=$_POST['hedm'];
			$hedpm=$_POST['hedpm'];
			$trcdm=$_POST['trcdm'];
			$bonocturnom=$_POST['bonocturnom'];
			$henm=$_POST['henm'];
			$henpm=$_POST['henpm'];
			$trcnm=$_POST['trcnm'];
			switch($man)
				{
				case "SI":
					$manejom=$manejobd*$manejom;
				break;
				case "NO":
					$manejom=0;
				break;
				}
				$movilizacionm=$_POST['movilizacionm'];
				echo "clave 221".$clave221m=$_POST['clave221m'];
				$clave277m=$_POST['clave277m'];
				$reposom=$_POST['reposom'];
				$lugarm=$_POST['lugarm'];
				$observacionm=$_POST['observacionm'];
			break;


			case 3:
				if($kmm<25)
					{
						$vcim=0;
						$vsim=0;
					}
				if($kmm>=25 && $kmm<100)
					{
						$vcim=$corto_ci;
						$vsim=$corto_si;
						if($vehiculo_propio=="on"){
						    $kilometrajem=$kmm*2*0.1;
						}else{
						    $kilometrajem=0;
						}	
					}
				if($kmm>=100)
					{
						$vcim=$largo_ci;
						$vsim=$largo_si;
						if($vehiculo_propio=="on"){
						    $kilometrajem=$kmm*2*0.1;
						}else{
						    $kilometrajem=0;
						}	
					}
			$hdm=$_POST['hdm'];
			$feriadom=$_POST['feriadom'];
			$hedm=$_POST['hedm'];
			$hedpm=$_POST['hedpm'];
			$trcdm=$_POST['trcdm'];
			$bonocturnom=$_POST['bonocturnom'];
			$henm=$_POST['henm'];
			$henpm=$_POST['henpm'];
			$trcnm=$_POST['trcnm'];
			switch($man)
				{
				case "SI":
					$manejom=$manej[$cont]*$manejobd;
				break;
				case "NO":
					$manejom=0;
				break;
				}
			$movilizacionm=$movilizacion[$cont];
			$clave221m=$clave221[$cont];
			$clave277m=$clave277[$cont];
			$reposom=$reposo[$cont];
			$lugarm=$lugar[$cont];
			$observacionm=$observacion[$cont];
			break;
			
			case 4:
			$hdm=0;
			$feriadom=0;
			$hedm=0;
			$hedpm=0;
			$trcdm=0;
			$bonocturnom=0;
			$henm=0;
			$henpm=0;
			$trcnm=0;
			$vcim=0;
			$vsim=0;
			$kmm=0;
			$kilometrajem=0;
			$manejom=0;
			$movilizacionm=0;
			$clave221m=0;
			$clave277m=0;
			$reposom=0;
			$lugarm=0;
			$observacionm="LIBRE";
			break;
			
			case 5:
			$hdm=0;
			$feriadom=0;
			$hedm=0;
			$hedpm=0;
			$trcdm=0;
			$bonocturnom=0;
			$henm=0;
			$henpm=0;
			$trcnm=0;
			$vcim=0;
			$vsim=0;
			$kmm=0;
			$kilometrajem=0;
			$manejom=0;
			$movilizacionm=0;
			$clave221m=0;
			$clave277m=0;
			$reposom=0;
			$lugarm=0;
			$observacionm="AUSENTE";
			break;
			
			case 6:
			$hdm=0;
			$feriadom=0;
			$hedm=0;
			$hedpm=0;
			$trcdm=0;
			$bonocturnom=0;
			$henm=0;
			$henpm=0;
			$trcnm=0;
			$vcim=0;
			$vsim=0;
			$kmm=0;
			$kilometrajem=0;
			$manejom=0;
			$movilizacionm=0;
			$clave221m=0;
			$clave277m=0;
			//--------------------------
			
			$day=substr($newfecha,8,2);
			$month=substr($newfecha,5,2);
			$year=substr($newfecha,0,4);
			
			$dia_semana=date ("l", mktime(0, 0, 0,$month, $day, $year));
			
			if ($dia_semana=="Monday") echo $dia="Lunes";
			if ($dia_semana=="Tuesday") echo $dia="Martes";
			if ($dia_semana=="Wednesday") echo $dia="Miercoles";
			if ($dia_semana=="Thursday") echo $dia="Jueves";
			if ($dia_semana=="Friday") echo $dia="Viernes";
			if ($dia_semana=="Saturday") echo $dia="Sabado";
			if ($dia_semana=="Sunday") echo $dia="Domingo";
			
			if (dia=="Sabado")
				{
				$reposom=4;
			}else{
				$reposom=8;
				}
			//----------------------------
			$lugarm=0;
			$observacionm="REPOSO";
			break;
			
			case 7:
			$hdm=0;
			$feriadom=0;
			$hedm=0;
			$hedpm=0;
			$trcdm=0;
			$bonocturnom=0;
			$henm=0;
			$henpm=0;
			$trcnm=0;
			$vcim=0;
			$vsim=0;
			$kmm=0;
			$kilometrajem=0;
			$manejom=0;
			$movilizacionm=0;
			$clave221m=0;
			$clave277m=0;
			$reposom=0;
			$lugarm=0;
			$observacionm="VACACIONES";
			break;
			
			case 8:
			$hdm=0;
			$feriadom=0;
			$hedm=0;
			$hedpm=0;
			$trcdm=0;
			$bonocturnom=0;
			$henm=0;
			$henpm=0;
			$trcnm=0;
			$vcim=0;
			$vsim=0;
			$kmm=0;
			$kilometrajem=0;
			$manejom=0;
			$movilizacionm=0;
			$clave221m=0;
			$clave277m=0;
			$reposom=0;
			$lugarm="-";
			$observacionm="VACACIONES";
			break;
			
			case 9:
			$hdm=0;
			$feriadom=0;
			$hedm=0;
			$hedpm=0;
			$trcdm=0;
			$bonocturnom=0;
			$henm=0;
			$henpm=0;
			$trcnm=0;
			$vcim=0;
			$vsim=0;
			$kmm=0;
			$kilometrajem=0;
			$manejom=0;
			$movilizacionm=0;
			$clave221m=0;
			$clave277m=0;
			$reposom=0;
			$lugarm="-";
			$observacionm="PERMISO NO REMUNERADO";
			break;
			
			case 10:
			$hdm=$hd[$cont];
			$feriadom=0;
			$hedm=0;
			$hedpm=0;
			$trcdm=0;
			$bonocturnom=0;
			$henm=0;
			$henpm=0;
			$trcnm=0;
			$vcim=0;
			$vsim=0;
			$kmm=0;
			$kilometrajem=0;
			$manejom=0;
			$movilizacionm=0;
			$clave221m=0;
			$clave277m=0;
			$reposom=0;
			$lugarm="-";
			$observacionm="PERMISO REMUNERADO".$observacion[$cont];
			break;
			
			case 11:
			$hdm=0;
			$feriadom=0;
			$hedm=0;
			$hedpm=0;
			$trcdm=0;
			$bonocturnom=0;
			$henm=0;
			$henpm=0;
			$trcnm=0;
			$vcim=0;
			$vsim=0;
			$kmm=0;
			$kilometrajem=0;
			$manejom=0;
			$movilizacionm=0;
			$clave221m=0;
			$clave277m=0;
			$reposom=0;
			$lugarm="-";
			$observacionm="7M0 D&Iacute;A LIBRE".$observacion[$cont];
			$tipodiam=3;
			break;
			
			case 12:
			$hdm=0;
			$feriadom=0;
			$hedm=0;
			$hedpm=0;
			$trcdm=0;
			$bonocturnom=0;
			$henm=0;
			$henpm=0;
			$trcnm=0;
			$vcim=0;
			$vsim=0;
			$kmm=0;
			$kilometrajem=0;
			$manejom=0;
			$movilizacionm=0;
			$clave221m=0;
			$clave277m=0;
			$reposom=0;
			$lugarm="-";
			$observacionm="PERMISO SINDICAL";
			$tipodiam=1;
			break;
			
			}

$sSQL="UPDATE jornada SET region='$regionm',direccion='$direccionm',gerencia='$gerenciam',coordinacion='$coordinacionm',estructura='$estructuram',id_estructura='$id_estructuram',jefatura='$jefaturam' ,ci='$cim',fecha='$fecharef',estatus='$estatusm',hd='$hdm',feriado='$feriadom',hed='$hedm',hedp='$hedpm',trcd='$trcdm',bonocturno='$bonocturnom',hen='$henm',henp='$henpm' ,trcn='$trcnm',vci='$vcim',vsi='$vsim',km='$kmm',kilometraje='$kilometrajem',manejo='$manejom',movilizacion='$movilizacionm',clave221='$clave221m',clave277='$clave277m',reposo='$reposom',lugar='$lugarm',observacion='$observacionm',tipodia='$tipodiam',horariotarjeta='$horariom' WHERE ci='$cim' and fecha='$fecharef'";
$result2 = mysql_query($sSQL);

mysql_close($dbh);

	echo "<H2><font color='blue'>Los datos fueron guardados con &eacute;xito!!!</font></H2>";
	echo '<div align="center">';
	echo '<table width="200" border="0">';
	echo '<tr>';
      
?>

<h1><div align="center" class="t12g Estilo2 Estilo3">Registro Actualizado</div>
</h1>
<div align="center" class="Estilo3 Estilo3">
  <p>Visualizar el contenido de la Base de Datos </p>
  <p>en Reporte</p>
</div>
  </h2>
</form>

<p class="t12g Estilo5">&iquest;Desea Modificar otra Jornada?</p>
<table width="243" border="0">
                                  <tr>
                                    <td width="116"><div align="center"><font color="#FF0000" size="2"><a title="Ayuda sobre el manejo del SARTS" href="#">
                                      <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="103" height="24">
                                        <param name="BGCOLOR" value="">
                                        <param name="movie" value="button37.swf">
                                        <param name="quality" value="high">
                                        <embed src="button37.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="103" height="24" ></embed>
                                      </object>
                                    </a></font></div></td>
                                    <td width="117"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="103" height="24">
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