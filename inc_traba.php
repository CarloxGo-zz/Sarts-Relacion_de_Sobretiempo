<?php
include ("security_system.php");
ini_set('error_reporting',0);
?>
<HTML>
<HEAD>
<TITLE>Incluir Trabajador. Sistema ARTS Online</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<script language="JavaScript">

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
.Estilo28 {color: #0000FF}
.Estilo29 {color: #FFFFFF}
.Estilo30 {font-size: 12px; text-decoration: none; font-family: tahoma;}
a:link {
	color: #333333;
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
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' debe contener una dirección e-mail.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' debe contener un número.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' debe contener un número entre '+min+' y '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' es requerido.\n'; }
  } if (errors) alert('El(Los) siguiente(s) error(es) ha(n) ocurrido:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>
<script type="text/javascript" language="JavaScript1.2" src="stmenu.js"></script>
<script language="JavaScript" type="text/JavaScript">
function enviar(){
var enviarme=confirm("¿Desea cargar estos datos?");
if (enviarme)
   return true ;
else
   return false ;
}
</script>

</HEAD>
<BODY BGCOLOR=#FFFFFF background="images/bgb.gif" LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0 onLoad="MM_preloadImages('images/18-1.gif','images/8-1.gif')" tracingsrc="images/-downdis.gif" tracingopacity="100" oncontextmenu="return false">
<td colspan="2" valign="middle"><div align="center"> 
       <table width="778" border="0" cellspacing="0" cellpadding="0">
  <tr>
	<td align="right" background="images/index_01.gif"><img src="images/index_03.gif" width=59 height=34 alt=""><a href="inicio.html"><img src="images/index_ini.gif" alt="" width=82 height=34 border="0"></a><img src="images/index_faq.GIF" width=82 height=34 alt=""><img src="images/index_link.gif" width=89 height=34 alt=""><a href="finalizar_jornada.php" target="_self"><img src="images/index_sarts.gif" alt="" width=71 height=34 border="0"></a><img src="images/index_contac.GIF" width=85 height=34 alt=""></td>
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
<form action="inc_trab_bd.php" method="post" enctype="multipart/form-data" name="carga_traba"  id="carga_traba" onSubmit="MM_validateForm('ci','','R','nombres','','R','apellidos','','R','region','','R','direccion','','R','gerencia','','R','coordinacion','','R','estructura','','R','jefatura','','R');return document.MM_returnValue">
 <h3 class="Estilo27">Incluir Trabajador </h3>
  <table width="499" height="304" border="0">
    <tr>
      <td width="193" class="t12g"><p class="Estilo28">Foto</p></td>
      <td width="296"><input name="foto" type="file" id="foto" size="30" style="background:#FFB400" lang="es" maxlength="30"></td>
    </tr>
    <tr>
      <td height="24" class="t12g Estilo28">C&Eacute;dula</td>
      <td><label>
      <?php
	  $ci=$_POST['ci'];
      echo '<input name="ci" type="text" id="ci" size="12" maxlength="10" readonly="readonly" value="'.$ci.'">';
	  ?>
      </label></td>
    </tr>
    <tr>
      <td class="t12g Estilo28">Nombres</td>
      <td><label>
        <input name="nombres" type="text" id="nombres" size="30" maxlength="30" onKeyUp="this.value = this.value.toUpperCase();">
      </label></td>
    </tr>
    <tr>
      <td class="t12g Estilo28">Apellidos</td>
      <td><label>
        <input name="apellidos" type="text" id="apellidos" size="30" maxlength="30" onKeyUp="this.value = this.value.toUpperCase();">
      </label></td>
    </tr>
    <tr>
      <td class="t12g Estilo28">Jefatura</td>
      <td><label>
        <option value=""></option>
			<?php
include ("includes/bdkey.php");
$jefatura=$_POST['jefatura'];
echo '<input name="jefatura" type="text" id="jefatura" readonly="readonly" value="'.$jefatura.'">';
?>
      </label></td>
    </tr>
	    <tr>
      <td class="t12g Estilo28">N* de Estructura</td>
      <td><label>
<?php
$query = mysql_query("SELECT * FROM estruct WHERE jefatura='$jefatura'");

while ($row=mysql_fetch_array($query))
{
		echo '<input name="id_estructura" type="text" id="id_estructura" readonly="readonly" value="'.$row[id_estructura].'">';
        ?>
	  </label></td>
    </tr>
	    <tr>
      <td class="t12g Estilo28">Departamento</td>
      <td><label>
        <?php
		echo '<input name="estructura" type="text" id="estructura" size="30" maxlength="30" readonly="readonly" value="'.$row[estructura].'">';
        ?>
      </label></td>
    </tr>
	    <tr>
      <td class="t12g Estilo28">Coordinaci&oacute;n</td>
      <td><label>
         <?php
		echo '<input name="coordinacion" type="text" id="coordinacion" readonly="readonly" value="'.$row[coordinacion].'">';
        ?>
      </label></td>
    </tr>
	    <tr>
      <td class="t12g Estilo28">Gerencia</td>
      <td><label>
         <?php
		echo '<input name="gerencia" type="text" id="gerencia" readonly="readonly" value="'.$row[gerencia].'">';
        ?>
	  </label></td>
    </tr>
	<td class="t12g Estilo28">Direcci&oacute;n</td>
      <td><label>
         <?php
		echo '<input name="direccion" type="text" id="direccion" readonly="readonly" value="'.$row[direccion].'">';
        ?>
      </label></td>
    </tr>
		<tr>
      <td class="t12g Estilo28">Regi&Oacute;n</td>
      <td><label>
         <?php
		echo '<input name="region" type="text" id="region" readonly="readonly" value="'.$row[region].'">';
		}
        ?>
	  </label></td>
    </tr>
    <tr>
      <td class="t12g Estilo28">Cargo</td>
      <td><select name="cargo">
        <?php
$selectcargo = mysql_query("SELECT * FROM cargos");

while ($registrocargo = mysql_fetch_array($selectcargo))
{
?>
<option value="<?php echo $registrocargo['cargo']; ?>"><?php echo $registrocargo['cargo']; ?></option>
<?php
}
mysql_free_result($selectcargo) and mysql_free_result($query);
?>
      </select></td>
    </tr>
    <tr>
      <td class="t12g Estilo28">Horario</td>
      <td><label>
         <select name="horario">
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
      </label></td>
    </tr>
    <tr>
      <td class="t12g Estilo28">Estatus</td>
      <td><label>
        <select name="estatus" id="estatus">
          <option value="REGULAR">REGULAR</option>
          <option value="CONTRATADO">CONTRATADO</option>
          <option value="EVENTUAL">EVENTUAL</option>
        </select>
      </label></td>
    </tr>
  </table>
  <table width="387" border="0">
    <tr>
      <td width="129" height="46"><div align="center">
          <label>
<input name="Submit" type="submit" onClick="MM_validateForm('nombres','','R','apellidos','','R');enviar();return document.MM_returnValue" value="Enviar" style="background:#FFB400">

          </label>
      </div></td>
      <td width="119"><div align="center">
          <label>
          <input name="reset" type="reset" id="reset" value="Restablecer" style="background:#FFB400">
          </label>
      </div></td>
      <td width="117"><div align="center">
          <label>
          <input name="help" type="submit" id="help" value="Ayuda" style="background:#FFB400">
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
		  <td class="t12w Estilo29"><img src="images/index_57.gif" width=240 height=1 alt=""></td>
		</tr>
	  </table>
	  <div align="center" class="t12w Estilo29">Sistema ARTS                        </div>
		        <ul class="Estilo9 Estilo31"><li class="t12w Estilo29"><a title="inicio.htm" href="inicio.html" target="_self">Inicio</a></li>
            <li class="t12w Estilo29"><a title="antecedentes.htm" href="antecedentes.htm" target="_self">Antecedentes</a></li>
            <li class="t12w Estilo29"><a title="Objetivos.html" href="Objetivos.html" target="_self">Objetivos</a></li>
            <li class="Estilo11 Estilo29"><span class="Estilo30">Trabajadores
                
              </span>
              <ul>
                    <li class="Estilo30"><a title="cargar_traba.php" href="cargar_traba.php" target="_self">Inclusion</a></li>
                    <li class="Estilo30"><a title="consulta_trabaj.php" href="consulta_trabaj.php" target="_self">Consulta</a></li>
                    <li class="Estilo30"><a title="actualizar_trabaj.php" href="actualizar_trabaj.php" target="_self">Modificacion</a></li>
                    <li class="Estilo30"><a title="elim_traba.php" href="elim_traba.php" target="_self">Eliminacion</a></li>
                    <li class="Estilo30"><a title="menu_graficar_trabaj.php" href="menu_graficar_trabaj.php" target="_self">Graficacion</a></li>
                </ul>
            </li>
            <li class="Estilo11 Estilo29"><span class="Estilo30">Jornadas
              
              </span>
              <ul>
                <li class="Estilo30"><a title="cargar_jornada.html" href="cargar_jornada.php" target="_self">Inclusion</a></li>
                <li class="Estilo30"><a title="consulta_jornada.php" href="consulta_jornada.php" target="_self">Consulta</a></li>
                <li class="Estilo30"><a title="actualizar_jornada.php" href="actualizar_jornada.php" target="_self">Modificacion</a></li>
                <li class="Estilo30"><a title="delete_jornada.php" href="elim_jornada.php" target="_self">Eliminacion</a></li>
                <li class="Estilo30"><a title="menu_graficar_jornada.php" href="menu_graficar_jornada.php" target="_self">Graficacion</a></li>
              </ul>
              </li>
            <li class="Estilo11 Estilo29"><span class="Estilo30">Menu Admin
              </span>
              <ul><li><span class="Estilo30"><strong>Trabajadores</strong>
                </span>
                <ul><li class="Estilo30"><a title="consulta_trabaj.php" href="consulta_trabaj.php" target="_self">Consulta</a></li>
                        <li class="Estilo30"><a title="actualizar_trabaj.php" href="actualizar_trabaj.php" target="_self">Modificacion</a></li>
                        <li class="Estilo30"><a title="elim_traba.php" href="elim_traba.php" target="_self">Eliminacion</a></li>
                        <li class="Estilo30"><a title="menu_graficar_trabaj.php" href="menu_graficar_trabaj.php" target="_self">Graficacion</a></li>
                      </ul>
                    </li>
                    <li><span class="Estilo30"><strong>Usuarios
                        </strong>
                    </span>
                      <ul>
                          <li class="Estilo30"><a title="cargar_user.php" href="cargar_user.php" target="_self">Inclusion</a></li>
                          <li class="Estilo30"><a title="consulta_user.php" href="consulta_user.php" target="_self">Consulta</a></li>
                          <li class="Estilo30"><a title="actualizar_user.php" href="actualizar_user.php" target="_self">Modificacion</a></li>
                          <li class="Estilo30"><a title="elim_user.php" href="elim_user.php" target="_self">Eliminacion</a></li>
                          <li class="Estilo30"><a title="menu_graficar_user.php" href="menu_graficar_user.php" target="_self">Graficacion</a></li>
                        </ul>
                    </li>
                    <li class="Estilo30"><a title="consulta_jornada.php" href="consulta_jornada.php" target="_self">Consulta - Reporte</a></li>
                    <li class="Estilo30"><a title="actualizar_jornada.php" href="actualizar_jornada.php" target="_self">Modificacion</a></li>
                    <li class="Estilo30"><a title="elim_jornada.php" href="elim_jornada.php" target="_self">Eliminacion</a></li>
                    </ul>
            </li>
            <li class="t12w Estilo29"><a title="download.html" href="download.html" target="_self">Descargas</a></li>
            <li class="t12w Estilo29"><a href="menu_sarts.html">Sistema ARTS                        </a></li>
            <li class="t12w Estilo29">Contacto SARTS</li>
            <li class="Estilo11 Estilo29"><span class="Estilo30">FAQ
                
              </span>
              <ul>
                    <li class="Estilo30">Preguntas Generales</li>
                    <li class="Estilo30">Manual de Usuario</li>
                </ul>
            </li>
            <li class="t12w Estilo29">Ayuda Online (proximamente)</li>
            <li class="t12w Estilo29">Forums (proximanete)</li>
        </ul>			  
      <div align="left">
        <div align="center"><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Desarrollado 
          para:</strong></font></strong></font></strong></font>        </div>
        <div align="center"><img src="images/logo de cadafe_2.gif" width="148" height="90"></div>
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
//--></script></p></div></td>
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
<!-- End ImageReady Slices -->	  
 

</BODY>
</HTML>