<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP basic</title>
</head>

<body>
    <h1>PHP basic</h1>

    <h2>Basic Syntax</h2>
    <ol>
        <li>A PHP script starts with <strong>
                < ? php</strong> and ends with <strong>? ></strong></li>
        <li>The extension of a file is <strong>.php</strong></li>
        <li>Each statement ends with <strong>;</strong></li>
    </ol>

    <h2>Variables</h2>
    <p>A variable is a space stored in the program that contains a value. Its value can be modified. Rules of a variable in php:</p>
    <ol>
        <li>Start with sign <strong>$</strong></li>
        <li>Can start with a letter or underscore, never with a number.</li>
        <li>It can contain only alphanumeric characters and underscore.</li>
        <li>Is case sensitive.</li>
    </ol>

    <h2>Constants</h2>
    <p>A constant, like a variable, is also a space stored in the program that contains a value. It differs from a variable in that its value cannot be changed during script execution. Features:</p>
    <ol>
        <li>The scope of the constant is global.</li>
        <li>The way to define a constant inside a class is different than doing it in a script.</li>
        <li>In script: <strong>define('NAMEOFTHECONSTANT', 'value-of-the-constant');</strong></li>
        <li>In class: <strong>const NAMEOFTHECONSTANT = 'value-of-the-constant';</strong></li>
        <li>Por convención los identificadores de las constantes siempre se declaran en mayúsculas aunque reconozca minúsculas. </li>
    </ol>

    <h2>Data Types</h2>
    <ol>
        <li><strong>String: </strong>is a sequence of characters, use quotes</li>
        <li><strong>Integer: </strong>non-decimal number, can be negative or positive</li>
        <li><strong>Float or Double: </strong>decimal number</li>
        <li><strong>Boolean: </strong>contains two states, true or false</li>
        <li><strong>Array: </strong>is the set of multiple values ​​within a single variable, there are 3 types, simple or indexed arrays, associative arrays with key=>value and multidimensional arrays (arrays that contain other arrays) </li>
        <li><strong>Object: </strong>is an instance of a class</li>
        <li><strong>NULL: </strong>has no value</li>
    </ol>

    <h2>Print on screen</h2>
    <ol>
        <li><strong>Echo</strong></li>
        <li><strong>Print</strong></li>
    </ol>

    <h2>Exercises</h2>
    <h3>Basics</h3>
    <ul>
        <li>Clone this php repo into your xampp or mamp htdocs folder. Don't forget to turn on the server.</li>
        <li>Exercise 1: Create a variable for each data type (except object).</li>
        <li>Exercise 2: Print the variables on-screen (Find out how to print the boolean value (which prints true or false), an array and a null value (which prints NULL).</li>
    </ul>
    <h4>Results of basic type exercises:</h4>

    <?php
    //BASICS
    //Exercise 1 -> Create a variable for each data type (except object).

    $string = 'Hola';
    //Continue writing your code here...

    //Exercise 2 -> Print the variables on-screen (Find out how to print the boolean value (which prints true or false), an array and a null value (which prints NULL).

    //Write your code here...

    ?>

    <h3>Strings data type</h3>
    <ul>
        <li>Exercise 3: Create a variable of string type whose value is 'Hello World' and print it on-screen.</li>
        <li>Exercise 4: Convert all the characters of the string to uppercase and print on-screen, without modifying the original variable.</li>
        <li>Exercise 5: Print the length of the string type variable on-screen.</li>
        <li>Exercise 6: Print on-screen the number of words of the string type variable.</li>
        <li>Exercise 7: Change the characters of the string variable to reverse order and print on-screen, without modifying the original variable.</li>
        <li>Exercise 8: Replace the word 'Hello' in your original variable to 'Holi' and print on-screen.</li>
        <li>Exercise 9: Create a new variable with the value of 'We start with PHP' and print on-screen the concatenation of your initial variable and this second one.</li>
        <li>Exercise 10: Create a constant with your name and print it on-screen.</li>
    </ul>
    <h4>Results of exercises of strings data type:</h4>

    <?php
    //EXERCISES STRINGS DATA TYPE
    //Exercise 3 -> Create a variable of string type whose value is 'Hello World' and print it on-screen.

    //Write your code here...

    //Exercise 4 -> Convert all the characters of the string to uppercase and print on-screen, without modifying the original variable.

    //Write your code here...

    //Exercise 5 -> Print the length of the string type variable on-screen.

    //Write your code here...

    //Exercise 6 -> Print on-screen the number of words of the string type variable.

    //Write your code here...

    //Exercise 7 -> Change the characters of the string variable to reverse order and print on-screen, without modifying the original variable.

    //Write your code here...

    //Exercise 8 -> Replace the word 'Hello' in your original variable to 'Holi' and print on-screen.

    //Write your code here...

    //Exercise 9 -> Create a new variable with the value of 'We start with PHP' and print on-screen the concatenation of your initial variable and this second one.

    //Write your code here...

    //Exercise 10 -> Create a constant with your name and print it on-screen.

    //Write your code here...

    ?>

    <h3>Integer and Double data type</h3>
    <ul>
        <li>Exercise 11: Declare two variables and give them a value of type integer and print both on-screen.</li>
        <li>Exercise 12: Add both variables of type integer and print on-screen.</li>
        <li>Exercise 13: Subtract both variables and print on-screen.</li>
        <li>Exercise 14: Multiply both variables and print on-screen.</li>
        <li>Exercise 15: Divide both variables and print on-screen.</li>
        <li>Exercise 16: Calculate the magnitude of both variables and print on-screen.</li>
        <li>Exercise 17: Declare two variables and give them a value of type double and print both on-screen.</li>
        <li>Exercise 18: Repeat steps 2 to 6 but for the double type variables and print on-screen.</li>
        <li>Exercise 19: Declare an integer type variable with a negative value and change it with a php own function to the positive value and print on-screen.</li>
        <li>Exercise 20: Declare a variable of type double and round its value, print on-screen.</li>
        <li>Exercise 21: Get a random number from 1 to 100 and print it on-screen.</li>
    </ul>
    <h4>Results of exercises of integer and double data type:</h4>

    <?php
    //EXERCISES INTEGER AND DOUBLE DATA TYPES
    //Exercise 11 -> Declare two variables and give them a value of type integer and print both on-screen.

    //Write your code here...

    //Exercise 12 -> Add both variables of type integer and print on-screen.

    //Write your code here...

    //Exercise 13 -> Subtract both variables and print on-screen.

    //Write your code here...

    //Exercise 14 -> Multiply both variables and print on-screen.

    //Write your code here...

    //Exercise 15 -> Divide both variables and print on-screen.

    //Write your code here...

    //Exercise 16 -> Calculate the magnitude of both variables and print on-screen.

    //Write your code here...

    //Exercise 17 -> Declare two variables and give them a value of type double and print both on-screen.

    //Write your code here...

    //Exercise 18 -> Repeat steps 2 to 6 but for the double type variables and print on-screen.

    //Write your code here...

    //Exercise 19 -> Declare an integer type variable with a negative value and change it with a php own function to the positive value and print on-screen.

    //Write your code here...

    //Exercise 20 -> Declare a variable of type double and round its value, print on-screen.

    //Write your code here...

    //Exercise 21 -> Get a random number from 1 to 100 and print it on-screen.

    //Write your code here...
    ?>

    <h3>Array data type</h3>
    <ul>
        <li>Exercise 22: Declare an array with string data type and print on-screen.</li>
        <li>Exercise 23: Get the length of the array and print it on-screen.</li>
        <li>Exercise 24: Add a string value to the array you created earlier and print on-screen.</li>
        <li>Exercise 25: Now add 2 more elements to your array and print on-screen.</li>
        <li>Exercise 26: Create a new array and concatenate it with the previous one and print on-screen.</li>
    </ul>
    <h4>Results of exercises of array data type:</h4>

    <?php
    //EXERCISES ARRAY DATA TYPE
    //Exercise 22 -> Declare an array with string data type and print on-screen.

    //Write your code here...

    //Exercise 23 -> Get the length of the array and print it on-screen.

    //Write your code here...

    //Exercise 24 -> Add a string value to the array you created earlier and print on-screen.

    //Write your code here...

    //Exercise 25 -> Now add 2 more elements to your array and print on-screen.

    //Write your code here...

    //Exercise 26 -> Create a new array and concatenate it with the previous one and print on-screen.

    //Write your code here...
    ?>
