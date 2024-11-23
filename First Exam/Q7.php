<?php
$SampleDate="2012-12-21";

$newDate=date('Y-m-d',strtotime($SampleDate.' +1 month '));

echo $newDate;
