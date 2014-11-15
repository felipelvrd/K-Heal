
<?php

//header("HTTP/1.1 200 OK");
//header("HTTP/1.1 200 OK");

$sequential = array("Tiger Nixon","System Architect","Edinburgh","5421","2011/04/25","$3,120");

header('Content-Type: application/json');
echo json_encode($sequential);

?>