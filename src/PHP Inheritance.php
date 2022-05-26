<?php
    final class Fruit {
        // some code
    }
    // will result in error
    class Strawberry extends Fruit {
        // some code
    }

    class Car {
        final public function intro() {
            //some code
        }
        class Strawberry extends Fruit {
            // will result in error
            public function intro() {
                //some code
            }
        }
    }
?>

