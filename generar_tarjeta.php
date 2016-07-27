<?php
include ("security_system.php");

function suma_fechas($fecha,$ndias)
	{
	if (preg_match("/[0-9]{1,2}-[0-9]{1,2}-([0-9][0-9]){1,2}/",$fecha))
	list($dia,$mes,$ano)=split("-",$fecha);
	$nueva = mktime(0,0,0, $mes,$dia,$ano) + $ndias * 24 * 60 * 60;
	$nuevafecha=date("d-m-Y",$nueva);
	return ($nuevafecha);  
	}
$cont=0;
?>
<HTML>
<HEAD>
<TITLE>Consulta Tarjetas Relacionadas. Sistema ARTS Online</TITLE>
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
.Estilo2 {
	font-size: 12px;
	text-decoration: none;
	font-family: tahoma;
}
.Estilo3 {color: #0033FF}
.Estilo5 {font-size: 12px}
.Estilo14 {color: #0033FF; font-family: tahoma; }
.Estilo15 {font-size: 9px}
.Estilo38 {font-size: 10px}
.Estilo47 {font-weight: bold; font-family: tahoma;}
.Estilo48 {font-family: tahoma}
.Estilo49 {text-transform: uppercase; text-decoration: none; font-family: tahoma; font-weight: normal;}
.Estilo50 {
	font-size: 16px;
	font-family: tahoma;
}
.Estilo53 {font-size: 14px}
body {
	background-image: url(images/fondoconsulta.JPG);
}
.Estilo54 {color: #FF0000}
.Estilo55 {font-size: 18px; font-family: tahoma; }
.Estilo56 {font-size: 12px; font-weight: bold; text-transform: uppercase; text-decoration: none; font-family: tahoma;}
.Estilo57 {color: #FFFFFF}
.Estilo58 {font-size: 14px; font-family: tahoma; }
.Estilo59 {font-size: 12px; color: #0033FF; }
-->
</style>
</HEAD>

<BODY BGCOLOR=#FFFFFF vlink="#0000FF" LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0 tracingsrc="images/-downdis.gif" tracingopacity="100" oncontextmenu="return false">

    <div align="center">
      <h1>
		<?php
		include ("includes/bdkey.php");
		
		if($_POST['ci']==0)
		{
		?>
        </h1>
      <form name="form2" method="post" action="verifica_datos_tarjeta.php">
        <div align="center">
          <h1><span class="Estilo3"><u><span class="Estilo54">Atenci&oacute;n</span></u></span></h1>
        </div>
        <h2 align="center" class="Estilo54">No se seleccion&oacute; ning&uacute;n trabajador</h2>
        <h2 align="center" class="Estilo54">por favor chequee de nuevo</h2>
        <p align="center" class="Estilo54"><span class="t12b Estilo2">
          <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="103" height="24">
            <param name="movie" value="button31.swf">
            <param name="quality" value="high">
            <embed src="button31.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="103" height="24" ></embed>
          </object>
        </span></p>
        <p align="center" class="Estilo54">
          <span class="Estilo55 Estilo53">
          <label class="Estilo57">
       
          </label>
        </span></p>
        <div align="center">
          <span class="Estilo55 Estilo53">
          <?php


}else{
$contador=1;
foreach ($_POST['ci'] as $ci)
{
$cedul[$contador]=$ci;
$contador++;
?>
        </span><span class="Estilo58"></span></div>
      </form>
      </div>
    <form name="form1" method="post" action="imprimir1tarjeta.php">
<td colspan="3" valign="middle"><p align="center">
<?php
$query1 = mysql_query("select * from traba where ci='$ci'");
while ($row=mysql_fetch_array($query1))
		{
			$region=$row[region];
			$direccion=$row[direccion];
			$gerencia=$row[gerencia];
			$coordinacion=$row[coordinacion];
			$id_estructura=$row[id_estructura];
			$estructura=$row[estructura];
			$jefatura=$row[jefatura];
			$cargo=$row[cargo];
			$apellidos=$row[apellidos];
			$nombres=$row[nombres];
			$ci=$row[ci];
			$horario=$row[horario];
			$estatus=$row[estatus];
			$manejo=$row[manejo];
		}
?>
  </p>
  <div align="center">
    <table width="1195" height="747" border="1">
      <tr>
        <td width="1195" height="741"><table width="1195" border="0">
          <tr>
            <td width="170" height="125"><div align="center"><img src="images/logocorpoelec.jpg"></div></td>
              <td width="805"><div align="center" class="Estilo55"><em><strong><font color="#009900">RELACI&Oacute;N DE SOBRETIEMPO (N&Oacute;MINA DIARIA)</font></strong></em></div></td>
              <td width="206"><div align="center"><span class="Estilo5 Estilo102"><strong><img src="images/cadafelogo.gif" width="195" height="108">
              <?php
			echo $region." ";
		  ?>
              </strong></span><?php
		  echo $newfecha;
		  ?>
              </div>
                <div align="center"></div></td>
            </tr>
          </table>
           <table width="1195" border="1">
             <tr>
               <td width="148" height="22" background="images/fondoconsulta.JPG"  bgcolor="#FFFFFF" class="Estilo56"><span class="Estilo3"><strong>DIRECCI&Oacute;N</strong></span></td>
                <td width="222" background="images/fondoconsulta.JPG"  bgcolor="#FFFFFF" class="Estilo56"><span class="Estilo3"><strong>
                  <label></label>
                  <strong>
                  <?php
			echo '<u>'.$direccion.'</u>';
		  ?>
                  </strong></strong></span></td>
                <td width="150" background="images/fondoconsulta.JPG"  bgcolor="#FFFFFF" class="Estilo56"><span class="Estilo3"><strong>GERENCIA</strong></span></td>
                <td width="374" background="images/fondoconsulta.JPG"  bgcolor="#FFFFFF" class="Estilo56"><span class="Estilo3"><strong>
                  <label></label>
                  <strong>
                  <?php
			echo '<u>'.$gerencia.'</u>';
		  ?>
                </strong></strong></span></td>
                <td width="119" background="images/fondoconsulta.JPG"  bgcolor="#FFFFFF" class="Estilo56"><div align="center" class="Estilo5 Estilo101 Estilo3"><strong>A&Ntilde;O</strong></div></td>
		        
        <td width="142" background="images/fondoconsulta.JPG"  bgcolor="#FFFFFF" class="Estilo56"><div align="center" class="Estilo5 Estilo101 Estilo3"><?php echo date("Y"); ?></div></td>
              </tr>
             <tr>
               <td width="148" height="26" background="images/fondoconsulta.JPG"  bgcolor="#FFFFFF" class="Estilo56"><span class="Estilo3"><strong>COORDINACI&Oacute;N</strong></span></td>
                <td width="222" background="images/fondoconsulta.JPG"  bgcolor="#FFFFFF" class="Estilo56"><span class="Estilo3"><strong>
                  <label></label>
                  <strong>
                    <?php
		  echo '<u>'.$coordinacion.'</u>';
		  ?>
                  </strong></strong></span></td>
                <td width="150" background="images/fondoconsulta.JPG"  bgcolor="#FFFFFF" class="Estilo56"><strong class="Estilo14 Estilo3">grupo de trabajo</strong></td>
                <td width="374" background="images/fondoconsulta.JPG"  bgcolor="#FFFFFF" class="Estilo56"><span class="Estilo3"><strong>
                  <label></label>
                  <strong><strong>
                  <?php
		  echo '<u>'.$estructura.'</u>';
		  ?>
                </strong></strong></strong></span></td>
                <td width="119" background="images/fondoconsulta.JPG"  bgcolor="#FFFFFF" class="Estilo56"><div align="center" class="Estilo5 Estilo102  Estilo3"><strong>MES</strong></div></td>
                <td width="142" background="images/fondoconsulta.JPG"  bgcolor="#FFFFFF" class="Estilo56 Estilo3"><strong>
                  <label></label>
                  </strong>              <div align="center">
                    <strong>
                    <?php $mes=date("F");
					if ($mes=="January") $mes="ENERO";
					if ($mes=="February") $mes="FEBRERO";
					if ($mes=="March") $mes="MARZO";
					if ($mes=="April") $mes="ABRIL";
					if ($mes=="May") $mes="MAYO";
					if ($mes=="June") $mes="JUNIO";
					if ($mes=="July") $mes="JULIO";
					if ($mes=="August") $mes="AGOSTO";
					if ($mes=="September")$mes="SEPTIEMBRE";
					if ($mes=="October") $mes="OCTUBRE";
					if ($mes=="November") $mes="NOVIEMBRE";
					if ($mes=="December") $mes="DICIEMBRE";
					echo '<u>'.$mes.'</u>';
					echo '<input name="mes" type="hidden" value="'.$mes.'">';
					?>
                </strong></div></td>
              </tr>
            </table>
            <table width="1195" border="1">
              <tr>
                <td width="142" class="Estilo3 Estilo5 Estilo56">SOBRETIEMPO DEL</td>
        <td width="764" class="Estilo3 Estilo5 Estilo56"><u><?php
			echo $fechaini=$_POST[fecha_ini]; ?></u><span class="Estilo48"> AL <u><?php echo $fechafin=$_POST[fecha_fin]; ?></u></span></td>
        <td width="119" class="Estilo3 Estilo5 Estilo56"><div align="right" class="Estilo5">SEMANA N&ordm;</div></td>
	    <td width="142" class="Estilo3 Estilo5 Estilo56"><div align="center">
	      <?php 

$day1=substr($_POST[fecha_ini],0,2);
$month1=substr($_POST[fecha_ini],3,2);
$year1=substr($_POST[fecha_ini],6,4);

switch($month1){
case 1:
if ($day<4){
$semana=round(1+$day1/7);
}else{
$semana=round($day1/7);
}
break;

case 2:
$semana=round(6+$day1/7);
break;

case 3:
$semana=round(10+$day1/7);
break;

case 4:
$semana=round(14+$day1/7);
break;

case 5:
$semana=round(19+$day1/7);
break;

case 6:
$semana=round(24+$day1/7);
break;

case 7:
$semana=round(28+$day1/7);
break;

case 8:
$semana=round(33+$day1/7);
break;

case 9:
$semana=round(37+$day1/7);
break;

case 10:
$semana=round(41+$day1/7);
break;

case 11:
$semana=round(46+$day1/7);
break;

case 12:
$semana=round(50+$day1/7);
break;
}

echo $semana;
?></div>	  </td>
      </tr>
            </table>
            <table width="1195" border="0">
                <tr>
                  <td width="446" height="23" class="Estilo56"><div align="right" class="Estilo59">
                    <div align="left" class="Estilo47">APELLIDOS Y NOMBRES:          <strong>
                      <?php
		  echo '<u>'.$apellidos.'</u>';
		  ?>
                      , 
                      <?php
		  echo '<u>'.$nombres.'<u>';
		  ?>
                    </strong> </div>
                  </div></td>
                  <td width="468" class="Estilo56"><div align="right" class="Estilo59">
                    <div align="left"><span class="Estilo48">C.I.:</span><span class="Estilo102 "><strong>
          	<?php
			echo '<u>'.$ci.'</u>';
			$cont=$cont+1;
		  	?>
                    </strong></span></div>
                  </div></td>
                  <td width="267" class="Estilo56"><div align="right" class="Estilo59">
                    <div align="left" class="Estilo48">AUTORIZADO MANEJO:<strong>
                      <?php
		 echo '<u>'.$manejo.'</u>';
		 ?>
                    </strong></div>
                  </div></td>
                </tr>
                <tr>
                  <td height="20" class="Estilo56"><div align="left" class="Estilo59"><strong>CARGO:            <span class="Estilo48"><span class="Estilo102 "><strong><strong><strong>
                    <?php
		  echo '<u>'.$cargo.'</u>';
		  ?>
                  (</strong>
                      <?php
		  echo '<u>'.$estatus.'</u>';
		  ?>
                  ) </strong></strong></span></span></strong></div></td>
                  <td class="Estilo56"><div align="left" class="Estilo5 Estilo56 Estilo3">HORARIO DE TRABAJO:<span class="Estilo102 "><strong>
				  <select name="horario">
			<?php
			echo '<option value="'.$horario.'" selected>'.$horario.'</option>';
			?>
            <option value="07:00-15:00">07:00-15:00</option>
            <option value="15:00-23:00">15:00-23:00</option>
            <option value="23:00-07:00">23:00-07:00</option>
            <option value="07:30-16:30">07:30-16:30</option>
			<option value="07:00-18:00">07:00-18:00</option>
            <option value="16:00-00:00">16:00-00:00</option>
            <option value="00:00-08:00">00:00-08:00</option>
            <option value="08:00-16:00">08:00-16:00</option>
            <option value="TURNO VARIADO">TURNO VARIADO</option>
          </select>
             </strong></span> </div></td>
                  <td class="Estilo56"><div align="left" class="Estilo101 Estilo5  Estilo3"><strong>ESTRUCTURA:<span class="Estilo49"><span class="Estilo102 "><strong>
                    <?php
		  echo '<u>'.$id_estructura.'</u>';
		  ?>
                  </strong></span></span></strong></div></td>
                </tr>
            </table>
            <div align="center">
             <table width="1195" border="1">
                <tr>
				<td width="40" rowspan="2" bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo92 Estilo105 Estilo102 Estilo5"><div align="center" class="Estilo102">D&Iacute;A</div>
                </div></td><td width="19" rowspan="2"  bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo92 Estilo105 Estilo102 Estilo15 "><div align="center"><p class="Estilo102">H . D . 004</p></div>
                </div></td><td width="28" rowspan="2"  bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo92 Estilo105 Estilo102 Estilo15 "><div align="center" class="Estilo102">D&Iacute;A FER. TRAB  087 </div>
                </div></td><td width="47" rowspan="2"  bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo92 Estilo105 Estilo102 Estilo15 "><div align="center" class="Estilo102">H.E. DIURNAS 052 </div>
                </div></td><td width="61" rowspan="2"  bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo92 Estilo105 Estilo102 Estilo15 "><div align="center" class="Estilo102">H.E. DIURNAS GUARDIAS PROGRAMA. 052 </div>
                </div></td><td width="41" rowspan="2"  bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo93 Estilo102 Estilo15 ">
                  <p>TIEMPO DE REP. COMIDA DIURNO 055 </p>
                </div></td><td width="32" rowspan="2"  bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo15 Estilo102 Estilo93"><p>BONO NOCT 051</p>
                </div></td><td width="31" rowspan="2"  bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo15 Estilo102 Estilo93">H.E. NOCT 053
				</div></td>
                <td width="72" rowspan="2"  bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo15 Estilo102 Estilo93">H.E. NOCTURNAS GUARDIA PROGRAMADA 053 </div></td>
                <td width="65" rowspan="2"  bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo15 Estilo102 Estilo93">TIEMPO DE REPOSO COMIDA NOCTURNO 056</div></td>
                <td colspan="2"  bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo15 Estilo102 Estilo93">CESTA TICKET</div></td><td height="25" colspan="3"  bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo15 Estilo102 Estilo93">VI&Aacute;TICO
				</div>				  <div align="center" class="Estilo15 Estilo110 Estilo93"></div></td><td width="43" rowspan="2"  bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo15 Estilo138">MANEJO 178
				</div></td><td rowspan="2" bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo15 Estilo138">CLAVE 221
				</div></td><td rowspan="2" bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo15 Estilo138">CLAVE 277
				</div></td><td width="29" rowspan="2"  bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo15 Estilo138"><p>MOV 302 </p>
                </div></td>
				<td colspan="2"  bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo15 Estilo102 Estilo93">CESTA TICKET</div></td>
				<td width="21" rowspan="2"  bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo15 Estilo138">REP 045
				</div></td><td width="57" rowspan="2"  bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo15 Estilo138">LUGAR DE VI&Aacute;TICO
				</div></td><td width="103" rowspan="2"  bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo15 Estilo138">OBSERVACI&Oacute;N</div></td>
				</tr>
                <tr>
                  <td width="32"  bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo15 Estilo102 Estilo93">0,30
				</div></td>
                  <td width="32"  bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo15 Estilo102 Estilo93">0,50</div></td>
                  <td height="26"  bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo15 Estilo102 Estilo93">C/INCIDENC. 345
				</div></td>
                  <td width="64"  bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo15 Estilo102 Estilo93">S/INCIDENC 363
				</div></td>
                  <td width="26"  bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo15 Estilo110 Estilo93">K.M. 347
				</div></td>
                  <td width="32"  bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo15 Estilo102 Estilo93">0,30</div></td>
                  <td width="32"  bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo15 Estilo102 Estilo93">0,50</div></td>
                </tr>
                <tr><td
				width="40"  bgcolor="#FFFFFF" class="Estilo49 Estilo5">
<?php
echo '<input name="newfecha1" type="hidden" value="'.$_POST['newfecha1'].'">';
$newfecha1=$_POST['newfecha1'];
$result1 = mysql_query("SELECT * FROM jornada WHERE ci='$ci' AND fecha='$newfecha1'");
while($row=mysql_fetch_array($result1)){
	switch($row['tipodia']){
		case 2:
			echo "6to D&iacute;a";
		break;
		case 3:
			echo "7mo D&iacute;a";
		break;

	default:
		$dia1_semana=date ("l", mktime(0, 0, 0,$month1, $day1, $year1));
		if ($dia1_semana=="Monday") echo $dia1="Lunes";
		if ($dia1_semana=="Tuesday") echo $dia1="Martes";
		if ($dia1_semana=="Wednesday") echo $dia1="Mi&eacute;rcoles";
		if ($dia1_semana=="Thursday") echo $dia1="Jueves";
		if ($dia1_semana=="Friday") echo $dia1="Viernes";
		if ($dia1_semana=="Saturday") echo $dia1="S&aacute;bado";
		if ($dia1_semana=="Sunday") echo $dia1="Domingo";
	break;
}
?>
				</td>
                <td width="19"  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5"><?php $hdsum=0; if($row[hd]==0){ echo "&nbsp;"; }else{ echo $row[hd]; } $hdsum=$hdsum+$row["hd"];?></div></td>
                <td width="28"  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5"><?php $feriadosum=0; if($row[feriado]==0){ echo "&nbsp;"; }else{ echo $row[feriado]; } $feriadosum=$feriadosum+$row["feriado"]; ?></div></td>
                <td width="47"  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5"><?php $hedsum=0; if($row[hed]==0){ echo "&nbsp;"; }else{ echo $row[hed]; }  $hedsum=$hedsum+$row["hed"]; ?></div></td>
                <td width="61"  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5"><?php $hedpsum=0; if($row[hedp]==0){ echo "&nbsp;"; }else{ echo $row[hedp]; } $hedpsum=$hedpsum+$row["hedp"]; ?></div></td>
                <td width="41"  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5"><?php $trcdsum=0; if($row[trcd]==0){ echo "&nbsp;"; }else{ echo $row[trcd]; } $trcdsum=$trcdsum+$row["trcd"]; ?></div></td>
                <td width="32"  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5"><?php $bonocturnosum=0; if($row["bonocturno"]==0){ echo "&nbsp;"; }else{ echo $row["bonocturno"]; } $bonocturnosum=$bonocturnosum+$row["bonocturno"]; ?></div></td>
                <td width="31"  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5"><?php $hensum=0; if($row[hen]==0){ echo "&nbsp;"; }else{ echo $row[hen]; } $hensum=$hensum+$row["hen"]; ?></div></td>
                <td width="72"  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php $henpsum=0; if($row[henp]==0){ echo "&nbsp;"; }else{ echo $row[henp]; } $henpsum=$henpsum+$row["henp"]; ?>
                </div></td>
                <td width="65"  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php $trcnsum=0; if($row[trcn]==0){ echo "&nbsp;"; }else{ echo $row[trcn]; } $trcnsum=$trcnsum+$row["trcn"]; ?>
                </div></td>
                <td width="32"  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5"><?php $ctcsum=0; if($row['ctc']==0){ echo "&nbsp;"; }else{ echo $row['ctc']; } $ctcsum+=$row['ctc']; ?></div></td>
                <td width="32"  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5"><?php $ctlsum=0; if($row['ctl']==0){ echo "&nbsp;"; }else{ echo $row['ctl']; } $ctlsum+=$row['ctl']; ?></div></td>
                <td width="65"  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5"><?php $vcisum=0; if($row[vci]==0){ echo "&nbsp;"; }else{ echo $row[vci]; } $vcisum=$vcisum+$row["vci"]; ?></div></td>
                <td width="64"  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5"><?php $vsisum=0; if($row[vsi]==0){ echo "&nbsp;"; }else{ echo $row[vsi]; } $vsisum=$vsisum+$row["vsi"]; ?></div></td>
                <td width="26"  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5"><?php $kmsum=0; if($row[km]==0){ echo "&nbsp;"; }else{ echo $row[km]; } $kmsum=$kmsum+$row["km"]; ?></div></td>
                <td width="43"  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5"><?php $manejosum=0; if($row[manejo]==0){ echo "&nbsp;"; }else{ echo $row[manejo]; } $manejosum=$manejosum+$row["manejo"];  ?></div></td>
				<td width="36"  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5"><?php $clave221sum=0; if($row[clave221]==0){ echo "&nbsp;"; }else{ echo $row[clave221]; } $clave221sum=$clave221sum+$row["clave221"]; ?></div></td>
                <td width="39"  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5"><?php $clave277sum=0; if($row[clave277]==0){ echo "&nbsp;"; }else{ echo $row[clave277]; } $clave277sum=$clave277sum+$row["clave277"]; ?></div></td>
                <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5"><?php $movilizacionsum=0; if($row[movilizacion]==0){ echo "&nbsp;"; }else{ echo $row[movilizacion]; } $movilizacionsum=$movilizacionsum+$row["movilizacion"]; ?></div></td>
                <td width="32"  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php $ctc7mosum=0; if($row['ctc7mo']==0){ echo "&nbsp;"; }else{ echo $row['ctc7mo']; } $ctc7mosum+=$row['ctc7mo']; ?>
                </div></td>
                <td width="32"  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php $ctl7mosum=0; if($row['ctl7mo']==0){ echo "&nbsp;"; }else{ echo $row['ctl7mo']; } $ctlsum+=$row['ctl7mo']; ?>
                </div></td>
                <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5"><?php $repososum=0; if($row[reposo]==0){ echo "&nbsp;"; }else{ echo $row[reposo]; } $repososum=$repososum+$row["reposo"];?></div></td>
                <td width="57"  bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo5"><?php echo $row[lugar]; ?></div></td>
                <td width="103"  bgcolor="#FFFFFF" class="Estilo5"><?php echo $row[observacion]; }?></td>
              </tr>
                <tr><td width="40"  bgcolor="#FFFFFF" class="Estilo49">
                  <span class="Estilo5">
<?php

$fechamas1=suma_fechas($fechaini, 1);

$day2=substr($fechamas1,0,2);
$month2=substr($fechamas1,3,2);
$year2=substr($fechamas1,6,4);

$newfecha2=$year2."-".$month2."-".$day2;
echo '<input name="newfecha2" type="hidden" value="'.$year2."-".$month2."-".$day2.'">';

$result2 = mysql_query("select * from jornada where ci='$ci' and fecha='$newfecha2'");

while($row=mysql_fetch_array($result2))
{
switch($row['tipodia'])
{
case 2:
echo "6to Dia";
break;

case 3:
echo "7mo Dia";
break;

default:
$dia2_semana=date ("l", mktime(0, 0, 0,$month2, $day2, $year2));
if ($dia2_semana=="Monday") echo $dia2="Lunes";
if ($dia2_semana=="Tuesday") echo $dia2="Martes";
if ($dia2_semana=="Wednesday") echo $dia2="Mi&eacute;rcoles";
if ($dia2_semana=="Thursday") echo $dia2="Jueves";
if ($dia2_semana=="Friday") echo $dia2="Viernes";
if ($dia2_semana=="Saturday") echo $dia2="S&aacute;bado";
if ($dia2_semana=="Sunday") echo $dia2="Domingo";
break;
}
?>
                  </span></td>
<td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5"><?php  if($row[hd]==0) { echo "&nbsp;"; }else{ echo $row[hd]; } $hdsum=$hdsum+$row["hd"]; ?></div></td>
<td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5"><?php if($row[feriado]==0){ echo "&nbsp;"; }else{ echo $row[feriado]; } $feriadosum=$feriadosum+$row["feriado"];?></div></td>
<td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5"><?php if($row[hed]==0){ echo "&nbsp;"; }else{ echo $row[hed]; } $hedsum=$hedsum+$row["hed"]; ?></div></td>
<td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5"><?php if($row[hedp]==0){ echo "&nbsp;"; }else{ echo $row[hedp]; } $hedpsum=$hedpsum+$row["hedp"]; ?></div></td>
<td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5"><?php if($row[trcd]==0){ echo "&nbsp;"; }else{ echo $row[trcd]; } $trcdsum=$trcdsum+$row["trcd"]; ?></div></td>
<td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5"><?php if($row["bonocturno"]==0){ echo "&nbsp;"; }else{ echo $row["bonocturno"]; } $bonocturnosum=$bonocturnosum+$row["bonocturno"]; ?></div></td>
<td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5"><?php if($row[hen]==0){ echo "&nbsp;"; }else{ echo $row[hen]; } $hensum=$hensum+$row["hen"]; ?></div></td>
<td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
  <?php if($row[henp]==0){ echo "&nbsp;"; }else{ echo $row[henp]; } $henpsum=$henpsum+$row["henp"]; ?>
</div></td>
<td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
  <?php if($row[trcn]==0){ echo "&nbsp;"; }else{ echo $row[trcn]; } $trcnsum=$trcnsum+$row["trcn"]; ?>
</div></td>
<td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
  <?php if($row['ctc']==0){ echo "&nbsp;"; }else{ echo $row['ctc']; } $ctcsum+=$row['ctc']; ?>
</div></td>
<td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
  <?php if($row['ctl']==0){ echo "&nbsp;"; }else{ echo $row['ctl']; } $ctlsum+=$row['ctl']; ?>
</div></td>
<td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5"><?php if($row[vci]==0){ echo "&nbsp;"; }else{ echo $row[vci]; } $vcisum=$vcisum+$row["vci"]; ?></div></td>
<td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5"><?php if($row[vsi]==0){ echo "&nbsp;"; }else{ echo $row[vsi]; } $vsisum=$vsisum+$row["vsi"]; ?></div></td>
<td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5"><?php if($row[km]==0){ echo "&nbsp;"; }else{ echo $row[km]; } $kmsum=$kmsum+$row["km"]; ?></div></td>
<td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5"><?php if($row[manejo]==0){ echo "&nbsp;"; }else{ echo $row[manejo]; } $manejosum=$manejosum+$row["manejo"]; ?></div></td>
<td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5"><?php if($row[clave221]==0){ echo "&nbsp;"; }else{ echo $row[clave221]; } $clave221sum=$clave221sum+$row["clave221"]; ?></div></td>
<td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5"><?php if($row[clave277]==0){ echo "&nbsp;"; }else{ echo $row[clave277]; } $clave277sum=$clave277sum+$row["clave277"];?></div></td>
<td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5"><?php if($row[movilizacion]==0){ echo "&nbsp;"; }else{ echo $row[movilizacion]; } $movilizacionsum=$movilizacionsum+$row["movilizacion"];?></div></td>
<td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
  <?php if($row['ctc7mo']==0){ echo "&nbsp;"; }else{ echo $row['ctc7mo']; } $ctc7mosum+=$row['ctc7mo']; ?>
</div></td>
<td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
  <?php if($row['ctl7mo']==0){ echo "&nbsp;"; }else{ echo $row['ctl7mo']; } $ctl7mosum+=$row['ctl7mo']; ?>
</div></td>
<td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5"><?php if($row[reposo]==0){ echo "&nbsp;"; }else{ echo $row[reposo]; } $repososum=$repososum+$row["reposo"];?></div></td>
<td bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo5"><?php echo $row[lugar]; ?></div></td>
<td bgcolor="#FFFFFF" class="Estilo5"><?php echo $row[observacion];
}
?>				</td>
		      </tr>
                <tr><td width="40" height="22"  bgcolor="#FFFFFF" class="Estilo49"><span class="Estilo5">
<?php
$fechamas2=suma_fechas($fechaini, 2);

$day3=substr($fechamas2,0,2);
$month3=substr($fechamas2,3,2);
$year3=substr($fechamas2,6,4);

$newfecha3=$year3."-".$month3."-".$day3;
echo '<input name="newfecha3" type="hidden" value="'.$year3."-".$month3."-".$day3.'">';

$result3 = mysql_query("select * from jornada where ci='$ci' and fecha='$newfecha3'");

while($row=mysql_fetch_array($result3))
{
switch($row['tipodia'])
{
case 2:
echo "6to Dia";
break;

case 3:
echo "7mo Dia";
break;

default:
$dia3_semana=date ("l", mktime(0, 0, 0,$month3, $day3, $year3));
if ($dia3_semana=="Monday") echo $dia3="Lunes";
if ($dia3_semana=="Tuesday") echo $dia3="Martes";
if ($dia3_semana=="Wednesday") echo $dia3="Mi&eacute;rcoles";
if ($dia3_semana=="Thursday") echo $dia3="Jueves";
if ($dia3_semana=="Friday") echo $dia3="Viernes";
if ($dia3_semana=="Saturday") echo $dia3="S&aacute;bado";
if ($dia3_semana=="Sunday") echo $dia3="Domingo";
break;
}
?>
                </span></td>
                <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php  if($row[hd]==0) { echo "&nbsp;"; }else{ echo $row[hd]; } $hdsum=$hdsum+$row["hd"]; ?>
                </div></td>
                <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row[feriado]==0){ echo "&nbsp;"; }else{ echo $row[feriado]; } $feriadosum=$feriadosum+$row["feriado"];?>
                </div></td>
                <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row[hed]==0){ echo "&nbsp;"; }else{ echo $row[hed]; } $hedsum=$hedsum+$row["hed"]; ?>
                </div></td>
                <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row[hedp]==0){ echo "&nbsp;"; }else{ echo $row[hedp]; } $hedpsum=$hedpsum+$row["hedp"]; ?>
                </div></td>
                <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row[trcd]==0){ echo "&nbsp;"; }else{ echo $row[trcd]; } $trcdsum=$trcdsum+$row["trcd"]; ?>
                </div></td>
                <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row["bonocturno"]==0){ echo "&nbsp;"; }else{ echo $row["bonocturno"]; } $bonocturnosum=$bonocturnosum+$row["bonocturno"]; ?>
                </div></td>
                <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row[hen]==0){ echo "&nbsp;"; }else{ echo $row[hen]; } $hensum=$hensum+$row["hen"]; ?>
                </div></td>
                <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php if($row[henp]==0){ echo "&nbsp;"; }else{ echo $row[henp]; } $henpsum=$henpsum+$row["henp"]; ?>
                </div></td>
                <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php if($row[trcn]==0){ echo "&nbsp;"; }else{ echo $row[trcn]; } $trcnsum=$trcnsum+$row["trcn"]; ?>
                </div></td>
                <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php if($row['ctc']==0){ echo "&nbsp;"; }else{ echo $row['ctc']; } $ctcsum+=$row['ctc']; ?>
                </div></td>
                <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php if($row['ctl']==0){ echo "&nbsp;"; }else{ echo $row['ctl']; } $ctlsum+=$row['ctl']; ?>
                </div></td>
                <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row[vci]==0){ echo "&nbsp;"; }else{ echo $row[vci]; } $vcisum=$vcisum+$row["vci"]; ?>
                </div></td>
                <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row[vsi]==0){ echo "&nbsp;"; }else{ echo $row[vsi]; } $vsisum=$vsisum+$row["vsi"]; ?>
                </div></td>
                <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row[km]==0){ echo "&nbsp;"; }else{ echo $row[km]; } $kmsum=$kmsum+$row["km"]; ?>
                </div></td>
                <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row[manejo]==0){ echo "&nbsp;"; }else{ echo $row[manejo]; } $manejosum=$manejosum+$row["manejo"]; ?>
                </div></td>
				<td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
				  <?php if($row[clave221]==0){ echo "&nbsp;"; }else{ echo $row[clave221]; } $clave221sum=$clave221sum+$row["clave221"]; ?>
				</div></td>
                <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row[clave277]==0){ echo "&nbsp;"; }else{ echo $row[clave277]; } $clave277sum=$clave277sum+$row["clave277"];?>
                </div></td>
                <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row[movilizacion]==0){ echo "&nbsp;"; }else{ echo $row[movilizacion]; } $movilizacionsum=$movilizacionsum+$row["movilizacion"];?>
                </div></td>
                <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php if($row['ctc7mo']==0){ echo "&nbsp;"; }else{ echo $row['ctc7mo']; } $ctc7mosum+=$row['ctc7mo']; ?>
                </div></td>
                <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php if($row['ctl7mo']==0){ echo "&nbsp;"; }else{ echo $row['ctl7mo']; } $ctl7mosum+=$row['ctl7mo']; ?>
                </div></td>
                <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5"><?php if($row[reposo]==0){ echo "&nbsp;"; }else{ echo $row[reposo]; } $repososum=$repososum+$row["reposo"];?></div></td>
                <td bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo5"><?php echo $row[lugar]; ?></div></td>
                <td bgcolor="#FFFFFF" class="Estilo5"><?php echo $row[observacion]; }?></td>
		      </tr>
			  <tr><td width="40"  bgcolor="#FFFFFF" class="Estilo49"><span class="Estilo5">
