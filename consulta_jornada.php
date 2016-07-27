<?php
include ("security_system.php");
?>
<HTML>
<HEAD>
<TITLE>Men&uacute; de Consulta Trabajadores. Sistema ARTS Online</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<!-- CALENDARIO DESDE AQUI -->

<SCRIPT LANGUAGE="JavaScript" SRC="includes/cal.js">
</SCRIPT>

<!-- CALENDARIO HASTA AQUI -->




<script language="JavaScript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<link rel="stylesheet" href="main.css" type="text/css" http-equiv="Window-target" content="_top"/>
<style type="text/css">
<!--
.Estilo25 {
	color: #FF9900;
	font-weight: bold;
}
.Estilo10 {	font-size: 16px;
	font-weight: bold;
}
.Estilo11 {color: #FFFFFF}
.Estilo2 {font-size: 18px; color: #FFFFFF;}
.Estilo9 {color: #FFFF00}
a:link {
	color: #000000;
}
a:visited {
	color: #333333;
}
.Estilo27 {font-size: 9}
.Estilo28 {font-size: 9px}
-->

</style>

<script type="text/javascript" language="JavaScript1.2" src="stmenu.js">
</script>

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
<script type="text/javascript">

var patron = new Array(2,2,4)
function mascara(d,sep,pat,nums){
if(d.valant != d.value){
	val = d.value
	largo = val.length
	val = val.split(sep)
	val2 = ''
	for(r=0;r<val.length;r++){
		val2 += val[r]	
	}
	if(nums){
		for(z=0;z<val2.length;z++){
			if(isNaN(val2.charAt(z))){
				letra = new RegExp(val2.charAt(z),"g")
				val2 = val2.replace(letra,"")
			}
		}
	}
	val = ''
	val3 = new Array()
	for(s=0; s<pat.length; s++){
		val3[s] = val2.substring(0,pat[s])
		val2 = val2.substr(pat[s])
	}
	for(q=0;q<val3.length; q++){
		if(q ==0){
			val = val3[q]
		}
		else{
			if(val3[q] != ""){
				val += sep + val3[q]
				}
		}
	}
	d.value = val
	d.valant = val
	}
}
</script>

<script language="JavaScript">
<!--
function esDigito(sChr){
var sCod = sChr.charCodeAt(0);
return ((sCod > 47) && (sCod < 58));
}

function valSep(oTxt){
var bOk = false;
bOk = bOk || ((oTxt.value.charAt(2) == "-") && (oTxt.value.charAt(5) == "-"));
bOk = bOk || ((oTxt.value.charAt(2) == "/") && (oTxt.value.charAt(5) == "/"));
return bOk;
}

function finMes(oTxt){
var nMes = parseInt(oTxt.value.substr(3, 2), 10);
var nRes = 0;
switch (nMes){
case 1: nRes = 31; break;
case 2: nRes = 29; break;
case 3: nRes = 31; break;
case 4: nRes = 30; break;
case 5: nRes = 31; break;
case 6: nRes = 30; break;
case 7: nRes = 31; break;
case 8: nRes = 31; break;
case 9: nRes = 30; break;
case 10: nRes = 31; break;
case 11: nRes = 30; break;
case 12: nRes = 31; break;
}
return nRes;
}

function valDia(oTxt){
var bOk = false;
var nDia = parseInt(oTxt.value.substr(0, 2), 10);
bOk = bOk || ((nDia >= 1) && (nDia <= finMes(oTxt)));
return bOk;
}

function valMes(oTxt){
var bOk = false;
var nMes = parseInt(oTxt.value.substr(3, 2), 10);
bOk = bOk || ((nMes >= 1) && (nMes <= 12));
return bOk;
}

function valAno(oTxt){
var bOk = true;
var nAno = oTxt.value.substr(6);
bOk = bOk && ((nAno.length == 2) || (nAno.length == 4));
if (bOk){
for (var i = 0; i < nAno.length; i++){
bOk = bOk && esDigito(nAno.charAt(i));
}
}
return bOk;
}

function valFecha(oTxt){
var bOk = true;
if (oTxt.value != ""){
bOk = bOk && (valAno(oTxt));
bOk = bOk && (valMes(oTxt));
bOk = bOk && (valDia(oTxt));
bOk = bOk && (valSep(oTxt));
if (!bOk){
alert("Fecha inválida");
oTxt.value = "";
oTxt.focus();
}
}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' debe contener un número.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' es requerido.\n'; }
  } if (errors) alert('El(Los) siguiente(s) error(es) ha(n) ocurrido:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>

<script language="JavaScript" type="text/JavaScript">
function enviar(){
var enviarme=confirm("¿Desea cargar estos datos?");
if (enviarme)
   return true ;
else
   return false ;
}
</script>

<script language="javascript">
function mis_datos(){
var key=window.event.keyCode;
if (key < 48 || key > 57){
window.event.keyCode=0;
}}
</script>

<style>
.fc_main { background: #DDDDDD; border: 1px solid #000000; font-family: Verdana; font-size: 10px; }
.fc_date { border: 1px solid #D9D9D9;  cursor:pointer; font-size: 10px; text-align: center;}
.fc_dateHover, TD.fc_date:hover { cursor:pointer; border-top: 1px solid #FFFFFF; border-left: 1px solid #FFFFFF; border-right: 1px solid #999999; border-bottom: 1px solid #999999; background: #E7E7E7; font-size: 10px; text-align: center; }
.fc_wk {font-family: Verdana; font-size: 10px; text-align: center;}
.fc_wknd { color: #FF0000; font-weight: bold; font-size: 10px; text-align: center;}
.fc_head { background: #000066; color: #FFFFFF; font-weight:bold; text-align: left;  font-size: 11px; }
</style>


<!-- Script Calendario inicio -->
<SCRIPT LANGUAGE="JavaScript" SRC="scripts/FSdateSelect.js"></SCRIPT>
<LINK REL="stylesheet" HREF="styles/FSdateSelect.css" type="text/css">
<!-- Script Calendario fin -->

</HEAD>
<BODY BGCOLOR=#FFFFFF background="images/bgb.gif" LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0 onLoad="MM_preloadImages('images/18-1.gif','images/8-1.gif')" tracingsrc="images/-downdis.gif" tracingopacity="100" oncontextmenu="return false">
<td colspan="2" valign="middle"><div align="center">
  <table width="778" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td align="right" background="images/index_01.gif"><img src="images/index_03.gif" width=59 height=34 alt=""><a href="inicio.html" target="_top"><img src="images/index_ini.gif" alt="" width=82 height=34 border="0"></a><img src="images/index_faq.GIF" width=82 height=34 alt=""><img src="images/index_link.gif" width=89 height=34 alt=""><a href="finalizar_sesion.php" target="_self"><img src="images/index_sarts.gif" alt="" width=71 height=34 border="0"></a><img src="images/index_contac.GIF" width=85 height=34 alt=""></td>
    </tr>
  </table>
  <table width="778" border="0" cellspacing="0" cellpadding="0">
  <tr>
	<td> <div align="right"><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif"></font>
	  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="778" height="174">
        <param name="movie" value="3.swf">
        <param name="quality" value="high">
        <embed src="3.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="778" height="174" ></embed>
      </object>
	</div></td>
  </tr>
</table>
<table width="778" border="0" cellspacing="0" cellpadding="0">
  <tr>
	<td width="450" background="images/index_23.gif"><img src="images/index_22.gif" width=174 height=35 alt=""></td>
	<td background="images/index_27.gif"><img src="images/index_25.jpg" width=96 height=35 alt=""><img src="images/index_soft.GIF" width=92 height=35 alt=""></td>
  </tr>
</table>
<table width="778" border="0" cellspacing="0" cellpadding="0" bgcolor="#FAFAFA">
  <tr>
	<td width="481" align="right" bgcolor="#FFFFFF"> 
	  <table width="535" border="0" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bgcolor="#FFFFFF">
		<tr>
		</tr>
	  </table>
	  <table width="535" border="0" cellspacing="0" cellpadding="0">
		<tr> 
		  <td width="5">&nbsp;</td>
		  <td width="23" align="center" bgcolor="#FFFFFF">&nbsp; </td>
		  <td width="507" valign="top" class="bg_product"> 
			<table width="526" border="0" cellspacing="0" cellpadding="0">
                  <tr> 
				<td width="508" bgcolor="#FFFFFF" class="t12b"><table width="101%" border="0" cellspacing="0" cellpadding="0">
                        <tr> 
                          <td height="471" align="center" bgcolor="#FFFFFF"><div align="center">
							  <p><em><strong><font color="#009900"><u>Generar Tarjetas</u></font></strong></em></p>
							  <form action="verifica_datos_tarjeta.php" method="post" name="sampleform1" class="Estilo25" id="buscar_estructura">
							    <table width="438" height="174" border="1" id="tablaA">
                                  <tr>
                                    <td width="428" height="151"><p align="left" class="Estilo25">- Individual o por Grupo de Trabajo </p>
                                        <div align="center">
                                          <table width="412" height="28" border="0" id="tablatar1">
                                            <tr>
                                              <td width="202" height="24" class="t12g">Fecha Inicio (dd-mm-aaaa)</td>
                                      <td width="200"><div align="center" class="Estilo53">
									  <input size="10" id="fc_1200890082" type="text" name="fecha_tarjeta" readonly="readonly" title="DD/MM/YYYY" onClick="displayCalendar(this);">
									  <img src="images/FSdateSelector/calendar.gif" width="16" height="16" /></div><!-- <SCRIPT LANGUAGE="JavaScript">FSfncWriteFieldHTML("sampleform1","fecha_tarjeta","Ninguna",100,"images/FSdateSelector/","ES",false,true)</SCRIPT> -->
                                    </td>
                                       </tr>
                                          
                                            <tr>
                                              <td width="202" height="30" class="t12g">grupo de trabajo </td>
                                              <td width="200"><div align="center">
                                                  <table id="tabla0"  width="200" border="0">
                                                    <tr>
                                                      <td><div align="center">
                                                    <select name="grupo_traba">
                                                    <option value=""></option>
                                                    <?php
													// Conexion el servidor
													include ("includes/bdkey.php");
													
													$query = mysql_query("SELECT * FROM estructura WHERE nivel=1 ORDER BY estruc ASC");
													
													while ($row = mysql_fetch_array($query))
													{
													?>
                                                    <option value="<? echo $row['estruc']; ?>"><? echo $row['estruc']; ?></option>
													<?
													}
													?>
                                                        </select>
                                                      </div></td>
                                                    </tr>
                                                  </table>
                                              </div></td>
                                            </tr>
                                            <tr>
                                              <td><div align="center">
                                                  <input name="gen_tarjeta" type="submit" class="t12g" id="gen_tarjeta" onClick="MM_validateForm('fecha_tarjeta_grupo','','R');enviar();return document.MM_returnValue" value="Generar">
                                              </div></td>
                                              <td><div align="center">
                                                  <input name="reset_trabaj2" type="reset" class="t12g" id="reset_trabaj2" value="Restablecer">
                                              </div></td>
                                            </tr>
                                          </table>
                                    </div></td>
                                  </tr>
                                </table>
							  </form>
							  <p><em><strong><font color="#009900"><u>Consultar Jornadas</u></font></strong></em></p>
							  <form action="verifica_consulta_jorna_ci.php" method="post" name="sampleform2" onSubmit="MM_validateForm('busca_cedula','','RisNum');return document.MM_returnValue">
							    <table width="438" height="198" border="1">
                                  <tr>
                                    <td width="432" height="174"><table width="431" border="0" id="tablaB">
                                      <tr>
                                        <td><p align="left" class="Estilo25">- Consulta Por Identificaci&oacute;n </p>
                                          <p align="center" class="Estilo25"><span class="t12g">
                                            <input name="xid" type="radio" value="1" Onclick="viewHide('consultaci')">
                                            Por Totales
                                            <input name="xid" type="radio" value="2" onClick="viewHide('consultaci')">
                                            por Detalles </span></p>
                                           <div align="center">
										  <table width="421" height="82" border="0" id="tablaci">
                                            
                                            <tr>
                                              <td class="t12g">Fecha Inicio (dd-mm-aaaa)</td>
                                              <td width="157"><div align="center">
                                                  <div align="center" class="Estilo53">
									<input size="10" id="fc_1200890083" type="text" name="inicio_x_ci" readonly="readonly" title="DD/MM/YYYY" onClick="displayCalendar(this);">
									<img src="images/FSdateSelector/calendar.gif" width="16" height="16" />
				<!--<SCRIPT LANGUAGE="JavaScript">FSfncWriteFieldHTML("sampleform2","inicio_x_ci","Ninguna",100,"images/FSdateSelector/","ES",false,true)</SCRIPT> -->
                </div>
                                              </div></td>
                                            </tr>
                                            <tr>
                                              <td class="t12g">fecha final (dd-mm-aaaa) </td>
                                              <td><div align="center">
                                                  <div align="center" class="Estilo53">
									<input size="10" id="fc_1200890084" type="text" name="fin_x_ci" readonly="readonly" title="DD/MM/YYYY" onClick="displayCalendar(this);">
									<img src="images/FSdateSelector/calendar.gif" width="16" height="16" />
				<!-- <SCRIPT LANGUAGE="JavaScript">FSfncWriteFieldHTML("sampleform2","fin_x_ci","Ninguna",100,"images/FSdateSelector/","ES",false,true)</SCRIPT> -->
                </div>
                                              </div></td>
                                            </tr>
  <td width="254"><span class="t12g">C&Eacute;dula de Identidad:</span></td>
      <td>
            <div align="left">
              <input name="ci_jornada" type="text" id="ci_jornada" size="17" maxlength="12" onKeyPress="mis_datos">
                </div></td></table>
				</div>
                                          <div align="center"></div>
                                          <table width="364" height="28" border="0" id="consultaci" style="display:none">

                                              <tr>
                                                <td width="178"><div align="center">
                                                  <input name="jornad_ci" type="submit" class="t12g" id="jornad_ci" onClick="MM_validateForm('ci_jornada','','RisNum','inicio_x_ci','','R','fin_x_ci','','R');return document.MM_returnValue" value="Consultar">
                                                </div></td>
                                                <td width="176"><div align="center">
                                                    <input name="reset_trabaj" type="reset" class="t12g" id="reset_trabaj" value="Restablecer" onClick="enviar()">
                                                </div></td>
                                              </tr>
                                          </table></td>
                                      </tr>
                                    </table>
                                    </td>
                                  </tr>
                                </table>
                              </form>
							  <form action="verifica_consulta_jorna_estruc.php" method="post" name="sampleform3" class="Estilo25" id="buscar_estructura">
							    <table width="438" height="139" border="1" id="tablaC">
                                  <tr>
                                    <td width="393">
                                      <p align="left" class="Estilo25">- Consulta por Estructuras </p>
                                         <table width="424" border="0">
                                          <tr>
                                            <td width="256" class="t12g">Fecha Inicio (DD-MM-AAAA) </td>
                                            <td width="158"><div align="center">
                                              <div align="center" class="Estilo53">
									<input size="10" id="fc_1200890085" type="text" name="inicio_x_estruc" readonly="readonly" title="DD/MM/YYYY" onClick="displayCalendar(this);">
									<img src="images/FSdateSelector/calendar.gif" width="16" height="16" />
				<!-- <SCRIPT LANGUAGE="JavaScript">FSfncWriteFieldHTML("sampleform3","inicio_x_estruc","Ninguna",100,"images/FSdateSelector/","ES",false,true)</SCRIPT> -->
                </div>
                                            </div></td>
                                          </tr>
                                          <tr>
                                            <td class="t12g">fecha final (DD-MM-AAAA) </td>
                                            <td><div align="center">
                                              <div align="center" class="Estilo53">
									<input size="10" id="fc_1200890086" type="text" name="fin_x_estruc" readonly="readonly" title="DD/MM/YYYY" onClick="displayCalendar(this);">
									<img src="images/FSdateSelector/calendar.gif" width="16" height="16" />
				<!-- <SCRIPT LANGUAGE="JavaScript">FSfncWriteFieldHTML("sampleform3","fin_x_estruc","Ninguna",100,"images/FSdateSelector/","ES",false,true)</SCRIPT> -->
                </div>
                                            </div></td>
                                          </tr>
                                      </table><p align="center" class="t12g">
                                        <input name="xestruc" type="radio" value="1" onClick="viewHide('tblestruc')" > 
                                        Por Totales
 										<input name="xestruc" type="radio" value="2" Onclick="viewHide('tblestruc')"> 
 										Por Detalles</p>
                                      <div align="center">
                                        <table width="172" border="0" id="tblestruc" style="display:none">
                                          <tr>
                                            <td width="166" class="t12g">
                                            <input name="radiobutton" type="radio" value="6" Onclick="viewHide('tabla6')">Regi&Oacute;n</td>
                                    </tr>
                                          <tr>
                                            <td class="t12g">
                                            <input name="radiobutton" type="radio" value="5" Onclick="viewHide('tabla5')">Direcci&Oacute;n</td>
                                    </tr>
                                          <tr>
                                            <td class="t12g">
                                            <input name="radiobutton" type="radio" value="4" Onclick="viewHide('tabla4')">Gerencia</td>
                                    </tr>
                                          <tr>
                                            <td class="t12g">
                                            <input name="radiobutton" type="radio" value="3" Onclick="viewHide('tabla3')">Coordinaci&oacute;n</td>
                                    </tr>
                                          <tr>
                                            <td class="t12g">
                                            <input name="radiobutton" type="radio" value="2" Onclick="viewHide('tabla2')">Departamento</td>
                                    </tr>
                                          <tr>
                                            <td class="t12g">
                                            <input name="radiobutton" type="radio" value="1" Onclick="viewHide('tabla00')">Grupo de Trabajo</td>
                                    </tr>
                                        </table>
                                        <table id="tabla6" style="display:none" width="200" border="0">
                                          <tr>
                                            <td><div align="center">
                                              <select name="region">
                                                <option value=""></option>
                                                <?php

$tablaestructura = mysql_query("SELECT * FROM estructura WHERE nivel=6 ORDER BY estruc ASC");
while ($registroestructura = mysql_fetch_array($tablaestructura))
{
?>
                                                <option value="<?php echo $registroestructura['estruc']; ?>"><?php echo $registroestructura['estruc']; ?></option>
                                                <?php
}
mysql_free_result($tablaestructura);
?>
                                                </select>
                                            </div></td>
                                    </tr>
                                            </table>
                                        <table id="tabla5" style="display:none" width="200" border="0">
                                          <tr>
                                            <td><div align="center">
                                              <select name="direccion">
                                                <option value="0"></option>
                                                <?php

$tablaestructura = mysql_query("SELECT * FROM estructura WHERE nivel=5 ORDER BY estruc ASC");
while ($registroestructura = mysql_fetch_array($tablaestructura))
{
?>
                                                <option value="<?php echo $registroestructura['estruc']; ?>"><?php echo $registroestructura['estruc']; ?></option>
                                                <?php
}
mysql_free_result($tablaestructura);
?>
                                                </select>
                                            </div></td>
                                    </tr>
                                            </table>
                                        <table id="tabla4" style="display:none" width="200" border="0">
                                          <tr>
                                            <td><div align="center">
                                              <select name="gerencia">
                                                <option value=""></option>
                                                <?php

$tablaestructura = mysql_query("SELECT * FROM estructura WHERE nivel=4 ORDER BY estruc ASC");
while ($registroestructura = mysql_fetch_array($tablaestructura))
{
?>
                                                <option value="<?php echo $registroestructura['estruc']; ?>"><?php echo $registroestructura['estruc']; ?></option>
                                                <?php
}
mysql_free_result($tablaestructura);
?>
                                                </select>
                                            </div></td>
                                    </tr>
                                            </table>
                                        <table id="tabla3" style="display:none" width="200" border="0">
                                          <tr>
                                            <td><div align="center">
                                              <select name="coordinacion">
                                                <option value=""></option>
                                                <?php

$tablaestructura = mysql_query("SELECT * FROM estructura WHERE nivel=3 ORDER BY estruc ASC");
while ($registroestructura = mysql_fetch_array($tablaestructura))
{
?>
                                                <option value="<?php echo $registroestructura['estruc']; ?>"><?php echo $registroestructura['estruc']; ?></option>
                                                <?php
}
mysql_free_result($tablaestructura);
?>
                                                </select>
                                            </div></td>
                                    </tr>
                                            </table>
                                        <table id="tabla2" style="display:none"  width="200" border="0">
                                          <tr>
                                            <td><div align="center">
                                              <select name="estructura">
                                                <option value=""></option>
                                                <?php

$tablaestructura = mysql_query("SELECT * FROM estructura WHERE nivel=2 ORDER BY estruc ASC");
while ($registroestructura = mysql_fetch_array($tablaestructura))
{
?>
                                                <option value="<?php echo $registroestructura['estruc']; ?>"><?php echo $registroestructura['estruc']; ?></option>
                                                <?php
}
mysql_free_result($tablaestructura);
?>
                                                </select>
                                            </div></td>
                                    </tr>
                                            </table>
                                        <table id="tabla00" style="display:none"  width="200" border="0">
                                          <tr>
                                            <td><div align="center">
                                              <select name="jefatura">
                                                <option value=""></option>
                                                <?php

$tablaestructura = mysql_query("SELECT * FROM estructura WHERE nivel=1 ORDER BY estruc ASC");
while ($registroestructura = mysql_fetch_array($tablaestructura))
{
?>
                                                <option value="<?php echo $registroestructura['estruc']; ?>"><?php echo $registroestructura['estruc']; ?></option>
                                                <?php
}
mysql_free_result($tablaestructura);
?>
                                                </select>
                                            </div></td>
                                    </tr>
                                            </table>                                     
                                        
                                        <table width="354" border="1">
                                          <tr>
                                            <td><span class="Estilo28">Ordenar por : <br> 
                                            (s&oacute;lo en el caso POR DETALLES)</span></td>
                                            <td width="65" class="Estilo28"><span class="Estilo27">
                                              <input name="ordenar" type="radio" value="1" checked>
                                            Horas</span></td>
                                            <td width="65" class="Estilo28"><span class="Estilo27">
                                              <input name="ordenar" type="radio" value="2">
                                            Vi&aacute;ticos</span></td>
										      <td width="65" class="Estilo28"><span class="Estilo27">
										      <input name="ordenar" type="radio" value="3">
									        Reposos</span></td>
                                          </tr>
                                        </table>
                                        <table width="369" border="0" id="porestructura">
                                          <tr>
                                            <td width="184"><div align="center">
                                              <input name="consulta_estruc" type="submit" class="t12g" id="consulta_estruc" onClick="MM_validateForm('inicio_x_estruc','','R','fin_x_estruc','','R');enviar();return document.MM_returnValue" value="Consultar">
                                            </div></td>
                                            <td width="175"><div align="center">
                                                <input name="busca_estruct2" type="reset" class="t12g" id="busca_estruct2" onClick="MM_validateForm('busca_estructura','','R');return document.MM_returnValue" value="Restablecer">
                                            </div></td>
                                          </tr>
                                        </table>
                                      </div></td>
                                  </tr>
                                </table>
						      </form>
                              <p>&nbsp;</p>
                              <p>&nbsp;</p>
                          </div>
					        <h1 align="right">
                              <table width="47%" border="0" cellspacing="0" cellpadding="0">
                                <tr> </tr>
                              </table>
                          </h1></td>
					</tr>
				  </table>				</td>
				<td width="16">&nbsp;</td>
			  </tr>
			</table>		  </td>
		</tr>
	  </table>
	  <p>&nbsp;</p>
	  </td>
	<td width="297" valign="top" background="images/index_32.gif">
		

          <table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
		  <td><img src="images/index_57.gif" width=240 height=1 alt=""></td>
		</tr>
	  </table>
	  <table width="243" border="0" cellspacing="0" cellpadding="0">
		<tr valign="top"> 
		
		</tr>
	  </table>
	  <div align="center" class="t12g"><span class="Estilo2">Sistema ARTS </span></div>
	  <ul class="Estilo9">
	    <li class="Estilo11"><a title="inicio.htm" href="inicio.html" target="_self">Inicio</a></li>
	    <li class="Estilo11"><a title="antecedentes.htm" href="antecedentes.htm" target="_self">Antecedentes</a></li>
	    <li class="Estilo11"><a title="Objetivos.html" href="Objetivos.html" target="_self">Objetivos</a></li>
	    <li class="Estilo11"><span class="Estilo10">Trabajadores </span>
            <ul>
              <li><a title="cargar_traba.php" href="cargar_traba.php" target="_self">Inclusion</a></li>
              <li><a title="consulta_trabaj.php" href="consulta_trabaj.php" target="_self">Consulta</a></li>
              <li><a title="actualizar_trabaj.php" href="actualizar_trabaj.php" target="_self">Modificaci&oacute;n</a></li>
              <li><a title="elim_traba.php" href="elim_traba.php" target="_self">Eliminaci&oacute;n</a></li>
              <li><a title="menu_graficar_trabaj.php" href="menu_graficar_trabaj.php" target="_self">Graficaci&oacute;n</a></li>
            </ul>
	      </li>
	    <li class="Estilo11"><span class="Estilo10">Jornadas </span>
            <ul>
              <li><a title="Cargar Jornada" href="cargar_jornada.php" target="_self">Inclusi&oacute;n</a></li>
              <li><a title="Consultar Jornada" href="consulta_jornada.php" target="_self">Consulta</a></li>
              <li><a title="Actualizar Jornada" href="actualizar_jornada.php" target="_self">Modificaci&oacute;n</a></li>
              <li><a title="Eliminar Jornada" href="elim_jornada.php" target="_self">Eliminaci&oacute;n</a></li>
              <li><a title="menu_graficar_jornada.php" href="menu_graficar_jornada.php" target="_self">Graficaci&oacute;n</a></li>
            </ul>
	      </li>
	    <li class="Estilo11"><span class="Estilo10">Menu Admin</span>
            <ul>
              <li><strong>Trabajadores</strong>
                  <ul>
                    <li><a title="consulta_trabaj.php" href="consulta_trabaj.php" target="_self">Consulta</a></li>
                    <li><a title="actualizar_trabaj.php" href="actualizar_trabaj.php" target="_self">Modificacion</a></li>
                    <li><a title="elim_traba.php" href="elim_traba.php" target="_self">Eliminaci&oacute;n</a></li>
                    <li><a title="menu_graficar_trabaj.php" href="menu_graficar_trabaj.php" target="_self">Graficaci&oacute;n</a></li>
                  </ul>
              </li>
              <li><strong>Usuarios </strong>
                  <ul>
                    <li><a title="Cargar Usuario" href="cargar_user.php" target="_self">Inclusi&oacute;n</a></li>
                    <li><a title="Consultar Usuario" href="consulta_user.php" target="_self">Consulta</a></li>
                    <li><a title="Actualizar Usuario" href="actualizar_user.php" target="_self">Modificaci&oacute;n</a></li>
                    <li><a title="Eliminar Usuario" href="elim_user.php" target="_self">Eliminaci&oacute;n</a></li>
                    <li><a title="Graficar datos de Usuario" href="menu_graficar_user.php" target="_self">Graficaci&oacute;n</a></li>
                  </ul>
              </li>
              <li><a title="Consulta Jornada" href="consulta_jornada.php" target="_self">Consulta - Reporte</a></li>
              <li><a title="Actualizar Jornada" href="actualizar_jornada.php" target="_self">Modificaci&oacute;n</a></li>
              <li><a title="Eliminar Jornada" href="elim_jornada.php" target="_self">Eliminaci&oacute;n</a></li>
            </ul>
	      </li>
	    <li class="Estilo11"><a title="download.html" href="download.html" target="_self">Descargas</a></li>
	    <li class="Estilo11"><a href="menu_sarts.html">Sistema ARTS </a></li>
	    <li class="Estilo11">Contacto SARTS</li>
	    <li class="Estilo11"><span class="Estilo10">FAQ </span>
            <ul>
              <li>Preguntas Generales</li>
              <li>Manual de Usuario</li>
            </ul>
	      </li>
	    <li class="Estilo11">Ayuda Online (proximamente)</li>
	    <li class="Estilo11">Forums (proximanete)</li>
	    </ul>
	  <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
		  <td><img src="images/index_57.gif" width=240 height=1 alt=""></td>
		</tr>
	  </table>
      <div align="left">
        <div align="center"><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Desarrollado 
          para:</strong></font></strong></font></strong></font>
        </div>
        <div align="center"><img src="images/logo%20de%20cadafe_2.gif" width="148" height="90"></div>
            <p align="center"><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong><font color="#CCCCCC" size="4">Regi&oacute;n 
              4</font></strong></font></strong></font></strong></font></p>
            <p align="center">
<script><!--
dows = new Array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
months = new Array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
now = new Date();
dow = now.getDay();
d = now.getDate();
m = now.getMonth();
h = now.getTime();
y = now.getFullYear();
document.write(dows[dow]+" "+d+" de "+months[m]+" de "+y);
//--></script></p></div></td>
  </tr>
</table>
<table width="778" border="0" cellspacing="0" cellpadding="0">
  <tr>
	<td background="images/index_66.gif" class="t12w"><b>&nbsp;&nbsp;&copy;2006-2007 
      MaxSystem.NET &nbsp;Derechos Reservados</b></td>
	<td width="102"><img src="images/index_69.jpg" width=102 height=36 alt=""></td>
	<td width="222" background="images/index_70.gif" align="center" class="t12w"><div align="center" class="Estilo11"><a href="#" class="t12w"><b>Data/Privacidad</b></a><b> 
        • <a href="#" class="t12w">Accesabilidad</a></b></div></td>
  </tr>
</table>

      </div></td>
</BODY>
</HTML>