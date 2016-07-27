<?php
include ("security_system.php");
ini_set('error_reporting',0);
?>
<HTML>
<HEAD>
<TITLE>Incluir Jornada. Sistema ARTS Online</TITLE>

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
.Estilo104 {
	color: #2770DB;
	font-family: Georgia, "Times New Roman", Times, serif;
}
.Estilo110 {
	color: #FFFF00;
	font-weight: bold;
}
.Estilo138 {font-size: 9px; color: #FFFF00; font-weight: bold; }
.Estilo139 {color: #0033FF}
.Estilo4 {	color: #0033FF;
	font-size: 18px;
}
.Estilo143 {color: #0000FF}
.Estilo144 {color: #000000}
-->
</style>

<script language="JavaScript">
function pregunta_enviar(){
   if (confirm('¿Estas seguro de enviar este formulario?')){
      document.mod_jornada_bd.php.submit()
   }
}
</script>

</HEAD>

<BODY BGCOLOR=#FFFFFF background="images/bgb.gif" vlink="#0000FF" LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0 tracingsrc="images/-downdis.gif" tracingopacity="100" oncontextmenu="return false">
<td colspan="3" valign="middle"><div align="center"> 
<table width="778" border="0" cellspacing="0" cellpadding="0">
  <tr>
<td align="right" background="images/index_01.gif"><img src="images/index_03.gif" width=59 height=34 alt=""><a href="inicio.html"><img src="images/index_ini.gif" alt="" width=82 height=34 border="0"></a><img src="images/index_faq.GIF" width=82 height=34 alt=""><img src="images/index_link.gif" width=89 height=34 alt=""><a href="finalizar_sesion.php"><img src="images/index_sarts.gif" alt="" width=71 height=34 border="0"></a><img src="images/index_contac.GIF" width=85 height=34 alt=""></td>
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
<form name="form1" method="post" action="mod_jornada_bd.php">
 <div align="center">
    <table width="778" border="2">
      <tr>
        <td width="82" height="26" bordercolor="#0000FF" bgcolor="#2770DB"><span class="Estilo101">REGION</span></td>
        <td width="177" bordercolor="#0000FF" bgcolor="#2770DB"><span class="Estilo102">
<?php
// Conexion el servidor
include ("includes/bdkey.php");
$ci=$_POST['ci'];
$result = mysql_query("select * from traba where ci='$ci' and condicion='1'");
while ($row=mysql_fetch_array($result))
	{
	echo '<input name="regionm" size="25" maxlength="25" type="text" readonly="readonly" value="'.$row[region].'">';
?>
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
    <table width="802" border="2">
      <tr>
        <td width="73" bordercolor="#0000FF" bgcolor="#2770DB"><span class="Estilo101">APELLIDOS</span></td>
        <td width="308" bordercolor="#0000FF" bgcolor="#2770DB"><label><span class="Estilo102">
        <?php
		  echo '<input name="apellidosm" size="25" maxlength="25" type="text" readonly="readonly" value="'.$row[apellidos].'">';
		  ?>
        </span></label></td>
        <td width="141" bordercolor="#0000FF" bgcolor="#2770DB"><span class="Estilo101">C&Eacute;DULA DE IDENTIDAD</span></td>
        <td width="232" bordercolor="#0000FF" bgcolor="#2770DB"><span class="Estilo102">
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
  <h4 align="center" class="Estilo104">MODIFICAR JORNADA DEL D&Iacute;A 
  <?php
  $fecha=$_POST['fechaoriginal'];
  echo $fecha;
  ?>
  </h4>
  <table width="779" border="1">
    <tr>
      <td height="94" bgcolor="#2770DB"><p><span class="Estilo110">CLASIFICACI&Oacute;N DEL D&Iacute;A:</span>
          <table width="770" border="0">
                <tr>
                  <td width="91"><div align="center">
                    <input name="tipodia" type="radio" onClick="document.getElementById('tablanormal').style.visibility = 'visible'" value="1" checked>
                  <span class="t14w">NORMAL</span></div></td>
                  <td width="117"><div align="center"><span class="t14w">
                    <input name="tipodia" type="radio" value="2" onClick="document.getElementById('tablanormal').style.visibility = 'visible'">
                  6TO D&iacute;A&nbsp;</span></div></td>
                  <td width="111"><div align="center"><span class="t14w">
                    <input name="tipodia" type="radio" value="3" onClick="document.getElementById('tablanormal').style.visibility = 'visible'">
                  7MO D&Iacute;A</span></div></td>
                  <td width="110"><div align="center"><span class="t14w">
                    <input name="tipodia" type="radio" value="11" onClick="document.getElementById('tablanormal').style.visibility = 'visible'">
                  7MO LIBRE </span></div></td>
                  <td width="108"><div align="center"><span class="t14w">
                    <input name="tipodia" type="radio" value="4" onClick="document.getElementById('tablanormal').style.visibility = 'hidden'">
                  L I B R E&nbsp;</span></div></td>
                  <td width="101"><div align="center"><span class="t14w">
                    <input name="tipodia" type="radio" value="5" onClick="document.getElementById('tablanormal').style.visibility = 'hidden'">
                  AUSENTE</span></div></td>
                  <td width="102"><span class="t14w">
                    <input name="tipodia" type="radio" value="7" onClick="document.getElementById('tablanormal').style.visibility = 'hidden'"> 
                  COMPENS.</span></td>
              </tr>
                <tr>
                  <td><div align="center"><span class="t14w">
                    <input name="tipodia" type="radio" value="6" onClick="document.getElementById('tablanormal').style.visibility = 'hidden'">
REPOSO</span></div></td>
                  <td><div align="center"><span class="t14w">
                    <input name="tipodia" type="radio" value="8" onClick="document.getElementById('tablanormal').style.visibility = 'hidden'">
VACACI&Oacute;N&nbsp; </span></div></td>
                  <td><div align="center"><span class="t14w">
                    <input name="tipodia" type="radio" value="9" onClick="document.getElementById('tablanormal').style.visibility = 'hidden'">
PERM.N.R. </span></div></td>
                  <td><div align="center"><span class="t14w">
                    <input name="tipodia" type="radio" value="10">
PERM.REM.</span></div></td>
                  <td><div align="center"><span class="t14w">
                    <input name="tipodia" type="radio" value="12">
PERM.SND.</span></div></td>
                  <td><div align="center"></div></td>
                  <td>&nbsp;</td>
                </tr>
              </table></td>
    </tr>
  </table>
  <div align="center"><table width="779" height="120" border="1">
      <tr>
		  <td width="90" bgcolor="#2770DB" class="t12b"><div align="center" class="Estilo102 Estilo93"><strong>D&Iacute;A</strong></div></td>
		  <td width="56" bgcolor="#2770DB" class="t12b"><div align="center" class="Estilo102 Estilo93"><strong>SALARIO 004</strong></div></td>
		  <td width="86" bgcolor="#2770DB" class="t12b"><div align="center" class="Estilo102 Estilo93"><strong>D&Iacute;A FERIADOS TRABAJADO  087</strong></div></td>
		  <td width="67" bgcolor="#2770DB" class="t12b"><div align="center" class="Estilo102 Estilo93"><strong>H.E. DIURNAS 052</strong></div></td>
		  <td width="102" bgcolor="#2770DB" class="t12b"><div align="center" class="Estilo102 Estilo93"><strong>H.E. DIURNAS GUARDIAS PROGRAMA. 052</strong></div></td>
		  <td width="68" bgcolor="#2770DB" class="t12b"><div align="center" class="Estilo102 Estilo93"><strong>TIEMPO DE REPOSO COMIDA DIURNO 055</strong></div></td>
		  <td width="76" bgcolor="#2770DB" class="t12b"><div align="center" class="Estilo102 Estilo93"><strong>BONO NOCTURNO 051</strong></div></td>
		  <td width="77" bgcolor="#2770DB" class="t12b"><div align="center" class="Estilo102 Estilo93"><strong>H.E. NOCTURNAS 053</strong></div></td>
		  <td width="95" bgcolor="#2770DB" class="t12b"><div align="center" class="Estilo102 Estilo93"><strong>H.E. NOCTURNAS GUARDIA PROGRAMADA 053</strong></div></td>
          </tr>
         <tr>
        <td width="90" height="35" bordercolor="#0000FF"><div align="left" class="Estilo139">

          <div align="center">
            <?php
$day=substr($fecha,0,2);
$month=substr($fecha,3,2);
$year=substr($fecha,6,4);

$dia_semana=date ("l", mktime(0, 0, 0, $month, $day, $year));
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
        <td width="56" bordercolor="#0000FF">
        	<div align="center">
<?php
			$fecharef=$year."-".$month."-".$day;
			$result2 = mysql_query("select * from jornada where ci='$ci' and fecha='$fecharef'");
			while ($row=mysql_fetch_array($result2))
			{
?>
<select name="hdm">
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
					switch($dia)
						{
						case "Sábado":
							if($jef!="LINEAS ENERGIZADAS" or $gerencia!="TRANSMISION" or $coordinacion!="DISTRIBUCION MIRANDA")
								{
								?>
                				<option value="4" >4</option>
                				<?php
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
        <td width="86" bordercolor="#0000FF">
		  <div align="center">
		    <select name="feriadom">
			<?php
			echo '<option value="'.$row[feriado].'" selected>'.$row[feriado].'</option>';
			?> 
              <option value="0">0</option>
              <option value="0.5">1/2</option>
              <option value="1">1</option>
            </select>
		  </div></td>
        <td width="67" bordercolor="#0000FF">
			<div align="center">
			<?php
			  echo '<select name="hedm">';
			  echo '<option value="'.$row[hed].'" selected>'.$row[hed].'</option>';
			?>
			<option value="0">0</option>
            <option value="0.5">1/2</option>
            <option value="1">1</option>
			<option value="1.5">1 1/2</option>
            <option value="2">2</option>
			<option value="2.5">2 1/2</option>
            <option value="3">3</option>
			<option value="3.5">3 1/2</option>
            <option value="4">4</option>
			<option value="4.5">4 1/2</option>
            <option value="5">5</option>
			<option value="5.5">5 1/2</option>
            <option value="6">6</option>
			<option value="6.5">6 1/2</option>
            <option value="7">7</option>
			<option value="7.5">7 1/2</option>
            <option value="8">8</option>
			<option value="8.5">8 1/2</option>
            <?php
			if($dia=="Sábado")
			{
			echo '<option value="9">9</option>';
			echo '<option value="9.5">9 1/2</option>';
			echo '<option value="10.5">10 1/2</option>';
			} 
			if($dia=="Domingo")
			{
			echo '<option value="9">9</option>';
			echo '<option value="9.5">9 1/2</option>';
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
			?>
			</select>
			</div></td>
        <td width="102" bordercolor="#0000FF">
			<div align="center">
			<?php
			echo '<select name="hedpm">';
			echo '<option value="'.$row[hedp].'" selected>'.$row[hedp].'</option>';
			?>
			<option value="0">0</option>
            <?php
			if($horariovar==1) 
			{
			?>
            <option value="1">1</option>
            <?php
			}
			?>
			<option value="3.5" >3 1/2</option>
            <option value="8.5" >8 1/2</option>
            <?php
			switch($dia)
				{
				case "Sábado":
					?>
            		<option value="8">8</option>
            		<option value="10">10</option>
            		<option value="12">12</option>
            		<option value="14">14</option>
         			<?php
				break;
				
				case "Domingo":
				?>
            	<option value="7">7</option>
            	<?php
				break;
				
				default:
				if($jefaturam=="LINEAS ENERGIZADAS" or $horariovar==1 or $coordinacionm=="DISTRIBUCION MIRANDA") 
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
				if($dia !="Sábado") echo '<option value="8">8</option>';
					}
				?>
			</select>
			</div></td>
        <td width="68" bordercolor="#0000FF">
			<div align="center">
			  <?php
			 echo '<select name="trcdm">';
			 echo '<option value="'.$row[trcd].'" selected>'.$row[trcd].'</option>';
			 echo '<option value="0">0</option>';
			 echo '<option value="0.5">0.5</option>';
			 echo '<option value="1">1</option>';
			 echo '</select>';
			?>
			</div></td>
        <td width="76" bordercolor="#0000FF">
          <div align="center">
            <?php
			echo '<select name="bonocturnom" id="bonocturnom">';
			echo '<option value="'.$row[bonocturno].'" selected>'.$row[bonocturno].'</option>';
			echo '<option value="0">0</option>';
			echo '<option value="3">3</option>';
            echo '<option value="3.5">3.5</option>';
			echo '<option value="7">7</option>';
			echo '</select>';
			?>
          </div></td>
        <td width="77" bordercolor="#0000FF">
			<div align="center">
			<?php
			echo '<select name="henm">';
			echo '<option value="'.$row[hen].'" selected>'.$row[hen].'</option>';
			?>
			<option value="0">0</option>
            <option value="0.5">1/2</option>
            <option value="1">1</option>
			<option value="1.5">1 1/2</option>
            <option value="2">2</option>
			<option value="2.5">2 1/2</option>
            <option value="3">3</option>
			<option value="3.5">3 1/2</option>
            <option value="4">4</option>
			<option value="4.5">4 1/2</option>
            <option value="5">5</option>
			<option value="5.5">5 1/2</option>
            <option value="6">6</option>
			<option value="6.5">6 1/2</option>
            <option value="7">7</option>
			<option value="7.5">7 1/2</option>
            <option value="8">8</option>
			<option value="8.5">8 1/2</option>
            <option value="9">9</option>
			<option value="9.5">9 1/2</option>
            <option value="10">10</option>
			<option value="10.5">10 1/2</option>
			</select>
			</div></td>
        <td width="95" bordercolor="#0000FF"><div align="center">
			<?php
	        echo '<select name="henpm">';
			echo '<option value="'.$row[henp].'" selected>'.$row[henp].'</option>';
			?>
			<option value="0" selected>0</option>
			<option value="3">3</option>
			<?php
			if($horariovar==1)
			{
			echo '<option value="0.5">0.5</option>';
			echo '<option value="1">1</option>';
			}
			?>
			<option value="3">3</option>
            <option value="4">4</option>
			<option value="4.5">4 1/2</option>
			<option value="5">5</option>
			<option value="5.5">4 1/2</option>
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
    </table>
    <table width="779" height="57" border="1">
     <tr>
		<td width="68" bordercolor="#0000FF" bgcolor="#2770DB" class="t12b"><div align="center" class="Estilo93 Estilo102"><strong>TIEMPO DE REPOSO COMIDA NOCTURNO 363 </strong></div></td>
		<td width="157" bordercolor="#0000FF" bgcolor="#2770DB" class="t12b"><div align="center" class="Estilo93 Estilo110">KILOMETRAJE 347 </div></td>
		<td width="46" bordercolor="#0000FF" bgcolor="#2770DB" class="t12b"><div align="center" class="Estilo93 Estilo110">MANEJO 170 </div></td>
		<td width="60" bordercolor="#0000FF" bgcolor="#2770DB" class="t12b"><div align="center" class="Estilo138">MOVILIZA. 363</div></td>
		<td width="57" bordercolor="#0000FF" bgcolor="#2770DB" class="t12b"><div align="center" class="Estilo138">CLAVE 221 </div></td>
		<td width="92" bordercolor="#0000FF" bgcolor="#2770DB" class="t12b"><div align="center" class="Estilo138">CLAVE 277 </div></td>
		<td width="79" bordercolor="#0000FF" bgcolor="#2770DB" class="t12b"><div align="center" class="Estilo138">LUGAR DE VI&Aacute;TICO</div></td>
		<td width="168" bordercolor="#0000FF" bgcolor="#2770DB" class="t12b"><div align="center" class="Estilo138">OBSERVACI&Oacute;N</div></td>
		</tr>
		<tr>
		 <td width="68" bordercolor="#0000FF"><div align="center">
		   <?php
		 echo '<select name="trcnm">';
		 echo '<option value="'.$row[trcn].'" selected>'.$row[trcn].'</option>';
         echo '<option value="0">0</option>';
		 echo '<option value="0.5">0.5</option>';
         echo '</select>';
		 ?>
		 </div></td>
         <td width="157" height="32" bordercolor="#0000FF">
            <div align="center" class="Estilo103">
             <?php
			 echo '<input name="kmm" type="text" id="kmm" value="'.$row[km].'" size="5" maxlength="4">';
			 ?>
          <span class="Estilo144">
                <label><input type="checkbox" name="vehiculo_propio" value="on">
                <span class="Estilo161 Estilo144">&iquest;Vehiculo Propio?</span></label>
            </span></div></td>
        <td width="46" height="26" bordercolor="#0000FF" class="Estilo103">
          <div align="center">
            <?php
			$qry1=mysql_query("SELECT * FROM aditamentos");
			while ($row1=mysql_fetch_array($qry1))
				{
				$manejobd=$row1[manejo];
				}
			$man1=$manejobd*1;
			$man2=$manejobd*2;
			$man3=$manejobd*3;
		    echo '<select name="manejom" id="manejom">';
		    echo '<option value="'.$row[manejo].'" selected>'.$row[manejo].'</option>';
		    echo '<option value="0">0</option>';
			echo '<option value="'.$man1.'">'.$man1.'</option>';
			echo '<option value="'.$man2.'">'.$man2.'</option>';
			echo '<option value="'.$man3.'">'.$man3.'</option>';
			echo '</select>';
		    ?>
          </div></td>
        <td width="60" bordercolor="#0000FF">
            <div align="center">
              <select name="movilizacionm" style="width:50px">
                <?php echo '<option value="'.$row[movilizacion].'" selected>'.$row[movilizacion].'</option>'; ?>
            <option value="0">0</option>
                <option value="2.5">2.5</option>
                <option value="5">5</option>
                <option value="10">10</option>
              </select>
            </div></td>
			<td bordercolor="#0000FF"><div align="center" class="Estilo103">
          	<?php
		    echo '<select name="clave221m">';
			echo '<option value="'.$row[clave221].'" selected>'.$row[clave221].'</option>';
			echo '<option value="8">8</option>';
			echo '<option value="0">0</option>';
			echo '</select>';
			?>
           
        </div></td>
			<td bordercolor="#0000FF"><div align="center" class="Estilo103">
          	<?php
		    echo '<select name="clave277m">';
			echo '<option value="'.$row[clave277].'" selected>'.$row[clave277].'</option>';
			echo '<option value="1">1</option>';
			echo '<option value="0">0</option>';
			echo '</select>';
			?>
           
        </div></td>
        <td width="79" bordercolor="#0000FF"><div align="center" class="Estilo103">
          <label><?php
		  echo '<input name="lugarm" type="text" id="lugarm" value="'.$row[lugar].'" size="25" maxlength="25" onKeyUp="this.value = this.value.toUpperCase();">';
		  ?>
          </label>
        </div></td>
        <td width="168" bordercolor="#0000FF"><span class="Estilo103">
          <label> </label>
          </span>
            <div align="center"> <span class="Estilo103">
            <?php
			echo '<textarea name="observacionm" cols="20" rows="2" style="width:80px">'.$row[observacion].'</textarea>';
			?>
                </span></div></td>
		  </tr>
    </table>
<?php
}
	echo '<input name="fecham" type="hidden" value="'.$fecharef.'">'; 
	echo '<input name="cim" type="hidden" value="'.$ci.'">';			
			
?>
  <p><span class="Estilo143">Click en [Enviar] cuando las modificaciones est&eacute;n completas</span></p>
  <table width="230" border="0">
    <tr>
      <td width="108"><label> </label>
          <div align="center">
            <input type="submit" name="Submit" value="Enviar" style="background:#FFB400" onClick="pregunta_enviar()">
          </div></td>
      <td width="112"><label> </label>
          <div align="center">
            <input type="submit" name="Submit3" value="Ayuda" style="background:#FFB400">
        </div></td>
    </tr>
  </table>
  </div>
  <p><span class="Estilo4">&iquest;Desea Regresar al Men&uacute; Modificar Jornada?</span></p>
  <p>
    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="103" height="24">
      <param name="BGCOLOR" value="">
      <param name="movie" value="button36.swf">
      <param name="quality" value="high">
      <embed src="button36.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="103" height="24" ></embed>
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