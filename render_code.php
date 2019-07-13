<?php
	require "./src/TRIDcode.php";
	
	//пример без фильтрации данных
	
	$hash = "1ac1d825af09775bccda0971efdc37c3945b7c3671a2e558bbb10d18cdbe177b";
	try {
		$code = new TRIDcode($hash);
		$code->render();
	} catch(Exception $ex) {
		exit("error: " . $ex->getMessage());
	}
	