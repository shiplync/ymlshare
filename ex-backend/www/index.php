<?php 
$requestMade=$_REQUEST["request"];
if($requestMade=="page1")
{
	$result["result"]=" reply  from page1";
	echo json_encode($result);
	
}
else
{
	$result["result"]=" invalid request:page1";
	echo json_encode($result);
}

?>
