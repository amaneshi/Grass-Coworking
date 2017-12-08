<?php
$dbConnection = mysqli_connect('localhost', 'mysql', 'mysql', 'chat-db');

if(!$dbConnection){
    echo 'Cannot connect to DB';
    exit();
}