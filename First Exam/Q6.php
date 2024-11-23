<?php

$numbers=[10,30,20];

$max=$numbers[0];

foreach($numbers as $key=>$value){
    if($numbers[$key]>$max)
    {
        $max=$numbers[$key];
    }

}

echo $max;