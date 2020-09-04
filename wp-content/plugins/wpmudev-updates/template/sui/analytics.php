<?php
/**
 * Dashboard template: Analytics Functions
 *
 * Following variables are passed into the template:
 * - $urls
 * - $analytics_enabled
 * - $analytics_role
 *
 * @since   4.0.0
 * @package WPMUDEV_Dashboard
 */

// Render the page header section.
$page_title = __( 'Analytics', 'wpmudev' );
$page_slug  = 'analytics';
$this->render_sui_header( $page_title, $page_slug );

/** @var WPMUDEV_Dashboard_Sui $this */
/** @var WPMUDEV_Dashboard_Sui_Page_Urls $urls */
/** @var bool $analytics_enabled */
/** @var string $analytics_role */
/** @var array $analytics_metrics */

?>

<?php
if ( isset( $_GET['success-action'] ) ) : // wpcs csrf ok.
	?>
	<div class="sui-floating-notices">
		<?php
		switch ( $_GET['success-action'] ) { // wpcs csrf ok.
			case 'analytics-setup':
				$notice_msg = '<p>' . esc_html__( 'Analytics configuration has been saved.', 'wpmudev' ) . '</p>';
				$notice_id  = 'analytics-success';
				break;
			case 'check-updates':
				$notice_msg = '<p>' . esc_html__( 'Data successfully updated.', 'wpmudev' ) . '</p>';
				$notice_id  = 'remote-check-success';
				break;
			default:
				break;
		}
		?>
		<div
		role="alert"
		id="<?php echo esc_attr( $notice_id ); ?>"
		class="sui-tools-notice-alert sui-notice"
		aria-live="assertive"
		data-show-dismiss="true"
		data-notice-type="success"
		data-notice-msg="<?php echo wp_kses_post( $notice_msg ); ?>"
		>
		</div>
	</div>
<?php endif; ?>

<?php if ( isset( $_GET['failed-action'] ) ) : ?>
	<div class="sui-floating-notices">
		<?php
		switch ( $_GET['failed-action'] ) {
			case 'analytics-setup':
				?>
				<div
				role="alert"
				id="analytics-error"
				class="sui-tools-notice-alert sui-notice"
				aria-live="assertive"
				data-show-dismiss="true"
				data-notice-type="success"
				data-notice-msg="<p><?php esc_html_e( 'Failed save analytics configuration.', 'wpmudev' ); ?></p>"
				>
				</div>
				<?php
				break;
			default:
				break;
		}
		?>
	</div>
<?php endif; ?>

