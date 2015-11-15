<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
            <?php print $head; ?>
            <?php print $styles; ?>

	<script src="<?php print base_path() . drupal_get_path('theme', 'basictemplate'); ?>/js/modernizr.js"></script> <!-- Modernizr -->
	<title><?php print $head_title; ?></title>
</head>
<body class="<?php print $classes; ?>" <?php print $attributes; ?>> 
    <?php print $page_top ; ?>
<?php print $page; ?>
    <?php print $page_bottom; ?>
    <?php print $scripts; ?>

</body>
</html>