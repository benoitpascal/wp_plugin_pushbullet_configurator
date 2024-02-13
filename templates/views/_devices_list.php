
<div class="inside">
    <h3 class="hndle" style=" display: inline-block; margin-right: 5px;">
        <label for="title">
            <?php
            _e('Devices list', 'pushbullet-configurator');
            ?>
        </label>
    </h3>
    <a href="<?= $_SERVER['REQUEST_URI'] . '&action=test-alert&type=push' ?>" class="page-title-action">Try sending a push</a>
    <a href="<?= $_SERVER['REQUEST_URI'] . '&action=test-alert&type=sms' ?>" class="page-title-action">Try sending an SMS <small>(be careful, it's not unlimited)</small></a>
    <?php
    // Fetch, prepare, sort, and filter our data...
    $table->prepare_items();
    // echo "put table of locked entries here";
    ?>
    <form id="tables-filter" method="post">
        <!-- For plugins, we also need to ensure that the form posts back to our current page -->
        <input type="hidden" name="page" value="<?php echo esc_attr($page); ?>"/>
        <?php
        if (!empty($tab)) {
            echo '<input type="hidden" name="tab" value="' . esc_attr($tab) . '" />';
        }
        ?>
        <!-- Now we can render the completed list table -->
        <?php $table->display(); ?>
    </form>
</div>