<?php
$fechamas3=suma_fechas($fechaini, 3);

$day4=substr($fechamas3,0,2);
$month4=substr($fechamas3,3,2);
$year4=substr($fechamas3,6,4);

$newfecha4=$year4."-".$month4."-".$day4;
echo '<input name="newfecha4" type="hidden" value="'.$year4."-".$month4."-".$day4.'">';

$result4 = mysql_query("select * from jornada where ci='$ci' and fecha='$newfecha4'");

while($row=mysql_fetch_array($result4))
{
switch($row['tipodia'])
{
case 2:
echo "6to Dia";
break;

case 3:
echo "7mo Dia";
break;

default:
$dia4_semana=date ("l", mktime(0, 0, 0,$month4, $day4, $year4));
if ($dia4_semana=="Monday") echo $dia4="Lunes";
if ($dia4_semana=="Tuesday") echo $dia4="Martes";
if ($dia4_semana=="Wednesday") echo $dia4="Mi&eacute;rcoles";
if ($dia4_semana=="Thursday") echo $dia4="Jueves";
if ($dia4_semana=="Friday") echo $dia4="Viernes";
if ($dia4_semana=="Saturday") echo $dia4="S&aacute;bado";
if ($dia4_semana=="Sunday") echo $dia4="Domingo";
break;
}
?>
			  </span></td>
                <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php  if($row[hd]==0) { echo "&nbsp;"; }else{ echo $row[hd]; } $hdsum=$hdsum+$row["hd"]; ?>
                </div></td>
                <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row[feriado]==0){ echo "&nbsp;"; }else{ echo $row[feriado]; } $feriadosum=$feriadosum+$row["feriado"];?>
                </div></td>
                <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row[hed]==0){ echo "&nbsp;"; }else{ echo $row[hed]; } $hedsum=$hedsum+$row["hed"]; ?>
                </div></td>
                <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row[hedp]==0){ echo "&nbsp;"; }else{ echo $row[hedp]; } $hedpsum=$hedpsum+$row["hedp"]; ?>
                </div></td>
                <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row[trcd]==0){ echo "&nbsp;"; }else{ echo $row[trcd]; } $trcdsum=$trcdsum+$row["trcd"]; ?>
                </div></td>
                <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row["bonocturno"]==0){ echo "&nbsp;"; }else{ echo $row["bonocturno"]; } $bonocturnosum=$bonocturnosum+$row["bonocturno"]; ?>
                </div></td>
                <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row[hen]==0){ echo "&nbsp;"; }else{ echo $row[hen]; } $hensum=$hensum+$row["hen"]; ?>
                </div></td>
                <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php if($row[henp]==0){ echo "&nbsp;"; }else{ echo $row[henp]; } $henpsum=$henpsum+$row["henp"]; ?>
                </div></td>
                <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php if($row[trcn]==0){ echo "&nbsp;"; }else{ echo $row[trcn]; } $trcnsum=$trcnsum+$row["trcn"]; ?>
                </div></td>
                <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php if($row['ctc']==0){ echo "&nbsp;"; }else{ echo $row['ctc']; } $ctcsum+=$row['ctc']; ?>
                </div></td>
                <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php if($row['ctl']==0){ echo "&nbsp;"; }else{ echo $row['ctl']; } $ctlsum+=$row['ctl']; ?>
                </div></td>
                <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row[vci]==0){ echo "&nbsp;"; }else{ echo $row[vci]; } $vcisum=$vcisum+$row["vci"]; ?>
                </div></td>
                <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row[vsi]==0){ echo "&nbsp;"; }else{ echo $row[vsi]; } $vsisum=$vsisum+$row["vsi"]; ?>
                </div></td>
                <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row[km]==0){ echo "&nbsp;"; }else{ echo $row[km]; } $kmsum=$kmsum+$row["km"]; ?>
                </div></td>
                <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row[manejo]==0){ echo "&nbsp;"; }else{ echo $row[manejo]; } $manejosum=$manejosum+$row["manejo"]; ?>
                </div></td>
				<td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
				  <?php if($row[clave221]==0){ echo "&nbsp;"; }else{ echo $row[clave221]; } $clave221sum=$clave221sum+$row["clave221"]; ?>
				</div></td>
                <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row[clave277]==0){ echo "&nbsp;"; }else{ echo $row[clave277]; } $clave277sum=$clave277sum+$row["clave277"];?>
                </div></td>
                <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row[movilizacion]==0){ echo "&nbsp;"; }else{ echo $row[movilizacion]; } $movilizacionsum=$movilizacionsum+$row["movilizacion"];?>
                </div></td>
                <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php if($row['ctc7mo']==0){ echo "&nbsp;"; }else{ echo $row['ctc7mo']; } $ctc7mosum+=$row['ctc7mo']; ?>
                </div></td>
                <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php if($row['ctl7mo']==0){ echo "&nbsp;"; }else{ echo $row['ctl7mo']; } $ctl7mosum+=$row['ctl7mo']; ?>
                </div></td>
                <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row[reposo]==0){ echo "&nbsp;"; }else{ echo $row[reposo]; } $repososum=$repososum+$row["reposo"];?>
                </div></td>
                <td  bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo5"><?php echo $row[lugar]; ?></div></td>
                <td  bgcolor="#FFFFFF" class="Estilo5"><?php echo $row[observacion]; }?></td>
		      </tr>
                <tr><td width="40"  bgcolor="#FFFFFF" class="Estilo49"><span class="Estilo5">
