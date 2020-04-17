<?php

    echo 'classes:' . '<br>';

    class User {
        
        public $email;
        public $name;

        public function __construct($name = "mario", $email = "mario@xxx.com") {
            $this->email = $email;
            $this->name = $name;
        }

        public function login(){
            echo $this->name . ' logged in';
        }
    }

    $userOne = new User();

    $userOne->login();
    echo $userOne->name;

    $userTwo = new User('yoshi', 'yoshi@xxx.com');
    echo $userTwo->name;
    echo $userTwo->email;
    $userTwo->login();


?>