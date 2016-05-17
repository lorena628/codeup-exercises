<?php
class Square extends Rectangle
{
    public function perimeter() 
    {
        return $this->width * 4;
        // return ($this->width * 2) + ($this->height * 2) ;
    }
};
