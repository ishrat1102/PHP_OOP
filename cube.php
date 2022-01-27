<?php
class Box {
    public $length,$height,$width;
    public function __construct($length,$height,$width)
    {
        $this->length=$length;
        $this->height=$height;
        $this->width=$width;
    }
    public function getArea()
    {
        $a= $this->length;
        $b= $this->height;
        $c= $this->width;
       return $surface= 2*$a*$c+2*$a*$b+2*$c*$b;
    }
    
    
    };
    $box = new Box(1,2,3);
    echo"surface:";
    echo $box->getArea();
   

?>
