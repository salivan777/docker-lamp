<?php
add_action('plugins_loaded', function () => {
    add_action('admin_footer', public function FunctionName(Type $var = null)
    {
        # code...
    }() => {
        echo 'Hello from plugin in Docker container!';
    })
});