<?php
	require "./src/TRIDcode.php";
	
	//пример без фильтрации данных
	$form = $_GET['form'];
	$hash = "1ac1d825af09775bccda0971efdc37c3945b7c3671a2e558bbb10d18cdbe177b";
	try {
		$code = new TRIDcode($hash, $form);
		$code->render(20);
		//exit(json_encode($code->code_arr));
	} catch(Exception $ex) {
		exit("error: " . $ex->getMessage());
	}
	