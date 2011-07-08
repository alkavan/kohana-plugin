# Instructions
first, download prggmr: https://github.com/prggmrlabs/prggmr, put into application/vendor
add to your bootstrap:

	require_once Kohana::find_file('vendor', 'prggmr/lib/prggmr');


now you controller template should extand it like this:

	abstract class Controller_Template_Site extends Controller_Template_Plugin {}


***


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

