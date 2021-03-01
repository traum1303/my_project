<?php	
	for($i=1; $i<11; $i++){
		echo '<div style="display:inline-block; width:19%; border:1px solid black; margin-left:1px; margin-bottom:1px;">';
		for($j=1; $j<11; $j++){
			echo '<span style="width:20%; margin:0; "><span>'.$i.'</span><span>x</span><span>'.$j.'</span><span>=</span><span>'.$j*$i.'</span></span><br>';
		}
		echo '</div>';
	}
?>