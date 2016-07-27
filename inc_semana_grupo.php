<?php
include ("security_system.php");
ini_set('error_reporting',0);

if($_SESSION["level"]==1 or $_SESSION["level"]==7)
{

if($_POST['fecha_semana_grupo']=="Ninguna"){
	header("Location: cargar_jornada.php?error=1");
}
if($_POST['grupo_inc_semana']==""){
	header("Location: cargar_jornada.php?error=2");
}

?>
<HTML>
<HEAD>
<TITLE>Incluir Jornada Semanal por Grupo. Sistema ARTS Online</TITLE>

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
.Estilo93 {font-size: 9px; color: #FFFF00; }
.Estilo102 {color: #FFFF00}
.Estilo103 {color: #0099FF}
.Estilo104 {
	color: #2770DB;
	font-family: Georgia, "Times New Roman", Times, serif;
}
.Estilo110 {
	color: #FFFF00;
	font-weight: bold;
}
.Estilo138 {font-size: 9px; color: #FFFF00; font-weight: bold; }
.Estilo144 {font-size: 12px}
.Estilo151 {color: #0000FF}
.Estilo156 {font-size: 9px}
.Estilo157 {font-size: 10px}
.Estilo159 {font-size: 10px; color: #000000; }
.Estilo160 {color: #000000}
.Estilo162 {
	font-size: 11px;
	color: #FFFFFF;
	text-decoration: none;
	font-family: tahoma;
}
.Estilo168 {font-size: 11px; font-family: tahoma; color: #FFFFFF; }
.Estilo169 {font-size: 11px; color: #FFFFFF; }
-->
</style>

<!-------- Limpia caja de texto 
<script>
function limpia(elemento)
{
elemento.value = "";
}

function verifica(elemento)
{
if(elemento.value = " ")
elemento.value = "SIN OBSERVACION";
}

function verifica2(elemento)
{
if(elemento.value = " ")
elemento.value = "-";
}

</script>
--------------------->

<script>
var obj=null;
function viewHide(id)
{
var targetId, srcElement, targetElement;
var targetElement = document.getElementById(id);
if (obj!=null) 
  obj.style.display='none';
obj=targetElement;
targetElement.style.display = "";
}
</script>

<script language="javascript">
function mis_datos(){
var key=window.event.keyCode;
if (key < 48 || key > 57){
window.event.keyCode=0;
}}
</script>

<script language="JavaScript" type="text/JavaScript">
function enviar(){
var enviarme=confirm("¿Desea enviar el formulario?");
if (enviarme)
   return true ;
else
   return false ;
}
</script>
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
	<td width="450" background="images/index_23.gif"><img src="images/index_22.gif" width=174 height=35 alt=""></td>
	<td background="images/index_27.gif"><img src="images/index_25.jpg" width=96 height=35 alt=""><img src="images/index_soft.GIF" width=92 height=35 alt=""></td>
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
<form name="form1" method="post" action="inc_semana_grupo_bd.php" onSubmit="return enviar()">
 <div align="center">
    <table width="776" border="2">
      <tr>
        <td width="85" height="26" bordercolor="#0000FF" bgcolor="#2770DB" class="t12g Estilo102 Estilo156">REGION</td>
        <td width="157" bordercolor="#0000FF" bgcolor="#2770DB" class="t12g">
          <span class="Estilo159">
<?php
// Conexion el servidor
include ("includes/bdkey.php");

$fechaini=list($anoini,$mesini,$diaini)=split("-",$_POST[fecha_semana_grupo]);
$fechaini=$diaini."-".$mesini."-".$anoini;
$grupo_inc_semana=$_POST['grupo_inc_semana'];
		$result = mysql_query("select * from estruct where jefatura='$grupo_inc_semana'");
		while ($row=mysql_fetch_array($result))
			{
			echo '<input name="region" size="25" maxlength="25" type="text" readonly="readonly" value="'.$row[region].'">';
			$horariovar=$row[horariovar];
		?>
		</span></td>
        <td width="75" bordercolor="#0000FF" bgcolor="#2770DB" class="t12g Estilo102 Estilo156">DIRECCI&Oacute;N</td>
        <td width="137" bordercolor="#0000FF" bgcolor="#2770DB" class="Estilo93">
        <?php
		echo '<input name="direccion" size="27" maxlength="27" type="text" readonly="readonly" value="'.$row[direccion].'">';
		?></td>
        <td width="128" bordercolor="#0000FF" bgcolor="#2770DB" class="t12g Estilo102 Estilo156">GERENCIA</td>
        <td width="142" bordercolor="#0000FF" bgcolor="#2770DB" class="Estilo102">
          <span class="Estilo156">
          <label>
        <?php
		echo '<input name="gerencia" size="25" maxlength="25" type="text" readonly="readonly" value="'.$row[gerencia].'">';
		?>
        </label>
        </span> </td>
      </tr>
      <tr>
        <td width="85" height="26" bordercolor="#0000FF" bgcolor="#2770DB" class="t12g Estilo102 Estilo156">COORDINACI&Oacute;N</td>
        <td width="157" bordercolor="#0000FF" bgcolor="#2770DB" class="t12g Estilo160 Estilo157">
        <?php
		echo '<input name="coordinacion" size="25" maxlength="25" type="text" readonly="readonly" value="'.$row[coordinacion].'">';
		  ?></td>
        <td width="75" bordercolor="#0000FF" bgcolor="#2770DB" class="t12g Estilo102 Estilo156">DEPARTAMENTO</td>
        <td width="137" bordercolor="#0000FF" bgcolor="#2770DB" class="Estilo93">
         <?php
		  echo '<input name="estructura" size="27" maxlength="27" type="text" readonly="readonly" value="'.$row[estructura].'">';
		  ?></td>
        <td width="128" bordercolor="#0000FF" bgcolor="#2770DB" class="t12g Estilo102 Estilo156">GRUPO DE TRABAJO</td>
        <td width="142" bordercolor="#0000FF" bgcolor="#2770DB" class="Estilo102">
          <span class="Estilo156">
          <label>
          <?php
		  echo '<input name="jefatura" size="25" maxlength="25" type="text" readonly="readonly" value="'.$row[jefatura].'">';
		  $jef=$row[jefatura];
		  ?>
          </label>
          </span> </td>
        </tr>
      <tr>
        <td bordercolor="#0000FF" bgcolor="#2770DB" class="t12g Estilo102 Estilo157">ESTRUCTURA</td>
        <td bordercolor="#0000FF" bgcolor="#2770DB" class="t12g Estilo160 Estilo157">
         <?php
echo '<input name="id_estructura" size="25" maxlength="25" type="text" readonly="readonly" value="'.$row[id_estructura].'">';
		  ?>		  </td>
		  <td bordercolor="#0000FF" bgcolor="#2770DB" class="t12g Estilo102 Estilo157">HORARIO</td>
          <td bordercolor="#0000FF" bgcolor="#2770DB" class="t12g Estilo160 Estilo157">
            <select name="horario">
            <option value="07:00-15:00" selected>07:00-15:00</option>
            <option value="08:00-16:00">08:00-16:00</option>
			<option value="15:00-23:00">15:00-23:00</option>
            <option value="23:00-07:00">23:00-07:00</option>
            <option value="07:30-16:30">07:30-16:30</option>
			<option value="07:00-18:00">07:00-18:00</option>
            <option value="16:00-00:00">16:00-00:00</option>
            <option value="00:00-08:00">00:00-08:00</option>
			<option value="MTTO.">MTTO.</option>
            </select>
		  <?php
		  }
		  ?>
		  </td>
        </tr>
    </table>
    </div>
 <h4 align="center" class="Estilo104">SEMANA  DEL D&Iacute;A
   <?php
	echo '<u>'.$fechaini.'</u>';
	?> AL 
   <?php
	function suma_fechas($fecha,$ndias)
	{
	if (preg_match("/[0-9]{1,2}-[0-9]{1,2}-([0-9][0-9]){1,2}/",$fecha))
	list($dia,$mes,$ano)=split("-",$fecha);
	$nueva = mktime(0,0,0, $mes,$dia,$ano) + $ndias * 24 * 60 * 60;
	$nuevafecha=date("d-m-Y",$nueva);
	return ($nuevafecha);
	}
	$fechamas6=suma_fechas($fechaini, 6);
			
		$day3=substr($fechamas6,0,2);
		$month3=substr($fechamas6,3,2);
		$year3=substr($fechamas6,6,4);
		$fecha_fin=$day3."-".$month3."-".$year3;
		
		echo '<u>'.$fecha_fin.'</u>';
		
		$cuenta=$_POST['cuenta'];
		$plt_semana=$_POST['plt_semana'];
		
		$query = mysql_query("SELECT * FROM plantillas WHERE cuenta='$cuenta' AND nombre_plantilla='$plt_semana'");
		while ($registro = mysql_fetch_array($query))
			{
			$dia=$registro['dia'];
			switch($dia)
				{
				case 0:
				$hd0=$registro[hd];
				$hed0=$registro[hed];
				$hedp0=$registro[hedp];
				$trcd0=$registro[trcd];
				$bonocturno0=$registro[bonocturno];
				$hen0=$registro[hen];
				$henp0=$registro[henp];
				$trcn0=$registro[trcn];
				$clave2210=$registro[clave221];
				$clave2770=$registro[clave277];
				break;
				
				case 1:
				$hd1=$registro[hd];
				$hed1=$registro[hed];
				$hedp1=$registro[hedp];
				$trcd1=$registro[trcd];
				$bonocturno1=$registro[bonocturno];
				$hen1=$registro[hen];
				$henp1=$registro[henp];
				$trcn1=$registro[trcn];
				$clave2211=$registro[clave221];
				$clave2771=$registro[clave277];
				break;
				
				case 2:
				$hd2=$registro[hd];
				$hed2=$registro[hed];
				$hedp2=$registro[hedp];
				$trcd2=$registro[trcd];
				$bonocturno2=$registro[bonocturno];
				$hen2=$registro[hen];
				$henp2=$registro[henp];
				$trcn2=$registro[trcn];
				$clave2212=$registro[clave221];
				$clave2772=$registro[clave277];
				break;
				
				case 3:
				$hd3=$registro[hd];
				$hed3=$registro[hed];
				$hedp3=$registro[hedp];
				$trcd3=$registro[trcd];
				$bonocturno3=$registro[bonocturno];
				$hen3=$registro[hen];
				$henp3=$registro[henp];
				$trcn3=$registro[trcn];
				$clave2213=$registro[clave221];
				$clave2773=$registro[clave277];
				break;
				
				case 4:
				$hd4=$registro[hd];
				$hed4=$registro[hed];
				$hedp4=$registro[hedp];
				$trcd4=$registro[trcd];
				$bonocturno4=$registro[bonocturno];
				$hen4=$registro[hen];
				$henp4=$registro[henp];
				$trcn4=$registro[trcn];
				$clave2214=$registro[clave221];
				$clave2774=$registro[clave277];
				break;
				
				case 5:
				$hd5=$registro[hd];
				$hed5=$registro[hed];
				$hedp5=$registro[hedp];
				$trcd5=$registro[trcd];
				$bonocturno5=$registro[bonocturno];
				$hen5=$registro[hen];
				$henp5=$registro[henp];
				$trcn5=$registro[trcn];
				$clave2215=$registro[clave221];
				$clave2775=$registro[clave277];
				break;
				
				case 6:
				$hd6=$registro[hd];
				$hed6=$registro[hed];
				$hedp6=$registro[hedp];
				$trcd6=$registro[trcd];
				$bonocturno6=$registro[bonocturno];
				$hen6=$registro[hen];
				$henp6=$registro[henp];
				$trcn6=$registro[trcn];
				$clave2216=$registro[clave221];
				$clave2776=$registro[clave277];
				break;
				
				}
			}
			
		  ?>
   </span></h4>
    <table width="779" border="1">
      <tr>
        <td width="132" bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo102 Estilo93 Estilo102"><strong>D&Iacute;A</strong></div></td>
        <td width="85"><div align="center">
          <?php
echo $fecha1=suma_fechas($fechaini, 0);
echo '<br />';
$day1=substr($fecha1,0,2);
$month1=substr($fecha1,3,2);
$year1=substr($fecha1,6,4);

$dia1_semana=date ("l", mktime(0, 0, 0,$month1, $day1, $year1));
if ($dia1_semana=="Monday") echo $dia1="Lunes";
if ($dia1_semana=="Tuesday") echo $dia1="Martes";
if ($dia1_semana=="Wednesday") echo $dia1="Miércoles";
if ($dia1_semana=="Thursday") echo $dia1="Jueves";
if ($dia1_semana=="Friday") echo $dia1="Viernes";
if ($dia1_semana=="Saturday") echo $dia1="S&aacute;bado";
if ($dia1_semana=="Sunday") echo $dia1="Domingo";

$fechadia1=$year1."-".$month1."-".$day1;
echo '<input name="fechadia1" type="hidden" value="'.$fechadia1.'">';
?>
        </div></td>
        <td width="85"><div align="center">
<?php
echo $fecha2=suma_fechas($fechaini, 1)."\n";

$day2=substr($fecha2,0,2);
$month2=substr($fecha2,3,2);
$year2=substr($fecha2,6,4);

$dia2_semana=date ("l", mktime(0, 0, 0,$month2, $day2, $year2));

if ($dia2_semana=="Monday") echo $dia2="Lunes";
if ($dia2_semana=="Tuesday") echo $dia2="Martes";
if ($dia2_semana=="Wednesday") echo $dia2="Miércoles";
if ($dia2_semana=="Thursday") echo $dia2="Jueves";
if ($dia2_semana=="Friday") echo $dia2="Viernes";
if ($dia2_semana=="Saturday") echo $dia2="S&aacute;bado";
if ($dia2_semana=="Sunday") echo $dia2="Domingo";

$fechadia2=$year2."-".$month2."-".$day2;
echo '<input name="fechadia2" type="hidden" value="'.$fechadia2.'">';
?>
		</span></div></td>
        <td width="85"><div align="center">
<?php
echo $fecha3=suma_fechas($fechaini, 2)."\n";

$day3=substr($fecha3,0,2);
$month3=substr($fecha3,3,2);
$year3=substr($fecha3,6,4);

$dia3_semana=date ("l", mktime(0, 0, 0,$month3, $day3, $year3));

if ($dia3_semana=="Monday") echo $dia3="Lunes";
if ($dia3_semana=="Tuesday") echo $dia3="Martes";
if ($dia3_semana=="Wednesday") echo $dia3="Miércoles";
if ($dia3_semana=="Thursday") echo $dia3="Jueves";
if ($dia3_semana=="Friday") echo $dia3="Viernes";
if ($dia3_semana=="Saturday") echo $dia3="S&aacute;bado";
if ($dia3_semana=="Sunday") echo $dia3="Domingo";

$fechadia3=$year3."-".$month3."-".$day3;
echo '<input name="fechadia3" type="hidden" value="'.$fechadia3.'">';
?>
        </span></div></td>
        <td width="85"><div align="center">
<?php
echo $fecha4=suma_fechas($fechaini, 3)."\n";

$day4=substr($fecha4,0,2);
$month4=substr($fecha4,3,2);
$year4=substr($fecha4,6,4);

$dia4_semana=date ("l", mktime(0, 0, 0,$month4, $day4, $year4));

if ($dia4_semana=="Monday") echo $dia4="Lunes";
if ($dia4_semana=="Tuesday") echo $dia4="Martes";
if ($dia4_semana=="Wednesday") echo $dia4="Miércoles";
if ($dia4_semana=="Thursday") echo $dia4="Jueves";
if ($dia4_semana=="Friday") echo $dia4="Viernes";
if ($dia4_semana=="Saturday") echo $dia4="S&aacute;bado";
if ($dia4_semana=="Sunday") echo $dia4="Domingo";

$fechadia4=$year4."-".$month4."-".$day4;
echo '<input name="fechadia4" type="hidden" value="'.$fechadia4.'">';
?>
        </span></div></td>
        <td width="85"><div align="center">
<?php
echo $fecha5=suma_fechas($fechaini, 4)."\n";

$day5=substr($fecha5,0,2);
$month5=substr($fecha5,3,2);
$year5=substr($fecha5,6,4);

$dia5_semana=date ("l", mktime(0, 0, 0,$month5, $day5, $year5));

if ($dia5_semana=="Monday") echo $dia5="Lunes";
if ($dia5_semana=="Tuesday") echo $dia5="Martes";
if ($dia5_semana=="Wednesday") echo $dia5="Miércoles";
if ($dia5_semana=="Thursday") echo $dia5="Jueves";
if ($dia5_semana=="Friday") echo $dia5="Viernes";
if ($dia5_semana=="Saturday") echo $dia5="S&aacute;bado";
if ($dia5_semana=="Sunday") echo $dia5="Domingo";

$fechadia5=$year5."-".$month5."-".$day5;
echo '<input name="fechadia5" type="hidden" value="'.$fechadia5.'">';
?>
        </span></div></td>
        <td width="85"><div align="center">
<?php
echo $fecha6=suma_fechas($fechaini, 5)."\n";

$day6=substr($fecha6,0,2);
$month6=substr($fecha6,3,2);
$year6=substr($fecha6,6,4);

$dia6_semana=date ("l", mktime(0, 0, 0,$month6, $day6, $year6));

if ($dia6_semana=="Monday") echo $dia6="Lunes";
if ($dia6_semana=="Tuesday") echo $dia6="Martes";
if ($dia6_semana=="Wednesday") echo $dia6="Miércoles";
if ($dia6_semana=="Thursday") echo $dia6="Jueves";
if ($dia6_semana=="Friday") echo $dia6="Viernes";
if ($dia6_semana=="Saturday") echo $dia6="S&aacute;bado";
if ($dia6_semana=="Sunday") echo $dia6="Domingo";

$fechadia6=$year6."-".$month6."-".$day6;
echo '<input name="fechadia6" type="hidden" value="'.$fechadia6.'">';
?>
</span></div></td>
<td width="85"><div align="center">
<?php
echo $fecha7=suma_fechas($fechaini, 6)."</br>";

$day7=substr($fecha7,0,2);
$month7=substr($fecha7,3,2);
$year7=substr($fecha7,6,4);

$dia7_semana=date ("l", mktime(0, 0, 0,$month7, $day7, $year7));

if ($dia7_semana=="Monday") echo $dia7="Lunes";
if ($dia7_semana=="Tuesday") echo $dia7="Martes";
if ($dia7_semana=="Wednesday") echo $dia7="Miércoles";
if ($dia7_semana=="Thursday") echo $dia7="Jueves";
if ($dia7_semana=="Friday") echo $dia7="Viernes";
if ($dia7_semana=="Saturday") echo $dia7="S&aacute;bado";
if ($dia7_semana=="Sunday") echo $dia7="Domingo";

$fechadia7=$year7."-".$month7."-".$day7;
echo '<input name="fechadia7" type="hidden" value="'.$fechadia7.'">';

?>
      </span></div></td>
      </tr>
      <tr>
        <td bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo102 Estilo93 Estilo102"><strong>SALARIO 004</strong></div></td>
        <td>
          <div align="center">
            <select name="hd0" style="width:80px">
                <option value="0">0</option>
				<?php
				if($horariovar==1)
				{
				?>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="7">7</option>
				<option value="8">8</option>
                
				<?php
				}else{
					switch($dia1)
						{
						case "S&aacute;bado":
							if($jef=="LINEAS ENERGIZADAS" or $jef=="TRANS ARAGUA MTTO" or $coordinacion=="DISTRIBUCION MIRANDA")
								{
								echo '<option value="0" >0</option>';
								}else{
                				echo '<option value="4" selected>4</option>';
								}
						break;
						
						case "Domingo":
							?>
                			<option value="5">5</option>
                			<option value="8">8</option>
							<?php
						break;
						
						default:
						
						if($jef=="TRANS ARAGUA MTTO" or $jef=="LINEAS ENERGIZADAS" or $coordinacion=="DISTRIBUCION MIRANDA")
								{
								switch($dia1)
									{
									case "Viernes":
										?>
                						<option value="8" selected>8</option>
                						<?php
									break;
									
									default:
										?>
                						<option value="9" selected>9</option>
                						<?php
									break;
									}
								}else{
									?>
                					<option value="8" selected>8</option>
               						<?php
								}
						break;
						}
					}
					if($_POST['llenado_semana']==2)
						{
						if($hd0!="")
							{
							echo '<option value='.$hd0.' selected>'.$hd0.'</option>';
							}
						}
				?>
            </select>
          </div></td>
        <td><div align="center">
          <div align="center">
            <select name="hd1" style="width:80px">
			  <option value="0">0</option>
				<?php
				if($horariovar==1)
				{
				?>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="7">7</option>
				<option value="8">8</option>
                <?php
				}else{
					switch($dia2)
						{
						case "S&aacute;bado":
							if($jef=="LINEAS ENERGIZADAS" or $jef=="TRANS ARAGUA MTTO" or $coordinacion=="DISTRIBUCION MIRANDA")
								{
								echo '<option value="0" >0</option>';
								}else{
                				echo '<option value="4" selected>4</option>';
								}
						break;
						
						case "Domingo":
							?>
                			<option value="5">5</option>
                			<option value="8">8</option>
							<?php
						break;
						
						default:
							if($jef=="LINEAS ENERGIZADAS" or $jef=="TRANS ARAGUA MTTO" or $coordinacion=="DISTRIBUCION MIRANDA")
								{
								switch($dia2)
									{
									case "Viernes":
										?>
                						<option value="8" selected>8</option>
                						<?php
									break;
									
									default:
										?>
                						<option value="9" selected>9</option>
                						<?php
									break;
									}
								}else{
									?>
                					<option value="8" selected>8</option>
               						<?php
								}
						break;
						}
					}
					if($_POST['llenado_semana']==2)
						{
						if($hd1!="")
							{
							echo '<option value='.$hd1.' selected>'.$hd1.'</option>';
							}
						}
				?>
            </select>
          </div>
        </div></td>
        <td><div align="center">
          <div align="center">
            <select name="hd2" style="width:80px">
			  <option value="0">0</option>
				<?php
				if($horariovar==1)
				{
				?>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="7">7</option>
				<option value="8">8</option>
                <?php
				}else{
					switch($dia3)
						{
						case "S&aacute;bado":
							if($jef=="LINEAS ENERGIZADAS" or $jef=="TRANS ARAGUA MTTO" or $coordinacion=="DISTRIBUCION MIRANDA")
								{
								echo '<option value="0" >0</option>';
								}else{
                				echo '<option value="4" selected>4</option>';
								}
						break;
						
						case "Domingo":
							?>
                			<option value="5">5</option>
                			<option value="8">8</option>
							<?php
						break;
						
						default:
							if($jef=="LINEAS ENERGIZADAS" or $jef=="TRANS ARAGUA MTTO" or $coordinacion=="DISTRIBUCION MIRANDA")
								{
								switch($dia3)
									{
									case "Viernes":
										?>
                						<option value="8" selected>8</option>
                						<?php
									break;
									
									default:
										?>
                						<option value="9" selected>9</option>
                						<?php
									break;
									}
								}else{
									?>
                					<option value="8" selected>8</option>
               						<?php
								}
						break;
						}
					}
					if($_POST['llenado_semana']==2)
						{
						if($hd2!="")
							{
							echo '<option value='.$hd2.' selected>'.$hd2.'</option>';
							}
						}
				?>
			</select>
          </div>
        </div></td>
        <td><div align="center">
          <div align="center">
            <select name="hd3" style="width:80px">
				<option value="0">0</option>
				<?php
				if($horariovar==1)
				{
				?>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="7">7</option>
				<option value="8">8</option>
                <?php
				}else{
					switch($dia4)
						{
						case "S&aacute;bado":
							if($jef=="LINEAS ENERGIZADAS" or $jef=="TRANS ARAGUA MTTO" or $coordinacion=="DISTRIBUCION MIRANDA")
								{
								echo '<option value="0" >0</option>';
								}else{
                				echo '<option value="4" selected>4</option>';
								}
						break;
						
						case "Domingo":
							?>
                			<option value="5">5</option>
                			<option value="8">8</option>
							<?php
						break;
						
						default:
							if($jef=="LINEAS ENERGIZADAS" or $jef=="TRANS ARAGUA MTTO" or $coordinacion=="DISTRIBUCION MIRANDA")
								{
								switch($dia4)
									{
									case "Viernes":
										?>
                						<option value="8" selected>8</option>
                						<?php
									break;
									
									default:
										?>
                						<option value="9" selected>9</option>
                						<?php
									break;
									}
								}else{
									?>
                					<option value="8" selected>8</option>
               						<?php
								}
						break;
						}
					}
					if($_POST['llenado_semana']==2)
						{
						if($hd3!="")
							{
							echo '<option value='.$hd3.' selected>'.$hd3.'</option>';
							}
						}
				?>
			</select>
          </div>
        </div></td>
        <td><div align="center">
          <div align="center">
            <select name="hd4" style="width:80px">
			 <option value="0">0</option>
				<?php
				if($horariovar==1)
				{
				?>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="7">7</option>
				<option value="8">8</option>
                <?php
				}else{
					switch($dia5)
						{
						case "S&aacute;bado":
							if($jef=="LINEAS ENERGIZADAS" or $jef=="TRANS ARAGUA MTTO" or $coordinacion=="DISTRIBUCION MIRANDA")
								{
								echo '<option value="0" >0</option>';
								}else{
                				echo '<option value="4" selected>4</option>';
								}
						break;
						
						case "Domingo":
							?>
                			<option value="5">5</option>
                			<option value="8">8</option>
							<?php
						break;
						
						default:
							if($jef=="LINEAS ENERGIZADAS" or $jef=="TRANS ARAGUA MTTO" or $coordinacion=="DISTRIBUCION MIRANDA")
								{
								switch($dia5)
									{
									case "Viernes":
										?>
                						<option value="8" selected>8</option>
                						<?php
									break;
									
									default:
										?>
                						<option value="9" selected>9</option>
                						<?php
									break;
									}
								}else{
									?>
                					<option value="8" selected>8</option>
               						<?php
								}
						break;
						}
					}
					if($_POST['llenado_semana']==2)
						{
						if($hd4!="")
							{
							echo '<option value='.$hd4.' selected>'.$hd4.'</option>';
							}
						}
				?>
			</select>
          </div>
        </div></td>
        <td><div align="center">
          <div align="center">
            <select name="hd5" style="width:80px">
			 <option value="0">0</option>
				<?php
				if($horariovar==1)
				{
				?>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="7">7</option>
				<option value="8">8</option>
                <?php
				}else{
					switch($dia6)
						{
						case "S&aacute;bado":
							if($jef=="LINEAS ENERGIZADAS" or $jef=="TRANS ARAGUA MTTO" or $coordinacion=="DISTRIBUCION MIRANDA")
								{
								echo '<option value="0" >0</option>';
								}else{
                				echo '<option value="4" selected>4</option>';
								}
						break;
						
						case "Domingo":
							?>
                			<option value="5">5</option>
                			<option value="8">8</option>
							<?php
						break;
						
						default:
							if($jef=="LINEAS ENERGIZADAS" or $jef=="TRANS ARAGUA MTTO" or $coordinacion=="DISTRIBUCION MIRANDA")
								{
								switch($dia6)
									{
									case "Viernes":
										?>
                						<option value="8" selected>8</option>
                						<?php
									break;
									
									default:
										?>
                						<option value="9" selected>9</option>
                						<?php
									break;
									}
								}else{
									?>
                					<option value="8" selected>8</option>
               						<?php
								}
						break;
						}
					}
					if($_POST['llenado_semana']==2)
						{
						if($hd5!="")
							{
							echo '<option value="'.$hd5.'" selected>'.$hd5.'</option>';
							}
						}
				?>
			</select>
          </div>
        </div></td>
        <td><div align="center">
          <div align="center">
            <select name="hd6" style="width:80px">
			 <option value="0">0</option>
				<?php
				if($horariovar==1)
				{
				?>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="7">7</option>
				<option value="8">8</option>
                <?php
				}else{
					switch($dia7)
						{
						case "S&aacute;bado":
							if($jef=="LINEAS ENERGIZADAS" or $jef=="TRANS ARAGUA MTTO" or $coordinacion=="DISTRIBUCION MIRANDA" )
								{
								echo '<option value="0" >0</option>';
								}else{
                				echo '<option value="4" selected>4</option>';
								}
						break;
						
						case "Domingo":
							?>
                			<option value="5">5</option>
                			<option value="8">8</option>
							<?php
						break;
						
						default:
							if($jef=="LINEAS ENERGIZADAS" or $jef=="TRANS ARAGUA MTTO" or $coordinacion=="DISTRIBUCION MIRANDA")
								{
								switch($dia7)
									{
									case "Viernes":
										?>
                						<option value="8" selected>8</option>
                						<?php
									break;
									
									default:
										?>
                						<option value="9" selected>9</option>
                						<?php
									break;
									}
								}else{
									?>
                					<option value="8" selected>8</option>
               						<?php
								}
						break;
						}
					}
					if($_POST['llenado_semana']==2)
						{
						if($hd6!="")
							{
							echo '<option value='.$hd6.' selected>'.$hd6.'</option>';
							}
						}
				?>
            </select>
          </div>
        </div></td>
        </tr>
      <tr>
        <td bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo102 Estilo93 Estilo102"><strong>D&Iacute;A FERiado TRABAJ.  </strong></div></td>
        <td><div align="center">
          <select name="feriado0" style="width:80px">
            <option value="0" selected>0</option>
            <option value="0.5">0.5</option>
            <option value="1">1</option>
          </select>
        </div></td>
        <td><div align="center">
            <select name="feriado1" style="width:80px">
              <option value="0" selected>0</option>
              <option value="0.5">0.5</option>
              <option value="1">1</option>
            </select>
        </div></td>
        <td><div align="center">
            <select name="feriado2" style="width:80px">
              <option value="0" selected>0</option>
              <option value="0.5">0.5</option>
              <option value="1">1</option>
            </select>
        </div></td>
        <td><div align="center">
            <select name="feriado3" style="width:80px">
              <option value="0" selected>0</option>
              <option value="0.5">0.5</option>
              <option value="1">1</option>
            </select>
        </div></td>
        <td><div align="center">
            <select name="feriado4" style="width:80px">
              <option value="0" selected>0</option>
              <option value="0.5">0.5</option>
              <option value="1">1</option>
            </select>
        </div></td>
        <td><div align="center">
            <select name="feriado5" style="width:80px">
              <option value="0" selected>0</option>
              <option value="0.5">0.5</option>
              <option value="1">1</option>
            </select>
        </div></td>
        <td><div align="center">
            <select name="feriado6" style="width:80px">
              <option value="0" selected>0</option>
              <option value="0.5">0.5</option>
              <option value="1">1</option>
            </select>
        </div></td>
      </tr>
      <tr>
        <td bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo102 Estilo93 Estilo102"><strong>H.E.D. </strong></div></td>
        <td><div align="center">
          <select name="hed0" style="width:80px">
            <option value="0" selected>0</option>
            <option value="0.5">0.5</option>
            <option value="1">1</option>
			<option value="1.5">1.5</option>
            <option value="2">2</option>
			<option value="2.5">2.5</option>
            <option value="3">3</option>
			<option value="3.5">3.5</option>
            <option value="4">4</option>
			<option value="4.5">4.5</option>
            <option value="5">5</option>
			<option value="5.5">5.5</option>
            <option value="6">6</option>
			<option value="6.5">6.5</option>
            <option value="7">7</option>
			<option value="7.5">7.5</option>
            <option value="8">8</option>
			<option value="8.5">8.5</option>
			<?php
			if($dia1=="S&aacute;bado")
			{
			echo '<option value="9">9</option>';
			echo '<option value="9.5">9 0.5</option>';
			echo '<option value="10.5">10 0.5</option>';
			} 
			if($dia1=="Domingo")
			{
			echo '<option value="9">9</option>';
			echo '<option value="9.5">9 0.5</option>';
			}
			if($coordinacion=="TRANSMISION")
			{
			?>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <?php
			}
			if($_POST['llenado_semana']==2  and $hed0!="")
				{
				echo '<option value='.$hed0.' selected>'.$hed0.'</option>';
				}
			?>
          </select>
        </div></td>
        <td><div align="center"> 
              <select name="hed1" style="width:80px">
                <option value="0" selected>0</option>
                <option value="0.5">0.5</option>
                <option value="1">1</option>
                <option value="1.5">1.5</option>
                <option value="2">2</option>
                <option value="2.5">2.5</option>
                <option value="3">3</option>
                <option value="3.5">3.5</option>
                <option value="4">4</option>
                <option value="4.5">4.5</option>
                <option value="5">5</option>
                <option value="5.5">5.5</option>
                <option value="6">6</option>
                <option value="6.5">6.5</option>
                <option value="7">7</option>
                <option value="7.5">7.5</option>
                <option value="8">8</option>
                <option value="8.5">8.5</option>
                <?php
			if($dia2=="S&aacute;bado")
			{
			echo '<option value="9">9</option>';
			echo '<option value="9.5">9 0.5</option>';
			echo '<option value="10.5">10 0.5</option>';
			} 
			if($dia2=="Domingo")
			{
			echo '<option value="9">9</option>';
			echo '<option value="9.5">9 0.5</option>';
			}
			if($coordinacion=="TRANSMISION")
			{
			?>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
            <?php
			}
			if($_POST['llenado_semana']==2  and $hed1!="")
					{
					echo '<option value='.$hed1.' selected>'.$hed1.'</option>';
					}
			?>
              </select>
            </div></td>
        <td><div align="center"> 
              <select name="hed2" style="width:80px">
                <option value="0" selected>0</option>
                <option value="0.5">0.5</option>
                <option value="1">1</option>
                <option value="1.5">1.5</option>
                <option value="2">2</option>
                <option value="2.5">2.5</option>
                <option value="3">3</option>
                <option value="3.5">3.5</option>
                <option value="4">4</option>
                <option value="4.5">4.5</option>
                <option value="5">5</option>
                <option value="5.5">5.5</option>
                <option value="6">6</option>
                <option value="6.5">6.5</option>
                <option value="7">7</option>
                <option value="7.5">7.5</option>
                <option value="8">8</option>
                <option value="8.5">8.5</option>
                <?php
			if($dia3=="S&aacute;bado")
			{
			echo '<option value="9">9</option>';
			echo '<option value="9.5">9 0.5</option>';
			echo '<option value="10.5">10 0.5</option>';
			} 
			if($dia3=="Domingo")
			{
			echo '<option value="9">9</option>';
			echo '<option value="9.5">9 0.5</option>';
			}
			if($coordinacion=="TRANSMISION")
			{
			?>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
            <?php
			}
			if($_POST['llenado_semana']==2  and $hed2!="")
					{
					echo '<option value="'.$hed2.'" selected>'.$hed2.'</option>';
					}
			?>
              </select>
            </div></td>
        <td><div align="center"> 
              <select name="hed3" style="width:80px">
                <option value="0" selected>0</option>
                <option value="0.5">0.5</option>
                <option value="1">1</option>
                <option value="1.5">1.5</option>
                <option value="2">2</option>
                <option value="2.5">2.5</option>
                <option value="3">3</option>
                <option value="3.5">3.5</option>
                <option value="4">4</option>
                <option value="4.5">4.5</option>
                <option value="5">5</option>
                <option value="5.5">5.5</option>
                <option value="6">6</option>
                <option value="6.5">6.5</option>
                <option value="7">7</option>
                <option value="7.5">7.5</option>
                <option value="8">8</option>
                <option value="8.5">8.5</option>
                <?php
			if($dia4=="S&aacute;bado")
			{
			echo '<option value="9">9</option>';
			echo '<option value="9.5">9 0.5</option>';
			echo '<option value="10.5">10 0.5</option>';
			} 
			if($dia4=="Domingo")
			{
			echo '<option value="9">9</option>';
			echo '<option value="9.5">9 0.5</option>';
			}
			if($coordinacion=="TRANSMISION")
			{
			?>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
            <?php
			}
			if($_POST['llenado_semana']==2)
				{
				if($hed3!="")
					{
					echo '<option value="'.$hed3.'" selected>'.$hed3.'</option>';
					}
				}
			?>
              </select>
            </div></td>
        <td><div align="center"> 
              <select name="hed4" style="width:80px">
                <option value="0" selected>0</option>
                <option value="0.5">0.5</option>
                <option value="1">1</option>
                <option value="1.5">1.5</option>
                <option value="2">2</option>
                <option value="2.5">2.5</option>
                <option value="3">3</option>
                <option value="3.5">3.5</option>
                <option value="4">4</option>
                <option value="4.5">4.5</option>
                <option value="5">5</option>
                <option value="5.5">5.5</option>
                <option value="6">6</option>
                <option value="6.5">6.5</option>
                <option value="7">7</option>
                <option value="7.5">7.5</option>
                <option value="8">8</option>
                <option value="8.5">8.5</option>
                <?php
			if($dia5=="S&aacute;bado")
			{
			echo '<option value="9">9</option>';
			echo '<option value="9.5">9 0.5</option>';
			echo '<option value="10.5">10 0.5</option>';
			} 
			if($dia5=="Domingo")
			{
			echo '<option value="9">9</option>';
			echo '<option value="9.5">9 0.5</option>';
			}
			if($coordinacion=="TRANSMISION")
			{
			?>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
            <?php
			}
			if($_POST['llenado_semana']==2)
				{
				if($hed4!="")
					{
					echo '<option value="'.$hed4.'" selected>'.$hed4.'</option>';
					}
				}
			?>
              </select>
            </div></td>
        <td><div align="center"> 
              <select name="hed5" style="width:80px">
                <option value="0" selected>0</option>
                <option value="0.5">0.5</option>
                <option value="1">1</option>
                <option value="1.5">1.5</option>
                <option value="2">2</option>
                <option value="2.5">2.5</option>
                <option value="3">3</option>
                <option value="3.5">3.5</option>
                <option value="4">4</option>
                <option value="4.5">4.5</option>
                <option value="5">5</option>
                <option value="5.5">5.5</option>
                <option value="6">6</option>
                <option value="6.5">6.5</option>
                <option value="7">7</option>
                <option value="7.5">7.5</option>
                <option value="8">8</option>
                <option value="8.5">8.5</option>
                <?php
			if($dia6=="S&aacute;bado")
			{
			echo '<option value="9">9</option>';
			echo '<option value="9.5">9 0.5</option>';
			echo '<option value="10.5">10 0.5</option>';
			} 
			if($dia6=="Domingo")
			{
			echo '<option value="9">9</option>';
			echo '<option value="9.5">9 0.5</option>';
			}
			if($coordinacion=="TRANSMISION")
			{
			?>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
           	<?php
			}
			if($_POST['llenado_semana']==2)
				{
				if($hed5!="")
					{
					echo '<option value="'.$hed5.'" selected>'.$hed5.'</option>';
					}
				}
			?>
              </select>
            </div></td>
        <td><div align="center"> 
              <select name="hed6" style="width:80px">
                <option value="0" selected>0</option>
                <option value="0.5">0.5</option>
                <option value="1">1</option>
                <option value="1.5">1.5</option>
                <option value="2">2</option>
                <option value="2.5">2.5</option>
                <option value="3">3</option>
                <option value="3.5">3.5</option>
                <option value="4">4</option>
                <option value="4.5">4.5</option>
                <option value="5">5</option>
                <option value="5.5">5.5</option>
                <option value="6">6</option>
                <option value="6.5">6.5</option>
                <option value="7">7</option>
                <option value="7.5">7.5</option>
                <option value="8">8</option>
                <option value="8.5">8.5</option>
                <?php
			if($dia7=="S&aacute;bado")
			{
			echo '<option value="9">9</option>';
			echo '<option value="9.5">9 0.5</option>';
			echo '<option value="10.5">10 0.5</option>';
			} 
			if($dia7=="Domingo")
			{
			echo '<option value="9">9</option>';
			echo '<option value="9.5">9 0.5</option>';
			}
			if($coordinacion=="TRANSMISION")
			{
			?>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
            <?php
			}
			if($_POST['llenado_semana']==2 and  $hed6!="")
				{
				echo '<option value="'.$hed6.'" selected>'.$hed6.'</option>';
				}
			?>
              </select>
            </div></td>
      </tr>
      <tr>
        <td bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo102 Estilo93 Estilo102"><strong>H.E.D.P. </strong></div></td>
        <td><div align="center">
          <select name="hedp0" style="width:80px">
            <option value="0" selected>0</option>
			<option value="0.5" >0.5</option>
         <?php
			if($horariovar==1) 
			{
			?>
          	<option value="1">1</option>
			<option value="9">9</option>
        	<?php
			}
			?>
			<option value="3.5" >3.5</option>
			<option value="4" >4</option>
			<option value="5" >5</option>
			<option value="8.5" >8.5</option>
			
    	<?php
			switch($dia1)
			{
			case "S&aacute;bado":
				?>
		    	<option value="8">8</option>
	            <option value="10">10</option>
    	        <option value="12">12</option>
        	    <option value="14">14</option>
            	<?php
			break;
			
			default:
				if($jef=="LINEAS ENERGIZADAS" or $coordinacion=="DISTRIBUCION MIRANDA")
					{
					?>
	          		<option value="1">1</option>
		        	<?php
					}
				?>
            	<option value="2" >2</option>
				<option value="3" >3</option>
				<option value="4" >4</option>
				<?php
				if($jef=="LINEAS ENERGIZADAS" or $coordinacion=="DISTRIBUCION MIRANDA")
					{
					?>
	          		<option value="5">5</option>
    	    		<?php
					}
					?>
            	<option value="6">6</option>
              	<?php
			break;
				}
		if($horariovar==1)
			{
			echo '<option value="2">2</option>';			
			echo '<option value="3">3</option>';
			echo '<option value="4">4</option>';
			echo '<option value="7">7</option>';
			if($dia1 !="S&aacute;bado") echo '<option value="8">8</option>';
			echo '<option value="12">12</option>';
			}
			
		if($_POST['llenado_semana']==2 and $hedp0!="")
				{
				echo '<option value="'.$hedp0.'" selected>'.$hedp0.'</option>';
				}
		?>
		</select>
        </div></td>
        <td><div align="center">
        <select name="hedp1" style="width:80px">
		<option value="0" selected>0</option>
		<option value="0.5" >0.5</option>
		<?php
			if($horariovar==1) 
			{
			?>
          	<option value="1">1</option>
			<option value="9">9</option>
        	<?php
			}
			?>
			<option value="3.5" >3.5</option>
			<option value="4" >4</option>
			<option value="5" >5</option>
			<option value="8.5" >8.5</option>
    	<?php
			switch($dia2)
			{
			case "S&aacute;bado":
				?>
		    	<option value="8">8</option>
	            <option value="10">10</option>
    	        <option value="12">12</option>
        	    <option value="14">14</option>
            	<?php
			break;
			
			default:
				if($jef=="LINEAS ENERGIZADAS" or $coordinacion=="DISTRIBUCION MIRANDA")
					{
					?>
	          		<option value="1">1</option>
		        	<?php
					}
				?>
            	<option value="2" >2</option>
				<option value="3" >3</option>
				<option value="4" >4</option>
				<?php
				if($jef=="LINEAS ENERGIZADAS" or $coordinacion=="DISTRIBUCION MIRANDA")
					{
					?>
	          		<option value="5">5</option>
    	    		<?php
					}
					?>
            	<option value="6">6</option>
              	<?php
			break;
				}
		if($horariovar==1)
			{
			echo '<option value="2">2</option>';			
			echo '<option value="3">3</option>';
			echo '<option value="4">4</option>';
			echo '<option value="7">7</option>';
			if($dia2 !="S&aacute;bado") echo '<option value="8">8</option>';
			echo '<option value="12">12</option>';
			}
			if($_POST['llenado_semana']==2 and $hedp1!="")
				{
				echo '<option value="'.$hedp1.'" selected>'.$hedp1.'</option>';
				}
			?>
			</select>
        </div></td>
        <td><div align="center">
            <select name="hedp2" style="width:80px">
			<option value="0" selected>0</option>
			<option value="0.5" >0.5</option>
		<?php
			if($horariovar==1) 
			{
			?>
          	<option value="1">1</option>
			<option value="9">9</option>
        	<?php
			}
			?>
			<option value="3.5" >3.5</option>
			<option value="4" >4</option>
			<option value="5" >5</option>
			<option value="8.5" >8.5</option>
    	<?php
			switch($dia3)
			{
			case "S&aacute;bado":
				?>
		    	<option value="8">8</option>
	            <option value="10">10</option>
    	        <option value="12">12</option>
        	    <option value="14">14</option>
            	<?php
			break;
			
			default:
				if($jef=="LINEAS ENERGIZADAS" or $coordinacion=="DISTRIBUCION MIRANDA")
					{
					?>
	          		<option value="1">1</option>
		        	<?php
					}
				?>
            	<option value="2" >2</option>
				<option value="3" >3</option>
				<option value="4" >4</option>
				<?php
				if($jef=="LINEAS ENERGIZADAS" or $coordinacion=="DISTRIBUCION MIRANDA")
					{
					?>
	          		<option value="5">5</option>
    	    		<?php
					}
					?>
            	<option value="6">6</option>
              	<?php
			break;
				}
		if($horariovar==1)
			{
			echo '<option value="2">2</option>';			
			echo '<option value="3">3</option>';
			echo '<option value="4">4</option>';
			echo '<option value="7">7</option>';
			if($dia3 !="S&aacute;bado") echo '<option value="8">8</option>';
			echo '<option value="12">12</option>';
			}
		if($_POST['llenado_semana']==2 and $hedp2!="")
				{
				echo '<option value="'.$hedp2.'" selected>'.$hedp2.'</option>';
				}
		?>
        </select>
        </div></td>
        <td><div align="center">
            <select name="hedp3" style="width:80px">
			<option value="0" selected>0</option>
			<option value="0.5" >0.5</option>
		<?php
			if($horariovar==1) 
			{
			?>
          	<option value="1">1</option>
			<option value="9">9</option>
        	<?php
			}
			?>
			<option value="3.5" >3.5</option>
			<option value="4" >4</option>
			<option value="5" >5</option>
			<option value="8.5" >8.5</option>
    	<?php
			switch($dia4)
			{
			case "S&aacute;bado":
				?>
		    	<option value="8">8</option>
	            <option value="10">10</option>
    	        <option value="12">12</option>
        	    <option value="14">14</option>
            	<?php
			break;
			
			default:
				if($jef=="LINEAS ENERGIZADAS" or $coordinacion=="DISTRIBUCION MIRANDA")
					{
					?>
	          		<option value="1">1</option>
		        	<?php
					}
				?>
            	<option value="2" >2</option>
				<option value="3" >3</option>
				<option value="4" >4</option>
				<?php
				if($jef=="LINEAS ENERGIZADAS" or $coordinacion=="DISTRIBUCION MIRANDA")
					{
					?>
	          		<option value="5">5</option>
    	    		<?php
					}
					?>
            	<option value="6">6</option>
              	<?php
			break;
				}
		if($horariovar==1)
			{
			echo '<option value="2">2</option>';			
			echo '<option value="3">3</option>';
			echo '<option value="4">4</option>';
			echo '<option value="7">7</option>';
			if($dia4 !="S&aacute;bado") echo '<option value="8">8</option>';
			echo '<option value="12">12</option>';
			}
		if($_POST['llenado_semana']==2 and $hedp3!="")
				{
				echo '<option value="'.$hedp3.'" selected>'.$hedp3.'</option>';
				}
			?>
            </select>
        </div></td>
        <td><div align="center">
        <select name="hedp4" style="width:80px">
		<option value="0" selected>0</option>
		<option value="0.5" >0.5</option>
		<?php
			if($horariovar==1) 
			{
			?>
          	<option value="1">1</option>
			<option value="9">9</option>
        	<?php
			}
			?>
			<option value="3.5" >3.5</option>
			<option value="4" >4</option>
			<option value="5" >5</option>
			<option value="8.5" >8.5</option>
    	<?php
			switch($dia5)
			{
			case "S&aacute;bado":
				?>
		    	<option value="8">8</option>
	            <option value="10">10</option>
    	        <option value="12">12</option>
        	    <option value="14">14</option>
            	<?php
			break;
			
			default:
				if($jef=="LINEAS ENERGIZADAS" or $coordinacion=="DISTRIBUCION MIRANDA")
					{
					?>
	          		<option value="1">1</option>
		        	<?php
					}
				?>
            	<option value="2" >2</option>
				<option value="3" >3</option>
				<option value="4" >4</option>
				<?php
				if($jef=="LINEAS ENERGIZADAS" or $coordinacion=="DISTRIBUCION MIRANDA")
					{
					?>
	          		<option value="5">5</option>
    	    		<?php
					}
					?>
            	<option value="6">6</option>
              	<?php
			break;
				}
		if($horariovar==1)
			{
			echo '<option value="2">2</option>';			
			echo '<option value="3">3</option>';
			echo '<option value="4">4</option>';
			echo '<option value="7">7</option>';
			if($dia5 !="S&aacute;bado") echo '<option value="8">8</option>';
			echo '<option value="12">12</option>';
			}
		if($_POST['llenado_semana']==2 and $hedp4!="")
				{
				echo '<option value="'.$hedp4.'" selected>'.$hedp4.'</option>';
				}
		?>
        </select>
        </div></td>
        <td><div align="center">
          	<select name="hedp5" style="width:80px">
         	<option value="0" selected>0</option>
			<option value="0.5" >0.5</option>
			<?php
			if($horariovar==1) 
			{
			?>
          	<option value="1">1</option>
			<option value="9">9</option>
        	<?php
			}
			?>
			<option value="3.5" >3.5</option>
			<option value="4" >4</option>
			<option value="5" >5</option>
			<option value="8.5" >8.5</option>
    		<?php
			switch($dia6)
			{
			case "S&aacute;bado":
				?>
		    	<option value="8">8</option>
	            	<option value="10">10</option>
    	        	<option value="12">12</option>
        	   	<option value="14">14</option>
            	<?php
			break;
			
			default:
				if($jef=="LINEAS ENERGIZADAS" or $coordinacion=="DISTRIBUCION MIRANDA")
					{
					?>
	          		<option value="1">1</option>
		        	<?php
					}
				?>
            	<option value="2" >2</option>
				<option value="3" >3</option>
				<option value="4" >4</option>
				<?php
				if($jef=="LINEAS ENERGIZADAS" or $coordinacion=="DISTRIBUCION MIRANDA")
					{
					?>
	          		<option value="5">5</option>
    	    		<?php
					}
					?>
            	<option value="6">6</option>
              	<?php
			break;
				}
		if($horariovar==1)
			{
			echo '<option value="2">2</option>';			
			echo '<option value="3">3</option>';
			echo '<option value="4">4</option>';
			echo '<option value="7">7</option>';
			if($dia6 !="S&aacute;bado") echo '<option value="8">8</option>';
			echo '<option value="12">12</option>';
			}
		if($_POST['llenado_semana']==2 and $hedp5!="")
				{
				echo '<option value="'.$hedp5.'" selected>'.$hedp5.'</option>';
				}
		?>
          </select>
        </div></td>
        <td><div align="center">
            <select name="hedp6" style="width:80px">
			<option value="0" selected>0</option>
			<option value="0.5">0.5</option>
		<?php
			if($horariovar==1) 
			{
			?>
          	<option value="1">1</option>
			<option value="9">9</option>
        	<?php
			}
			?>
			<option value="3.5" >3.5</option>
			<option value="4" >4</option>
			<option value="5" >5</option>
			<option value="8.5" >8.5</option>
    	<?php
			switch($dia7)
			{
			case "S&aacute;bado":
				?>
		    	<option value="8">8</option>
	            <option value="10">10</option>
    	        <option value="12">12</option>
        	    <option value="14">14</option>
            	<?php
			break;
			
			default:
				if($jef=="LINEAS ENERGIZADAS" or $coordinacion=="DISTRIBUCION MIRANDA")
					{
					?>
	          		<option value="1">1</option>
		        	<?php
					}
				?>
            	<option value="2" >2</option>
				<option value="3" >3</option>
				<option value="4" >4</option>
				<?php
				if($jef=="LINEAS ENERGIZADAS" or $coordinacion=="DISTRIBUCION MIRANDA")
					{
					?>
	          		<option value="5">5</option>
    	    		<?php
					}
					?>
            	<option value="6">6</option>
              	<?php
			break;
				}
		if($horariovar==1)
			{
			echo '<option value="2">2</option>';			
			echo '<option value="3">3</option>';
			echo '<option value="4">4</option>';
			echo '<option value="7">7</option>';
			if($dia7 !="S&aacute;bado") echo '<option value="8">8</option>';
			echo '<option value="12">12</option>';
			}
		if($_POST['llenado_semana']==2 and $hedp6!="")
				{
				echo '<option value="'.$hedp6.'" selected>'.$hedp6.'</option>';
				}
		?>
        </select>
        </div></td>
      </tr>
      <tr>
        <td bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo102 Estilo93 Estilo102"><strong>T.R.C.D.</strong></div></td>
        <td><div align="center">
          <select name="trcd0" style="width:80px">
            <option value="0" selected>0</option>
            <option value="0.5">0.5</option>
            <option value="1">1</option>
			<?php
			if($horariovar==1) echo '<option value="1.5">1 0.5</option>';
			
			if($_POST['llenado_semana']==2 and $trcd0!="")
				{
				echo '<option value="'.$trcd0.'" selected>'.$trcd0.'</option>';
				}
			?>
          </select>
        </div></td>
        <td><div align="center">
            <select name="trcd1" style="width:80px">
              <option value="0" selected>0</option>
              <option value="0.5">0.5</option>
              <option value="1">1</option>
			  <?php
			if($horariovar==1) echo '<option value="1.5">1 0.5</option>';
			
			if($_POST['llenado_semana']==2 and $trcd1!="")
				{
				echo '<option value="'.$trcd1.'" selected>'.$trcd1.'</option>';
				}
			?>
            </select>
        </div></td>
        <td><div align="center">
          <select name="trcd2" style="width:80px">
            <option value="0" selected>0</option>
            <option value="0.5">0.5</option>
            <option value="1">1</option>
			<?php
			if($horariovar==1) echo '<option value="1.5">1 0.5</option>';
			if($_POST['llenado_semana']==2 and $trcd2!="")
				{
				echo '<option value="'.$trcd2.'" selected>'.$trcd2.'</option>';
				}
			?>
          </select>
        </div></td>
        <td><div align="center">
            <select name="trcd3" style="width:80px">
              <option value="0" selected>0</option>
              <option value="0.5">0.5</option>
              <option value="1">1</option>
			<?php
			if($horariovar==1) echo '<option value="1.5">1 0.5</option>';
			if($_POST['llenado_semana']==2 and $trcd3!="")
				{
				echo '<option value="'.$trcd3.'" selected>'.$trcd3.'</option>';
				}
			?>
            </select>
        </div></td>
        <td><div align="center">
            <select name="trcd4" style="width:80px">
              <option value="0" selected>0</option>
              <option value="0.5">0.5</option>
              <option value="1">1</option>
			<?php
			if($horariovar==1) echo '<option value="1.5">1 0.5</option>';
			if($_POST['llenado_semana']==2 and $trcd4!="")
				{
				echo '<option value="'.$trcd4.'" selected>'.$trcd4.'</option>';
				}
			?>
            </select>
        </div></td>
        <td><div align="center">
            <select name="trcd5" style="width:80px">
              <option value="0" selected>0</option>
              <option value="0.5">0.5</option>
              <option value="1">1</option>
			<?php
			if($horariovar==1) echo '<option value="1.5">1 0.5</option>';
			if($_POST['llenado_semana']==2 and $trcd5!="")
				{
				echo '<option value="'.$trcd5.'" selected>'.$trcd5.'</option>';
				}
			?>
            </select>
        </div></td>
        <td><div align="center">
            <select name="trcd6" style="width:80px">
              <option value="0" selected>0</option>
              <option value="0.5">0.5</option>
              <option value="1">1</option>
			<?php
			if($horariovar==1) echo '<option value="1.5">1 0.5</option>';
			if($_POST['llenado_semana']==2 and $trcd6!="")
				{
				echo '<option value="'.$trcd6.'" selected>'.$trcd6.'</option>';
				}
			?>
            </select>
        </div></td>
      </tr>
      <tr>
        <td bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo102 Estilo93 Estilo102"><strong>BONO NOCTURNO</strong></div></td>
        <td><div align="center">
    <?php
	switch($horariovar)
	{
	case 1:
	?>
          <select name="bonocturno0" style="width:80px">
            <option value="0">0</option>
			<option value="3">3</option>
            <option value="3.5">3.5</option>
            <option value="7">7</option>
			<?php
			if($_POST['llenado_semana']==2 and $bonocturno0!="")
				{
				echo '<option value="'.$bonocturno0.'" selected>'.$bonocturno0.'</option>';
				}
			?>
          </select>
          <?php
	break;
	default:
	?>
          <input name="bonocturno0" type="text" value="0" readonly="readonly" size="9">
          <?php
	break;
	}
		  ?>
        </div></td>
        <td><div align="center">
          <?php
switch($horariovar)
	{
	case 1:
	?>
          <select name="bonocturno1" style="width:80px">
            <option value="0">0</option>
            <option value="3">3</option>
			<option value="3.5">3.5</option>
            <option value="7">7</option>
           <?php
			if($_POST['llenado_semana']==2 and $bonocturno1!="")
				{
				echo '<option value="'.$bonocturno1.'" selected>'.$bonocturno1.'</option>';
				}
			?>
		   </select>
          <?php
	break;
	default:
	?>
          <input name="bonocturno1" type="text" value="0" readonly="readonly" size="9">
          <?php
	break;
	}
		  ?>
        </div></td>
        <td><div align="center">
          <?php
switch($horariovar)
	{
	case 1:
	?>
          <select name="bonocturno2" style="width:80px">
            <option value="0">0</option>
			<option value="3">3</option>
            <option value="3.5">3.5</option>
            <option value="7">7</option>
            <?php
			if($_POST['llenado_semana']==2 and $bonocturno2!="")
				{
				echo '<option value="'.$bonocturno2.'" selected>'.$bonocturno2.'</option>';
				}
			?>
			</select>
          <?php
	break;
	default:
	?>
    <input name="bonocturno2" type="text" value="0" readonly="readonly" size="9">
    <?php
	break;
	}
		  ?>
        </div></td>
        <td><div align="center">
          <?php
switch($horariovar)
	{
	case 1:
	?>
          <select name="bonocturno3" style="width:80px">
            <option value="0">0</option>
			<option value="3">3</option>
            <option value="3.5">3.5</option>
            <option value="7">7</option>
			<?php
			if($_POST['llenado_semana']==2 and $bonocturno3!="")
				{
				echo '<option value="'.$bonocturno3.'" selected>'.$bonocturno3.'</option>';
				}
			?>
            </select>
          <?php
	break;
	default:
	?>
          <input name="bonocturno3" type="text" value="0" readonly="readonly" size="9">
          <?php
	break;
	}
		  ?>
        </div></td>
        <td><div align="center">
          <?php
switch($horariovar)
	{
	case 1:
	?>
          <select name="bonocturno4" style="width:80px">
            <option value="0">0</option>
			<option value="3">3</option>
            <option value="3.5">3.5</option>
            <option value="7">7</option>
            <?php
			if($_POST['llenado_semana']==2 and $bonocturno4!="")
				{
				echo '<option value="'.$bonocturno4.'" selected>'.$bonocturno4.'</option>';
				}
			?>
			</select>
          <?php
	break;
	default:
	?>
          <input name="bonocturno4" type="text" value="0" readonly="readonly" size="9">
          <?php
	break;
	}
		  ?>
        </div></td>
        <td><div align="center">
          <?php
switch($horariovar)
	{
	case 1:
	?>
          <select name="bonocturno5" style="width:80px">
            <option value="0">0</option>
			<option value="3">3</option>
            <option value="3.5">3.5</option>
            <option value="7">7</option>
           <?php
			if($_POST['llenado_semana']==2 and $bonocturno5!="")
				{
				echo '<option value="'.$bonocturno5.'" selected>'.$bonocturno5.'</option>';
				}
			?>
		    </select>
          <?php
	break;
	default:
	?>
          <input name="bonocturno5" type="text" value="0" readonly="readonly" size="9">
          <?php
	break;
	}
		  ?>
        </div></td>
        <td><div align="center">
          <?php
switch($horariovar)
	{
	case 1:
	?>
          <select name="bonocturno6" style="width:80px">
            <option value="0">0</option>
			<option value="3">3</option>
            <option value="3.5">3.5</option>
            <option value="7">7</option>
            <?php
			if($_POST['llenado_semana']==2 and $bonocturno6!="")
				{
				echo '<option value="'.$bonocturno6.'" selected>'.$bonocturno6.'</option>';
				}
			?>
			</select>
          <?php
	break;
	default:
	?>
          <input name="bonocturno6" type="text" value="0" readonly="readonly" size="9">
          <?php
	break;
	}
		  ?>
        </div></td>
      </tr>
      <tr>
        <td bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo102 Estilo93 Estilo102"><strong>H. E. N. </strong></div></td>
        <td><div align="center">
          <select name="hen0" style="width:80px">
		   <option value="0">0</option>
            <option value="0.5">0.5</option>
            <option value="1">1</option>
			<option value="1.5">1.5</option>
            <option value="2">2</option>
			<option value="2.5">2.5</option>
            <option value="3">3</option>
			<option value="3.5">3.5</option>
            <option value="4">4</option>
			<option value="4.5">4.5</option>
            <option value="5">5</option>
			<option value="5.5">5.5</option>
            <option value="6">6</option>
			<option value="6.5">6.5</option>
            <option value="7">7</option>
			<option value="7.5">7.5</option>
            <option value="8">8</option>
			<option value="8.5">8.5</option>
            <option value="9">9</option>
			<option value="9.5">9.5</option>
            <option value="10">10</option>
			<option value="10.5">10.5</option>
          <?php
			if($_POST['llenado_semana']==2 and $hen0!="")
				{
				echo '<option value="'.$hen0.'" selected>'.$hen0.'</option>';
				}
			?>
		  </select>
        </div></td>
        <td><div align="center">
            <select name="hen1" style="width:80px">
            <option value="0">0</option>
            <option value="0.5">0.5</option>
            <option value="1">1</option>
			<option value="1.5">1.5</option>
            <option value="2">2</option>
			<option value="2.5">2.5</option>
            <option value="3">3</option>
			<option value="3.5">3.5</option>
            <option value="4">4</option>
			<option value="4.5">4.5</option>
            <option value="5">5</option>
			<option value="5.5">5.5</option>
            <option value="6">6</option>
			<option value="6.5">6.5</option>
            <option value="7">7</option>
			<option value="7.5">7.5</option>
            <option value="8">8</option>
			<option value="8.5">8.5</option>
            <option value="9">9</option>
			<option value="9.5">9.5</option>
            <option value="10">10</option>
			<option value="10.5">10.5</option>
			<?php
			if($_POST['llenado_semana']==2 and $hen1!="")
				{
				echo '<option value="'.$hen1.'" selected>'.$hen1.'</option>';
				}
			?>
			</select>
        </div></td>
        <td><div align="center">
            <select name="hen2" style="width:80px">
            <option value="0">0</option>
            <option value="0.5">0.5</option>
            <option value="1">1</option>
			<option value="1.5">1.5</option>
            <option value="2">2</option>
			<option value="2.5">2.5</option>
            <option value="3">3</option>
			<option value="3.5">3.5</option>
            <option value="4">4</option>
			<option value="4.5">4.5</option>
            <option value="5">5</option>
			<option value="5.5">5.5</option>
            <option value="6">6</option>
			<option value="6.5">6.5</option>
            <option value="7">7</option>
			<option value="7.5">7.5</option>
            <option value="8">8</option>
			<option value="8.5">8.5</option>
            <option value="9">9</option>
			<option value="9.5">9.5</option>
            <option value="10">10</option>
			<option value="10.5">10.5</option>
			<?php
			if($_POST['llenado_semana']==2 and $hen2!="")
				{
				echo '<option value="'.$hen2.'" selected>'.$hen2.'</option>';
				}
			?>
            </select>
        </div></td>
        <td><div align="center">
            <select name="hen3" style="width:80px">
            <option value="0">0</option>
            <option value="0.5">0.5</option>
            <option value="1">1</option>
			<option value="1.5">1.5</option>
            <option value="2">2</option>
			<option value="2.5">2.5</option>
            <option value="3">3</option>
			<option value="3.5">3.5</option>
            <option value="4">4</option>
			<option value="4.5">4.5</option>
            <option value="5">5</option>
			<option value="5.5">5.5</option>
            <option value="6">6</option>
			<option value="6.5">6.5</option>
            <option value="7">7</option>
			<option value="7.5">7.5</option>
            <option value="8">8</option>
			<option value="8.5">8.5</option>
            <option value="9">9</option>
			<option value="9.5">9.5</option>
            <option value="10">10</option>
			<option value="10.5">10.5</option>
			<?php
			if($_POST['llenado_semana']==2 and $hen3!="")
				{
				echo '<option value="'.$hen3.'" selected>'.$hen3.'</option>';
				}
			?>
			</select>
        </div></td>
        <td><div align="center">
            <select name="hen4" style="width:80px">
            <option value="0">0</option>
            <option value="0.5">0.5</option>
            <option value="1">1</option>
			<option value="1.5">1.5</option>
            <option value="2">2</option>
			<option value="2.5">2.5</option>
            <option value="3">3</option>
			<option value="3.5">3.5</option>
            <option value="4">4</option>
			<option value="4.5">4.5</option>
            <option value="5">5</option>
			<option value="5.5">5.5</option>
            <option value="6">6</option>
			<option value="6.5">6.5</option>
            <option value="7">7</option>
			<option value="7.5">7.5</option>
            <option value="8">8</option>
			<option value="8.5">8.5</option>
            <option value="9">9</option>
			<option value="9.5">9.5</option>
            <option value="10">10</option>
			<option value="10.5">10.5</option>
			<?php
			if($_POST['llenado_semana']==2 and $hen4!="")
				{
				echo '<option value="'.$hen4.'" selected>'.$hen4.'</option>';
				}
			?>
			</select>
        </div></td>
        <td><div align="center">
            <select name="hen5" style="width:80px">
            <option value="0">0</option>
            <option value="0.5">0.5</option>
            <option value="1">1</option>
			<option value="1.5">1.5</option>
            <option value="2">2</option>
			<option value="2.5">2.5</option>
            <option value="3">3</option>
			<option value="3.5">3.5</option>
            <option value="4">4</option>
			<option value="4.5">4.5</option>
            <option value="5">5</option>
			<option value="5.5">5.5</option>
            <option value="6">6</option>
			<option value="6.5">6.5</option>
            <option value="7">7</option>
			<option value="7.5">7.5</option>
            <option value="8">8</option>
			<option value="8.5">8.5</option>
            <option value="9">9</option>
			<option value="9.5">9.5</option>
            <option value="10">10</option>
			<option value="10.5">10.5</option>
			<?php
			if($_POST['llenado_semana']==2 and $hen5!="")
				{
				echo '<option value="'.$hen5.'" selected>'.$hen5.'</option>';
				}
			?>
            </select>
        </div></td>
        <td><div align="center">
            <select name="hen6" style="width:80px">
            <option value="0">0</option>
            <option value="0.5">0.5</option>
            <option value="1">1</option>
			<option value="1.5">1.5</option>
            <option value="2">2</option>
			<option value="2.5">2.5</option>
            <option value="3">3</option>
			<option value="3.5">3.5</option>
            <option value="4">4</option>
			<option value="4.5">4.5</option>
            <option value="5">5</option>
			<option value="5.5">5.5</option>
            <option value="6">6</option>
			<option value="6.5">6.5</option>
            <option value="7">7</option>
			<option value="7.5">7.5</option>
            <option value="8">8</option>
			<option value="8.5">8.5</option>
            <option value="9">9</option>
			<option value="9.5">9.5</option>
            <option value="10">10</option>
			<option value="10.5">10.5</option>
			<?php
			if($_POST['llenado_semana']==2 and $hen6!="")
				{
				echo '<option value="'.$hen6.'" selected>'.$hen6.'</option>';
				}
			?>
			</select>
        </div></td>
      </tr>
      <tr>
        <td bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo102 Estilo93 Estilo102"><strong>H.E.N.P. </strong></div></td>
        <td><div align="center">
          <select name="henp0" style="width:80px">
            <option value="0" selected>0</option>
			<?php
			if($horariovar==1)
			{
			echo '<option value="0.5">0.5</option>';
			echo '<option value="1">1</option>';
			}
			?>
			<option value="2">2</option>
			<option value="3">3</option>
            <option value="4">4</option>
			<option value="4.5">4.5</option>
			<option value="5">5</option>
			<option value="5.5">5.5</option>
			<?php
			if($horariovar==1)
			{
			echo '<option value="8">8</option>';
			}
			?>
			<option value="10">10</option>
			<?php
			if($_POST['llenado_semana']==2 and $henp0!="")
				{
				echo '<option value="'.$henp0.'" selected>'.$henp0.'</option>';
				}
			?>
		</select>
        </div></td>
        <td><div align="center">
            <select name="henp1" style="width:80px">
            <option value="0" selected>0</option>
			<?php
			if($horariovar==1)
			{
			echo '<option value="0.5">0.5</option>';
			echo '<option value="1">1</option>';
			}
			?>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="4.5">4.5</option>
			<option value="5">5</option>
			<option value="5.5">5.5</option>
			<?php
			if($horariovar==1)
			{
			echo '<option value="8">8</option>';
			}
			?>
			<option value="10">10</option>
        	<?php
			if($_POST['llenado_semana']==2 and $henp1!="")
				{
				echo '<option value="'.$henp1.'" selected>'.$henp1.'</option>';
				}
			?>
		  </select>
        </div></td>
        <td><div align="center">
            <select name="henp2" style="width:80px">
              <option value="0" selected>0</option>
			<?php
			if($horariovar==1)
			{
			echo '<option value="0.5">0.5</option>';
			echo '<option value="1">1</option>';
			}
			?>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="4.5">4.5</option>
			<option value="5">5</option>
			<option value="5.5">5.5</option>
			<?php
			if($horariovar==1)
			{
			echo '<option value="8">8</option>';
			}
			?>
            <option value="10">10</option>
			<?php
			if($_POST['llenado_semana']==2 and $henp2!="")
				{
				echo '<option value="'.$henp2.'" selected>'.$henp2.'</option>';
				}
			?>
          </select>
        </div></td>
        <td><div align="center">
            <select name="henp3" style="width:80px">
              <option value="0" selected>0</option>
			<?php
			if($horariovar==1)
			{
			echo '<option value="0.5">0.5</option>';
			echo '<option value="1">1</option>';
			}
			?>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="4.5">4.5</option>
			<option value="5">5</option>
			<option value="5.5">5.5</option>
			<?php
			if($horariovar==1)
			{
			echo '<option value="8">8</option>';
			}
			?>
            <option value="10">10</option>
			<?php
			if($_POST['llenado_semana']==2 and $henp3!="")
				{
				echo '<option value="'.$henp3.'" selected>'.$henp3.'</option>';
				}
			?>
          </select>
        </div></td>
        <td><div align="center">
            <select name="henp4" style="width:80px">
           	<option value="0" selected>0</option>
			<?php
			if($horariovar==1)
			{
			echo '<option value="0.5">0.5</option>';
			echo '<option value="1">1</option>';
			}
			?>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="4.5">4.5</option>
			<option value="5">5</option>
			<option value="5.5">5.5</option>
			<?php
			if($horariovar==1)
			{
			echo '<option value="8">8</option>';
			}
			?>
            <option value="10">10</option>
         	<?php
			if($_POST['llenado_semana']==2 and $henp4!="")
				{
				echo '<option value="'.$henp4.'" selected>'.$henp4.'</option>';
				}
			?>
		 </select>
        </div></td>
        <td><div align="center">
            <select name="henp5" style="width:80px">
            <option value="0" selected>0</option>
			<?php
			if($horariovar==1)
			{
			echo '<option value="0.5">0.5</option>';
			echo '<option value="1">1</option>';
			}
			?>
			<option value="2">2</option>
            <option value="3">3</option>
			<option value="4">4</option>
			<option value="4.5">4.5</option>
			<option value="5">5</option>
			<option value="5.5">5.5</option>
			<?php
			if($horariovar==1)
			{
			echo '<option value="8">8</option>';
			}
			?>
            <option value="10">10</option>
          <?php
			if($_POST['llenado_semana']==2 and $henp5!="")
				{
				echo '<option value="'.$henp5.'" selected>'.$henp5.'</option>';
				}
			?>
		  </select>
		  </div>
        <td><div align="center">
            <select name="henp6" style="width:80px">
             <option value="0" selected>0</option>
			<?php
			if($horariovar==1)
			{
			echo '<option value="0.5">0.5</option>';
			echo '<option value="1">1</option>';
			}
			?>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="4.5">4.5</option>
			<option value="5">5</option>
			<option value="5.5">5.5</option>
			<?php
			if($horariovar==1)
			{
			echo '<option value="8">8</option>';
			}
			?>
            <option value="10">10</option>
			<?php
			if($_POST['llenado_semana']==2 and $henp6!="")
				{
				echo '<option value="'.$henp6.'" selected>'.$henp6.'</option>';
				}
			?>
          </select>
        </div></td>
      </tr>
      <tr>
        <td bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo93 Estilo102 Estilo102"><strong>T.R.C.N.</strong></div></td>
        <td><div align="center">
           <select name="trcn0" style="width:80px">
             <option value="0" selected>0</option>
              <option value="0.5">0.5</option>
            <?php
			if($_POST['llenado_semana']==2 and $trcn0!="")
				{
				echo '<option value="'.$trcn0.'" selected>'.$trcn0.'</option>';
				}
			?>
			</select>
        </div></td>
        <td><div align="center">
            <select name="trcn1" style="width:80px">
              <option value="0" selected>0</option>
              <option value="0.5">0.5</option>
            <?php
			if($_POST['llenado_semana']==2 and $trcn1!="")
				{
				echo '<option value="'.$trcn1.'" selected>'.$trcn1.'</option>';
				}
			?>
			</select>
        </div></td>
        <td><div align="center">
            <select name="trcn2" style="width:80px">
              <option value="0" selected>0</option>
              <option value="0.5">0.5</option>
            <?php
			if($_POST['llenado_semana']==2 and $trcn2!="")
				{
				echo '<option value="'.$trcn2.'" selected>'.$trcn2.'</option>';
				}
			?>
			</select>
        </div></td>
        <td><div align="center">
            <select name="trcn3" style="width:80px">
              <option value="0" selected>0</option>
              <option value="0.5">0.5</option>
            <?php
			if($_POST['llenado_semana']==2 and $trcn3!="")
				{
				echo '<option value="'.$trcn3.'" selected>'.$trcn3.'</option>';
				}
			?>
			</select>
        </div></td>
        <td><div align="center">
            <select name="trcn4" style="width:80px">
              <option value="0" selected>0</option>
              <option value="0.5">0.5</option>
            <?php
			if($_POST['llenado_semana']==2 and $trcn4!="")
				{
				echo '<option value="'.$trcn4.'" selected>'.$trcn4.'</option>';
				}
			?>
			</select>
        </div></td>
        <td><div align="center">
            <select name="trcn5" style="width:80px">
              <option value="0" selected>0</option>
              <option value="0.5">0.5</option>
            <?php
			if($_POST['llenado_semana']==2 and $trcn5!="")
				{
				echo '<option value="'.$trcn5.'" selected>'.$trcn5.'</option>';
				}
			?>
			</select>
        </div></td>
        <td><div align="center">
            <select name="trcn6" style="width:80px">
              <option value="0" selected>0</option>
              <option value="0.5">0.5</option>
			  <?php
			if($_POST['llenado_semana']==2 and $trcn6!="")
				{
				echo '<option value="'.$trcn6.'" selected>'.$trcn6.'</option>';
				}
			?>
            </select>
        </div></td>
      </tr>
      <tr>
        <td bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo93 Estilo110 Estilo102">KILOMETRAJE</div></td>
        <td><label><div align="right">
            <input name="km0" type="text" id="km0" value="0" size="9" maxlength="4" onKeyPress="mis_datos()">
          
		    <input type="checkbox" name="vehiculo_propio1" value="on">
            <span class="Estilo159">&iquest;Vehiculo Propio?</span></div></td>
        <td><div align="right"><span class="Estilo103">
          	<input name="km1" type="text" id="km1" value="0" size="9" maxlength="4" onKeyPress="mis_datos()">
            
			<input type="checkbox" name="vehiculo_propio2" value="on">
           </span><span class="Estilo159">&iquest;Vehiculo Propio?</span></div></td>
        <td><div align="right"><span class="Estilo103">
          	<input name="km2" type="text" id="km2" value="0" size="9" maxlength="4" onKeyPress="mis_datos()">
          
            <input type="checkbox" name="vehiculo_propio3" value="on">
          </span><span class="Estilo159">&iquest;Vehiculo Propio?</span></span></div></td>
        <td><div align="right"><span class="Estilo103">
          	<input name="km3" type="text" id="km3" value="0" size="9" maxlength="4" onKeyPress="mis_datos()">
          
           	<input type="checkbox" name="vehiculo_propio4" value="on">
          </span> <span class="Estilo159">&iquest;Vehiculo Propio?</span></div></td>
        <td><div align="right"><span class="Estilo103">
          	<input name="km4" type="text" id="km4" value="0" size="9" maxlength="4" onKeyPress="mis_datos()">
          
          	<input type="checkbox" name="vehiculo_propio5" value="on">
          </span><span class="Estilo159">&iquest;Vehiculo Propio?</span></div></td>
        <td><div align="right"><span class="Estilo103">
          	<input name="km5" type="text" id="km5" value="0" size="9" maxlength="4" onKeyPress="mis_datos()">
          
            <input type="checkbox" name="vehiculo_propio6" value="on">
          </span> <span class="Estilo159">&iquest;Vehiculo Propio?</span></div></td>
        <td><div align="right"><span class="Estilo103">
			<input name="km6" type="text" id="km6" value="0" size="9" maxlength="4" onKeyPress="mis_datos()">
          
			<input type="checkbox" name="vehiculo_propio7" value="on">
          </span> <span class="Estilo159">&iquest;Vehiculo Propio?</span></div></td>
	  </tr>
	  <tr>
        <td bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo93 Estilo110 Estilo102">MANEJO</div></td>
        <td><div align="center"><span class="Estilo103" style="width:80px">
            <select name="mn0" style="width:80px">
			<option value="0" selected>0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			</select>
        </span></div></td>
        <td><div align="center"><span class="Estilo103">
            <select name="mn1" style="width:80px">
			<option value="0" selected>0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			</select>
        </span></div></td>
        <td><div align="center"><span class="Estilo103">
            <select name="mn2" style="width:80px">
			<option value="0" selected>0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			</select>
        </span></div></td>
        <td><div align="center"><span class="Estilo103" style="width:80px">
          <select name="mn3" style="width:80px">
			<option value="0" selected>0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			</select>
        </span></div></td>
        <td><div align="center"><span class="Estilo103">
            <select name="mn4" style="width:80px">
			<option value="0" selected>0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			</select>
        </span></div></td>
        <td><div align="center"><span class="Estilo103">
            <select name="mn5" id="mn5" style="width:80px">
			<option value="0" selected>0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			</select>
        </span></div></td>
        <td><div align="center"><span class="Estilo103">
            <select name="mn6" id="mn6" style="width:80px">
			<option value="0" selected>0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			</select>
        </span></div></td>
	  </tr>
      <tr>
        <td bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo138 Estilo102">MOVILIZACI&Oacute;N</div></td>
        <td><div align="center"><span class="Estilo103">
            <select name="movilizacion0" style="width:80px">
			<option value="0" selected>0</option>
			<option value="2.5">2.5</option>
			<option value="5">5</option>
			<option value="10">10</option>
			</select>
        </span></div></td>
        <td><div align="center"><span class="Estilo103">
            <select name="movilizacion1" style="width:80px">
			<option value="0" selected>0</option>
			<option value="2.5">2.5</option>
			<option value="5">5</option>
			<option value="10">10</option>
			</select>
        </span></div></td>
        <td><div align="center"><span class="Estilo103">
            <select name="movilizacion2" style="width:80px">
			<option value="0" selected>0</option>
			<option value="2.5">2.5</option>
			<option value="5">5</option>
			<option value="10">10</option>
			</select>
        </span></div></td>
        <td><div align="center"><span class="Estilo103">
            <select name="movilizacion3" style="width:80px">
			<option value="0" selected>0</option>
			<option value="2.5">2.5</option>
			<option value="5">5</option>
			<option value="10">10</option>
			</select>
        </span></div></td>
        <td><div align="center"><span class="Estilo103">
            <select name="movilizacion4" style="width:80px">
			<option value="0" selected>0</option>
			<option value="2.5">2.5</option>
			<option value="5">5</option>
			<option value="10">10</option>
			</select>
        </span></div></td>
        <td><div align="center"><span class="Estilo103">
            <select name="movilizacion5" style="width:80px">
			<option value="0" selected>0</option>
			<option value="2.5">2.5</option>
			<option value="5">5</option>
			<option value="10">10</option>
			</select>
        </span></div></td>
        <td><div align="center"><span class="Estilo103">
            <select name="movilizacion6" style="width:80px">
			<option value="0" selected>0</option>
			<option value="2.5">2.5</option>
			<option value="5">5</option>
			<option value="10">10</option>
			</select>
        </span></div></td>
      </tr>
	   <tr>
        <td bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo93 Estilo110 Estilo102">CESTA TICKET 0,3</div></td>
        <td><div align="center"><span class="Estilo103" style="width:80px">
            <select name="ctc0" id="ctc0" style="width:80px">
			<option value="0" selected>0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			</select>
        </span></div></td>
        <td><div align="center"><span class="Estilo103">
            <select name="ctc1" id="ctc1" style="width:80px">
			<option value="0" selected>0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			</select>
        </span></div></td>
        <td><div align="center"><span class="Estilo103">
            <select name="ctc2" id="ctc2" style="width:80px">
			<option value="0" selected>0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			</select>
        </span></div></td>
        <td><div align="center"><span class="Estilo103" style="width:80px">
          <select name="ctc3" id="ctc3" style="width:80px">
			<option value="0" selected>0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			</select>
        </span></div></td>
        <td><div align="center"><span class="Estilo103">
            <select name="ctc4" id="ctc4" style="width:80px">
			<option value="0" selected>0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			</select>
        </span></div></td>
        <td><div align="center"><span class="Estilo103">
            <select name="ctc5" id="ctc5" style="width:80px">
			<option value="0" selected>0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			</select>
        </span></div></td>
        <td><div align="center"><span class="Estilo103">
            <select name="ctc6" id="ctc6" style="width:80px">
			<option value="0" selected>0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			</select>
        </span></div></td>
	  </tr>
      <tr>
        <td bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo138 Estilo102">CESTA TICKET 0,5</div></td>
        <td><div align="center"><span class="Estilo103">
            <select name="ctl0" style="width:80px">
			<option value="0" selected>0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			</select>
        </span></div></td>
        <td><div align="center"><span class="Estilo103">
          <select name="ctl1" style="width:80px">
            <option value="0" selected>0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
          </select>
        </span></div></td>
        <td><div align="center"><span class="Estilo103">
            <select name="ctl2" style="width:80px">
			<option value="0" selected>0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			</select>
        </span></div></td>
        <td><div align="center"><span class="Estilo103">
            <select name="ctl3" style="width:80px">
			<option value="0" selected>0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			</select>
        </span></div></td>
        <td><div align="center"><span class="Estilo103">
            <select name="ctl4" style="width:80px">
			<option value="0" selected>0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			</select>
        </span></div></td>
        <td><div align="center"><span class="Estilo103">
            <select name="ctl5" style="width:80px">
			<option value="0" selected>0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			</select>
        </span></div></td>
        <td><div align="center"><span class="Estilo103">
            <select name="ctl6" style="width:80px">
			<option value="0" selected>0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			</select>
        </span></div></td>
      </tr>
	  <tr>
        <td bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo93 Estilo110 Estilo102">CESTA TICKET 0,3 <br />(7mo D&Iacute;A) </div></td>
        <td><div align="center"><span class="Estilo103" style="width:80px">
            <select name="ctc7mo0" style="width:80px">
			<option value="0" selected>0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			</select>
        </span></div></td>
        <td><div align="center"><span class="Estilo103">
            <select name="ctc7mo1" style="width:80px">
			<option value="0" selected>0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			</select>
        </span></div></td>
        <td><div align="center"><span class="Estilo103">
            <select name="ctc7mo2" style="width:80px">
			<option value="0" selected>0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			</select>
        </span></div></td>
        <td><div align="center"><span class="Estilo103" style="width:80px">
          <select name="ctc7mo3" style="width:80px">
			<option value="0" selected>0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			</select>
        </span></div></td>
        <td><div align="center"><span class="Estilo103">
            <select name="ctc7mo4" style="width:80px">
			<option value="0" selected>0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			</select>
        </span></div></td>
        <td><div align="center"><span class="Estilo103">
            <select name="ctc7mo5" id="ctc7mo5" style="width:80px">
			<option value="0" selected>0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			</select>
        </span></div></td>
        <td><div align="center"><span class="Estilo103">
            <select name="ctc7mo6" id="ctc7mo6" style="width:80px">
			<option value="0" selected>0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			</select>
        </span></div></td>
	  </tr>
      <tr>
        <td bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo138 Estilo102">CESTA TICKET 0,5 <br />(7mo D&Iacute;A)</div></td>
        <td><div align="center"><span class="Estilo103">
            <select name="ctl7mo0" style="width:80px">
			<option value="0" selected>0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			</select>
        </span></div></td>
        <td><div align="center"><span class="Estilo103">
            <select name="ctl7mo1" style="width:80px">
			<option value="0" selected>0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			</select>
        </span></div></td>
        <td><div align="center"><span class="Estilo103">
            <select name="ctl7mo2" style="width:80px">
			<option value="0" selected>0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			</select>
        </span></div></td>
        <td><div align="center"><span class="Estilo103">
            <select name="ctl7mo3" style="width:80px">
			<option value="0" selected>0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			</select>
        </span></div></td>
        <td><div align="center"><span class="Estilo103">
            <select name="ctl7mo4" style="width:80px">
			<option value="0" selected>0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			</select>
        </span></div></td>
        <td><div align="center"><span class="Estilo103">
            <select name="ctl7mo5" style="width:80px">
			<option value="0" selected>0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			</select>
        </span></div></td>
        <td><div align="center"><span class="Estilo103">
            <select name="ctl7mo6" style="width:80px">
			<<option value="0" selected>0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			</select>
        </span></div></td>
      </tr>
      <tr>
	  <td bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo138 Estilo102">CLAVE 221</div></td>
	  <td><div align="center" class="Estilo103">
          <label></label>
        <?php
		if ($horariovar==1 && $dia1=="Domingo")
		{
		?>
        <select name="clave2210" style="width:80px">
        <option value="0" selected>0</option>
        <option value="8">8</option>
		<?php
			if($_POST['llenado_semana']==2 and $clave2210!="")
				{
				echo '<option value="'.$clave2210.'" selected>'.$clave2210.'</option>';
				}
			?>
        </select>
		<?php
		}else{
		?>
        <input name="clave2210" type="text" id="clave2210" value="0" readonly="readonly" size="9">
		<?php
		}
		?>
		</div></td>
	  	<td><div align="center" class="Estilo103">
          <label></label>
          <?php
			if ($horariovar==1 && $dia2=="Domingo")
			{
			?>
	    	<select name="clave2211" style="width:80px">
    		<option value="0" selected>0</option>
            <option value="8">8</option>
			<?php
			if($_POST['llenado_semana']==2 and $clave2211!="")
				{
				echo '<option value="'.$clave2211.'" selected>'.$clave2211.'</option>';
				}
			?>
         	</select>
      		<?php
		  	}else{
			?>
          <input name="clave2211" type="text" id="clave2211" value="0" readonly="readonly" size="9">
       		<?php
			}
			?>
	  	</div></td>
		<td><div align="center" class="Estilo103">
          <label></label>
          <?php
		if ($horariovar==1 && $dia3=="Domingo")
			{
			?>
          <select name="clave2212" style="width:80px">
            <option value="0" selected>0</option>
            <option value="8">8</option>
			<?php
			if($_POST['llenado_semana']==2 and $clave2212!="")
				{
				echo '<option value="'.$clave2212.'" selected>'.$clave2212.'</option>';
				}
			?>
          </select>
          <?php
		  	}else{
			?>
          <input name="clave2212" type="text" id="clave2212" value="0" readonly="readonly" size="9">
          <?php
			}
			?>
</div>		</td>
		<td><div align="center" class="Estilo103">
          <label>
          <?php
		if ($horariovar==1 && $dia4=="Domingo")
			{
			?>
          <select name="clave2213" style="width:80px">
            <option value="0" selected>0</option>
            <option value="8">8</option>
			<?php
			if($_POST['llenado_semana']==2 and $clave2213!="")
				{
				echo '<option value="'.$clave2213.'" selected>'.$clave2213.'</option>';
				}
			?>
          </select>
          <?php
		  	}else{
			?>
          <input name="clave2213" type="text" id="clave2213" value="0" readonly="readonly" size="9">
          <?php
			}
			?>
</label>
        </div>		</td>
	  	<td><div align="center" class="Estilo103">
          <label></label>
          <?php
		if ($horariovar==1 && $dia5=="Domingo")
			{
			?>
          <select name="clave2214" style="width:80px">
            <option value="0" selected>0</option>
            <option value="8">8</option>
			<?php
			if($_POST['llenado_semana']==2 and $clave2214!="")
				{
				echo '<option value="'.$clave2214.'" selected>'.$clave2214.'</option>';
				}
			?>
          </select>
          <?php
		  	}else{
			?>
          <input name="clave2214" type="text" id="clave2214" value="0" readonly="readonly" size="9">
          <?php
			}
			?>
</div>		</td>
	  	<td><div align="center" class="Estilo103">
          <label></label>
          <?php
		if ($horariovar==1 && $dia6=="Domingo")
			{
			?>
          <select name="clave2215" style="width:80px">
            <option value="0" selected>0</option>
            <option value="8">8</option>
			<?php
			if($_POST['llenado_semana']==2 and $clave2215!="")
				{
				echo '<option value="'.$clave2215.'" selected>'.$clave2215.'</option>';
				}
			?>
          </select>
          <?php
		  	}else{
			?>
          <input name="clave2215" type="text" id="clave2215" value="0" readonly="readonly" size="9">
          <?php
			}
			?>
</div>		</td>
	  	<td><div align="center" class="Estilo103">
          <label></label>
          <?php
		if ($horariovar==1 && $dia7=="Domingo")
			{
			?>
          <select name="clave2216" style="width:80px">
            <option value="0" selected>0</option>
            <option value="8">8</option>
			<?php
			if($_POST['llenado_semana']==2 and $clave2216!="")
				{
				echo '<option value="'.$clave2216.'" selected>'.$clave2216.'</option>';
				}
			?>
          </select>
          <?php
		  	}else{
			?>
          <input name="clave2216" type="text" id="clave2216" value="0" readonly="readonly" size="9">
          <?php
			}
			?>
</div>		</td>
	  </tr>
	  <tr>
        <td bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo138 Estilo102">CLAVE 277</div></td>
        <td><div align="center" class="Estilo103">
          <label>
          <?php
switch($jef)
	{
	case "LINEAS ENERGIZADAS":
	?>
          <select name="clave2770" style="width:80px">
            <option value="0" selected>NO</option>
            <option value="1">SI</option>
			<?php
			if($_POST['llenado_semana']==2 and $clave2210!="")
				{
				switch($clave2210)
					{
					case 0:
					echo '<option value="'.$clave2210.'" selected>NO</option>';
					break;
					
					case 1:
					echo '<option value="'.$clave2210.'" selected>SI</option>';
					break;
					}
				}
			?>
          </select>
          <?php
	break;
	default:
		  ?>
          <input name="clave2770" type="text" id="clave2770" value="0" readonly="readonly" size="9">
          <?php
	break;
	}
		  ?>
          <input name="reposo0" type="hidden" id="reposo0" value="0">
          </label>
        </div></td>
        <td><div align="center" class="Estilo103">
            <label>
            <?php
switch($jef)
	{
	case "LINEAS ENERGIZADAS":
	?>
            <select name="clave2771" style="width:80px">
              <option value="0" selected>NO</option>
              <option value="1">SI</option>
			  <?php
			if($_POST['llenado_semana']==2 and $clave2211!="")
				{
				switch($clave2211)
					{
					case 0:
					echo '<option value="'.$clave2211.'" selected>NO</option>';
					break;
					
					case 1:
					echo '<option value="'.$clave2211.'" selected>SI</option>';
					break;
					}
				}
			?>
            </select>
            <?php
	break;
	default:
		  ?>
            <input name="clave2771" type="text" id="clave2771" value="0" readonly="readonly" size="9">
            <?php
	break;
	}
		  ?>
            <input name="reposo1" type="hidden" id="reposo1" value="0">
            </label>
        </div></td>
        <td><div align="center" class="Estilo103">
            <label>
            <?php
switch($jef)
	{
	case "LINEAS ENERGIZADAS":
	?>
            <select name="clave2772" style="width:80px">
              <option value="0" selected>NO</option>
              <option value="1">SI</option>
			  <?php
			if($_POST['llenado_semana']==2 and $clave2212!="")
				{
				switch($clave2212)
					{
					case 0:
					echo '<option value="'.$clave2212.'" selected>NO</option>';
					break;
					
					case 1:
					echo '<option value="'.$clave2212.'" selected>SI</option>';
					break;
					}
				}
			?>
            </select>
            <?php
	break;
	default:
		  ?>
            <input name="clave2772" type="text" id="clave2772" value="0" readonly="readonly" size="9">
            <?php
	break;
	}
		  ?>
            <input name="reposo2" type="hidden" id="reposo2" value="0">
            </label>
        </div></td>
        <td><div align="center" class="Estilo103">
            <label>
            <?php
switch($jef)
	{
	case "LINEAS ENERGIZADAS":
	?>
            <select name="clave2773" style="width:80px">
              <option value="0" selected>NO</option>
              <option value="1">SI</option>
			<?php
			if($_POST['llenado_semana']==2 and $clave2213!="")
				{
				switch($clave2213)
					{
					case 0:
					echo '<option value="'.$clave2213.'" selected>NO</option>';
					break;
					
					case 1:
					echo '<option value="'.$clave2213.'" selected>SI</option>';
					break;
					}
				}
			?>
            </select>
            <?php
	break;
	default:
		  ?>
            <input name="clave2773" type="text" id="clave2773" value="0" readonly="readonly" size="9">
            <?php
	break;
	}
		  ?>
            <input name="reposo3" type="hidden" id="reposo3" value="0">
            </label>
        </div></td>
        <td><div align="center" class="Estilo103">
            <label>
            <?php
switch($jef)
	{
	case "LINEAS ENERGIZADAS":
	?>
            <select name="clave2774" style="width:80px">
              <option value="0" selected>NO</option>
              <option value="1">SI</option>
			  <?php
			if($_POST['llenado_semana']==2 and $clave2214!="")
				{
				switch($clave2214)
					{
					case 0:
					echo '<option value="'.$clave2214.'" selected>NO</option>';
					break;
					
					case 1:
					echo '<option value="'.$clave2214.'" selected>SI</option>';
					break;
					}
				}
			?>
            </select>
            <?php
	break;
	default:
		  ?>
            <input name="clave2774" type="text" id="clave2774" value="0" readonly="readonly" size="9">
            <?php
	break;
	}
		  ?>
            <input name="reposo4" type="hidden" id="reposo4" value="0">
            </label>
        </div></td>
        <td><div align="center" class="Estilo103">
            <label>
            <?php
switch($jef)
	{
	case "LINEAS ENERGIZADAS":
	?>
            <select name="clave2775" style="width:80px">
              <option value="0" selected>NO</option>
              <option value="1">SI</option>
			  <?php
			if($_POST['llenado_semana']==2 and $clave2215!="")
				{
				switch($clave2215)
					{
					case 0:
					echo '<option value="'.$clave2215.'" selected>NO</option>';
					break;
					
					case 1:
					echo '<option value="'.$clave2215.'" selected>SI</option>';
					break;
					}
				}
			?>
            </select>
            <?php
	break;
	default:
		  ?>
            <input name="clave2775" type="text" id="clave2775" value="0" readonly="readonly" size="9">
            <?php
	break;
	}
		  ?>
            <input name="reposo5" type="hidden" id="reposo5" value="0">
            </label>
        </div></td>
        <td><div align="center" class="Estilo103">
            <label>
            <?php
switch($jef)
	{
	case "LINEAS ENERGIZADAS":
	?>
            <select name="clave2776" style="width:80px">
              <option value="0" selected>NO</option>
              <option value="1">SI</option>
			  <?php
			if($_POST['llenado_semana']==2 and $clave2216!="")
				{
				switch($clave2216)
					{
					case 0:
					echo '<option value="'.$clave2216.'" selected>NO</option>';
					break;
					
					case 1:
					echo '<option value="'.$clave2216.'" selected>SI</option>';
					break;
					}
				}
			?>
            </select>
            <?php
	break;
	default:
		  ?>
            <input name="clave2776" type="text" id="clave2776" value="0" readonly="readonly" size="9">
            <?php
	break;
	}
		  ?>
            <input name="reposo6" type="hidden" id="reposo6" value="0">
            </label>
        </div></td>
      </tr>
      <tr>
        <td bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo138 Estilo102">LUGAR DE VI&Aacute;TICO</div></td>
        <td><div align="center"><span class="Estilo103">
         	<textarea name="lugar0" cols="10" rows="2" id="lugar0" style="width:80px" onClick="javascript: limpia(this);" onBlur="javascript: verifica2(this);" onKeyUp="this.value = this.value.toUpperCase();">-</textarea></span></div></td>
        <td><div align="center"><span class="Estilo103">
            <textarea name="lugar1" cols="10" rows="2" id="lugar1" style="width:80px" onClick="javascript: limpia(this);" onBlur="javascript: verifica2(this);" onKeyUp="this.value = this.value.toUpperCase();">-</textarea></span></div></td>
        <td><div align="center"><span class="Estilo103">
            <textarea name="lugar2" cols="10" rows="2" id="lugar2" style="width:80px" onClick="javascript: limpia(this);" onBlur="javascript: verifica2(this);" onKeyUp="this.value = this.value.toUpperCase();">-</textarea></span></div></td>
        <td><div align="center"><span class="Estilo103">
            <textarea name="lugar3" cols="10" rows="2" id="lugar3" style="width:80px" onClick="javascript: limpia(this);" onBlur="javascript: verifica2(this);" onKeyUp="this.value = this.value.toUpperCase();">-</textarea></span></div></td>
        <td><div align="center"><span class="Estilo103">
            <textarea name="lugar4" cols="10" rows="2" id="lugar4" style="width:80px" onClick="javascript: limpia(this);" onBlur="javascript: verifica2(this);" onKeyUp="this.value = this.value.toUpperCase();">-</textarea></span></div></td>
        <td><div align="center"><span class="Estilo103">
            <textarea name="lugar5" cols="10" rows="2" id="lugar5" style="width:80px" onClick="javascript: limpia(this);" onBlur="javascript: verifica2(this);" onKeyUp="this.value = this.value.toUpperCase();">-</textarea></span></div></td>
        <td><div align="center"><span class="Estilo103">
            <textarea name="lugar6" cols="10" rows="2" id="lugar6" style="width:80px" onClick="javascript: limpia(this);" onBlur="javascript: verifica2(this);" onKeyUp="this.value = this.value.toUpperCase();">-</textarea></span></div></td>
      </tr>
      <tr>
        <td bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo138 Estilo102">OBSERVACI&Oacute;N</div></td>
        <td><div align="center"><span class="Estilo103">
			<textarea name="observacion0" cols="10" rows="2" style="width:80px" onClick="javascript: limpia(this);"  onBlur="javascript: verifica(this);" onKeyUp="this.value = this.value.toUpperCase();">SIN OBSERVACION</textarea></span></div></td>
        <td><div align="center"><span class="Estilo103">
            <textarea name="observacion1" cols="10" rows="2" style="width:80px" onClick="javascript: limpia(this);"  onBlur="javascript: verifica(this);" onKeyUp="this.value = this.value.toUpperCase();">SIN OBSERVACION</textarea></span></div></td>
        <td><div align="center"><span class="Estilo103">
            <textarea name="observacion2" cols="10" rows="2" style="width:80px" onClick="javascript: limpia(this);"  onBlur="javascript: verifica(this);" onKeyUp="this.value = this.value.toUpperCase();">SIN OBSERVACION</textarea></span></div></td>
        <td><div align="center"><span class="Estilo103">
            <textarea name="observacion3" cols="10" rows="2" style="width:80px" onClick="javascript: limpia(this);"  onBlur="javascript: verifica(this);" onKeyUp="this.value = this.value.toUpperCase();">SIN OBSERVACION</textarea></span></div></td>
        <td><div align="center"><span class="Estilo103">
            <textarea name="observacion4" cols="10" rows="2" style="width:80px" onClick="javascript: limpia(this);"  onBlur="javascript: verifica(this);" onKeyUp="this.value = this.value.toUpperCase();">SIN OBSERVACION</textarea></span></div></td>
        <td><div align="center"><span class="Estilo103">
            <textarea name="observacion5" cols="10" rows="2" style="width:80px" onClick="javascript: limpia(this);"  onBlur="javascript: verifica(this);" onKeyUp="this.value = this.value.toUpperCase();">SIN OBSERVACION</textarea></span></div></td>
        <td><div align="center"><span class="Estilo103">
            <textarea name="observacion6" cols="10" rows="2" style="width:80px" onClick="javascript: limpia(this);"  onBlur="javascript: verifica(this);" onKeyUp="this.value = this.value.toUpperCase();">SIN OBSERVACION</textarea></span></div></td>
      </tr>
      <tr>
        <td bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo102"><span class="Estilo138">CLASIFICACI&Oacute;N D&Iacute;A: NORMAL</span></div></td>
        <td bgcolor="#2770DB">
          <span class="Estilo168">
				<input name="tipod0" type="radio" value="1" checked>
				NORMAL </span><span class="Estilo169"></span></span></td>
        <td bgcolor="#2770DB"><span class="Estilo168">
				<input name="tipod1" type="radio" value="1" checked> 
				NORMAL </span><span class="Estilo169"></span></span></td>
        <td bgcolor="#2770DB"><span class="Estilo168">
				<input name="tipod2" type="radio" value="1" checked>
				NORMAL </span><span class="Estilo169"></span> </span></td>
        <td bgcolor="#2770DB"><span class="Estilo168">
				<input name="tipod3" type="radio" value="1" checked>
				NORMAL </span><span class="Estilo169"></span> </span></td>
        <td bgcolor="#2770DB"><span class="Estilo168">
				<input name="tipod4" type="radio" value="1" checked>
				NORMAL </span><span class="Estilo169"></span> </span></td>
        <td bgcolor="#2770DB"><span class="Estilo168">
				<input name="tipod5" type="radio" value="1" checked> 
				NORMAL </span><span class="Estilo169"></span> </span></td>
        <td bgcolor="#2770DB"><span class="Estilo168">
				<input name="tipod6" type="radio" value="1" checked>
				NORMAL </span><span class="Estilo169"></span> </span></td>
	  </tr>
	  <tr>
	  <td bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo102"><span class="Estilo138">CLASIFICACI&Oacute;N D&Iacute;A: 6T0 DIA</span></div></td>
	  		<td bgcolor="#2770DB">
			<span class="Estilo168">
		  	<?php
			if($dia1=="S&aacute;bado")
			{
			echo '<input name="tipod0" type="radio" value="2" checked>';
			}else{
			echo '<input name="tipod0" type="radio" value="2">';
			}
			?>
			6TO DíA</span></td>
			<td bgcolor="#2770DB">
			<span class="Estilo168">
		  	<?php
			if($dia2=="S&aacute;bado")
			{
			echo '<input name="tipod1" type="radio" value="2" checked>';
			}else{
			echo '<input name="tipod1" type="radio" value="2">';
			}
			?>
			6TO DíA</span></td>
			<td bgcolor="#2770DB">
			<span class="Estilo168">
		  	<?php
			if($dia3=="S&aacute;bado")
			{
			echo '<input name="tipod2" type="radio" value="2" checked>';
			}else{
			echo '<input name="tipod2" type="radio" value="2">';
			}
			?>
			6TO DíA</span></td>
			<td bgcolor="#2770DB">
			<span class="Estilo168">
		  	<?php
			if($dia4=="S&aacute;bado")
			{
			echo '<input name="tipod3" type="radio" value="2" checked>';
			}else{
			echo '<input name="tipod3" type="radio" value="2">';
			}
			?>
			6TO DíA</span></td>
			<td bgcolor="#2770DB">
			<span class="Estilo168">
<?php
			if($dia5=="S&aacute;bado")
			{
			echo '<input name="tipod4" type="radio" value="2" checked>';
			}else{
			echo '<input name="tipod4" type="radio" value="2">';
			}
			?>			
6TO DíA</span></td>
			<td bgcolor="#2770DB">
			<span class="Estilo168">
			<?php
			if($dia6=="S&aacute;bado")
			{
			echo '<input name="tipod5" type="radio" value="2" checked>';
			}else{
			echo '<input name="tipod5" type="radio" value="2">';
			}
			?>
			6TO D&iacute;A</span></td>
			<td bgcolor="#2770DB">
			<span class="Estilo168">
<?php
			if($dia7=="S&aacute;bado")
			{
			echo '<input name="tipod6" type="radio" value="2" checked>';
			}else{
			echo '<input name="tipod6" type="radio" value="2">';
			}
			?>			
6TO D&iacute;A</span></td>
		</tr>
		<tr>
		<td bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo102"><span class="Estilo138">CLASIFICACI&Oacute;N  D&Iacute;A: 7MO DIA</span></div></td>
        <td bgcolor="#2770DB">
          <span class="Estilo168">
			<?php
			if($dia1=="Domingo")
			{
			echo '<input name="tipod0" type="radio" value="3" checked>';
			}else{
			echo '<input name="tipod0" type="radio" value="3">';
			}
			?>
			7MO D&Iacute;A</span></td>
			<td bgcolor="#2770DB"><span class="Estilo168">
			<?php
			if($dia2=="Domingo")
			{
			echo '<input name="tipod1" type="radio" value="3" checked>';
			}else{
			echo '<input name="tipod1" type="radio" value="3">';
			}
			?>
			7MO D&Iacute;A</span></td>
			<td bgcolor="#2770DB"><span class="Estilo168">
			<?php
			if($dia3=="Domingo")
			{
			echo '<input name="tipod2" type="radio" value="3" checked>';
			}else{
			echo '<input name="tipod2" type="radio" value="3">';
			}
			?>
			7MO D&Iacute;A</span></td>
			<td bgcolor="#2770DB"><span class="Estilo168">
			<?php
			if($dia4=="Domingo")
			{
			echo '<input name="tipod3" type="radio" value="3" checked>';
			}else{
			echo '<input name="tipod3" type="radio" value="3">';
			}
			?>
			7MO D&Iacute;A</span></td>
			<td bgcolor="#2770DB"><span class="Estilo168">
			<?php
			if($dia5=="Domingo")
			{
			echo '<input name="tipod4" type="radio" value="3" checked>';
			}else{
			echo '<input name="tipod4" type="radio" value="3">';
			}
			?>
			7MO D&Iacute;A</span></td>
			<td bgcolor="#2770DB">
			<span class="Estilo168">
			<?php
			if($dia6=="Domingo")
			{
			echo '<input name="tipod5" type="radio" value="3" checked>';
			}else{
			echo '<input name="tipod5" type="radio" value="3">';
			}
			?>
			7MO D&Iacute;A</span></td>
			<td bgcolor="#2770DB"><span class="Estilo168">
			<?php
			if($dia7=="Domingo")
			{
			echo '<input name="tipod6" type="radio" value="3" checked>';
			}else{
			echo '<input name="tipod6" type="radio" value="3">';
			}
			?>
			7MO D&Iacute;A</span></td>
		</tr>
		<tr>
		<td bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo102"><span class="Estilo138">CLASIFICACI&Oacute;N  D&Iacute;A: 7M0 DIA LIBRE</span></div></td>
        <td bgcolor="#2770DB">
          <span class="Estilo168">
            <input name="tipod0" type="radio" value="11">
            7MO LIBRE</span></td>
        <td bgcolor="#2770DB"><span class="Estilo168">
		  	<input name="tipod1" type="radio" value="11">
			7MO LIBRE</span></td>
        <td bgcolor="#2770DB"><span class="Estilo168">
			<input name="tipod2" type="radio" value="11"> 
			7MO LIBRE</span></td>
        <td bgcolor="#2770DB"><span class="Estilo168">
			<input name="tipod3" type="radio" value="11">
			7MO LIBRE</span></td>
        <td bgcolor="#2770DB"><span class="Estilo168">
			<input name="tipod4" type="radio" value="11">
			7MO LIBRE</span></td>
        <td bgcolor="#2770DB"><span class="Estilo168">
			<input name="tipod5" type="radio" value="11">
			7MO LIBRE</span></td>
        <td bgcolor="#2770DB"><span class="Estilo168">
			<input name="tipod6" type="radio" value="11">
			7MO LIBRE</span></td>
      </tr>
	  <tr>
		<td bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo102"><span class="Estilo138">CLASIFICACI&Oacute;N  D&Iacute;A: LIBRE</span></div></td>
        <td bgcolor="#2770DB">
          <span class="Estilo168">
            <input name="tipod0" type="radio" value="4">
            L I B R E </span></td>
        <td bgcolor="#2770DB"><span class="Estilo168">
		  	<input name="tipod1" type="radio" value="4">
			L I B R E </span></td>
        <td bgcolor="#2770DB"><span class="Estilo168">
			<input name="tipod2" type="radio" value="4"> 
			L I B R E </span></td>
        <td bgcolor="#2770DB"><span class="Estilo168">
			<input name="tipod3" type="radio" value="4">
			L I B R E </span></td>
        <td bgcolor="#2770DB"><span class="Estilo168">
			<input name="tipod4" type="radio" value="4">
			L I B R E </span></td>
        <td bgcolor="#2770DB"><span class="Estilo168">
			<input name="tipod5" type="radio" value="4">
			L I B R E </span></td>
        <td bgcolor="#2770DB"><span class="Estilo168">
			<input name="tipod6" type="radio" value="4">
			L I B R E </span></td>
      </tr>
	  <tr>
	  <td bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo102"><span class="Estilo138">CLASIFICACI&Oacute;N D&Iacute;A: AUSENTE</span></div></td>
        <td bgcolor="#2770DB"><span class="Estilo168">
            		<input name="tipod0" type="radio" value="5">
            		AUSENTE </span></td>
        <td bgcolor="#2770DB"><span class="Estilo168">
			<input name="tipod1" type="radio" value="5">
			AUSENTE </span></td>
        <td bgcolor="#2770DB"><span class="Estilo168">
			<input name="tipod2" type="radio" value="5">
			AUSENTE </span></td>
        <td bgcolor="#2770DB"><span class="Estilo168">
			<input name="tipod3" type="radio" value="5">			
			AUSENTE </span></td>
        <td bgcolor="#2770DB"><span class="Estilo168">
			<input name="tipod4" type="radio" value="5">
			AUSENTE </span></td>
        <td bgcolor="#2770DB"><span class="Estilo168">
			<input name="tipod5" type="radio" value="5">
			AUSENTE </span></td>
        <td bgcolor="#2770DB"><span class="Estilo168">
			<input name="tipod6" type="radio" value="5">
			AUSENTE </span></td>
      </tr>
	  <tr>
	  <td bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo102"><span class="Estilo138">CLASIFICACI&Oacute;N  D&Iacute;A: 7M0 Ausente </span></div></td>
        <td bgcolor="#2770DB">
          <span class="Estilo168">
            <input name="tipod0" type="radio" value="14">
            7MO AUSE.</span></td>
        <td bgcolor="#2770DB"><span class="Estilo168">
		  	<input name="tipod1" type="radio" value="14">
			7MO AUSE.</span></td>
        <td bgcolor="#2770DB"><span class="Estilo168">
			<input name="tipod2" type="radio" value="14"> 
			7MO AUSE.</span></td>
        <td bgcolor="#2770DB"><span class="Estilo168">
			<input name="tipod3" type="radio" value="14">
			7MO AUSE.</span></td>
        <td bgcolor="#2770DB"><span class="Estilo168">
			<input name="tipod4" type="radio" value="14">
			7MO AUSE.</span></td>
        <td bgcolor="#2770DB"><span class="Estilo168">
			<input name="tipod5" type="radio" value="14">
			7MO AUSE.</span></td>
        <td bgcolor="#2770DB"><span class="Estilo168">
			<input name="tipod6" type="radio" value="14">
			7MO AUSE.</span></td>
	  </tr>
	  <tr>
	  <td bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo102"><span class="Estilo138">CLASIFICACI&Oacute;N D&Iacute;A: REPOSO </span></div></td>
        <td bgcolor="#2770DB"><span class="Estilo168">
			<input name="tipod0" type="radio" value="6">
			REPOSO</span></td>
        <td bgcolor="#2770DB"><span class="Estilo168">
			<input name="tipod1" type="radio" value="6">
			REPOSO </span></td>
        <td bgcolor="#2770DB"><span class="Estilo168">
			<input name="tipod2" type="radio" value="6">
			REPOSO </span></td>
        <td bgcolor="#2770DB"><span class="Estilo168">
			<input name="tipod3" type="radio" value="6">
			REPOSO </span></td>
        <td bgcolor="#2770DB"><span class="Estilo168">
			<input name="tipod4" type="radio" value="6">
			REPOSO </span></td>
        <td bgcolor="#2770DB"><span class="Estilo168">
			<input name="tipod5" type="radio" value="6">
			REPOSO </span></td>
        <td bgcolor="#2770DB"><span class="Estilo168">
			<input name="tipod6" type="radio" value="6">
			REPOSO </span></td>
		</tr>
		<tr>
	  <td bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo102"><span class="Estilo138">CLASIFICACI&Oacute;N  D&Iacute;A: 7M0 REPOSO</span></div></td>
        <td bgcolor="#2770DB">
          <span class="Estilo168">
            <input name="tipod0" type="radio" value="13">
            7MO REPO.</span></td>
        <td bgcolor="#2770DB"><span class="Estilo168">
		  	<input name="tipod1" type="radio" value="13">
			7MO REPO.</span></td>
        <td bgcolor="#2770DB"><span class="Estilo168">
			<input name="tipod2" type="radio" value="13"> 
			7MO REPO.</span></td>
        <td bgcolor="#2770DB"><span class="Estilo168">
			<input name="tipod3" type="radio" value="13">
			7MO REPO.</span></td>
        <td bgcolor="#2770DB"><span class="Estilo168">
			<input name="tipod4" type="radio" value="13">
			7MO REPO.</span></td>
        <td bgcolor="#2770DB"><span class="Estilo168">
			<input name="tipod5" type="radio" value="13">
			7MO REPO.</span></td>
        <td bgcolor="#2770DB"><span class="Estilo168">
			<input name="tipod6" type="radio" value="13">
			7MO REPO.</span></td>
		</tr>
		<tr>
	  <td bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo102"><span class="Estilo138">CLASIFICACI&Oacute;N D&Iacute;A: COMPENSA.</span></div></td>
        <td bgcolor="#2770DB"><span class="Estilo168">
			<input name="tipod0" type="radio" value="7">
			COMPENS.</span><span class="Estilo169"></span></span></td>
	    	<td bgcolor="#2770DB"><span class="Estilo168">
			<input name="tipod1" type="radio" value="7">
			COMPENS.</span><span class="Estilo169"></span></span></td>
			<td bgcolor="#2770DB"><span class="Estilo168">
			<input name="tipod2" type="radio" value="7">
			COMPENS.</span><span class="Estilo169"></span></span></td>
			<td bgcolor="#2770DB"><span class="Estilo168">
			<input name="tipod3" type="radio" value="7">
			COMPENS.</span><span class="Estilo169"></span></span></td>
			<td bgcolor="#2770DB"><span class="Estilo168">
			<input name="tipod4" type="radio" value="7">
			COMPENS.</span><span class="Estilo169"></span></span></td>
			<td bgcolor="#2770DB"><span class="Estilo168">
			<input name="tipod5" type="radio" value="7">
			COMPENS.</span><span class="Estilo169"></span></span></td>
			<td bgcolor="#2770DB"><span class="Estilo168">
			<input name="tipod6" type="radio" value="7">
			COMPENS.</span><span class="Estilo169"></span></span></td>
      </tr>
	  <tr>
	   <td bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo102"><span class="Estilo138">CLASIFICACI&Oacute;N D&Iacute;A: VACACIONES</span></div></td>
          <td bgcolor="#2770DB"> <span class="Estilo168"> 
            		<input name="tipod0" type="radio" value="8">
            		VACACI&Oacute;N</span><span class="Estilo169"></span></span></td>
	    		<td bgcolor="#2770DB"><span class="Estilo168">
			<input name="tipod1" type="radio" value="8">
			VACACI&Oacute;N</span><span class="Estilo169"></span></span></td>
			<td bgcolor="#2770DB"><span class="Estilo168">
			<input name="tipod2" type="radio" value="8">
			VACACI&Oacute;N</span><span class="Estilo169"></span></span></td>
			<td bgcolor="#2770DB"><span class="Estilo168">
			<input name="tipod3" type="radio" value="8">
			VACACI&Oacute;N</span><span class="Estilo169"></span></span></td>
			<td bgcolor="#2770DB"><span class="Estilo168">
			<input name="tipod4" type="radio" value="8">
			VACACI&Oacute;N</span><span class="Estilo169"></span></span></td>
			<td bgcolor="#2770DB"><span class="Estilo168">
			<input name="tipod5" type="radio" value="8">
			VACACI&Oacute;N</span><span class="Estilo169"></span></span></td>
			<td bgcolor="#2770DB"><span class="Estilo168">
			<input name="tipod6" type="radio" value="8">
			VACACI&Oacute;N</span><span class="Estilo169"></span></span></td>
      </tr>
	  <tr>
	   <td bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo102"><span class="Estilo138">CLASIFICACI&Oacute;N  D&Iacute;A:PERM. nr</span></div></td>
          <td bgcolor="#2770DB"> <span class="Estilo168"> 
            		<input name="tipod0" type="radio" value="9">
            		PERM.N.R.</span><span class="Estilo169"></span></span></td>
	    		<td bgcolor="#2770DB"><span class="Estilo168">
			<input name="tipod1" type="radio" value="9">
			PERM.N.R.</span><span class="Estilo169"></span></span></td>
			<td bgcolor="#2770DB"><span class="Estilo168">
			<input name="tipod2" type="radio" value="9">
			PERM.N.R.</span><span class="Estilo169"></span></span></td>
			<td bgcolor="#2770DB"><span class="Estilo168">
			<input name="tipod3" type="radio" value="9">
			PERM.N.R.</span><span class="Estilo169"></span></span></td>
			<td bgcolor="#2770DB"><span class="Estilo168">
			<input name="tipod4" type="radio" value="9">
			PERM.N.R.</span><span class="Estilo169"></span></span></td>
			<td bgcolor="#2770DB"><span class="Estilo168">
			<input name="tipod5" type="radio" value="9">
			PERM.N.R.</span><span class="Estilo169"></span></span></td>
			<td bgcolor="#2770DB"><span class="Estilo168">
			<input name="tipod6" type="radio" value="9">
			PERM.N.R.</span><span class="Estilo169"></span></span></td>
      </tr>
	   <tr>
	   <td bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo102"><span class="Estilo138">CLASIFICACI&Oacute;N  D&Iacute;A:PERM. REM.  </span></div></td>
          <td bgcolor="#2770DB"> <span class="Estilo168"> 
            		<input name="tipod0" type="radio" value="10">
            		PERM.REM.</span><span class="Estilo169"></span></span></td>
	    		<td bgcolor="#2770DB"><span class="Estilo168">
			<input name="tipod1" type="radio" value="10">
			PERM.REM.</span><span class="Estilo169"></span></span></td>
			<td bgcolor="#2770DB"><span class="Estilo168">
			<input name="tipod2" type="radio" value="10">
			PERM.REM.</span><span class="Estilo169"></span></span></td>
			<td bgcolor="#2770DB"><span class="Estilo168">
			<input name="tipod3" type="radio" value="10">PERM.REM.</span><span class="Estilo169"></span></span></td>
			<td bgcolor="#2770DB"><span class="Estilo168">
			<input name="tipod4" type="radio" value="10">
			PERM.REM.</span><span class="Estilo169"></span>.</span></td>
			<td bgcolor="#2770DB"><span class="Estilo168">
			<input name="tipod5" type="radio" value="10">PERM.REM.</span><span class="Estilo169"></span></span></td>
			<td bgcolor="#2770DB"><span class="Estilo162">
			<input name="tipod6" type="radio" value="10">PERM.REM.</span></span></td>
      </tr>
	  <tr>
	   <td bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo102"><span class="Estilo138">CLASIFICACI&Oacute;N  D&Iacute;A: PERM.SINDICAL  </span></div></td>
          <td bgcolor="#2770DB"> <span class="Estilo168"> 
            <input name="tipod0" type="radio" value="12">
            PERM.SIND.</span></td>
	    	<td bgcolor="#2770DB"><span class="Estilo168">
			<input name="tipod1" type="radio" value="12">
			PERM.SIND.</span></td>
			<td bgcolor="#2770DB"><span class="Estilo168">
			<input name="tipod2" type="radio" value="12">
			PERM.SIND.</span></td>
			<td bgcolor="#2770DB"><span class="Estilo168">
			<input name="tipod3" type="radio" value="12">
			PERM.SIND.</span></td>
			<td bgcolor="#2770DB"><span class="Estilo168">
			<input name="tipod4" type="radio" value="12">
			PERM.SIND.</span></td>
			<td bgcolor="#2770DB"><span class="Estilo168">
			<input name="tipod5" type="radio" value="12">
			PERM.SIND.</span></td>
			<td bgcolor="#2770DB"><span class="Estilo162">
			<input name="tipod6" type="radio" value="12">
			PERM.SIND.</span></td>
      </tr>
    </table>
	<p>&nbsp;</p>
	<table width="356" height="39" align="center" border="1">
  <tr bgcolor="#FFFFFF" bordercolor="#0000FF">
      <td width="61" class="t12b"><div align="center">Seleccione</div></td>
    <td width="71" bgcolor="#FFFFFF" class="t12b"><div align="center">C.I.</div></td>
    <td width="202" bgcolor="#FFFFFF" class="t12b"><div align="center">Apellidos y Nombres</div></td>
	</tr>
 <?php
$newfecha=$year."-".$month."-".$day;
$query1=mysql_query("SELECT * FROM traba WHERE jefatura = '$grupo_inc_semana' and condicion='1' ORDER BY apellidos ASC");
while ($row=mysql_fetch_array($query1))
{
$query2=mysql_query("SELECT * FROM jornada WHERE jefatura = '$grupo_inc_semana' and ci='$row[ci]' and fecha='$newfecha'");

if(mysql_num_rows($query2)==0)
{
$n=$n+1;
//----------------------------------
echo '<tr><td><center><input type="checkbox" name="ci[]" value="'.$row[ci].'"></center></td><td class="t12b Estilo3"><center>'.$row[ci].'</center></td><td class="t12b Estilo3">'.$row[apellidos].", ".$row[nombres].'</td>';?></tr>
		<?php
//----------------------------------
}else{
echo '<tr><td class="t12b Estilo3"><strong><center>X</center></strong></td><td class="t12b Estilo3"><center>'.$row[ci].'</center></td><td class="t12b Estilo3">'.$row[apellidos].", ".$row[nombres].'</td><td class="Estilo105"><strong><center>.</center></strong></td></tr>';
}
}
mysql_free_result($query1) and mysql_free_result($query2);

if($n>=1)
{
?>
	<script>
	function ChequearTodos(chkbox)
	{
	for (var i=0;i < document.forms["form1"].elements.length;i++)
	{
	var elemento = document.forms[0].elements[i];
	if (elemento.type == "checkbox")
	{
	elemento.checked = chkbox.checked
	}
	}
	} 
	</script>
<tr>
	<td bgcolor="#FFFFCC"> <div align="center"><span class="t12b">
	<input type="checkbox" name="checkbox11" value="checkbox" onClick="ChequearTodos(this);">
	</span></div></td>
		<td class="t12b Estilo3" colspan=2><div align="right" class="Estilo5">
		  <div align="center"><strong>Todos los trabajadores pendientes</strong></div>
		</div></td>
		</tr>
	  <?php
	}else{
	?>
<tr>
    <td class="t12b Estilo3"><strong>
      <center>
        X
      </center>
      </strong></td>
    <td class="t12b Estilo3" colspan=2><div align="right" class="Estilo5">
		  <div align="center"><strong>Todos los trabajadores pendientes</strong></div>
		</div></td>
    </tr>
  <?php
}
?>
    </table>
    <table width="358" height="81" border="0">
      <tr>
        <td width="354"><div align="center">
		<p align="center" class="t12b Estilo144">&nbsp;</p>
		
          <span class="t12g Estilo151">Click en [Enviar] cuando los datos est&Eacute;n completos</span>
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
    <p>
      <input type="hidden" name="fecha_semana_grupo" value="<?php echo $_POST['fecha_semana_grupo'];?>">
	  <input type="hidden" name="grupo_inc_semana" value="<?php echo $grupo_inc_semana;?>">
	  <input type="hidden" name="cuenta" value="<?php echo $cuenta;?>">
	  <input type="hidden" name="plt_semana" value="<?php echo $plt_semana;?>">
	</p>
    <table width="285" border="0">
      <tr>
        <td width="275"><div align="center"><font size="2"><span class="t12g Estilo151">&iquest;Regresar al men&uacute; anterior?</span></font><font color="#FF0000" size="2">
        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="103" height="24">
                  <param name="movie" value="button34.swf">
                  <param name="quality" value="high">
                  <embed src="button34.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="103" height="24" ></embed>
            </object>
        </a></font></div></td>
      </tr>
    </table>
    <font color="#FF0000" size="2"><a title="Ayuda sobre el manejo del SARTS" href="#">    </a></font>
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
<?php
}else{
header("Location: pagina_no_autorizada.php");
}
?>