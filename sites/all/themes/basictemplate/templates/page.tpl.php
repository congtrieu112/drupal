<?php  print render($page['header']);
echo "<pre>".print_r(getnumbertype(0,10),true)."</pre>";
//echo $GLOBALS['base_url'].'/'.drupal_get_path('module', 'dataexcel').'/dataexcel.xlsx';
//dataexcel_create_excel(0,10);
//dowload_demo_finished_batch_excel();
//echo file_directory_temp();
//for($i=0;$i<10;$i++){
//  create_node_type();
//}

?>

<section class="cd-faq">
    <?php print drupal_render($page['sidebar_left']); ?>


	<div class="cd-faq-items">
    <?php print drupal_render($page['content']); ?>


	</div> <!-- cd-faq-items -->
	<a href="#0" class="cd-close-panel">Close</a>
</section> <!-- cd-faq -->