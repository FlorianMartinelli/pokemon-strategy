<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" > 
	<head>
		<title><?php echo $title; ?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $charset; ?>" />
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo css_url('bootstrap.min'); ?>" />
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo css_url('bootstrap-theme.min'); ?>" />
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo css_url('style'); ?>" />
	</head>

	<body>
		<div id="contenu">
			<?php echo $output; ?>
		</div>
		
		<script type="text/javascript" src="<?php echo js_url('jquery.min'); ?>"></script>
		<script type="text/javascript" src="<?php echo js_url('bootstrap.min'); ?>"></script>
		<script type="text/javascript" src="<?php echo js_url('script'); ?>"></script>

</html>