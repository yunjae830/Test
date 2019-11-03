<?php
require_once 'swift/lib/swift_required.php';

$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
  ->setUsername('yunjae830@gmail.com')
  ->setPassword('qkrdbswo@1900');

$mailer = Swift_Mailer::newInstance($transport);

$message = Swift_Message::newInstance('Test Subject')
  ->setFrom(array('pyj@bizspring.co.kr' => 'ABC'))
  ->setTo(array('jea830@naver.com'))
  ->setBody('This is a test mail.');

$result = $mailer->send($message);
?>