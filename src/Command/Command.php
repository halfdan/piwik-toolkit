<?php
namespace Piwik\Toolkit\Command;

abstract class Command
{
	public function execute($action, $parameters)
	{
		// Check if action exists

		// Check if all required parameters are present
		// Check for unknown parameters

		// Dispatch to action

	}
}