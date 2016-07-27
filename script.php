<?php
session_start();
if ($_SESSION["autentificado"] != "SI") {
    header("Location: sesion.php");
    exit();
}
?>
<?php
        extract($_POST);
        if(@$vci=="0") 
      	  echo '
        	<form id="form1">
				<SELECT NAME="vsi">
						<OPTION VALUE="0">0</OPTION>
        		</SELECT>
        	</form>
        ';
         if(@$vci=="33.6") 
         echo '
         	<form id="form2">
                <SELECT>
						<OPTION VALUE="33.6">33.6</OPTION>
               </SELECT>
         	</form>
        ';
		 if(@$vci=="50.6") 
         echo '
         <form id="form3">
                <SELECT>
					<OPTION VALUE="100.8">100.8</OPTION>
               </SELECT>
         </form>
        ';
?>