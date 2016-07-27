<?php
include ("security_system.php");
ini_set('error_reporting',0);
if($_SESSION["level"]==1 or $_SESSION["level"]==7)
{
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
	combo1.options[0].=true;
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
		if(arrayValues[i][prevComboTextIndex]==prevCombo.options[prevCombo.Index].text){
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
	thisCombo.options[0].=true;
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
.Estilo162 {font-size: 12px; color: #000000; }
-->
</style>

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
if($_POST['ci']=="")
{
echo '<p>&nbsp;</p>';
echo '<p>&nbsp;</p>';
echo '<p>&nbsp;</p>';
echo '<form name="retornar" method="post" action="verifica_mod_semana_ci.php">';
echo "<center>Atenci&oacute;n: No se seleccion&oacute; ning&uacute;n trabajador</center>";
echo '<center><input type="submit" name="Submit" value="Regresar" style="background:#FFB400" onClick="enviar()">';
echo '<input name="fecha_semana_grupo2" type="hidden" value="'.$_GET[fecha_ini].'">';
echo '<input name="fecha_fin" type="hidden" value="'.$fecha_fin.'">';
echo '<input name="grupo_traba" type="hidden" value="'.$_GET[grupo_traba].'">';
echo '<p>&nbsp;</p>';
echo '<p>&nbsp;</p>';
echo '<p>&nbsp;</p>';
echo '<p>&nbsp;</p>';

}else{
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
<form name="form1" method="post" action="mod_semana_ci_bd.php">
 <div align="center">
    <table width="766" border="2" bordercolor="#0000FF">
      <tr>
        <td width="85" height="26" bordercolor="#0000FF" bgcolor="#2770DB" class="t12g Estilo102 Estilo156">REGION</td>
        <td width="157" bordercolor="#0000FF" bgcolor="#2770DB" class="t12g">
          <span class="Estilo159">
          <label>
		  <?php
// Conexion el servidor
include ("includes/bdkey.php");
		
$fechaini=$_POST['fecha_1'];
$ci=$_POST[ci];

$result = mysql_query("select * from traba where ci='$ci'");
while ($row=mysql_fetch_array($result))
		{
			echo '<input name="region" size="25" maxlength="25" type="text" readonly="readonly" value="'.$row[region].'">';
			$horariovar=$row[horariovar];
		  ?>
          </label>
          </span> </td>
        <td width="75" bordercolor="#0000FF" bgcolor="#2770DB" class="t12g Estilo102 Estilo156">DIRECCI&Oacute;N</td>
        <td width="137" bordercolor="#0000FF" bgcolor="#2770DB" class="Estilo93">
          <label></label>
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
          <label></label>
          <?php
		  echo '<input name="coordinacion" size="25" maxlength="25" type="text" readonly="readonly" value="'.$row[coordinacion].'">';
		  ?></td>
        <td width="75" bordercolor="#0000FF" bgcolor="#2770DB" class="t12g Estilo102 Estilo156">DEPARTAMENTO</td>
        <td width="137" bordercolor="#0000FF" bgcolor="#2770DB" class="Estilo93">
          <label></label>
          <?php
		  echo '<input name="estructura" size="27" maxlength="27" type="text" readonly="readonly" value="'.$row[estructura].'">';
		  ?></td>
        <td width="128" bordercolor="#0000FF" bgcolor="#2770DB" class="t12g Estilo102 Estilo156">GRUPO DE TRABAJO</td>
        <td width="142" bordercolor="#0000FF" bgcolor="#2770DB" class="Estilo102">
          <span class="Estilo156">
          <label>
        	<?php
			echo '<input name="jef" size="25" maxlength="25" type="text" readonly="readonly" value="'.$row[jefatura].'">';
			$jef=$row[jefatura];
		  ?>
          </label>
          </span> </td>
        </tr>
      <tr>
        <td bordercolor="#0000FF" bgcolor="#2770DB" class="t12g Estilo102 Estilo157">ESTRUCTURA</td>
        <td bordercolor="#0000FF" bgcolor="#2770DB" class="t12g Estilo160 Estilo157">
          <label></label>
          <?php
echo '<input name="id_estructura" size="25" maxlength="25" type="text" readonly="readonly" value="'.$row[id_estructura].'">';
		  ?></td>
		  <td bordercolor="#0000FF" bgcolor="#2770DB" class="t12g Estilo102 Estilo157">HORARIO</td>
          <td bordercolor="#0000FF" bgcolor="#2770DB" class="t12g Estilo160 Estilo157">
          <select name="horario">
		  <?php
		  echo '<option value="'.$row[horario].'" selected>'.$row[horario].'</option>';
		  ?>
            <option value="07:00-15:00">07:00-15:00</option>
            <option value="15:00-23:00">15:00-23:00</option>
            <option value="23:00-07:00">23:00-07:00</option>
			<option value="07:30-16:30">07:30-16:30</option>
		<?php
		if($horariovar==1)
		{
		?>
			<option value="07:00-18:00">07:00-18:00</option>
            <option value="16:00-00:00">16:00-00:00</option>
            <option value="00:00-08:00">00:00-08:00</option>
            <option value="08:00-16:00">08:00-16:00</option>
            <option value="MTTO">MTTO</option>
		<?php
		}
		?>
        </select>
		</td>
		<td bordercolor="#0000FF" bgcolor="#2770DB" class="t12g Estilo102 Estilo157">manejo</td>
          <td bordercolor="#0000FF" bgcolor="#2770DB" class="t12g Estilo160 Estilo157">
        <?php
		echo '<input name="manejo" size="25" maxlength="25" type="text" readonly="readonly" value="'.$row[manejo].'">';
		$manejo=$row[manejo];
		?>
		</td>
    <tr>
        <td width="85" bgcolor="#2770DB"><span class="t12g Estilo102 Estilo156">C&Eacute;DULA</span></td>
        <td width="152" bgcolor="#2770DB"><?php
echo '<input name="ci" size="15" maxlength="15" type="text" readonly="readonly" value="'.$row[ci].'">';
		   ?></td>
        <td width="87" bgcolor="#2770DB"><span class="t12g Estilo102 Estilo156">NOMBRE</span></td>
        <td width="138" bgcolor="#2770DB"><?php
echo '<input name="nombres" size="25" maxlength="25" type="text" readonly="readonly" value="'.$row[nombres].'">';
		   ?></td>
        <td width="123" bgcolor="#2770DB"><span class="t12g Estilo102 Estilo156">APELLIDOS</span></td>
        <td width="141" bgcolor="#2770DB"><?php
echo '<input name="apellidos" size="25" maxlength="25" type="text" readonly="readonly" value="'.$row[apellidos].'">';
		   }
		   
		$SQRy=mysql_query("SELECT * FROM estruct WHERE jefatura = '$jef'");
		while ($row=mysql_fetch_array($SQRy))
		{
		$horariovar=$row[horariovar];
		$estructura=$row[estructura];
		$coordinacion=$row[coordinacion];
		$gerencia=$row[gerencia];
		}
		?>
	   </td>
      </tr>
    </table>
    <p>&nbsp;</p>
 </div>
 <h4 align="center" class="Estilo104">MODIFICACION SEMANA  DEL D&Iacute;A
   <?php
	echo '<u>'.$fecha_ini=$_POST['fecha_ini'];
	echo '</u>';
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
	$fechamas6=suma_fechas($fecha_ini, 6);
			
		$day3=substr($fechamas6,0,2);
		$month3=substr($fechamas6,3,2);
		$year3=substr($fechamas6,6,4);
		$fecha_fin=$day3."-".$month3."-".$year3;
		
		echo '<u>'.$_POST[fecha_fin].'</u>';
		  ?>
   </span></h4>
    <table width="811" border="0">
      <tr>
        <td width="187"><table width="192" border="1">
          <tr>
            <td width="88" bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo102 Estilo93 Estilo102"><strong>D&Iacute;A</strong></div></td><td width="88"><div align="center">
                <?php
echo $fecha1=suma_fechas($fecha_ini, 0)."</br>";
$day1=substr($fecha1,0,2);
$month1=substr($fecha1,3,2);
$year1=substr($fecha1,6,4);

$dia1_semana=date ("l", mktime(0, 0, 0,$month1, $day1, $year1));
if ($dia1_semana=="Monday") echo $dia1="Lunes";
if ($dia1_semana=="Tuesday") echo $dia1="Martes";
if ($dia1_semana=="Wednesday") echo $dia1="Mi&eacute;rcoles";
if ($dia1_semana=="Thursday") echo $dia1="Jueves";
if ($dia1_semana=="Friday") echo $dia1="Viernes";
if ($dia1_semana=="Saturday") echo $dia1="S&aacute;bado";
if ($dia1_semana=="Sunday") echo $dia1="Domingo";

$fechadia1=$year1."-".$month1."-".$day1;
echo '<input name="fechadia1" type="hidden" value="'.$fechadia1.'">';
// Datos a modificar fecha d&iacute;a #1
$sQuery1=mysql_query("SELECT * FROM jornada WHERE ci = '$ci' and fecha = '$fechadia1'");
while ($row=mysql_fetch_array($sQuery1))
{
?></div></td>
          </tr>
          <tr>
             <td bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo102 Estilo93 Estilo102"><strong>SALARIO 004</strong></div></td><td><div align="center">
                <select name="hd0" style="width:80px">
				<?php
				echo '<option value="'.$row[hd].'" selected>'.$row[hd].'</option>';
				?>
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
							if($jef=="LINEAS ENERGIZADAS" or $coordinacion=="DISTRIBUCION MIRANDA")
								{
								echo '<option value="0">0</option>';
								}else{
                				echo '<option value="4">4</option>';
								}
						break;
						
						case "Domingo":
							?>
                			<option value="5">5</option>
                			<option value="8">8</option>
							<?php
						break;
						
						default:
							if($jef=="LINEAS ENERGIZADAS" or $coordinacion=="DISTRIBUCION MIRANDA")
								{
								switch($dia1)
									{
									case "Viernes":
										?>
                						<option value="8">8</option>
                						<?php
									break;
									
									default:
										?>
                						<option value="9">9</option>
                						<?php
									break;
									}
								}else{
									?>
                					<option value="8">8</option>
               						<?php
								}
						break;
						}
					}
				?>
				</select>
            </div></td>
          </tr>
          <tr>
            <td bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo102 Estilo93 Estilo102"><strong>D&Iacute;A FERIADO TRABAJ. </strong></div></td><td><div align="center">
              <select name="feriado0" style="width:80px">
                <?php
				echo '<option value="'.$row[feriado].'" selected>'.$row[feriado].'</option>';
				?>
                <option value="0" >0</option>
                <option value="0.5">0.5</option>
                <option value="1">1</option>
              </select>
            </div></td>
          </tr>
          <tr>
            <td bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo102 Estilo93 Estilo102"><strong>H.E.D. </strong></div></td><td><div align="center">
              <select name="hed0" style="width:80px">
			  <?php
			  echo '<option value="'.$row[hed].'" selected>'.$row[hed].'</option>';
			  ?>
              	<option value="0">0</option>
				<option value="0.5">0.5</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <?php
			if($dia1=="S&aacute;bado") { echo '<option value="9">9</option>'; echo '<option value="10">10</option>'; } 
			if($dia1=="Domingo") echo '<option value="9">9</option>';
			?>
                <?php
			if($coordinacion=="TRANSMISION")
			{
			?>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <?php
			}
			?>
              </select>
            </div></td>
          </tr>
          <tr>
            <td bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo102 Estilo93 Estilo102"><strong>H.E.D.P. </strong></div></td><td><div align="center">
            <select name="hedp0" style="width:80px">
			<?php
			echo '<option value="'.$row[hedp].'" selected>'.$row[hedp].'</option>';
			?>
           	<option value="0">0</option>
			<option value="0.5">0.5</option>
			<?php
			if($horariovar==1) 
			{
			?>
          	<option value="1">1</option>
        	<?php
			}
			?>
			<option value="3.5" >3.5</option>
			<option value="4" >4</option>
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
		?>
                </select>
            </div></td>
          </tr>
          <tr>
            <td bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo102 Estilo93 Estilo102"><strong>t.r.c.d.</strong></div></td>
            <td><div align="center">
                <select name="trcd0" style="width:80px">
                  <?php
			echo '<option value="'.$row[trcd].'" selected>'.$row[trcd].'</option>';
			?>
                  <option value="0" >0</option>
                  <option value="0.5">0.5</option>
                  <option value="1">1</option>
                  <?php
			if($horariovar==1) echo '<option value="1.5">1 1/2</option>';
			?>
                </select>
            </div></td>
          </tr>
          <tr>
            <td bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo102 Estilo93 Estilo102"><strong>BONO NOCTURNO</strong></div></td><td><div align="center">
                <?php
switch($horariovar)
	{
	case 1:
	?>
                <select name="bonocturno0" style="width:80px">
				<?php
			  	echo '<option value="'.$row[bonocturno].'" selected>'.$row[bonocturno].'</option>';
			  	?>
                  <option value="0">0</option>
                  <option value="3.5">3.5</option>
                  <option value="7">7</option>
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
          </tr>
          <tr>
            <td bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo102 Estilo93 Estilo102"><strong>H.E.N. </strong></div></td><td><div align="center">
                <select name="hen0" style="width:80px">
				<?php
				echo '<option value="'.$row[hen].'" selected>'.$row[hen].'</option>';
				?>
                  <option value="0">0</option>
                  <option value="0.5">0.5</option>
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
          </tr>
          <tr>
            <td bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo102 Estilo93 Estilo102"><strong>H.E.N.P. </strong></div></td>
            <td><div align="center">
            <select name="henp0" style="width:80px">
			<?php
			echo '<option value="'.$row[henp].'" selected>'.$row[henp].'</option>';
			?>
            <option value="0">0</option>
			<?php
			if($horariovar==1)
			{
			echo '<option value="0.5">0.5</option>';
			echo '<option value="1">1</option>';
			}
			?>
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
            </select>
            </div></td>
          </tr>
          <tr>
            <td bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo93 Estilo102 Estilo102"><strong>T.R.C.N.</strong></div></td>
            <td><div align="center">
            <select name="trcn0" style="width:80px">
			<?php
			echo '<option value="'.$row[trcn].'" selected>'.$row[trcn].'</option>';
			?>
				<option value="0">0</option>
            	<option value="0.5">0.5</option>
            </select>
            </div></td>
          </tr>
          <tr>
            <td bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo93 Estilo110 Estilo102">KILOMETRAJE</div></td><td><div align="center"><span class="Estilo103">
           <?php
		   echo '<input name="km0" type="text" id="km0" value='.$row[km].' size="9" maxlength="4" onKeyPress="mis_datos()">';
		   ?>
		   <input type="checkbox" name="vehiculo_propio0" value="on">
            </span><span class="Estilo162">&iquest;Vehiculo Propio? </span>
		   </div></td>
          </tr>
          <tr>
            <td bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo93 Estilo110 Estilo102">MANEJO</div></td><td><div align="center"><span class="Estilo103" style="width:80px">
			<?php
			if($manejo=="SI")
			{
			?>
			<select name="mn0" style="width:80px">
			<?php
			$manbd=$row[manejo]/2;
		   	echo '<option value="'.$manbd.'" selected>'.$row[manejo].'</option>';
			?>
           		<option value="0">0</option>
           		<option value="1">2</option>
            	<option value="2">4</option>
				<option value="3">6</option>
			</select>
			<?php
			}else{
			?>
			<input name="mn0" type="text" value="0" readonly="readonly" size="9">
			<?php
			}
			?>
            </span></div></td>
          </tr>
          <tr>
            <td bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo102 Estilo93 Estilo102"><strong>cesta ticket 0.3</strong></div></td>
            <td><div align="center">
                <select name="ctc0" style="width:80px">
                  <?php
			echo '<option value="'.$row[ctc].'" selected>'.$row[ctc].'</option>';
			?>
                  <option value="0" >0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
				  <option value="3">3</option>
                </select>
            </div></td>
          </tr>
          <tr>
            <td bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo102 Estilo93 Estilo102"><strong>cesta ticket 0.5</strong></div></td>
            <td><div align="center">
                <select name="ctl0" style="width:80px">
                  <?php
			echo '<option value="'.$row[ctl].'" selected>'.$row[ctl].'</option>';
			?>
               	  <option value="0" >0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
				  <option value="3">3</option>
                </select>
            </div></td>
          </tr>
          <tr>
            <td bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo102 Estilo93 Estilo102"><strong>cesta ticket 0.3 7mo d&iacute;a</strong></div></td>
            <td><div align="center">
                <select name="ctc7mo0" style="width:80px">
                  <?php
			echo '<option value="'.$row[ctc7mo].'" selected>'.$row[ctc7mo].'</option>';
			?>
                  <option value="0" >0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
				  <option value="3">3</option>
            </select>
            </div></td>
          </tr>
          <tr>
            <td bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo102 Estilo93 Estilo102"><strong>cesta ticket 0.5 7mo d&iacute;a</strong></div></td>
            <td><div align="center">
                <select name="ctl7mo0" style="width:80px">
                  <?php
			echo '<option value="'.$row[ctl7mo].'" selected>'.$row[ctl7mo].'</option>';
			?>
                  <option value="0" >0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
				  <option value="3">3</option>
                </select>
            </div></td>
          </tr>
          <tr>
            <td bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo138 Estilo102">MOVILIZACI&Oacute;N</div></td><td><div align="center"><span class="Estilo103">
                <select name="movilizacion0" style="width:80px">
				<?php
				echo '<option value="'.$row[movilizacion].'" >'.$row[movilizacion].'</option>';
				?>
                  <option value="0" >0</option>
                  <option value="2.5">2.5</option>
                  <option value="5">5</option>
                  <option value="10">10</option>
                </select>
            </span></div></td>
          </tr>
          <tr>
             <td bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo138 Estilo102">CLAVE 221</div></td><td><div align="center" class="Estilo103">
                <label>
            <?php
			switch($horariovar)
			{
			case 1:
			?>
                <select name="clave2210" style="width:80px">
				<?php
				echo '<option value="'.$row[clave221].'" >'.$row[clave221].'</option>';
				?>
                  <option value="0" >0</option>
                  <option value="8">8</option>
                </select>
                <?php
			break;
			default:
			?>
                <input name="clave2210" type="text" id="clave2210" value="0" readonly="readonly" size="9">
                <?php
			break;
		}
		?>
                </label>
            </div></td>
          </tr>
          <tr>
            <td bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo138 Estilo102">CLAVE 277</div></td><td><div align="center" class="Estilo103">
                <label>
                <?php
switch($jef)
	{
	case "LINEAS ENERGIZADAS":
	?>
                <select name="clave2770" style="width:80px">
				<?php
				echo '<option value="'.$row[clave277].'" selected>'.$row[clave277].'</option>';
				?>
                 <option value="0" >NO</option>
                 <option value="1">SI</option>
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
          </tr>
          <tr>
            <td bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo138 Estilo102">LUGAR DE VI&Aacute;TICO</div></td><td><div align="center"><span class="Estilo103">
        <?php
		echo '<textarea name="lugar0" cols="10" rows="2" id="lugar0" style="width:80px" onKeyUp="this.value = this.value.toUpperCase();">'.$row[lugar].'</textarea>';
		?>
            </span></div></td>
          </tr>
          <tr>
            <td bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo138 Estilo102">OBSERVACI&Oacute;N</div></td><td><div align="center"><span class="Estilo103">
        <?php
		echo '<textarea name="observacion0" cols="10" rows="2" id="observacion0" style="width:80px" onKeyUp="this.value = this.value.toUpperCase();">'.$row[observacion].'</textarea>';
		?>
            </span></div></td>
          </tr>
          <tr>
            <td bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo102"><span class="Estilo138">CLASIFICACI&Oacute;N DEL D&Iacute;A:</span></div></td><td><div align="center"><span class="Estilo103" style="width:80px">
			<select name="tipod0" style="width:80px">
                <?php
				switch($row[tipodia])
				{
				case 1:
		   		echo '<option value=1 selected>NORMAL</option>';
				break;
				case 2:
				echo '<option value=2 selected>6TO D&Iacute;A</option>';
				break;
				case 3:
				echo '<option value=3 selected>7MO D&Iacute;A</option>';
				break;
				case 4:
				echo '<option value=4 selected>LIBRE</option>';
				break;
				case 5:
				echo '<option value=5 selected>AUSENTE</option>';
				break;
				case 6:
				echo '<option value=6 selected>REPOSO</option>';
				break;
				case 7:
				echo '<option value=7 selected>COMPENS.</option>';
				break;
				case 8:
		   		echo '<option value=8 selected>VACACI&Oacute;N</option>';
				break;
				case 9:
		   		echo '<option value=9 selected>PERM.N.R.</option>';
				break;
				case 10:
		   		echo '<option value=10 selected>PERM.REM.</option>';
				break;
				case 11:
				echo '<option value=11 selected>7MO.LIBRE</option>';
				break;
				case 12:
		   		echo '<option value=11 selected>PERM.SND.</option>';
				break;
				}
				?>
                <option value="1">NORMAL</option>
                <option value="2">6TO D&Iacute;A</option>
                <option value="3">7MO D&Iacute;A</option>
				<option value="11">7MO.LIBRE</option>
                <option value="4">LIBRE</option>
                <option value="5">AUSENTE</option>
                <option value="6">REPOSO</option>
                <option value="7">COMPENS.</option>
                <option value="8">VACACI&Oacute;N</option>
				<option value="9">PERM.N.R.</option>
				<option value="10">PERM.REM.</option>
				<option value="12">PERM.SND.</option>
			</select>
            </span></div>
              <?php
			}

			//Funcion que limpia las variables de la consulta
			
			function limpiarvar()
			{
			unset($row[hd], $row[feriado], $row[hed], $row[hedp], $row[trcd], $row[bonocturno], $row[hen], $row[henp], $row[trcn], $row[km], $row[manejo], $row[movilizacion], $row[clave221], $row[clave277], $row[lugar], $row[observacion]);
			
			$row[tipodia]=0;
			}
			limpiarvar();
			?>
			</td>
          </tr>
        </table></td>
        <td width="98"><table width="98
		" border="1">
          <tr>
            <td width="92"><div align="center">
              <?php
echo $fecha2=suma_fechas($fecha_ini, 1)."</br>";

$day2=substr($fecha2,0,2);
$month2=substr($fecha2,3,2);
$year2=substr($fecha2,6,4);

$dia2_semana=date ("l", mktime(0, 0, 0,$month2, $day2, $year2));

if ($dia2_semana=="Monday") echo $dia2="Lunes";
if ($dia2_semana=="Tuesday") echo $dia2="Martes";
if ($dia2_semana=="Wednesday") echo $dia2="Mi&eacute;rcoles";
if ($dia2_semana=="Thursday") echo $dia2="Jueves";
if ($dia2_semana=="Friday") echo $dia2="Viernes";
if ($dia2_semana=="Saturday") echo $dia2="S&aacute;bado";
if ($dia2_semana=="Sunday") echo $dia2="Domingo";

$fechadia2=$year2."-".$month2."-".$day2;
echo '<input name="fechadia2" type="hidden" value="'.$fechadia2.'">';
// Datos a modificar fecha d&iacute;a #2
$sQuery2=mysql_query("SELECT * FROM jornada WHERE ci = '$ci' and fecha = '$fechadia2'");
while ($row=mysql_fetch_array($sQuery2))
{
?>
              </span></div></td>
          </tr>
          <tr>
            <td><div align="center">
                <div align="center">
                <select name="hd1" style="width:80px">
                <?php
				echo '<option value="'.$row[hd].'" selected>'.$row[hd].'</option>';
				?>
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
							if($jef=="LINEAS ENERGIZADAS" or $coordinacion=="DISTRIBUCION MIRANDA")
								{
								echo '<option value="0">0</option>';
								}else{
                				echo '<option value="4">4</option>';
								}
						break;
						
						case "Domingo":
							?>
                			<option value="5">5</option>
                			<option value="8">8</option>
							<?php
						break;
						
						default:
							if($jef=="LINEAS ENERGIZADAS" or $coordinacion=="DISTRIBUCION MIRANDA")
								{
								switch($dia2)
									{
									case "Viernes":
										?>
                						<option value="8" >8</option>
                						<?php
									break;
									
									default:
										?>
                						<option value="9" >9</option>
                						<?php
									break;
									}
								}else{
									?>
                					<option value="8" >8</option>
               						<?php
								}
						break;
						}
					}
				?>
                  </select>
                </div>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">
                <select name="feriado1" style="width:80px">
				<?php
				echo '<option value="'.$row[feriado].'" selected>'.$row[feriado].'</option>';
				?>
                  <option value="0" >0</option>
                  <option value="0.5">0.5</option>
                  <option value="1">1</option>
                </select>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">
                <select name="hed1" style="width:80px">
				<?php
				echo '<option value="'.$row[hed].'" selected>'.$row[hed].'</option>';
			  	?>
                  <option value="0">0</option>
				  <option value="0.5">0.5</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <?php
			if($dia2=="S&aacute;bado") { echo '<option value="9">9</option>'; echo '<option value="10">10</option>'; } 
			if($dia2=="Domingo") echo '<option value="9">9</option>';
			if($coordinacion=="TRANSMISION")
			{
			?>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <?php
			}
			?>
                </select>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">
           <select name="hedp1" style="width:80px">
            <?php
			echo '<option value="'.$row[hedp].'" selected>'.$row[hedp].'</option>';
			?>
           	<option value="0">0</option>
			<option value="0.5">0.5</option>
			<?php
			if($horariovar==1) 
			{
			?>
          	<option value="1">1</option>
        	<?php
			}
			?>
			<option value="3.5" >3.5</option>
			<option value="4" >4</option>
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
			if($dia1 !="S&aacute;bado") echo '<option value="8">8</option>';
			echo '<option value="12">12</option>';
			}
			?>
                </select>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">
                <select name="trcd1" style="width:80px">
			<?php
			echo '<option value="'.$row[trcd].'" selected>'.$row[trcd].'</option>';
			?>
                  <option value="0" >0</option>
                  <option value="0.5">0.5</option>
                  <option value="1">1</option>
                  <?php
			if($horariovar==1) echo '<option value="1.5">1.5</option>';
			?>
                </select>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">
                <?php
switch($horariovar)
	{
	case 1:
	?>
                <select name="bonocturno1" style="width:80px">
				<?php
			  	echo '<option value="'.$row[bonocturno].'" selected>'.$row[bonocturno].'</option>';
			  	?>
                  <option value="0">0</option>
                  <option value="3.5">3.5</option>
                  <option value="7">7</option>
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
          </tr>
          <tr>
            <td><div align="center">
                <select name="hen1" style="width:80px">
				<?php
				echo '<option value="'.$row[hen].'" selected>'.$row[hen].'</option>';
				?>
                  <option value="0">0</option>
                  <option value="0.5">0.5</option>
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
          </tr>
          <tr>
            <td><div align="center">
                <select name="henp1" style="width:80px">
			<?php
			echo '<option value="'.$row[henp].'" selected>'.$row[henp].'</option>';
			?>
            <option value="0">0</option>
			<?php
			if($horariovar==1)
			{
			echo '<option value="0.5">0.5</option>';
			echo '<option value="1">1</option>';
			}
			?>
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
            </select>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">
                <select name="trcn1" style="width:80px">
				<?php
			echo '<option value="'.$row[trcn].'" selected>'.$row[trcn].'</option>';
			?>
                  <option value="0">0</option>
                  <option value="0.5">0.5</option>
                </select>
            </div></td>
          </tr>
          <tr>
            <td><div align="center"><span class="Estilo103">
              <?php
		   echo '<input name="km1" type="text" id="km1" value='.$row[km].' size="9" maxlength="4" onKeyPress="mis_datos()">';
		   ?>
		   <input type="checkbox" name="vehiculo_propio1" value="on">
            </span><span class="Estilo162">&iquest;Vehiculo Propio? </span>
		   </div></td>
          </tr>
          <tr>
            <td>
			<div align="center"><span class="Estilo103" style="width:80px">
			<?php
			if($manejo=="SI")
			{
			?>
			<select name="mn1" style="width:80px">
			<?php
			$manbd=$row[manejo]/2;
		   	echo '<option value="'.$manbd.'" selected>'.$row[manejo].'</option>';
			?>
           		<option value="0">0</option>
           		<option value="1">2</option>
            	<option value="2">4</option>
				<option value="3">6</option>
			</select>
			<?php
			}else{
			?>
			<input name="mn1" type="text" value="0" readonly="readonly" size="9">
			<?php
			}
			?>
            </span></div></td>
          </tr>
          <tr>
            <td><div align="center">
                <select name="ctc1" style="width:80px">
                  <?php
			echo '<option value="'.$row[ctc].'" selected>'.$row[ctc].'</option>';
			?>
                  <option value="0" >0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">
                <select name="ctl1" style="width:80px">
                  <?php
			echo '<option value="'.$row[ctl].'" selected>'.$row[ctl].'</option>';
			?>
                  <option value="0" >0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">
                <select name="ctc7mo1" style="width:80px">
                  <?php
			echo '<option value="'.$row[ctl7mo].'" selected>'.$row[ctl7mo].'</option>';
			?>
                  <option value="0" >0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">
                <select name="ctl7mo1" style="width:80px">
                  <?php
			echo '<option value="'.$row[trcd].'" selected>'.$row[trcd].'</option>';
			?>
                  <option value="0" >0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
            </div></td>
          </tr>
          <tr>
            <td><div align="center"><span class="Estilo103">
                <select name="movilizacion1" style="width:80px">
				<?php
				echo '<option value="'.$row[movilizacion].'" >'.$row[movilizacion].'</option>';
				?>
                  <option value="0" >0</option>
                  <option value="2.5">2.5</option>
                  <option value="5">5</option>
                  <option value="10">10</option>
                </select>
            </span></div></td>
          </tr>
          <tr>
            <td><div align="center" class="Estilo103">
            <label>
            <?php
			switch($horariovar)
			{
			case 1:
			?>
                <select name="clave2211" style="width:80px">
				<?php
				echo '<option value="'.$row[clave221].'" >'.$row[clave221].'</option>';
				?>
                  <option value="0" >0</option>
                  <option value="8">8</option>
                </select>
                <?php
			break;
			default:
			?>
                <input name="clave2211" type="text" id="clave2211" value="0" readonly="readonly" size="9">
                <?php
			break;
		}
		?>
                </label>
            </div></td>
          </tr>
          <tr>
            <td><div align="center" class="Estilo103">
              <label>
              <?php
switch($jef)
	{
	case "LINEAS ENERGIZADAS":
	?>
              <select name="clave2771" style="width:80px">
                <?php
				echo '<option value="'.$row[clave277].'" selected>'.$row[clave277].'</option>';
				?>
                <option value="0" >NO</option>
                <option value="1">SI</option>
              </select>
              <?php
	break;
	default:
		  ?>
              <input name="clave2771" type="text" id="clave27702" value="0" readonly="readonly" size="9">
              <?php
	break;
	}
		  ?>
              <input name="reposo02" type="hidden" id="reposo02" value="0">
              </label>
            </div></td>
          </tr>
          <tr>
            <td><div align="center"><span class="Estilo103">
        <?php
		echo '<textarea name="lugar1" cols="10" rows="2" id="lugar1" style="width:80px" onKeyUp="this.value = this.value.toUpperCase();">'.$row[lugar].'</textarea>';
		?>
            </span></div></td>
          </tr>
          <tr>
            <td><div align="center"><span class="Estilo103">
        <?php
		echo '<textarea name="observacion1" cols="10" rows="2" id="observacion1" style="width:80px" onKeyUp="this.value = this.value.toUpperCase();">'.$row[observacion].'</textarea>';
		?>
            </span></div></td>
          </tr>

  <td></span><span class="Estilo103" style="width:80px">
    <select name="tipod1" style="width:80px">
	<?php
				switch($row[tipodia])
				{
				case 1:
		   		echo '<option value=1 selected>NORMAL</option>';
				break;
				case 2:
				echo '<option value=2 selected>6TO D&Iacute;A</option>';
				break;
				case 3:
				echo '<option value=3 selected>7MO D&Iacute;A</option>';
				break;
				case 4:
				echo '<option value=4 selected>LIBRE</option>';
				break;
				case 5:
				echo '<option value=5 selected>AUSENTE</option>';
				break;
				case 6:
				echo '<option value=6 selected>REPOSO</option>';
				break;
				case 7:
				echo '<option value=7 selected>COMPENS.</option>';
				break;
				case 8:
		   		echo '<option value=8 selected>VACACI&Oacute;N</option>';
				break;
				case 9:
		   		echo '<option value=9 selected>PERM.N.R.</option>';
				break;
				case 10:
		   		echo '<option value=10 selected>PERM.REM.</option>';
				break;
				case 11:
				echo '<option value=11 selected>7MO.LIBRE</option>';
				break;
				case 12:
		   		echo '<option value=11 selected>PERM.SND.</option>';
				break;
				}
				?>
                <option value="1">NORMAL</option>
                <option value="2">6TO D&Iacute;A</option>
                <option value="3">7MO D&Iacute;A</option>
				<option value="11">7MO.LIBRE</option>
                <option value="4">LIBRE</option>
                <option value="5">AUSENTE</option>
                <option value="6">REPOSO</option>
                <option value="7">COMPENS.</option>
                <option value="8">VACACI&Oacute;N</option>
				<option value="9">PERM.N.R.</option>
				<option value="10">PERM.REM.</option>
				<option value="12">PERM.SND.</option>
    </select>
            </span>
      <?php
	}
	limpiarvar();
	?></td>
  </tr>
        </table>          </td>
        <td width="99"><table width="98" border="1">
          <tr>
            <td width="92"><div align="center">
                <?php
echo $fecha3=suma_fechas($fecha_ini, 2)."</br>";

$day3=substr($fecha3,0,2);
$month3=substr($fecha3,3,2);
$year3=substr($fecha3,6,4);

$dia3_semana=date ("l", mktime(0, 0, 0,$month3, $day3, $year3));

if ($dia3_semana=="Monday") echo $dia3="Lunes";
if ($dia3_semana=="Tuesday") echo $dia3="Martes";
if ($dia3_semana=="Wednesday") echo $dia3="Mi&eacute;rcoles";
if ($dia3_semana=="Thursday") echo $dia3="Jueves";
if ($dia3_semana=="Friday") echo $dia3="Viernes";
if ($dia3_semana=="Saturday") echo $dia3="S&aacute;bado";
if ($dia3_semana=="Sunday") echo $dia3="Domingo";

$fechadia3=$year3."-".$month3."-".$day3;
echo '<input name="fechadia3" type="hidden" value="'.$fechadia3.'">';
// Datos a modificar fecha d&iacute;a #3
$sQuery3=mysql_query("SELECT * FROM jornada WHERE ci = '$ci' and fecha = '$fechadia3'");
while ($row=mysql_fetch_array($sQuery3))
{
?></div></td>
          </tr>
          <tr>
            <td><div align="center">
                <div align="center">
           		<select name="hd2" style="width:80px">
                <?php
				echo '<option value="'.$row[hd].'" selected>'.$row[hd].'</option>';
				?>
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
							if($jef=="LINEAS ENERGIZADAS" or $coordinacion=="DISTRIBUCION MIRANDA")
								{
								echo '<option value="0">0</option>';
								}else{
                				echo '<option value="4">4</option>';
								}
						break;
						
						case "Domingo":
							?>
                			<option value="5">5</option>
                			<option value="8">8</option>
							<?php
						break;
						
						default:
							if($jef=="LINEAS ENERGIZADAS" or $coordinacion=="DISTRIBUCION MIRANDA")
								{
								switch($dia2)
									{
									case "Viernes":
										?>
                						<option value="8" >8</option>
                						<?php
									break;
									
									default:
										?>
                						<option value="9" >9</option>
                						<?php
									break;
									}
								}else{
									?>
                					<option value="8" >8</option>
               						<?php
								}
						break;
						}
					}
				?>
                  </select>
                </div>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">
                <select name="feriado2" style="width:80px">
				<?php
				echo '<option value="'.$row[feriado].'" selected>'.$row[feriado].'</option>';
				?>
                  <option value="0" >0</option>
                  <option value="0.5">0.5</option>
                  <option value="1">1</option>
                </select>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">
                <select name="hed2" style="width:80px">
				<?php
				echo '<option value="'.$row[hed].'" selected>'.$row[hed].'</option>';
			  	?>
                  <option value="0">0</option>
				  <option value="0.5">0.5</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <?php
			if($dia3=="S&aacute;bado") { echo '<option value="9">9</option>'; echo '<option value="10">10</option>'; } 
			if($dia3=="Domingo") echo '<option value="9">9</option>';
			
			if($coordinacion=="TRANSMISION")
			{
			?>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <?php
			}
			?>
                </select>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">
            <select name="hedp2" style="width:80px">
			<?php
		  	echo '<option value="'.$row[hedp].'" selected>'.$row[hedp].'</option>';
			?>
           	<option value="0">0</option>
			<option value="0.5">0.5</option>
			<?php
			if($horariovar==1) 
			{
			?>
          	<option value="1">1</option>
        	<?php
			}
			?>
			<option value="3.5" >3.5</option>
			<option value="4" >4</option>
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
			if($dia1 !="S&aacute;bado") echo '<option value="8">8</option>';
			echo '<option value="12">12</option>';
			}
		?>
              </select>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">
                <select name="trcd2" style="width:80px">
            <?php
			echo '<option value="'.$row[trcd].'" selected>'.$row[trcd].'</option>';
			?>
			      <option value="0" >0</option>
                  <option value="0.5">0.5</option>
                  <option value="1">1</option>
            <?php
			if($horariovar==1) echo '<option value="1.5">1.5</option>';
			?>
                </select>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">
                <?php
