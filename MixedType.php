<?php
/*
 * Mixed Type v2
    ● Di PHP 7 terdapat type data mixed, tipe data ini digunakan ketika sebuah argument atau return
    function mengembalikan data yang bisa berbeda-beda.
    ● Karena tidak bisa menyebutkan tipe data berbeda-beda di PHP 7, maka biasanya ditambahkanlah
    tipe data baru bernama mixed
    ● Di PHP 8, tipe data mixed di perbaharui, karena di PHP 8 sudah ada Uninon Type, jadi sekarang tipe
    data mixed adalah singkatan dari tipe data array|bool|callable|int|float|null|object|resource|string
    ● https://wiki.php.net/rfc/mixed_type_v2
 */

function testMixed(mixed $data): mixed {
    if(is_array($data)) {
        return [];
    }else if (is_string($data)) {
        return "String";
    }else if(is_numeric($data)) {
        return 1;
    }else {
        return null;
    }

}

var_dump(testMixed([]));
var_dump(testMixed("km"));
var_dump(testMixed(1));
var_dump(testMixed(null));
var_dump(testMixed(new stdClass()));