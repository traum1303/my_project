<?php	
	for($i=1; $i<11; $i++){
		
		echo '<div style="display:inline-block; width:19%; border:1px solid black; margin-left:1px; margin-bottom:1px;">';
		
		for($j=1; $j<11; $j++){
			$arr1= str_split($i);
			$arr2 = str_split($j);
			$arr3 = str_split($j*$i);
			
			echo '<span style="width:20%; margin:0; ">';
			
			foreach($arr1 as $v1){
				echo '<span style="color:'.color($v1).';">'.$v1.'</span>';
			}
			
			echo '<span>x</span>';
			
			foreach($arr2 as $v2){
				echo '<span style="color:'.color($v2).';">'.$v2.'</span>';
			}
			
			echo '<span>=</span>';
			
			foreach($arr3 as $v3){
				echo '<span style="color:'.color($v3).';">'.$v3.'</span>';
			}
			
			echo  '</span><br>';
		}
		echo '</div>';
	}
?>