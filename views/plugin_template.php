<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<title>plugin</title>
	<script type="text/javascript">var base_url = '<?php echo url::base() ?>';</script>
</head>

<body class="">
	<div id="wrapper" class="">
		<div id="wrapper_inner" class="">
			<div id="header">
				<?php Event::fire('EventBeforeHeader'); ?>
				<?php echo $header ?>
				<?php Event::fire('EventAfterHeader'); ?>
			</div>
			<div id="nav">
				<?php echo $nav ?>
			</div>
			<div id="content" class="">
				<?php Event::fire('EventBeforeContent'); ?>
				<?php echo $content ?>
				<?php Event::fire('EventAfterContent'); ?>
			</div>

			<div class="clear"></div>
			<div id="footer">
				<?php Event::fire('EventBeforeFooter'); ?>
				<?php echo $footer ?>
				<?php Event::fire('EventBeforeFooter'); ?>
			</div>
		</div>
	</div>

	<?php if ( ! IN_PRODUCTION) echo View::factory('profiler/stats') ?>
</body>
</html>