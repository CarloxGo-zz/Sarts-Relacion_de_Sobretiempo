<?php
include ("security_system.php");
?>
<HTML>
<HEAD>
<TITLE>Visualizar Jornada a ser borrada. Sistema ARTS Online</TITLE>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript">
contents=new Array();

function TCN_addContent(str){
	contents.push(str);
	arrayValues = new Array();
	for(i=0;i<contents.length;i++){
		arrayValues[i]=contents[i].split(separator);
	}
}

function TCN_makeComboGroup(){
	comboGroup=new Array();
	args=TCN_makeComboGroup.arguments;
	for(i=0;i<args.length;i++){
		comboGroup[i]=MM_findObj(args[i]);
	}
}

function TCN_startCombo(){
	combo1=comboGroup[0];
	for (i=0;i<arrayValues.length;i++){
		existe=false;
		for(j=0;j<combo1.options.length;j++){
			if(arrayValues[i][0]==combo1.options[j].text){
				existe=true;
			}
		}
		if(existe==false){
			combo1.options[combo1.options.length]=new Option(arrayValues[i][0],arrayValues[i][1]);
		}//end if
	}//for(i)
	combo1.options[0].selected=true;
	TCN_reload(combo1);
}//function

function TCN_reload(from){
//averiguamos el indice del combo que llama:
	for(j=0;j<comboGroup.length;j++){
		if(comboGroup[j]==from){
			//el nuestro es el siguiente
			i=j+1;
			thisCombo=comboGroup[i];
			prevCombo=comboGroup[i-1];
			prevComboTextIndex=j*2;
			thisComboIndex=i;
			thisComboTextIndex=(i*2);
			thisComboValueIndex=(i*2)+1;
		}
	}
	for (m=thisCombo.options.length-1;m>=0;m--){
		thisCombo.options[m]=null;
	}
	for(i=0;i<arrayValues.length;i++){
		existe=false;
		if(arrayValues[i][prevComboTextIndex]==prevCombo.options[prevCombo.selectedIndex].text){
			for(j=0;j<thisCombo.options.length;j++){
				if(arrayValues[i][thisComboTextIndex]==thisCombo.options[j].text){
					existe=true;
				}
			}
			if(existe==false){
				thisCombo.options[thisCombo.options.length]=new Option(arrayValues[i][thisComboTextIndex],arrayValues[i][thisComboValueIndex]);
			}
		}
	}
	thisCombo.options[0].selected=true;
	if(thisComboIndex<comboGroup.length-1){
		TCN_reload(thisCombo);
	}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}
