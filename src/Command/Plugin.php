<?php
namespace Piwik\Toolkit\Command;

class Plugin extends Command
{
	private $name;
	private $author = "Author";
	private $email = "user@example.com";
	private $version = "0.0.1";
	private $description = "Description";

	public function execute()
	{
		
	}

	public function create($name, $version = '0.0.1', $author = "Author", $email = "user@example.com")
	{
		generatePluginDefinition();
	}

	public function help()
	{

	}

	public function show()
	{

	}

	private function generatePluginDefinition()
	{
		$plugin = array(
			"name" => $this->name,
			"description" => $this->description,
			"version" => $this->version,
			"keywords" => array("piwik", "plugin"),
			"authors" => array(
				array(
					"name" => $this->author,
					"email" => $this->email
				)
			),
			"require" => array(
				"piwik" => ">=2.0",
				"php" => ">=5.3.0"
			),
			"translationAvailable" => true
		);
	}
}