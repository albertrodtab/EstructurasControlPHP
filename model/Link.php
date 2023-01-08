<?php

class Link{

    private $url;

    public function __construct($url) {
        $this->url = $url;
    }

    public function display() {
        return '<a href="' . $this->url . '">Click aquí para acceder a la web</a>';
    }

}
