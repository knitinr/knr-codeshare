<?php
/*
Copyright (C) K.N.Reddy 2012
All Rights Reserved
*/
?><?php
function is_name_restricted($a_name) {
	$restricted_arr = array(
		'admin',
		'root',
		'adm1n',
		'r00t',
		'r0ot',
		'ro0t'
	);
	
	foreach($restricted_arr as $iter) {
		if(strstr(strtolower($a_name), strtolower($iter))) {
			return true;
		}
	}
	
	return false;
}
?>