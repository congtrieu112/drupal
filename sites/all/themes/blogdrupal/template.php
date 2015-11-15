<?php
function blogdrupal_html_head_alter(&$head_elements)
{

}

function blogdrupal_root_template()
{
    Global $base_url;

    return $base_url . '/' . drupal_get_path('theme', 'blogdrupal');

}


function blogdrupal_get_all_image_content($arr)
{
    $first_img = '';
    ob_start();
    ob_end_clean();
    preg_match_all('/< *img[^>]*src *= *["\']?([^"\']*)/i', $arr, $matches);
    $first_img = $matches[1];
    if (empty($first_img)) { //Defines a default image
        $first_img = '/images/logo_saostar.png';
    }
    return $first_img;
}

function blogdrupal_custom_main_menu($variables)
{
    $title = $link = "";
    foreach ($variables as $key => $value) {
        $title = $value['title'];
        $link = $value['href'];
        echo '<li><a href="'.$link.'">'.$title.'</a></li>';
    }
}



