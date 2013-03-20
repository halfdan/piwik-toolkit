<?php
namespace Piwik\Generator;

interface Generator 
{
	/* Returns possible command line options */
	function getOption();
	function execute();
}