switch($horariovar)
	{
	case 1:
	?>
                <select name="bonocturno2" style="width:80px">
				<?php
			  	echo '<option value="'.$row[bonocturno].'" selected>'.$row[bonocturno].'</option>';
			  	?>
                  <option value="0">0</option>
                  <option value="3.5">3.5</option>
                  <option value="7">7</option>
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
          </tr>
          <tr>
            <td><div align="center">
                <select name="hen2" style="width:80px">
				<?php
				echo '<option value="'.$row[hen].'" selected>'.$row[hen].'</option>';
				?>
                  <option value="0">0</option>
                  <option value="0.5">0.5</option>
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
          </tr>
          <tr>
            <td><div align="center">
                <select name="henp2" style="width:80px">
				<?php
			echo '<option value="'.$row[henp].'" selected>'.$row[henp].'</option>';
			?>
            <option value="0">0</option>
			<?php
			if($horariovar==1)
			{
			echo '<option value="0.5">0.5</option>';
			echo '<option value="1">1</option>';
			}
			?>
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
            </select>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">
                <select name="trcn2" style="width:80px">
			<?php
			echo '<option value="'.$row[trcn].'" selected>'.$row[trcn].'</option>';
			?>
                  <option value="0">0</option>
                  <option value="0.5">0.5</option>
                </select>
            </div></td>
          </tr>
          <tr>
            <td><div align="center"><span class="Estilo103">
              <?php
		   echo '<input name="km2" type="text" id="km2" value='.$row[km].' size="9" maxlength="4" onKeyPress="mis_datos()">';
		   ?> <input type="checkbox" name="vehiculo_propio2" value="on">
            </span><span class="Estilo162">&iquest;Vehiculo Propio? </span>
		   </div></td>
          </tr>
          <tr>
            <td><div align="center"><span class="Estilo103" style="width:80px">
			<?php
			if($manejo=="SI")
			{
			?>
			<select name="mn2" style="width:80px">
			<?php
			$manbd=$row[manejo]/2;
		   	echo '<option value="'.$manbd.'" selected>'.$row[manejo].'</option>';
			?>
           		<option value="0">0</option>
           		<option value="1">2</option>
            	<option value="2">4</option>
				<option value="3">6</option>
			</select>
			<?php
			}else{
			?>
			<input name="mn2" type="text" value="0" readonly="readonly" size="9">
			<?php
			}
			?>
            </span></div>			</td></tr>
          <tr>
            <td><div align="center">
                <select name="ctc2" style="width:80px">
                  <?php
			echo '<option value="'.$row[ctc].'" selected>'.$row[ctc].'</option>';
			?>
                  <option value="0" >0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">
                <select name="ctl2" style="width:80px">
                  <?php
			echo '<option value="'.$row[ctl].'" selected>'.$row[ctl].'</option>';
			?>
                  <option value="0" >0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">
                <select name="ctc7mo2" style="width:80px">
                  <?php
			echo '<option value="'.$row[ctc7mo].'" selected>'.$row[ctc7mo].'</option>';
			?>
                  <option value="0" >0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">
                <select name="ctl7mo2" style="width:80px">
                  <?php
			echo '<option value="'.$row[ctl7mo].'" selected>'.$row[ctl7mo].'</option>';
			?>
                  <option value="0" >0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
            </div></td>
          </tr>
          <tr>
            <td><div align="center"><span class="Estilo103">
                <select name="movilizacion2" style="width:80px">
				<?php
				echo '<option value="'.$row[movilizacion].'" >'.$row[movilizacion].'</option>';
				?>
                  <option value="0" >0</option>
                  <option value="2.5">2.5</option>
                  <option value="5">5</option>
                  <option value="10">10</option>
                </select>
            </span></div></td>
          </tr>
          <tr>
            <td><div align="center" class="Estilo103">
                <label>
			<?php
			switch($horariovar)
			{
			case 1:
			?>
                <select name="clave2212" style="width:80px">
				<?php
				echo '<option value="'.$row[clave221].'" >'.$row[clave221].'</option>';
				?>
                  <option value="0" >0</option>
                  <option value="8">8</option>
                </select>
                <?php
			break;
			default:
			?>
                <input name="clave2212" type="text" id="clave2212" value="0" readonly="readonly" size="9">
                <?php
			break;
		}
		?>
                </label>
            </div></td>
          </tr>
          <tr>
            <td><div align="center" class="Estilo103">
                <label>
                <?php
switch($jef)
	{
	case "LINEAS ENERGIZADAS":
	?>
                <select name="clave2772" style="width:80px">
				<?php
				echo '<option value="'.$row[clave277].'" selected>'.$row[clave277].'</option>';
				?>
                  <option value="0" >NO</option>
                  <option value="1">SI</option>
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
          </tr>
          <tr>
            <td><div align="center"><span class="Estilo103">
        <?php
		echo '<textarea name="lugar2" cols="10" rows="2" id="lugar2" style="width:80px" onKeyUp="this.value = this.value.toUpperCase();">'.$row[lugar].'</textarea>';
		?>
            </span></div></td>
          </tr>
          <tr>
            <td><div align="center"><span class="Estilo103">
        <?php
		echo '<textarea name="observacion2" cols="10" rows="2" id="observacion2" style="width:80px" onKeyUp="this.value = this.value.toUpperCase();">'.$row[observacion].'</textarea>';
		?>
            </span></div></td>
          </tr>

  <td>
    <div align="center"><span class="Estilo103" style="width:80px">
              <select name="tipod2" style="width:80px">
			  <?php
			  switch($row[tipodia])
				{
				case 1:
		   		echo '<option value=1 selected>NORMAL</option>';
				break;
				case 2:
				echo '<option value=2 selected>6TO D&Iacute;A</option>';
				break;
				case 3:
				echo '<option value=3 selected>7MO D&Iacute;A</option>';
				break;
				case 4:
				echo '<option value=4 selected>LIBRE</option>';
				break;
				case 5:
				echo '<option value=5 selected>AUSENTE</option>';
				break;
				case 6:
				echo '<option value=6 selected>REPOSO</option>';
				break;
				case 7:
				echo '<option value=7 selected>COMPENS.</option>';
				break;
				case 8:
		   		echo '<option value=8 selected>VACACI&Oacute;N</option>';
				break;
				case 9:
		   		echo '<option value=9 selected>PERM.N.R.</option>';
				break;
				case 10:
		   		echo '<option value=10 selected>PERM.REM.</option>';
				break;
				case 11:
				echo '<option value=11 selected>7MO.LIBRE</option>';
				break;
				case 12:
		   		echo '<option value=11 selected>PERM.SND.</option>';
				break;
				}
				?>
                <option value="1">NORMAL</option>
                <option value="2">6TO D&Iacute;A</option>
                <option value="3">7MO D&Iacute;A</option>
				<option value="11">7MO.LIBRE</option>
                <option value="4">LIBRE</option>
                <option value="5">AUSENTE</option>
                <option value="6">REPOSO</option>
                <option value="7">COMPENS.</option>
                <option value="8">VACACI&Oacute;N</option>
				<option value="9">PERM.N.R.</option>
				<option value="10">PERM.REM.</option>
				<option value="12">PERM.SND.</option>
              </select>
            </span></div>
              <?php
	}
	limpiarvar();
	?>	</td>
  </tr>
        </table></td>
        <td width="99"><table width="104" border="1">
          <tr>
            <td width="94"><div align="center">
                <?php
echo $fecha4=suma_fechas($fecha_ini, 3)."</br>";

$day4=substr($fecha4,0,2);
$month4=substr($fecha4,3,2);
$year4=substr($fecha4,6,4);

$dia4_semana=date ("l", mktime(0, 0, 0,$month4, $day4, $year4));

if ($dia4_semana=="Monday") echo $dia4="Lunes";
if ($dia4_semana=="Tuesday") echo $dia4="Martes";
if ($dia4_semana=="Wednesday") echo $dia4="Mi&eacute;rcoles";
if ($dia4_semana=="Thursday") echo $dia4="Jueves";
if ($dia4_semana=="Friday") echo $dia4="Viernes";
if ($dia4_semana=="Saturday") echo $dia4="S&aacute;bado";
if ($dia4_semana=="Sunday") echo $dia4="Domingo";

$fechadia4=$year4."-".$month4."-".$day4;
echo '<input name="fechadia4" type="hidden" value="'.$fechadia4.'">';
// Datos a modificar fecha d&iacute;a #4
$sQuery4=mysql_query("SELECT * FROM jornada WHERE ci = '$ci' and fecha = '$fechadia4'");
while ($row=mysql_fetch_array($sQuery4))
{
?></div></td>
          </tr>
          <tr>
            <td><div align="center">
                <div align="center">
            <select name="hd3" style="width:80px">
			<?php
				echo '<option value="'.$row[hd].'" selected>'.$row[hd].'</option>';
				?>
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
							if($jef=="LINEAS ENERGIZADAS" or $coordinacion=="DISTRIBUCION MIRANDA")
								{
								echo '<option value="0">0</option>';
								}else{
                				echo '<option value="4">4</option>';
								}
						break;
						
						case "Domingo":
							?>
                			<option value="5">5</option>
                			<option value="8">8</option>
							<?php
						break;
						
						default:
							if($jef=="LINEAS ENERGIZADAS" or $coordinacion=="DISTRIBUCION MIRANDA")
								{
								switch($dia4)
									{
									case "Viernes":
										?>
                						<option value="8">8</option>
                						<?php
									break;
									
									default:
										?>
                						<option value="9">9</option>
                						<?php
									break;
									}
								}else{
									?>
                					<option value="8">8</option>
               						<?php
								}
						break;
						}
					}
				?>
                  </select>
                </div>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">
                <select name="feriado3" style="width:80px">
				<?php
				echo '<option value="'.$row[feriado].'" selected>'.$row[feriado].'</option>';
				?>
                  <option value="0" >0</option>
                  <option value="0.5">0.5</option>
                  <option value="1">1</option>
                </select>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">
                <select name="hed3" style="width:80px">
				<?php
				echo '<option value="'.$row[hed].'" selected>'.$row[hed].'</option>';
			  	?>
                  <option value="0">0</option>
				  <option value="0.5">0.5</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <?php
			if($dia4=="S&aacute;bado") { echo '<option value="9">9</option>'; echo '<option value="10">10</option>'; } 
			if($dia4=="Domingo") echo '<option value="9">9</option>';
			
			if($coordinacion=="TRANSMISION")
			{
			?>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <?php
			}
			?>
                </select>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">
            <select name="hedp3" style="width:80px">
            <?php
			echo '<option value="'.$row[hedp].'" selected>'.$row[hedp].'</option>';
			?>
           	<option value="0">0</option>
			<option value="0.5">0.5</option>
			<?php
			if($horariovar==1) 
			{
			?>
          	<option value="1">1</option>
        	<?php
			}
			?>
			<option value="3.5" >3.5</option>
			<option value="4" >4</option>
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
			if($dia1 !="S&aacute;bado") echo '<option value="8">8</option>';
			echo '<option value="12">12</option>';
			}
		?>
                </select>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">
                <select name="trcd3" style="width:80px">
          	<?php
			echo '<option value="'.$row[trcd].'" selected>'.$row[trcd].'</option>';
			?>
		          <option value="0" >0</option>
                  <option value="0.5">0.5</option>
                  <option value="1">1</option>
                  <?php
			if($horariovar==1) echo '<option value="1.5">1 1/2</option>';
			?>
                </select>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">
                <?php
