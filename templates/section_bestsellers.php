<div class="best-sellers">
    <h1>best sellers</h1>

    <div class="list clearfix">
        <?php foreach ($bestseller_list as $best): ?>
            <div class="product-tile col-sm-12 col-md-3">
                <?php foreach($best["images"] as $image): ?>
                    <div class="product-tile-image">
                        <img src="<?=rewrite_url($image["image"])?>">
                    </div>
                    <?php break ?>;
                <?php endforeach ?>
                <p><?=$best["name"]?>, $<?=$best["price"]?></p>
            </div>
        <?php endforeach ?>
    </div>
    <h1>see more</h1>
</div>
