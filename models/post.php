<?php


class Post
{

    public function __construct(public $id, public $title, public $media)
    {
        $this->id = $id;
        $this->title = $title;
        $this->media = $media;
    }




    public function getPostId()
    {
        return $this->id;
    }

    public function getPostTitle()
    {
        return $this->title;
    }
    public function getPostMedia()
    {
        return $this->media;
    }
}
