<?php
/*
 * Union Types
    ● PHP adalah bahasa pemrograman yang dynamic
    ● Kita tahu sebenarnya saat membuat variabel, parameter, argument, return value, sebenarnya di
    PHP kita tidak wajib menyebutkan tipe datanya, dan PHP bisa berubah-ubah tipe data
    ● Saat kita tambahkan tipe data, maka secara otomatis PHP akan memastikan tipe data tersebut
    harus sesuai dengan tipe data yang sudah kita definisikan
    ● Di PHP 8, ada fitur Union Types, dimana kita bisa menambahkan lebih dari satu tipe data ke
    property, argument, parameter, atau return value
    ● Penggunaan Union Types bisa menggunakan tanpa | diikuti dengan tipe data selanjutnya
    ● https://wiki.php.net/rfc/union_types_v2
 */

class Example {
    public string|int|bool|array $data; //contoh union type diproperty, boleh lebih dari satu tipe data
}

$example = new Example();
$example->data = "kriti";
$example->data = 100;
$example->data = true;
$example->data = [];

function sampleFunction(string|array $data): string|array { //contoh union type diparameter/argument dan return value
    if(is_array($data)) {
        return ["Response"];
    }else if(is_string($data)) { 
        return "Response";
    }
}

var_dump(sampleFunction("kriti"));
var_dump(sampleFunction(["kriti"]));