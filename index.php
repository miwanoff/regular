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


if (preg_match_all('/\w+\.(com|org)/', "jhgjhghj.org fgf.com", $arr)) {
    print_r($arr);
} else {
    echo "no";
}