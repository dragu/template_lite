<?php

if (!defined('SMARTY_DIR')) {
	define('SMARTY_DIR', __DIR__ . DIRECTORY_SEPARATOR);
}

require_once(TEMPLATE_LITE_DIR . "class.template.php");

class Smarty extends Template_Lite{

    function __construct()
    {
    }
}
?>
