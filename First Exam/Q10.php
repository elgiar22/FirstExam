<?php

function prime($num){
 if ($num<=1)
 {
    return "not prime";
 }
 for ($i=2;$i<=sqrt($num);$i++)
 {
    if($num%$i==0)
    {
        return "not prime";
    }
 }
 return "prime";
}
for($i=0;$i<=10;$i++)
{
echo "$i : " .prime($i)."<br>";
}