<?php

class Media
{
    public $id;
    public $type;
    public $path;

    public function __construct($id, $type, $path)
    {
        $this->id = $id;
        $this->type = $type;
        $this->path = $path;
    }
}
