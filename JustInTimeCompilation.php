<?php 
/*
 * Just-In-Time Compilation
    ● PHP 8 mengenalkan fitur Just in Time Compilation
    ● Dimana fitur ini akan mempercepat proses eksekusi program PHP yang kita buat
    ● Namun sebelum kita bahas JIT, kita perlu tahu dulu bagaimana cara kerja PHP menjalankan kode
    program kita
 */

/*
 * OPcache
    ● Secara default PHP akan selalu membaca kode PHP ketika menjalankan program PHP
    ● OPCache digunakan untuk meningkatkan performance PHP, dengan cara menyimpan hasil
    kompilasi kode PHP di memory.
    ● Dengan demikian, PHP tidak perlu lagi membaca ulang kode program PHP setiap kali program
    dijalankan
    ● PHP akan langsung membaca dari OPcache yang sudah disimpan di memory
    ● Fitur OPcache harus diaktifkan terlebih dahulu, sebelum kita bisa menggunakannya
    ● https://www.php.net/manual/en/book.opcache.php
 */

/*
 * Just-In-Time Compilation
    ● Opcache akan membuat kode program kita terhindar dari harus melakukan tokenize, parsing dan
    compile lagi secara terus menerus tiap request
    ● JIT, akan membuat hasil kompilasi kita tidak perlu diterjemahkan oleh virtual machine PHP,
    melainkan langsung dijalankan oleh machine
    ● JIT di PHP menggunakan library bahasa pemrograman C bernama DynASM, oleh karena itu JIT
    bisa mentranslate hasil compile opcodes ke instruksi machine
 */