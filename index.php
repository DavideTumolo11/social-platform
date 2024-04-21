<?php

require_once __DIR__ . '/config_conn_db.php';

$connection = new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);


if ($connection && $connection->connect_error) {
    echo 'database connection failed';
    die;
}


$sqlMedia = "SELECT `username` FROM `users` JOIN `medias` ON `users`.`id` = `medias`.`user_id` WHERE `medias`.`type` = 'video' GROUP BY `users`.`username`";
$resultSqlMedia = $connection->query($sqlMedia);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div>



    </div>

    <?php while ($row = $resultSqlMedia->fetch_assoc()) :

        ['username' => $username] = $row;

    ?>

        <div>
            <p>students who have posted at least one video <strong><?= $username ?></strong></p>
        </div>


    <?php endwhile; ?>


</body>

</html>