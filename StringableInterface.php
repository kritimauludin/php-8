<?php
/*
 * Stringable Interface
    ● Di PHP 8, sekarang diperkenalkan interface baru bernama Stringable
    ● Jika kita melakukan override magic function __toString, maka secara otomatis class kita akan
    implement interface Stringable
    ● Kita tidak perlu melakukannya secara manual, ini sudah dilakukan secara otomatis oleh PHP 8
    ● https://wiki.php.net/rfc/stringable
 */

function sayHello(Stringable $stringable): void
{
    echo "Hello {$stringable->__toString()}". PHP_EOL;
}

class Person {
    //ketika menggunakan stringable kita harus mengimplement stringable
    //keywords implements stringable tidak wajib asalkan kita mengoverride magic functiong toString
    public function __toString(): string
    {
        return "Person";
    }
}
sayHello(new Person());