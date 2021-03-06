<?php
/*

SQL Laboratory - Web based MySQL administration
http://projects.deepcode.net/sqllaboratory

ajaxsavecolumnedit.php
- saves the details of a table column

MIT license

2008 Calvin Lough <http://calv.in>, 2010 Steve Gricci <http://deepcode.net>

*/

include "functions.php";

loginCheck();

if (isset($db))
	$conn->selectDB($db);

if (isset($_POST['runQuery'])) {
	$query = $_POST['runQuery'];
	
	$conn->query($query) or ($dbError = $conn->error());
	
	echo "{\n";
	echo "    \"formupdate\": \"" . $_GET['form'] . "\",\n";
	echo "    \"errormess\": \"";
	if (isset($dbError))
		echo $dbError;
	echo "\"\n";
	echo '}';
	
}

?>