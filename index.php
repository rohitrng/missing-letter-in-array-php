<?php

function missing($array){
	for($i=1;$i<count($array);$i++){
		$priv = ord($array[$i - 1]);
		$next = ord($array[$i]);

		if ($next - $priv !== 1) {
			echo chr($priv+1).'<br>';
		}
	}	
}


missing(['a','b','d']);
missing(['P','R']);


?>