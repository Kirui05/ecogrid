<?php
/**
 * Admin functions.
 *
 * @package Eco Renewable Energy
 */

define('ECO_RENEWABLE_ENERGY_SUPPORT',__('https://wordpress.org/support/theme/eco-renewable-energy/','eco-renewable-energy'));
define('ECO_RENEWABLE_ENERGY_REVIEW',__('https://wordpress.org/support/theme/eco-renewable-energy/reviews/#new-post','eco-renewable-energy'));
define('ECO_RENEWABLE_ENERGY_BUY_NOW',__('https://www.wpradiant.net/products/solar-energy-wordpress-theme','eco-renewable-energy'));
define('ECO_RENEWABLE_ENERGY_DOC_URL',__('https://preview.wpradiant.net/tutorial/eco-renewable-energy-free/','eco-renewable-energy'));
define('ECO_RENEWABLE_ENERGY_LIVE_DEMO',__('https://preview.wpradiant.net/eco-renewable-energy/','eco-renewable-energy'));
define('ECO_RENEWABLE_ENERGY_PRO_DOC',__('https://preview.wpradiant.net/tutorial/eco-renewable-energy-pro/','eco-renewable-energy'));

/**
 * Register admin page.
 *
 * @since 1.0.0
 */

function eco_renewable_energy_admin_menu_page() {

	$eco_renewable_energy_theme = wp_get_theme( get_template() );

	add_theme_page(
		$eco_renewable_energy_theme->display( 'Name' ),
		$eco_renewable_energy_theme->display( 'Name' ),
		'manage_options',
		'eco-renewable-energy',
		'eco_renewable_energy_do_admin_page'
	);

}
add_action( 'admin_menu', 'eco_renewable_energy_admin_menu_page' );

function eco_renewable_energy_admin_theme_style() {
	wp_enqueue_style('eco-renewable-energy-custom-admin-style', esc_url(get_template_directory_uri()) . '/get-started/getstart.css');
	wp_enqueue_script( 'admin-notice-script', get_template_directory_uri() . '/get-started/js/admin-notice-script.js', array( 'jquery' ) );
    wp_localize_script('admin-notice-script', 'example_ajax_obj', array('ajaxurl' => admin_url('admin-ajax.php')));
}
add_action('admin_enqueue_scripts', 'eco_renewable_energy_admin_theme_style');

/**
 * Render admin page.
 *
 * @since 1.0.0
 */
function eco_renewable_energy_do_admin_page() {

	$eco_renewable_energy_theme = wp_get_theme( get_template() );
	?>
	<div class="eco-renewable-energy-appearence wrap about-wrap">
		<div class="head-btn">
			<div><h1><?php echo $eco_renewable_energy_theme->display( 'Name' ); ?></h1></div>
			<div class="demo-btn">
				<span>
					<a class="button button-pro" href="<?php echo esc_url( ECO_RENEWABLE_ENERGY_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Buy Now', 'eco-renewable-energy' ); ?></a>
				</span>
				<span>
					<a class="button button-demo" href="<?php echo esc_url( ECO_RENEWABLE_ENERGY_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e( 'Demo', 'eco-renewable-energy' ); ?></a>
				</span>
				<span>
					<a class="button button-doc" href="<?php echo esc_url( ECO_RENEWABLE_ENERGY_PRO_DOC ); ?>" target="_blank"><?php esc_html_e( 'Documentation', 'eco-renewable-energy' ); ?></a>
				</span>
			</div>
		</div>
		
		<div class="two-col">

			<div class="about-text">
				<?php
					$description_raw = $eco_renewable_energy_theme->display( 'Description' );
					$main_description = explode( 'Official', $description_raw );
					?>
				<?php echo wp_kses_post( $main_description[0] ); ?>
			</div><!-- .col -->

			<div class="about-img">
				<a href="<?php echo esc_url( $eco_renewable_energy_theme->display( 'ThemeURI' ) ); ?>" target="_blank"><img src="<?php echo trailingslashit( get_template_directory_uri() ); ?>screenshot.png" alt="<?php echo esc_attr( $eco_renewable_energy_theme->display( 'Name' ) ); ?>" /></a>
			</div><!-- .col -->

		</div><!-- .two-col -->

  <nav class="nav-tab-wrapper wp-clearfix" aria-label="<?php esc_attr_e( 'Secondary menu', 'eco-renewable-energy' ); ?>">
    <a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'eco-renewable-energy' ), 'themes.php' ) ) ); ?>" class="nav-tab<?php echo ( isset( $_GET['page'] ) && 'eco-renewable-energy' === $_GET['page'] && ! isset( $_GET['tab'] ) ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'About', 'eco-renewable-energy' ); ?></a>

    <a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'eco-renewable-energy', 'tab' => 'free_vs_pro' ), 'themes.php' ) ) ); ?>" class="nav-tab<?php echo ( isset( $_GET['tab'] ) && 'free_vs_pro' === $_GET['tab'] ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'Compare free Vs Pro', 'eco-renewable-energy' ); ?></a>

    <a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'eco-renewable-energy', 'tab' => 'changelog' ), 'themes.php' ) ) ); ?>" class="nav-tab<?php echo ( isset( $_GET['tab'] ) && 'changelog' === $_GET['tab'] ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'Changelog', 'eco-renewable-energy' ); ?></a>
  </nav>

    <?php
      eco_renewable_energy_main_screen();

      eco_renewable_energy_changelog_screen();

      eco_renewable_energy_free_vs_pro();
}
/**
 * Output the main about screen.
 */
