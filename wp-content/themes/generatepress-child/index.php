<?php get_header(); ?>
<!-- banner start -->
<?php
$banner_title = get_field('title', 'option');
$banner_description = get_field('description', 'option');
$banner_image = get_field('image', 'option');
?>
<section class="p-0 full-screen h-700px md-h-800px -bg-dark-gray sm-h-1200px top-space-margin -ipad-top-space-margin cover-background"
    data-parallax-background-ratio="0.8"
    <?php if ($banner_image) : ?>
    style="background-image: url('<?php echo esc_url($banner_image['url']); ?>');"
    <?php endif; ?>>
    <div class="opacity-medium bg-blue"></div>

    <div class="container h-100 position-relative z-index-2">
        <div class="row align-items-center justify-content-between h-100 xl-ps-10 sm-ps-0">
            <div class="col-xxl-6 col-xl-6 text-white" data-anime='{ "el": "childs", "translateY": [-15, 0], "perspective": [1200,1200], "scale": [1.1, 1], "rotateX": [50, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <?php if ($banner_title) : ?>
                    <h1 class="fw-600 text-white">
                        <?php echo esc_html($banner_title); ?>
                    </h1>
                <?php endif; ?>
                <?php if ($banner_description) : ?>
                    <div class="fs-20 opacity-6 mb-40px sm-mb-30px">
                        <?php echo wp_kses_post($banner_description); ?>
                    </div>
                <?php endif; ?>
                <div class="lg-mb-8 md-mb-0">
                    <a href="#"
                        class="btn btn-lite-greenish -bg-blue-green -text-white btn-extra-large btn-round-edge border-radius-40px fw-700 btn-box-shadow me-35px">Get
                        Started</a>

                </div>
            </div>
            <div class="col-xl-4 -outside-box-top-205px lg-mt-0 position-relative z-index-1" data-anime='{ "el": "childs", "translateY": [-15, 0], "perspective": [1200,1200], "scale": [1.1, 1], "rotateX": [50, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="border-radius-10px overflow-hidden">
                    <div class="bg-white p-20px xs-p-30px position-relative">
                        <h3 class="d-inline-block fw-600 text-bluish-gray mb-0 ls-minus-1px fs-24 mb-2">Apply
                            for Tax Rebate Now</h3>
                        <form action="email-templates/contact-form.php" method="post">
                            <label class="text-dark-gray mb-10px fw-500 fs-16">Name<span
                                    class="text-red">*</span></label>
                            <input class="mb-10px bg-very-light-gray border-radius-20px form-control required"
                                type="text" name="name" placeholder="Enter your name" />
                            <label class="text-dark-gray mb-10px fw-500 fs-16">Email ID<span
                                    class="text-red">*</span></label>
                            <input class="mb-10px bg-very-light-gray border-radius-20px form-control required"
                                type="email" name="email" placeholder="Enter your email" />
                            <label class="text-dark-gray mb-10px fw-500 fs-16">PPS Number<span
                                    class="text-red">*</span></label>
                            <input class="mb-10px bg-very-light-gray border-radius-20px form-control required"
                                type="text" name="pps_number" placeholder="Enter your PPS number" />
                            <div class="position-relative terms-condition-box text-start d-inline-block mb-20px">
                                <label>
                                    <input type="checkbox" name="terms_condition" id="terms_condition" value="1"
                                        class="terms-condition check-box align-middle required">
                                    <span class="box fs-14 mb-0 lh-20">I have read & agree to the authorization and the <a href="#" class="text-base-color -text-decoration-line-bottom-medium">terms & conditions</a></span>
                                </label>
                            </div>
                            <input type="hidden" name="redirect" value="">
                            <!-- <button
                                                class="btn btn-large btn-round-edge text-white border-radius-20px -btn-dark-gray bg-blue btn-box-shadow submit w-100 mb-20px"
                                                type="submit">Register now</button> -->
                            <a href="#"
                                class="btn btn-small -btn-extra-large btn-rounded with-rounded btn-dark-gray d-table d-lg-inline-block lg-mb-15px md-mx-auto py-2 pe-80px ps-80px fs-14">Apply<span
                                    class="bg-base-color text-white"><i
                                        class="fa-solid fa-arrow-right"></i></span></a>

                            <div class="form-results mt-20px d-none"></div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>


</section>
<!-- banner end -->
<!-- start feature section -->
<section class="big-section -border-top border-color-extra-medium-gray bg-lite-bluish">
    <div class="container">
        <div class="row row-cols-1 row-cols-xl-3 row-cols-lg-2 row-cols-md-2 justify-content-center" data-anime='{ "el": "childs", "translateX": [-15, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <!-- start features box item -->
            <?php
            $feature_query = new WP_Query(array(
                'post_type'      => 'post',
                'posts_per_page' => -1,
                'category_name'  => 'features',
            ));

            if ($feature_query->have_posts()) :
                while ($feature_query->have_posts()) : $feature_query->the_post();
            ?>
                    <div class="col icon-with-text-style-08 lg-mb-50px sm-mb-40px px-4">
                        <div class="feature-box feature-box-left-icon-middle d-block">
                            <div
                                class="feature-box-icon hover-box dark-hover feature-box-icon-rounded w-100px h-100px rounded-circle bg-blue-green">
                                <i class="fa-solid fa-receipt icon-large text-white"></i>
                                <div class="feature-box-icon-hover bg-blue rounded-circle"></div>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin py-4">
                                <span class="d-inline-block fs-24 fw-600 text-bluish-gray mb-5px"><?php echo get_field('section_title_1'); ?></span>
                                <p class="fs-16 lh-22 fw-400"><?php echo get_field('section_description_1'); ?></p>
                            </div>
                        </div>
                    </div>

                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-08 lg-mb-50px sm-mb-40px px-4">
                        <div class="feature-box feature-box-left-icon-middle d-block">
                            <div
                                class="feature-box-icon hover-box dark-hover feature-box-icon-rounded w-100px h-100px rounded-circle bg-blue-green">
                                <i class="fa-solid fa-file-invoice-dollar icon-large text-white"></i>
                                <div class="feature-box-icon-hover bg-blue rounded-circle"></div>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin py-4">
                                <span class="d-inline-block fs-24 fw-600 text-bluish-gray mb-5px"><?php echo get_field('section_title_2'); ?></span>
                                <p class="fs-16 lh-22 fw-400"><?php echo get_field('section_description_2'); ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-08 lg-mb-50px sm-mb-40px px-4">
                        <div class="feature-box feature-box-left-icon-middle d-block">
                            <div
                                class="feature-box-icon hover-box dark-hover feature-box-icon-rounded w-100px h-100px rounded-circle bg-blue-green">
                                <i class="fa-solid fa-shield text-white icon-large"></i>
                                <div class="feature-box-icon-hover bg-blue rounded-circle"></div>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin py-4">
                                <span class="d-inline-block fs-24 fw-600 text-bluish-gray mb-5px"><?php echo get_field('section_title_3'); ?></span>
                                <p class="fs-16 lh-22 fw-400"><?php echo get_field('section_description_3'); ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- end features box item -->
            <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </div>
</section>
<!-- end feature section -->
<?php get_footer(); ?>