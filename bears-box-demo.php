<?php
/**
 * @package Bears Box Demo
 */
/*
Plugin Name: Box Demo
Plugin URI: http://bearsthemes.com/
Description: Bears Box Demo is plguin show demo.
Version: 1.0
Author: Bearsthemes
Author URI: http://bearsthemes.com/
License: GPLv2 or later
Text Domain: bears-box-demo
*/

/* Enqueue Script */
if (!function_exists('bears_box_demo_enqueue_scripts')) {
		function bears_box_demo_enqueue_scripts() {
			wp_enqueue_style( 'bears-box-demo', plugin_dir_url( __FILE__ ).'assets/box-demo.css',  array(), false );
			wp_enqueue_script( 'bears-box-demo', plugin_dir_url( __FILE__ ).'assets/box-demo.js', array('jquery'), '', true);
	}
}
add_action( 'wp_enqueue_scripts', 'bears_box_demo_enqueue_scripts' );

function bears_box_demo_render() {
	$item_link = 'http://themeforest.net/cart/add_items?ref=bearsthemes&item_ids=22165017';
	$homepages = array(
		array(
			'link' => 'http://theme.bearsthemes.com/wordpress/bears-company/',
			'img' => 'http://bearsthemes.com/landingpages/wp-content/uploads/2018/06/Business-Finance-Demo.jpg',
			'title' => esc_html__('Business & Finance', 'bears-box-demo')
		),
		array(
			'link' => 'http://theme.bearsthemes.com/wordpress/bears-lawfirm/',
			'img' => 'http://bearsthemes.com/landingpages/wp-content/uploads/2018/06/Law-Firm-Demo.jpg',
			'title' => esc_html__('Law Firm', 'bears-box-demo')
		),
		array(
			'link' => 'http://theme.bearsthemes.com/wordpress/bears-construction/',
			'img' => 'http://bearsthemes.com/landingpages/wp-content/uploads/2018/06/Construction-Demo.jpg',
			'title' => esc_html__('Construction', 'bears-box-demo')
		),
		array(
			'link' => 'http://theme.bearsthemes.com/wordpress/bears-dentist/',
			'img' => 'http://bearsthemes.com/landingpages/wp-content/uploads/2018/06/Dentist-Demo.jpg',
			'title' => esc_html__('Dentist', 'bears-box-demo')
		),
		array(
			'link' => 'http://theme.bearsthemes.com/wordpress/bears-legal/',
			'img' => 'http://bearsthemes.com/landingpages/wp-content/uploads/2018/06/Legal-Demo.jpg',
			'title' => esc_html__('Legal', 'bears-box-demo')
		),
		array(
			'link' => 'http://theme.bearsthemes.com/wordpress/bears-marketing/',
			'img' => 'http://bearsthemes.com/landingpages/wp-content/uploads/2018/06/Pr-Marketing-Demo.jpg',
			'title' => esc_html__('Pr & Marketing', 'bears-box-demo')
		),
		array(
			'link' => 'http://theme.bearsthemes.com/wordpress/bears-consultancy/',
			'img' => 'http://bearsthemes.com/landingpages/wp-content/uploads/2018/06/Consultancy-Demo.jpg',
			'title' => esc_html__('Consultancy', 'bears-box-demo')
		),
		array(
			'link' => 'http://theme.bearsthemes.com/wordpress/bears-creative/',
			'img' => 'http://bearsthemes.com/landingpages/wp-content/uploads/2018/06/Creative-agency-Demo.jpg',
			'title' => esc_html__('Creative Agency', 'bears-box-demo')
		),
		array(
			'link' => 'http://theme.bearsthemes.com/wordpress/bears-digital/',
			'img' => 'http://bearsthemes.com/landingpages/wp-content/uploads/2018/06/Digital-Demo.jpg',
			'title' => esc_html__('Digital', 'bears-box-demo')
		),
		array(
			'link' => 'http://theme.bearsthemes.com/wordpress/bears-advisor/',
			'img' => 'http://bearsthemes.com/landingpages/wp-content/uploads/2018/06/Advisor-Agency-Demo.jpg',
			'title' => esc_html__('Advisor Agency', 'bears-box-demo')
		),
		array(
			'link' => 'http://theme.bearsthemes.com/wordpress/bears-insurance/',
			'img' => 'http://bearsthemes.com/landingpages/wp-content/uploads/2018/06/Insurance-Demo.jpg',
			'title' => esc_html__('Insurance', 'bears-box-demo')
		),
		array(
			'link' => 'http://theme.bearsthemes.com/wordpress/bears-serviceit/',
			'img' => 'http://bearsthemes.com/landingpages/wp-content/uploads/2018/06/IT-Services-Demo.jpg',
			'title' => esc_html__('IT Services', 'bears-box-demo')
		),
		/* array(
			'link' => 'http://theme.bearsthemes.com/wordpress/bears-arabic/',
			'img' => 'http://bearsthemes.com/landingpages/wp-content/uploads/2018/06/Arabic-Demo.jpg',
			'title' => esc_html__('Arabic', 'bears-box-demo')
		), */
	);
	?>
	<div id="panel-style-selector">
		<div class="panel-wrapper">
			<div class="panel-selector-open"><i class="fa fa-cog fa-2x fa-spin"></i></div>
			<div class="panel-selector-body clearfix">
				<div class="panel-selector-body-inner">
					<section class="panel-selector-section panel-first-content clearfix">
						<div class="panel-selector-row clearfix">
							<a href="<?php echo esc_url($item_link); ?>" target="_blank" class="panel-purchase-btn"><?php esc_html_e('Buy Bears Now!', 'bears-box-demo'); ?></a>
						</div>
					</section>
					<section class="panel-selector-section panel-body-layout-content clearfix">
						<h3 class="panel-selector-title"><?php esc_html_e('Body Layout', 'bears-box-demo'); ?></h3>
						<div class="panel-selector-row clearfix">
							<a data-type="layout" data-value="wide" href="#" class="panel-selector-btn active"><?php esc_html_e('Wide', 'bears-box-demo'); ?></a>
							<a data-type="layout" data-value="boxed" href="#" class="panel-selector-btn"><?php esc_html_e('Boxed', 'bears-box-demo'); ?></a>
						</div>
					</section>
					<section class="panel-selector-section panel-boxed-mode-content clearfix">
						<h3 class="panel-selector-title"><?php esc_html_e('Boxed Mode Background', 'bears-box-demo'); ?></h3>
						<div class="panel-selector-row clearfix">
							<ul class="panel-primary-background">
								<li class="pattern-0" data-link="<?php echo esc_url(plugins_url('assets/patterns/tree_bark.png', __FILE__)); ?>" data-type="pattern" style="<?php echo 'background: url('.esc_url(plugins_url('assets/patterns/tree_bark.png', __FILE__)).')'; ?>"></li>
								<li class="pattern-2" data-link="<?php echo esc_url(plugins_url('assets/patterns/triangular.png', __FILE__)); ?>" data-type="pattern" style="<?php echo 'background: url('.esc_url(plugins_url('assets/patterns/triangular.png', __FILE__)).')'; ?>"></li>
								<li class="pattern-1" data-link="<?php echo esc_url(plugins_url('assets/patterns/pattern-1.png', __FILE__)); ?>" data-type="pattern" style="<?php echo 'background: url('.esc_url(plugins_url('assets/patterns/pattern-1.png', __FILE__)).')'; ?>"></li>
								<li class="pattern-3" data-link="<?php echo esc_url(plugins_url('assets/patterns/pattern-2.png', __FILE__)); ?>" data-type="pattern" style="<?php echo 'background: url('.esc_url(plugins_url('assets/patterns/pattern-2.png', __FILE__)).')'; ?>"></li>
								<li class="pattern-4" data-link="<?php echo esc_url(plugins_url('assets/patterns/wild_flowers.png', __FILE__)); ?>" data-type="pattern" style="<?php echo 'background: url('.esc_url(plugins_url('assets/patterns/wild_flowers.png', __FILE__)).')'; ?>"></li>
								<li class="pattern-5" data-link="<?php echo esc_url(plugins_url('assets/patterns/triangular_@2X.png', __FILE__)); ?>" data-type="pattern" style="<?php echo 'background: url('.esc_url(plugins_url('assets/patterns/triangular_@2X.png', __FILE__)).')'; ?>"></li>
							</ul>
							<div class="panel-boxed-message"><?php esc_html_e('Please select boxed mode to display backgrounds.', 'bears-box-demo'); ?></div>
						</div>
					</section>
					<section class="panel-selector-section clearfix">
						<h3 class="panel-selector-title"><?php esc_html_e('Created With Bears', 'bears-box-demo'); ?></h3>
						<span class="panel-selector-desc"><?php esc_html_e('Bears is a high performance WP theme with a modern creative design to easily building websites. All demos can be installed with one click.', 'bears-box-demo'); ?></span>
						<div class="panel-selector-row clearfix panel-select-homepage">
							<?php
							foreach($homepages as $homepage) {
								echo '<a href="'.esc_url($homepage['link']).'" data-img="'.esc_url($homepage['img']).'">
										<div class="thumb" style="background: url('.esc_url($homepage['img']).') no-repeat scroll center top / cover;"></div>
										<h6>'.$homepage['title'].'</h6>
									</a>';
							}
							?>
						</div>
					</section>
				</div>
			</div>
		</div>
	</div>
	<?php
}
add_action( 'wp_footer', 'bears_box_demo_render' );
