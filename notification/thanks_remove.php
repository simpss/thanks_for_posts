<?php
/**
*
* This file is part of the Thanks for posts extension package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

namespace gfksx\ThanksForPosts\notification;

/**
* Thanks for posts notifications class
* This class handles notifying users when they have been thanked for a post
*/

class thanks_remove extends thanks
{
	/**
	* Get notification type name
	*
	* @return string
	*/
	public function get_type()
	{
		return 'gfksx.ThanksForPosts.notification.type.thanks_remove';
	}

	/**
	* Language key used to output the text
	*
	* @var string
	*/
	protected $language_key = 'NOTIFICATION_THANKS_REMOVE';

	/**
	* Notification option data (for outputting to the user)
	*
	* @var bool|array False if the service should use it's default data
	* 					Array of data (including keys 'id', 'lang', and 'group')
	*/
	public static $notification_option = array(
		'lang'	=> 'NOTIFICATION_TYPE_THANKS_REMOVE',
		'group'	=> 'NOTIFICATION_GROUP_MISCELLANEOUS',
	);

	/**
	* Get the id of the parent
	*
	* @param array $thanks_data The data from the thank
	*/
	public static function get_item_parent_id($thanks_data)
	{
		return 0;
	}
}