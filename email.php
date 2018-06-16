<?php
	function sendEmail($to, $from, $subject, $body){
		$headers = "From: {$from}";
		var_dump($headers);

		if (mail($to, $subject, $body, $headers)){
			echo('sent');
		} else {
			echo('<br/>Actually...');
		}
	}
?>