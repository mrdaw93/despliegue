<HTML>
<HEAD> <TITLE> Ej4 </TITLE> </HEAD>

<BODY>
<?php
 
 /* while(condición)
      instrucción
  */
	$A=64; 
	$base=3;
	$resto=0;
	$numeroBase=" ";
	
	while($A>=1){
		$resto=$A%$base;
		$numeroBase=$numeroBase . $resto;
		$A=$A/$base;
	}
	
	echo $numeroBase;
	
	
	echo "<br>";
	
	$numeroBase=strrev($numeroBase);
	
	
	echo $numeroBase;
	
?>
</BODY>
</HTML>
