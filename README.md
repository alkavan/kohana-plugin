# Instructions
my fork of prggmr lib included with fix for kohana3!

add to your bootstrap:

	require_once Kohana::find_file('vendor', 'prggmr/lib/prggmr');


Controller_Template should extand it like this:

	abstract class Controller_Template_Site extends Controller_Template_Plugin {}

# Usage
here some basic stuff you can do:

	Event::subscribe('EventBeforeHeader', function ($event) {
			echo View::factory('test/plugin_header')->render();
		},
	5);

	Event::subscribe('EventBeforeHeader', function ($event) {
			echo '(defined second!)';
		},
	1);

	Event::subscribe('EventAfterHeader', function ($event) {
			echo '(after third!)';
		},
	5);

	// add something to footer
	Event::subscribe('EventBeforeFooter', function ($event) {
			echo View::factory('test/plugin_footer')->render();
		},
	1);


then on templates/views:

	<?php Event::fire('EventBeforeHeader'); ?>
	echo 'header stuff';
	<?php Event::fire('EventAfterHeader'); ?>

## prggmr
direct access to prggmr instance is like this:

	\prggmr\Engine::instance()->method()