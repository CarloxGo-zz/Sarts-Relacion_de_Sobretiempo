<HTML>
<HEAD>
<TITLE>Autentificación. Sistema ARTS Online</TITLE>

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
.Estilo110 {
	color: #FFFF00;
	font-weight: bold;
}
.Estilo138 {font-size: 9px; color: #FFFF00; font-weight: bold; }
.Estilo144 {font-size: 12px}
.Estilo145 {color: #FF0000}
.Estilo151 {color: #0000FF}
.Estilo156 {font-size: 9px}
.Estilo157 {font-size: 10px}
.Estilo159 {font-size: 10px; color: #000000; }
.Estilo160 {color: #000000}
-->
</style>

<script language="javascript">
function mis_datos(){
var key=window.event.keyCode;
if (key < 48 || key > 57){
window.event.keyCode=0;
}}
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

<script language="javascript">
function mis_datos(){
var key=window.event.keyCode;
if (key < 48 || key > 57){
window.event.keyCode=0;
}
}
</script>

<script language="JavaScript" type="text/JavaScript">
function enviar(){
var enviarme=confirm("¿Desea la sesión con estos datos?");
if (enviarme)
   return true ;
else
   return false ;
}
</script>
</HEAD>

<BODY BGCOLOR=#FFFFFF background="images/bgb.gif" vlink="#0000FF" LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0 tracingsrc="images/-downdis.gif" tracingopacity="100" oncontextmenu="return false">
<a href="#" rel="nofollow" title="Ir arriba">

<img src="http://www.hijodeunahiena.com/wp-content/uploads/2011/03/Arriba-HdH.com_.png" alt="Ir arriba" border="0" style="position:fixed; bottom:0; right:0;">

</a>
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
<h1>&nbsp;</h1>
<h1>Autentificación SARTS </h1>
<form action="control.php" method="POST">
<table align="center" width="268" cellspacing="2" cellpadding="2" border="0">
<tr>
<td colspan="2" align="center"
	<?php
	ini_set('error_reporting',0);
	if ($_GET["errorusuario"]=="si"){
	?>
		bgcolor=red><span style="color:ffffff"><b>Datos incorrectos</b></span>
	<?php
	}else{
	?>
		bgcolor=#cccccc>Introduce tu clave de acceso
	<?php
	}
	?></td>
</tr>
<tr>
<td width="119" align="right">Usuario:</td>
<td width="135"><?php echo '<input type="Text" name="usuario" size="15" maxlength="20" value="'.$login.'"></td>'; ?></tr>
<tr>
<td align="right">Clave:</td>
<td><?php echo '<input type="password" name="contrasena" size="15" maxlength="20" value="'.$password.'"></td>'; ?></tr>
<tr>
<td colspan="2" align="center"><input type="Submit" value="Accesar" style="background:#FFB400"></td>
</tr>
</table>
</form> 
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center"><font color="#FF0000" size="2"><a title="Ayuda sobre el manejo del SARTS" href="#">    </a></font></p>
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