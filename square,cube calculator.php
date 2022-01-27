<?php
class Calculator
{
    public $myValue;
    public function setValue($myValue)
    {
        $this->value = $myValue;
    }
    public function square()
    {
        return $this->value * $this->value;
    }
    public function quebe()
    {
        return $this->value * $this->value * $this->value;
    }
};

$r1 = new  Calculator;
$r1->setValue(2);
echo "square:";
echo $r1->square();
echo "<br>";
echo "quebe:";
echo $r1->quebe();
?>
<?php
//using constructor
class Calculator1 {
    public $myValue;
    public function __construct($myValue)
    {
        $this->value=$myValue;
        
    }
    public function square()
        {
            return $this -> value*$this -> value;
        }
        public function quebe()
        {
            return $this -> value*$this -> value*$this -> value;
        }
    
    
    };
    $r2 = new  Calculator1(2);
        echo"square:";
        echo $r2->square();
        echo "<br>";
        echo"quebe:";
        echo $r2->quebe();
    ?>
