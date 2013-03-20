<?php
namespace Piwik\Generator;

class Plugin implements Generator
{
	private $name;
	private $author = "Author";
	private $email = "user@example.com"
	private $version = "0.0.1";
	private $desciption = "Description";

	/**
	 * Create new plugin generator.
	 *
	 * @param $options array Command line options
	 */
	public function __construct(array $options)
	{

	}

	public function execute()
	{
		generatePluginDefinition();
	}

	public function getOptions()
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