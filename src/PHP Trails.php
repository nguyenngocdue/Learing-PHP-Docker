<?php
    trait message1 {
        public function msg1() {
            echo "OOP is funn! ";
        }
    }
    
    trait message2 {
        public function msg2() {
            echo "OOP reduces code duplication!";
        }
    }

    class welcome1 {
        use message1;
    }
    class welcome2 {
        use message1, message2; 
    }

    $obj1 = new welcome1();
    $obj1->msg1();
    echo "<br";

    $obj2 = new welcome2();
    $obj2->msg1();
    $obj2->msg2();
?>