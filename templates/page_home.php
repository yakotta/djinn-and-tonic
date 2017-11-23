<?=render_template(__DIR__."/section_parallax.php")?>

<div class="content">

    <div class="intro">
        <h1>let's make some magic</h1>
        <p>
            blah blah blah, lah di la la. Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Autem recusandae provident assumenda est, amet ducimus excepturi iusto eius, eveniet, qui
            magnam odit totam! Id sapiente exercitationem quis quia delectus voluptatem!
        </p>

        <table align="center">
            <tr>
                <td>
                    <div class="info-box">
                        <img src="<?=rewrite_url("/resources/images/info-cat.png")?>" />
                        <h1>become a familiar</h1>
                    </div>
                    <h2>join our newsletter</h2>
                </td>
                <td>
                    <div class="photo-box">
                        <img src="<?=rewrite_url("/resources/images/info-empty.png")?>" />
                        <h1>head witch in charge</h1>
                    </div>
                    <h2>meet the mix master</h2>
                </td>
                <td>
                    <div class="info-box">
                        <img src="<?=rewrite_url("/resources/images/info-brew.png")?>" />
                        <h1>you brew you</h1>
                    </div>
                    <h2>custom potions</h2>
                </td>
            </tr>
        </table>

        <h1>shop all products</h1>
    </div>

    <div class="slider">
        <?=render_template(__DIR__."/section_frontslider.php", [
            "sliders" => $sliders
        ])?>
    </div>

    <div class="container light-bg">
        <?=render_template(__DIR__."/section_email.php")?>
        <?=render_template(__DIR__."/section_bestsellers.php")?>
    </div>

    <div class="footer">
        <img src="<?=rewrite_url("/resources/parallax/images/logo-white.png")?>" />
    </div>
</div>