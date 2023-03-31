<?php
// Register the admin menu
function intero_admin_menu() {
    add_menu_page(
        'WooCommerce Input Fields+ ',
        'Input Fields+',
        'manage_options',
        'extra-fieldPlus',
        'intero_admin_page',
        'dashicons-table-row-before',
        25
    );

    add_submenu_page(
        'extra-fieldPlus', // Parent slug
        'WooCommerce Input Fields+  Widgets', // Page title
        'Widgets', // Menu title
        'manage_options', // Capability required to access the menu
        'extra-fieldPlus-widgets', // Menu slug
        'intero_admin_widget_page' // Function to render the page
    );
}

add_action( 'admin_menu', 'intero_admin_menu' );

// Render the submenu page
function intero_admin_page() {
	?>
	<div class="wrap">
		<h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
		<p>See Documentation <a href="https://docs.google.com/document/d/1_q-Q_8DMrWBe4UjLPYH_iMdmBBkDiuPaq4TEDNCz1A4/edit?usp=sharing" target="_blank">Here</a></p>
	</div>
	<?php
}

// Render the submenu page
function intero_admin_widget_page() {
    // Get the current status of the checkbox
    $is_active = get_option( 'intero_widget_active', false );

    // Generate the URL for the current submenu page
    $page_url = add_query_arg( 'page', 'extra-fieldPlus-widgets', admin_url( 'admin.php' ) );
    ?>
    <div class="wrap">
        <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
        <br>
        <br>
        <form method="post" action="<?php echo esc_url( $page_url ); ?>">
            <table class="widefat">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Widget Name</th>
                        <th>Active</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>WooCommerce Input Fields+ </td>
                        <td>
                            <input type="checkbox" name="active" value="1"<?php if ($is_active) echo ' checked="checked"'; ?>>
                        </td>
                    </tr>
                </tbody>
            </table>
            <?php wp_nonce_field( 'intero_widget_nonce', 'intero_widget_nonce_field' ); ?>
            <?php submit_button( 'Save' ); ?>
        </form>
    </div>
    <?php
    // When the form is submitted, update the value of $is_active
    if ( isset( $_POST['intero_widget_nonce_field'] ) && wp_verify_nonce( $_POST['intero_widget_nonce_field'], 'intero_widget_nonce' ) ) {
        if ( isset( $_POST['active'] ) && $_POST['active'] == '1' ) {
            $is_active = true;
        } else {
            $is_active = false;
        }
        // Save the updated value of $is_active to the database
        update_option( 'intero_widget_active', $is_active );

        // Redirect back to the same page
        wp_redirect( $page_url );
        exit;
    }
}
