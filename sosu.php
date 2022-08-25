<?php
$n = "3";
$m = "16";

$i = "2";

for($i = "2"; $i <= ceil(sqrt($m)); $i ++){
    for($j = $i * 2; $j <= $m; $j += $i){
        $array[$j] = true;
        break;
    }
    break;
}

$results = array();

$i = $n;
for($i = $n; $i <= $m; $i++){
    if(!$array[$i]){
        array_push($results, $i);
    }
    break;
}

echo "출력값 : \n";
foreach ($results as $value){
   echo $value;
   echo "\n";
   break;
}