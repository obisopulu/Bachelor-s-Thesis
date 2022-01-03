<?php

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("icm_db", $con);


$sql = "SELECT * FROM infobox_tb WHERE index = '" . $index . "'";
$query = mysql_query($sql);

 if (mysql_num_rows($query) > 0) { 
  	$foundFlags = mysql_fetch_assoc($query);

  if ($foundFlags['index']) {
$sql = "SELECT * FROM infobox_tb WHERE index = '" . $index . "'";
	$rs = mysql_query($sql);
	$row = mysql_fetch_array($rs);
	$title = $row['title'];
	$info = $row['info'];
	$link = $row['link'];

		} 
	}

else {	
$title = "N/A";
$info = "N/A"; 
$link = "N/A";
}

include_once('map.php');
?>