<?php
function getFrontSliders()
{
    $db = connect();
    $result = $db->query("select * from frontslider");
    return $result;
}