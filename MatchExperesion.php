<?php
/*
 * Match Expression
    ● PHP 8 menambahkan struktur kontrol baru bernama match expression
    ● Match expression adalah struktur kontrol yang mirip dengan switch case, namun lebih baik
    ● Match adalah expression, artinya dia bisa mengembalikan value
    ● https://wiki.php.net/rfc/match_expression_v2
    ● https://www.php.net/manual/en/control-structures.match.php
 */

$value = "E";

$result = "";
switch ($value) {
    case "A" :
    case "B" :
    case "C" :
        $result = "Anda Lulus";
        break;
    case "D" :
        $result = "Anda Tidak Lulus";
        break;
    case "E" :
        $result = "Sepertinya anda salah jurusan";
        break;
    default :
        $result = "Nilai Apa itu?";
}

echo $result. PHP_EOL;

//match expression cocok untuk yg sederhana ini mirip ternary operator
$resultMatch = match($value) {
    "A", "B", "C" => "Anda Lulus",
    "D" => "Anda Tidak Lulus",
    "E" => "Sepertinya anda salah jurusan",
    default => "Nilai Apa itu?"
};

echo $resultMatch. PHP_EOL;

/*
 * Non Equals Check di Match Expression
    ● Selain equals check, berbeda dengan switch case, di match expression, kita bisa melakukan
    pengecekan kondisi lainnya
    ● Misal pengecekan menggunakan kondisi perbandingan, bahkan pengecekan kondisi berdasarkan
    boolean expression yang dihasilkan dari sebuah function
 */
$value  = 80;

//entah memamnggil function atau perbandingan sleagi returnnya boolean maka match ini bisa digunakan
$result = match(true) {
    $value >= 80 => "A",
    $value >= 70 => "B",
    $value >= 60 => "C",
    $value >= 50 => "D",
    default => "E"
};

echo $result. PHP_EOL;

$name = "Mrs. Nani";

$result = match(true) {
    str_contains($name, "Mr.") => "Hello Sir",
    str_contains($name, "Mrs.") => "Hello Mam",
    default => "Hello"
};

echo $result. PHP_EOL;