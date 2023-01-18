<?php
add_action('setup_themes', function () {
    add_action('admin_footer', function () {
        echo 'Hello from plugin in Docker container!';
    });
});
