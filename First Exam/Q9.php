<?php 

$string = 'The lazy fox jumped over the fence';
$word = "fox";
$pattern="/$word/";

if(preg_match($pattern,$string))
{
    echo "the \" $string \" contain : '$word' ";
}else
{
    echo "the \" $string \" does not contain : '$word' ";


}
