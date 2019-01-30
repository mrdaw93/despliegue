<HTML>
<HEAD> <TITLE> Ej4 </TITLE> </HEAD>

<BODY>
<?php
 
 /* while(condición)
      instrucción
  */
	$A=123; 
	$base=16;
	$resto=0;
	$hexa="ABCDEF";
	$numeroBase=" ";
	$r1=0;
	
	while($A>=1){
		$resto=$A%$base;
		if($resto > 9){
			$r1=substr($resto, 1);
			$numeroBase=substr($hexa, $r1);
			}
		$numeroBase=$numeroBase . $resto;
		$A=$A/$base;
	}
	
	echo "<br>";
	echo $r1;
	echo "<br>";
	echo $numeroBase;
	
	
	echo "<br>";
	
	$numeroBase=strrev($numeroBase);
	
	
	echo $numeroBase;
	
?>
</BODY>
</HTML>