switch($horariovar)
	{
	case 1:
	?>
                <select name="bonocturno3" style="width:80px">
				<?php
			  	echo '<option value="'.$row[bonocturno].'" selected>'.$row[bonocturno].'</option>';
			  	?>
                  <option value="0">0</option>
                  <option value="3.5">3.5</option>
                  <option value="7">7</option>
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
          </tr>
          <tr>
            <td><div align="center">
                <select name="hen3" style="width:80px">
				<?php
				echo '<option value="'.$row[hen].'" selected>'.$row[hen].'</option>';
				?>
                  <option value="0">0</option>
                  <option value="0.5">0.5</option>
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
          </tr>
          <tr>
            <td><div align="center">
            <select name="henp3" style="width:80px">
			<?php
			echo '<option value="'.$row[henp].'" selected>'.$row[henp].'</option>';
			?>
            <option value="0">0</option>
			<?php
			if($horariovar==1)
			{
			echo '<option value="0.5">0.5</option>';
			echo '<option value="1">1</option>';
			}
			?>
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
            </select>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">
                <select name="trcn3" style="width:80px">
				<?php
			echo '<option value="'.$row[trcn].'" selected>'.$row[trcn].'</option>';
			?>
                  <option value="0">0</option>
                  <option value="0.5">0.5</option>
                </select>
            </div></td>
          </tr>
          <tr>
            <td><div align="center"><span class="Estilo103">
              <?php
		   echo '<input name="km3" type="text" id="km3" value='.$row[km].' size="9" maxlength="4" onKeyPress="mis_datos()">';
		   ?>
             <input type="checkbox" name="vehiculo_propio3" value="on">
            </span><span class="Estilo162">&iquest;Vehiculo Propio? </span>
		   </div></td>
          </tr>
          <tr>
            <td><div align="center"><span class="Estilo103" style="width:80px">
			<?php
			if($manejo=="SI")
			{
			?>
			<select name="mn3" style="width:80px">
			<?php
			$manbd=$row[manejo]/2;
		   	echo '<option value="'.$manbd.'" selected>'.$row[manejo].'</option>';
			?>
           		<option value="0">0</option>
           		<option value="1">2</option>
            	<option value="2">4</option>
				<option value="3">6</option>
			</select>
			<?php
			}else{
			?>
			<input name="mn3" type="text" value="0" readonly="readonly" size="9">
			<?php
			}
			?>
            </span></div>			</td></tr>
          <tr>
            <td><div align="center">
                <select name="ctc3" style="width:80px">
                  <?php
			echo '<option value="'.$row[ctc].'" selected>'.$row[ctc].'</option>';
			?>
                  <option value="0" >0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">
                <select name="ctl3" style="width:80px">
                  <?php
			echo '<option value="'.$row[ctl].'" selected>'.$row[ctl].'</option>';
			?>
                  <option value="0" >0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">
                <select name="ctc7mo3" style="width:80px">
                  <?php
			echo '<option value="'.$row[ctc7mo].'" selected>'.$row[ctc7mo].'</option>';
			?>
                  <option value="0" >0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">
                <select name="ctl7mo3" style="width:80px">
                  <?php
			echo '<option value="'.$row[ctl7mo].'" selected>'.$row[ctl7mo].'</option>';
			?>
                  <option value="0" >0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
            </div></td>
          </tr>
          <tr>
            <td><div align="center"><span class="Estilo103">
                <select name="movilizacion3" style="width:80px">
				<?php
				echo '<option value="'.$row[movilizacion].'" >'.$row[movilizacion].'</option>';
				?>
                  <option value="0" >0</option>
                  <option value="2.5">2.5</option>
                  <option value="5">5</option>
                  <option value="10">10</option>
                </select>
            </span></div></td>
          </tr>
          <tr>
            <td><div align="center" class="Estilo103">
                <label>
            <?php
			switch($horariovar)
			{
			case 1:
			?>
                <select name="clave2213" style="width:80px">
				<?php
				echo '<option value="'.$row[clave221].'" >'.$row[clave221].'</option>';
				?>
                  <option value="0" >0</option>
                  <option value="8">8</option>
                </select>
                <?php
			break;
			default:
			?>
                <input name="clave2213" type="text" id="clave2213" value="0" readonly="readonly" size="9">
                <?php
			break;
		}
		?>
                </label>
            </div></td>
          </tr>
          <tr>
            <td><div align="center" class="Estilo103">
                <label>
                <?php
switch($jef)
	{
	case "LINEAS ENERGIZADAS":
	?>
                <select name="clave2773" style="width:80px">
				<?php
				echo '<option value="'.$row[clave277].'" selected>'.$row[clave277].'</option>';
				?>
                  <option value="0" >NO</option>
                  <option value="1">SI</option>
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
          </tr>
          <tr>
            <td><div align="center"><span class="Estilo103">
        <?php
		echo '<textarea name="lugar3" cols="10" rows="2" id="lugar3" style="width:80px" onKeyUp="this.value = this.value.toUpperCase();">'.$row[lugar].'</textarea>';
		?>
            </span></div></td>
          </tr>
          <tr>
            <td><div align="center"><span class="Estilo103">
        <?php
		echo '<textarea name="observacion3" cols="10" rows="2" id="observacion3" style="width:80px" onKeyUp="this.value = this.value.toUpperCase();">'.$row[observacion].'</textarea>';
		?>
            </span></div></td>
          </tr>
  <td>
<div align="center"><span class="Estilo103" style="width:80px">
              <select name="tipod3" style="width:80px">
              <?php
			   switch($row[tipodia])
				{
				case 1:
		   		echo '<option value=1 selected>NORMAL</option>';
				break;
				case 2:
				echo '<option value=2 selected>6TO D&Iacute;A</option>';
				break;
				case 3:
				echo '<option value=3 selected>7MO D&Iacute;A</option>';
				break;
				case 4:
				echo '<option value=4 selected>LIBRE</option>';
				break;
				case 5:
				echo '<option value=5 selected>AUSENTE</option>';
				break;
				case 6:
				echo '<option value=6 selected>REPOSO</option>';
				break;
				case 7:
				echo '<option value=7 selected>COMPENS.</option>';
				break;
				case 8:
		   		echo '<option value=8 selected>VACACI&Oacute;N</option>';
				break;
				case 9:
		   		echo '<option value=9 selected>PERM.N.R.</option>';
				break;
				case 10:
		   		echo '<option value=10 selected>PERM.REM.</option>';
				break;
				case 11:
				echo '<option value=11 selected>7MO.LIBRE</option>';
				break;
				case 12:
		   		echo '<option value=11 selected>PERM.SND.</option>';
				break;
				}
				?>
                <option value="1">NORMAL</option>
                <option value="2">6TO D&Iacute;A</option>
                <option value="3">7MO D&Iacute;A</option>
				<option value="11">7MO.LIBRE</option>
                <option value="4">LIBRE</option>
                <option value="5">AUSENTE</option>
                <option value="6">REPOSO</option>
                <option value="7">COMPENS.</option>
                <option value="8">VACACI&Oacute;N</option>
				<option value="9">PERM.N.R.</option>
				<option value="10">PERM.REM.</option>
				<option value="12">PERM.SND.</option>
              </select>
            </span></div>
              <?php
	}
	limpiarvar();
	?>	</td>
  </tr>
        </table></td>
        <td width="99"><table width="98" border="1">
          <tr>
            <td width="84"><div align="center">
<?php
echo $fecha5=suma_fechas($fecha_ini, 4)."</br>";

$day5=substr($fecha5,0,2);
$month5=substr($fecha5,3,2);
$year5=substr($fecha5,6,4);

$dia5_semana=date ("l", mktime(0, 0, 0,$month5, $day5, $year5));

if ($dia5_semana=="Monday") echo $dia5="Lunes";
if ($dia5_semana=="Tuesday") echo $dia5="Martes";
if ($dia5_semana=="Wednesday") echo $dia5="Mi&eacute;rcoles";
if ($dia5_semana=="Thursday") echo $dia5="Jueves";
if ($dia5_semana=="Friday") echo $dia5="Viernes";
if ($dia5_semana=="Saturday") echo $dia5="S&aacute;bado";
if ($dia5_semana=="Sunday") echo $dia5="Domingo";

$fechadia5=$year5."-".$month5."-".$day5;
echo '<input name="fechadia5" type="hidden" value="'.$fechadia5.'">';
// Datos a modificar fecha d&iacute;a #5
$sQuery5=mysql_query("SELECT * FROM jornada WHERE ci = '$ci' and fecha = '$fechadia5'");
while ($row=mysql_fetch_array($sQuery5))
{
?>
</div></td>
          </tr>
          <tr>
            <td><div align="center">
                <div align="center">
            <select name="hd4" style="width:80px">
            <?php
				echo '<option value="'.$row[hd].'" selected>'.$row[hd].'</option>';
				?>
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
							if($jef=="LINEAS ENERGIZADAS" or $coordinacion=="DISTRIBUCION MIRANDA")
								{
								echo '<option value="0">0</option>';
								}else{
                				echo '<option value="4">4</option>';
								}
						break;
						
						case "Domingo":
							?>
                			<option value="5">5</option>
                			<option value="8">8</option>
							<?php
						break;
						
						default:
							if($jef=="LINEAS ENERGIZADAS" or $coordinacion=="DISTRIBUCION MIRANDA")
								{
								switch($dia5)
									{
									case "Viernes":
										?>
                						<option value="8">8</option>
                						<?php
									break;
									
									default:
										?>
                						<option value="9">9</option>
                						<?php
									break;
									}
								}else{
									?>
                					<option value="8">8</option>
               						<?php
								}
						break;
						}
					}
				?>
                  </select>
                </div>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">
                <select name="feriado4" style="width:80px">
				<?php
				echo '<option value="'.$row[feriado].'" selected>'.$row[feriado].'</option>';
				?>
                  <option value="0" >0</option>
                  <option value="0.5">0.5</option>
                  <option value="1">1</option>
                </select>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">
                <select name="hed4" style="width:80px">
				<?php
				echo '<option value="'.$row[hed].'" selected>'.$row[hed].'</option>';
			  	?>
                  <option value="0">0</option>
				  <option value="0.5">0.5</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <?php
			if($dia5=="S&aacute;bado") { echo '<option value="9">9</option>'; echo '<option value="10">10</option>'; } 
			if($dia5=="Domingo") echo '<option value="9">9</option>';
			if($coordinacion=="TRANSMISION")
			{
			?>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <?php
			}
			?>
                </select>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">
            <select name="hedp4" style="width:80px">
            <?php
		  	echo '<option value="'.$row[hedp].'" selected>'.$row[hedp].'</option>';
			?>
           	<option value="0">0</option>
			<option value="0.5">0.5</option>
			<?php
			if($horariovar==1) 
			{
			?>
          	<option value="1">1</option>
        	<?php
			}
			?>
			<option value="3.5" >3.5</option>
			<option value="4" >4</option>
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
			if($dia1 !="S&aacute;bado") echo '<option value="8">8</option>';
			echo '<option value="12">12</option>';
			}
		?>
                </select>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">
                <select name="trcd4" style="width:80px">
            <?php
			echo '<option value="'.$row[trcd].'" selected>'.$row[trcd].'</option>';
			?>
			      <option value="0" >0</option>
                  <option value="0.5">0.5</option>
                  <option value="1">1</option>
            <?php
			if($horariovar==1) echo '<option value="1.5">1 1/2</option>';
			?>
                </select>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">
                <?php
