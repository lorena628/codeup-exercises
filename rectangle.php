<?php



class Rectangle
{
    private $height;
    private $width;
    public function __construct($height, $width)
    {
        $this->setHeight($height);
        $this->setWidth($width);
    }
    protected function setWidth($width)
    {
        $this->width = $width;
    }
    protected function setHeight($height)
    {
        $this->height = $height;
    }
    protected function getHeight()
    {
        return $this->height;
    }
    protected function getWidth()
    {
        return $this->width;
    }
    public function area()
    {
        return $this->getHeight() * $this->getWidth();
    }
    public function perimeter()
    {
        return (2 * $this->getHeight()) + (2 * $this->getWidth());
    }
}

// class Rectangle
// {
//     private $width;
//     private $height;

//     public function __construct ($width, $height)
//     {
//         $this->width = $width;
//         $this->height = $height;
//     } 

//     public function setArea() 
//     {
//         return $this->width * $this->height;
//     }
//     public function setPerimeter() 
//     {
//         return ($this->width * 2) + ($this->height * 2) ;
//     }
// }

