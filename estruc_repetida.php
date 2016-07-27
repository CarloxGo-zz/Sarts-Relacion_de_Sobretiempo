<?php
session_start();
if ($_SESSION["autentificado"] != "SI") {
    header("Location: sesion.php");
    exit();
}
?>
<HTML>
<HEAD>
<TITLE>Error Inclsión Jornada. Sistema ARTS Online</TITLE>
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
</HEAD>
</HTML>
<HTML>
<HEAD>
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
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>
<script type="text/javascript" language="JavaScript1.2" src="stmenu.js"></script>
</HEAD>
<BODY BGCOLOR=#FFFFFF background="images/bgb.gif" vlink="#0000FF" LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0 onLoad="MM_preloadImages('images/18-1.gif','images/8-1.gif')" tracingsrc="images/-downdis.gif" tracingopacity="100" oncontextmenu="return false">
a 
<td colspan="2" valign="middle"><div align="center"> 
       <table width="778" border="0" cellspacing="0" cellpadding="0">
  <tr>
	<td align="right" background="images/index_01.gif"><img src="images/index_03.gif" width=59 height=34 alt=""><a href="inicio.html"><img src="images/index_ini.gif" alt="" width=82 height=34 border="0"></a><img src="images/index_faq.GIF" width=82 height=34 alt=""><img src="images/index_link.gif" width=89 height=34 alt=""><a href="finalizar_sesion.php"><img src="images/index_sarts.gif" alt="" width=71 height=34 border="0"></a><img src="images/index_contac.GIF" width=85 height=34 alt=""></td>
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
		<tr>		</tr>
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
<p>&nbsp;</p>
<div align="center">
<div align="center">
                                <h2><font color="#FF0000" size="+2">Error!!! </font></h2>
                                <h3>
                                  <p><font color="#FF0000" size="+2">La Estructura y/o el C&oacute;digo ya existen.</font></p>
                                </h3>
                                <h3><p><font color="#FF0000" size="+2">Los datos no fueron almacenados</font></p></h3>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
</div>
                            </div>
					        <div align="center"> <span class="t12g"><font color="#0000FF">&iquest;Desea volver?
                              </p>
                                </font></span>
					          <table width="243" border="0">
                                  <tr>
                                    <td width="113"><font color="#FF0000" size="2"><a title="Ayuda sobre el manejo del SARTS" href="#">
                                      <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="103" height="24">
                                        <param name="movie" value="button23.swf">
                                        <param name="quality" value="high">
                                        <embed src="button23.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="103" height="24" ></embed>
                                      </object>
                                    </a></font></td>
                                    <td width="114"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="103" height="24">
                                      <param name="movie" value="button19.swf">
                                      <param name="quality" value="high">
                                      <embed src="button19.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="103" height="24" ></embed>
                                    </object></td>
                                  </tr>
                              </table>
				            </div>
					        <h1 align="center"><font color="#FF0000" size="2"><a title="Ayuda sobre el manejo del SARTS" href="#"></a></font> </h1>
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
	  <table width="5" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td width="5">&nbsp;</td>
        </tr>
      </table>      </td>
	    <td width="297" valign="top" background="images/index_32.gif">
		

