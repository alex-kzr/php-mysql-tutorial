<?php

    echo 'classes:' . '<br>';

    class User {
        
        private $email;
        private $name;

        public function __construct($name = "mario", $email = "mario@xxx.com") {
            $this->email = $email;
            $this->name = $name;
        }

        public function login(){
            echo $this->name . ' logged in';
        }

        public function getName(){
            return $this->name;
        }

        public function setName($name){
            if(is_string(($name)) && strlen($name) > 1){
                $this->name = $name;
                return "name has been updated to $name";
            }else{
                return 'not a valid name';
            }
        }
    }

    $userTwo = new User('yoshi', 'yoshi@xxx.com');
    echo $userTwo->getName() . '<br>';
    echo $userTwo->setName('alex') . '<br>';
    echo $userTwo->getName() . '<br>';

?>