switch($horariovar)
	{
	case 1:
	?>
                <select name="bonocturno4" style="width:80px">
				<?php
			  	echo '<option value="'.$row[bonocturno].'" selected>'.$row[bonocturno].'</option>';
			  	?>
                  <option value="0">0</option>
                  <option value="3.5">3.5</option>
                  <option value="7">7</option>
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
          </tr>
          <tr>
            <td><div align="center">
                <select name="hen4" style="width:80px">
				<?php
				echo '<option value="'.$row[hen].'" selected>'.$row[hen].'</option>';
				?>
                  <option value="0">0</option>
                  <option value="0.5">0.5</option>
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
          </tr>
          <tr>
            <td><div align="center">
            <select name="henp4" style="width:80px">
			<?php
			echo '<option value="'.$row[henp].'" selected>'.$row[henp].'</option>';
			?>
            <option value="0">0</option>
			<?php
			if($horariovar==1)
			{
			echo '<option value="0.5">0.5</option>';
			echo '<option value="1">1</option>';
			}
			?>
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
            </select>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">
                <select name="trcn4" style="width:80px">
				<?php
			echo '<option value="'.$row[trcn].'" selected>'.$row[trcn].'</option>';
			?>
                  <option value="0">0</option>
                  <option value="0.5">0.5</option>
                </select>
            </div></td>
          </tr>
          <tr>
            <td><div align="center"><span class="Estilo103">
              <?php
		   echo '<input name="km4" type="text" id="km4" value='.$row[km].' size="9" maxlength="4" onKeyPress="mis_datos()">';
		   ?> <input type="checkbox" name="vehiculo_propio4" value="on">
            </span><span class="Estilo162">&iquest;Vehiculo Propio? </span>
		   </div></td>
          </tr>
          <tr>
            <td><div align="center"><span class="Estilo103" style="width:80px">
			<?php
			if($manejo=="SI")
			{
			?>
			<select name="mn4" style="width:80px">
			<?php
			$manbd=$row[manejo]/2;
		   	echo '<option value="'.$manbd.'" selected>'.$row[manejo].'</option>';
			?>
           		<option value="0">0</option>
           		<option value="1">2</option>
            	<option value="2">4</option>
				<option value="3">6</option>
			</select>
			<?php
			}else{
			?>
			<input name="mn4" type="text" value="0" readonly="readonly" size="9">
			<?php
			}
			?>
            </span></div>			</td></tr>
          <tr>
            <td><div align="center">
                <select name="ctc4" style="width:80px">
                  <?php
			echo '<option value="'.$row[ctc].'" selected>'.$row[ctc].'</option>';
			?>
                  <option value="0" >0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">
                <select name="ctl4" style="width:80px">
                  <?php
			echo '<option value="'.$row[ctl].'" selected>'.$row[ctl].'</option>';
			?>
                  <option value="0" >0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">
                <select name="ctc7mo4" style="width:80px">
                  <?php
			echo '<option value="'.$row[ctc7mo].'" selected>'.$row[ctc7mo].'</option>';
			?>
                  <option value="0" >0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">
                <select name="ctl7mo4" style="width:80px">
             <?php
			echo '<option value="'.$row[ctl7mo].'" selected>'.$row[ctl7mo].'</option>';
			?>
                  <option value="0" >0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
            </div></td>
          </tr>
          <tr>
            <td><div align="center"><span class="Estilo103">
                <select name="movilizacion4" style="width:80px">
				<?php
				echo '<option value="'.$row[movilizacion].'" >'.$row[movilizacion].'</option>';
				?>
                  <option value="0" >0</option>
                  <option value="2.5">2.5</option>
                  <option value="5">5</option>
                  <option value="10">10</option>
                </select>
            </span></div></td>
          </tr>
          <tr>
            <td><div align="center" class="Estilo103">
                <label>
			<?php
			switch($horariovar)
			{
			case 1:
			?>
                <select name="clave2214" style="width:80px">
				<?php
				echo '<option value="'.$row[clave221].'" >'.$row[clave221].'</option>';
				?>
                  <option value="0" >0</option>
                  <option value="8">8</option>
                </select>
                <?php
			break;
			default:
			?>
                <input name="clave2214" type="text" id="clave2214" value="0" readonly="readonly" size="9">
                <?php
			break;
		}
		?>
                </label>
            </div></td>
          </tr>
          <tr>
            <td><div align="center" class="Estilo103">
                <label>
                <?php
switch($jef)
	{
	case "LINEAS ENERGIZADAS":
	?>
                <select name="clave2774" style="width:80px">
				<?php
				echo '<option value="'.$row[clave277].'" selected>'.$row[clave277].'</option>';
				?>
                  <option value="0" >NO</option>
                  <option value="1">SI</option>
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
          </tr>
          <tr>
            <td><div align="center"><span class="Estilo103">
        <?php
		echo '<textarea name="lugar4" cols="10" rows="2" id="lugar4" style="width:80px" onKeyUp="this.value = this.value.toUpperCase();">'.$row[lugar].'</textarea>';
		?>
            </span></div></td>
          </tr>
          <tr>
            <td><div align="center"><span class="Estilo103">
        <?php
		echo '<textarea name="observacion4" cols="10" rows="2" id="observacion4" style="width:80px" onKeyUp="this.value = this.value.toUpperCase();">'.$row[observacion].'</textarea>';
		?>
            </span></div></td>
          </tr>

  <td>
   <div align="center"><span class="Estilo103" style="width:80px">
              <select name="tipod4" style="width:80px">
              <?php
			    switch($row[tipodia])
				{
				case 1:
		   		echo '<option value=1 selected>NORMAL</option>';
				break;
				case 2:
				echo '<option value=2 selected>6TO D&Iacute;A</option>';
				break;
				case 3:
				echo '<option value=3 selected>7MO D&Iacute;A</option>';
				break;
				case 4:
				echo '<option value=4 selected>LIBRE</option>';
				break;
				case 5:
				echo '<option value=5 selected>AUSENTE</option>';
				break;
				case 6:
				echo '<option value=6 selected>REPOSO</option>';
				break;
				case 7:
				echo '<option value=7 selected>COMPENS.</option>';
				break;
				case 8:
		   		echo '<option value=8 selected>VACACI&Oacute;N</option>';
				break;
				case 9:
		   		echo '<option value=9 selected>PERM.N.R.</option>';
				break;
				case 10:
		   		echo '<option value=10 selected>PERM.REM.</option>';
				break;
				case 11:
				echo '<option value=11 selected>7MO.LIBRE</option>';
				break;
				case 12:
		   		echo '<option value=11 selected>PERM.SND.</option>';
				break;
				}
				?>
                <option value="1">NORMAL</option>
                <option value="2">6TO D&Iacute;A</option>
                <option value="3">7MO D&Iacute;A</option>
				<option value="11">7MO.LIBRE</option>
                <option value="4">LIBRE</option>
                <option value="5">AUSENTE</option>
                <option value="6">REPOSO</option>
                <option value="7">COMPENS.</option>
                <option value="8">VACACI&Oacute;N</option>
				<option value="9">PERM.N.R.</option>
				<option value="10">PERM.REM.</option>
				
				<option value="12">PERM.SND.</option>
              </select>
            </span></div>
              <?php
	}
	limpiarvar();
	?>	</td>
  </tr>
        </table></td>
        <td width="99"><table width="102" border="1">
          <tr>
            <td width="92"><div align="center">
                <?php
echo $fecha6=suma_fechas($fecha_ini, 5)."</br>";

$day6=substr($fecha6,0,2);
$month6=substr($fecha6,3,2);
$year6=substr($fecha6,6,4);

$dia6_semana=date ("l", mktime(0, 0, 0,$month6, $day6, $year6));

if ($dia6_semana=="Monday") echo $dia6="Lunes";
if ($dia6_semana=="Tuesday") echo $dia6="Martes";
if ($dia6_semana=="Wednesday") echo $dia6="Mi&eacute;rcoles";
if ($dia6_semana=="Thursday") echo $dia6="Jueves";
if ($dia6_semana=="Friday") echo $dia6="Viernes";
if ($dia6_semana=="Saturday") echo $dia6="S&aacute;bado";
if ($dia6_semana=="Sunday") echo $dia6="Domingo";

$fechadia6=$year6."-".$month6."-".$day6;
echo '<input name="fechadia6" type="hidden" value="'.$fechadia6.'">';
// Datos a modificar fecha d&iacute;a #6
$sQuery6=mysql_query("SELECT * FROM jornada WHERE ci = '$ci' and fecha = '$fechadia6'");
while ($row=mysql_fetch_array($sQuery6))
{
?></div></td>
          </tr>
          <tr>
            <td><div align="center">
                <div align="center">
            <select name="hd5" style="width:80px">
                <?php
				echo '<option value="'.$row[hd].'" selected>'.$row[hd].'</option>';
				?>
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
							if($jef=="LINEAS ENERGIZADAS" or $coordinacion=="DISTRIBUCION MIRANDA")
								{
								echo '<option value="0">0</option>';
								}else{
                				echo '<option value="4">4</option>';
								}
						break;
						
						case "Domingo":
							?>
                			<option value="5">5</option>
                			<option value="8">8</option>
							<?php
						break;
						
						default:
							if($jef=="LINEAS ENERGIZADAS" or $coordinacion=="DISTRIBUCION MIRANDA")
								{
								switch($dia2)
									{
									case "Viernes":
										?>
                						<option value="8" >8</option>
                						<?php
									break;
									
									default:
										?>
                						<option value="9" >9</option>
                						<?php
									break;
									}
								}else{
									?>
                					<option value="8" >8</option>
               						<?php
								}
						break;
						}
					}
				?>
                  </select>
                </div>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">
                <select name="feriado5" style="width:80px">
				<?php
				echo '<option value="'.$row[feriado].'" selected>'.$row[feriado].'</option>';
				?>
                  <option value="0" >0</option>
                  <option value="0.5">0.5</option>
                  <option value="1">1</option>
                </select>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">
                <select name="hed5" style="width:80px">
				<?php
				echo '<option value="'.$row[hed].'" selected>'.$row[hed].'</option>';
			  	?>
                  <option value="0">0</option>
				  <option value="0.5">0.5</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <?php
			if($dia6=="S&aacute;bado") { echo '<option value="9">9</option>'; echo '<option value="10">10</option>'; } 
			if($dia6=="Domingo") echo '<option value="9">9</option>';
			if($coordinacion=="TRANSMISION")
			{
			?>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <?php
			}
			?>
                </select>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">
                <select name="hedp5" style="width:80px">
            <?php
		  	echo '<option value="'.$row[hedp].'" selected>'.$row[hedp].'</option>';
			?>
           	<option value="0">0</option>
			<option value="0.5">0.5</option>
			<?php
			if($horariovar==1) 
			{
			?>
          	<option value="1">1</option>
        	<?php
			}
			?>
			<option value="3.5" >3.5</option>
			<option value="4" >4</option>
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
			if($dia1 !="S&aacute;bado") echo '<option value="8">8</option>';
			echo '<option value="12">12</option>';
			}
		?>
                </select>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">
                <select name="trcd5" style="width:80px">
          	<?php
			echo '<option value="'.$row[trcd].'" selected>'.$row[trcd].'</option>';
			?>
		          <option value="0" >0</option>
                  <option value="0.5">0.5</option>
                  <option value="1">1</option>
			<?php
			if($horariovar==1) echo '<option value="1.5">1 1/2</option>';
			?>
                </select>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">
                <?php