<?php
$fechamas4=suma_fechas($fechaini, 4);

$day5=substr($fechamas4,0,2);
$month5=substr($fechamas4,3,2);
$year5=substr($fechamas4,6,4);

$newfecha5=$year5."-".$month5."-".$day5;
echo '<input name="newfecha5" type="hidden" value="'.$year5."-".$month5."-".$day5.'">';

$result5 = mysql_query("select * from jornada where ci='$ci' and fecha='$newfecha5'");

while($row=mysql_fetch_array($result5))
{
switch($row['tipodia'])
{
case 2:
echo "6to Dia";
break;

case 3:
echo "7mo Dia";
break;

default:
$dia5_semana=date ("l", mktime(0, 0, 0,$month5, $day5, $year5));
if ($dia5_semana=="Monday") echo $dia5="Lunes";
if ($dia5_semana=="Tuesday") echo $dia5="Martes";
if ($dia5_semana=="Wednesday") echo $dia5="Mi&eacute;rcoles";
if ($dia5_semana=="Thursday") echo $dia5="Jueves";
if ($dia5_semana=="Friday") echo $dia5="Viernes";
if ($dia5_semana=="Saturday") echo $dia5="S&aacute;bado";
if ($dia5_semana=="Sunday") echo $dia5="Domingo";
break;
}
?>
                </span></td>
                <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php  if($row[hd]==0) { echo "&nbsp;"; }else{ echo $row[hd]; } $hdsum=$hdsum+$row["hd"]; ?>
                </div></td>
                <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row[feriado]==0){ echo "&nbsp;"; }else{ echo $row[feriado]; } $feriadosum=$feriadosum+$row["feriado"];?>
                </div></td>
                <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row[hed]==0){ echo "&nbsp;"; }else{ echo $row[hed]; } $hedsum=$hedsum+$row["hed"]; ?>
                </div></td>
                <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row[hedp]==0){ echo "&nbsp;"; }else{ echo $row[hedp]; } $hedpsum=$hedpsum+$row["hedp"]; ?>
                </div></td>
                <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row[trcd]==0){ echo "&nbsp;"; }else{ echo $row[trcd]; } $trcdsum=$trcdsum+$row["trcd"]; ?>
                </div></td>
                <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row["bonocturno"]==0){ echo "&nbsp;"; }else{ echo $row["bonocturno"]; } $bonocturnosum=$bonocturnosum+$row["bonocturno"]; ?>
                </div></td>
                <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row[hen]==0){ echo "&nbsp;"; }else{ echo $row[hen]; } $hensum=$hensum+$row["hen"]; ?>
                </div></td>
                <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php if($row[henp]==0){ echo "&nbsp;"; }else{ echo $row[henp]; } $henpsum=$henpsum+$row["henp"]; ?>
                </div></td>
                <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php if($row[trcn]==0){ echo "&nbsp;"; }else{ echo $row[trcn]; } $trcnsum=$trcnsum+$row["trcn"]; ?>
                </div></td>
                <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php if($row['ctc']==0){ echo "&nbsp;"; }else{ echo $row['ctc']; } $ctcsum+=$row['ctc']; ?>
                </div></td>
                <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php if($row['ctl']==0){ echo "&nbsp;"; }else{ echo $row['ctl']; } $ctlsum+=$row['ctl']; ?>
                </div></td>
                <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row[vci]==0){ echo "&nbsp;"; }else{ echo $row[vci]; } $vcisum=$vcisum+$row["vci"]; ?>
                </div></td>
                <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row[vsi]==0){ echo "&nbsp;"; }else{ echo $row[vsi]; } $vsisum=$vsisum+$row["vsi"]; ?>
                </div></td>
                <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row[km]==0){ echo "&nbsp;"; }else{ echo $row[km]; } $kmsum=$kmsum+$row["km"]; ?>
                </div></td>
                <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row[manejo]==0){ echo "&nbsp;"; }else{ echo $row[manejo]; } $manejosum=$manejosum+$row["manejo"]; ?>
                </div></td>
				<td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
				  <?php if($row[clave221]==0){ echo "&nbsp;"; }else{ echo $row[clave221]; } $clave221sum=$clave221sum+$row["clave221"]; ?>
				</div></td>
                <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row[clave277]==0){ echo "&nbsp;"; }else{ echo $row[clave277]; } $clave277sum=$clave277sum+$row["clave277"];?>
                </div></td>
                <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row[movilizacion]==0){ echo "&nbsp;"; }else{ echo $row[movilizacion]; } $movilizacionsum=$movilizacionsum+$row["movilizacion"];?>
                </div></td>
                <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php if($row['ctc7mo']==0){ echo "&nbsp;"; }else{ echo $row['ctc7mo']; } $ctc7mosum+=$row['ctc7mo']; ?>
                </div></td>
                <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php if($row['ctl7mo']==0){ echo "&nbsp;"; }else{ echo $row['ctl7mo']; } $ctl7mosum+=$row['ctl7mo']; ?>
                </div></td>
                <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row[reposo]==0){ echo "&nbsp;"; }else{ echo $row[reposo]; } $repososum=$repososum+$row["reposo"];?>
                </div></td>
                <td  bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo5"><?php echo $row[lugar]; ?></div></td>
                <td  bgcolor="#FFFFFF" class="Estilo5"><?php echo $row[observacion]; }?></td>
		      </tr>
                <tr><td width="40"  bgcolor="#FFFFFF" class="Estilo49"><span class="Estilo5">
                  <?php
