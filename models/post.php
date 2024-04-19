<?php

require_once 'media.php';

class Post
{
    public $id;
    public $title;
    public $img;


    public function __construct($id, $title, $img)
    {
        $this->id = $id;
        $this->title = $title;
        $this->img = $img;
    }
}

$PuffiPost = new Post('01', 'Il villaggio dei puffi', 'img/564f4c745c717d6a656766b61e191402.jpg');

var_dump($PuffiPost);

$GnomiPost = new Post('02', 'Gli Gnomi assassini', 'img/pngtree-three-animated-gnomes-standing-in-the-woods-picture-image_3427356.jpg');

var_dump($GnomiPost);
