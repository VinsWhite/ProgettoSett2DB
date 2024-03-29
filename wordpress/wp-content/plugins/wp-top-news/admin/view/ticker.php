<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<div id="wph-wrap-all" class="wrap wtn-settings-page">

    <div class="settings-banner">
        <h2><i class="fa fa-cogs" aria-hidden="true"></i>&nbsp;<?php _e('Ticker News Settings', 'wp-top-news'); ?></h2>
    </div>

    <?php 
    if ( $wtnInfoMessage ) { 
        $this->wtn_display_notification('success', 'Your information updated successfully.'); 
    } 
    ?>

    <div class="wtn-wrap">

        <nav class="nav-tab-wrapper">
            <a href="?post_type=wtn_news&page=wtn-ticker-settings&tab=content" class="nav-tab wtn-tab <?php if ( $tab !== 'styles' ) { ?>wtn-tab-active<?php } ?>">
                <i class="fa fa-cog" aria-hidden="true">&nbsp;</i><?php _e('Content', 'wp-top-news'); ?>
            </a>
            <a href="?post_type=wtn_news&page=wtn-ticker-settings&tab=styles" class="nav-tab wtn-tab <?php if ( $tab === 'styles' ) { ?>wtn-tab-active<?php } ?>">
                <i class="fa fa-paint-brush" aria-hidden="true">&nbsp;</i><?php _e('Styles', 'wp-top-news'); ?>
            </a>
        </nav>

        <div class="wtn_personal_wrap wtn_personal_help" style="width: 75%; float: left;">
            
            <div class="tab-content">
                <?php 
                switch ( $tab ) {
                    case 'styles':
						include_once 'partial/ticker-styles.php';
                        break;

                    default:
						include_once 'partial/ticker-content.php';
                        break;
                } 
                ?>
            </div>
        </div>

        <?php $this->wtn_admin_sidebar(); ?>

    </div>

</div>