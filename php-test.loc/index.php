<?php

require_once 'db-config.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP+MySQL Chat</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<div class="content">
    <div class="message-list">
        <?php
        $result = mysqli_query($dbConnection, 'SELECT * FROM `messages` ORDER BY id DESC ;');

        while ($dataRow = mysqli_fetch_assoc($result)) {
            echo '<div class="message-item">';
            echo '<p class="message-time">' . date('d F Y, H:i:s', $dataRow['time']) . '</p>';
            echo '<p class="message-nick">' . $dataRow['nick'] . '</p>';
            echo '<hr>';
            echo '<p class="message-text">' . $dataRow['message'] . '</p>';
            echo '</div>';
            echo '<hr>';
        }
        ?>
    </div>
    <div class="input-form">
        <form action="data-insert.php" method="post" class="form-input">
            <fieldset>
                <legend>Type your message here:</legend>
                <p class="nick-input"><span>Your Nickname: </span>
                    <input type="text" name="nick" placeholder="NickName"></p>
                <p class="text-input"><span>Your Message: </span>
                    <textarea name="message" rows="5" placeholder="Message" required></textarea>
                </p>
            </fieldset>
            <input type="submit" class="submit-button" value="Send Message">
        </form>
    </div>
</div>
</body>
</html>
