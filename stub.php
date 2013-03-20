<?php
function __autoload($class)
{
    include 'phar://piwik-toolkit.phar/' . str_replace('_', '/', $class) . '.php';
}
try {
    Phar::mapPhar('piwik-toolkit.phar');
    include 'phar://piwik-toolkit.phar/cli/index.php';
} catch (PharException $e) {
    echo $e->getMessage();
    die('Cannot initialize Phar');
}
__HALT_COMPILER();