switch($horariovar)
	{
	case 1:
	?>
                <select name="bonocturno5" style="width:80px">
				<?php
			  	echo '<option value="'.$row[bonocturno].'" selected>'.$row[bonocturno].'</option>';
			  	?>
                  <option value="0">0</option>
                  <option value="3.5">3.5</option>
                  <option value="7">7</option>
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
          </tr>
          <tr>
            <td><div align="center">
                <select name="hen5" style="width:80px">
				<?php
				echo '<option value="'.$row[hen].'" selected>'.$row[hen].'</option>';
				?>
                  <option value="0">0</option>
                  <option value="0.5">0.5</option>
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
          </tr>
          <tr>
            <td><div align="center">
           	<select name="henp5" style="width:80px">
			<?php
			echo '<option value="'.$row[henp].'" selected>'.$row[henp].'</option>';
			?>
            <option value="0">0</option>
			<?php
			if($horariovar==1)
			{
			echo '<option value="0.5">0.5</option>';
			echo '<option value="1">1</option>';
			}
			?>
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
			</select>
              </div>            </tr>
          <tr>
            <td><div align="center">
                <select name="trcn5" style="width:80px">
				<?php
			echo '<option value="'.$row[trcn].'" selected>'.$row[trcn].'</option>';
			?>
                  <option value="0">0</option>
                  <option value="0.5">0.5</option>
                </select>
            </div></td>
          </tr>
          <tr>
            <td><div align="center"><span class="Estilo103">
              <?php
		   echo '<input name="km5" type="text" id="km5" value='.$row[km].' size="9" maxlength="4" onKeyPress="mis_datos()">';
		   ?> <input type="checkbox" name="vehiculo_propio5" value="on">
            </span><span class="Estilo162">&iquest;Vehiculo Propio? </span>
		   </div></td>
          </tr>
          <tr>
            <td><div align="center"><span class="Estilo103" style="width:80px">
			<?php
			if($manejo=="SI")
			{
			?>
			<select name="mn5" style="width:80px">
			<?php
			$manbd=$row[manejo]/2;
		   	echo '<option value="'.$manbd.'" selected>'.$row[manejo].'</option>';
			?>
           		<option value="0">0</option>
           		<option value="1">2</option>
            	<option value="2">4</option>
				<option value="3">6</option>
			</select>
			<?php
			}else{
			?>
			<input name="mn5" type="text" value="0" readonly="readonly" size="9">
			<?php
			}
			?>
            </span></div>			</td></tr>
          <tr>
            <td><div align="center">
                <select name="ctc5" style="width:80px">
                  <?php
			echo '<option value="'.$row[ctc].'" selected>'.$row[ctc].'</option>';
			?>
                  <option value="0" >0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">
                <select name="ctl5" style="width:80px">
                  <?php
			echo '<option value="'.$row[ctl].'" selected>'.$row[ctl].'</option>';
			?>
                  <option value="0" >0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">
                <select name="ctc7mo5" style="width:80px">
                  <?php
			echo '<option value="'.$row[ctc7mo].'" selected>'.$row[ctc7mo].'</option>';
			?>
                  <option value="0" >0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">
                <select name="ctl7mo5" style="width:80px">
            <?php
			echo '<option value="'.$row[ctl7mo].'" selected>'.$row[ctl7mo].'</option>';
			?>
                  <option value="0" >0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
            </div></td>
          </tr>
          <tr>
            <td><div align="center"><span class="Estilo103">
                <select name="movilizacion5" style="width:80px">
				<?php
				echo '<option value="'.$row[movilizacion].'" >'.$row[movilizacion].'</option>';
				?>
                  <option value="0" >0</option>
                  <option value="2.5">2.5</option>
                  <option value="5">5</option>
                  <option value="10">10</option>
                </select>
            </span></div></td>
          </tr>
          <tr>
            <td><div align="center" class="Estilo103">
                <label>
			<?php
			switch($horariovar)
			{
			case 1:
			?>
                <select name="clave2215" style="width:80px">
				<?php
				echo '<option value="'.$row[clave221].'" >'.$row[clave221].'</option>';
				?>
                  <option value="0" >0</option>
                  <option value="8">8</option>
                </select>
                <?php
			break;
			default:
			?>
                <input name="clave2215" type="text" id="clave2215" value="0" readonly="readonly" size="9">
                <?php
			break;
		}
		?>
                </label>
            </div></td>
          </tr>
          <tr>
            <td><div align="center" class="Estilo103">
                <label>
                <?php
switch($jef)
	{
	case "LINEAS ENERGIZADAS":
	?>
                <select name="clave2775" style="width:80px">
				<?php
				echo '<option value="'.$row[clave277].'" selected>'.$row[clave277].'</option>';
				?>
                  <option value="0" >NO</option>
                  <option value="1">SI</option>
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
          </tr>
          <tr>
            <td><div align="center"><span class="Estilo103">
		<?php
		echo '<textarea name="lugar5" cols="10" rows="2" id="lugar5" style="width:80px" onKeyUp="this.value = this.value.toUpperCase();">'.$row[lugar].'</textarea>';
		?>
            </span></div></td>
          </tr>
          <tr>
            <td><div align="center"><span class="Estilo103">
        <?php
		echo '<textarea name="observacion5" cols="10" rows="2" id="observacion5" style="width:80px" onKeyUp="this.value = this.value.toUpperCase();">'.$row[observacion].'</textarea>';
		?>
            </span></div></td>
          </tr>
  <td>
<div align="center"><span class="Estilo103" style="width:80px">
  		<select name="tipod5" style="width:80px">
   		<?php	
			switch($row[tipodia])
				{
				case 1:
		   		echo '<option value=1 selected>NORMAL</option>';
				break;
				case 2:
				echo '<option value=2 selected>6TO D&Iacute;A</option>';
				break;
				case 3:
				echo '<option value=3 selected>7MO D&Iacute;A</option>';
				break;
				case 4:
				echo '<option value=4 selected>LIBRE</option>';
				break;
				case 5:
				echo '<option value=5 selected>AUSENTE</option>';
				break;
				case 6:
				echo '<option value=6 selected>REPOSO</option>';
				break;
				case 7:
				echo '<option value=7 selected>COMPENS.</option>';
				break;
				case 8:
		   		echo '<option value=8 selected>VACACI&Oacute;N</option>';
				break;
				case 9:
		   		echo '<option value=9 selected>PERM.N.R.</option>';
				break;
				case 10:
		   		echo '<option value=10 selected>PERM.REM.</option>';
				break;
				case 11:
				echo '<option value=11 selected>7MO.LIBRE</option>';
				break;
				case 12:
		   		echo '<option value=11 selected>PERM.SND.</option>';
				break;
				}
				?>
                <option value="1">NORMAL</option>
                <option value="2">6TO D&Iacute;A</option>
                <option value="3">7MO D&Iacute;A</option>
				<option value="11">7MO.LIBRE</option>
                <option value="4">LIBRE</option>
                <option value="5">AUSENTE</option>
                <option value="6">REPOSO</option>
                <option value="7">COMPENS.</option>
                <option value="8">VACACI&Oacute;N</option>
				<option value="9">PERM.N.R.</option>
				<option value="10">PERM.REM.</option>
				<option value="12">PERM.SND.</option>
  				</select>
				</span></div>
            	<?php
				}
				limpiarvar();
				?>	</td>
  </tr>
        </table></td>
        <td width="100"><table width="101" border="1">
          <tr>
            <td width="91"><div align="center">
                <?php
echo $fecha7=suma_fechas($fecha_ini, 6)."</br>";

$day7=substr($fecha7,0,2);
$month7=substr($fecha7,3,2);
$year7=substr($fecha7,6,4);

$dia7_semana=date ("l", mktime(0, 0, 0,$month7, $day7, $year7));

if ($dia7_semana=="Monday") echo $dia7="Lunes";
if ($dia7_semana=="Tuesday") echo $dia7="Martes";
if ($dia7_semana=="Wednesday") echo $dia7="Mi&eacute;rcoles";
if ($dia7_semana=="Thursday") echo $dia7="Jueves";
if ($dia7_semana=="Friday") echo $dia7="Viernes";
if ($dia7_semana=="Saturday") echo $dia7="S&aacute;bado";
if ($dia7_semana=="Sunday") echo $dia7="Domingo";

$fechadia7=$year7."-".$month7."-".$day7;
echo '<input name="fechadia7" type="hidden" value="'.$fechadia7.'">';
// Datos a modificar fecha d&iacute;a #7
$sQuery7=mysql_query("SELECT * FROM jornada WHERE ci = '$ci' and fecha = '$fechadia7'");
while ($row=mysql_fetch_array($sQuery7))
{
?>
</div></td>
          </tr>
          <tr>
            <td><div align="center">
                <div align="center">
                  <select name="hd6" style="width:80px">
                    <?php
				echo '<option value="'.$row[hd].'" selected>'.$row[hd].'</option>';
				?>
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
							if($jef=="LINEAS ENERGIZADAS" or $coordinacion=="DISTRIBUCION MIRANDA")
								{
								echo '<option value="0">0</option>';
								}else{
                				echo '<option value="4">4</option>';
								}
						break;
						
						case "Domingo":
							?>
                    <option value="5">5</option>
                    <option value="8">8</option>
                    <?php
						break;
						
						default:
							if($jef=="LINEAS ENERGIZADAS" or $coordinacion=="DISTRIBUCION MIRANDA")
								{
								switch($dia7)
									{
									case "Viernes":
										?>
										<option value="8">8</option>
										<?php
									break;
									
									default:
										?>
										<option value="9">9</option>
										<?php
									break;
									}
								}else{
									?>
									<option value="8" >8</option>
									<?php
								}
						break;
						}
					}
				?>
                  </select>
                </div>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">
                <select name="feriado6" style="width:80px">
				<?php
				echo '<option value="'.$row[feriado].'" selected>'.$row[feriado].'</option>';
				?>
                  <option value="0" >0</option>
                  <option value="0.5">0.5</option>
                  <option value="1">1</option>
                </select>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">
                <select name="hed6" style="width:80px">
				<?php
				echo '<option value="'.$row[hed].'" selected>'.$row[hed].'</option>';
				?>
				<option value="0">0</option>
				<option value="0.5">0.5</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<?php
				if($dia7=="S&aacute;bado") { echo '<option value="9">9</option>'; echo '<option value="10">10</option>'; } 
				if($dia7=="Domingo") echo '<option value="9">9</option>';
				if($coordinacion=="TRANSMISION")
				{
				?>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<?php
				}
				?>
                </select>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">
            <select name="hedp6" style="width:80px">
            <?php
		  	echo '<option value="'.$row[hedp].'" selected>'.$row[hedp].'</option>';
			?>
           	<option value="0">0</option>
			<option value="0.5">0.5</option>
			<?php
			if($horariovar==1) 
			{
			?>
          	<option value="1">1</option>
        	<?php
			}
			?>
			<option value="3.5" >3.5</option>
			<option value="4" >4</option>
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
			if($dia1 !="S&aacute;bado") echo '<option value="8">8</option>';
			echo '<option value="12">12</option>';
			}
		?>
                </select>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">
                <select name="trcd6" style="width:80px">
           	<?php
			echo '<option value="'.$row[trcd].'" selected>'.$row[trcd].'</option>';
			?>
		          <option value="0" >0</option>
                  <option value="0.5">0.5</option>
                  <option value="1">1</option>
            <?php
			if($horariovar==1) echo '<option value="1.5">1 1/2</option>';
			?>
                </select>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">
                <?php
