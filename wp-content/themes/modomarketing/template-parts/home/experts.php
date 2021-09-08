<?php $raquel_info = get_userdata(2);
$raquel_first_name = $raquel_info->first_name;
$raquel_last_name = $raquel_info->last_name;
?>
<section class="mm-background-conoce pb-lg-5 mb-lg-5">
    <div class="container-md">
        <section class="row">
            <div class="col mx-3">
                <h3 class="mm-header-3 text-md-center mt-md-5">
                    Conoce a los expertos.
                </h3>
                <p class="mm-text-1 text-md-center mb-md-5">
                    ¿Quienes son los hosts de Modo Marketing?
                </p>

                <div class="card shadow border-0 mt-5">
                    <div class="card-body pb-0 row">
                        <div class="col col-12 col-md-8 p-md-4">
                            <h4 class="mm-header-4">
                                <?php echo $raquel_first_name ?> <br class="d-none d-md-block" /><?php echo $raquel_last_name ?>
                            </h4>
                            <p class="mm-text-2">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Voluptatum voluptatem at voluptatibus quos tempore eaque
                                illum saepe. Explicabo sequi quod quae tempora ut fugit
                                sapiente, commodi, nemo quisquam quasi debitis!
                            </p>
                        </div>
                        <div class="row col col-12 col-md-4">
                            <div class="col col-6 col-md-4 col-lg-4">
                                <img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/linkedin-logo.png' ?>" srcset="
                                <?php echo esc_url(get_template_directory_uri()) . '/assets/images/linkedin-logo.png' ?>    1x,
                                <?php echo esc_url(get_template_directory_uri()) . '/assets/images/linkedin-logo@2x.png' ?> 2x
                        " alt="linkedin logo" class="img-fluid" />
                            </div>
                            <div class="col col-6 col-md-8 col-lg-8 position-relative">
                                <picture>
                                    <source media="(max-width: 767px)" srcset="
                                    <?php echo esc_url(get_template_directory_uri()) . '/assets/images/raquel-oberlander-mobile.png' ?>    1x,
                                    <?php echo esc_url(get_template_directory_uri()) . '/assets/images/raquel-oberlander-mobile@2x.png' ?> 2x
                          " />
                                    <source media="(min-width: 768px)" srcset="
                                    <?php echo esc_url(get_template_directory_uri()) . '/assets/images/raquel-oberlander.png' ?>    1x,
                                    <?php echo esc_url(get_template_directory_uri()) . '/assets/images/raquel-oberlander@2x.png' ?> 2x
                          " />
                                    <img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/raquel-oberlander.png' ?> " alt="raquel oberlander" class="mm-image-raquel" />
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card shadow border-0 mt-5">
                    <div class="card-body pb-0 row">
                        <div class="col col-12 col-md-8 p-md-4">
                            <h4 class="mm-header-4">
                                Diego <br class="d-none d-md-block" />Levinsky
                            </h4>
                            <p class="mm-text-2">
                                Creo estrategias de Marketing para start-ups tecnológicas.
                                Mi trabajo consiste en alinear los trabajos de
                                construcción de marca, implementación técnica y desarrollo
                                de producto. De esa forma, es posible construir
                                estrategias que aporten valor y sean rentables.
                            </p>
                        </div>
                        <div class="row col col-12 col-md-4">
                            <div class="col col-6 col-md-4 col-lg-4">
                                <img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/linkedin-logo.png' ?>" srcset="
                                <?php echo esc_url(get_template_directory_uri()) . '/assets/images/linkedin-logo.png' ?>    1x,
                                <?php echo esc_url(get_template_directory_uri()) . '/assets/images/linkedin-logo@2x.png' ?> 2x
                        " alt="linkedin logo" class="img-fluid" />
                            </div>
                            <div class="col col-6 col-md-8 col-lg-8 position-relative">
                                <picture>
                                    <source media="(max-width: 767px)" srcset="
                                    <?php echo esc_url(get_template_directory_uri()) . '/assets/images/diego-levinsky-mobile.png' ?>    1x,
                                    <?php echo esc_url(get_template_directory_uri()) . '/assets/images/diego-levinsky-mobile@2x.png' ?> 2x
                          " />
                                    <source media="(min-width: 768px)" srcset="
                                    <?php echo esc_url(get_template_directory_uri()) . '/assets/images/diego-levinsky.png' ?>    1x,
                                    <?php echo esc_url(get_template_directory_uri()) . '/assets/images/diego-levinsky@2x.png' ?> 2x
                          " />
                                    <img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/diego-levinsky.png' ?>" alt="raquel oberlander" class="mm-image-diego" />
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>