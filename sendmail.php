 <?php
  require_once "Mail.php";

  $from = "myaccount@gmail.com";
  $to = 'test@mytest.com';

  $host = "ssl://smtp.gmail.com";
  $port = "465";
  $username = 'myaccount@gmail.com';
  $password = 'mypassword';

  $subject = "test";
  $body = "test";

  $headers = array ('From' => $from, 'To' => $to,'Subject' => $subject);
  $smtp = Mail::factory('smtp',
    array ('host' => $host,
      'port' => $port,
      'auth' => true,
      'username' => $username,
      'password' => $password));

  $mail = $smtp->send($to, $headers, $body);

  if (PEAR::isError($mail)) {
    echo($mail->getMessage());
  } else {
    echo("Message successfully sent!\n");
  }
  
