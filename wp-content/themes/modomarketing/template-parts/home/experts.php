<?php
$raquel_info = get_userdata(2);
$diego_info = get_userdata(3);
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
                                <?php echo $raquel_info->first_name ?> <br class="d-none d-md-block" /><?php echo $raquel_info->last_name ?>
                            </h4>
                            <p class="mm-text-2">
                                <?php echo $raquel_info->description ?>
                            </p>
                        </div>
                        <div class="row col col-12 col-md-4">
                            <div class="col col-6 col-md-4 col-lg-4">
                                <a href="<?php echo $raquel_info->user_url ?>" target="_blank" rel="noopener noreferrer">
                                    <img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/linkedin-logo.png' ?>" srcset="
                                <?php echo esc_url(get_template_directory_uri()) . '/assets/images/linkedin-logo.png' ?>    1x,
                                <?php echo esc_url(get_template_directory_uri()) . '/assets/images/linkedin-logo@2x.png' ?> 2x
                                " alt="linkedin logo" class="img-fluid" />
                                </a>
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
                                <?php echo $diego_info->first_name ?> <br class="d-none d-md-block" /><?php echo $diego_info->last_name ?>
                            </h4>
                            <p class="mm-text-2">
                                <?php echo $diego_info->description ?>
                            </p>
                        </div>
                        <div class="row col col-12 col-md-4">
                            <div class="col col-6 col-md-4 col-lg-4">
                                <a href="<?php echo $diego_info->user_url ?>" target="_blank" rel="noopener noreferrer">
                                    <img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/linkedin-logo.png' ?>" srcset="
                                <?php echo esc_url(get_template_directory_uri()) . '/assets/images/linkedin-logo.png' ?>    1x,
                                <?php echo esc_url(get_template_directory_uri()) . '/assets/images/linkedin-logo@2x.png' ?> 2x
                                " alt="linkedin logo" class="img-fluid" />
                                </a>
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