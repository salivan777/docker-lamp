<?php
add_action('plugins_loaded', function () {
    add_action('admin_footer', function () {
        echo 'Hello from plugin in Docker container!';
    })
});