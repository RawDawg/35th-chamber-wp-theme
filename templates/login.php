<?php
/**
 * Template Name: Login Page
 *
 * Login Page Template.
 *
 * @author Ahmad Awais
 * @since 1.0.0
 */

?>

	<!-- section -->
    <section class="bt_loginForm">
      <img class="branding" src="https://cdn.bettertimes.de/images/icon-bettertimes.svg">
        <?php
            global $user_login;

            // In case of a login error.
            if ( isset( $_GET['login'] ) && $_GET['login'] == 'failed' ) : ?>
    	            <div class="aa_error">
    		            <p><?php _e( 'Nope …', 'AA' ); ?></p>
    	            </div>
            <?php
                endif;

            // If user is already logged in.
            if ( is_user_logged_in() ) : ?>

                <div class="aa_logout">

                    <?php
                        _e( 'Hallo ', 'AA' );
                        echo $user_login;
                        _e( ', ', 'AA' );
                    ?>

                    </br>

                    <?php _e( 'Du bist bereits angemeldet.', 'AA' ); ?>

                    </br></br>

                </div>

                <a id="wp-submit" href="<?php echo wp_logout_url(); ?>" title="Logout">
                    <?php _e( 'Abmelden', 'AA' ); ?>
                </a>

            <?php
                // If user is not logged in.
                else:

                    // Login form arguments.
                    $args = array(
                        'echo'           => true,
                        'redirect'       => home_url( '/wp-admin/' ),
                        'form_id'        => 'loginform',
                        'label_username' => __( 'Username' ),
                        'label_password' => __( 'Password' ),
                        'label_remember' => __( 'Angemeldet bleiben' ),
                        'label_log_in'   => __( 'Anmelden' ),
                        'id_username'    => 'user_login',
                        'id_password'    => 'user_pass',
                        'id_remember'    => 'rememberme',
                        'id_submit'      => 'wp-submit',
                        'remember'       => true,
                        'value_username' => NULL,
                        'value_remember' => true
                    );

                    // Calling the login form.
                    wp_login_form( $args );

                endif;
        ?>
        <div class="copyright">&copy; <?php echo date("Y"); ?> | <a href="https://www.bettertimes.de" title="Werbeagentur in Köln" target="_blank">Bettertimes</a></div>
	</section>
	<!-- /section -->
