<?php
namespace Piwik\Toolkit;

class CommandManager
{
	private $commands = array();

	public function __construct()
	{
		$this->loadAvailableCommands();
	}

	public function getCommandList()
	{
		$commandList = array();
		foreach($this->commands as $command)
		{
			$commandList[] = array(
				"name" => $command,
				"description" => $this->getCommandDescription($command)
			);
		}
		return $commandList;
	}

	public function getCommandHelp($command)
	{

	}

	private function getCommandDescription($command)
	{

	}

	private function loadCommand($command)
	{
		$path = sprintf("%s/Command", __DIR__);
		$fileName = sprintf("%s/%s.php", $path, $command);

		if(!file_exists($fileName)) {
			throw new Exception("Command %s unknown.", $command);
		}
		$reflect = new \ReflectionClass("Name");
		$methods = $reflect->getMethods(\ReflectionMethod::IS_PUBLIC);
		// Sort by name

		// Get description

		// Generate array

	}

	private function loadAvailableCommands()
	{
		$commandList = glob(sprintf("%s/Command/*.php", __DIR__));
		$this->commands = $commandList;
	}
}