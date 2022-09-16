<?php
/*
 * New String Functions
    ● Di PHP 8, terdapat beberapa function untuk memanipulasi string
    ● https://wiki.php.net/rfc/str_contains
    ● https://wiki.php.net/rfc/add_str_starts_with_and_ends_with_functions
 */

//Mengecek apakah $string mengandung $contains
var_dump(str_contains("Kriti Mauludin", "Kriti"));
var_dump(str_contains("Kriti Mauludin", "Mauludin")); 
var_dump(str_contains("Kriti Mauludin", "ahmad")); 

//Mengecek apakah $string memiliki awal $value
var_dump(str_starts_with("Kriti Mauludin", "Kriti")); 
var_dump(str_starts_with("Kriti Mauludin", "Mauludin"));
var_dump(str_starts_with("Kriti Mauludin", "ahmad"));

//Mengececk apakah $string memiliki akhir $value
var_dump(str_ends_with("Kriti Mauludin", "Kriti")); 
var_dump(str_ends_with("Kriti Mauludin", "Mauludin"));
var_dump(str_ends_with("Kriti Mauludin", "ahmad"));