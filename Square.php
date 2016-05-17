<?php
class Square extends Rectangle
{
    public function __construct($height)
    {
        parent:: __construct ($height, $height);
    }
    public function perimeter() 
    {
        return ($this->width * 2) + ($this->height * 2) ;
    }
    public function area()
    {
        return $this->height * 4;
    }
};
