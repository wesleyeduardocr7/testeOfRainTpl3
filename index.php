<?php

require_once("vendor/autoload.php");

use Rain\Tpl;

$config = array(
    "tpl_dir"       => "tpl",
    "cache_dir"     => "cache/"
);

Tpl::configure( $config );

$tpl = new Tpl;

$tpl->assign( "name", "Treinando novos Recursos PHP7" );
$tpl->assign( "version", PHP_VERSION );

$tpl->draw( "index" );

?>