<?php

date_default_timezone_set('America/Sao_Paulo');

$base = dirname(__FILE__);
$base = str_replace(basename($base), '', $base);

define('DS', DIRECTORY_SEPARATOR);

define('PUBLIC_FOLDER', $base);
define('APP_FOLDER', $base);
define('XUXUZINHO_FOLDER', $base . 'vendor' . DS . 'Xuxuzinho' . DS);

?>