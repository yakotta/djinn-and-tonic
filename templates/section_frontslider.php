<div id="slider">
    <div id="front-page-carousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#front-page-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#front-page-carousel" data-slide-to="1"></li>
            <li data-target="#front-page-carousel" data-slide-to="2"></li>
            <li data-target="#front-page-carousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <?php foreach($sliders as $key => $slide): ?>
                <div class="item <?=$key==0 ? "active" : ""?>">
                    <img src="<?=rewrite_url($slide["image"])?>" />
                    <div class="carousel-caption">
                        <h1><?=$slide["title"]?></h1>
                        <p><?=$slide["blurb"]?></p>
                    </div>
                </div>
            <?php endforeach?>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
