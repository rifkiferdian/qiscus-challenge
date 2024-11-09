<?php

function jumlahAntaraPemilah($input, $jumlahPemilah) {
    // Ubah string input menjadi array angka
    $angka = str_split($input);

    // Hitung panjang angka dalam input
    $panjang = count($angka);
    
    // Jika jumlah pemilah tidak bisa muat dalam string angka, return 0
    if ($jumlahPemilah >= $panjang) {
        return 0;
    }
    
    // Jika jumlah pemilah 1, return jumlah semua angka
    if ($jumlahPemilah == 1) {
        return array_sum($angka);
    }

    // Tentukan posisi untuk pemilah
    $indeksPemilah = [];
    $indeksPemilah[] = 0; // Posisi pertama
    $indeksPemilah[] = $panjang - 1; // Posisi terakhir

    // Jika perlu lebih banyak pemilah, distribusikan di tengah
    if ($jumlahPemilah > 2) {
        $interval = ($panjang - 1) / ($jumlahPemilah - 1);

        for ($i = 1; $i < $jumlahPemilah - 1; $i++) {
            $indeksPemilah[] = round($i * $interval);
        }
    }

    // Urutkan indeks pemilah
    sort($indeksPemilah);

    // Hitung jumlah angka di antara pemilah
    $jumlah = 0;
    for ($i = 0; $i < $panjang; $i++) {
        if (!in_array($i, $indeksPemilah)) {
            $jumlah += $angka[$i];
        }
    }

    return $jumlah;
}

// Contoh kasus
echo jumlahAntaraPemilah("1234567", 3) . "\n";        // Output: 16
echo jumlahAntaraPemilah("123456789", 3) . "\n";      // Output: 30
echo jumlahAntaraPemilah("123456789", 9) . "\n";      // Output: 0
echo jumlahAntaraPemilah("123", 1) . "\n";            // Output: 6

?>
