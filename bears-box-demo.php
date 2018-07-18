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
	$preset_color = 'default';
    ?>
		<div id="panel-style-selector">
			<div class="panel-wrapper">
				<div class="panel-selector-open"><i class="fa fa-cog fa-2x fa-spin"></i></div>
				<div class="panel-selector-body clearfix">
					<div class="panel-selector-body-inner">
						<section class="panel-selector-section panel-first-content clearfix">
							<div class="panel-selector-row clearfix">
								<a href="#" class="panel-purchase-btn">Buy Bears Now!</a>
							</div>
						</section>
						<section class="panel-selector-section panel-body-layout-content clearfix">
							<h3 class="panel-selector-title">Body Layout</h3>

							<div class="panel-selector-row clearfix">
								<a data-type="layout" data-value="wide" href="#" class="panel-selector-btn active">Wide</a>
								<a data-type="layout" data-value="boxed" href="#" class="panel-selector-btn">Boxed</a>
							</div>
						</section>
						<section class="panel-selector-section panel-boxed-mode-content clearfix">
							<h3 class="panel-selector-title">Boxed Mode Background</h3>

							<div class="panel-selector-row clearfix">
								<ul class="panel-primary-background">
									<li class="pattern-0" data-link="<?php echo esc_url(plugins_url('assets/patterns/tree_bark.png', __FILE__)); ?>" data-type="pattern" style="<?php echo 'background: url('.esc_url(plugins_url('assets/patterns/tree_bark.png', __FILE__)).')'; ?>"></li>
									<li class="pattern-2" data-link="<?php echo esc_url(plugins_url('assets/patterns/triangular.png', __FILE__)); ?>" data-type="pattern" style="<?php echo 'background: url('.esc_url(plugins_url('assets/patterns/triangular.png', __FILE__)).')'; ?>"></li>
									<li class="pattern-1" data-link="<?php echo esc_url(plugins_url('assets/patterns/pattern-1.png', __FILE__)); ?>" data-type="pattern" style="<?php echo 'background: url('.esc_url(plugins_url('assets/patterns/pattern-1.png', __FILE__)).')'; ?>"></li>
									<li class="pattern-3" data-link="<?php echo esc_url(plugins_url('assets/patterns/pattern-2.png', __FILE__)); ?>" data-type="pattern" style="<?php echo 'background: url('.esc_url(plugins_url('assets/patterns/pattern-2.png', __FILE__)).')'; ?>"></li>
									<li class="pattern-4" data-link="<?php echo esc_url(plugins_url('assets/patterns/wild_flowers.png', __FILE__)); ?>" data-type="pattern" style="<?php echo 'background: url('.esc_url(plugins_url('assets/patterns/wild_flowers.png', __FILE__)).')'; ?>"></li>
									<li class="pattern-5" data-link="<?php echo esc_url(plugins_url('assets/patterns/triangular_@2X.png', __FILE__)); ?>" data-type="pattern" style="<?php echo 'background: url('.esc_url(plugins_url('assets/patterns/triangular_@2X.png', __FILE__)).')'; ?>"></li>
								</ul>
								<div class="panel-boxed-message">Please select boxed mode to display backgrounds.</div>
							</div>
						</section>
						<section class="panel-selector-section clearfix">
							<h3 class="panel-selector-title">Created With Bears</h3>
							<span class="panel-selector-desc">Bears is a high performance WP theme with a modern creative design to easily building websites. All demos can be installed with one click.</span>
							<div class="panel-selector-row clearfix panel-select-homepage">
								<?php
								$homepages = array(
									array(
										'link' => 'http://theme.bearsthemes.com/wordpress/bears-company/',
										'img' => 'http://bearsthemes.com/landingpages/wp-content/uploads/2018/06/Business-Finance-Demo.jpg',
										'title' => 'Business & Finance'
									),
									array(
										'link' => 'http://theme.bearsthemes.com/wordpress/bears-lawfirm/',
										'img' => 'http://bearsthemes.com/landingpages/wp-content/uploads/2018/06/Law-Firm-Demo.jpg',
										'title' => 'Law Firm'
									),
									array(
										'link' => 'http://theme.bearsthemes.com/wordpress/bears-construction/',
										'img' => 'http://bearsthemes.com/landingpages/wp-content/uploads/2018/06/Construction-Demo.jpg',
										'title' => 'Construction'
									),
									array(
										'link' => 'http://theme.bearsthemes.com/wordpress/bears-dentist/',
										'img' => 'http://bearsthemes.com/landingpages/wp-content/uploads/2018/06/Dentist-Demo.jpg',
										'title' => 'Dentist'
									),
									array(
										'link' => 'http://theme.bearsthemes.com/wordpress/bears-legal/',
										'img' => 'http://bearsthemes.com/landingpages/wp-content/uploads/2018/06/Legal-Demo.jpg',
										'title' => 'Legal'
									),
									array(
										'link' => 'http://theme.bearsthemes.com/wordpress/bears-marketing/',
										'img' => 'http://bearsthemes.com/landingpages/wp-content/uploads/2018/06/Pr-Marketing-Demo.jpg',
										'title' => 'Pr & Marketing'
									),
									array(
										'link' => 'http://theme.bearsthemes.com/wordpress/bears-consultancy/',
										'img' => 'http://bearsthemes.com/landingpages/wp-content/uploads/2018/06/Consultancy-Demo.jpg',
										'title' => 'Consultancy'
									),
									array(
										'link' => 'http://theme.bearsthemes.com/wordpress/bears-creative/',
										'img' => 'http://bearsthemes.com/landingpages/wp-content/uploads/2018/06/Creative-agency-Demo.jpg',
										'title' => 'Creative Agency'
									),
									array(
										'link' => 'http://theme.bearsthemes.com/wordpress/bears-digital/',
										'img' => 'http://bearsthemes.com/landingpages/wp-content/uploads/2018/06/Digital-Demo.jpg',
										'title' => 'Digital'
									),
									array(
										'link' => 'http://theme.bearsthemes.com/wordpress/bears-advisor/',
										'img' => 'http://bearsthemes.com/landingpages/wp-content/uploads/2018/06/Advisor-Agency-Demo.jpg',
										'title' => 'Advisor Agency'
									),
									array(
										'link' => 'http://theme.bearsthemes.com/wordpress/bears-insurance/',
										'img' => 'http://bearsthemes.com/landingpages/wp-content/uploads/2018/06/Insurance-Demo.jpg',
										'title' => 'Insurance'
									),
									array(
										'link' => 'http://theme.bearsthemes.com/wordpress/bears-serviceit/',
										'img' => 'http://bearsthemes.com/landingpages/wp-content/uploads/2018/06/IT-Services-Demo.jpg',
										'title' => 'IT Services'
									),
									/* array(
										'link' => 'http://theme.bearsthemes.com/wordpress/bears-arabic/',
										'img' => 'http://bearsthemes.com/landingpages/wp-content/uploads/2018/06/Arabic-Demo.jpg',
										'title' => 'Arabic'
									), */
								);
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
