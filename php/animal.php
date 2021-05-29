<?php
    class Animal {
        public $name = '';
        public $age = 1;

        function say() {
            print $this->name . "です。" . $this->age . "歳です。";
        }
    }