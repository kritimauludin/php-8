<?php
/*
 * Consistent Type Error
    ● Saat kita membuat function, dan ketika kita mengirim argument dengan tipe data yang salah, maka
    akan berakibat terjadi TypeError
    ● Sayangnya di PHP banyak function bawaan yang tidak mengembalikan TypeError, malah memberi
    warning
    ● Agar konsisten, sekarang di PHP 8, banyak function bawaan yang akan error TypeError jika kita
    salah mengirim tipe data
    ● https://wiki.php.net/rfc/consistent_type_errors
 */

 strlen([]);