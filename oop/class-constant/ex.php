<?php

// class constant is a constant that is defined in a class and can be accessed
// from outside the class using the class name and double colon (::) operator.
// the constant should be written in uppercase letters. 
// class constants are declared using the const keyword.
// example:

class MyClass
{
    const MY_CONST = 'Hello World';
}

echo MyClass::MY_CONST;
