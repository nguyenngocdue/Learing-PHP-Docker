<?php

use ClassName as GlobalClassName;

    class ClassName {
        public static $staticProp1 =  "w3School1";
        public static $staticProp2 =  "w3School2";
    }

    echo ClassName::$staticProp1;
    echo ClassName::$staticProp2;

    class pi {
        public static $value = 3.14159;
    }

    //Get static property
    echo pi::$value


?>