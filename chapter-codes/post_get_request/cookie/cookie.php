<?php
 
if (setcookie("tester", 'something from somewhere', time()+3600, "/", "example.com")) {
echo 'yeay the cookie is set';
// cookie name, cookie value, expiration - 1 hour in this case, path and domain.
}

$cookie = !empty($_COOKIE['tester']) ? $_COOKIE['tester'] : false;
var_dump($cookie); // will return 'something from somewhere'