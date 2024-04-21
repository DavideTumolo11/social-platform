<?php

class Media
{


    public function __construct(public $id, public $type, public $path)
    {
        $this->id = $id;
        $this->type = $type;
        $this->path = $path;
    }


    public function getMediaId()
    {
        return $this->id;
    }

    public function getMediaType()
    {
        return $this->type;
    }
    public function getMediaPath()
    {
        return $this->path;
    }
}
