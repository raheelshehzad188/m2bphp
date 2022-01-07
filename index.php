<?php
header('Access-Control-Allow-Origin: *');
$ret = array(
"payment" =>1
);
echo json_encode($ret);
exit();
?>