<?php
header('Access-Control-Allow-Origin: *');
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://m2b.foxaf.com/sdk//process-payment.php?token=cnon%3ACBASEAXK6nxce3XJgclzx-wHR8g&amount=1.5",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache",
    "postman-token: 26c05cb1-80c5-7424-c61c-9db297478ebc"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
exit();
?>