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

<div class="mm-mobile-menu position-fixed" id="mm-mobile-menu" style="display: none">
	<div class="mm-options-menu">
		<ul class="list-unstyled">
			<li class="mm-item-menu">
				<img id="mm-close-menu" src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/icon-close.png' ?>" srcset="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/icon-close.png' ?> 1x, <?php echo esc_url(get_template_directory_uri()) . '/assets/images/icon-close@2x.png' ?> 2x" alt="icono de cerrar" />
			</li>
			<li class="mm-item-menu">
				<a class="mm-item-menu-link" href="<?php echo esc_url(home_url('/')); ?>">Inicio</a>
			</li>
			<li class="mm-item-menu">
				<a class="mm-item-menu-link" href="/episodios.html">Episodios</a>
			</li>
			<li class="mm-item-menu">
				<a class="mm-item-menu-link" href="/materiales.html">Materiales</a>
			</li>
			<li class="mm-item-menu">
				<a class="mm-item-menu-link" href="/articulos.html">Artículos</a>
			</li>
			<li>
				<div class="
                mm-card-player
                d-flex
                align-items-center
                justify-content-between
                mt-3
              ">
					<p class="mb-0 pe-4 mm-font-display-bold">
						Escuchar <br />
						Podcast ahora
					</p>
					<img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/icon-play.png' ?>" class="mm-icon-play" srcset="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/icon-play.png' ?> 1x, <?php echo esc_url(get_template_directory_uri()) . '/assets/images/icon-play@2x.png' ?> 2x" alt="icono de play" />
				</div>
			</li>
		</ul>
	</div>
</div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>