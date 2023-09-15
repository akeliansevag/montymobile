<?php

$backgroundColor = get_field("blocks_background_color");
$post_id = get_the_ID();
$terms = wp_get_post_terms($post_id, 'product-category');
$products = [];
if (!empty($terms) && !is_wp_error($terms)) {
    $parent_term = $terms[0];
    $args = [
        'post_type' => 'product',
        'tax_query' => [
            [
                'taxonomy' => 'product-category',
                'field' => 'slug',
                'terms' => $parent_term->slug
            ]
        ],
        'posts_per_page' => -1
    ];
    $products = get_posts($args);
}
$blockID = $block['id'];
?>

<?php if ($terms) : ?>
    <section data-block-id="<?= $blockID ?>" class="product-categories-container bg-gray py-5 w-100" style="<?= $backgroundColor ? "background-color:" . $backgroundColor . ";" : "" ?>">
        <div class="container">
            <div class="cat-container position-relative">
                <div class="product-categories my-2 swiper" id="product-categories-swiper-<?= $blockID ?>" data-current-product-id="<?= $post_id ?>">
                    <div class="swiper-wrapper">
                        <?php foreach ($products as $key => $p) : ?>
                            <div class="swiper-slide">
                                <div class="product-cat-slide" data-key="<?= $key ?>" id="product-<?= $p->ID ?>">
                                    <div class="product-category px-2">
                                        <a class="<?= $post_id == $p->ID ? "active-cat" : "" ?>" href="<?= get_permalink($p->ID); ?>"><?= $p->post_title ?></a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    
                </div>
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>

        </div>
    </section>
<?php endif; ?>