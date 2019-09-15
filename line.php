 <?php
  

function send_LINE($msg){
 $access_token = '6j9qqOSd9F9eG2hmnBWMElVN3Enlf11beeKRe45PGcxMENlLkDJolGElTnV6dbqipLrcWh8JMoPCcF0vlDE9hv5k17b9zTCygutqq+WhW68QC5+4kJsnlI4iIbI4nbAeHMLJ35yFUbjN8gWjzpZPUwdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U1d8484c4c5ae201c75d27f6fd1d6370b',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
