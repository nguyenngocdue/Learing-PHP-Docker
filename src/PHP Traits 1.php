<?php
    trait message1 {
        public function msg1() {
            echo "OOP is fun! ";
        }
        public function msg2() {
            echo "OOP is so greate! ";
        }
    }
    class welcome {
        use message1;
    }
    $obj = new welcome();
    $obj->msg1();
    $obj->msg2();
?>