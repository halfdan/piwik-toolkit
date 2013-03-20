<?php
/**
 * Piwik Plugin Generator
 *
 * This file builds the PHP Archive for the library.
 * Execute with: php -d phar.readonly=0 build.php
 */

// Name of the result phar
$pharName = "plugin.phar";

try
{
	$phar = new Phar($pharName, 0, $pharName);
	$phar->buildFromDirectory(dirname(__FILE__) . '/src');
	$phar->addEmptyDir("cli");
	$phar->addFile("cli/index.php", "cli/index.php");
	$phar->setStub(file_get_contents("stub.php"));
} catch(UnexpectedValueException $ex) {
	echo sprintf("%s\n", $ex->getMessage());
	echo sprintf("Please execute with: php -d phar.readonly=0 %s\n", basename(__FILE__));
}