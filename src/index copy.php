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

        public function __construct() {
            self::welcome();
        }
    }
    
    //call static method
    ClassName::staticMethod();
    Greeting:: welcome();
    new Greeting();