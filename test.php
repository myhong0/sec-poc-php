<?php
header ( 'Content-Type: text/html; charset=euc-kr' );
include_once ("./include/oci_conn.php");
$conn = oracle_open ();
/* insert */
$query = "INSERT INTO HR.ACCESS_LOG (ACCESS_DT, ACCESS_URL, ACCESS_IP, BROSWER_TYPE)
	VALUES ( SYSDATE, '" + $_SERVER['HTTP_REFERER'] + "', '" + $_SERVER['REMOTE_ADDR'] + "', '" + $_SERVER['HTTP_USER_AGENT'] + "')";
$stid = oci_parse ( $conn, $query );
oci_execute ( $stid );
oci_free_statement ( $stid );

/* multi rows */
$query = "SELECT * FROM HR.ACCESS_LOG";
$stid = oci_parse ( $conn, $query );
oci_execute ( $stid );
while ( ($row = oci_fetch_array ( $stid, OCI_BOTH )) ) {
	echo $row [0] . " : " . $row [1] . "<br>";
}
echo "Total Count : " . oci_num_rows ( $stid );
oci_free_statement ( $stid );

/* one row 
$query = "SELECT NAME, NAME_EN FROM TEST WHERE NAME_EN = 'MOON1'";
$stid = oci_parse ( $conn, $query );
oci_execute ( $stid );
list ( $rec1, $rec2 ) = oci_fetch_row ( $stid );
echo $rec1 . " ### " . $rec2;
oci_free_statement ( $stid );
*/
/* one rec 
$query = "SELECT NAME FROM TEST WHERE NAME_EN = 'MOON1'";
$stid = oci_parse ( $conn, $query );
oci_execute ( $stid );
list ( $rec ) = oci_fetch_row ( $stid );
echo $rec;
oci_free_statement ( $stid );
*/

oci_close ( $conn );
?>