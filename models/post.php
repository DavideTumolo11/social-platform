<?php



class Post
{
    public $id;
    public $title;
    public $path;


    public function __construct($id, $title, $path)
    {
        $this->id = $id;
        $this->title = $title;
        $this->path = $path;
    }
}

$PuffiPost = new Post('01', 'Il villaggio dei puffi', 'img/564f4c745c717d6a656766b61e191402.jpg');

$GnomiPost = new Post('02', 'Gli Gnomi assassini', 'img/pngtree-three-animated-gnomes-standing-in-the-woods-picture-image_3427356.jpg');
