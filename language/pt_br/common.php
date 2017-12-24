<?php

/**
*
*
* @package - Activity 24 hours
* @copyright (c) 2015 RMcGirr83
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* Brazilian Portuguese translation by eunaumtenhoid (c) 2017 [ver 1.0.5] (https://github.com/phpBBTraducoes)
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
// Some characters you may want to copy&paste:
// ’ » “ ” …

$lang = array_merge($lang, array(
	'USERS_24HOUR_TOTAL'	=>  '%d registrado,',
	'HIDDEN_24HOUR_TOTAL'	=> ' %d oculto ',
	'GUEST_ONLINE_24'		=> array(
		1 => ' e %d visitante',
		2 => ' e %d visitantes',
	),
	'LAST_24_HOURS'	=> ' ativos nas últimas 24 horas',
	'24HOUR_TOPICS'			=> 'Novos tópicos %d',
	'24HOUR_POSTS'			=> 'Novos posts %d',
	'24HOUR_USERS'			=> 'Novos usuários %d',

	'TWENTYFOURHOUR_STATS'	=> 'Atividade nas últimas 24 horas',
	'TOTAL_24HOUR_USERS'	=> array(
		1 => 'No total havia %d usuário :: ',
		2 => 'No total havia %d usuários :: ',
	),
));
