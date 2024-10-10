<?php
function hitungAngkaSpesial($n) {
    // Array untuk menyimpan jumlah pembagi
    $jumlahPembagi = array_fill(0, $n + 1, 0);
    $jumlahSpesial = 0;

    // Hitung jumlah pembagi untuk setiap angka
    for ($i = 1; $i <= $n; $i++) {
        for ($j = $i; $j <= $n; $j += $i) {
            $jumlahPembagi[$j]++;
        }
    }

    // Periksa angka spesial dan tampilkan
    for ($i = 1; $i <= $n; $i++) {
        if ($jumlahPembagi[$i] % 2 == 0) {
            $jumlahSpesial++;
            // echo "Angka $i adalah angka spesial dengan $jumlahPembagi[$i] pembagi.\n";
        }
    }

    // Output jumlah angka spesial
    echo "Total terdapat $jumlahSpesial angka antara 1 dan $n yang memiliki jumlah pembagi genap.\n";
}

// Contoh penggunaan:
$jumlah = 999; // Ubah nilai ini untuk menguji dengan N yang lebih besar
hitungAngkaSpesial($jumlah);
?>
