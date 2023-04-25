<?php
/*
 From PHP5 onwards you can write php in either a procedural
or object-oriented way. OOP consists of a classes that can hold
properties and methods. Objects can be created from classes
 */

class User
{
    //properties are attributes that belong to a class
    //Access modifiers: public, private, protected
    //public: can be accessed from anywhere
    //private: can only be accessed from inside the class
    //protected: can only be accessed from inside the class
    //and by inheriting classes

    public $name;
    public $email;
    public $password;

    //A constructor is a method that run when an object is created
    function __construct($name, $email, $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    //method is a function that belongs to a class
    function set_name($name)
    {
        $this->name = $name;
    }
    function get_name()
    {
        return $this->name;
    }

}
 //user object
$user1 = new User("Juan", "juan@mail.com", "password");
var_dump($user1);

//Inheritence
class Employee extends User
{
    public function __construct($name, $email, $password, $title)
    {
        parent::__construct($name, $email, $password);
        $this->title = $title;
    }
    public function get_title()
    {
        return $this->title;
    }
}

$employee1 = new Employee('Maria', 'maria@mail.com', 'password', 'manager');
echo $employee1->get_title();
