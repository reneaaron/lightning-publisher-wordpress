<?php

// If this file is called directly, abort.
defined('WPINC') || die; ?>

<div class="wrap lnp">
    <div class="tabbed-content">
        
        <?php $this->do_tabs_settings_section_nav(); ?>

        <div class="tab-content-wrapper">
            <form method="post" action="options.php">
                <?php 

                $this->do_tabs_settings_section();
                settings_fields($this->settings_path);
                submit_button();
                
                ?>
            </form>
        </div>
    </div>
</div>
