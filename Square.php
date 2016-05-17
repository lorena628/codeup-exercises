<?php
class Square extends Rectangle
{
    public function __construct($height)
    {
        parent::__construct($height, $height);
    }
    public function perimeter()
    {
        return $this->getHeight() * 4;
    }
    public function area()
    {
        return pow($this->getHeight(), 2);
    }
}



// class Square extends Rectangle
// {
//     public function __construct($height)
//     {
//         parent:: __construct ($height, $height);
//     }
//     public function getPerimeter() 
//     {
//         // return ($this->width * 2) + ($this->height * 2) ;
//         return pow ($this->height() , 2);
//     }
//     public function getArea()
//     {
//         return $this->height * 4;
//     }
// };
