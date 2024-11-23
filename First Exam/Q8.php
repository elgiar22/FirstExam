<?php

$currentMounth=date('n');

$previousMounth=$currentMounth-1;

if($currentMounth==1)
{
    $previousMounth=12;
}
echo $previousMounth;