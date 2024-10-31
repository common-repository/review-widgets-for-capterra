<?php
if (!defined('WP_UNINSTALL_PLUGIN')) {
die;
}
require_once plugin_dir_path( __FILE__ ) . 'trustindex-plugin.class.php';
$trustindex_pm_capterra = new TrustindexPlugin_capterra("capterra", __FILE__, "12.4.1", "Widgets for Capterra Reviews", "Capterra");
$trustindex_pm_capterra->uninstall();
?>