</script>

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
.Estilo92 {color: #FFFF00; font-size: 9px; font-family: Geneva, Arial, Helvetica, sans-serif; }
.Estilo93 {font-size: 9px; color: #FFFF00; }
.Estilo101 {font-size: 9px; color: #FFFF00; font-weight: bold; font-family: Geneva, Arial, Helvetica, sans-serif; }
.Estilo102 {color: #FFFF00}
.Estilo103 {color: #0099FF}
.Estilo104 {
	color: #2770DB;
	font-family: Georgia, "Times New Roman", Times, serif;
}
.Estilo105 {
	font-weight: bold;
	color: #FFFFFF;
}
.Estilo110 {
	color: #FFFF00;
	font-weight: bold;
}
.Estilo138 {font-size: 9px; color: #FFFF00; font-weight: bold; }
.Estilo139 {color: #0033FF}
.Estilo142 {color: #0033FF; font-size: 10; }
.Estilo4 {	color: #0033FF;
	font-size: 18px;
}
.Estilo143 {color: #0000FF}
-->
</style>
</HEAD>

<BODY BGCOLOR=#FFFFFF background="images/bgb.gif" vlink="#0000FF" LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0 tracingsrc="images/-downdis.gif" tracingopacity="100" oncontextmenu="return false">
<td colspan="3" valign="middle"><div align="center"> 
<table width="778" border="0" cellspacing="0" cellpadding="0">
  <tr>
<td align="right" background="images/index_01.gif"><img src="images/index_03.gif" width=59 height=34 alt=""><a href="inicio.html"><img src="images/index_ini.gif" alt="" width=82 height=34 border="0"></a><img src="images/index_faq.GIF" width=82 height=34 alt=""><img src="images/index_link.gif" width=89 height=34 alt=""><a href="menu_sarts.html" target="_blank"><img src="images/index_sarts.gif" alt="" width=71 height=34 border="0"></a><img src="images/index_contac.GIF" width=85 height=34 alt=""></td>
  </tr>
</table>
<p align="center">
  <?php

// Obtenemos y traducimos el nombre del día
$dia=date("l");
if ($dia=="Monday") $dia="Lunes";
if ($dia=="Tuesday") $dia="Martes";
if ($dia=="Wednesday") $dia="Miércoles";
if ($dia=="Thursday") $dia="Jueves";
if ($dia=="Friday") $dia="Viernes";
if ($dia=="Saturday") $dia="Sabado";
if ($dia=="Sunday") $dia="Domingo";

// Obtenemos el número del día
$dia2=date("d");

// Obtenemos y traducimos el nombre del mes
$mes=date("F");
if ($mes=="January") $mes="Enero";
if ($mes=="February") $mes="Febrero";
if ($mes=="March") $mes="Marzo";
if ($mes=="April") $mes="Abril";
if ($mes=="May") $mes="Mayo";
if ($mes=="June") $mes="Junio";
if ($mes=="July") $mes="Julio";
if ($mes=="August") $mes="Agosto";
if ($mes=="September") $mes="Setiembre";
if ($mes=="October") $mes="Octubre";
if ($mes=="November") $mes="Noviembre";
if ($mes=="December") $mes="Diciembre";

// Obtenemos el año
$ano=date("Y");

// Imprimimos la fecha completa
echo "$dia $dia2 de $mes de $ano";

?>
</p>
<form name="form1" method="post" action="delete_jornada_ci_bd.php">
 <div align="center">
    <table width="902" border="2">
      <tr>
        <td width="82" height="26" bordercolor="#0000FF" bgcolor="#2770DB"><span class="Estilo101">REGION</span></td>
        <td width="177" bordercolor="#0000FF" bgcolor="#2770DB"><span class="Estilo102">
          <label>
          <?php
		// Conexion el servidor
$dbh = mysql_connect("localhost", "wwwsart_root", "M4X1mu5") or die("No se pudo conectar a la base de datos".mysql_error());
mysql_select_db("wwwsart_sarts",$dbh);
		 
		$result = mysql_query("select * from traba where ci='$ci' and condicion='1'");
		while ($row=mysql_fetch_array($result))
		{
			echo '<input name="regionm" size="25" maxlength="25" type="text" readonly="readonly" value="'.$row[region].'">';
		  ?>
          </label>
        </span></td>
        <td width="95" bordercolor="#0000FF" bgcolor="#2770DB"><span class="Estilo101">DIRECCI&Oacute;N</span></td>
        <td width="222" bordercolor="#0000FF" bgcolor="#2770DB"><span class="Estilo102">
          <label></label>
          <?php
			echo '<input name="direccionm" size="30" maxlength="30" type="text" readonly="readonly" value="'.$row[direccion].'">';
		  ?>
        </span></td>
        <td width="69" bordercolor="#0000FF" bgcolor="#2770DB"><span class="Estilo101">GERENCIA</span></td>
        <td width="215" bordercolor="#0000FF" bgcolor="#2770DB"><span class="Estilo102">
          <label>
          <?php
			echo '<input name="gerenciam" size="25" maxlength="25" type="text" readonly="readonly" value="'.$row[gerencia].'">';
		  ?>
          </label>
        </span></td>
      </tr>
      <tr>
        <td width="82" height="26" bordercolor="#0000FF" bgcolor="#2770DB"><span class="Estilo101">COORDINACI&Oacute;N</span></td>
        <td width="176" bordercolor="#0000FF" bgcolor="#2770DB"><span class="Estilo102">
          <label></label>
          <?php
		  echo '<input name="coordinacionm" size="25" maxlength="25" type="text" readonly="readonly" value="'.$row[coordinacion].'">';
		  ?>
        </span></td>
        <td width="96" bordercolor="#0000FF" bgcolor="#2770DB"><span class="Estilo101">DEPARTAMENTO</span></td>
        <td width="222" bordercolor="#0000FF" bgcolor="#2770DB"><span class="Estilo102">
          <label></label>
          <?php
		  echo '<input name="estructuram" size="30" maxlength="30" type="text" readonly="readonly" value="'.$row[estructura].'">';
		  ?>
        </span></td>
        <td width="69" bordercolor="#0000FF" bgcolor="#2770DB"><span class="Estilo101">JEFATURA</span></td>
        <td width="215" bordercolor="#0000FF" bgcolor="#2770DB"><span class="Estilo102">
          <label>
          <?php
		  echo '<input name="jefaturam" size="25" maxlength="25" type="text" readonly="readonly" value="'.$row[jefatura].'">';
		  ?>
          </label>
        </span></td>
        </tr>
      <tr>
        <td bordercolor="#0000FF" bgcolor="#2770DB"><span class="Estilo101">ESTRUCTURA</span></td>
        <td bordercolor="#0000FF" bgcolor="#2770DB"><span class="Estilo102">
          <label></label>
          <?php
		  echo '<input name="id_estructuram" size="25" maxlength="25" type="text" readonly="readonly" value="'.$row[id_estructura].'">';
		  ?>
        </span></td>
        <td bordercolor="#0000FF" bgcolor="#2770DB"><span class="Estilo101">CARGO</span></td>
        <td bordercolor="#0000FF" bgcolor="#2770DB"><span class="Estilo102">
          <label></label>
          <?php
		  echo '<input name="cargom" size="30" maxlength="30" type="text" readonly="readonly" value="'.$row[cargo].'">';
		  ?>
        </span></td>
        <td bordercolor="#0000FF" bgcolor="#2770DB"><span class="Estilo101">CONDICI&Oacute;N</span></td>
        <td bordercolor="#0000FF" bgcolor="#2770DB"><span class="Estilo102">
          <label></label>
          <?php
		  echo '<input name="estatusm" size="25" maxlength="25" type="text" readonly="readonly" value="'.$row[estatus].'">';
		  ?>
        </span></td>
        </tr>
    </table>
    <table width="902" border="2">
      <tr>
        <td width="82" bordercolor="#0000FF" bgcolor="#2770DB"><span class="Estilo101">APELLIDOS</span></td>
        <td width="353" bordercolor="#0000FF" bgcolor="#2770DB"><label><span class="Estilo102">
        <?php
		  echo '<input name="apellidosm" size="25" maxlength="25" type="text" readonly="readonly" value="'.$row[apellidos].'">';
		  ?>
        </span></label></td>
        <td width="156" bordercolor="#0000FF" bgcolor="#2770DB"><span class="Estilo101">C&Eacute;DULA DE IDENTIDAD</span></td>
        <td width="281" bordercolor="#0000FF" bgcolor="#2770DB"><span class="Estilo102">
          <label></label>
          <?php
		  echo '<input name="cim" type="text" readonly="readonly" value="'.$ci.'">';
		  ?>
        </span></td>
      </tr>
      <tr>
        <td height="26" bordercolor="#0000FF" bgcolor="#2770DB"><span class="Estilo101">NOMBRES</span></td>
        <td bordercolor="#0000FF" bgcolor="#2770DB"><label>
          <?php
		  echo '<input name="nombresm" size="25" maxlength="25" type="text" readonly="readonly" value="'.$row[nombres].'">';
		  ?>
        </label></td>
        <td bordercolor="#0000FF" bgcolor="#2770DB"><span class="Estilo101">HORARIO DE TRABAJO</span></td>
        <td bordercolor="#0000FF" bgcolor="#2770DB"><span class="Estilo102">
          <label></label>
          <?php
		  echo '<input name="horariom" type="text" readonly="readonly" value="'.$row[horario].'">';
		  }
		  
		  ?>
        </span></td>
      </tr>
    </table>
    </div>
  <h4 align="center" class="Estilo104">ELIMINAR  JORNADA DEL D&Iacute;A <?php echo $fecha; ?>  </h4>
  <div align="center"><table width="896" border="1">
      <tr>
        <td width="68" bordercolor="#0000FF" bgcolor="#2770DB" class="t12b"><div align="center" class="Estilo92 Estilo105 Estilo102">
          <div align="center" class="Estilo102">D&Iacute;A</div>
        </div></td>
        <td width="46" bordercolor="#0000FF" bgcolor="#2770DB" class="t12b"><div align="center" class="Estilo92 Estilo105 Estilo102">
          <div align="center">
            <p class="Estilo102">SALARIO 004</p>
          </div>
        </div></td>
        <td width="61" bordercolor="#0000FF" bgcolor="#2770DB" class="t12b"><div align="center" class="Estilo92 Estilo105 Estilo102">
          <div align="center" class="Estilo102">D&Iacute;A FERIADOS TRABAJADO  087 </div>
        </div></td>
        <td width="45" bordercolor="#0000FF" bgcolor="#2770DB" class="t12b"><div align="center" class="Estilo92 Estilo105 Estilo102">
          <div align="center" class="Estilo102">H.E. DIURNAS 052 </div>
        </div></td>
        <td width="64" bgcolor="#2770DB" class="t12b"><div align="center" class="Estilo92 Estilo105 Estilo102">
          <div align="center" class="Estilo102">H.E. DIURNAS GUARDIAS PROGRAMA. 052 </div>
        </div></td>
        <td width="64" bgcolor="#2770DB" class="t12b"><div align="center" class="Estilo93 Estilo102">
          <p><strong>TIEMPO DE REPOSO COMIDA DIURNO </strong><strong>055 </strong></p>
          </div></td>
        <td width="61" bgcolor="#2770DB" class="t12b"><div align="center" class="Estilo93 Estilo102"><strong>BONO NOCTURNO 051 </strong></div></td>
        <td width="72" bgcolor="#2770DB" class="t12b"><div align="center" class="Estilo93 Estilo102"><strong>H.E. NOCTURNAS 053 </strong></div></td>
        <td width="79" bgcolor="#2770DB" class="t12b"><div align="center" class="Estilo93 Estilo102"><strong>H.E. NOCTURNAS GUARDIA PROGRAMADA 053 </strong></div></td>
        <td width="79" bgcolor="#2770DB" class="t12b"><div align="center" class="Estilo93 Estilo102"><strong>TIEMPO DE REPOSO COMIDA NOCTURNO 363 </strong></div></td>
        <td width="84" bgcolor="#2770DB" class="t12b"><div align="center" class="Estilo93 Estilo102"><strong>VIATICO C/INCIDENCIA 345 </strong></div></td>
        <td width="97" bgcolor="#2770DB" class="t12b"><div align="center" class="Estilo93 Estilo102"><strong>VIATICO S/INCIDENCIA 363 </strong></div></td>
      </tr>
      <tr>
        <td width="69" height="35" bordercolor="#0000FF"><div align="left" class="Estilo139">

          <div align="center">
            <?php
$day=substr($fecha,0,2);
$month=substr($fecha,3,2);
$year=substr($fecha,6,4);

$dia_semana=date ("l", mktime(0, 0, 0,$month, $day, $year));
if ($dia_semana=="Monday") echo $dia="Lunes";
if ($dia_semana=="Tuesday") echo $dia="Martes";
if ($dia_semana=="Wednesday") echo $dia="Miércoles";
if ($dia_semana=="Thursday") echo $dia="Jueves";
if ($dia_semana=="Friday") echo $dia="Viernes";
if ($dia_semana=="Saturday") echo $dia="Sábado";
if ($dia_semana=="Sunday") echo $dia="Domingo";


?>
          </div>
        </div></td>
        <td width="45" bordercolor="#0000FF">
        	<div align="center">
<?php
			$fecharef=$year."-".$month."-".$day;
			$result2 = mysql_query("select * from jornada where ci='$ci' and fecha='$fecharef'");
			while ($row=mysql_fetch_array($result2))
			{

echo '<input type"text" name="hd" readonly="readonly" value="'.$row[hd].'" size="2">';
?>
		</div></td>
        <td width="60" bordercolor="#0000FF">
		  <div align="center">
<?php
echo '<input type"text" name="feriado" readonly="readonly" value="'.$row[feriado].'" size="2">';
?>

		  </div></td>
        <td width="45" bordercolor="#0000FF">
			<div align="center">
			<?php
			  echo '<input type"text" name="hed" readonly="readonly" value="'.$row[hed].'" size="2">';
			?>
		    </div></td>
        <td width="65" bordercolor="#0000FF">
			<div align="center">
			<?php
			  echo '<input type"text" name="hedp" readonly="readonly" value="'.$row[hedp].'" size="2">';
			?>
		    </div></td>
        <td width="65" bordercolor="#0000FF">
			<div align="center">
			<?php
			  echo '<input type"text" name="trcd" readonly="readonly" value="'.$row[trcd].'" size="3">';
			?>
			</div></td>
        <td width="59" bordercolor="#0000FF">
          <div align="center">
            <?php
			  echo '<input type"text" name="bonocturno" readonly="readonly" value="'.$row[bonocturno].'" size="3">';
			?>
          </div></td>
        <td width="73" bordercolor="#0000FF">
			<div align="center">
			<?php
			  echo '<input type"text" name="hen" readonly="readonly" value="'.$row[hen].'" size="2">';
			?>
			</div></td>
        <td width="79" bordercolor="#0000FF"><div align="center">
			<?php
			  echo '<input type"text" name="henp" readonly="readonly" value="'.$row[henp].'" size="2">';
			?>
        </div></td>
        <td width="78" bordercolor="#0000FF"><div align="center">
			<?php
			  echo '<input type"text" name="trcn" readonly="readonly" value="'.$row[trcn].'" size="3">';
			?>
		</div></td>
        <td width="84" bordercolor="#0000FF"><div align="center">
			<?php
			  echo '<input type"text" name="vci" readonly="readonly" value="'.$row[vci].'" size="5">';
			?>
		</div></td>
        <td width="98" bordercolor="#0000FF"><div align="center">
          	<?php
			  echo '<input type"text" name="vsi" readonly="readonly" value="'.$row[vsi].'" size="5">';
			?>
        </div></td>
      </tr>
    </table>
    <table width="896" height="72" border="1">
      <tr>
        <td width="104" bordercolor="#0000FF" bgcolor="#2770DB" class="t12b"><div align="center" class="Estilo93 Estilo110">KILOMETRAJE 347 </div></td>
        <td width="89" bordercolor="#0000FF" bgcolor="#2770DB" class="t12b"><div align="center" class="Estilo138">MANEJO 178</div></td>
        <td width="106" bordercolor="#0000FF" bgcolor="#2770DB" class="t12b"><div align="center" class="Estilo138">MOVILIZACI&Oacute;N 363</div></td>
		<td width="70" bordercolor="#0000FF" bgcolor="#2770DB" class="t12b"><div align="center" class="Estilo138">CLAVE 277 </div></td>
        <td width="93" bordercolor="#0000FF" bgcolor="#2770DB" class="t12b"><div align="center" class="Estilo138">REPOSO 045 </div></td>
        <td width="158" bordercolor="#0000FF" bgcolor="#2770DB" class="t12b"><div align="center" class="Estilo138">LUGAR DE VI&Aacute;TICO</div></td>
        <td width="230" bordercolor="#0000FF" bgcolor="#2770DB" class="t12b"><div align="center" class="Estilo138">OBSERVACI&Oacute;N</div></td>
		</tr>
      <tr>
        <td width="104" height="32" bordercolor="#0000FF">
            <div align="center" class="Estilo103">
            <?php
			  echo '<input type"text" name="km" readonly="readonly" value="'.$row[km].'" size="4">';
			?>
          </div></td>
        <td width="89" bordercolor="#0000FF" class="Estilo103">
          <div align="center">
			<?php
			  echo '<input type"text" name="manejo" readonly="readonly" value="'.$row[manejo].'" size="2">';
			?>
          </div></td>
        <td width="106" bordercolor="#0000FF"><span class="Estilo103">
            <div align="center" class="Estilo103">
			<?php
			  echo '<input type"text" name="movilizacion" readonly="readonly" value="'.$row[movilizacion].'" size="2">';
			?>
	        </div></td>
			<td bordercolor="#0000FF"><div align="center" class="Estilo103">
          	<?php
			  echo '<input type"text" name="clave277" readonly="readonly" value="'.$row[clave277].'" size="3">';
			?>
		  </div></td>
        <td width="93" bordercolor="#0000FF"><span class="Estilo103">
          <label> </label>
          </span>
            <div align="center"><span class="Estilo103">
            <?php
			  echo '<input type"text" name="reposo" readonly="readonly" value="'.$row[reposo].'" size="2">';
			?>
			</span></div></td>
        <td width="158" bordercolor="#0000FF"><div align="center" class="Estilo103">
          <label>
		  	<?php
			  echo '<input type"text" name="lugar" readonly="readonly" value="'.$row[lugar].'" size="20">';
			?>
		  </label>
        </div></td>
        <td width="230" bordercolor="#0000FF"><span class="Estilo103">
          <label> </label>
          </span>
            <div align="center"> <span class="Estilo103">
			<?php
			  echo '<input type"text" name="observacion" readonly="readonly" value="'.$row[observacion].'" size="20">';
			?>
          </span></div></td>
      </tr>
    </table>
<?php
}
	echo '<input name="fecham" type="hidden" value="'.$fecha.'">'; 
	echo '<input name="cim" type="hidden" value="'.$ci.'">';			
			
?>
  <p><span class="Estilo143">Click en [Enviar] cuando desee eliminar esta jornada </span></p>
  <table width="249" border="0">
    <tr>
      <td width="108"><label> </label>
          <div align="center">
            <input type="submit" name="Submit" value="Enviar" style="background:#FFB400">
          </div></td>
      <td width="15"><label> </label>
          <div align="center"></div></td>
      <td width="112"><label> </label>
          <div align="center">
            <input type="submit" name="Submit3" value="Ayuda" style="background:#FFB400">
        </div></td>
    </tr>
  </table>
  </div>
  <p><span class="Estilo4">&iquest;Desea Regresar al Men&uacute; Eliminar Jornada?</span></p>
  <p>
    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="103" height="24">
      <param name="movie" value="button39.swf">
      <param name="quality" value="high">
      <embed src="button39.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="103" height="24" ></embed>
    </object>
  </p>
</form>
<p align="center">
</p>
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