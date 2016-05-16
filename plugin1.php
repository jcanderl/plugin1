<?php
/*
Plugin Name: JCA
Plugin URI: https://profitpeakmarketing.com
Description: Test Plugin
Version: 1.0
Author: JC Anderl
Author URI: https://profitpeakmarketing.com
License: GPL2
*/


function JCA_show_admin_notice()
{
    echo "<p><span style='background-color: royalblue; color: white; padding: 8px;'>Success</span></p>";
}

add_action('admin_notices', 'JCA_show_admin_notice');