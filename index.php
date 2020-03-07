<?php

require_once("vendor/autoload.php");

use Rain\Tpl;

$config = array(
    "tpl_dir"       => "tpl",
    "cache_dir"     => "cache/"
);

Tpl::configure( $config );

$tpl = new Tpl;

$tpl->draw( "index" );

?>