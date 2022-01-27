
        <?php

        class Student{
            public $name ,$id,$CGPA ;

            
        public function __construct($name, $id, $CGPA)
        {
            $this->name=$name;
            $this->id=$id;
            $this->CGPA=$CGPA;

        }

        public function cgpa()
        {

            return $this->CGPA;
        }

        }

        $st1= new Student("ishrat",2018111987,3.82);
        $s1= $st1->cgpa();
        $st2= new Student("bushra",2018111978,3.78);
        $s2= $st2->cgpa();
        $avg=($s1+$s2)/2;
        

        echo "Average CGPA is: ".$avg;
        ?>
        
