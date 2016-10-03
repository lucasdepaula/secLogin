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
?>