function eco_renewable_energy_main_screen() {
  if ( isset( $_GET['page'] ) && 'eco-renewable-energy' === $_GET['page'] && ! isset( $_GET['tab'] ) ) {
  ?>
    
<div class="four-col">

	<div class="col">

		<h3><i class="dashicons dashicons-book-alt"></i><?php esc_html_e( 'Free Theme Directives', 'eco-renewable-energy' ); ?></h3>

		<p>
			<?php esc_html_e( 'This article will walk you through the different phases of setting up and handling your WordPress website.', 'eco-renewable-energy' ); ?>
		</p>

		<p>
			<a class="button green button-primary" href="<?php echo esc_url( ECO_RENEWABLE_ENERGY_DOC_URL ); ?>" target="_blank"><?php esc_html_e( 'Free Documentation', 'eco-renewable-energy' ); ?></a>
		</p>

	</div><!-- .col -->

	<div class="col">

		<h3><i class="dashicons dashicons-admin-customizer"></i><?php esc_html_e( 'Full Site Editing', 'eco-renewable-energy' ); ?></h3>

		<p>
			<?php esc_html_e( 'We have used Full Site Editing which will help you preview your changes live and fast.', 'eco-renewable-energy' ); ?>
		</p>

		<p>
			<a class="button button-primary" href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>" ><?php esc_html_e( 'Use Site Editor', 'eco-renewable-energy' ); ?></a>
		</p>

	</div><!-- .col -->

	<div class="col">

		<h3><i class="dashicons dashicons-book-alt"></i><?php esc_html_e( 'Leave us a review', 'eco-renewable-energy' ); ?></h3>
		<p>
			<?php esc_html_e( 'We would love to hear your feedback.', 'eco-renewable-energy' ); ?>
		</p>

		<p>
			<a class="button button-primary" href="<?php echo esc_url( ECO_RENEWABLE_ENERGY_REVIEW ); ?>" target="_blank"><?php esc_html_e( 'Review', 'eco-renewable-energy' ); ?></a>
		</p>

	</div><!-- .col -->


	<div class="col">

		<h3><i class="dashicons dashicons-sos"></i><?php esc_html_e( 'Help &amp; Support', 'eco-renewable-energy' ); ?></h3>

		<p>
			<?php esc_html_e( 'If you have any question/feedback regarding theme, please post in our official support forum.', 'eco-renewable-energy' ); ?>
		</p>

		<p>
			<a class="button button-primary" href="<?php echo esc_url( ECO_RENEWABLE_ENERGY_SUPPORT ); ?>" target="_blank"><?php esc_html_e( 'Get Support', 'eco-renewable-energy' ); ?></a>
		</p>

	</div><!-- .col -->

</div><!-- .four-col -->
  <?php
  }
}

/**
 * Output the changelog screen.
 */
function eco_renewable_energy_changelog_screen() {
  if ( isset( $_GET['tab'] ) && 'changelog' === $_GET['tab'] ) {
    global $wp_filesystem;
    ?>
    <div class="wrap about-wrap">
      <p class="about-description"><?php esc_html_e( 'Want to know whats been happening with the latest changes?', 'eco-renewable-energy' ); ?></p>
      <?php
        // Get the path to the readme.txt file.
        $readme_file = get_template_directory() . '/README.txt';

        // Check if the readme file exists and is readable.
        if ( file_exists( $readme_file ) && is_readable( $readme_file ) ) {
          $changelog = file_get_contents( $readme_file );
          $changelog_list = eco_renewable_energy_parse_changelog( $changelog );
          echo wp_kses_post( $changelog_list );
        } else {
          echo '<p>Changelog file does not exist or is not readable.</p>';
        }
      ?>
    </div>
    <?php
  }
}