switch($horariovar)
	{
	case 1:
	?>
                <select name="bonocturno6" style="width:80px">
				<?php
			  	echo '<option value="'.$row[bonocturno].'" selected>'.$row[bonocturno].'</option>';
			  	?>
                  <option value="0">0</option>
                  <option value="3.5">3.5</option>
                  <option value="7">7</option>
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
            <td><div align="center">
                <select name="hen6" style="width:80px">
				<?php
				echo '<option value="'.$row[hen].'" selected>'.$row[hen].'</option>';
				?>
                  <option value="0">0</option>
                  <option value="0.5">0.5</option>
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
          </tr>
          <tr>
            <td><div align="center">
			<select name="henp6" style="width:80px">
			<?php
			echo '<option value="'.$row[henp].'" selected>'.$row[henp].'</option>';
			?>
            <option value="0">0</option>
			<?php
			if($horariovar==1)
			{
			echo '<option value="0.5">0.5</option>';
			echo '<option value="1">1</option>';
			}
			?>
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
			</select>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">
                <select name="trcn6" style="width:80px">
				<?php
			echo '<option value="'.$row[trcn].'" selected>'.$row[trcn].'</option>';
			?>
                  <option value="0">0</option>
                  <option value="0.5">0.5</option>
                </select>
            </div></td>
          </tr>
          <tr>
            <td><div align="center"><span class="Estilo103">
              <?php
		   echo '<input name="km6" type="text" id="km6" value='.$row[km].' size="9" maxlength="4" onKeyPress="mis_datos()">';
		   ?> <input type="checkbox" name="vehiculo_propio6" value="on">
            </span><span class="Estilo162">&iquest;Vehiculo Propio? </span>
		   </div></td>
          </tr>
          <tr>
            <td><div align="center"><span class="Estilo103" style="width:80px">
			<?php
			if($manejo=="SI")
			{
			?>
			<select name="mn6" style="width:80px">
			<?php
			$manbd=$row[manejo]/2;
		   	echo '<option value="'.$manbd.'" selected>'.$row[manejo].'</option>';
			?>
           		<option value="0">0</option>
           		<option value="1">2</option>
            	<option value="2">4</option>
				<option value="3">6</option>
			</select>
			<?php
			}else{
			?>
			<input name="mn6" type="text" value="0" readonly="readonly" size="9">
			<?php
			}
			?>
            </span></div>			</td></tr>
          <tr>
            <td><div align="center">
                <select name="ctc6" style="width:80px">
                  <?php
			echo '<option value="'.$row[ctc].'" selected>'.$row[ctc].'</option>';
			?>
                  <option value="0" >0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">
                <select name="ctl6" style="width:80px">
                  <?php
			echo '<option value="'.$row[ctl].'" selected>'.$row[ctl].'</option>';
			?>
                  <option value="0" >0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">
                <select name="ctc7mo6" style="width:80px">
                  <?php
			echo '<option value="'.$row[ctc7mo].'" selected>'.$row[ctc7mo].'</option>';
			?>
                  <option value="0" >0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">
            <select name="ctl7mo0" style="width:80px">
           <?php
			echo '<option value="'.$row[ctl7mo].'" selected>'.$row[ctl7mo].'</option>';
			?>
                  <option value="0" >0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
            </div></td>
          </tr>
          <tr>
            <td><div align="center"><span class="Estilo103">
                <select name="movilizacion6" style="width:80px">
				<?php
				echo '<option value="'.$row[movilizacion].'" >'.$row[movilizacion].'</option>';
				?>
                  <option value="0" >0</option>
                  <option value="2.5">2.5</option>
                  <option value="5">5</option>
                  <option value="10">10</option>
                </select>
            </span></div></td>
          </tr>
          <tr>
            <td><div align="center" class="Estilo103">
                <label>
            <?php
			switch($horariovar)
			{
			case 1:
				?>
                <select name="clave2216" style="width:80px">
				<?php
				echo '<option value="'.$row[clave221].'" >'.$row[clave221].'</option>';
				?>
                <option value="0" >0</option>
                <option value="8">8</option>
                </select>
                <?php
			break;
			default:
				?>
                <input name="clave2216" type="text" id="clave2216" value="0" readonly="readonly" size="9">
                <?php
			break;
			}
			?>
                  </label>
            </div></td>
          </tr>
          <tr>
            <td><div align="center" class="Estilo103">
                <label>
			<?php
			switch($jef)
			{
			case "LINEAS ENERGIZADAS":
				?>
				<select name="clave2776" style="width:80px">
				<?php
				echo '<option value="'.$row[clave277].'" selected>'.$row[clave277].'</option>';
				?>
				<option value="0" >NO</option>
				<option value="1">SI</option>
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
            <td><div align="center"><span class="Estilo103">
        <?php
		echo '<textarea name="lugar6" cols="10" rows="2" id="lugar6" style="width:80px" onKeyUp="this.value = this.value.toUpperCase();">'.$row[lugar].'</textarea>';
		?>
            </span></div></td>
          </tr>
          <tr>
            <td><div align="center"><span class="Estilo103">
        <?php
		echo '<textarea name="observacion6" cols="10" rows="2" id="observacion6" style="width:80px" onKeyUp="this.value = this.value.toUpperCase();">'.$row[observacion].'</textarea>';
		?>
            </span></div></td>
          </tr>

	<td>
    <div align="center"><span class="Estilo103" style="width:80px">
              <select name="tipod6" style="width:80px">
              <?php
			   switch($row[tipodia])
				{
				case 1:
		   		echo '<option value=1 selected>NORMAL</option>';
				break;
				case 2:
				echo '<option value=2 selected>6TO D&Iacute;A</option>';
				break;
				case 3:
				echo '<option value=3 selected>7MO D&Iacute;A</option>';
				break;
				case 4:
				echo '<option value=4 selected>LIBRE</option>';
				break;
				case 5:
				echo '<option value=5 selected>AUSENTE</option>';
				break;
				case 6:
				echo '<option value=6 selected>REPOSO</option>';
				break;
				case 7:
				echo '<option value=7 selected>COMPENS.</option>';
				break;
				case 8:
		   		echo '<option value=8 selected>VACACI&Oacute;N</option>';
				break;
				case 9:
		   		echo '<option value=9 selected>PERM.N.R.</option>';
				break;
				case 10:
		   		echo '<option value=10 selected>PERM.REM.</option>';
				break;
				case 11:
				echo '<option value=11 selected>7MO.LIBRE</option>';
				break;
				case 12:
		   		echo '<option value=11 selected>PERM.SND.</option>';
				break;
				}
				?>
                <option value="1">NORMAL</option>
                <option value="2">6TO D&Iacute;A</option>
                <option value="3">7MO D&Iacute;A</option>
				<option value="11">7MO.LIBRE</option>
                <option value="4">LIBRE</option>
                <option value="5">AUSENTE</option>
                <option value="6">REPOSO</option>
                <option value="7">COMPENS.</option>
                <option value="8">VACACI&Oacute;N</option>
				<option value="9">PERM.N.R.</option>
				<option value="10">PERM.REM.</option>
				<option value="12">PERM.SND.</option>
              </select>
            </span></div>
              <?php
	}
	?>	</td>
  </tr>
        </table></td>
      </tr>
    </table>
	<p>&nbsp;</p>
	<table width="356" height="81" border="0">
      <tr>
        <td width="354"><div align="center">
		<p align="center" class="t12b Estilo144"><span class="t12g Estilo151">Click en [Enviar] cuando la modificaci&Oacute;N est&Eacute; completa</span>          </p>
		
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
    <p>&nbsp;</p>
    <table width="285" border="0">
      <tr>
        <td width="275"><div align="center"><font size="2"><span class="t12g Estilo151">&iquest;Desea </span><span class="t12g Estilo151"> MODIFICAR otra jornada?</span></font><font color="#FF0000" size="2">
          <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="103" height="24">
            <param name="movie" value="button41.swf">
            <param name="quality" value="high">
            <embed src="button41.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="103" height="24" ></embed>
          </object>
          </a></font></div></td>
      </tr>
    </table>
    <font color="#FF0000" size="2"><a title="Ayuda sobre el manejo del SARTS" href="#"></a></font>
</form>
<?php
}
?>
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
<?php
}
?>