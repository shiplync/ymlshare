<?php 
$requestMade=$_REQUEST["request"];
if($requestMade=="page2")
{
	$result["result"]="reply from page2";
	echo json_encode($result);
}
else
{
	$result["result"]=" invalid request:page2";
	echo json_encode($result);
}
?>
