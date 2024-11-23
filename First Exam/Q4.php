<?php
$numbers=[10,20,30,50,40];
$sum=0;

foreach($numbers as $key=>$value){
    $sum+= $numbers[$key];
}
$avg = $sum/count($numbers);

echo $avg;
