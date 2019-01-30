<HTML>
<HEAD> <TITLE> Ej3 </TITLE> </HEAD>

<BODY>
<?php
 
 /* while(condición)
      instrucción
  */
	$A=48; 
	$resto=0;
	$binario=" ";
	
	while($A>=1){
		$resto=$A%2;
		$binario=$binario . $resto;
		$A=$A/2;
	}
	
	echo $binario;
	
	$binarioB=" ";
	echo "<br>";
	
	$binarioB=strrev($binario);
	
	// for ($i=strlen($binario) ; $i>=0; $i--){
		// $binarioB=substr($binario, $i);
	// }
	
	echo $binarioB;
	
?>
</BODY>
</HTML>
