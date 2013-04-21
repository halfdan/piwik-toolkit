# Piwik Toolkit

This tool can be used to automatically generate a plugin stub for [Piwik](http://piwik.org) 2.x. It generates all the necessary files for you to get started with building a Piwik plugin.

Piwik Toolkit is modular and can easily be extended with new commands.

## Requirements

Piwik Toolkit is built using namespaces and PHP archives which require at least PHP 5.3.

## Installation

You can build the Piwik Toolkit yourself if you are using PHP 5.3 or higher. This can be done in two simple steps.

1. Clone the repository.

       git clone https://github.com/halfdan/piwik-toolkit.git

2. Generate the PHP Archive.

       cd piwik-toolkit
       php -d phar.readonlý=0 build.php

You will now have a file called `piwik-toolkit.phar` that you can execute by typing `php piwik-toolkit.phar`.

## Command Line Options

ToDo

## Contribute

If you would like to contribute to this project, please consider sending a pull request! 

