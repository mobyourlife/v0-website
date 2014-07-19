<?php
session_start();
require_once "config.inc.php";
require_once "facebook.inc.php";
require_once "muf-user.inc.php";

function printlink($resource = "")
{
	global $website_root;
	return printf("%s/%s", $website_root, $resource);
}

function activelink($resource)
{
	if (basename($_SERVER['SCRIPT_NAME'], ".php") == $resource)
	{
		print(" class=\"active\"");
	}
}

function mobdate()
{
	return date("Y-m-d H:i:s");
}

?>
