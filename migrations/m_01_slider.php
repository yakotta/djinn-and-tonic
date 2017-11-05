<?php
$db = connect();

$services=<<<QUERY
    create table if not exists frontslider (
        id int not null auto_increment primary key,
        title varchar(255),
        blurb varchar(255),
        image varchar(255),
        link varchar(255)
    ) Engine=InnoDB, CHARACTER SET UTF8;
QUERY;

// this will pass the create table query to the function
$db->query($services);

return true;