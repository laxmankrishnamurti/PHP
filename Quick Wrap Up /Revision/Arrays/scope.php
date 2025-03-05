<?php

/**
 * What is scope?
 * 
 * Well, scope is basically releated to area. What does it mean? It basically means that if there are multiple code block and in that code block there are multiple variables are defined. And we are trying to use that variable in the inner code block and outer code block. Here comes Scope.   
 * 
 * There are two types of scope :- 
 * (1). Local scope :- The variable which is defined in the local scope is not accessable by global scope. The variable which is defined in that scope is called Local variable.
 * (2). Global scope :- The variable which is deined in the global scope is accessable by local scope. The variable which is defined in that scope is called Global variable.
 */

function Parent()
{
    $parent_name = "Parent";

    echo "variable from Parent : " . $parent_name;
    echo "<br/>";

    function Child($name)
    {
        echo "Parent variable name from child block is : " . $name;
    }

    Child($parent_name);
}

Parent();