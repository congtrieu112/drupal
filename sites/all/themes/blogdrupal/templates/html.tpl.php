<?php
$html_attributes  = "lang='".$language->language."'" ;
$html_attributes .= "dir='".$language->dir."'";
$html_attributes .= $rdf_namespaces;
?>
<html <?php print $html_attributes; ?> >
<head profile="<?php print $grddl_profile; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
    <?php print $head; ?>
    <title><?php print $head_title; ?></title>
    <?php print $styles; ?>
    <script>
        var ROOT_TEMPALE = "<?php print blogdrupal_root_template(); ?>";
    </script>
</head>
<body id="body" class="<?php print $classes; ?>" <?php print $attributes;?>>
<?php print $page_top;
print $page;
print $page_bottom;
Global $base_url;
$url = $base_url.'/misc/jquery.js';
$url_result = $base_url .'/'. path_to_theme().'/js/jquery.js';
print  $scripts;?>

<script src="<?php echo base_path() . path_to_theme() ?>/js/jquery.js"></script>
<script src="<?php echo base_path() . path_to_theme() ?>/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_path() . path_to_theme() ?>/js/jquery.nivo.slider.pack.js"></script>
<script src="<?php echo base_path() . path_to_theme() ?>/js/jquery.arctext.js"></script>
<script src="<?php echo base_path() . path_to_theme() ?>/js/jquery.anythingslider.min.js"></script>
<script src="<?php echo base_path() . path_to_theme() ?>/js/lightbox.js"></script>
<script src="<?php echo base_path() . path_to_theme() ?>/js/selectnav.min.js"></script>
<script src="<?php echo base_path() . path_to_theme() ?>/js/proccess.js"></script>
</body>
</html>