<?php
	function sendEmail($to, $from, $subject, $body){
		$headers = "From: {$from}";

		$mailed = mail($to, $subject, $body, $headers);
		if (!$mailed) {
			echo('Actually, something went wrong with this.  Maybe you could kindly let Scott know...');
		}
	}
?>
