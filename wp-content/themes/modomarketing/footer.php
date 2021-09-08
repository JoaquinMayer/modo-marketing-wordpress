<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Modo_Marketing
 * @since Modo Marketing 1.0
 */

?>
</main><!-- #main -->
</div><!-- #primary -->
</div><!-- #content -->

<footer class="container-fluid mm-footer p-4">
	<div class="container-lg">
		<div class="row">
			<div class="col">
				<div class="card mm-card-podcast">
					<div class="card-header d-flex justify-content-between bg-white">
						<p class="m-0">PODCAST // ÚLTIMO EPISODIO</p>
						<a href="" class="mm-link-podcast">Ver todos los episodios</a>
					</div>
					<div class="card-body d-flex justify-content-between">
						<div class="">
							<img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/cover-podcast.jpg' ?>" alt="" srcset="" />
						</div>
						<div class="ms-2">
							<h3 class="card-text mm-title-podcast">
								El marketing ya no es lo que era ⎢ MODO MARKETING Ep. 1
							</h3>
							<a href="#" class="
                      btn
                      rounded-pill
                      d-inline-flex
                      align-items-center
                      justify-content-start
                      pe-3
                      bg-green
                    "><img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/spotify-icon.png' ?>" alt="" class="me-2" />
								Escuchar Ahora</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col">
				<h5 class="mm-footer-title">MODO MARKETING</h5>
				<p class="mm-footer-text">
					Buscamos inspirar a nuestra audiencia con ideas e insigths
					revolucionarios para que puedan aplicarlos en sus negocios o
					emprendimientos.
				</p>
			</div>
		</div>
	</div>
</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>