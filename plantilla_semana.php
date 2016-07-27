<?php
include ("security_system.php");

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
.Estilo138 {font-size: 9px; color: #FFFF00; font-weight: bold; }
.Estilo144 {font-size: 12px}
.Estilo151 {color: #0000FF}
.Estilo163 {color: #FF0000}
.Estilo164 {font-size: 14px; color: #FF0000;}
.Estilo167 {font-size: 14px; font-weight: bold; }
.Estilo169 {font-size: 12px; color: #FFFF00; }
.Estilo170 {font-size: 14px}
.Estilo171 {
	font-size: 18px;
	font-weight: bold;
}
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
<form name="form1" method="post" action="inc_plantilla_bd.php" onSubmit="return enviar()">
 <div align="center">
   <table width="783" border="2">
     <tr>
       <td width="138" height="26" bordercolor="#0000FF" bgcolor="#3366CC" class="t12g Estilo102">usuario</td>
       <td width="215" bordercolor="#0000FF" bgcolor="#3366CC" class="t12g">
         <span class="Estilo169">
         <?php
// Conexion el servidor
include ("includes/bdkey.php");
echo $cuentam=$_COOKIE['usuario'];
		?>
         </span></td>
		<td width="127" bgcolor="#3366CC" class="t12g Estilo102">Identificación</td>
		<td width="273" bgcolor="#3366CC" class="t12g">
		  <span class="Estilo169">
		  <?php
		echo session_id();
		?>
		  </span> </td>
		</tr>
		</table>
   </span> </div>
 <h4 align="center" class="Estilo104">DISE&Ntilde;ADOR DE  PLANTILLAS</h4>
    <table width="779" border="1">
      <tr>
        <td width="132" bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo93 Estilo102 Estilo170"><strong>D&Iacute;A</strong></div></td>
        <td width="85" class="t12g"><div align="center" class="Estilo151">D&Iacute;A 1 </div></td>
        <td width="85" class="t12g"><div align="center" class="Estilo151">D&Iacute;A 2 </span></div></td>
        <td width="85" class="t12g"><div align="center" class="Estilo151">D&Iacute;A 3 </div></td>
        <td width="85" class="t12g"><div align="center" class="Estilo151">D&Iacute;A 4 </span></div></td>
        <td width="85" class="t12g"><div align="center" class="Estilo151">D&Iacute;A 5 </div></td>
        <td width="85" class="t12g"><div align="center" class="Estilo151">D&Iacute;A 6 </div></td>
<td width="85" class="t12g"><div align="center" class="Estilo151">D&Iacute;A 7 </div></td>
      </tr>
      <tr>
        <td bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo93 Estilo102 Estilo170"><strong>SALARIO 004</strong></div></td>
        <td>
          <div align="center"> 
              <select name="hd0" style="width:80px">
                <option value="0" selected>0</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="7">7</option>
                <option value="8">8</option>
				<option value="9">9</option>
              </select>
            </div></td>
        <td><div align="center">
          <div align="center">
            <select name="hd1" style="width:80px">
			   <option value="0" selected>0</option>
				                <option value="0" selected>0</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="7">7</option>
                <option value="8">8</option>
				<option value="9">9</option>
               </select>
            </select>
          </div>
        </div></td>
        <td><div align="center">
          <div align="center">
            <select name="hd2" style="width:80px">
			   <option value="0" selected>0</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="7">7</option>
                <option value="8">8</option>
				<option value="9">9</option>
               </select>
          </div>
        </div></td>
        <td><div align="center">
          <div align="center">
            <select name="hd3" style="width:80px">
				 <option value="0" selected>0</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="7">7</option>
                <option value="8">8</option>
				<option value="9">9</option>
               </select>
          </div>
        </div></td>
        <td><div align="center">
          <div align="center">
            <select name="hd4" style="width:80px">
			  <option value="0" selected>0</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="7">7</option>
                <option value="8">8</option>
				<option value="9">9</option>
               </select>
          </div>
        </div></td>
        <td><div align="center">
          <div align="center">
            <select name="hd5" style="width:80px">
			  <option value="0" selected>0</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="7">7</option>
                <option value="8">8</option>
				<option value="9">9</option>
               </select>
          </div>
        </div></td>
        <td><div align="center">
          <div align="center">
            <select name="hd6" style="width:80px">
			  <option value="0" selected>0</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="7">7</option>
                <option value="8">8</option>
				<option value="9">9</option>
               </select>
          </div>
        </div></td>
        </tr>
      <tr>
        <td bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo93 Estilo102 Estilo170"><strong>H.E.D. </strong></div></td>
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
			<option value="4.5">4.2</option>
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
			<option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
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
            <option value="9">9</option>
			<option value="9.5">9.5</option>
			<option value="10">10</option>
			<option value="10.5">10.5</option>
			<option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
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
            <option value="9">9</option>
			<option value="9.5">9.5</option>
			<option value="10">10</option>
			<option value="10.5">10.5</option>
			<option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
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
            <option value="9">9</option>
			<option value="9.5">9.5</option>
			<option value="10">10</option>
			<option value="10.5">10.5</option>
			<option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
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
            <option value="9">9</option>
			<option value="9.5">9.5</option>
			<option value="10">10</option>
			<option value="10.5">10.5</option>
			<option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
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
            <option value="9">9</option>
			<option value="9.5">9.5</option>
			<option value="10">10</option>
			<option value="10.5">10.5</option>
			<option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
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
            <option value="9">9</option>
			<option value="9.5">9.5</option>
			<option value="10">10</option>
			<option value="10.5">10.5</option>
			<option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            </select>
            </div></td>
      </tr>
      <tr>
        <td bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo93 Estilo102 Estilo170"><strong>H.E.D.P. </strong></div></td>
        <td><div align="center">
        <select name="hedp0" style="width:80px">
        <option value="0" selected>0</option>
		<option value="0.5" >0.5</option>
        <option value="1">1</option>
        <option value="2" >2</option>
		<option value="3" >3</option>
		<option value="3.5" >3.5</option>
		<option value="4" >4</option>
		<option value="5">5</option>
    	<option value="6">6</option>
        <option value="8.5" >8.5</option>
    	<option value="8">8</option>
		<option value="10">10</option>
		<option value="12">12</option>
		<option value="14">14</option>
        </select>
        </div></td>
        <td><div align="center">
        <select name="hedp1" style="width:80px">
		<option value="0" selected>0</option>
		<option value="0.5" >0.5</option>
        <option value="1">1</option>
        <option value="2" >2</option>
		<option value="3" >3</option>
		<option value="3.5" >3.5</option>
		<option value="4" >4</option>
		<option value="5">5</option>
    	<option value="6">6</option>
        <option value="8.5" >8.5</option>
    	<option value="8">8</option>
		<option value="10">10</option>
		<option value="12">12</option>
		<option value="14">14</option>
        </select>
        </div></td>
        <td><div align="center">
        <select name="hedp2" style="width:80px">
		<option value="0" selected>0</option>
		<option value="0.5" >0.5</option>
        <option value="1">1</option>
        <option value="2" >2</option>
		<option value="3" >3</option>
		<option value="3.5" >3.5</option>
		<option value="4" >4</option>
		<option value="5">5</option>
    	<option value="6">6</option>
        <option value="8.5" >8.5</option>
    	<option value="8">8</option>
		<option value="10">10</option>
		<option value="12">12</option>
		<option value="14">14</option>
        </select>
        </div></td>
        <td><div align="center">
        <select name="hedp3" style="width:80px">
		<option value="0" selected>0</option>
		<option value="0.5" >0.5</option>
        <option value="1">1</option>
        <option value="2" >2</option>
		<option value="3" >3</option>
		<option value="3.5" >3.5</option>
		<option value="4" >4</option>
		<option value="5">5</option>
    	<option value="6">6</option>
        <option value="8.5" >8.5</option>
    	<option value="8">8</option>
		<option value="10">10</option>
		<option value="12">12</option>
		<option value="14">14</option>
        </select>
        </div></td>
        <td><div align="center">
        <select name="hedp4" style="width:80px">
		<option value="0" selected>0</option>
		<option value="0.5" >0.5</option>
        <option value="1">1</option>
        <option value="2" >2</option>
		<option value="3" >3</option>
		<option value="3.5" >3.5</option>
		<option value="4" >4</option>
		<option value="5">5</option>
    	<option value="6">6</option>
        <option value="8.5" >8.5</option>
    	<option value="8">8</option>
		<option value="10">10</option>
		<option value="12">12</option>
		<option value="14">14</option>
        </select>
        </div></td>
        <td><div align="center">
        <select name="hedp5" style="width:80px">
        <option value="0" selected>0</option>
		<option value="0.5" >0.5</option>
        <option value="1">1</option>
        <option value="2" >2</option>
		<option value="3" >3</option>
		<option value="3.5" >3.5</option>
		<option value="4" >4</option>
		<option value="5">5</option>
    	<option value="6">6</option>
        <option value="8.5" >8.5</option>
    	<option value="8">8</option>
		<option value="10">10</option>
		<option value="12">12</option>
		<option value="14">14</option>
        </select>
        </div></td>
        <td><div align="center">
        <select name="hedp6" style="width:80px">
		<option value="0" selected>0</option>
		<option value="0.5" >0.5</option>
        <option value="1">1</option>
        <option value="2" >2</option>
		<option value="3" >3</option>
		<option value="3.5" >3.5</option>
		<option value="4" >4</option>
		<option value="5">5</option>
    	<option value="6">6</option>
        <option value="8.5" >8.5</option>
    	<option value="8">8</option>
		<option value="10">10</option>
		<option value="12">12</option>
		<option value="14">14</option>
        </select>
        </div></td>
      </tr>
      <tr>
      <td bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo93 Estilo102 Estilo170"><strong>T.R.C.D.</strong></div></td>
      <td><div align="center">
		<select name="trcd0" style="width:80px">
		<option value="0" selected>0</option>
		<option value="0.5">0.5</option>
		<option value="1">1</option>
		<option value="1.5">1.5</option>
		</select>
      </div></td>
      <td><div align="center">
		<select name="trcd1" style="width:80px">
		<option value="0" selected>0</option>
		<option value="0.5">0.5</option>
		<option value="1">1</option>
		<option value="1.5">1.5</option>
		</select>
      </div></td>
      <td><div align="center">
		<select name="trcd2" style="width:80px">
		<option value="0" selected>0</option>
		<option value="0.5">0.5</option>
		<option value="1">1</option>
		<option value="1.5">1.5</option>
		</select>
        </div></td>
        <td><div align="center">
		<select name="trcd3" style="width:80px">
		<option value="0" selected>0</option>
		<option value="0.5">0.5</option>
		<option value="1">1</option>
		<option value="1.5">1.5</option>
		</select>
        </div></td>
        <td><div align="center">
		<select name="trcd4" style="width:80px">
		<option value="0" selected>0</option>
		<option value="0.5">0.5</option>
		<option value="1">1</option>
		<option value="1.5">1.5</option>
		</select>
        </div></td>
        <td><div align="center">
		<select name="trcd5" style="width:80px">
		<option value="0" selected>0</option>
		<option value="0.5">0.5</option>
		<option value="1">1</option>
		<option value="1.5">1.5</option>
		</select>
        </div></td>
        <td><div align="center">
		<select name="trcd6" style="width:80px">
		<option value="0" selected>0</option>
		<option value="0.5">0.5</option>
		<option value="1">1</option>
		<option value="1.5">1.5</option>
		</select>
        </div></td>
      </tr>
      <tr>
        <td bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo93 Estilo102 Estilo170"><strong>BONO NOCTURNO</strong></div></td>
        <td><div align="center">
	
				<select name="bonocturno0" style="width:80px">
				<option value="0">0</option>
				<option value="3">3</option>
				<option value="3.5">3.5</option>
				<option value="7">7</option>
				</select>
		</div></td>
        <td><div align="center">
       
				  <select name="bonocturno1" style="width:80px">
					<option value="0">0</option>
					<option value="3">3</option>
					<option value="3.5">3.5</option>
					<option value="7">7</option>
			  </select>
			
        </div></td>
        <td><div align="center">
      
					<select name="bonocturno2" style="width:80px">
					<option value="0">0</option>
					<option value="3">3</option>
					<option value="3.5">3.5</option>
					<option value="7">7</option>
					</select>
		</div></td>
        <td><div align="center">
				<select name="bonocturno3" style="width:80px">
				<option value="0">0</option>
				<option value="3">3</option>
				<option value="3.5">3.5</option>
				<option value="7">7</option>
				</select>
				
        </div></td>
        <td><div align="center">
          
					<select name="bonocturno4" style="width:80px">
					<option value="0">0</option>
					<option value="3">3</option>
					<option value="3.5">3.5</option>
					<option value="7">7</option>
					</select>
			        </div></td>
        <td><div align="center">
          			<select name="bonocturno5" style="width:80px">
					<option value="0">0</option>
					<option value="3">3</option>
					<option value="3.5">3.5</option>
					<option value="7">7</option>
					</select>
		</div></td>
        <td><div align="center">
         			<select name="bonocturno6" style="width:80px">
					<option value="0">0</option>
					<option value="3">3</option>
					<option value="3.5">3.5</option>
					<option value="7">7</option>
					</select>
				
        </div></td>
      </tr>
      <tr>
        <td bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo93 Estilo102 Estilo170"><strong>H. E. N. </strong></div></td>
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
            </select>
        </div></td>
      </tr>
      <tr>
        <td bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo93 Estilo102 Estilo170"><strong>H.E.N.P. </strong></div></td>
        <td><div align="center">
          <select name="henp0" style="width:80px">
            <option value="0" selected>0</option>
			<option value="0.5">0.5</option>
			<option value="1">1</option>
			<option value="3">3</option>
            <option value="4">4</option>
			<option value="4.5">4.5</option>
			<option value="5">5</option>
			<option value="5.5">5.5</option>
			<option value="8">8</option>
			<option value="10">10</option>
          </select>
        </div></td>
        <td><div align="center">
            <select name="henp1" style="width:80px">
            <option value="0" selected>0</option>
			<option value="0.5">0.5</option>
			<option value="1">1</option>
			<option value="3">3</option>
            <option value="4">4</option>
			<option value="4.5">4.5</option>
			<option value="5">5</option>
			<option value="5.5">5.5</option>
			<option value="8">8</option>
			<option value="10">10</option>
          </select>
        </div></td>
        <td><div align="center">
            <select name="henp2" style="width:80px">
            <option value="0" selected>0</option>
			<option value="0.5">0.5</option>
			<option value="1">1</option>
			<option value="3">3</option>
            <option value="4">4</option>
			<option value="4.5">4.5</option>
			<option value="5">5</option>
			<option value="5.5">5.5</option>
			<option value="8">8</option>
			<option value="10">10</option>
          </select>
        </div></td>
        <td><div align="center">
            <select name="henp3" style="width:80px">
           <option value="0" selected>0</option>
			<option value="0.5">0.5</option>
			<option value="1">1</option>
			<option value="3">3</option>
            <option value="4">4</option>
			<option value="4.5">4.5</option>
			<option value="5">5</option>
			<option value="5.5">5.5</option>
			<option value="8">8</option>
			<option value="10">10</option>
          </select>
        </div></td>
        <td><div align="center">
            <select name="henp4" style="width:80px">
           	<option value="0" selected>0</option>
			<option value="0.5">0.5</option>
			<option value="1">1</option>
			<option value="3">3</option>
            <option value="4">4</option>
			<option value="4.5">4.5</option>
			<option value="5">5</option>
			<option value="5.5">5.5</option>
			<option value="8">8</option>
			<option value="10">10</option>
          </select></div>
		  </td>
        <td><div align="center">
            <select name="henp5" style="width:80px">
           <option value="0" selected>0</option>
			<option value="0.5">0.5</option>
			<option value="1">1</option>
			<option value="3">3</option>
            <option value="4">4</option>
			<option value="4.5">4.5</option>
			<option value="5">5</option>
			<option value="5.5">5.5</option>
			<option value="8">8</option>
			<option value="10">10</option>
          </select></div>
        <td><div align="center">
            <select name="henp6" style="width:80px">
            <option value="0" selected>0</option>
			<option value="0.5">0.5</option>
			<option value="1">1</option>
			<option value="3">3</option>
            <option value="4">4</option>
			<option value="4.5">4.5</option>
			<option value="5">5</option>
			<option value="5.5">5.5</option>
			<option value="8">8</option>
			<option value="10">10</option>
          </select>
        </div></td>
      </tr>
      <tr>
        <td bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo93 Estilo102 Estilo170"><strong>T.R.C.N.</strong></div></td>
        <td><div align="center">
           <select name="trcn0" style="width:80px">
            <option value="0" selected>0</option>
            <option value="0.5">0.5</option>
          </select>
        </div></td>
        <td><div align="center">
            <select name="trcn1" style="width:80px">
              <option value="0" selected>0</option>
              <option value="0.5">0.5</option>
            </select>
        </div></td>
        <td><div align="center">
            <select name="trcn2" style="width:80px">
              <option value="0" selected>0</option>
              <option value="0.5">0.5</option>
            </select>
        </div></td>
        <td><div align="center">
            <select name="trcn3" style="width:80px">
              <option value="0" selected>0</option>
              <option value="0.5">0.5</option>
            </select>
        </div></td>
        <td><div align="center">
            <select name="trcn4" style="width:80px">
              <option value="0" selected>0</option>
              <option value="0.5">0.5</option>
            </select>
        </div></td>
        <td><div align="center">
            <select name="trcn5" style="width:80px">
              <option value="0" selected>0</option>
              <option value="0.5">0.5</option>
            </select>
        </div></td>
        <td><div align="center">
            <select name="trcn6" style="width:80px">
              <option value="0" selected>0</option>
              <option value="0.5">0.5</option>
            </select>
        </div></td>
      </tr>
      <tr>
	  <td bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo138 Estilo102 Estilo170">CLAVE 221</div></td>
	  <td><div align="center" class="Estilo103">
          <label></label>
          <select name="clave2210" style="width:80px">
			<option value="0" selected>0</option>
			<option value="8">8</option>
			</select>
	  </div></td>
	  	<td><div align="center" class="Estilo103">
	  	  <select name="clave2211" style="width:80px">
    		<option value="0" selected>0</option>
            <option value="8">8</option>
         	</select>
	  	</div></td>
		<td><div align="center" class="Estilo103">
		  <select name="clave2212" style="width:80px">
            <option value="0" selected>0</option>
            <option value="8">8</option>
          	</select>
		</div></td>
		<td><div align="center" class="Estilo103">
		  <select name="clave2213" style="width:80px">
            <option value="0" selected>0</option>
            <option value="8">8</option>
          	</select>
		</div></td>
	  	<td><div align="center" class="Estilo103">
	  	  <select name="clave2214" style="width:80px">
            <option value="0" selected>0</option>
            <option value="8">8</option>
          	</select>
	  	</div></td>
	  	<td><div align="center" class="Estilo103">
	  	  <select name="clave2215" style="width:80px">
            <option value="0" selected>0</option>
            <option value="8">8</option>
          	</select>
	  	</div></td>
	  	<td><div align="center" class="Estilo103">
	  	  <select name="clave2216" style="width:80px">
            <option value="0" selected>0</option>
            <option value="8">8</option>
          	</select>
	  	</div></td></tr>
	  	<tr>
        <td bgcolor="#2770DB" class="t12g"><div align="center" class="Estilo138 Estilo102 Estilo170">CLAVE 277</div></td>
        <td><div align="center" class="Estilo103">
          <select name="clave2770" style="width:80px">
            <option value="0" selected>NO</option>
            <option value="1">SI</option>
          	</select>
        </div></td>
        <td><div align="center" class="Estilo103">
          <select name="clave2771" style="width:80px">
			<option value="0" selected>NO</option>
			<option value="1">SI</option>
			</select>
        </div></td>
        <td><div align="center" class="Estilo103">
          <select name="clave2772" style="width:80px">
				<option value="0" selected>NO</option>
				<option value="1">SI</option>
			  </select>
        </div></td>
        <td><div align="center" class="Estilo103">
          <select name="clave2773" style="width:80px">
			<option value="0" selected>NO</option>
			<option value="1">SI</option>
			</select>
          </label>
        </div></td>
        <td><div align="center" class="Estilo103">
          <select name="clave2774" style="width:80px">
						  <option value="0" selected>NO</option>
						  <option value="1">SI</option>
			  </select>
        </div></td>
        <td><div align="center" class="Estilo103">
          <select name="clave2775" style="width:80px">
						  <option value="0" selected>NO</option>
						  <option value="1">SI</option>
			  </select>
        </div></td>
        <td><div align="center" class="Estilo103">
            <label>
						<select name="clave2776" style="width:80px">
						  <option value="0" selected>NO</option>
						  <option value="1">SI</option>
						</select>
            </label>
        </div></td>
      </tr>
    </table>
	<p class="t12g Estilo151">Por favor escriba el nombre de lA pLANTILLA</p>
	<p class="t12g Estilo151">que desea guardar en el siguiente recuadro</p>
	<p class="t12g Estilo151">(m&Aacute;ximo 12 CARACTERES, una s&Oacute;la palabra) </p>
	<table width="221" border="1">
      <tr>
        <td width="211"><div align="center"><span class="t12g Estilo151"><em>nombre:</em>
        </span><span class="t12g Estilo151">
        <input name="nombre_plantilla" type="text" size="20" maxlength="12" onKeyUp="this.value = this.value.toUpperCase();">
        </span></div></td>
      </tr>
    </table>
	<p>&nbsp;</p>
	<p class="Estilo163"><u><span class="Estilo167 Estilo144">Muy Importate</span></u><span class="Estilo167 Estilo170">:</span><span class="Estilo170"> Con el fin de optimizar el uso de las plantillas, lleve un control de todas las que haga, y</span></p>
	<p class="Estilo163 Estilo170">as&iacute; evitar repeticiones de las secuencias de llenado. En este <a href="descargas/Control_Planillas_SARTS.xls" class="Estilo171">enlace</a> podr&aacute; descargar una planilla en formato</p>
	<p class="Estilo164 Estilo144">Excel (.xls) para usarla como gu&iacute;a.</p>
	<table width="364" height="81" border="0">
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
    <p>&nbsp;</p>
    <table width="285" border="0">
      <tr>
        <td width="275"><div align="center"><font size="2"><span class="t12g Estilo151">&iquest;Desea incluir otra PLANTILLA?</span></font><font color="#FF0000" size="2">
        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="103" height="24">
                  <param name="movie" value="button34.swf">
                  <param name="quality" value="high">
                  <embed src="button34.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="103" height="24" ></embed>
            </object>
        </a></font></div></td>
      </tr>
    </table>
    <font color="#FF0000" size="2"><a title="Ayuda sobre el manejo del SARTS" href="help.php">    </a></font>
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