$fechamas5=suma_fechas($fechaini, 5);

$day6=substr($fechamas5,0,2);
$month6=substr($fechamas5,3,2);
$year6=substr($fechamas5,6,4);

$newfecha6=$year6."-".$month6."-".$day6;
echo '<input name="newfecha6" type="hidden" value="'.$year6."-".$month6."-".$day6.'">';

$result6 = mysql_query("select * from jornada where ci='$ci' and fecha='$newfecha6'");

while($row=mysql_fetch_array($result6))
{
switch($row['tipodia'])
{
case 2:
echo "6to Dia";
break;

case 3:
echo "7mo Dia";
break;

default:
$dia6_semana=date ("l", mktime(0, 0, 0,$month6, $day6, $year6));
if ($dia6_semana=="Monday") echo $dia6="Lunes";
if ($dia6_semana=="Tuesday") echo $dia6="Martes";
if ($dia6_semana=="Wednesday") echo $dia6="Mi&eacute;rcoles";
if ($dia6_semana=="Thursday") echo $dia6="Jueves";
if ($dia6_semana=="Friday") echo $dia6="Viernes";
if ($dia6_semana=="Saturday") echo $dia6="S&aacute;bado";
if ($dia6_semana=="Sunday") echo $dia6="Domingo";
break;
}
?>
                </span></td>
                <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php  if($row[hd]==0) { echo "&nbsp;"; }else{ echo $row[hd]; } $hdsum=$hdsum+$row["hd"]; ?>
                </div></td>
                <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row[feriado]==0){ echo "&nbsp;"; }else{ echo $row[feriado]; } $feriadosum=$feriadosum+$row["feriado"];?>
                </div></td>
                <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row[hed]==0){ echo "&nbsp;"; }else{ echo $row[hed]; } $hedsum=$hedsum+$row["hed"]; ?>
                </div></td>
                <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row[hedp]==0){ echo "&nbsp;"; }else{ echo $row[hedp]; } $hedpsum=$hedpsum+$row["hedp"]; ?>
                </div></td>
                <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row[trcd]==0){ echo "&nbsp;"; }else{ echo $row[trcd]; } $trcdsum=$trcdsum+$row["trcd"]; ?>
                </div></td>
                <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row["bonocturno"]==0){ echo "&nbsp;"; }else{ echo $row["bonocturno"]; } $bonocturnosum=$bonocturnosum+$row["bonocturno"]; ?>
                </div></td>
                <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row[hen]==0){ echo "&nbsp;"; }else{ echo $row[hen]; } $hensum=$hensum+$row["hen"]; ?>
                </div></td>
                <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php if($row[henp]==0){ echo "&nbsp;"; }else{ echo $row[henp]; } $henpsum=$henpsum+$row["henp"]; ?>
                </div></td>
                <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php if($row[trcn]==0){ echo "&nbsp;"; }else{ echo $row[trcn]; } $trcnsum=$trcnsum+$row["trcn"]; ?>
                </div></td>
                <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php if($row['ctc']==0){ echo "&nbsp;"; }else{ echo $row['ctc']; } $ctcsum+=$row['ctc']; ?>
                </div></td>
                <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php if($row['ctl']==0){ echo "&nbsp;"; }else{ echo $row['ctl']; } $ctlsum+=$row['ctl']; ?>
                </div></td>
                <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row[vci]==0){ echo "&nbsp;"; }else{ echo $row[vci]; } $vcisum=$vcisum+$row["vci"]; ?>
                </div></td>
                <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row[vsi]==0){ echo "&nbsp;"; }else{ echo $row[vsi]; } $vsisum=$vsisum+$row["vsi"]; ?>
                </div></td>
                <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row[km]==0){ echo "&nbsp;"; }else{ echo $row[km]; } $kmsum=$kmsum+$row["km"]; ?>
                </div></td>
                <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row[manejo]==0){ echo "&nbsp;"; }else{ echo $row[manejo]; } $manejosum=$manejosum+$row["manejo"]; ?>
                </div></td>
				<td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
				  <?php if($row[clave221]==0){ echo "&nbsp;"; }else{ echo $row[clave221]; } $clave221sum=$clave221sum+$row["clave221"]; ?>
				</div></td>
                <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row[clave277]==0){ echo "&nbsp;"; }else{ echo $row[clave277]; } $clave277sum=$clave277sum+$row["clave277"];?>
                </div></td>
                <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row[movilizacion]==0){ echo "&nbsp;"; }else{ echo $row[movilizacion]; } $movilizacionsum=$movilizacionsum+$row["movilizacion"];?>
                </div></td>
                <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php if($row['ctc7mo']==0){ echo "&nbsp;"; }else{ echo $row['ctc7mo']; } $ctc7mosum+=$row['ctc7mo']; ?>
                </div></td>
                <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php if($row['ctl7mo']==0){ echo "&nbsp;"; }else{ echo $row['ctl7mo']; } $ctl7mosum+=$row['ctl7mo']; ?>
                </div></td>
                <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row[reposo]==0){ echo "&nbsp;"; }else{ echo $row[reposo]; } $repososum=$repososum+$row["reposo"];?>
                </div></td>
                <td  bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo5"><?php echo $row[lugar]; ?></div></td>
                <td  bgcolor="#FFFFFF" class="Estilo5"><?php echo $row[observacion]; }?></td>
		      </tr>
                <tr><td width="40"  bgcolor="#FFFFFF" class="Estilo49"><div align="right" class="Estilo5">Total</div></td>
                <td width="19"  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo53"><?php echo $hdsum; ?></div></td>
                <td width="28"  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo53"><?php echo $feriadosum; ?></div></td>
                <td width="47"  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo53"><?php echo $hedsum; ?></div></td>
                <td width="61"  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo53"><?php echo $hedpsum; ?></div></td>
                <td width="41"  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo53"><?php echo $trcdsum; ?></div></td>
                <td width="32"  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo53"><?php echo $bonocturnosum; ?></div></td>
                <td width="31"  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo53"><?php echo $hensum; ?></div></td>
                <td width="72"  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo53"><?php echo $henpsum; ?></div></td>
                <td width="65"  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo53"><?php echo $trcnsum; ?></div></td>
                <td width="32"  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo53"><?php echo $ctcsum; ?></div></td>
                <td width="32"  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo53"><?php echo $ctlsum; ?></div></td>
                <td width="65"  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo53"><?php echo $vcisum; ?></div></td>
                <td width="64"  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo53"><span class="Estilo5"><?php echo $vsisum; ?></span></div></td>
		        <td width="26"  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo53"><?php echo $kmsum; ?></div></td>
                <td width="43"  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo53"><?php echo $manejosum; ?></div></td>
                <td width="36"  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo53"><?php echo $clave221sum; ?></div></td>
				<td width="39"  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo53"><?php echo $clave277sum; ?></div></td>
				<td width="29"  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo53"><?php echo $movilizacionsum; ?></div></td>
                <td width="32"  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo53"><?php echo $ctc7mosum; ?></div></td>
                <td width="32"  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo53"><?php echo $ctl7mosum; ?></div></td>
                <td width="21"  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo53"><?php echo $repososum; ?></div></td>
                <td width="57"  bgcolor="#CCCCCC" class="Estilo15">&nbsp;</td>
                <td width="103"  bgcolor="#CCCCCC" class="Estilo15">&nbsp;</td>
              </tr>
                <tr><td width="40"  bgcolor="#CCCCCC" class="Estilo49 Estilo5">&nbsp;</td>
                <td width="19"  bgcolor="#CCCCCC" class="Estilo15">&nbsp;</td>
                <td width="28"  bgcolor="#CCCCCC" class="Estilo15">&nbsp;</td>
                <td width="47"  bgcolor="#CCCCCC" class="Estilo15">&nbsp;</td>
                <td width="61"  bgcolor="#CCCCCC" class="Estilo15">&nbsp;</td>
                <td width="41"  bgcolor="#CCCCCC" class="Estilo15">&nbsp;</td>
                <td width="32"  bgcolor="#CCCCCC" class="Estilo15">&nbsp;</td>
                <td width="31"  bgcolor="#CCCCCC" class="Estilo15">&nbsp;</td>
                <td width="72"  bgcolor="#CCCCCC" class="Estilo15">&nbsp;</td>
                <td width="65"  bgcolor="#CCCCCC" class="Estilo15">&nbsp;</td>
                <td width="32"  bgcolor="#CCCCCC" class="Estilo15">&nbsp;</td>
                <td width="32"  bgcolor="#CCCCCC" class="Estilo15">&nbsp;</td>
                <td width="65"  bgcolor="#CCCCCC" class="Estilo15">&nbsp;</td>
                <td width="64"  bgcolor="#CCCCCC" class="Estilo15">&nbsp;</td>
		        <td width="26"  bgcolor="#CCCCCC" class="Estilo15">&nbsp;</td>
                <td width="43"  bgcolor="#CCCCCC" class="Estilo15">&nbsp;</td>
                <td width="36"  bgcolor="#CCCCCC" class="Estilo15">&nbsp;</td>
                <td width="39"  bgcolor="#CCCCCC" class="Estilo15">&nbsp;</td>
				<td width="29"  bgcolor="#CCCCCC" class="Estilo15">&nbsp;</td>
                <td width="32"  bgcolor="#CCCCCC" class="Estilo15">&nbsp;</td>
                <td width="32"  bgcolor="#CCCCCC" class="Estilo15">&nbsp;</td>
                <td width="21"  bgcolor="#CCCCCC" class="Estilo15">&nbsp;</td>
                <td width="57"  bgcolor="#CCCCCC" class="Estilo15">&nbsp;</td>
                <td width="103"  bgcolor="#CCCCCC" class="Estilo15">&nbsp;</td>
              </tr>
                  
                <tr><td width="40" bgcolor="#FFFFFF" class="Estilo49 Estilo5"><div align="center">D&Iacute;A</div>
	              <div align="center"></div></td>
                <td width="19" bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo38">004</div></td>
                <td width="28" bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo38">087</div></td>
                <td width="47" bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo38">046</div></td>
                <td width="61" bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo38">046</div></td>
                <td width="41" bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo38">046</div></td>
                <td width="32" bgcolor="#FFFFFF" class="Estilo15"><div align="center">060</div></td>
                <td width="31" bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo38">047</div></td>
                <td width="72" bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo38">047</div></td>
                <td width="65" bgcolor="#FFFFFF" class="Estilo15"><div align="center">047</div></td>
                <td width="32" bgcolor="#FFFFFF" class="Estilo15"><div align="center">0,30</div></td>
                <td width="32" bgcolor="#FFFFFF" class="Estilo15"><div align="center">0,50</div></td>
                <td width="65" bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo38">344</div></td>
                <td width="64" bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo38">363</div></td>
		        <td width="26" bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo38">362</div></td>
                <td width="43" bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo38">062</div></td>
                <td width="36" bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo38">221</div></td>
                <td width="39" bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo38">277</div></td>
				<td width="29" bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo38">359</div></td>
                <td width="32" bgcolor="#FFFFFF" class="Estilo15"><div align="center">0,30</div></td>
                <td width="32" bgcolor="#FFFFFF" class="Estilo15"><div align="center">0,50</div></td>
                <td width="21" bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo38">085</div></td>
				<td width="57" bgcolor="#CCCCCC" class="Estilo15">&nbsp;</td>
                <td width="103"  bgcolor="#CCCCCC" class="Estilo15">&nbsp;</td>
              </tr>
                <tr><td width="40"  bgcolor="#FFFFFF" class="Estilo49"><span class="Estilo5">
                  <?php