<script type="text/javascript" language="JavaScript1.2">
<!--
stm_bm(["menu3b81",700,"","blank.gif",0,"","",0,0,250,0,1000,1,0,0,"","",0,0,1,2,"default","hand",""],this);
stm_bp("p0",[1,4,0,0,0,2,0,7,100,"",-2,"",-2,50,0,0,"#999999","transparent","line.gif",3,0,0,"#000000","up.gif",23,210,0,"transparent","",3,"",-1,-1,0,"transparent","rightline.gif",3,"down.gif",22,210,0,"transparent","",3,"",-1,-1,0,"transparent","leftline.gif",3,"leftup.gif","rightup.gif","rightdown.gif","leftdown.gif"]);
stm_ai("p0i0",[0,"","","",-1,-1,0,"","_self","","","","",0,0,0,"","",0,0,0,1,1,"#EFBA88",0,"#EFBA88",0,"","",3,3,0,0,"#FFFFFF #9FD1E0 #9FD1E0 #FFFFFF","#999999","#000000","#000000","bold 8pt 'Arial','Verdana'","bold 8pt 'Arial','Verdana'",0,0],120,6);
stm_aix("p0i1","p0i0",[0,"APLICACIÓN","","",-1,-1,0,"","_self","","","","",0,0,0,"","",0,0,0,0,1,"#FFFFF7",1,"#F4C498",0,"","",3,3,0,0,"#C8E5EE","#000000","#000000","#000000","8pt 'Arial','Verdana'","8pt 'Arial','Verdana'"],120,0);
stm_ai("p0i2",[6,1,"#999999","",-1,-1,0]);
stm_aix("p0i3","p0i1",[0,"Jornada","","",-1,-1,0,"","_self","","","","",0,0,0,"black-r.gif","red1-r.gif",7,7,0,0,0],120,0);
stm_bpx("p1","p0",[1,2,20,0,4,1,25,7,100,"",-2,"",-2,50,0,0,"#999999","#86D8F4","",3,0,0,"#999999","up.gif",23,140,0,"transparent","",3,"",-1,-1,0,"transparent","rightline.gif",3,"down.gif",22,140]);
stm_aix("p1i0","p0i1",[0,"Incluir","","",-1,-1,0,"#","_self","","","060508icon1.gif","060508icon1.gif",25,20,0,"","",0,0,0,0,1,"#FFFFF7",1,"#FFFFFF"],126,0);
stm_aix("p1i1","p0i1",[0,"Consultar","","",-1,-1,0,"#","_self","","","060508icon1.gif","060508icon1.gif",25,20,0,"black-r.gif","red1-r.gif",7,7,0,0,1,"#FFFFF7",1,"#98CFF4"],126,0);
stm_bpx("p2","p1",[1,2,20,0,4,1,25,0,100,"",-2,"",-2,50,0,0,"#999999","#F4C498"]);
stm_aix("p2i0","p1i0",[0,"Por Fechas","","",-1,-1,0,"","_self","","","060508icon2.gif","060508icon2.gif"],126,0);
stm_aix("p2i1","p2i0",[0,"Por Empleado"],126,0);
stm_aix("p2i2","p2i0",[0,"Por Estructura"],126,0);
stm_ep();
stm_aix("p1i2","p1i0",[0,"Modificar"],126,0);
stm_aix("p1i3","p1i0",[0,"Eliminar"],126,0);
stm_aix("p1i4","p0i2",[]);
stm_aix("p1i5","p1i0",[0,"Gráficas","","",-1,-1,0,""],126,0);
stm_ep();
stm_aix("p0i4","p0i1",[0,"Trabajadores","","",-1,-1,0,"","_self","","","","",0,0,0,"black-r.gif","red1-r.gif",7,7,0,0,2,"#FFFFF7",1,"#86D8F4"],120,0);
stm_bpx("p3","p1",[1,2,20,0,4,1,25,7,100,"",-2,"",-2,50,0,0,"#999999","#98CFF4"]);
stm_aix("p3i0","p1i5",[0,"Incluir"],126,0);
stm_aix("p3i1","p1i1",[0,"Consultar","","",-1,-1,0,""],126,0);
stm_bpx("p4","p2",[]);
stm_aix("p4i0","p2i0",[0,"General"],126,0);
stm_aix("p4i1","p2i0",[0,"Individual"],126,0);
stm_ep();
stm_aix("p3i2","p1i5",[0,"Modificar"],126,0);
stm_aix("p3i3","p1i5",[0,"Eliminar"],126,0);
stm_aix("p3i4","p0i2",[]);
stm_aix("p3i5","p1i5",[],126,0);
stm_ep();
stm_aix("p0i5","p1i1",[0,"Reportes","","",-1,-1,0,"","_self","","","","",0,0,0,"black-r.gif","red1-r.gif",7,7,0,0,2],120,0);
stm_bpx("p5","p3",[]);
stm_aix("p5i0","p1i1",[0,"Jornadas","","",-1,-1,0,"#","_self","","","060508icon2.gif","060508icon2.gif"],126,0);
stm_bpx("p6","p2",[]);
stm_aix("p6i0","p2i0",[0,"Tarjeta"],126,0);
stm_aix("p6i1","p2i0",[0,"Totales"],126,0);
stm_aix("p6i2","p2i0",[0,"Menu Item 3"],126,0);
stm_ep();
stm_aix("p5i1","p2i0",[0,"Trabajadores","","",-1,-1,0,"#"],126,0);
stm_aix("p5i2","p5i0",[0,"Base de Datos"],126,0);
stm_bpx("p7","p2",[]);
stm_aix("p7i0","p4i0",[],126,0);
stm_aix("p7i1","p2i0",[0,"Específica"],126,0);
stm_aix("p7i2","p2i0",[0,"Tablas"],126,0);
stm_ep();
stm_aix("p5i3","p0i2",[]);
stm_aix("p5i4","p5i0",[0,"Gráficas"],126,0);
stm_bpx("p8","p2",[]);
stm_aix("p8i0","p5i1",[0,"Por Totales"],126,0);
stm_aix("p8i1","p5i1",[0,"Por Trabajador"],126,0);
stm_ep();
stm_ep();
stm_aix("p0i6","p0i5",[0,"Mantenimiento"],120,0);
stm_bpx("p9","p3",[]);
stm_aix("p9i0","p1i1",[0,"Base de Datos","","",-1,-1,0,"#","_self","","","060508icon3.gif","060508icon3.gif"],126,0);
stm_bpx("p10","p2",[]);
stm_aix("p10i0","p2i0",[0,"Respaldar"],126,0);
stm_aix("p10i1","p2i0",[0,"Recuperar"],126,0);
stm_ep();
stm_aix("p9i1","p1i0",[0,"Aditamentos","","",-1,-1,0,"#","_self","","","060508icon3.gif","060508icon3.gif"],126,0);
stm_ep();
stm_aix("p0i7","p0i5",[0,"Seguridad"],120,0);
stm_bpx("p11","p3",[]);
stm_aix("p11i0","p1i1",[0,"Claves","","",-1,-1,0,"#","_self","","","060508icon4.gif","060508icon4.gif"],126,0);
stm_bpx("p12","p2",[1,2,20,0,4,1,25,7]);
stm_aix("p12i0","p2i0",[0,"Crear"],126,0);
stm_aix("p12i1","p5i0",[0,"Consultar","","",-1,-1,0,""],126,0);
stm_bpx("p13","p2",[]);
stm_aix("p13i0","p4i0",[],126,0);
stm_aix("p13i1","p2i0",[0,"Por Usuario"],126,0);
stm_aix("p13i2","p2i2",[],126,0);
stm_ep();
stm_aix("p12i2","p2i0",[0,"Modificar"],126,0);
stm_aix("p12i3","p2i0",[0,"Eliminar"],126,0);
stm_ep();
stm_aix("p11i1","p11i0",[0,"Accesos"],126,0);
stm_bpx("p14","p12",[]);
stm_aix("p14i0","p12i1",[],126,0);
stm_bpx("p15","p2",[]);
stm_aix("p15i0","p4i0",[],126,0);
stm_aix("p15i1","p13i1",[],126,0);
stm_ep();
stm_aix("p14i1","p2i0",[0,"Configurar"],126,0);
stm_ep();
stm_ep();
stm_aix("p0i8","p0i5",[0,"Ayuda"],120,0);
stm_bpx("p16","p3",[1,2,20,0,4,1,25,0]);
stm_aix("p16i0","p1i0",[0,"Manual de\r\nUsuario","","",-1,-1,0,"#","_self","","","060508icon5.gif","060508icon5.gif"],126,0);
stm_aix("p16i1","p16i0",[0,"Contacto"],126,0);
stm_aix("p16i2","p16i0",[0,"FAQ"],126,0);
stm_aix("p16i3","p0i2",[]);
stm_aix("p16i4","p16i0",[0,"Acerca de..."],126,0);
stm_ep();
stm_aix("p0i9","p0i1",[0,"","","",-1,-1,0,"","_self","","","","",0,0,0,"","",0,0,0,1],120,6);
stm_aix("p0i10","p0i0",[0,"","","",-1,-1,0,"","_self","","","","",0,0,0,"","",0,0,0,1,1,"#86D8F4",0,"#86D8F4"],120,6);
stm_aix("p0i11","p0i4",[0,"ENLACES","","",-1,-1,0,"","_self","","","","",0,0,0,"","",0,0,0,0,1],120,0);
stm_aix("p0i12","p0i2",[]);
stm_aix("p0i13","p0i11",[0,"Antecedentes","","",-1,-1,0,"#"],120,0);
stm_aix("p0i14","p0i13",[0,"Objetivos"],120,0);
stm_aix("p0i15","p1i1",[0,"Descarga","","",-1,-1,0,"#","_self","","","","",0,0],120,0);
stm_bpx("p17","p16",[1,2,20,0,4,1,4]);
stm_aix("p17i0","p1i0",[0,"DHTMLMenu Download","","",-1,-1,0,"#","_self","","","","",4,0],122,0);
stm_aix("p17i1","p17i0",[],122,0);
stm_aix("p17i2","p17i0",[],122,0);
stm_aix("p17i3","p17i0",[],122,0);
stm_aix("p17i4","p17i0",[],122,0);
stm_ep();
stm_aix("p0i16","p0i13",[0,"Unofficial Sothink \r\nDHTMLMenu Resource\r\nSite(thanks to Bill Pitt)"],120,0);
stm_ep();
stm_em();
//-->
</script>
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
      <div align="left">
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
	  
<embed src="sounds/childx.mp3" hidden="true">
</BODY>
</HTML>
