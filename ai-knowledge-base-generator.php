<?php
/**
 * Plugin Name: AI Knowledge Base Generator
 * Plugin URI: http://delraynelson.com/watch-me-build
 * Description: Generate SEO-optimized Knowledge Base articles for WooCommerce products using AI.
 * Version: 1.0
 * Author: Your Name
 * Author URI: http://delraynelson.com/watch-me-build
 * License: GPL2
 */

// Register Knowledge Base Custom Post Type
function akbg_register_knowledge_base_cpt() {
    $args = array(
        'label' => 'Knowledge Base',
        'public' => true,
        'show_in_menu' => true,
        'supports' => array('title', 'editor', 'custom-fields'),
        'has_archive' => true,
        'rewrite' => array('slug' => 'knowledge-base'),  // <- Fixed here
    );
    register_post_type('knowledge_base', $args);
}
add_action('init', 'akbg_register_knowledge_base_cpt');

// Add Admin Menu Page
function akbg_add_admin_menu() {
    add_menu_page(
        'AI KB Generator Settings',
        'AI KB Generator',
        'manage_options',
        'ai-kb-generator',
        'akbg_settings_page_html'
    );
}

function akbg_settings_page_html() {
    ?>
    <div class="wrap">
        <h1>AI Knowledge Base Generator Settings</h1>
        <form method="post" action="options.php">
            <!-- Settings fields will go here -->
            <p>Coming Soon: API key and Generation Settings.</p>
        </form>
    </div>
    <?php
}
add_action('admin_menu', 'akbg_add_admin_menu');
?>
