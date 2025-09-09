<?php
class Person
{


    public $name;
    public $lname;
    public $email;
    public $programming;

    function __construct($name = "", $lname = "", $email = "", $programming = "")
    {
        $this->name = $name;
        $this->lname = $lname;
        $this->email = $email;
        $this->programming = $programming;
    }

    function set_name($name)
    {
        $this->name = $name;
    }
    function get_name()
    {
        return $this->name;
    }
    function set_lname($lname)
    {
        $this->lname = $lname;
    }
    function get_lname()
    {
        return $this->lname;
    }
    function set_email($email)
    {
        $this->email = $email;
    }
    function get_email()
    {
        return $this->email;
    }
    function set_programming($programming)
    {
        $this->programming = $programming;
    }
    function get_programming()
    {
        return $this->programming;
    }
}
