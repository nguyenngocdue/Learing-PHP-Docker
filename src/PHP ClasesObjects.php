<?php

    class Fruit {
        // Properties
        public $name;
        public $color;

        //Methods
        function set_name($name) {
            $this->name = $name;
        }
        function get_name() {
            return $this->name;
        }
        function set_color($color) {
            $this->color = $color;
        }
        function get_color() {
            return $this->color;
        }
    }

    $apple = new Fruit();
    $banana = new Fruit();
    $yellow = new Fruit();
    $green = new Fruit();
    $apple->set_name('Apple');
    $banana->set_name('Banana');
    $yellow->set_color('Yellow');
    $green-> set_color('green');

    echo $apple->get_name();
    echo "<br>";
    echo $banana->get_name();
    echo "<br>";
    echo $yellow->get_color();
    echo "<br>";
    echo $green->get_color();
    echo "<br>";

    // Outside the class - by directly changing the property value
    class Car{
        public $name;
    }
    $audi = new Car();
    $audi->name = "Toyota";
    echo $audi->name;

    // instanceof
    var_dump($apple instanceof Fruit)
    
?>