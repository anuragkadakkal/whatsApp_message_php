<?php

//http://chat-api.phphive.info/login/gui

$chatApiToken = "YOUR_API"; // Get it from https://www.phphive.info/255/get-whatsapp-password/
 
$number = "917356308128"; // Number
$message = "Hello :) This is testing........"; // Message
 
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://chat-api.phphive.info/message/send/text',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>json_encode(array("jid"=> $number."@s.whatsapp.net", "message" => $message)),
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer '.$chatApiToken,
    'Content-Type: application/json'
  ),
));
 
$response = curl_exec($curl);
curl_close($curl);
$response=$response[9];
if($response==0)
{
  echo "Message Sent";
}
else
{
  echo "Failed";
}


?>