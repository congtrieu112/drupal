
<ul class="cd-faq-categories">
    <?php foreach ($inforqa as $key => $item):
        if ($key > 0):
            ?>
            <li><a <?php print ($key == 1) ? "class='selected'" : ""; ?>  href="#<?php print strtolower($item->name); ?>"><?php print $item->name; ?></a></li>
        <?php endif;
    endforeach;
    ?>

</ul> <!-- cd-faq-categories -->