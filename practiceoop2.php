<?php 

const BR = '<br />';


include_once('practiceoopphp.php');

$bodybuilder = new person(); 


echo $bodybuilder::$age;
echo BR;
echo $bodybuilder::$location;









?>