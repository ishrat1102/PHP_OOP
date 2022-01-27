<?php
    class Rectangle {
        private $width, $height;
        public function setWidth($width)
        {
            $this -> width = $width;
        }
        public function getWidth($width)
        {
            return $this -> width;
        }
        public function setHeight($height)
        {
            $this -> height = $height;
        }
        public function getHeight($height)
        {
            return $this -> height;
        }
       
        public function showArea()
        {
           
            return $this->width*$this->height;
        }
        };

        $r1 = new Rectangle;
        $r1->setWidth(5);
        $r1->setHeight(15);
        echo"area:";
        echo $r1->showArea();
        echo "<br>";
        $r2 = new Rectangle;
        $r2->setWidth(10);
        $r2->setHeight(30);
        echo"area:";
        echo $r2->showArea();
        echo "<br>";
//using constructor
class Rectangle1 {
    public $width, $height;
    public function __construct($width, $height)
    {
        $this->width=$width;
        $this->height=$height;
    }
    public function showArea()
        {
           
            return $this->width*$this->height;
        }
    
    
    };
    $r3 = new Rectangle1(10,30);
    echo"Result from Constructor:";
    echo $r3->showArea();
?>
