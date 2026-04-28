<?php
/**
 * Plugin Name: Beta (V3 Example Selective)
 * Description: Beta plugin in the v3 selective-monorepo example.
 * Version: 0.1.0
 */

add_action('admin_notices', function () {
    echo '<div class="notice notice-warning"><p><strong>Beta</strong> is active.</p></div>';
});
