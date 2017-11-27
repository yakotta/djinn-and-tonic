<?php
function getProducts()
{
    $db = connect();
    $products = $db->query("select * from products");

    foreach($products as &$p){
        $id = $p["id"];
        $images = $db->query("select * from products_images where product_id = '$id'");
        $p["images"] = $images;
    } 
    return $products;
}

function getBestSellers()
{
    $db = connect();
    
    $result = $db->query("select * from products where bestseller = 1");
    $products = [];
    foreach($result as $p){
        $id = $p["id"];
        $images = $db->query("select * from products_images where product_id = '$id'");
        $p["images"] = $images;
        $products[] = $p;
    } 

    return $products;
}