<?php
include("../resources/library.php");
$migrations = glob(__DIR__."/m*.php");

function check_migration($m)
{
    $db = connect();
    $result = $db->query("select filename from migrations where filename = '$m'");

    if($result === false) return false;
    
    if($result->num_rows == 0) return false;
    
    return true;
}

function log_migration($m)
{
    $db = connect();
    
    $db->query("insert into migrations set filename='$m'");
}

foreach($migrations as $m){
    if(check_migration($m) === false){
        print("Running Migration: $m<br/>");
        include($m);
        
        print("Logging Migration: $m<br/>");
        log_migration($m);
    }else{
        print("Skipping Migration $m<br/>");
    }
}

print("<b>Finished migrating everything</b><br/>");
print("<a href='/index.php'>Go back to home page</a>");