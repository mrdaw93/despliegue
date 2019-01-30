<HTML>
<HEAD> <TITLE> Marco </TITLE> </HEAD>

<BODY>
	<table border="1px" width="20%">

	TABLA DE MULTIPLICAR
	
	<?php
	$num=8; 

	for($i=1; $i<=10; $i++){
	?>
	
		<tr>
				<td><?php echo $num, " x ", $i  ?></td>
				<td><?php echo $num*$i?></td>
				
		</tr>
		 <?php
		 }
		 ?>
		 
	
	</table>
</BODY>
</HTML>
