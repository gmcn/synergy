<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starting_Theme
 */

?>

	</div><!-- #content -->

	<footer class="site-footer" role="contentinfo">

		<svg class="pattern" x="0" y="0" width="100%" height="100%">
		  <defs>
		     <pattern id="diagonalHatch" patternUnits="userSpaceOnUse" width="4" height="8" patternTransform="rotate(-45 2 2)">
		          <path d="M -1,2 l 6,0" stroke="#000000" stroke-width=".25"/>
		    </pattern>
		  </defs>
		  <rect x="1" y="1" width="100%" height="100%" stroke= "#ffffff" stroke-width="2" fill="url(#diagonalHatch)" />
		</svg>


		<div class="row">

			<div class="col-md-6 col-xl-5 footer_branding">
				<!-- <div class="row"> -->
					<div class="footer_branding__logo">
						<img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="Synergy Creativ">
					</div>
					<div class="footer_branding__copy">

						The Synergy range has been configured to aid compliance with all major UK and EU office lighting guidelines, giving you total peace of mind when specifying light fittings. You and your clients come first, Synergy will delight you and your clients by realising your vision, enhancing your brand and providing a competitive advantage.

					</div>
				<!-- </div> -->
			</div>

			<div class="col-md-6 col-xl-2">
				<?php
					wp_nav_menu( array(
						'theme_location'  => 'menu-footer',
						'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
						'container'       => 'div',
						// 'container_class' => 'footnav',
						// 'container_id'    => 'navbarCollapse',
						'menu_class'      => 'footer_menu',
						// 'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
						// 'walker'          => new WP_Bootstrap_Navwalker(),
						) );
					?>
			</div>

			<div class="col-12 col-xl-5 footer_contact">
				<div class="row">
					<div class="col-md-4">
						<h5>Call Us</h5>
						<p>Tel: <a href="tel:01992 445828" target="_blank">01992 445828</a></p>

						<img src="<?php echo get_template_directory_uri(); ?>/images/iso_9001.png" alt="ISO 9001">
						<img src="<?php echo get_template_directory_uri(); ?>/images/iso_14001.png" alt="ISO 14001">
					</div>
					<div class="col-md-4">
						<h5>Lets Talk</h5>
						<address class="">
							Unit 4, Charlton Mead Lane, <br>
							Hoddesdon, <br>
							Hertfordshire EN11 0DJ
						</address>
						<a rel="noreferrer" href="https://goo.gl/maps/BjNkmCPcbpfmDF9g8" target="_blank">View on map</a>
					</div>
					<div class="col-md-4">
						<h5>Showroom</h5>
						<address class="">
							121-131 Rosebery Ave<br>
							London EC1R 4RF
						</address>
						<a rel="noreferrer" href="https://g.page/design-hub-clerkenwell?share" target="_blank">View on map</a>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-6 footer_contact_byline">
						© SYNERGY CREATIV <?php echo date('Y'); ?>
					</div>
					<div class="col-md-6 footer_contact_social">

						<a href="https://www.linkedin.com/company/synergy-commercial-lighting/" target="_blank">
							<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17">
							  <path id="logo-linkedin" d="M47.64,32H33.453A1.387,1.387,0,0,0,32,33.324V47.543A1.5,1.5,0,0,0,33.453,49H47.636A1.42,1.42,0,0,0,49,47.543V33.324A1.3,1.3,0,0,0,47.64,32ZM37.27,46.17H34.834V38.6H37.27Zm-1.133-8.724h-.017a1.324,1.324,0,1,1,.017,0ZM46.17,46.17H43.735V42.03c0-.992-.354-1.67-1.236-1.67a1.332,1.332,0,0,0-1.249.9,1.64,1.64,0,0,0-.084.6V46.17H38.731V38.6h2.435v1.054a2.466,2.466,0,0,1,2.2-1.231c1.6,0,2.808,1.054,2.808,3.326Z" transform="translate(-32 -32)"></path>
							</svg>
						</a>

							<a href="https://twitter.com/Synergy_Lights" target="_blank">
								<svg xmlns="http://www.w3.org/2000/svg" width="18" height="14.875" viewBox="0 0 18 14.875">
								  <path id="Path_73" data-name="Path 73" d="M16-11.875l1.125-1.375A1.08,1.08,0,0,0,17.5-14a3.943,3.943,0,0,1-2.125.625h-.25L15-13.5a4.062,4.062,0,0,0-2.562-.875,3.63,3.63,0,0,0-2.562,1.063A3.4,3.4,0,0,0,8.75-10.75l.125,1H8.25A9.256,9.256,0,0,1,3.5-11.5,20.959,20.959,0,0,1,1-13.625a3.444,3.444,0,0,0-.375,2,5.386,5.386,0,0,0,.5,1.75l1,1.625-1.5-.875A3.338,3.338,0,0,0,2-6.25l.75.625L2-5.375A3.41,3.41,0,0,0,4.375-3L5.5-2.75l-1,.625a5.644,5.644,0,0,1-2.5,1,8.031,8.031,0,0,1-2,0A9.143,9.143,0,0,0,5.5.5,9.109,9.109,0,0,0,7,.375L7.75.25A10.909,10.909,0,0,0,13.5-3a11.742,11.742,0,0,0,2.375-4.375,13.41,13.41,0,0,0,.375-3v-.25l.125-.125q1-1,1.625-1.75Z" transform="translate(0 14.375)" fill="#00509f"></path>
								</svg>
							</a>

							<a href="https://www.pinterest.co.uk/synergy0149/" target="_blank">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 511.998 511.998" style="enable-background:new 0 0 511.998 511.998;" xml:space="preserve"><path d="M405.017,52.467C369.774,18.634,321.001,0,267.684,0C186.24,0,136.148,33.385,108.468,61.39 c-34.114,34.513-53.675,80.34-53.675,125.732c0,56.993,23.839,100.737,63.76,117.011c2.68,1.098,5.377,1.651,8.021,1.651 c8.422,0,15.095-5.511,17.407-14.35c1.348-5.071,4.47-17.582,5.828-23.013c2.906-10.725,0.558-15.884-5.78-23.353 c-11.546-13.662-16.923-29.817-16.923-50.842c0-62.451,46.502-128.823,132.689-128.823c68.386,0,110.866,38.868,110.866,101.434 c0,39.482-8.504,76.046-23.951,102.961c-10.734,18.702-29.609,40.995-58.585,40.995c-12.53,0-23.786-5.147-30.888-14.121 c-6.709-8.483-8.921-19.441-6.222-30.862c3.048-12.904,7.205-26.364,11.228-39.376c7.337-23.766,14.273-46.213,14.273-64.122 c0-30.632-18.832-51.215-46.857-51.215c-35.616,0-63.519,36.174-63.519,82.354c0,22.648,6.019,39.588,8.744,46.092 c-4.487,19.01-31.153,132.03-36.211,153.342c-2.925,12.441-20.543,110.705,8.618,118.54c32.764,8.803,62.051-86.899,65.032-97.713 c2.416-8.795,10.869-42.052,16.049-62.495c15.817,15.235,41.284,25.535,66.064,25.535c46.715,0,88.727-21.022,118.298-59.189 c28.679-37.02,44.474-88.618,44.474-145.282C457.206,127.983,438.182,84.311,405.017,52.467z"/><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
							</a>

							<a href="https://www.instagram.com/synergy_lights/" target="_blank">
									<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17">
									  <g id="logo-instagram" transform="translate(-32 -32)">
									    <path id="Path_47" data-name="Path 47" d="M44.042,33.417a3.553,3.553,0,0,1,3.542,3.542v7.083a3.553,3.553,0,0,1-3.542,3.542H36.958a3.553,3.553,0,0,1-3.542-3.542V36.958a3.553,3.553,0,0,1,3.542-3.542h7.083m0-1.417H36.958A4.973,4.973,0,0,0,32,36.958v7.083A4.973,4.973,0,0,0,36.958,49h7.083A4.973,4.973,0,0,0,49,44.042V36.958A4.973,4.973,0,0,0,44.042,32Z"></path>
									    <path id="Path_48" data-name="Path 48" d="M152.84,108.792a1.059,1.059,0,1,1,.751-.31A1.061,1.061,0,0,1,152.84,108.792Zm-4.6.707a2.829,2.829,0,1,1-2.829,2.829,2.829,2.829,0,0,1,2.829-2.829m0-1.414a4.243,4.243,0,1,0,4.243,4.243A4.243,4.243,0,0,0,148.243,108.084Z" transform="translate(-107.741 -71.83)"></path>
									  </g>
									</svg>
							</a>


					</div>
				</div>

			</div>


		</div><!-- .row -->
	</footer><!-- .site-footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
