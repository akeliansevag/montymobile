<?php 
    $points = get_field("product_info_points");
    $big_title = get_field("product_info_big_text");
    $description = get_field("product_info_description");
?>

<?php if($big_title):?>
    <section class="product-info py-5 bg-white">
        <div class="container"> 
            <div class="product-info-top my-2 my-md-5">
                <div class="row align-items-center pb-3">
                    <?php if($big_title):?>
                        <div class="col-md-6">
                            <h2 class="display-6">
                                <?= $big_title;?>
                            </h2>
                        </div>
                    <?php endif;?>
                    
                    <div class="col-md-1"></div>
                    <?php if($description):?>
                        <div class="col-md-5">
                            <p>
                                <?=$description;?>
                            </p>
                        </div>
                    <?php endif;?>
                    
                </div>
                <?php if($points):?>
                    <div class="row mt-5">
                        <?php foreach($points as $key=>$point):?>
                            <div class="col-md-4">
                                <div class="product-info-point mb-5">
                                    <div class="point-separator">
                                        <div class="point-circle"></div>
                                        <div class="point-line"></div>
                                    </div>
                                    <h2><?=$point['title'];?></h4>
                                    <h5><?=$point['description'];?></h5>
                                </div>
                            </div>
                        <?php endforeach;?>
                    </div>
                <?php endif;?>
                
            </div>
        </div>
        
    </section>
<?php endif;?>

