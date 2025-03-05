<?php

class Properties
{
    public $name = "Laxman Krishnamurti";

    function getName()
    {
        return $this->name;
    }

    function updateProperty($name)
    {
        return $this->name = $name;
    }
}

$user_one = new Properties();
echo $user_one->getName();

echo "<br/>";

echo "Updated Property is : " . $user_one->updateProperty("Harshad Mehta");

?>