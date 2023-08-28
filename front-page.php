<?php get_header(); ?>
<?php
$slider = get_field("homepage_slider_items");
?>
<?php
$astroImage = get_field("floating_astronaut_image", 7);

?>

<section class="slider-section position-relative">
    <div id="h-slider" class="h-slider">
        <?php if ($slider) : ?>
            <?php foreach ($slider as $key => $slide) : ?>
                <div class="h-slider-item slide-<?= $key ?>">
                    <div class="h-slider-background">
                        <?php if ($slide['video']) : ?>
                            <video autoplay muted loop poster="<?= $slide['image'] ? $slide['image']['sizes']['background'] : ""; ?>">
                                <source src="<?= $slide['video']['url']; ?>" type="video/mp4">
                            </video>
                        <?php else : ?>
                            <?php if ($slide['image']) : ?>
                                <img src="<?= $slide['image']['sizes']['background']; ?>" alt="">
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>

                    <div class="h-slider-content">
                        <div class="h-slider-inner text-center">
                            <?php if ($slide['text']) : ?>
                                <h1 class="display-3"><?= $slide['text']; ?></h1>
                            <?php endif; ?>
                            <?php if ($slide['link']) : ?>
                                <a target="<?= $slide['link']['target']; ?>" href="<?= $slide['link']['url'] ?>" class="mm-button-2 my-3"><?= $slide['link']['title']; ?></a>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <div class="field">
        <div class="mouse"></div>
    </div>
</section>

