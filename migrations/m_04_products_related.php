<?php
$db = connect();

$query=<<<QUERY
    create table if not exists products_related (
        id int not null auto_increment,
        product1_id int not null,
        product2_id int not null,

        primary key (id),
        index (product1_id),
        foreign key (product1_id) references products (id),
        index (product2_id),
        foreign key (product2_id) references products (id)
    ) Engine=InnoDB, CHARACTER SET UTF8;
QUERY;

// this will pass the create table query to the function
$db->query($query);

return true;