<div class="sui-row-with-sidenav">

	<div class="sui-box js-sidenav-content" id="analytics" style="display: none;">

		<form method="POST" action="<?php echo esc_url( $urls->analytics_url ); ?>">

			<input type="hidden" name="action" value="analytics-setup"/>

			<?php wp_nonce_field( 'analytics-setup', 'hash' ); ?>

			<div class="sui-box-header">
				<h2 class="sui-box-title"><?php esc_html_e( 'Analytics', 'wpmudev' ); ?></h2>
			</div>

			<?php if ( $analytics_enabled && is_wpmudev_member() ) : ?>

				<?php
				$role_names = wp_roles()->get_names();
				$role_name  = isset( $role_names[ $analytics_role ] ) ? $role_names[ $analytics_role ] : 'Administrator';
				?>

				<div class="sui-box-body">

					<p><?php esc_html_e( "Add basic analytics tracking that doesn't require any third party integration, and display the data in the WordPress Admin Dashboard area.", 'wpmudev' ); ?></p>
					<div class="sui-notice sui-notice-info" style="margin-bottom:0;">
						<div class="sui-notice-content">
							<div class="sui-notice-message">
								<i class="sui-notice-icon sui-icon-info sui-md" aria-hidden="true"></i>
								<p>
									<?php printf(
										esc_html__( 'Analytics are now being tracked and the widget is being displayed to %s and above in their Dashboard area', 'wpmudev' ),
										esc_html( $role_name )
									); ?>
								</p>
							</div>
						</div>
					</div>
					<span class="sui-description" style="margin: 10px 0 30px 0;"><?php esc_html_e( 'Note: IP addresses are anonymized when stored and meet GDPR recommendations.', 'wpmudev' ); ?></span>
					<div class="sui-box-settings-row">

						<div class="sui-box-settings-col-1">

							<span class="sui-settings-label"><?php esc_html_e( 'User Role', 'wpmudev' ); ?></span>

							<span class="sui-description"><?php esc_html_e( 'Choose which minimum user roles you want to make the analytics widget available to.', 'wpmudev' ); ?></span>

						</div>

						<div class="sui-box-settings-col-2">

							<div class="sui-form-field sui-input-md">

								<select name="analytics_role">

									<?php $roles = wp_roles()->roles;

									foreach ( $roles as $key => $site_role ) {
										// core roles define level_X caps, that's what we'll use to check permissions.
										if ( ! isset( $site_role['capabilities']['level_0'] ) ) {
											continue;
										} ?>
										<option <?php selected( $analytics_role, $key ); ?> value="<?php echo esc_attr( $key ); ?>"><?php echo esc_html( $site_role['name'] ); ?></option>
									<?php } ?>

								</select>

							</div>

						</div>

					</div>

					<div class="sui-box-settings-row">

						<div class="sui-box-settings-col-1">

							<span class="sui-settings-label"><?php esc_html_e( 'Metric Types', 'wpmudev' ); ?></span>

							<span class="sui-description"><?php esc_html_e( 'Select the types of analytics the selected User Roles will see in their WordPress Admin area.', 'wpmudev' ); ?></span>

						</div>

						<div class="sui-box-settings-col-2">

							<div class="sui-form-field sui-input-md">

								<label for="analytics_metrics-pageviews" class="sui-checkbox sui-checkbox-stacked">
									<input type="checkbox"
									       id="analytics_metrics-pageviews"
									       name="analytics_metrics[]"
									       value="pageviews"
										<?php checked( in_array( 'pageviews', $analytics_metrics, true ) ); ?>>
									<span aria-hidden="true"></span>
									<span><?php esc_html_e( 'Page views', 'wpmudev' ); ?></span>
								</label>
								<label for="analytics_metrics-unique_pageviews" class="sui-checkbox sui-checkbox-stacked">
									<input type="checkbox"
									       id="analytics_metrics-unique_pageviews"
									       name="analytics_metrics[]"
									       value="unique_pageviews"
										<?php checked( in_array( 'unique_pageviews', $analytics_metrics, true ) ); ?>>
									<span aria-hidden="true"></span>
									<span><?php esc_html_e( 'Unique page views', 'wpmudev' ); ?></span>
								</label>
								<label for="analytics_metrics-page_time" class="sui-checkbox sui-checkbox-stacked">
									<input type="checkbox"
									       id="analytics_metrics-page_time"
									       name="analytics_metrics[]"
									       value="page_time"
										<?php checked( in_array( 'page_time', $analytics_metrics, true ) ); ?>>
									<span aria-hidden="true"></span>
									<span><?php esc_html_e( 'Avg time on page', 'wpmudev' ); ?></span>
								</label>
								<label for="analytics_metrics-bounce_rate" class="sui-checkbox sui-checkbox-stacked">
									<input type="checkbox"
									       id="analytics_metrics-bounce_rate"
									       name="analytics_metrics[]"
									       value="bounce_rate"
										<?php checked( in_array( 'bounce_rate', $analytics_metrics, true ) ); ?>>
									<span aria-hidden="true"></span>
									<span><?php esc_html_e( 'Bounce rate', 'wpmudev' ); ?></span>
								</label>
								<label for="analytics_metrics-exit_rate" class="sui-checkbox sui-checkbox-stacked">
									<input type="checkbox"
									       id="analytics_metrics-exit_rate"
									       name="analytics_metrics[]"
									       value="exit_rate"
										<?php checked( in_array( 'exit_rate', $analytics_metrics, true ) ); ?>>
									<span aria-hidden="true"></span>
									<span><?php esc_html_e( 'Exit rate', 'wpmudev' ); ?></span>
								</label>
								<label for="analytics_metrics-gen_time" class="sui-checkbox sui-checkbox-stacked">
									<input type="checkbox"
									       id="analytics_metrics-gen_time"
									       name="analytics_metrics[]"
									       value="gen_time"
										<?php checked( in_array( 'gen_time', $analytics_metrics, true ) ); ?>>
									<span aria-hidden="true"></span>
									<span><?php esc_html_e( 'Avg generation time', 'wpmudev' ); ?></span>
								</label>

							</div>

						</div>

					</div>

				</div>

				<div class="sui-box-footer">

					<button type="submit"
					        name="status"
					        value="deactivate"
					        class="sui-button sui-button-ghost">

						<span class="sui-loading-text">
							<i class="sui-icon-power-on-off" aria-hidden="true"></i>
							<?php esc_html_e( 'Deactivate', 'wpmudev' ); ?>
						</span>

						<i class="sui-icon-loader sui-loading" aria-hidden="true"></i>

					</button>

					<div class="sui-actions-right">

						<button type="submit" class="sui-button sui-button-blue" name="status" value="settings">

							<span class="sui-loading-text">
								<i class="sui-icon-save" aria-hidden="true"></i>
								<?php esc_html_e( 'SAVE CHANGES', 'wpmudev' ); ?>
							</span>

							<i class="sui-icon-loader sui-loading" aria-hidden="true"></i>

						</button>

					</div>

				</div>

			<?php else : ?>

				<div class="sui-message sui-message-lg">

					<img src="<?php echo esc_url( WPMUDEV_Dashboard::$site->plugin_url . 'assets/images/devman-analytics.png' ); ?>"
					     srcset="<?php echo esc_url( WPMUDEV_Dashboard::$site->plugin_url . 'assets/images/devman-analytics.png' ); ?> 1x, <?php echo esc_url( WPMUDEV_Dashboard::$site->plugin_url . 'assets/images/devman-analytics@2x.png' ); ?> 2x"
					     alt="Analytics"
						 class="sui-image"
						 aria-hidden="true" />

					<?php if ('free' === $membership_data['membership']): ?>
						<p><?php echo __( 'Add basic analytics tracking that doesn\'t require any third party integration, and display the<br>data in the WordPress Admin Dashboard area. This feature requires an active WPMU DEV<br>membership.', 'wpmudev' ); ?></p>
						<a href="https://premium.wpmudev.org/hub/account/?utm_source=wpmudev-dashboard&utm_medium=plugin&utm_campaign=dashboard_expired_modal_reactivate" class="sui-button sui-button-purple" style="margin-top: 10px;"><?php echo __('Reactivate Membership', 'wpmudev'); ?></a>
					<?php else: ?>
					<p><?php esc_html_e( "Add basic analytics tracking that doesn't require any third party integration, and display the data in the WordPress Admin Dashboard area.", 'wpmudev' ); ?></p>

					<button type="submit"
					        name="status"
					        value="activate"
					        class="sui-button sui-button-blue"
						<?php echo( ! is_wpmudev_member() ? 'disabled="disabled"' : '' ); ?>>

						<span class="sui-loading-text"><?php esc_html_e( 'Activate', 'wpmudev' ); ?></span>

						<i class="sui-icon-loader sui-loading" aria-hidden="true"></i>

					</button>
					<?php endif; ?>

				</div>

			<?php endif; ?>
		</form>
	</div>
</div>

<?php $this->render_with_sui_wrapper( 'sui/element-last-refresh' ); ?>
<?php $this->render_with_sui_wrapper( 'sui/footer' );