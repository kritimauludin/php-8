<?php
/*
 * Validation di Function Overriding
    ● Sebelumnya kita tahu bahwa melakukan override dengan mengubah signature function hanya akan
    menimbulkan warning
    ● Di PHP 8, hal tersebut sekarang akan menimbulkan error
    ● Sehingga kita tidak bisa lagi mengubah signature dari function yang kita override, seperti
    mengubah argument atau mengubah return value
    ● https://wiki.php.net/rfc/lsp_errors
 */

class ParentClass {
    public function method(string $name) {}
}

class ChildClass extends ParentClass  {
    // public function method(int $name){    } //error karena tipe data berubah dan tidak compatible dengan parentnya
}