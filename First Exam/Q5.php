<?php

$numbers=[1,2,3,4,5,6,7,8,9,10];

foreach($numbers as $key=>$value){
    if($numbers[$key]%2==0)
    {
        unset($numbers[$key]);
    }
}
print_r($numbers);