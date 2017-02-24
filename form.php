<?php
	session_start();

	function generateFormToken($form) {
			$token = sha1(uniqid(microtime(), true));
			$_SESSION[$form.'_token'] = $token;

			return $token;
}
function verifyFormToken($form) {
	if (!isset($_SESSION[$form.'_token'])) {
		return false;
	}
	if (!isset($_POST['token'])) {
		return false;
	}
	if ($_SESSION[$form.'_token'] !== $_POST['token']) {
		return false;
	}
	return true;
}
?>
