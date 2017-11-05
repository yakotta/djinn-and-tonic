<?php
$db = connect();

$migrations=<<<QUERY
    create table if not exists migrations (
        filename varchar(255),
        primary key (filename)
    ) Engine=InnoDB, CHARACTER SET UTF8;
QUERY;

$db->query($migrations);

return true;