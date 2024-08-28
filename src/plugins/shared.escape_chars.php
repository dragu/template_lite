<?php
/**
 * template_lite tpl_escape_chars function
 *
 */

function tpl_escape_chars($string)
{
	if(!is_array($string))
	{
		$string = preg_replace('!&(#?\w+);!', '%%%TEMPLATE_START%%%\\1%%%TEMPLATE_END%%%', $string);
		$string = htmlspecialchars((string) $string);
		$string = str_replace(['%%%TEMPLATE_START%%%', '%%%TEMPLATE_END%%%'], ['&', ';'], $string);
	}
	return $string;
}

?>
