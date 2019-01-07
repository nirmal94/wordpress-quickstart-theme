<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

// Class started
class ThemeVCExtendAddonClass {

    function __construct() {
        add_action( 'init', array( $this, 'ThemeIntegrateWithVC' ) );
    }
 
    public function ThemeIntegrateWithVC() {
        if ( ! defined( 'WPB_VC_VERSION' ) ) {
            add_action('admin_notices', array( $this, 'ThemeShowVcVersionNotice' ));
            return;
        }

        include_once('vc-blocks.php');

    }

    public function ThemeShowVcVersionNotice() {
        $theme_data = wp_get_theme();
        echo '
        <div class="notice notice-warning">
          <p>'.sprintf(__('<strong>%s</strong> recommends <strong>Visual Composer</strong> plugin to be installed and activated on your site.', 'theme_name'), $theme_data->get('Name')).'</p>
        </div>';
    }
}

new ThemeVCExtendAddonClass();