<?php

function palindromeCheck($word, $start = 0, $end = null) {
    // Menentukan posisi akhir jika belum ada
    if ($end === null) {
        $end = strlen($word) - 1;
    }

    // Basis: jika mulai bertemu dengan titik tengah, kata adalah palindrome
    if ($start >= $end) {
        return "kata tersebut palindrom !";
    }

    // Jika karakter di posisi start dan end berbeda, bukan palindrome
    if ($word[$start] !== $word[$end]) {
        return "kata tersebut Tidak palindrom !";
    }

    // Rekursi untuk karakter berikutnya
    return palindromeCheck($word, $start + 1, $end - 1);
}

echo palindromeCheck("TENET");

?>
