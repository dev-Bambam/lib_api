<?php
// this is the user class 

class User{
    public $name;
    public $email;
    public $role = '';
    
    // methods
    public function __construct($role = null){
        $this->role = $role;
    }
    public function viewBook(){
         
    }
}