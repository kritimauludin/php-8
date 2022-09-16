<?php
/*
 * Non-Capturing Catches
    ● Saat terjadi error di PHP, biasanya kita akan menggunakan try catch
    ● Lalu dalam catch kita akan menangkap error dan menyimpannya dalam variable exception
    ● Walaupun sebenarnya tidak kita gunakan, kita tetap harus membuat variable exception nya
    ● Di PHP 8, sekarang kita tidak wajib membuat variable exception nya jika memang tidak akan
    menggunakannya
    ● https://wiki.php.net/rfc/non-capturing_catches
 */

function validate(string $name) {
    if(trim($name) == ""){
        throw new Exception("Invalid Name");
    }
}

try {
    validate("    ");
} catch(Exception){ //diphp 7 ketika catch harus ada variabel seperti catch(Exception $exception)
    echo "Invalid Name". PHP_EOL;
}