/**
 * Parse changelog from readme file.
 * @param  string $content
 * @return string
 */
function eco_renewable_energy_parse_changelog( $content ) {
  // Explode content with '== ' to separate main content into an array of headings.
  $content = explode( '== ', $content );

  $changelog_isolated = '';

  // Find the part that starts with 'Changelog ==', i.e., isolate changelog.
  foreach ( $content as $key => $value ) {
    if ( strpos( $value, 'Changelog ==' ) === 0 ) {
      $changelog_isolated = str_replace( 'Changelog ==', '', $value );
    }
  }

  // Explode $changelog_isolated to manipulate it and add HTML elements.
  $changelog_array = explode( '- ', $changelog_isolated );

  // Prepare the HTML structure.
  $changelog = '<pre class="changelog">';
  foreach ( $changelog_array as $value ) {
    // Add opening and closing div and span, only the first span element will have the heading class.
    $value = '<div class="block"><span class="heading">- ' . esc_html( $value ) . '</span></div>';
    // Append the value to the changelog.
    $changelog .= $value;
  }
  $changelog .= '</pre>';

  return wp_kses_post( $changelog );
}

/**
 * Import Demo data for theme using catch themes demo import plugin
 */
function eco_renewable_energy_free_vs_pro() {
  if ( isset( $_GET['tab'] ) && 'free_vs_pro' === $_GET['tab'] ) {
  ?>
    <div class="wrap about-wrap">

      <h3 class="about-description"><?php esc_html_e( 'Compare Free Vs Pro', 'eco-renewable-energy' ); ?></h3>
      <div class="vs-theme-table">
        <table>
          <thead>
            <tr><th class="head" scope="col"><?php esc_html_e( 'Theme Features', 'eco-renewable-energy' ); ?></th>
              <th class="head" scope="col"><?php esc_html_e( 'Free Theme', 'eco-renewable-energy' ); ?></th>
              <th class="head" scope="col"><?php esc_html_e( 'Pro Theme', 'eco-renewable-energy' ); ?></th>
            </tr>
          </thead>
          <tbody>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><span><?php esc_html_e( 'Responsive Design', 'eco-renewable-energy' ); ?></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'Painless Setup', 'eco-renewable-energy' ); ?></td>
              <td><span class="dashicons dashicons-saved"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'Color Options', 'eco-renewable-energy' ); ?></td>
              <td><span class="dashicons dashicons-saved"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'Premium site demo', 'eco-renewable-energy' ); ?></td>
              <td><span class="dashicons dashicons-no-alt"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'Multiple Block Layout', 'eco-renewable-energy' ); ?></td>
              <td><span class="dashicons dashicons-no-alt"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'Premium Patterns', 'eco-renewable-energy' ); ?></td>
              <td><span class="dashicons dashicons-no-alt"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'Multiple Fonts', 'eco-renewable-energy' ); ?></td>
              <td><span class="dashicons dashicons-no-alt"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'Slider Block', 'eco-renewable-energy' ); ?></td>
              <td><span class="dashicons dashicons-no-alt"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'Post Listing Block', 'eco-renewable-energy' ); ?></td>
              <td><span class="dashicons dashicons-no-alt"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'WooCommerce Filter Block', 'eco-renewable-energy' ); ?></td>
              <td><span class="dashicons dashicons-no-alt"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'Gallery Block', 'eco-renewable-energy' ); ?></td>
              <td><span class="dashicons dashicons-no-alt"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'Post Carousel Block', 'eco-renewable-energy' ); ?></td>
              <td><span class="dashicons dashicons-no-alt"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td class="feature feature--empty"></td>
              <td class="feature feature--empty"></td>
              <td headers="comp-2" class="td-btn-2"><a target="_blank" href="<?php echo esc_url( ECO_RENEWABLE_ENERGY_BUY_NOW ); ?>" class="sidebar-button single-btn" target="_blank"><?php esc_html_e( 'Buy It Now', 'eco-renewable-energy' ); ?></a>

              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  <?php
  }
}