<?php
$db = connect();

$query=<<<QUERY
    create table if not exists products_images (
        id int not null auto_increment,
        product_id int not null,
        image varchar(255),

        primary key (id),
        index (product_id),
        foreign key (product_id) references products (id)
    ) Engine=InnoDB, CHARACTER SET UTF8;
QUERY;

// this will pass the create table query to the function
$db->query($query);

return true;