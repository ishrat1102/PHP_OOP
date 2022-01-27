<?php
class Circle {
    private $radius;
    public function setRadius($radius)
    {
        $this->radius=$radius;
    }
    public function getRadius($radius)
    {
        return $this->radius;
    }
    public function circumference()
    {
        return $this->radius*2*3.1416;
    }
    public function area()
    {
        return $this->radius*$this->radius*3.1416;
    }
    
    };
    $circ = new Circle;
    $circ->setRadius(2);
    echo"circumference:";
    echo $circ->circumference();
    echo"<br>";
    echo"area:";
    echo $circ->area();

?>
