<?php

require 'logz_pro.php';
$obj=new receipt;
$store=array();
$store=$obj->completed();
echo $store['0']['serv_id'];
print_r($store);

?>




