<?php
		$batas = 5;
		echo "<table>";
		
		for ($i=1;$i<=$batas;$i++){
			
			echo "<tr>";
			for ($j=1;$j<=$batas;$j++){
				
				echo "<td>";
				echo $i.$j;
				echo "</td>";
			}
		
			echo "</tr>";
		}
		
		echo "</table>";
?>