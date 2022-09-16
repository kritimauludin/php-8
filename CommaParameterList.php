<?php
/*
 * Comma di Parameter List
    ● Ini adalah salah satu fitur sederhana, tapi bermanfaat
    ● Di PHP 8, kita sekarang bisa menambahkan karakter koma di akhir parameter list, seperti ketika
    memanggil function, membuat array dan lain-lain
    ● https://wiki.php.net/rfc/trailing_comma_in_parameter_list
    ● https://wiki.php.net/rfc/trailing_comma_in_closure_use_list
 */
function sayHello(string $first, string $last){
    
}

function sum(int... $values){

}

sayHello(
    "kriti",
    "mauludin",
);

sum(
    1,
    1,
    1,
    1,
    1,
    1,
    1,
    1,
    1,
    1,
    1,
);

$array = [
    "first" => "kriti",
    "last" => "mauludin",
    "age" => 20,
    "job" => "student",
];