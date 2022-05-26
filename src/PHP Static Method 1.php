<?php
    class ClassName {
        public static function staticMethod() {
            echo "Hello  World";
        }
    }

    class Greeting {
        public static function welcome() {
            echo " What's the hell! ";
        }
    }
    
    //call static method
    ClassName::staticMethod();
    Greeting:: welcome();