<?php
$str = "<p>Права пользователей:</p>
<ul>
  <li>Administrator</li>
  <li>Editor</li>
  <li>Subscriber</li>
</ul>";

$str1 =  '<li>Subscriber</li>';
$pattern = '%<li>(\w+)</li>%';//'%<li>([^<]+)</li>%'; 
$replacement = '<li><a href="#">$1</a></li>'; 
// <li><a href="http://www.php.kh.ua/script.php?role=Administrator">Administrator</a></li>
// <li><a href="http://www.php.kh.ua/script.php?role=Editor">Editor</a></li>
// <li><a href="http://www.php.kh.ua/script.php?role=Subscriber">Subscriber</a></li>

echo preg_replace($pattern, $replacement, $str1);