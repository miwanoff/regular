<?php
if (preg_match('/[rb]at/', "cat and bat and rat", $arr)) {
    print_r($arr);
} else {
    echo "no";
}

if (preg_match_all('/[\w\s]at+/', "catttt and bat and rat and hatdsf tat \tat 2at", $arr)) {
    print_r($arr);
} else {
    echo "no";
}


if (preg_match_all('/(\w+)@(com|org|net)/', "jhgjhghj@org fgf@com hgjhj@net", $arr)) {
    print_r($arr);
} else {
    echo "no";
}

echo $arr[1][0]."\n";

$reg_4 = '/(каво)(варка|молка)/';
$s = 'Продаються кавоварка та кавомолка';
if (preg_match_all($reg_4, $s, $arr1))
print_r($arr1);

$s="the red king and the white queen";
$r='/the ((red|white) (king|queen))/';
if (preg_match_all($r, $s, $arr))
print_r($arr);


$r='/(?:ви|про)бачте/';
 $s="вибачте, будь ласка, пробачте";
 if (preg_match_all($r, $s, $arr))
print_r($arr);

$r='/(?<=\*)\w{3}/';
$s="My little dog* *and *cat";
if (preg_match_all($r, $s, $arr))
print_r($arr);

// $r='/(?<=cat)dog /'; // $s="dogcatdog!" ; // if (preg_match_all($r, $s, $arr)) // print_r($arr);

$r = '/(\w+)\s\1/';
$s = 'cat cat and and dog dog';
if (preg_match_all($r, $s, $arr))
print_r($arr);

$str = "15/11.2016";
$re= '/^\s*((\d+)\s*[^\w\d]\s*(\d+)\s*[^\w\d]\s*(\d+))\s*$/';
preg_match($re, $str, $matches);
echo "Дата: '$matches[1]' \n";
echo "День: $matches[2] \n";
echo "Місяць: $matches[3] \n";
echo "Рік: $matches[4] \n";


$r = '/<.+?>/';
$s = '<h1>cat</h1> and <h2>dog</h2>';
if (preg_match_all($r, $s, $arr))
print_r($arr);

$string = 'The quick brown fox jumped over the lazy dog.';
$patterns = [];
$patterns[0] = '/quick/';
$patterns[1] = '/brown/';
$patterns[2] = '/fox/';
$replacements = [];
$replacements[0] = 'slow';
$replacements[1] = 'black';
$replacements[2] = 'bear';
echo preg_replace($patterns, $replacements, $string);

$str = 'Василько Петренко' ;
$str = preg_replace ( '/\s\s+/' , ' ' , $str );
echo $str ; // 'Василько Петренко'

$str = "The quick brown <em>fox</em> jumped over the lazy
<em>dog</em>";
echo preg_replace('/<.+?>/s', '', $str);


    $keywords = preg_split("/[\s,;]+/", "PHP HTML,JavaScript;Java");
    print_r($keywords);
    $program = '<strong>$x</strong>=3; <strong>$sum</strong>=<strong>$x</strong> + 4;';