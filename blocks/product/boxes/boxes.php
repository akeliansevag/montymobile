<?php
$backgroundColor = get_field("block_background_color");
$items = get_field("block_product_boxes_items");
?>

<?php if ($items) : ?>
    <section class="py-4" style="<?= $backgroundColor ? "background-color:" . $backgroundColor . ";" : "" ?>">
        <div class="container">
            <div class="boxes-items">
                <div class="row">
                    <?php foreach ($items as $key => $item) : ?>
                        <div class="col-md-4">
                            <div class="box-item py-3">
                                <h3>
                                    <?= $item['title'] ?>
                                </h3>
                                <?= $item['description'] ?>
                            </div>
                        </div>

                    <?php endforeach; ?>
                </div>

            </div>
        </div>

    </section>
<?php endif; ?>