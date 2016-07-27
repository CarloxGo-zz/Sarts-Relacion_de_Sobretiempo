<?php
include ("security_system.php");
?>
<HTML>
<HEAD>
<TITLE>Verificar Jornada a Modificar. Sistema ARTS Online</TITLE>
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
.Estilo3 {font-size: 24px}
.Estilo11 {	text-decoration: none;
	font-size: 14px;
	text-transform: uppercase;
	color: #0033FF;
}
.Estilo18 {color: #0033FF}
.Estilo19 {color: #FF0000}
.Estilo4 {font-size: 11px}
.Estilo5 {color: #000000}
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
<form name="form1" method="post" action="mod_jornada.php">
  <?php
// Conexion el servidor
include ("includes/bdkey.php");
?>
  <h2><span class="Estilo18">Seleccione al Trabajador al cual desea</span></h2>
  <h2><span class="Estilo18">modificarle el d&iacute;a</span></h2>
  <h2><span class="Estilo18">
<?php
$fechaini=list($diaini,$mesini,$anoini)=split("/",$_POST['fecha_jornada_grupo']);
$fechaini=$diaini."-".$mesini."-".$anoini;

$daymod=substr($fechaini,0,2);
$monthmod=substr($fechaini,3,2);
$yearmod=substr($fechaini,6,4);
$fechamod=$yearmod."-".$monthmod."-".$daymod;

echo '<u>'.$_POST['fecha_jornada_grupo'].'</u>';
echo '<input name="fechaoriginal" type="hidden" value="'.$_POST['fecha_jornada_grupo'].'">';
?></span></h2>
  <table width="356" height="39" align="center" border="1">
    <tr bgcolor="#FFFFFF" bordercolor="#0000FF">
      <td width="61" class="t12b Estilo5"><div align="center">Seleccione</div></td>
      <td width="71" bgcolor="#FFFFFF" class="t12b Estilo5"><div align="center">C.I.</div></td>
      <td width="202" bgcolor="#FFFFFF" class="t12b Estilo5"><div align="center">Apellidos y Nombres</div></td>
    </tr>
    <?php
	$grupo_traba_dia=$_POST['grupo_traba_dia'];
	
	$query1=mysql_query("SELECT * FROM traba WHERE jefatura = '$grupo_traba_dia' AND condicion=1 ORDER BY apellidos ASC");
	while ($row=mysql_fetch_array($query1)){
		$ci=$row['ci'];		
		$query2=mysql_query("SELECT * FROM jornada WHERE jefatura = '$grupo_traba_dia' AND ci='$ci' AND fecha ='$fechamod'");
		if(mysql_num_rows($query2)!=0){
			echo '<tr><td><center><input type="radio" name="ci" value="'.$row[ci].'"></center></td><td class="t12b"><center>'.$row[ci].'</center></td><td class="t12b">'.$row[apellidos].", ".$row[nombres].'</td></tr>';
		}else{
			echo '<tr><td><center>x</center></td><td class="t12b"><center>'.$row[ci].'</center></td><td class="t12b">'.$row[apellidos].", ".$row[nombres].'</td></tr>';
		}
	}
		
		?>
  </table>
  <label></label>
  <table width="403" height="81" border="0">
    <tr>
      <td width="397"><div align="center">
          <p align="center" class="t12b Estilo144 Estilo3 Estilo4"><span class="t12g Estilo151">Click en [Enviar] cuando se haya seleccionado <br>
            el trabajador </span> </p>
        <table width="249" border="0">
            <tr>
              <td width="81"><label> </label>
                  <div align="center">
                    <input type="submit" name="Submit" value="Enviar" style="background:#FFB400">
                </div></td>
              <td width="92"><label> </label>
                  <div align="center">
                    <input type="reset" name="Submit2" value="Limpiar" style="background:#FFB400">
                </div></td>
              <td width="87"><label> </label>
                  <div align="center">
                    <input type="submit" name="Submit3" value="Ayuda" style="background:#FFB400">
                </div></td>
            </tr>
          </table>
      </div></td>
    </tr>
  </table>
  <H2><font color='blue'>
    <center>
      <p>
    <?php
	echo '<input name="fecha" type="hidden" value="'.$fechamod.'">';
	echo '<input name="newfecha" type="hidden" value="'.$fecha_dia1.'">';
	?>
      </p>
    </center>
  </font></H2>
  <span class="t12g Estilo7"><span class="Estilo11">&iquest;Desea regresar?</span></span>
  </center>
  </H2>
  <p>
    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="103" height="24">
      <param name="movie" value="button36.swf">
      <param name="quality" value="high">
      <embed src="button36.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="103" height="24" ></embed>
    </object>
  </p>
</form>
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