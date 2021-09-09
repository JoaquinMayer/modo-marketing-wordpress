<div class="container-fluid container-md">
    <section class="row mt-5">
        <div class="col col-12">
            <h3 class="mm-header-3">Los contenidos que buscabas.</h3>
            <p class="mm-text-1 mb-md-5">
                Descarga los contenidos que quieras ¡Son gratis!
            </p>

            <?php
            $loop = new WP_Query(array('post_type' => 'materiales', 'post_status' => 'publish', 'posts_per_page' => 3));
            if ($loop->have_posts()) :
                while ($loop->have_posts()) : $loop->the_post(); ?>
                    <div class="bg-light shadow border-0 col col-12 mt-4 mt-md-5 p-3">
                        <div class="row position-relative">
                            <div class="col-12 col-md-4 col-lg-3">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="cover ebook" class="mx-auto d-block mm-image-ebook" />
                            </div>
                            <div class="col col-12 col-md-8 col-lg-9">
                                <div class="w-100 d-block m-auto text-center text-md-start">
                                    <?php
                                    $categories = get_the_category();
                                    if (!empty($categories)) {
                                        echo '<p class="
                                        m-auto
                                        badge
                                        rounded-pill
                                        bg-danger
                                        fw-light
                                        text-uppercase
                                        my-2
                                        mm-badge-ebook
                                      ">' . esc_html($categories[0]->name) . '</p>';
                                    }
                                    ?>
                                </div>
                                <h4 class="mm-header-ebook">
                                    <?php echo get_the_title(); ?>
                                </h4>
                                <p class="mm-text-ebook">Por <?php the_author(); ?></p>
                                <?php echo do_shortcode('[contact-form-7 id="13" title="Materiales" html_class="d-lg-flex"]'); ?>
                                <form class="d-lg-flex">
                                    <input type="email" name="name" class="form-control bg-light mm-form-content mb-3 mb-lg-0" placeholder="Escribe aquí tu email" />
                                    <button type="submit" class="
                        mm-btn-submit-ebook
                        btn btn-dark
                        px-5
                        m-auto
                        d-block
                        text-uppercase
                        border-0
                      ">
                                        ¡Lo quiero!
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
            <?php endwhile;
            endif;
            wp_reset_postdata();
            ?>

            <a href="/materiales" class="
                btn
                col-12 col-lg-4 col-md-6
                d-block
                m-auto
                mm-btn-see-more
                mx-3 mx-auto
                my-5
                text-uppercase
              ">Ver más materiales</a>
        </div>
    </section>
</div>