$fechamas6=suma_fechas($fechaini, 6);

$day7=substr($fechamas6,0,2);
$month7=substr($fechamas6,3,2);
$year7=substr($fechamas6,6,4);

$newfecha7=$year7."-".$month7."-".$day7;
echo '<input name="newfecha7" type="hidden" value="'.$year7."-".$month7."-".$day7.'">';

$result7 = mysql_query("select * from jornada where ci='$ci' and fecha='$newfecha7'");

while($row=mysql_fetch_array($result7))
{
switch($row['tipodia'])
{
case 2:
echo "6to Dia";
break;

case 3:
echo "7mo Dia";
break;

default:
$dia7_semana=date ("l", mktime(0, 0, 0,$month7, $day7, $year7));
if ($dia7_semana=="Monday") echo $dia7="Lunes";
if ($dia7_semana=="Tuesday") echo $dia7="Martes";
if ($dia7_semana=="Wednesday") echo $dia7="Mi&eacute;rcoles";
if ($dia7_semana=="Thursday") echo $dia7="Jueves";
if ($dia7_semana=="Friday") echo $dia7="Viernes";
if ($dia7_semana=="Saturday") echo $dia7="S&aacute;bado";
if ($dia7_semana=="Sunday") echo $dia7="Domingo";
break;
}
?>
                </span></td>
                <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php  if($row[hd]==0) { echo "&nbsp;"; }else{ echo $row[hd]; } ?>
                </div></td>
                <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row[feriado]==0){ echo "&nbsp;"; }else{ echo $row[feriado]; } ?>
                </div></td>
                <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row[hed]==0){ echo "&nbsp;"; }else{ echo $row[hed]; } $hedsum=$hedsum+$row["hed"]; ?>
                </div></td>
                <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row[hedp]==0){ echo "&nbsp;"; }else{ echo $row[hedp]; } ?>
                </div></td>
                <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row[trcd]==0){ echo "&nbsp;"; }else{ echo $row[trcd]; } ?>
                </div></td>
                <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row["bonocturno"]==0){ echo "&nbsp;"; }else{ echo $row["bonocturno"]; } ?>
                </div></td>
                <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row[hen]==0){ echo "&nbsp;"; }else{ echo $row[hen]; } ?></div></td>
                <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php if($row[henp]==0){ echo "&nbsp;"; }else{ echo $row[henp]; } ?>
                </div></td>
                <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php if($row[trcn]==0){ echo "&nbsp;"; }else{ echo $row[trcn]; } ?>
                </div></td>
                <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row['ctc']==0){ echo "&nbsp;"; }else{ echo $row['ctc']; } ?>
                </div></td>
                <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row['ctl']==0){ echo "&nbsp;"; }else{ echo $row['ctl']; } $ctlsum+=$row['ctl']; ?>
                </div></td>
                <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row[vci]==0){ echo "&nbsp;"; }else{ echo $row[vci]; } ?>
                </div></td>
                <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row[vsi]==0){ echo "&nbsp;"; }else{ echo $row[vsi]; } ?>
                </div></td>
                <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row[km]==0){ echo "&nbsp;"; }else{ echo $row[km]; } ?></div></td>
                <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row[manejo]==0){ echo "&nbsp;"; }else{ echo $row[manejo]; } ?>
                </div></td>
				<td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
				  <?php if($row[clave221]==0){ echo "&nbsp;"; }else{ echo $row[clave221]; } ?>
				</div></td>
                <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row[clave277]==0){ echo "&nbsp;"; }else{ echo $row[clave277]; } ?>
                </div></td>
                <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row[movilizacion]==0){ echo "&nbsp;"; }else{ echo $row[movilizacion]; } ?>
                </div></td>
                <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php if($row['ctc7mo']==0){ echo "&nbsp;"; }else{ echo $row['ctc7mo']; } ?>
                </div></td>
                <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php if($row['ctl7mo']==0){ echo "&nbsp;"; }else{ echo $row['ctl7mo']; } ?>
                </div></td>
                <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                  <?php if($row[reposo]==0){ echo "&nbsp;"; }else{ echo $row[reposo]; } ?>
                </div></td>
                <td bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo5"><?php echo $row[lugar]; ?></div></td>
                <td bgcolor="#FFFFFF" class="Estilo5"><?php echo $row[observacion]; }?></td>
		      </tr>
              </table>
              <table width="1195" border="1">
                <tr>
                  <td width="153" height="25" class="Estilo56"><div align="center" class="Estilo38">TRABAJADOR</div></td>
                  <td width="150" class="Estilo56"><div align="center"><span class="Estilo38"><span class="Estilo38"><span class="Estilo38"></span></span></span></div></td>
                  <td width="142" class="Estilo56"><div align="center" class="Estilo38">SUPERVISOR</div></td>
                  <td width="105" class="Estilo56"><div align="center"><span class="Estilo38"><span class="Estilo38"><span class="Estilo38"></span></span></span></div></td>
                  <td width="158" class="Estilo56"><div align="center" class="Estilo38">JEFE DE UNIDAD </div></td>
                  <td width="126" class="Estilo56"><div align="center"><span class="Estilo38"><span class="Estilo38"><span class="Estilo38"></span></span></span></div></td>
                  <td width="168" class="Estilo56"><div align="center" class="Estilo38">Coordinador</div></td>
                  <td width="141" class="Estilo56"><div align="center"><span class="Estilo38"><span class="Estilo38"><span class="Estilo38"></span></span></span></div></td>
                </tr>
              </table>
              <p align="right"><img src="images/logosarts.JPG" width="206" height="103"></p>
          </div>          </td>
        </tr>
    </table>
    <p>
   
    </p>
    <p>&nbsp;</p>
  </div>
