<?php

    class Goodbye {
        const LEAVING_MESSAGE = " Thank you for visiting W3School.com ";
    }
    echo Goodbye::LEAVING_MESSAGE;

    class Greeting{
        const LEAVING_MESSAGE = "Thnank you for visting w3school.com ";
        public function byebye() {
            echo self :: LEAVING_MESSAGE;
        }
    }

    $greeting = new Greeting();
    $greeting->byebye();

