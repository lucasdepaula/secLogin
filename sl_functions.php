<?php
	function salt_gen($length) {
		$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%&*()-_=+<>/\|";
		$ret = "";
		$size = strlen($chars);
		for ($i=0; $i < 64; $i++) { 
			$ret .= $chars[rand(0, $size-1)];
		}
		return $ret;
	}
	function token_gen($length) {
		$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
		$ret = "";
		$size = strlen($chars);
		for ($i=0; $i < 32; $i++) { 
			$ret .= $chars[rand(0, $size-1)];
		}
		return $ret;
	}
?>