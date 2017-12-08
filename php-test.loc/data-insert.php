<?php
require_once 'db-config.php';

$messageNick = $_POST['nick']==''?"anonymous":$_POST['nick'];
$messageText = $_POST['message'];
$messageTime = time();

$query = "INSERT INTO `messages`(`nick`, `message`, `time`) VALUES ('".$messageNick."', '".$messageText."', '".$messageTime."')";

$result = mysqli_query($dbConnection, $query);

header('Location: /index.php');
