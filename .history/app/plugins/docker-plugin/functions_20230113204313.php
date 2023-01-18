add_action('plugins_loaded', () => {
    add_action('admin_footer', () => {
        echo 'Hello from plugin in Docker'
    })
});