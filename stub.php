<?php
function __autoload($class)
{
    include 'phar://plugin.phar/' . str_replace('_', '/', $class) . '.php';
}
try {
    Phar::mapPhar('plugin.phar');
    include 'phar://plugin.phar/cli/index.php';
} catch (PharException $e) {
    echo $e->getMessage();
    die('Cannot initialize Phar');
}
__HALT_COMPILER();