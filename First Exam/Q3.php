<?php

$array=[2,4,3,1,6,7,5,8,0,9];
echo "ESC : ";

for($i=0;$i<count($array);$i++)
{
    for($j=$i+1;$j<count($array);$j++)
if($array[$i]>$array[$j])
{
    $temp=$array[$i];
    $array[$i]=$array[$j];
    $array[$j]=$temp;
}
}
foreach($array as $key=>$value){

    echo " $array[$key] ";

}
echo "<br> DISC : ";
for($i=0;$i<count($array);$i++)
{
    for($j=$i+1;$j<count($array);$j++)
if($array[$j]>$array[$i])
{
    $temp=$array[$i];
    $array[$i]=$array[$j];
    $array[$j]=$temp;
}
}

foreach($array as $key=>$value){

    echo " $array[$key] ";

}