<?php
include ("security_system.php");
ini_set('error_reporting',0);

if($_SESSION["level"]==1 or $_SESSION["level"]==7)
{
?>
<HTML>
<HEAD>
<TITLE>Men&uacute; de Relaci&oacute;n de Jornadas. Sistema ARTS Online</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
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
.Estilo28 {
	font-size: 14px;
	color: #0000FF;
}
.Estilo32 {color: #FFB400}
.Estilo35 {font-size: 16px; color: #0000FF; font-weight: bold; }
.Estilo36 {font-size: 16px}
.Estilo11 {
	color: #FFFFFF;
	font-weight: bold;
}
.Estilo2 {font-size: 18px; color: #FFFFFF;}
.Estilo9 {color: #FFFF00}
a:link {
	color: #000000;
}
a:visited {
	color: #666666;
}
-->

</style>
<script type="text/JavaScript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
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
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' debe contener una dirección.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' debe contener un número.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' debe contener un número entre '+min+' y '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' es requerida.\n'; }
  } if (errors) alert('El siguiente error ha sucedido:\n'+errors);
  document.MM_returnValue = (errors == '');
}


//-->
</script>
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
</script>

<script language="javascript">
function mis_datos(){
var key=window.event.keyCode;
if (key < 48 || key > 57){
window.event.keyCode=0;
}}
</script>

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
			<table width="508" border="0" cellspacing="0" cellpadding="0">
                  <tr> 
				<td width="508" bgcolor="#FFFFFF" class="t12b"><table width="101%" border="0" cellspacing="0" cellpadding="0">
                        <tr> 
                          <td height="471" align="center" bgcolor="#FFFFFF"><div align="center">
  <p class="Estilo35"><font color="#009900">Modificar Plantilla</font></p>
  <p class="Estilo35"><span class="Estilo36"><font color="#009900"><em><strong>Datos de entrada</strong></em></font><font color="#009900"><em><strong></strong></em></font></span></p>
  <p align="left" class="t12g Estilo28">&nbsp;</p>
 <table width="434" border="1">
   <tr>
     <td width="433"><div align="center">

<!-- FORMULARIO JORNADA POR SEMANA POR GRUPO--> 

<form action="inc_jornada_grupo.php" method="post" name="sampleform1" onSubmit="MM_validateForm('fecha','','R','ci','','RisNum');return document.MM_returnValue">
   <table width="420" height="170" border="1" id="tablaA">
    <tr>
      <td width="377" height="164"><div align="center">
            <p align="center" class="Estilo32 Estilo45"><strong>Por Jornada</strong>
              <?php
										$cuentam=$_COOKIE['usuario'];
										echo '<input name="cuenta" type="hidden" value="'.$_COOKIE['usuario'].'">';
										?>
										</p>
            <table width="370" border="0" id="plantilla_jornada">
                                        <tr>
                                          <td width="180" class="t12g" > Plantilla a seleccionar</td>
                                          <td width="180"><div align="left">
                                              <select name="plt_jornada">
                                                <option value=""></option>
                                                <?php
												$query = mysql_query("SELECT * FROM plant WHERE cuenta='$cuentam' ORDER BY nombre_plantilla ASC");
												while ($registro = mysql_fetch_array($query))
												{
												?>
												<option value="<?php echo $registro['nombre_plantilla']; ?>"><?php echo $registro['nombre_plantilla']; ?></option>
												<?php
												}
												mysql_free_result($query);
												?>
                                              </select>
                                          </div></td>
                                        </tr>
                                      </table>
			<table width="210" border="0">
              <tr>
                <td width="100" class="comment"><div align="center" class="Estilo69">
                    
                    <input name="Submit2" type="submit" style="background:#FFB400" lang="es" onClick="MM_validateForm('fecha_tarjeta_grupo1','','R');return document.MM_returnValue" value="Editar">
                        </div></td>
                <td width="100" class="comment"><div align="center" class="Estilo69">
                    
                    <input name="Reset" type="reset" id="Reset" value="Limpiar" style="background:#FFB400">
                        </div></td>
              </tr>
            </table>
          </div></td>
    </tr>
  </table>
  </form>

<!-- FORMULARIO JORNADA POR SEMANA POR GRUPO--> 

<form action="mod_plantilla_semana.php" method="post" name="sampleform2" onSubmit="MM_validateForm('fecha','','R','ci','','RisNum');return document.MM_returnValue">
					        <table width="415" height="162" border="1" id="tablaA">
                              <tr>
                                <td width="377" height="156"><span class="t12g Estilo41">
                                  </span><span class="Estilo44">
                                  <p align="center" class="Estilo32 Estilo45"><strong>Por Semana</strong></p>
                                </span>
                                  <div align="center">
                                    <p class="t12g">
                                      <?php
										$cuentam=$_COOKIE['usuario'];
										echo '<input name="cuenta" type="hidden" value="'.$_COOKIE['usuario'].'">';
										?>
										</p>
										<table width="370" border="0" id="plantilla_semana">
                                        <tr>
                                          <td width="180" class="t12g" > Plantilla a seleccionar</td>
                                          <td width="180"><div align="left">
                                              <select name="plt_semana">
                                                <option value=""></option>
                                                <?php
												$query = mysql_query("SELECT * FROM plant WHERE cuenta='$cuentam' ORDER BY nombre_plantilla ASC");
												while ($registro = mysql_fetch_array($query))
												{
												?>
												<option value="<?php echo $registro['nombre_plantilla']; ?>"><?php echo $registro['nombre_plantilla']; ?></option>
												<?php
												}
												mysql_free_result($query);
												mysql_close($dbh);
												?>
                                              </select>
                                          </div></td>
                                        </tr>
                                      </table>
                                      <table width="222" border="0">
                                        <tr>
                                          <td width="108" class="Estilo71"><div align="center" class="Estilo68" onfocus="MM_validateForm('fecha_tarjeta_grupo2','','R');return document.MM_returnValue">
                                            <input name="Submit3" type="submit" style="background:#FFB400" lang="es" onClick="MM_validateForm('fecha_tarjeta_grupo2','','R');return document.MM_returnValue" value="Editar">
                                          </div></td>
                                          <td width="104" class="Estilo71"><div align="center" class="Estilo68">
                                            <input name="Reset3" type="reset" id="Reset3" value="Limpiar" style="background:#FFB400">
                                          </div></td>
                                        </tr>
                                      </table>
                                    </div></td>
                              </tr>
                            </table>
					        </form></div></td>
   			</tr>
 			</table>
 			<p>&nbsp;</p>
                          </div>
		                    <p>&nbsp;</p>
	                      <p>&nbsp;</p>
	                      <p>&nbsp;</p>
	                      <p>&nbsp;</p>
	                      <p>&nbsp;</p></td>
                        </tr></table>
	</td></tr></table>
</td></tr></table>
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <table width="5" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td width="5">&nbsp;</td>
        </tr>
      </table>
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
	  <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
		  <td><img src="images/index_57.gif" width=240 height=1 alt=""></td>
		</tr>
	  </table>
      <div align="center" class="t12g"><span class="Estilo2">Sistema ARTS </span></div>
      <ul class="Estilo9">
        <li class="Estilo11"><a title="inicio.htm" href="inicio.html" target="_top">Inicio</a></li>
        <li class="Estilo11"><a title="antecedentes.htm" href="antecedentes.htm" target="_top">Antecedentes</a></li>
        <li class="Estilo11"><a title="Objetivos.html" href="Objetivos.html" target="_top">Objetivos</a></li>
        <li class="Estilo11"><span class="Estilo36">Trabajadores </span>
            <ul>
              <li><a title="cargar_traba.php" href="cargar_traba.php" target="_self">Inclusion</a></li>
              <li><a title="consulta_trabaj.php" href="consulta_trabaj.php" target="_self">Consulta - Reporte</a></li>
              <li><a title="actualizar_trabaj.php" href="actualizar_trabaj.php" target="_self">Modificacion</a></li>
              <li><a title="elim_traba.php" href="elim_traba.php" target="_self">Eliminacion</a></li>
              <li><a title="menu_graficar_trabaj.php" href="menu_graficar_trabaj.php" target="_self">Graficacion</a></li>
            </ul>
        </li>
        <li class="Estilo11"><span class="Estilo36">Jornadas </span>
            <ul>
              <li><a title="cargar_jornada.html" href="cargar_jornada.php" target="_self">Inclusion</a></li>
              <li><a title="consulta_jornada.php" href="consulta_jornada.php" target="_self">Consulta - Reporte</a></li>
              <li><a title="actualizar_jornada.php" href="actualizar_jornada.php" target="_self">Modificacion</a></li>
              <li><a title="delete_jornada.php" href="elim_jornada.php" target="_self">Eliminacion</a></li>
              <li><a title="menu_graficar_jornada.php" href="menu_graficar_jornada.php" target="_self">Graficacion</a></li>
            </ul>
        </li>
        <li class="Estilo11"><span class="Estilo36">Menu Admin</span>
            <ul>
              <li>Trabajadores
                  <ul>
                    <li><a title="consulta_trabaj.php" href="consulta_trabaj.php" target="_self">Consulta - Reporte</a></li>
                    <li><a title="actualizar_trabaj.php" href="actualizar_trabaj.php" target="_self">Modificacion</a></li>
                    <li><a title="elim_traba.php" href="elim_traba.php" target="_self">Eliminacion</a></li>
                    <li><a title="menu_graficar_trabaj.php" href="menu_graficar_trabaj.php" target="_self">Graficacion</a></li>
                  </ul>
              </li>
              <li>Usuarios 
                  <ul>
                    <li><a title="cargar_user.php" href="cargar_user.php" target="_self">Inclusion - Carga</a></li>
                    <li><a title="consulta_user.php" href="consulta_user.php" target="_self">Consulta - Reporte</a></li>
                    <li><a title="actualizar_user.php" href="actualizar_user.php" target="_self">Modificacion</a></li>
                    <li><a title="elim_user.php" href="elim_user.php" target="_self">Eliminacion</a></li>
                    <li><a title="menu_graficar_user.php" href="menu_graficar_user.php" target="_self">Graficacion</a></li>
                  </ul>
              </li>
              <li><a title="consulta_jornada.php" href="consulta_jornada.php" target="_self">Consulta - Reporte</a></li>
              <li><a title="actualizar_jornada.php" href="actualizar_jornada.php" target="_self">Modificacion</a></li>
              <li><a title="elim_jornada.php" href="elim_jornada.php" target="_self">Eliminacion</a></li>
            </ul>
        </li>
        <li class="Estilo11"><a title="download.html" href="download.html" target="_self">Descargas</a></li>
        <li class="Estilo11"><a href="menu_sarts.html">Sistema ARTS </a></li>
        <li class="Estilo11">Contacto SARTS</li>
        <li class="Estilo11"><span class="Estilo36">FAQ </span>
            <ul>
              <li>Preguntas Generales</li>
              <li>Manual de Usuario</li>
            </ul>
        </li>
        <li class="Estilo11">Ayuda Online (proximamente)</li>
        <li class="Estilo11">Forums (proximanete)</li>
        </ul>
      <p align="center"><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif">
	  <strong>Desarrollado 
          para:</strong></font></strong></font></strong></font>        </p>
      <div align="left">
        <div align="center"><img src="images/logo%20de%20cadafe_2.gif" width="148" height="90"></div>
            <p align="center"><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong><font color="#CCCCCC" size="4">Regi&oacute;n 
              4</font></strong></font></strong></font></strong></font></p>
            <p align="center">
          <script><!--
dows = new Array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sabado");
months = new Array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
now = new Date();
dow = now.getDay();
d = now.getDate();
m = now.getMonth();
h = now.getTime();
y = now.getFullYear();
document.write(dows[dow]+" "+d+" de "+months[m]+" de "+y);
//--></script></p>
      </div></td>
  </tr>
</table>
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
}else{
header("Location: pagina_no_autorizada.php");
}
?>