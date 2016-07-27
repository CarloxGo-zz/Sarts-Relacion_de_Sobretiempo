<?php
include ("security_system.php");
ini_set('error_reporting',0);

if($_SESSION["autentificado"] != "SI" && $_SESSION['level'] !=7){
header ("Location: pagina_no_autorizada.php");
}
?>
<HTML>
<HEAD>
<TITLE>Incluir Usuario. Sistema ARTS Online</TITLE>
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

<script language="javascript">
  function refreshImg(){
     document.carga_traba.picture.src = 'file:///'+ document.carga_traba.imageField.value;
   }
</script>


<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<link rel="stylesheet" href="main.css" type="text/css" http-equiv="Window-target" content="_top"/>

<style type="text/css">
<!--
.Estilo27 {	color: #0066FF;
	font-style: italic;
}
.Estilo28 {color: #FFFFFF}
.Estilo30 {font-size: 16px}
a:link {
	color: #333333;
}
a:visited {
	color: #666666;
}
.Estilo31 {color: #0000FF}
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
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' debe contener una dirección e-mail válida.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' debe contener un número \n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' es requerido.\n'; }
  } if (errors) alert('Los siguientes errores han ocurrido:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>

<script type="text/javascript" language="JavaScript1.2" src="stmenu.js">
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

<script language="javascript">
function validar2(evt)
{
//alert(evt);
evt = (evt) ? evt : event
var key = (evt.which) ? evt.which : evt.keyCode;
if (key > 47 && key < 58 || key == 8 || key == 37 || key == 39 || key == 46 || key == 9) { return true;}
else {return false;}
}
</script>

<script LANGUAGE="JavaScript">
<!--
function revisa() { 

if ((document.inc_trabajador.pass1.value == "") & (document.inc_trabajador.pass2.value == "")) {
        alert('Ingrese un password!.');
        return false;     } else
{
if (document.laforma.elinputuno.value != document.laforma.elinputdos.value)  {
        alert('Por favor revise los valores nuevamente.');
        return false;     } 
else {
        return true;
     }
}}
//-->

</script> 
</HEAD>
<BODY BGCOLOR=#FFFFFF background="images/bgb.gif" LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0 onLoad="MM_preloadImages('images/18-1.gif','images/8-1.gif')" tracingsrc="images/-downdis.gif" tracingopacity="100" oncontextmenu="return false">

<td colspan="2" valign="middle"><div align="center"> 
       <table width="778" border="0" cellspacing="0" cellpadding="0">
  <tr>
	<td align="right" background="images/index_01.gif"><img src="images/index_03.gif" width=59 height=34 alt=""><a href="inicio.html"><img src="images/index_ini.gif" alt="" width=82 height=34 border="0"></a><img src="images/index_faq.GIF" width=82 height=34 alt=""><img src="images/index_link.gif" width=89 height=34 alt=""><a href="finalizar_sesion.php" target="_self"><img src="images/index_sarts.gif" alt="" width=71 height=34 border="0"></a><img src="images/index_contac.GIF" width=85 height=34 alt=""></td>
  </tr>
</table>
<table width="778" border="0" cellspacing="0" cellpadding="0">
  <tr>
	<td> <div align="right"><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif"></font>
	  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="778" height="174">
        <param name="movie" value="3.swf">
        <param name="quality" value="high">
        <embed src="3.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="778" height="174"></embed>
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
                          <td height="471" align="center" bgcolor="#FFFFFF">
<form  name="inc_trabajador" method="post" action="inc_user_bd.php">
  <h3 class="Estilo27 Estilo31">Incluir Usuario</h3>
<?php
// Conexion el servidor
include ("includes/bdkey.php");
?>
  <table width="456" height="280" border="0">
    <tr>
      <td width="220" class="t12g Estilo31">C&Eacute;dula</td>
      <td width="195"><label>
      <input name="ci" type="text" id="ci" size="12" maxlength="10" onKeyPress="return validar2(event)" />
      </label></td>
    </tr>
    <tr>
      <td class="t12g Estilo31">Nombres</td>
      <td><label>
      <input name="nombres" type="text" id="nombres" size="25" maxlength="22" />
      </label></td>
    </tr>
    <tr>
      <td class="t12g Estilo31">Apellidos</td>
      <td><label>
        <input name="apellidos" type="text" id="apellidos" size="25" maxlength="22" />
      </label></td>
    </tr>
		<td class="t12g Estilo31">Correo Electr&Oacute;nico</td>
		<td><label>
        <input name="email" type="text" id="email" size="25" maxlength="30" />
      </label></td><tr>
      <td class="t12g Estilo31">Usuario</td>
      <td><label>
        <input name="user" type="text" id="user" size="25" maxlength="22" />
      </label></td>
    </tr>
    <tr>
      <td class="t12g Estilo31">Password </td>
      <td><label>
        
        <input name="pwd" type="password" id="pwd" size="25" maxlength="22" />
      </label></td></tr>
	    <td class="t12g Estilo31">re-escribir Password </td>

      <td><label>
        <input  name="conf_pwd" type="password" id="conf_pwd" size="25" maxlength="22" />
      </label></td>
    </tr>
    
	<tr>
      <td height="34" class="t12g"><p class="Estilo31">Estructura</p></td>
      <td><label>
      <select name="estructura">
        <option value=""></option>
        <?php
$tablaestructura = mysql_query("SELECT * FROM estructura ORDER BY estruc ASC");
while ($registroestructura = mysql_fetch_array($tablaestructura))
{

?>
<option value="<?php echo $registroestructura['estruc']; ?>"><?php echo $registroestructura['estruc'];
?></option>
<?php
}
mysql_free_result($tablaestructura);
?>
</select>
      </label></td>
    </tr>
  </table>
  <table width="387" border="0">
    <tr>
      <td width="129" height="46"><div align="center">
          <label>
          <input name="enviar" type="submit" style="background:#FFB400" lang="es" onClick="enviar();MM_validateForm('ci','','RisNum','nombres','','R','apellidos','','R','email','','RisEmail','user','','R','pass1','','R','pass2','','R');return document.MM_returnValue" value="Enviar">
          </label>
      </div></td>
      <td width="119"><div align="center">
          <label>
          <input name="reset" type="reset" id="reset" value="Reetablecer" style="background:#FFB400" lang="es">
          </label>
      </div></td>
      <td width="117"><div align="center">
          <label>
          <input name="help" type="submit" id="help" value="Ayuda" style="background:#FFB400" lang="es">
          </label>
      </div></td>
    </tr>
  </table>
</form>
<h1 align="right"><table width="47%" border="0" cellspacing="0" cellpadding="0">
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
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
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
		<tr valign="top">		</tr>
	  </table>
	  <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
		  <td><img src="images/index_57.gif" width=240 height=1 alt=""></td>
		</tr>
	  </table>
	  <div align="center" class="t12g">
        <p class="t14w Estilo30">Sistema ARTS </p>
        </div>
      <ul class="Estilo9">
        <li class="Estilo11 Estilo26 Estilo28"><a title="inicio.htm" href="inicio.html" target="_top">Inicio</a></li>
        <li class="Estilo11 Estilo26 Estilo28"><a title="antecedentes.htm" href="antecedentes.htm" target="_top">Antecedentes</a></li>
        <li class="Estilo11 Estilo26 Estilo28"><a title="Objetivos.html" href="Objetivos.html" target="_top">Objetivos</a></li>
        <li class="Estilo11 Estilo26 Estilo28"><span class="Estilo10">Trabajadores </span>
            <ul>
              <li><a title="cargar_traba.php" href="cargar_traba.php" target="_self">Inclusion</a></li>
              <li><a title="consulta_trabaj.php" href="consulta_trabaj.php" target="_self">Consulta</a></li>
              <li><a title="actualizar_trabaj.php" href="actualizar_trabaj.php" target="_self">Modificacion</a></li>
              <li><a title="elim_traba.php" href="elim_traba.php" target="_self">Eliminacion</a></li>
              <li><a title="menu_graficar_trabaj.php" href="menu_graficar_trabaj.php" target="_self">Graficacion</a></li>
            </ul>
        </li>
        <li class="Estilo11 Estilo26 Estilo28"><span class="Estilo10">Jornadas </span>
            <ul>
              <li><a title="cargar_jornada.html" href="cargar_jornada.php" target="_self">Inclusion</a></li>
              <li><a title="consulta_jornada.php" href="consulta_jornada.php" target="_self">Consulta</a></li>
              <li><a title="actualizar_jornada.php" href="actualizar_jornada.php" target="_self">Modificacion</a></li>
              <li><a title="delete_jornada.php" href="delete_jornada.php" target="_self">Eliminacion</a></li>
              <li><a title="menu_graficar_jornada.php" href="menu_graficar_jornada.php" target="_self">Graficacion</a></li>
            </ul>
        </li>
        <li class="Estilo11 Estilo26 Estilo28"><span class="Estilo10">Menu Admin</span>
            <ul>
              <li><strong>Trabajadores</strong>
                  <ul>
                    <li><a title="consulta_trabaj.php" href="consulta_trabaj.php" target="_self">Consulta</a></li>
                    <li><a title="actualizar_trabaj.php" href="actualizar_trabaj.php" target="_self">Modificacion</a></li>
                    <li><a title="elim_traba.php" href="elim_traba.php" target="_self">Eliminacion</a></li>
                    <li><a title="menu_graficar_trabaj.php" href="menu_graficar_trabaj.php" target="_self">Graficacion</a></li>
                  </ul>
              </li>
              <li><strong>Usuarios </strong>
                  <ul>
                    <li><a title="cargar_user.php" href="cargar_user.php" target="_self">Inclusion</a></li>
                    <li><a title="consulta_user.php" href="consulta_user.php" target="_self">Consulta</a></li>
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
        <li class="Estilo11 Estilo26 Estilo28"><a title="download.html" href="download.html" target="_self">Descargas</a></li>
        <li class="Estilo11 Estilo26 Estilo28"><a href="menu_sarts.html">Sistema ARTS </a></li>
        <li class="Estilo11 Estilo26 Estilo28">Contacto SARTS</li>
        <li class="Estilo11 Estilo26 Estilo28"><span class="Estilo10">FAQ </span>
            <ul>
              <li>Preguntas Generales</li>
              <li>Manual de Usuario</li>
            </ul>
        </li>
        <li class="Estilo11 Estilo26 Estilo28">Ayuda Online (proximamente)</li>
        <li class="Estilo11 Estilo26 Estilo28">Forums (proximanete)</li>
        </ul>
  
        <div align="center"><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Desarrollado 
          para:</strong></font></strong></font></strong></font>        </div>
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