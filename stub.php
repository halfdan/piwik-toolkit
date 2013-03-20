<?php
spl_autoload_register(function ($class) {
    if(strpos($class, 'Piwik\Toolkit') === 0)
    {
        $class = str_replace('Piwik\Toolkit', "", $class);
        $fileName = str_replace("\\", "/", $class).".php";
        include 'phar://piwik-toolkit.phar/' . $fileName;
        return true;
    } else {
        return false;
    }
});

try {
    Phar::mapPhar('piwik-toolkit.phar');
    include 'phar://piwik-toolkit.phar/cli/index.php';
} catch (PharException $e) {
    echo $e->getMessage();
    die('Cannot initialize Piwik Toolkit');
}
__HALT_COMPILER();
