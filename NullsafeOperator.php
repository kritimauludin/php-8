<?php
/*
 * Nullsafe Operator
    ● PHP sekarang memiliki nullsafe operator seperti di bahasa pemrograman Kotlin atau TypeScript
    ● Biasanya ketika kita ingin mengakses sesuatu dari sebuah object yang bisa memungkinan nilai null,
    maka kita akan melakukan pengecekan apakah object tersebut null atau tidak, jika tidak baru kita
    akses object tersebut
    ● Dengan nullsafe operator, kita tidak perlu melakukan itu, kita hanya perlu menggunakan karakter ?
    (tanda tanya), secara otomatis PHP akan melakukan pengecekan null tersebut
    ● https://wiki.php.net/rfc/nullsafe_operator
 */

 class Address {
    public ?string $country;
 }

 class User {
    public ?Address $address;
 }

function getCountry(?User $user): ?string {
    //manual null check
    // if($user != null){
    //     if($user->address != null){
    //         return $user->address->country;
    //     }
    // }
    // return null;

    //nullsafe operator dengan keyword ? diobjek yg bisa null
    return $user?->address?->country;
}

echo getCountry(null). PHP_EOL;