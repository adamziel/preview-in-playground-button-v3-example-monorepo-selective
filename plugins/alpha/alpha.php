<?php
/**
 * Plugin Name: Alpha (V3 Example Selective)
 * Description: Alpha plugin in the v3 selective-monorepo example.
 * Version: 0.1.0
 */

add_action('admin_notices', function () {
    echo '<div class="notice notice-warning"><p><strong>Alpha</strong> is active.</p></div>';
});

// Fork smoke test: v3 preview workflows.
