<?php

namespace src\Cli;

use function cli\line;
use function cli\prompt;

if (!function_exists('welcome')) {
function welcome($name)
{
	line("Welcome to the Brain Games!");
	$name = prompt("May I have your name?");
	line("Hello, %s!", $name);
}
}

