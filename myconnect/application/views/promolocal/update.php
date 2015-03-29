<?php
	$parsed = explode(",",$varP);
	//echo "<pre>" . var_dump($parsed) . "</pre>";
	//$output = $this->process->update_restaurant($parsed);
	$output = $this->promolocal->update_promolocal($parsed);
	echo $output;
?> 