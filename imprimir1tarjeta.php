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
?>
<HTML>
<HEAD>
<TITLE>Imprimir Tarjeta desde el <?php echo $fechaini; ?>. Sistema ARTS Online</TITLE>
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
.Estilo3 {color: #0033FF}
.Estilo5 {font-size: 12px}
.Estilo15 {font-size: 9px}
.Estilo38 {font-size: 10px}
.Estilo47 {font-weight: bold; font-family: tahoma;}
.Estilo48 {font-family: tahoma}
.Estilo49 {text-transform: uppercase; text-decoration: none; font-family: tahoma; font-weight: bold;}
.Estilo50 {color: #000000}
.Estilo51 {font-size: 12px; color: #000000; }
.Estilo52 {font-size: 10px; color: #000000; }
.Estilo54 {font-size: 7px; }
.Estilo56 {font-size: 11px}
.Estilo57 {font-weight: bold}
.Estilo58 {font-size: 10px; font-weight: bold; }
.Estilo59 {font-size: 9px; font-weight: bold; }
.Estilo60 {color: #FF0000}
a:link {
	color: #FFFFFF;
}
a:visited {
	color: #FFFFFF;
}
a:hover {
	color: #FFFFFF;
}
a:active {
	color: #FFFFFF;
}
.Estilo63 {font-size: 14px}
.Estilo64 {font-size: 14px; font-weight: bold; font-family: Geneva, Arial, Helvetica, sans-serif; }
.Estilo65 {font-family: Geneva, Arial, Helvetica, sans-serif}
-->
</style>
</HEAD>

<BODY BGCOLOR=#FFFFFF background="images/bgb.gif" LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0 tracingsrc="images/-downdis.gif" tracingopacity="100" oncontextmenu="return false" onLoad="window.print()">


<?php
include ("includes/bdkey.php");

if($_POST['ci']==0)
		{
		?>
        </h1>
    
<div align="center">
  <h1 align="center" class="Estilo60"><u>Atenci&oacute;n</u></h1>
</div>
        <h2 align="center" class="Estilo60">No se seleccion&oacute; ning&uacute;n trabajador</h2>
        <h2 align="center" class="Estilo60">por favor chequee de nuevo</h2>
        
          <div align="center">
            <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="103" height="24">
              <param name="movie" value="button31.swf">
              <param name="quality" value="high">
              <embed src="button31.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="103" height="24" ></embed>
            </object>
            </span>
            </p>
</div>
          <p align="center" class="Estilo54">
          <span class="Estilo55 Estilo53">
          <label class="Estilo57">          </label>
        </span></p>
      
          <?php
}else{
?>
<form name="form2" method="post" action="verifica_datos_tarjeta.php">
<div align="center">
          
<?php
foreach ($_POST['ci'] as $ci){
	$query1 = mysql_query("select * from traba where ci='$ci'");
	while ($row=mysql_fetch_array($query1))
		{
			$region=$row['region'];
			$direccion=$row['direccion'];
			$gerencia=$row['gerencia'];
			$coordinacion=$row['coordinacion'];
			$id_estructura=$row['id_estructura'];
			$estructura=$row['estructura'];
			$jefatura=$row['jefatura'];
			$cargo=$row['cargo'];
			$apellidos=$row['apellidos'];
			$nombres=$row['nombres'];
			$ci=$row['ci'];
			$horario=$row['horario'];
			$estatus=$row['estatus'];
			$manejo=$row['manejo'];
	}
?>
  </h2>
<div align="center">     
 
    <table width="977" height="618" border="0">
      <tr>
        <td width="995" height="612"><table width="1101" border="0">
          <tr>
            <td width="171" height="125"><div align="center"><span class="Estilo3 Estilo5 Estilo102"><img src="images/logocorpoelec.jpg"></span></div></td>
            <td width="756"><div align="center" class="Estilo2 t12b Estilo50"><em><strong>RELACION DE SOBRETIEMPO (N&Oacute;MINA DIARIA)</strong></em></div></td>
            <td width="160"><div align="center"><img src="images/cadafelogo.gif" width="124" height="83"><span class="Estilo3 Estilo5 Estilo102"><strong>
              <?php
			echo $region;
		  ?>
            </strong></span></div></td>
          </tr>
          </table>
           <table width="1101" border="1">
             <tr>
               <td width="147" height="22"  bgcolor="#FFFFFF" class="t12g"><span class="Estilo50"><strong>DIRECCI&Oacute;N</strong></span></td>
                <td width="188"  bgcolor="#FFFFFF" class="t12g"><span class="Estilo50"><strong>
                  <label></label>
                  <strong>
                  <?php
			echo '<u>'.$direccion.'</u>';
		  ?>
               </strong></strong></span></td>
                <td width="130"  bgcolor="#FFFFFF" class="t12g"><span class="Estilo50"><strong>GERENCIA</strong></span></td>
                <td width="295"  bgcolor="#FFFFFF" class="t12g"><span class="Estilo50"><strong>
                  <label></label>
                  <strong>
               <?php
			echo '<u>'.$gerencia.'</u>';
		  ?></strong></strong></span></td>
               <td width="110"  bgcolor="#FFFFFF" class="t12g"><div align="center" class="Estilo5 Estilo101 Estilo50"><strong>A&Ntilde;O</strong></div></td>
		        
        <td width="191"  bgcolor="#FFFFFF" class="t12g Estilo50"><span class="Estilo5 Estilo102"><strong>
          <label></label>
          </strong></span><div align="center"><?php echo date("Y"); ?></div></td>
             </tr>
             <tr>
               <td width="147" height="26"  bgcolor="#FFFFFF" class="t12g"><span class="Estilo50"><strong>COORDINACI&Oacute;N</strong></span></td>
                <td width="188"  bgcolor="#FFFFFF" class="t12g"><span class="Estilo50"><strong>
                  <label></label>
                  <span class="Estilo5 Estilo102"><strong>
                    <?php
		  echo '<u>'.$coordinacion.'</u>';
		  ?>
               </strong></span></strong></span></td>
                <td width="130"  bgcolor="#FFFFFF" class="t12g"><strong class="t12g Estilo50">grupo de trabajo</strong></td>
                <td width="295"  bgcolor="#FFFFFF" class="t12g"><span class="Estilo50"><strong>
                  <label></label>
                  <strong><span class="Estilo5 Estilo102"><strong>
               <?php
		  echo '<u>'.$estructura.'</u>';
		  ?></strong></span></strong></strong></span></td>
               <td width="110"  bgcolor="#FFFFFF" class="t12g"><div align="center" class="Estilo5 Estilo102 Estilo50"><strong>MES</strong></div></td>
                <td width="191"  bgcolor="#FFFFFF" class="t12g Estilo50"><strong>
                  <label></label>
                  </strong>                  <div align="center">
                    <strong>
				<?php 				
				echo '<u>'.$_POST['mes'].'</u>';
				?>
               </strong></div></td>
             </tr>
          </table>
            <table width="1101" border="1">
              <tr>
                <td width="164" class="t12g Estilo5 Estilo50">SOBRETIEMPO DEL</td>
        <td width="371" class="t12g Estilo5 Estilo50">
		<?php
		$fechaini=$_POST['fechaini'];
		echo '<u>'.$fechaini.'</u>';
		?>
		<span class="Estilo14">AL 
        <?php
		$fecha_fin=$_POST['fecha_fin'];
		echo '<u>'.$fecha_fin.'</u>';
		?>
        </span></td>
        <td width="347" class="t12g Estilo3 Estilo5"><div align="right" class="Estilo51">SEMANA N&ordm;</div></td>
	    <td width="191" class="t12g Estilo3 Estilo5"><div align="center" class="Estilo50">
	      <?php 
		$day1=substr($fechaini,0,2);
		$month1=substr($fechaini,3,2);
		$year1=substr($fechaini,6,4);
		
		// Fecha dia n.-1
		$newfecha[1]=$year1.'-'.$month1.'-'.$day1;
		
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
		?>
	    </div>		</td>
      </tr>
          </table>
            <table width="1101" border="0">
                <tr>
                  <td width="489" height="23" class="t12g"><div align="right" class="Estilo45 Estilo50">
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
                  <td width="290" class="t12g"><div align="right" class="Estilo45 Estilo50">
                    <div align="left"><span class="Estilo48">C.I.:</span><span class="Estilo102 "><strong>
                      <?php
		  echo '<u>'.$ci.'</u>';
		  ?>
                    </strong></span></div>
                  </div></td>
                  <td width="308" class="t12g"><div align="right" class="Estilo45 Estilo50">
                    <div align="left" class="Estilo48">AUTORIZADO MANEJO:<strong>
                      <?php
		 echo '<u>'.$manejo.'</u>';
		 ?>
         </strong></div>
         </div></td>
         </tr>
         <tr>
         <td height="20" class="t12g"><div align="left" class="Estilo45 Estilo50"><strong>CARGO:<span class="Estilo48"><span class="Estilo102 "><strong><strong><strong>
				<?php
				echo '<u>'.$cargo.'</u>';
				?>
				(</strong>
				<?php
				echo '<u>'.$estatus.'</u>';
				?>
                ) </strong></strong></span></span></strong></div></td>
                <td class="t12g"><div align="left" class="t12g Estilo5 Estilo50">HORARIO DE TRABAJO:<span class="Estilo102 "><strong><strong>
				<?php
				// Fecha dia n.-1
				$newfecha1=$_POST['newfecha1'];
				$newfecha[1]=$newfecha1;
		
				$query1 = mysql_query("select horariotarjeta from jornada where ci='$ci' and fecha='$newfecha1'");
				while($row=mysql_fetch_array($query1))
				{
				echo '<u>'.$row[horariotarjeta].'</u>';
				}
				mysql_free_result($query1);
		  	?>
			</strong>
			</strong></span> </div></td>
			<td class="t12g"><div align="left" class="Estilo101 Estilo5 Estilo50"><strong>ESTRUCTURA:<strong><span class="Estilo49"><span class="Estilo102 "><strong>
            <?php
		  echo '<u>'.$id_estructura.'</u>';
		  ?>
                  </strong></span></span></strong></strong></div></td>
              </tr>
          </table>
            <div align="left">
                
              <table width="1101" border="1">
                <tr>
                  <td width="42" rowspan="2" bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo92 Estilo105 Estilo102 Estilo5">
                      <div align="center" class="Estilo102">D&Iacute;A</div>
                </div></td>
                <td width="23" rowspan="2"  bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo92 Estilo105 Estilo102 Estilo15 ">
                  <div align="center">
                    <p class="Estilo102">H.D. <strong>004</strong></p>
                  </div>
                </div></td>
                <td width="28" rowspan="2"  bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo92 Estilo105 Estilo102 Estilo15 ">
                  <div align="center" class="Estilo102">D&Iacute;A FER. TRAB  <strong>087</strong> </div>
                </div></td>
                <td width="41" rowspan="2"  bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo92 Estilo105 Estilo102 Estilo15 ">
                  <div align="center" class="Estilo102">H.E. DIURNA <strong>052 </strong></div>
                </div></td>
                <td width="54" rowspan="2"  bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo92 Estilo105 Estilo102 Estilo15 ">
                  <div align="center" class="Estilo102">H.E. DIURNAS GUARDIAS PROGRA. <strong>052 </strong></div>
                </div></td>
                <td width="41" rowspan="2"  bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo93 Estilo102 Estilo15 ">
                  <p>TIEMPO REPOSO COMIDA DIURN. <strong>055 </strong></p>
                  </div></td>
                <td width="32" rowspan="2"  bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo15 Estilo102 Estilo93">
                  <p>BONO NOCT <strong>051 </strong></p>
                  </div></td>
                <td width="31" rowspan="2"  bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo15 Estilo102 Estilo93">H.E. NOCT <strong>053</strong> </div></td>
                <td width="54" rowspan="2"  bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo15 Estilo102 Estilo93">H.E. NOCT. GUARDIA PROGRAM. <strong>053 </strong></div></td>
                <td width="41" rowspan="2"  bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo15 Estilo102 Estilo93">TIEMPO REPOSO COMIDA NOCT. <strong>056</strong></div></td>
                <td colspan="2"  bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo15 Estilo102 Estilo93">CESTA TICKET</div></td>
                <td colspan="3"  bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo15 Estilo102 Estilo93">VI&Aacute;TICO </div>
                    <div align="center" class="Estilo15 Estilo110 Estilo93"></div></td>
                <td width="28" rowspan="2"  bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo15 Estilo138">MAN. <strong>178</strong></div></td>
				<td rowspan="2" bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo15 Estilo138">CLAVE <strong>221</strong></div></td>
				<td rowspan="2" bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo15 Estilo138">CLAVE <strong>277</strong></div></td>
                <td width="26" rowspan="2"  bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo15 Estilo138">
                  <p>MOV <strong>302</strong></p>
                  </div></td>
                <td colspan="2"  bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo15 Estilo102 Estilo93">CESTA TICKET</div></td>
                <td width="21" rowspan="2"  bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo15 Estilo138">REP <strong>045</strong> </div></td>
                <td width="48" rowspan="2"  bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo15 Estilo138">LUGAR DE VI&Aacute;TICO</div></td>
                <td width="112" rowspan="2"  bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo15 Estilo138">OBSERVACI&Oacute;N</div></td>
              </tr>
                <tr>
                  <td width="25"  bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo15 Estilo102 Estilo93">0,30 </div></td>
                  <td width="23"  bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo15 Estilo102 Estilo93">0,50</div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo15 Estilo102 Estilo93">C/INCIDENC. 345 </div></td>
                  <td width="61"  bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo15 Estilo102 Estilo93">S/INCIDENC 363 </div></td>
                  <td width="31"  bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo15 Estilo110 Estilo93">K.M. 347 </div></td>
                  <td width="23"  bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo15 Estilo102 Estilo93">0,30</div></td>
                  <td width="23"  bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo15 Estilo102 Estilo93">0,50</div></td>
                </tr>
                  <tr><td width="42"  bgcolor="#FFFFFF" class="Estilo49 Estilo56">
<?php

// Fecha dia n.- 2
$newfecha[2]=$_POST['newfecha2'];

// Fecha dia n.- 3
$newfecha[3]=$_POST['newfecha3'];

// Fecha dia n.- 4
$newfecha[4]=$_POST['newfecha4'];

// Fecha dia n.- 5
$newfecha[5]=$_POST['newfecha5'];

// Fecha dia n.- 6
$newfecha[6]=$_POST['newfecha6'];

// Fecha dia n.- 7
$newfecha[7]=$_POST['newfecha7'];

// ACOMODO DE FECHAS
$traba7mo=0;
$cont1=1;

while($cont1<=7)
	{
	$results = mysql_query("SELECT * FROM jornada WHERE ci='$ci' and fecha='$newfecha[$cont1]'");
	while($row=mysql_fetch_array($results))
		{
		if($row[tipodia]==3 or $row[tipodia]==11 or $row[tipodia]==13 and $traba7mo==0)
			{
			$newfecha[8]=$newfecha[$cont1];
			$newfecha[$cont1]=0;
			$traba7mo=1;
			}
		}
	
	$cont1=$cont1+1;
	}

$cont2=1;
while($cont2<=7)
	{
	if($newfecha[$cont2]==0)
		{
		$newfecha[$cont2]=$newfecha[$cont2+1];
		$newfecha[$cont2+1]=0;
		}
	$cont2=$cont2+1;
	}
	
$cont3=1;
while($cont3<=7)
	{
	$querymain = mysql_query("select * from jornada where ci='$ci' and fecha='$newfecha[$cont3]'");
		while($row=mysql_fetch_array($querymain))
			{
			$hd[$cont3]=$row[hd];
			$feriado[$cont3]=$row[feriado];
			$hed[$cont3]=$row[hed];
			$hedp[$cont3]=$row[hedp];
			$trcd[$cont3]=$row[trcd];
			$bonocturno[$cont3]=$row[bonocturno];
			$hen[$cont3]=$row[hen];
			$henp[$cont3]=$row[henp];
			$trcn[$cont3]=$row[trcn];
			$vci[$cont3]=$row[vci];
			$vsi[$cont3]=$row[vsi];
			$ctc[$cont3]=$row[ctc];
			$ctl[$cont3]=$row[ctl];
			$ctc7mo[$cont3]=$row[ctc7mo];
			$ctl7mo[$cont3]=$row[ctl7mo];
			$kilometraje[$cont3]=$row[kilometraje];
			$manejo[$cont3]=$row[manejo];
			$clave221[$cont3]=$row[clave221];
			$clave277[$cont3]=$row[clave277];
			$movilizacion[$cont3]=$row[movilizacion];
			$reposo[$cont3]=$row[reposo];
			$lugar[$cont3]=$row[lugar];
			$km[$cont3]=$row[km];
			$observacion[$cont3]=$row[observacion];
			
			switch($row['tipodia'])
				{
				case 2:
					$nombredia[$cont3]="6to Dia";
				break;
				
				case 3:
					$nombredia[$cont3]="7mo Dia";
				break;
				
				default:
					$day=substr($newfecha[$cont3],8,2);
					$month=substr($newfecha[$cont3],5,2);
					$year=substr($newfecha[$cont3],0,4);
					
					$dia1_semana=date ("l", mktime(0, 0, 0,$month, $day, $year));
					if ($dia1_semana=="Monday") $nombredia[$cont3]="Lunes";
					if ($dia1_semana=="Tuesday") $nombredia[$cont3]="Martes";
					if ($dia1_semana=="Wednesday") $nombredia[$cont3]="Mi&eacute;rcoles";
					if ($dia1_semana=="Thursday") $nombredia[$cont3]="Jueves";
					if ($dia1_semana=="Friday") $nombredia[$cont3]="Viernes";
					if ($dia1_semana=="Saturday") $nombredia[$cont3]="S&aacute;bado";
					if ($dia1_semana=="Sunday") $nombredia[$cont3]="Domingo";
				break;
				}	
			}
		$cont3=$cont3+1;
		}

$querymain2 = mysql_query("SELECT horariovar FROM estruct WHERE jefatura='$jefatura'");

while($row2=mysql_fetch_array($querymain2))
	{
	$horariovar=$row2['horariovar'];
	}
if($horariovar=="0"){
	echo "Lunes";
	}else{
		echo $nombredia[1];
		}
	
//echo $day."-".$month."-".$year;

?></td>
                <td width="23"  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5"><?php $hdsum=0; if($hd[1]==0) { echo "&nbsp;"; }else{ echo $hd[1]; } $hdsum=$hdsum+$hd[1];?></div></td>
                <td width="28"  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5"><?php $feriadosum=0; if($feriado[1]==0){ echo "&nbsp;"; }else{ echo $feriado[1]; } $feriadosum=$feriadosum+$feriado[1]; ?></div></td>
                <td width="41"  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5"><?php $hedsum=0; if($hed[1]==0){ echo "&nbsp;"; }else{ echo $hed[1]; }  $hedsum=$hedsum+$hed[1]; ?></div></td>
                <td width="54"  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5"><?php $hedpsum=0; if($hedp[1]==0){ echo "&nbsp;"; }else{ echo $hedp[1]; } $hedpsum=$hedpsum+$hedp[1]; ?></div></td>
                <td width="41"  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5"><?php $trcdsum=0; if($trcd[1]==0){ echo "&nbsp;"; }else{ echo $trcd[1]; } $trcdsum=$trcdsum+$trcd[1]; ?></div></td>
                <td width="32"  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5"><?php $bonocturnosum=0; if($bonocturno[1]==0){ echo "&nbsp;"; }else{ echo $bonocturno[1]; } $bonocturnosum=$bonocturnosum+$bonocturno[1]; ?></div></td>
                <td width="31"  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5"><?php $hensum=0; if($hen[1]==0){ echo "&nbsp;"; }else{ echo $hen[1]; } $hensum=$hensum+$hen[1]; ?></div></td>
                <td width="54"  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5"><?php $henpsum=0; if($henp[1]==0){ echo "&nbsp;"; }else{ echo $henp[1]; } $henpsum=$henpsum+$henp[1]; ?></div></td>
                <td width="41"  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5"><?php $trcnsum=0; if($trcn[1]==0){ echo "&nbsp;"; }else{ echo $trcn[1]; } $trcnsum=$trcnsum+$trcn[1]; ?></div></td>
                <td width="25"  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php $ctcsum=0; if($ctc[1]==0){ echo "&nbsp;"; }else{ echo $ctc[1]; } $ctcsum+=$ctc[1]; ?>
                </div></td>
                <td width="23"  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php $ctlsum=0; if($ctl[1]==0){ echo "&nbsp;"; }else{ echo $ctl[1]; } $ctlsum+=$ctl[1]; ?>
                </div></td>
                <td width="65"  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php $vcisum=0; if($vci[1]==0){ echo "&nbsp;"; }else{ echo $vci[1]; } $vcisum=$vcisum+$vci[1]; ?>
                </div></td>
                <td width="61"  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php $vsisum=0; if($vsi[1]==0){ echo "&nbsp;"; }else{ echo $vsi[1]; } $vsisum=$vsisum+$vsi[1]; ?>
                </div></td>
                <td width="31"  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php $kmsum=0; if($km[1]==0){ echo "&nbsp;"; }else{ echo $km[1]; } $kmsum=$kmsum+$km[1]; ?>
                </div></td>
                <td width="28"  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5"><?php $manejosum=0; if($manejo[1]==0){ echo "&nbsp;"; }else{ echo $manejo[1]; } $manejosum=$manejosum+$manejo[1];  ?></div></td>
				<td width="40"  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5"><?php $clave221sum=0; if($clave221[1]==0){ echo "&nbsp;"; }else{ echo $clave221[1]; } $clave221sum=$clave221sum+$clave221[1]; ?></div></td>
                <td width="40"  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5"><?php $clave277sum=0; if($clave277[1]==0){ echo "&nbsp;"; }else{ echo $clave277[1]; } $clave277sum=$clave277sum+$clave277[1]; ?></div></td>
                <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5"><?php $movilizacionsum=0; if($movilizacion[1]==0){ echo "&nbsp;"; }else{ echo $movilizacion[1]; } $movilizacionsum=$movilizacionsum+$movilizacion[1]; ?></div></td>
                <td width="23"  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php $ctc7mosum=0; if($ctc7mo[1]==0){ echo "&nbsp;"; }else{ echo $ctc7mo[1]; } $ctc7mosum+=$ctc7mo[1]; ?>
                </div></td>
                <td width="23"  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php $ctl7mosum=0; if($ctl7mo[1]==0){ echo "&nbsp;"; }else{ echo $ctl7mo[1]; } $ctl7mosum+=$ctl7mo[1]; ?>
                </div></td>
                <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5"><?php $repososum=0; if($reposo[1]==0){ echo "&nbsp;"; }else{ echo $reposo[1]; } $repososum=$repososum+$reposo[1];?></div></td>
                <td width="48"  bgcolor="#FFFFFF" class="Estilo51"><div align="center" class="Estilo54"><strong><?php echo $lugar[1]; ?></strong></div></td>
                <td width="112"  bgcolor="#FFFFFF" class="Estilo51"><div align="center"><strong><span class="Estilo54"><?php echo "km=".$km[1].", ".$observacion[1]; ?></span></strong></div></td>
              </tr>
                <tr><td width="42"  bgcolor="#FFFFFF" class="Estilo49 Estilo56"><?php echo $nombredia[2]; ?></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php if($hd[2]==0) { echo "&nbsp;"; }else{ echo $hd[2]; } $hdsum=$hdsum+$hd[2];?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php if($feriado[2]==0){ echo "&nbsp;"; }else{ echo $feriado[2]; } $feriadosum=$feriadosum+$feriado[2]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php if($hed[2]==0){ echo "&nbsp;"; }else{ echo $hed[2]; }  $hedsum=$hedsum+$hed[2]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php if($hedp[2]==0){ echo "&nbsp;"; }else{ echo $hedp[2]; } $hedpsum=$hedpsum+$hedp[2]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php if($trcd[2]==0){ echo "&nbsp;"; }else{ echo $trcd[2]; } $trcdsum=$trcdsum+$trcd[2]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php if($bonocturno[2]==0){ echo "&nbsp;"; }else{ echo $bonocturno[2]; } $bonocturnosum=$bonocturnosum+$bonocturno[2]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php if($hen[2]==0){ echo "&nbsp;"; }else{ echo $hen[2]; } $hensum=$hensum+$hen[2]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php if($henp[2]==0){ echo "&nbsp;"; }else{ echo $henp[2]; } $henpsum=$henpsum+$henp[2]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php if($trcn[2]==0){ echo "&nbsp;"; }else{ echo $trcn[2]; } $trcnsum=$trcnsum+$trcn[2]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($ctc[2]==0){ echo "&nbsp;"; }else{ echo $ctc[2]; } $ctcsum+=$ctc[2]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($ctl[2]==0){ echo "&nbsp;"; }else{ echo $ctl[2]; } $ctlsum+=$ctl[2]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($vci[2]==0){ echo "&nbsp;"; }else{ echo $vci[2]; } $vcisum=$vcisum+$vci[2]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($vsi[2]==0){ echo "&nbsp;"; }else{ echo $vsi[2]; } $vsisum=$vsisum+$vsi[2]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($km[2]==0){ echo "&nbsp;"; }else{ echo $km[2]; } $kmsum=$kmsum+$km[2]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php if($manejo[2]==0){ echo "&nbsp;"; }else{ echo $manejo[2]; } $manejosum=$manejosum+$manejo[2];  ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php if($clave221[2]==0){ echo "&nbsp;"; }else{ echo $clave221[2]; } $clave221sum=$clave221sum+$clave221[2]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php if($clave277[2]==0){ echo "&nbsp;"; }else{ echo $clave277[2]; } $clave277sum=$clave277sum+$clave277[2]; ?>
                  </div></td>
                  <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php if($movilizacion[2]==0){ echo "&nbsp;"; }else{ echo $movilizacion[2]; } $movilizacionsum=$movilizacionsum+$movilizacion[2]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($ctc7mo[2]==0){ echo "&nbsp;"; }else{ echo $ctc7mo[2]; } $ctc7mosum+=$ctc7mo[2]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($ctl7mo[2]==0){ echo "&nbsp;"; }else{ echo $ctl7mo[2]; } $ctl7mosum+=$ctl7mo[2]; ?>
                  </div></td>
                  <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php if($reposo[2]==0){ echo "&nbsp;"; }else{ echo $reposo[2]; } $repososum=$repososum+$reposo[2];?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo51"><div align="center" class="Estilo54"><strong><?php echo $lugar[2]; ?></strong></div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo51"><div align="center"><strong><span class="Estilo54"><?php echo "km=".$km[2].", ".$observacion[2]; ?></span></strong></div></td>
                </tr>
                <tr><td width="42"  bgcolor="#FFFFFF" class="Estilo49 Estilo56"><?php echo $nombredia[3]; ?></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($hd[3]==0) { echo "&nbsp;"; }else{ echo $hd[3]; } $hdsum=$hdsum+$hd[3];?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($feriado[3]==0){ echo "&nbsp;"; }else{ echo $feriado[3]; } $feriadosum=$feriadosum+$feriado[3]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($hed[3]==0){ echo "&nbsp;"; }else{ echo $hed[3]; }  $hedsum=$hedsum+$hed[3]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($hedp[3]==0){ echo "&nbsp;"; }else{ echo $hedp[3]; } $hedpsum=$hedpsum+$hedp[3]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($trcd[3]==0){ echo "&nbsp;"; }else{ echo $trcd[3]; } $trcdsum=$trcdsum+$trcd[3]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($bonocturno[3]==0){ echo "&nbsp;"; }else{ echo $bonocturno[3]; } $bonocturnosum=$bonocturnosum+$bonocturno[3]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($hen[3]==0){ echo "&nbsp;"; }else{ echo $hen[3]; } $hensum=$hensum+$hen[3]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($henp[3]==0){ echo "&nbsp;"; }else{ echo $henp[3]; } $henpsum=$henpsum+$henp[3]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($trcn[3]==0){ echo "&nbsp;"; }else{ echo $trcn[3]; } $trcnsum=$trcnsum+$trcn[3]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($ctc[3]==0){ echo "&nbsp;"; }else{ echo $ctc[3]; } $ctcsum+=$ctc[3]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($ctl[3]==0){ echo "&nbsp;"; }else{ echo $ctl[3]; } $ctlsum+=$ctl[3]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($vci[3]==0){ echo "&nbsp;"; }else{ echo $vci[3]; } $vcisum=$vcisum+$vci[3]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($vsi[3]==0){ echo "&nbsp;"; }else{ echo $vsi[3]; } $vsisum=$vsisum+$vsi[3]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($km[3]==0){ echo "&nbsp;"; }else{ echo $km[3]; } $kmsum=$kmsum+$km[3]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($manejo[3]==0){ echo "&nbsp;"; }else{ echo $manejo[3]; } $manejosum=$manejosum+$manejo[3];  ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($clave221[3]==0){ echo "&nbsp;"; }else{ echo $clave221[3]; } $clave221sum=$clave221sum+$clave221[3]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($clave277[3]==0){ echo "&nbsp;"; }else{ echo $clave277[3]; } $clave277sum=$clave277sum+$clave277[3]; ?>
                  </div></td>
                  <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($movilizacion[3]==0){ echo "&nbsp;"; }else{ echo $movilizacion[3]; } $movilizacionsum=$movilizacionsum+$movilizacion[3]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($ctc7mo[3]==0){ echo "&nbsp;"; }else{ echo $ctc7mo[3]; } $ctc7mosum+=$ctc7mo[3]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($ctl7mo[3]==0){ echo "&nbsp;"; }else{ echo $ctl7mo[3]; } $ctl7mosum+=$ctl7mo[3]; ?>
                  </div></td>
                  <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($reposo[3]==0){ echo "&nbsp;"; }else{ echo $reposo[3]; } $repososum=$repososum+$reposo[3];?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo51"><div align="center" class="Estilo54"><strong><?php echo $lugar[3]; ?></strong></div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo51"><div align="center"><strong><span class="Estilo54"><?php echo "km=".$km[3].", ".$observacion[3]; ?></span></strong></div></td>
                </tr>
			  <tr><td width="42"  bgcolor="#FFFFFF" class="Estilo49 Estilo56"><?php echo $nombredia[4]; ?></td>
                <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php if($hd[4]==0) { echo "&nbsp;"; }else{ echo $hd[4]; } $hdsum=$hdsum+$hd[4];?>
                </div></td>
                <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php if($feriado[4]==0){ echo "&nbsp;"; }else{ echo $feriado[4]; } $feriadosum=$feriadosum+$feriado[4]; ?>
                </div></td>
                <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php if($hed[4]==0){ echo "&nbsp;"; }else{ echo $hed[4]; }  $hedsum=$hedsum+$hed[4]; ?>
                </div></td>
                <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php if($hedp[4]==0){ echo "&nbsp;"; }else{ echo $hedp[4]; } $hedpsum=$hedpsum+$hedp[4]; ?>
                </div></td>
                <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php if($trcd[4]==0){ echo "&nbsp;"; }else{ echo $trcd[4]; } $trcdsum=$trcdsum+$trcd[4]; ?>
                </div></td>
                <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php if($bonocturno[4]==0){ echo "&nbsp;"; }else{ echo $bonocturno[4]; } $bonocturnosum=$bonocturnosum+$bonocturno[4]; ?>
                </div></td>
                <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php if($hen[4]==0){ echo "&nbsp;"; }else{ echo $hen[4]; } $hensum=$hensum+$hen[4]; ?>
                </div></td>
                <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php if($henp[4]==0){ echo "&nbsp;"; }else{ echo $henp[4]; } $henpsum=$henpsum+$henp[4]; ?>
                </div></td>
                <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php if($trcn[4]==0){ echo "&nbsp;"; }else{ echo $trcn[4]; } $trcnsum=$trcnsum+$trcn[4]; ?>
                </div></td>
                <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php if($ctc[4]==0){ echo "&nbsp;"; }else{ echo $ctc[4]; } $ctcsum+=$ctc[4]; ?>
                </div></td>
                <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php if($ctl[4]==0){ echo "&nbsp;"; }else{ echo $ctl[4]; } $ctlsum+=$ctl[4]; ?>
                </div></td>
                <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php if($vci[4]==0){ echo "&nbsp;"; }else{ echo $vci[4]; } $vcisum=$vcisum+$vci[4]; ?>
                </div></td>
                <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php if($vsi[4]==0){ echo "&nbsp;"; }else{ echo $vsi[4]; } $vsisum=$vsisum+$vsi[4]; ?>
                </div></td>
                <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php if($km[4]==0){ echo "&nbsp;"; }else{ echo $km[4]; } $kmsum=$kmsum+$km[3]; ?>
                </div></td>
                <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php if($manejo[4]==0){ echo "&nbsp;"; }else{ echo $manejo[4]; } $manejosum=$manejosum+$manejo[4];  ?>
                </div></td>
                <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php if($clave221[4]==0){ echo "&nbsp;"; }else{ echo $clave221[4]; } $clave221sum=$clave221sum+$clave221[4]; ?>
                </div></td>
                <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php if($clave277[4]==0){ echo "&nbsp;"; }else{ echo $clave277[4]; } $clave277sum=$clave277sum+$clave277[4]; ?>
                </div></td>
                <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php if($movilizacion[4]==0){ echo "&nbsp;"; }else{ echo $movilizacion[4]; } $movilizacionsum=$movilizacionsum+$movilizacion[4]; ?>
                </div></td>
                <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php if($ctc7mo[4]==0){ echo "&nbsp;"; }else{ echo $ctc7mo[4]; } $ctc7mosum+=$ctc7mo[4]; ?>
                </div></td>
                <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php if($ctl7mo[4]==0){ echo "&nbsp;"; }else{ echo $ctl7mo[4]; } $ctl7mosum+=$ctl7mo[4]; ?>
                </div></td>
                <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                    <?php if($reposo[4]==0){ echo "&nbsp;"; }else{ echo $reposo[4]; } $repososum=$repososum+$reposo[4];?>
                </div></td>
                <td  bgcolor="#FFFFFF" class="Estilo51"><div align="center" class="Estilo54"><strong><?php echo $lugar[4]; ?></strong></div></td>
                <td  bgcolor="#FFFFFF" class="Estilo51"><div align="center"><strong><span class="Estilo54"><?php echo "km=".$km[4].", ".$observacion[4]; ?></span></strong></div></td>
			  </tr>
                <tr><td width="42"  bgcolor="#FFFFFF" class="Estilo49 Estilo56"><?php echo $nombredia[5]; ?></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($hd[5]==0) { echo "&nbsp;"; }else{ echo $hd[5]; } $hdsum=$hdsum+$hd[5];?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($feriado[5]==0){ echo "&nbsp;"; }else{ echo $feriado[5]; } $feriadosum=$feriadosum+$feriado[5]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($hed[5]==0){ echo "&nbsp;"; }else{ echo $hed[5]; }  $hedsum=$hedsum+$hed[5]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($hedp[5]==0){ echo "&nbsp;"; }else{ echo $hedp[5]; } $hedpsum=$hedpsum+$hedp[5]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($trcd[5]==0){ echo "&nbsp;"; }else{ echo $trcd[5]; } $trcdsum=$trcdsum+$trcd[5]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($bonocturno[5]==0){ echo "&nbsp;"; }else{ echo $bonocturno[5]; } $bonocturnosum=$bonocturnosum+$bonocturno[5]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($hen[5]==0){ echo "&nbsp;"; }else{ echo $hen[5]; } $hensum=$hensum+$hen[5]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($henp[5]==0){ echo "&nbsp;"; }else{ echo $henp[5]; } $henpsum=$henpsum+$henp[5]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($trcn[5]==0){ echo "&nbsp;"; }else{ echo $trcn[5]; } $trcnsum=$trcnsum+$trcn[5]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($ctc[5]==0){ echo "&nbsp;"; }else{ echo $ctc[5]; } $ctcsum+=$ctc[5]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($ctl[5]==0){ echo "&nbsp;"; }else{ echo $ctl[5]; } $ctlsum+=$ctl[5]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($vci[5]==0){ echo "&nbsp;"; }else{ echo $vci[5]; } $vcisum=$vcisum+$vci[5]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($vsi[5]==0){ echo "&nbsp;"; }else{ echo $vsi[5]; } $vsisum=$vsisum+$vsi[5]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($km[5]==0){ echo "&nbsp;"; }else{ echo $km[5]; } $kmsum=$kmsum+$km[5]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($manejo[5]==0){ echo "&nbsp;"; }else{ echo $manejo[5]; } $manejosum=$manejosum+$manejo[5];  ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($clave221[5]==0){ echo "&nbsp;"; }else{ echo $clave221[5]; } $clave221sum=$clave221sum+$clave221[5]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($clave277[5]==0){ echo "&nbsp;"; }else{ echo $clave277[5]; } $clave277sum=$clave277sum+$clave277[5]; ?>
                  </div></td>
                  <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($movilizacion[5]==0){ echo "&nbsp;"; }else{ echo $movilizacion[5]; } $movilizacionsum=$movilizacionsum+$movilizacion[5]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($ctc7mo[5]==0){ echo "&nbsp;"; }else{ echo $ctc7mo[5]; } $ctc7mosum+=$ctc7mo[5]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($ctl7mo[5]==0){ echo "&nbsp;"; }else{ echo $ctl7mo[5]; } $ctl7mosum+=$ctl7mo[5]; ?>
                  </div></td>
                  <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($reposo[5]==0){ echo "&nbsp;"; }else{ echo $reposo[5]; } $repososum=$repososum+$reposo[5];?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo51"><div align="center" class="Estilo54"><strong><?php echo $lugar[5]; ?></strong></div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo51"><div align="center"><strong><span class="Estilo54"><?php echo "km=".$km[5].", ".$observacion[5]; ?></span></strong></div></td>
                </tr>
                <tr><td width="42"  bgcolor="#FFFFFF" class="Estilo49 Estilo56"><?php echo $nombredia[6]; ?></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($hd[6]==0) { echo "&nbsp;"; }else{ echo $hd[6]; } $hdsum=$hdsum+$hd[6];?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($feriado[6]==0){ echo "&nbsp;"; }else{ echo $feriado[6]; } $feriadosum=$feriadosum+$feriado[6]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($hed[6]==0){ echo "&nbsp;"; }else{ echo $hed[6]; }  $hedsum=$hedsum+$hed[6]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($hedp[6]==0){ echo "&nbsp;"; }else{ echo $hedp[6]; } $hedpsum=$hedpsum+$hedp[6]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($trcd[6]==0){ echo "&nbsp;"; }else{ echo $trcd[6]; } $trcdsum=$trcdsum+$trcd[6]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($bonocturno[6]==0){ echo "&nbsp;"; }else{ echo $bonocturno[6]; } $bonocturnosum=$bonocturnosum+$bonocturno[6]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($hen[6]==0){ echo "&nbsp;"; }else{ echo $hen[6]; } $hensum=$hensum+$hen[6]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($henp[6]==0){ echo "&nbsp;"; }else{ echo $henp[6]; } $henpsum=$henpsum+$henp[6]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($trcn[6]==0){ echo "&nbsp;"; }else{ echo $trcn[6]; } $trcnsum=$trcnsum+$trcn[6]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($ctc[6]==0){ echo "&nbsp;"; }else{ echo $ctc[6]; } $ctcsum+=$ctc[6]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($ctl[6]==0){ echo "&nbsp;"; }else{ echo $ctl[6]; } $ctlsum+=$ctl[6]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($vci[6]==0){ echo "&nbsp;"; }else{ echo $vci[6]; } $vcisum=$vcisum+$vci[6]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($vsi[6]==0){ echo "&nbsp;"; }else{ echo $vsi[6]; } $vsisum=$vsisum+$vsi[6]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($km[6]==0){ echo "&nbsp;"; }else{ echo $km[6]; } $kmsum=$kmsum+$km[6]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($manejo[6]==0){ echo "&nbsp;"; }else{ echo $manejo[6]; } $manejosum=$manejosum+$manejo[6];  ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($clave221[6]==0){ echo "&nbsp;"; }else{ echo $clave221[6]; } $clave221sum=$clave221sum+$clave221[6]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($clave277[6]==0){ echo "&nbsp;"; }else{ echo $clave277[6]; } $clave277sum=$clave277sum+$clave277[6]; ?>
                  </div></td>
                  <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($movilizacion[6]==0){ echo "&nbsp;"; }else{ echo $movilizacion[6]; } $movilizacionsum=$movilizacionsum+$movilizacion[6]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($ctc7mo[6]==0){ echo "&nbsp;"; }else{ echo $ctc7mo[6]; } $ctc7mosum+=$ctc7mo[6]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($ctl7mo[2]==0){ echo "&nbsp;"; }else{ echo $ctl7mo[6]; } $ctl7mosum+=$ctl7mo[6]; ?>
                  </div></td>
                  <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($reposo[6]==0){ echo "&nbsp;"; }else{ echo $reposo[6]; } $repososum=$repososum+$reposo[6];?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo51"><div align="center" class="Estilo54"><strong><?php echo $lugar[6]; ?></strong></div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo51"><div align="center"><strong><span class="Estilo54"><?php echo "km=".$km[6].", ".$observacion[6]; ?></span></strong></div></td>
                </tr>
                <tr><td bgcolor="#FFFFFF" class="Estilo49"><div align="right" class="Estilo56">Total</div></td>
                <td bgcolor="#FFFFFF" class="Estilo48"><div align="center" class="Estilo64"><?php echo $hdsum; ?></div></td>
                <td bgcolor="#FFFFFF" class="Estilo48"><div align="center" class="Estilo64"><?php echo $feriadosum; ?></div></td>
                <td bgcolor="#FFFFFF" class="Estilo48"><div align="center" class="Estilo64"><?php echo $hedsum; ?></div></td>
                <td bgcolor="#FFFFFF" class="Estilo48"><div align="center" class="Estilo64"><?php echo $hedpsum; ?></div></td>
                <td bgcolor="#FFFFFF" class="Estilo48"><div align="center" class="Estilo64"><?php echo $trcdsum; ?></div></td>
                <td bgcolor="#FFFFFF" class="Estilo48"><div align="center" class="Estilo64"><?php echo $bonocturnosum; ?></div></td>
                <td bgcolor="#FFFFFF" class="Estilo48"><div align="center" class="Estilo64"><?php echo $hensum; ?></div></td>
                <td bgcolor="#FFFFFF" class="Estilo48"><div align="center" class="Estilo64"><?php echo $henpsum; ?></div></td>
                <td bgcolor="#FFFFFF" class="Estilo48"><div align="center" class="Estilo64"><?php echo $trcnsum; ?></div></td>
                <td width="25"  bgcolor="#FFFFFF" class="Estilo48"><div align="center" class="Estilo53 Estilo63 Estilo65"><strong><?php echo $ctcsum; ?></strong></div></td>
                <td width="23"  bgcolor="#FFFFFF" class="Estilo48"><div align="center" class="Estilo53 Estilo63 Estilo65"><strong><?php echo $ctlsum; ?></strong></div></td>
                <td width="65"  bgcolor="#FFFFFF" class="Estilo48"><div align="center" class="Estilo53 Estilo63 Estilo65"><strong><?php echo $vcisum; ?></strong></div></td>
                <td width="61"  bgcolor="#FFFFFF" class="Estilo48"><div align="center" class="Estilo53 Estilo63 Estilo65"><strong><?php echo $vsisum; ?></strong></div></td>
                <td width="31"  bgcolor="#FFFFFF" class="Estilo48"><div align="center" class="Estilo53 Estilo63 Estilo65"><strong><?php echo $kmsum; ?></strong></div></td>
                <td bgcolor="#FFFFFF" class="Estilo48"><div align="center" class="Estilo64"><?php echo $manejosum; ?></div></td>
                <td bgcolor="#FFFFFF" class="Estilo48"><div align="center" class="Estilo64"><?php echo $clave221sum; ?></div></td>
				<td bgcolor="#FFFFFF" class="Estilo48"><div align="center" class="Estilo64"><?php echo $clave277sum; ?></div></td>
				<td bgcolor="#FFFFFF" class="Estilo48"><div align="center" class="Estilo64"><?php echo $movilizacionsum; ?></div></td>
                <td width="23"  bgcolor="#FFFFFF" class="Estilo48"><div align="center" class="Estilo53 Estilo63 Estilo65"><strong><?php echo $ctc7mosum; ?></strong></div></td>
                <td width="23"  bgcolor="#FFFFFF" class="Estilo48"><div align="center" class="Estilo53 Estilo63 Estilo65"><strong><?php echo $ctl7mosum; ?></strong></div></td>
                <td bgcolor="#FFFFFF" class="Estilo48"><div align="center" class="Estilo64"><?php echo $repososum; ?></div></td>
                <td bgcolor="#CCCCCC" class="Estilo15">&nbsp;</td>
                <td bgcolor="#CCCCCC" class="Estilo15">&nbsp;</td>
              </tr>
                <tr><td width="42"  bgcolor="#CCCCCC" class="Estilo49 Estilo56">&nbsp;</td>
                <td width="23"  bgcolor="#CCCCCC" class="Estilo15">&nbsp;</td>
                <td width="28"  bgcolor="#CCCCCC" class="Estilo15">&nbsp;</td>
                <td width="41"  bgcolor="#CCCCCC" class="Estilo15">&nbsp;</td>
                <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5"><?php echo $hedsum+$hedpsum; ?></div></td>
                <td width="41"  bgcolor="#CCCCCC" class="Estilo15">&nbsp;</td>
                <td width="32"  bgcolor="#CCCCCC" class="Estilo15">&nbsp;</td>
                <td width="31"  bgcolor="#CCCCCC" class="Estilo15">&nbsp;</td>
                <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5"><?php echo $hensum+$henpsum; ?></div></td>
                <td width="41"  bgcolor="#CCCCCC" class="Estilo15">&nbsp;</td>
                <td width="25"  bgcolor="#CCCCCC" class="Estilo49">&nbsp;</td>
                <td width="23"  bgcolor="#CCCCCC" class="Estilo49">&nbsp;</td>
                <td width="65"  bgcolor="#CCCCCC" class="Estilo49">&nbsp;</td>
                <td width="61"  bgcolor="#CCCCCC" class="Estilo49">&nbsp;</td>
                <td width="31"  bgcolor="#CCCCCC" class="Estilo49">&nbsp;</td>
                <td width="28"  bgcolor="#CCCCCC" class="Estilo15">&nbsp;</td>
                <td width="40"  bgcolor="#CCCCCC" class="Estilo15">&nbsp;</td>
                <td width="40"  bgcolor="#CCCCCC" class="Estilo15">&nbsp;</td>
				<td width="26"  bgcolor="#CCCCCC" class="Estilo15">&nbsp;</td>
                <td width="23"  bgcolor="#CCCCCC" class="Estilo49">&nbsp;</td>
                <td width="23"  bgcolor="#CCCCCC" class="Estilo49">&nbsp;</td>
                <td width="21"  bgcolor="#CCCCCC" class="Estilo15">&nbsp;</td>
                <td width="48"  bgcolor="#CCCCCC" class="Estilo15">&nbsp;</td>
                <td width="112"  bgcolor="#CCCCCC" class="Estilo15">&nbsp;</td>
              </tr>
                  
                <tr><td width="42" bgcolor="#FFFFFF" class="Estilo49 Estilo56 Estilo57"><div align="center">D&Iacute;A</div>
	              <div align="center"></div></td>
                <td width="23" bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo58">004</div></td>
                <td width="28" bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo58">087</div></td>
                <td width="41" bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo58">046</div></td>
                <td width="54" bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo58">046</div></td>
                <td width="41" bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo58">046&nbsp;</div></td>
                <td width="32" bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo58">060</div></td>
                <td width="31" bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo58">047</div></td>
                <td width="54" bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo58">047</div></td>
                <td width="41" bgcolor="#FFFFFF" class="Estilo59"><div align="center">047</div></td>
                <td bgcolor="#FFFFFF" class="Estilo15"><div align="center">0,30</div></td>
                <td bgcolor="#FFFFFF" class="Estilo15"><div align="center">0,50</div></td>
                <td width="65" bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo38">344</div></td>
                <td width="61" bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo38">363</div></td>
                <td width="31" bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo38">362</div></td>
                <td width="28" bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo58">062</div></td>
                <td width="40" bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo58">221</div></td>
                <td width="40" bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo58">277</div></td>
				<td width="26" bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo58">359</div></td>
                <td bgcolor="#FFFFFF" class="Estilo15"><div align="center">0,30</div></td>
                <td bgcolor="#FFFFFF" class="Estilo15"><div align="center">0,50</div></td>
                <td width="21" bgcolor="#FFFFFF" class="Estilo15"><div align="center" class="Estilo58">085</div></td>
				<td width="48" bgcolor="#CCCCCC" class="Estilo15">&nbsp;</td>
                <td width="112"  bgcolor="#CCCCCC" class="Estilo15">&nbsp;</td>
              </tr>
                <tr><td width="42"  bgcolor="#FFFFFF" class="Estilo49 Estilo56"><?php echo $nombredia[7]; ?></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($hd[7]==0) { echo "&nbsp;"; }else{ echo $hd[7]; } $hdsum=$hdsum+$hd[7];?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($feriado[7]==0){ echo "&nbsp;"; }else{ echo $feriado[7]; } $feriadosum=$feriadosum+$feriado[7]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($hed[7]==0){ echo "&nbsp;"; }else{ echo $hed[7]; }  $hedsum=$hedsum+$hed[7]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($hedp[7]==0){ echo "&nbsp;"; }else{ echo $hedp[7]; } $hedpsum=$hedpsum+$hedp[7]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($trcd[7]==0){ echo "&nbsp;"; }else{ echo $trcd[7]; } $trcdsum=$trcdsum+$trcd[7]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($bonocturno[7]==0){ echo "&nbsp;"; }else{ echo $bonocturno[7]; } $bonocturnosum=$bonocturnosum+$bonocturno[7]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($hen[7]==0){ echo "&nbsp;"; }else{ echo $hen[7]; } $hensum=$hensum+$hen[7]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($henp[7]==0){ echo "&nbsp;"; }else{ echo $henp[7]; } $henpsum=$henpsum+$henp[7]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($trcn[7]==0){ echo "&nbsp;"; }else{ echo $trcn[7]; } $trcnsum=$trcnsum+$trcn[7]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($ctc[7]==0){ echo "&nbsp;"; }else{ echo $ctc[7]; } $ctcsum+=$ctc[7]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($ctl[7]==0){ echo "&nbsp;"; }else{ echo $ctl[7]; } $ctlsum+=$ct[7]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($vci[7]==0){ echo "&nbsp;"; }else{ echo $vci[7]; } $vcisum=$vcisum+$vci[7]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($vsi[7]==0){ echo "&nbsp;"; }else{ echo $vsi[7]; } $vsisum=$vsisum+$vsi[7]; ?>
                  </div></td>
                  <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($km[7]==0){ echo "&nbsp;"; }else{ echo $km[7]; } ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($manejo[7]==0){ echo "&nbsp;"; }else{ echo $manejo[7]; } $manejosum=$manejosum+$manejo[7]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($clave221[7]==0){ echo "&nbsp;"; }else{ echo $clave221[7]; } $clave221sum=$clave221sum+$clave221[7]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($clave277[7]==0){ echo "&nbsp;"; }else{ echo $clave277[7]; } $clave277sum=$clave277sum+$clave277[7]; ?>
                  </div></td>
                  <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($movilizacion[7]==0){ echo "&nbsp;"; }else{ echo $movilizacion[7]; } $movilizacionsum=$movilizacionsum+$movilizacion[7]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($ctc7mo[7]==0){ echo "&nbsp;"; }else{ echo $ctc7mo[7]; } $ctc7mosum+=$ctc7mo[7]; ?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($ctl7mo[7]==0){ echo "&nbsp;"; }else{ echo $ctl7mo[7]; } $ctl7mosum+=$ctl7mo[7]; ?>
                  </div></td>
                  <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5">
                      <?php if($reposo[7]==0){ echo "&nbsp;"; }else{ echo $reposo[7]; } $repososum=$repososum+$reposo[7];?>
                  </div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo51"><div align="center" class="Estilo54"><strong><?php echo $lugar[7]; ?></strong></div></td>
                  <td  bgcolor="#FFFFFF" class="Estilo51"><div align="center"><strong><span class="Estilo54"><?php echo "km=".$km[7].", ".$observacion[7]; ?></span></strong></div></td>
                </tr>
			  <tr><td width="42"  bgcolor="#CCCCCC" class="Estilo49">&nbsp;</td>
                <td bgcolor="#CCCCCC" class="Estilo49"><div align="center" class="Estilo5"></div></td>
                <td bgcolor="#CCCCCC" class="Estilo49"><div align="center" class="Estilo5"></div></td>
                <td bgcolor="#CCCCCC" class="Estilo49"><div align="center" class="Estilo5"></div></td>
                <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5"><?php if($hed[7]+$hedp[7]+$trcd[7]==0){ echo "0"; }else{ echo $hed[7]+$hedp[7]+$trcd[7]; } ?></div></td>
                <td bgcolor="#CCCCCC" class="Estilo49"><div align="center" class="Estilo5"></div></td>
                <td bgcolor="#CCCCCC" class="Estilo49"><div align="center" class="Estilo5"></div></td>
                <td bgcolor="#CCCCCC" class="Estilo49"><div align="center" class="Estilo5"></div></td>
                <td bgcolor="#FFFFFF" class="Estilo49"><div align="center" class="Estilo5"><?php if($hen[7]+$henp[7]+$trcn[7]==0){ echo "&nbsp;"; }else{ echo $hen[7]+$henp[7]+$trcn[7]; } ?></div></td>
                <td bgcolor="#CCCCCC" class="Estilo49"><div align="center" class="Estilo5">&nbsp;</div></td>
                <td bgcolor="#CCCCCC" class="Estilo49"><div align="center" class="Estilo5">&nbsp;</div></td>
                <td bgcolor="#CCCCCC" class="Estilo49"><div align="center" class="Estilo5">&nbsp;</div></td>
                <td bgcolor="#CCCCCC" class="Estilo49"><div align="center" class="Estilo5">&nbsp;</div></td>
                <td bgcolor="#CCCCCC" class="Estilo49"><div align="center" class="Estilo5">&nbsp;</div></td>
                <td bgcolor="#CCCCCC" class="Estilo49"><div align="center" class="Estilo5">&nbsp;</div></td>
                <td bgcolor="#CCCCCC" class="Estilo49"><div align="center" class="Estilo5">&nbsp;</div></td>
				<td bgcolor="#CCCCCC" class="Estilo49"><div align="center" class="Estilo5">&nbsp;</div></td>
                <td bgcolor="#CCCCCC" class="Estilo49"><div align="center" class="Estilo5">&nbsp;</div></td>
                <td bgcolor="#CCCCCC" class="Estilo49"><div align="center" class="Estilo5">&nbsp;</div></td>
                <td bgcolor="#CCCCCC" class="Estilo49"><div align="center" class="Estilo5">&nbsp;</div></td>
                <td bgcolor="#CCCCCC" class="Estilo49"><div align="center" class="Estilo5">&nbsp;</div></td>
                <td bgcolor="#CCCCCC" class="Estilo49"><div align="center" class="Estilo5"></div></td>
                <td bgcolor="#CCCCCC" class="Estilo52"><div align="center" class="Estilo5"></div></td>
                <td bgcolor="#CCCCCC" class="Estilo52"><div align="center" class="Estilo5"></div></td>
		      </tr>
              </table>
              <table width="969" border="1">
                <tr>
                  <td width="119" class="t12g"><div align="center" class="Estilo52">TRABAJADOR</div></td>
                  <td width="119" class="t12g"><div align="center"><span class="Estilo38"><span class="Estilo38"><span class="Estilo38"><span class="Estilo50"></span></span></span></span></div></td>
                  <td width="119" class="t12g"><div align="center" class="Estilo52">SUPERVISOR</div></td>
                  <td width="120" class="t12g"><div align="center"><span class="Estilo38"><span class="Estilo38"><span class="Estilo38"><span class="Estilo50"></span></span></span></span></div></td>
                  <td width="120" class="t12g"><div align="center" class="Estilo52">JEFE DE UNIDAD </div></td>
                  <td width="120" class="t12g"><div align="center"><span class="Estilo38"><span class="Estilo38"><span class="Estilo38"><span class="Estilo50"></span></span></span></span></div></td>
                  <td width="123" class="t12g"><div align="center" class="Estilo52">Coordinador</div></td>
                  <td width="120" class="t12g"><div align="center"><span class="Estilo38"><span class="Estilo38"><span class="Estilo38"><span class="Estilo50"></span></span></span></span></div></td>
                </tr>
              </table>
              <div align="right"><a href="consulta_jornada.php"><img src="images/logosarts.JPG" width="173" height="90"></a></div>
            </div></td>
      </tr>
</table>
    <p>&nbsp;</p>
</div>
</div>
</form>
<?php
//mysql_free_result($query1);
mysql_free_result($results);
}
}
?>
</BODY>
</HTML>