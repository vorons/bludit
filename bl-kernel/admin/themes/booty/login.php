<!DOCTYPE html>
<html>
<head>
	<title>Bludit</title>
	<meta charset="<?php echo CHARSET ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="robots" content="noindex,nofollow">

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo HTML_PATH_ADMIN_THEME.'img/favicon.png?version='.BLUDIT_VERSION ?>">

	<!-- CSS -->
	<?php
		echo Bootstrap::css(array(
			'bootstrap.min.css',
			'jquery-auto-complete.css',
			'open-iconic-master/font/css/open-iconic-bootstrap.min.css',
			'bludit.css'
		));
	?>

	<!-- Javascript -->
	<?php
		echo Bootstrap::js(array(
			'jquery.min.js',
			'jquery-auto-complete.min.js',
			'bootstrap-bundle.min.js'
		));
	?>

	<!-- Javascript -->
	<?php
		echo '<script>';
		include(PATH_CORE_JS.'bludit-ajax.php');
		echo '</script>';
	?>

	<!-- Plugins -->
	<?php Theme::plugins('loginHead') ?>
</head>
<body class="login">

<!-- Plugins -->
<?php Theme::plugins('loginBodyBegin') ?>

<!-- Alert -->
<?php include('html/alert.php'); ?>

<div class="container">
	<div class="row justify-content-md-center pt-5">
		<div class="col-4 pt-5">
		<?php
			if (Sanitize::pathFile(PATH_ADMIN_VIEWS, $layout['view'].'.php')) {
				include(PATH_ADMIN_VIEWS.$layout['view'].'.php');
			}
		?>
		</div>
	</div>
</div>

<!-- Plugins -->
<?php Theme::plugins('loginBodyEnd') ?>

</body>
</html>