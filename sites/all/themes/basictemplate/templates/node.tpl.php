<div class="content">
    <?php if ($page): ?>

        <?php print $user_picture; ?>
        <div id="node-<?php print $node->nid; ?>" class=" <?php print $classes; ?> clearfix"<?php print $attributes; ?>>
            <div class="content"<?php print $content_attributes; ?>>
                <?php
                print render($content);
                hide($content['comment']);
                ?>
            </div>
        </div>
    <?php endif; ?>
</div>