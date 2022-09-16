<?php
/*
 * String to Number Comparison
    ● Salah satu yang membingungkan di PHP adalah ketika kita melakukan perbandingan number dan
    string
    ● Misal saat kita bandingkan 0 == “krit”, maka hasilnya true
    ● Kenapa true? Karena PHP akan melakukan type jugling dan mengubah “eko” menjadi 0, sehingga
    hasilnya true
    ● Di PHP 8, khusus perbandingan String ke Number diubah, agar tidak membingungkan
    ● https://wiki.php.net/rfc/string_to_number_comparison
 */

 /**
  ********************************************
  * Comparison    **  Before   **  After    **
  ********************************************
  * 0 == "0"      **  true     **  true     **
  * 0 == "0.0"    **  true     **  true     **
  * 0 == "foo"    **  true     **  false    **
  * 0 == ""       **  true     **  false    **
  * 0 == "   42"  **  true     **  true     **
  * 0 == "42foo"  **  true     **  true     **
  ********************************************
  */