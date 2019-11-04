<?php

$http_response = '';

$fp = fsockopen('https://yunjae830.github.io/Test/url.html', 80);
fputs($fp, "GET / HTTP/1.1\r\n");
fputs($fp, "Host: https://yunjae830.github.io/Test/url.html\r\n\r\n");

while (!feof($fp))
{
    $http_response .= fgets($fp, 128);
}

fclose($fp);

echo nl2br(htmlentities($http_response, ENT_QUOTES, 'UTF-8'));

?>