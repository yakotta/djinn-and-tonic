<?=render_template(__DIR__."/section_parallax.php")?>

<div class="content">

    <div class="intro">
        <h1>let's make some magic</h1>
        <p>
            blah blah blah, lah di la la. Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Autem recusandae provident assumenda est, amet ducimus excepturi iusto eius, eveniet, qui
            magnam odit totam! Id sapiente exercitationem quis quia delectus voluptatem!
        </p>

        <?=render_template(__DIR__."/section_infoboxes.php")?>

        <h1>shop all products</h1>
    </div>

    <div class="slider">
        <?=render_template(__DIR__."/section_frontslider.php", [
            "sliders" => $sliders
        ])?>
    </div>

    <div class="container light-bg">
        <?=render_template(__DIR__."/section_email.php")?>
        <?=render_template(__DIR__."/section_bestsellers.php", [
            "bestseller_list" => $bestseller_list
        ])?>
    </div>

    <div class="footer">
        <img src="<?=rewrite_url("/resources/parallax/images/logo-white.png")?>" />
    </div>
</div>