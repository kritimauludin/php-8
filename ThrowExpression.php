<?php
/*
 * Throw Expression
    ● Throw adalah sebuah statement
    ● Hal ini menyebabkan kadang kita kesulitan menggunakan throw di beberapa tempat yang
    membutuhkan expression, seperti ternary operator misalnya
    ● Di PHP 8, sekarang throw adalah sebuah expression bukan lagi statement, artinya dia memiliki nilai, dan sekarang kita
    bisa gunakan di tempat-tempat yang memang membutuhkan expression, seperti ternary operator
    ● https://wiki.php.net/rfc/throw_expression
 */

function sayHello(?string $name){
    if($name == null){
        throw new Exception("Invalid Name");
    }

    echo "Hello $name". PHP_EOL;
}

function sayHelloExpression(?string $name){
    $result = $name != null ? "Hello $name" : throw new Exception("Tidak Boleh Null"); 
    
    echo $result. PHP_EOL;
}

sayHelloExpression("kriti");