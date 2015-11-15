<?php
$vocabulary = taxonomy_vocabulary_machine_name_load('viewlist ');
$terms = taxonomy_get_tree($vocabulary->vid);
foreach($terms as $key=> $item){ ?>
    <ul id="<?php print strtolower($item->name);?>" class="cd-faq-group">
        <li class="cd-faq-title"><h2><?php print $item->name;?></h2></li>
        <?php
        $node = taxonomy_select_nodes($item->tid);
        $nodes = node_load_multiple($node);
        foreach($nodes as $k=>$items){
        ?>
        <li>
            <a class="cd-faq-trigger" href="#<?php print $k; ?>"><?php print $items->title; ?></a>
            <div class="cd-faq-content">
                <p><?php
                    $body = field_get_items('node',$items, 'body');
                    print $body[0]['value'];


                    ?></p>
            </div> <!-- cd-faq-content -->
        </li>
        <?php } ?>


    </ul> <!-- cd-faq-group -->
<?php }