<?php
}

	echo '<input name="fechaini" type="hidden" value="'.$fechaini.'">';
	echo '<input name="fecha_fin" type="hidden" value="'.$fechafin.'">';
	echo '<input name="grupo_traba" type="hidden" value="'.$_POST[grupo_traba].'">';
	?>
<table width="356" height="39" align="center" border="1">
  <tr bgcolor="#FFFFFF" bordercolor="#0000FF">
      <td width="61" class="t12b Estilo5"><div align="center">Seleccione</div></td>
    <td width="71" bgcolor="#FFFFFF" class="t12b Estilo5"><div align="center">C.I.</div></td>
    <td width="202" bgcolor="#FFFFFF" class="t12b Estilo5"><div align="center">Apellidos y Nombres</div></td>
	</tr>
   <?php
	$grupo_traba=$_POST['grupo_traba'];
   $query1=mysql_query("SELECT * FROM traba WHERE jefatura = '$grupo_traba' and condicion='1' ORDER BY apellidos ASC");
	while ($row=mysql_fetch_array($query1))
		{
		$query2=mysql_query("SELECT * FROM jornada WHERE jefatura = '$grupo_traba' and ci='".$row[ci]."'  and fecha BETWEEN '$newfecha1' AND '$newfecha7'");
		if(mysql_num_rows($query2)!=0)
			{
			$n=$n+1;
			//----------------------------------
			echo '<tr><td><center><input type="checkbox" name="ci[]" value="'.$row[ci].'"></center></td><td class="t12b"><center>'.$row[ci].'</center></td><td class="t12b">'.$row[apellidos].", ".$row[nombres].'</td>';?></tr>
			<?php
			//----------------------------------
			}else{
			echo '<tr><td class="t12b"><strong><center>X</center></strong></td><td class="t12b"><center>'.$row[ci].'</center></td><td class="t12b">'.$row[apellidos].", ".$row[nombres].'</td></tr>';
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
	  <?php
	}else{
	?>
<tr>
    <td class="t12b Estilo5">
      <center class="Estilo5">
        <span class="Estilo5"><strong>          X          </strong></span>
      </center>
    <td class="t12b Estilo5"><div align="right" class="Estilo5"><strong>Todos</strong></div></td>
    <td class="t12b Estilo5"><div align="left" class="Estilo5"><strong>los trabajadores pendientes</strong></div></td>
    </tr>
  <?php
}
?>
    </table>
	</br><table width="1237" height="27" border="0">
  <tr>
    <td width="1231"><div align="center">
      <input name="submit" type="submit" class="Estilo48" style="background:#FFB400; font-size: 14px; font-weight: bold" onClick="enviar()" value="IMPRIMIR">
    </div></td>
  </tr>
</table>
</form>
  <h2 align="center" class="Estilo55">&nbsp;</h2>
  <h2 align="center" class="Estilo2 "><span class="Estilo50">&iquest;Desea volver?</span></h2>
  <div align="center">
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
            <param name="BGCOLOR" value="">
            <param name="movie" value="button19.swf">
            <param name="quality" value="high">
            <embed src="button19.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="103" height="24" ></embed>
            </object></td>
        </tr>
      </table>
</div>
    <p></td>
</p>
<?php
mysql_free_result($result1);
mysql_free_result($result2);
mysql_free_result($result3);
mysql_free_result($result4);
mysql_free_result($result5);
mysql_free_result($result6);
mysql_free_result($result7);
}

?>
</BODY>
</HTML>