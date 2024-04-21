<?php

require_once __DIR__ . '/models/media.php';
require_once __DIR__ . '/models/post.php';



$PuffiPost = new Post('01', 'Il villaggio dei puffi', 'img');

$GnomiPost = new Post('02', 'Gli Gnomi assassini', 'video');


$posts = [$PuffiPost, $GnomiPost];

var_dump($posts)

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <body>

        <?php foreach ($posts as $post) : ?>


            <h3><?= $post->getPostId() ?></h3>
            <div></div><?= $post->getPostTitle() ?>

            <div><?= $post->getPostMedia() ?></div>

        <?php endforeach; ?>

    </body>


</body>

</html>