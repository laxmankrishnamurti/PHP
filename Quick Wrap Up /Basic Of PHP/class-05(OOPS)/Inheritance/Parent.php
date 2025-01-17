<?php

class Parentclass
{
    public $name = "Laxman Krishnamurti";
    public $status = "Student";
    public $age = 21;

    function getName($check)
    {
        return "$check Name : " . $this->name;
    }

    function getAge()
    {
        return $this->age;
    }

}

$parent_one = new Parentclass();
echo $parent_one->getName("Parent");
echo "<br/>";

class Child extends Parentclass
{
    public $name = "Bhagat";
    public $age = 25;
    public $status = "Student";
}

$child_one = new Child();
echo $child_one->getName("Child");


?>