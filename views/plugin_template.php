<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="keywords" content="<?php if ( ! empty($meta_keys)) echo $meta_keys ?>" />
	<meta name="description" content="<?php if ( ! empty($meta_desc)) echo $meta_desc ?>" />
	<!-- Google WMT -->
	<meta name="verify-v1" content="bWrRhsmz40Fiqk4zaOp2ai+Sgk5+Ob/mvl5qpQKmn+k=" />
	<title><?php if( ! empty($meta_title)): ?><?php echo $meta_title." - ".Kohana::config('app')->site_name ?><?php else: ?><?php echo Kohana::config('app')->site_name ?><?php endif ?></title>
	<script type="text/javascript">var base_url = '<?php echo url::base() ?>';</script>
<?php
// template css, javascript, meta data
if (isset($styles))  foreach ($styles  as $style)  echo HTML::style($style, array('media'=>'screen'), TRUE), "\n";
if (isset($scripts)) foreach ($scripts as $script) echo HTML::script($script), "\n";
if (isset($metas))   foreach ($metas   as $meta)   echo HTML::meta($meta), "\n";
?>

<?php if (IN_PRODUCTION): ?>
<script type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', '<?php echo Kohana::config('app')->analytics ?>']);
	_gaq.push(['_trackPageview']);

	(function() {
	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
</script>
<?php endif ?>
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