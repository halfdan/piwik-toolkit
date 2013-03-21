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
        $this->loadCommand($command);
	}

    /**
     * Loads a single command from its file in Command/
     *
     * @param $command Name of the command to load.
     * @throws \Exception if failed to load command.
     */
    private function loadCommand($command)
	{
        $baseName = 'Piwik\Toolkit\Command';
		$className = sprintf('%s\%s', $baseName, $command);

        try
        {
            $reflect = new \ReflectionClass($className);
        } catch (\Exception $ex) {
            throw $ex;
        }
		//$methods = $reflect->getMethods(\ReflectionMethod::IS_PUBLIC);
		// Sort by name

		// Get description

		// Generate array

	}

    /**
     * Loads available commands by searching in Command/ directory.
     */
    private function loadAvailableCommands()
	{
        $commandList = array();
		$dirIterator = new \DirectoryIterator(sprintf("%s/Command/", __DIR__));
		foreach($dirIterator as $fileInfo)
		{
            $commandName = $fileInfo->getBaseName(".php");
            if ($commandName != "Command")
            {
                $commandList[] = $commandName;
            }
		}
		$this->commands = $commandList;
	}
}