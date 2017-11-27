<?php
$db = connect();

$query=<<<QUERY
    create table if not exists products (
        id int not null auto_increment primary key,
        name varchar(255),
        info longtext,
        directions text,
        ingredients text,
        price float,
        size varchar(255),
        url_name varchar(255),
        bestseller tinyint(1)
    ) Engine=InnoDB, CHARACTER SET UTF8;
QUERY;

// this will pass the create table query to the function
$db->query($query);

return true;