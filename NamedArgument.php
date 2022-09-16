<?php
/*
 * Named Argument
    ● Biasanya saat kita memanggil function, maka kita harus memasukkan argument atau parameter
    sesuai dengan posisinya
    ● Dengan kemampuan named argument, kita bisa memasukkan argument atau parameter tanpa
    harus mengikuti posisi nya
    ● Namun penggunaan named argument harus disebutkan nama argument atau parameter nya
    ● Named argument juga menjadikan kode program mudah dibaca ketika memanggil function yang
    memiliki argument yang sangat banyak
    ● https://wiki.php.net/rfc/named_params
 */

function sayHello(string $first, string $middle = "", string $last): void{
    echo "Hello $first $last". PHP_EOL;
}

//without named argument
// sayHello("kriti", "mauludin"); //error

//with named argument
sayHello(last: "mauludin", first: "kriti");