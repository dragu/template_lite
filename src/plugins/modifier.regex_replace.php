<?php
/**
 * Template Lite plugin converted from Smarty
 * @package Smarty
 * @subpackage plugins
 */


/**
 * Smarty regex_replace modifier plugin
 *
 * Type:     modifier<br>
 * Name:     regex_replace<br>
 * Purpose:  regular expression search/replace
 * @link http://smarty.php.net/manual/en/language.modifier.regex.replace.php
 *          regex_replace (Smarty online manual)
 * @author   Monte Ohrt <monte at ohrt dot com>
 * @param string
 * @param string|array
 * @param string|array
 * @return string
 */
function tpl_modifier_regex_replace($string, $search, $replace)
{
    if (preg_match('!([a-zA-Z\s]+)$!s', (string) $search, $match) && (str_contains($match[1], 'e')))
	{
        /* remove eval-modifier from $search */
        $search = substr((string) $search, 0, -strlen($match[1])) . preg_replace('![e\s]+!', '', $match[1]);
    }
    return preg_replace($search, $replace, $string);
}

?>
