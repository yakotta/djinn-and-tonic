<?php
error_reporting(-1);
ini_set("display_errors", true);

include("resources/library.php");

$url = $_GET["url"];

switch($url){
// Home Page
    case "":
        include(__DIR__."/api/frontslider.php");
        $sliders = getFrontSliders();
        $template = render_template("templates/page_home.php", [
            "sliders" => $sliders
        ]);
    break;

// Migrations
    case "migrations":
        ob_start();
        $migrations = glob(__DIR__."/migrations/m*.php");

        foreach($migrations as $m){
            if(check_migration($m) === false){
                print("Running Migration: $m<br/>");
                
                $output = include($m);
                if($output === true) {
                    print("Adding Migration: $m<br/>");
                    add_migration($m);
                }
            } else {
                print("Skipping Migration $m<br/>");
            }
        }

        print("<b>Finished migrating everything</b><br/>");
        print("<a href='/'>Go back to the home page</a>");

        $template = ob_get_clean();
    break;

    // Catch-All
    default:
        $template = render_template("templates/404.php", [
            "url" => $url
        ]);
    break;
};

$content = render_template("templates/page_skeleton.php",[
"content" => $template
]);

print($content);