<div class="position-relative motion-path-container">
    <div id="path-container" style="margin-top:300px;position:absolute;height:100%;width:100%;top:0;z-index:-1;">
        <img style="position:absolute;top:0;left" id="floating-astro" src="<?= $astroImage['sizes']['mid-thumb'] ?>" alt="">
    </div>
    <?php if (get_field("homepage_about_us")) : ?>
        <section class="h-about-us text-center">
            <div class="container">
                <div class="spacer-75"></div>
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <?= get_field("homepage_about_us"); ?>
                        <?php $habout = get_field("homepage_about_us_items"); ?>
                        <?php if ($habout) : ?>
                            <div class="h-about-items mt-4">
                                <div class="row">
                                    <?php foreach ($habout as $key => $ha) : ?>
                                        <div class="col-lg-4 px-3">
                                            <div class="h-about-item">
                                                <h5><?= $ha['title'] ?></h5>
                                                <div class="text-container">
                                                    <div class="text-content">
                                                        <?= $ha['description']; ?>
                                                    </div>

                                                </div>
                                                <?php if ($key == 0) : ?>
                                                    <a href="#" id="read-more-btn" class="white-text">read more</a>
                                                <?php endif; ?>

                                            </div>
                                        </div>

                                    <?php endforeach; ?>
                                </div>
                            </div>



                        <?php endif; ?>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>

        </section>
    <?php endif; ?>

    <?php
    $planet_image = get_field("homepage_planet_image");
    ?>
    <?php if ($planet_image) : ?>
        <section class="home-background">
            <img src="<?= $planet_image['sizes']['lg-thumb'] ?>" class="parallax-image" alt="">
        </section>
    <?php endif; ?>

    <?php
    $events = new WP_Query([
        'post_type' => 'event',
        'posts_per_page' => 15
    ]);
    $events = $events->posts;
    ?>
    <?php if ($events) : ?>
        <?php $events_title = get_field("homepage_events_title"); ?>
        <section class="h-events">
            <div class="container">
                <h2 class="section-title display-4"><?= $events_title; ?></h2>
            </div>
            <div id="events-slider" class="events-slider">
                <?php foreach ($events as $key => $event) : ?>
                    <div class="event-slide">
                        <a class="event-item" href="#">
                            <h4><?= $event->post_title; ?></h4>
                            <p><?= $event->post_excerpt; ?></p>
                        </a>
                    </div>

                <?php endforeach; ?>
            </div>

            <div class="spacer-75"></div>
        </section>
    <?php endif; ?>

    <?php
    $products = get_field("homepage_products");
    ?>
    <?php if ($products) : ?>
        <section class="h-products">
            <div class="container">
                <h2 class="section-title display-4"><?= get_field("homepage_products_title") ?></h2>
            </div>
            <div class="products-slider" id="products-slider">
                <?php foreach ($products as $key => $product) : ?>
                    <div class="product-slide">
                        <div class="h-product">
                            <div class="h-product-info d-block d-xl-flex align-items-center">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="">
                                                <div class="h-blog-meta mb-2 d-flex align-items-center">
                                                    <span class="h-blog-category display-6 product-name"><?= $product->post_title; ?></span>
                                                    <span class="h-blog-shape"></span>
                                                    <span class="h-blog-dot"></span>
                                                </div>
                                                <?php $fname = get_field("full_name", $product->ID); ?>
                                                <h3 class="product-full-name"><?= $fname; ?></h3>
                                                <div class="product-description mb-4 mb-xl-0">
                                                    <?= get_field('small_description', $product->ID); ?>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-6 d-flex align-items-center justify-content-center">
                                            <?php $infographic = get_field("homepage_infographic", $product->ID); ?>
                                            <?php if ($infographic) : ?>
                                                <div class="h-product-image">
                                                    <img src="<?= $infographic['sizes']['lg-thumb']; ?>" alt="">
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-12 text-center my-5">
                                                <div id="slider-buttons">
                                                    <div>
                                                        <a href="<?= get_permalink(($product->ID)) ?>" class="mm-button-2">Get started</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>


                <?php endforeach; ?>


            </div>

            <div class="spacer-75"></div>
        </section>
    <?php endif; ?>
    <?php
    $posts = new WP_Query([
        'posts_per_page' => 4
    ]);
    $posts = $posts->posts;
    ?>
    <?php if ($posts) : ?>
        <section class="h-blogs">

            <div class="container">
                <h2 class="section-title display-4"><?= get_field("homepage_blogs_title"); ?></h2>
                <div class="blogs">
                    <?php foreach ($posts as $key => $post) : ?>
                        <?php
                        $category = get_the_category($post->ID);
                        $thumb = get_the_post_thumbnail($post->ID, 'lg-thumb');
                        ?>
                        <div class="mb-4 mb-md-0 h-blog row <?= ($key + 1) % 2 == 0 ? "flex-row-reverse" : "" ?>">
                            <div class="col-md-6 animated-element">
                                <div class="display-7 h-blog-meta mb-2 d-flex align-items-center <?= ($key + 1) % 2 == 0 ? "flex-row-reverse" : "" ?>">
                                    <span class="h-blog-category"><a href="#"><?= $category[0]->cat_name; ?></a></span>
                                    <span class="meta-separator"> | </span>
                                    <span class="h-blog-date"><?= date("d.m.Y", strtotime($post->post_date)) ?></span>
                                    <span class="h-blog-shape"></span>
                                    <span class="h-blog-dot"></span>
                                </div>
                                <div class="h-blog-thumb mb-3">
                                    <a href="#"><?= $thumb; ?></a>
                                </div>
                                <div class="h-blog-title">
                                    <a href="#">
                                        <p><?= $post->post_title; ?></p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 text-center">
                                <?php $fastro = get_field("floating_astronaut_image", 7); ?>
                                <?php if ($key == 0 && $fastro) : ?>
                                    <!--<img src="<?= $fastro['sizes']['mid-thumb'] ?>" class="floating-astro" alt="">-->
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="text-center">
                    <a href="#" class="mm-button-2 my-5">Read more</a>
                </div>

            </div>
        </section>
    <?php endif; ?>

    <div class="spacer-75"></div>
    <?php
    $awards = get_field('homepage_awards', 7);
    ?>
    <?php if ($awards) : ?>
        <section class="h-awards">
            <div class="container">
                <h2 class="section-title display-4"><?= get_field("homepage_awards_title", 7); ?></h2>

                <div class="awards-slider v-slider">
                    <?php foreach ($awards as $award) : ?>
                        <div class="v-slide">
                            <div class="v-wrapper">
                                <img src="<?= $award['image']['sizes']['logo'] ?>" alt="" class="v-slider-img">
                            </div>
                        </div>
                    <?php endforeach; ?>


                </div>

        </section>
    <?php endif; ?>

    <div class="spacer-75"></div>
    <?php $clients = get_field("homepage_clients", 7); ?>
    <?php if ($clients) : ?>
        <section class="h-clients">
            <div class="container">
                <h2 class="section-title display-4"><?= get_field("homepage_clients_title", 7); ?></h2>

                <div class="clients-slider v-slider">
                    <?php foreach ($clients as $client) : ?>
                        <div class="v-slide">
                            <div class="v-wrapper">
                                <img src="<?= $client['image']['sizes']['logo'] ?>" alt="" class="v-slider-img">
                            </div>
                        </div>

                    <?php endforeach; ?>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>
                </div>
                <div class="spacer-75"></div>
            </div>

        </section>
    <?php endif; ?>
</div><!--motion-path-container-close-->
<?php
$astronaut_video = get_field("astronaut_video", 7);
$astronaut_poster = get_field("astronaut_video_poster", 7);
?>
<?php if ($astronaut_video) : ?>
    <section class="h-video-section">
        <video id="h-video" autoplay muted loop poster="<?= $astronaut_poster['sizes']['background']; ?>">
            <source src="<?= $astronaut_video['url'] ?>" type="video/mp4">
            </source>
        </video>
    </section>
<?php endif; ?>

<?php get_footer(); ?>