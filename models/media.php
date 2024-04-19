<?php

class Media
{
    public $id;
    public $type;
    public $img;

    public function __construct($id, $type, $img)
    {
        $this->id = $id;
        $this->type = $type;
        $this->img = $img;
    }
}
