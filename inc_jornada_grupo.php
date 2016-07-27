<?php
include ("security_system.php");
ini_set('error_reporting',0);
if($_SESSION["level"]==1 or $_SESSION["level"]==7){
?>
<HTML>
<HEAD>
<TITLE>Incluir Jornada por Grupo. Sistema ARTS Online</TITLE>

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
.Estilo101 {font-size: 9px; color: #FFFF00; font-weight: bold; font-family: Geneva, Arial, Helvetica, sans-serif; }
.Estilo102 {color: #FFFF00}
.Estilo103 {color: #0099FF}
.Estilo110 {
	color: #FFFF00;
	font-weight: bold;
}
.Estilo138 {font-size: 9px; color: #FFFF00; font-weight: bold; }
.Estilo139 {color: #0033FF}
.Estilo144 {font-size: 12px}
.Estilo145 {color: #FF0000}
.Estilo151 {color: #0000FF}
.Estilo158 {font-weight: bold; color: #FFFFFF; font-family: tahoma;}
.Estilo159 {color: #2770DB}
.Estilo161 {color: #000000}
-->
</style>

<script language="javascript">
function mis_datos(){
var key=window.event.keyCode;
if (key < 48 || key > 57){
window.event.keyCode=0;
}}

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
<td colspan="3" valign="middle" bordercolor="#333333" bgcolor="#2770DB"><div align="center"> 
<table width="778" border="0" cellspacing="0" cellpadding="0">
  <tr>
<td align="right" background="images/index_01.gif"><img src="images/index_03.gif" width=59 height=34 alt=""><a href="inicio.html"><img src="images/index_ini.gif" alt="" width=82 height=34 border="0"></a><img src="images/index_faq.GIF" width=82 height=34 alt=""><img src="images/index_link.gif" width=89 height=34 alt=""><a href="menu_sarts.html" target="_blank"><img src="images/index_sarts.gif" alt="" width=71 height=34 border="0"></a><img src="images/index_contac.GIF" width=85 height=34 alt=""></td>
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
<form name="form1" method="post" action="inc_jornada_grupo_bd.php" onSubmit="return enviar()">
 <div align="center">
    <table width="766" border="2">
      <tr>
        <td width="85" height="26" bordercolor="#0000FF" bgcolor="#2770DB" class="Estilo101">REGION</td>
        <td width="157" bordercolor="#0000FF" bgcolor="#2770DB" class="Estilo102">
          <label>
		<?php
// Conexion el servidor
include ("includes/bdkey.php");
		
$fechamod=explode("-",$_POST['fecha_jornada_grupo']);
$fecha=$fechamod[2].'-'.$fechamod[1].'-'.$fechamod[0];
$grupo_inc_jornada=$_POST['grupo_inc_jornada'];
		
$result = mysql_query("select * from estruct where jefatura='$grupo_inc_jornada'");
while ($row=mysql_fetch_array($result)){
	echo '<input name="region" size="25" maxlength="25" type="text" readonly="readonly" value="'.$row[region].'">';
	?>
    </label></td>
        <td width="75" bordercolor="#0000FF" bgcolor="#2770DB" class="Estilo101">DIRECCI&Oacute;N</td>
        <td width="137" bordercolor="#0000FF" bgcolor="#2770DB" class="Estilo102">
          <label></label>
    <?php
	echo '<input name="direccion" size="27" maxlength="27" type="text" readonly="readonly" value="'.$row[direccion].'">';
	?></td>
        <td width="128" bordercolor="#0000FF" bgcolor="#2770DB" class="Estilo101">GERENCIA</td>
        <td width="142" bordercolor="#0000FF" bgcolor="#2770DB" class="Estilo102">
          
	<?php
      echo '<input name="gerencia" size="25" maxlength="25" type="text" readonly="readonly" value="'.$row[gerencia].'">';
	?>
	</td>
      </tr>
      <tr>
        <td width="85" height="26" bordercolor="#0000FF" bgcolor="#2770DB" class="Estilo101">COORDINACI&Oacute;N</td>
        <td width="157" bordercolor="#0000FF" bgcolor="#2770DB" class="Estilo102">
          <label></label>
	<?php
    echo '<input name="coordinacion" size="25" maxlength="25" type="text" readonly="readonly" value="'.$row[coordinacion].'">';
	?></td>
        <td width="75" bordercolor="#0000FF" bgcolor="#2770DB" class="Estilo101">DEPARTAMENTO</td>
        <td width="137" bordercolor="#0000FF" bgcolor="#2770DB" class="Estilo102">
          <label></label>
     <?php
	echo '<input name="estructura" size="27" maxlength="27" type="text" readonly="readonly" value="'.$row[estructura].'">';
		  ?>        </td>
        <td width="128" bordercolor="#0000FF" bgcolor="#2770DB" class="Estilo101">GRUPO DE TRABAJO</td>
        <td width="142" bordercolor="#0000FF" bgcolor="#2770DB" class="Estilo102">
          <label>
          <?php
		  echo '<input name="jefatura" size="25" maxlength="25" type="text" readonly="readonly" value="'.$row[jefatura].'">';
		  $jef=$row[jefatura];
		  ?>
          </label>		  </td>
        </tr>
      <tr>
        <td bordercolor="#0000FF" bgcolor="#2770DB" class="Estilo101">ESTRUCTURA</td>
        <td bordercolor="#0000FF" bgcolor="#2770DB" class="Estilo102">
          <label></label>
          <?php
echo '<input name="id_estructura" size="25" maxlength="25" type="text" readonly="readonly" value="'.$row[id_estructura].'">';
$horariovar=$row[horariovar];
		  }
		  ?>        </td>
        </tr>
    </table>
	<p class="t12g">&nbsp;</p>
	<p class="t12g Estilo159">Jornada a Relacionar para el día <?php echo $fecha; ?> </p>
 </div>
	 <table width="774" border="1">
        <tr>
          <td bgcolor="#2770DB"><p><span class="Estilo110">CLASIFICACI&Oacute;N DEL D&Iacute;A: </span>
            </p>
            <p align="center" class="Estilo144">  
              <input name="tipodia" type="radio" onClick="document.getElementById('tablanormal').style.visibility = 'visible'" value="1" checked>
              <span class="Estilo158">NORMAL&nbsp;
              <input name="tipodia" type="radio" value="2" onClick="document.getElementById('tablanormal').style.visibility = 'visible'">
              6TO DíA&nbsp;
              <input name="tipodia" type="radio" value="3" onClick="document.getElementById('tablanormal').style.visibility = 'visible'">
              7MO D&Iacute;A&nbsp;
              <input name="tipodia" type="radio" value="4" onClick="document.getElementById('tablanormal').style.visibility = 'hidden'">
              LIBRE&nbsp;
              <input name="tipodia" type="radio" value="5" onClick="document.getElementById('tablanormal').style.visibility = 'hidden'">
              AUSENTE&nbsp;
              <input name="tipodia" type="radio" value="6" onClick="document.getElementById('tablanormal').style.visibility = 'hidden'">
          REPOSO&nbsp;
		  	  <input name="tipodia" type="radio" value="7" onClick="document.getElementById('tablanormal').style.visibility = 'hidden'">
          VACACIONES</span> <span class="Estilo158">
          <input name="tipodia" type="radio" value="8" onClick="document.getElementById('tablanormal').style.visibility = 'hidden'"> 
          COMPENSATIVO
</span></p></td>
        </tr>
      </table>
      	
	<table width="774" border="1" id="tablanormal">
      <tr>
        <td>
          <table width="766" border="1">
          <tr>
		  <td width="75" bgcolor="#2770DB" class="t12b"><div align="center" class="Estilo102 Estilo93"><strong>D&Iacute;A</strong></div></td>
		  <td width="58" bgcolor="#2770DB" class="t12b"><div align="center" class="Estilo102 Estilo93"><strong>SALARIO 004</strong></div></td>
		  <td width="74" bgcolor="#2770DB" class="t12b"><div align="center" class="Estilo102 Estilo93"><strong>D&Iacute;A FERIADOS TRABAJADO  087</strong></div></td>
		  <td width="70" bgcolor="#2770DB" class="t12b"><div align="center" class="Estilo102 Estilo93"><strong>H.E. DIURNAS 052</strong></div></td>
		  <td width="77" bgcolor="#2770DB" class="t12b"><div align="center" class="Estilo102 Estilo93"><strong>H.E. DIURNAS GUARDIAS PROGRAMA. 052</strong></div></td>
		  <td width="88" bgcolor="#2770DB" class="t12b"><div align="center" class="Estilo102 Estilo93"><strong>TIEMPO DE REPOSO COMIDA DIURNO 055</strong></div></td>
		  <td width="94" bgcolor="#2770DB" class="t12b"><div align="center" class="Estilo102 Estilo93"><strong>BONO NOCTURNO 051</strong></div></td>
		  <td width="82" bgcolor="#2770DB" class="t12b"><div align="center" class="Estilo102 Estilo93"><strong>H.E. NOCTURNAS 053</strong></div></td>
		  <td width="90" bgcolor="#2770DB" class="t12b"><div align="center" class="Estilo102 Estilo93"><strong>H.E. NOCTURNAS GUARDIA PROGRAMADA 053</strong></div></td>
          </tr>
          <tr>
			<td width="75" height="35" bordercolor="#0000FF"><div align="left" class="Estilo139"><div align="center">
			<?php
			$day=substr($fecha,0,4);
			$month=substr($fecha,5,2);
			$year=substr($fecha,9,2);
			
			$dia_semana=date ("l", mktime(0, 0, 0,$month, $day, $year));
			if ($dia_semana=="Monday") echo $dia="Lunes";
			if ($dia_semana=="Tuesday") echo $dia="Martes";
			if ($dia_semana=="Wednesday") echo $dia="Mi&eacute;rcoles";
			if ($dia_semana=="Thursday") echo $dia="Jueves";
			if ($dia_semana=="Friday") echo $dia="Viernes";
			if ($dia_semana=="Saturday") echo $dia="S&aacute;bado";
			if ($dia_semana=="Sunday") echo $dia="Domingo";
			?>
				</div>
			</div></td>
			<td width="58" bordercolor="#0000FF"><div align="center">
			<select name="hd">
			<?php			  
			switch($dia)
			{
			case "S&aacute;bado":
			?>			
			<option value="0">0</option>
			<option value="4" selected>4</option>
			<option value="7">7</option>
			<option value="9">9</option>
	 <?php
	break;
	case "Domingo":
	?>
			<option value="0">0</option>
			<option value="5" selected>5</option>
            <option value="7">7</option>
	<?php	
	break;
	default:
	?>
			<option value="0">0</option>
			<option value="4">4</option>
            <option value="7">7</option>
			<option value="8" selected>8</option>
            <option value="9">9</option>

	<?php
	break;
	}
?>
		    </select>
                </div></td>
              <td width="74" bordercolor="#0000FF"><div align="center">
                  <label>
                  <select name="feriado">
                    <option value="0" selected>0</option>
                    <option value="0.5">1/2</option>
                    <option value="1">1</option>
                  </select>
                  </label>
              </div></td>
              <td width="70" bordercolor="#0000FF"><div align="center">
                <select name="hed">
                  <option value="0">0</option>
				  <option value="0.5">1/2</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                </select>
              </div></td>
              <td width="77" bordercolor="#0000FF"><div align="center">
			<select name="hedp">
			  <?php			  
	switch($dia)
	{
	case "S&aacute;bado":
	?>
			<option value="0" selected>0</option>
			<option value="8">8</option>
			<option value="10">10</option>
			<option value="12">12</option>
			<option value="14">14</option>
	 <?php
	break;
	case "Domingo":
	?>
			<option value="0" selected>0</option>
            <option value="7">7</option>

	<?php
	break;
	default:
	?>
			<option value="0" selected>0</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
            
	<?php
	break;
	}
?>
			</select>
              </div></td>
              <td width="88" bordercolor="#0000FF"><div align="center">
                <select name="trcd">
                  <option value="0" selected>0</option>
                  <option value="0.5">1/2</option>
                  <option value="1">1</option>
                  </select>
              </div></td>
              <td width="94" bordercolor="#0000FF"><div align="center">
	<?php
$sQuery = mysql_query("select * from estruct where jefatura='$grupo_inc_jornada'");

while ($row=mysql_fetch_array($sQuery))
	{
	switch($row[horariovar])
		{
		case 1:
		?>
		<select name="bonocturno" id="bonocturno">
		  <option value="0">0</option>
		  <option value="3">3</option>
		  <option value="3.5">3 1/2</option>
		  <option value="7">7</option>
		</select>
		<?php
		break;
		default:
		?>
		<input name="bonocturno" type="text" id="bonocturno" value="0" readonly="readonly" size="3">
		<?php
		break;
		}
	}
		?>
        </div></td>
           <td width="82" bordercolor="#0000FF"><div align="center">
                <select name="hen">
                  <option value="0">0</option>
				  <option value="0.5">1/2</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                </select>
              </div></td>
              <td width="90" bordercolor="#0000FF"><div align="center">
			  
			 	  <select name="henp">
                    <option value="0">0</option>
                    <option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
                    <option value="10">10</option>
                  </select>
              </div></td>
            </tr>
          </table>
          <table width="766" height="72" border="1" >
            <tr>
              <td width="61" bordercolor="#0000FF" bgcolor="#2770DB" class="t12b"><div align="center" class="Estilo93 Estilo102"><strong>TIEMPO DE REPOSO COMIDA NOCTURNO 363 </strong></div></td>
              <td width="220" bordercolor="#0000FF" bgcolor="#2770DB" class="t12b"><div align="center" class="Estilo93 Estilo110">KILOMETRAJE 347 </div></td>
              <td width="84" bordercolor="#0000FF" bgcolor="#2770DB" class="t12b"><div align="center" class="Estilo138">MOVILIZACI&Oacute;N 363</div></td>
              <td width="60" bordercolor="#0000FF" bgcolor="#2770DB" class="t12b"><div align="center" class="Estilo138">CLAVE 221 </div></td>
			  <td width="55" bordercolor="#0000FF" bgcolor="#2770DB" class="t12b"><div align="center" class="Estilo138">CLAVE 277 </div></td>
              <td width="132" bordercolor="#0000FF" bgcolor="#2770DB" class="t12b"><div align="center" class="Estilo138">LUGAR DE VI&Aacute;TICO</div></td>
              <td width="108" bordercolor="#0000FF" bgcolor="#2770DB" class="t12b"><div align="center" class="Estilo138">OBSERVACI&Oacute;N</div></td>
            </tr>
            <tr>
              <td width="61" height="35" bordercolor="#0000FF"><div align="center">
                <select name="trcn">
                  <option value="0">0</option>
                  <option value="0.5">1/2</option>
                </select>
              </div></td>
              <td width="220" bordercolor="#0000FF" class="Estilo103"><div align="center" class="Estilo103">
                <input name="km" type="text" id="km" value="0" size="5" maxlength="4" onKeypress="mis_datos()">
                <span class="Estilo144">
                <label><input type="checkbox" name="vehiculo_propio" value="on">
                <span class="Estilo161">&iquest;Vehiculo Propio?</span></label>
                </span></div></td>
              <td width="84" bordercolor="#0000FF">
                  <div align="center" class="Estilo103">
                    <select name="movilizacion" style="width:80px">
					<option value="0" selected>0</option>
					<option value="2.5">2.5</option>
					<option value="5">5</option>
					<option value="10">10</option>
					</select>
                </div></td><td width="60" bordercolor="#0000FF">
                  <div align="center" class="Estilo103">
                    <?php
		switch($horariovar)
			{
			case 1:
			?>
			<select name="clave221" style="width:60px">
			<option value="0" selected>0</option>
			<option value="8">8</option>
			</select>
			<?php
			break;
			default:
			?>
			<input name="clave221" type="text" id="clave221" value="0" readonly="readonly" size="9">
			<?php
			break;
			}
			?>
			</div></td>
              <td bordercolor="#0000FF"><div align="center" class="Estilo103">
                  <label>
                  <?php
switch($jef)
	{
	case "LINEAS ENERGIZADAS":
	?>
	<select name="clave277">
	<option value="0" selected>NO</option>
	<option value="1">SI</option>
	</select>
		
	  <?php
	break;
	default:
		  ?>
			<input name="clave277" type="text" id="clave277" value="0" readonly="readonly" size="3">
          <?php
	break;
	}
		  ?>
                  <input name="reposo" type="hidden" id="reposo" value="0">
                  </label>
              </div></td>
              <td width="132" bordercolor="#0000FF"><div align="center" class="Estilo103">
                  <label>
                  <input name="lugar" type="text" id="lugar" value="-" size="22" maxlength="15" onKeyUp="this.value = this.value.toUpperCase();">
                  </label>
              </div></td>
              <td width="108" bordercolor="#0000FF"><span class="Estilo103">
                <label> </label>
                <div align="center">
                  <textarea name="observacion" cols="30" rows="2" style="width:80px" onKeyUp="this.value = this.value.toUpperCase();">SIN OBSERVACION</textarea>
                  </div>
                </span></td>
            </tr>
          </table>
       </tr>
    </table>
	   <p>
		<?php
		echo '<input name="fecha" type="hidden" value="'.$_POST['fecha_jornada_grupo'].'">'; 			
		mysql_free_result($result);
		?>

	<table width="400" height="39" align="center" border="1">
		<tr bgcolor="#FFFFFF" bordercolor="#0000FF">
      		<td width="71" class="t12b"><div align="center">Seleccione</div></td>
    		<td width="52" bgcolor="#FFFFFF" class="t12b"><div align="center">C.I.</div></td>
			<td width="193" bgcolor="#FFFFFF" class="t12b"><div align="center">Apellido y Nombre</div></td>
			<td width="56" bgcolor="#FFFFFF" class="t12b"><div align="center">Manejo 178</div>	</td>
		</tr>
<?php
$newfecha=$_POST['fecha_jornada_grupo'];
$query1=mysql_query("SELECT * FROM traba WHERE jefatura = '".$grupo_inc_jornada."' ORDER BY apellidos ASC");
while ($row=mysql_fetch_array($query1)){
$query2=mysql_query("SELECT * FROM jornada WHERE jefatura = '".$grupo_inc_jornada."' and ci='".$row[ci]."' and fecha='".$newfecha."'");

if(mysql_num_rows($query2)==0){
$n=$n+1;
//----------------------------------
echo '<tr><td><center><input type="checkbox" name="ci[]" value="'.$row[ci].'"></center></td><td class="t12b Estilo3">'.$row[ci].'</td><td class="t12b Estilo3">'.$row[apellidos].", ".$row[nombres].'</td>';?><td><div align="center">

		<?php
		$ci=$row[ci];
		switch($row[manejo])
		{
		case "SI":
			echo '<select name="manejom['.$ci.']" id="manejom['.$ci.']">';
			echo '<option value=0 selected>0</option>';
			echo '<option value=2>2</option>';
			echo '<option value=4>4</option>';
			echo '<option value=6>6</option>';
			echo '</select>';
		break;
		case "NO":
			echo '<input name="manejom[$ci]" type="text" id="manejom[$ci]" readonly="readonly" value="0" size="2">';
		break;
		}
		?>
		</div></td></tr>
		<?php
//----------------------------------
}else{
echo '<tr><td class="t12b Estilo3"><strong><center>X</center></strong></td><td class="t12b Estilo3">'.$row[ci].'</td><td class="t12b Estilo3">'.$row[apellidos].", ".$row[nombres].'</td><td class="Estilo105"><strong><center>.</center></strong></td></tr>';
}
}
mysql_free_result($query1) and mysql_free_result($query2);

if($n>=1)
{
?>
	<script language="jscript">
	function ChequearTodos(chkbox){
		for (var i=0;i < document.forms["form1"].elements.length;i++){
				var elemento = document.forms[0].elements[i];
				if (elemento.type == "checkbox"){
					elemento.checked = chkbox.checked
				}
			}
		}
	</script>
<tr>
	<th bgcolor="#FFFFCC"> <div align="center"> <span class="t12b">
	<input type="checkbox" name="checkbox11" value="checkbox" onClick="ChequearTodos(this);">
	</span></div></th>
		<td class="t12b Estilo3"><div align="right"><strong>Todos</strong></div></td>
		<td class="t12b Estilo3"><div align="left"><strong>los trabajadores pendientes</strong></div></td>
		<td class="t12w"><div align="left">.</div></td
		></tr>
	  <?php
	}else{
	?>
<tr>
    <th class="t12b Estilo3"><strong>
      <center>
        X
      </center>
      </strong>
    <td class="t12b Estilo3"><div align="right"><strong>Todos</strong></div></td>
    <td class="t12b Estilo3"><div align="left"><strong>los trabajadores pendientes</strong></div></td>
	<td class="t12w"><div align="left">.</div></td>
    </tr>
  <?php
}
?>
    </table>
    <table width="364" height="81" border="0">
      <tr>
        <td width="354"><div align="center">
		<p align="center" class="t12b Estilo144">Nota:<span class="Estilo145"> una "X" en la columna "Seleccione" indica que ya existe una jornada relacionada con esa fecha para ese trabajador.</span></p>
		
          <span class="t12g Estilo151">Click en [Enviar] cuando los datos est&Eacute;n completos</span>
          <table width="249" border="0">
            <tr>
              <td width="81"><label> </label>
                  <div align="center">
                    <input type="submit" name="Submit" value="Enviar" style="background:#FFB400" onClick="enviar()">
					
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
    <p>&nbsp;</p>
    <table width="285" border="0">
      <tr>
        <td width="275"><div align="center"><font size="2"><span class="t12g Estilo151">&iquest;Desea incluir otra jornada?</span></font><font color="#FF0000" size="2">
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