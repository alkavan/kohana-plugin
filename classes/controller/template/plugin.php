<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Plugin Controller Template
 */
abstract class Controller_Template_Plugin extends Controller_Template
{
	public $event_markdown = TRUE;
	public $template = 'plugin_template';

	public function before()
	{
		parent::before();

		if($this->event_markdown === TRUE)
		{
			$this->_subscribe_events();
		}
	}

	public function after()
	{
		parent::after();
	}

	protected function _subscribe_events()
	{
		// Header Events
		Event::subscribe('EventBeforeHeader', function ($event) {
				echo '<!-- EventBeforeHeader -->';
			},
		null, 0);

		Event::subscribe('EventAfterHeader', function ($event) {
				echo '<!-- EventAfterHeader -->';
			},
		null, 999);

		// Content events
		Event::subscribe('EventBeforeContent', function ($event) {
				echo '<!-- EventBeforeContent -->';
			},
		null, 0);

		Event::subscribe('EventAfterContent', function ($event) {
				echo '<!-- EventAfterContent -->';
			},
		null, 999);

		// Footer Events
		Event::subscribe('EventBeforeFooter', function ($event) {
				echo '<!-- EventBeforeFooter -->';
			},
		null, 0);

		Event::subscribe('EventAfterFooter', function ($event) {
				echo '<!-- EventAfterFooter -->';
			},
		null, 999);
	}
}
// End Controller_Template_Plugin
