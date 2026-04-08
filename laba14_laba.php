<?php
class Page 
{
    private $name;
    private $template;

    public function __construct() 
    {
        $this->name = "page";
        $this->template = "<div><p>It is a default page</p></div>";
    }
}