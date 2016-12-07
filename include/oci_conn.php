<?php
function oracle_open($user = 'system', $passwd = 'orcle', $dns = 'XE') { // 오라클 접속정보 초기화
	$dns = "
		(DESCRIPTION =
			(ADDRESS_LIST =
				(ADDRESS = (PROTOCOL = TCP)(HOST = 169.46.147.228)(PORT = 1521))
			)
			(CONNECT_DATA =
				(SERVICE_NAME = XE)
			)
		)";
	$conn = oci_connect ( $user, $passwd, $dns );
	if (! $conn) {
		$e = oci_error ();
		trigger_error ( htmlentities ( $e ['message'], ENT_QUOTES ), E_USER_ERROR );
	}
	return $conn;
}
?>