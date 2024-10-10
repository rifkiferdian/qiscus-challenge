<?php
function hitungPembagi($n) {
    $jumlahSpesial = 0;

    // Loop melalui setiap angka dari 1 hingga N
    for ($i = 1; $i <= $n; $i++) {
        $jumlahPembagi = 0;

        // Temukan pembagi dari angka i
        for ($j = 1; $j <= sqrt($i); $j++) {
            if ($i % $j == 0) {
                $jumlahPembagi++;
                // Periksa jika j bukan akar kuadrat dari i
                if ($j != $i / $j) {
                    $jumlahPembagi++;
                }
            }
        }

        // Periksa apakah jumlah pembagi genap
        if ($jumlahPembagi % 2 == 0) {
            $jumlahSpesial++;
        }
    }

    // Tampilkan jumlah angka spesial
    echo "Terdapat $jumlahSpesial angka spesial antara 1 dan $n.\n";
}

// Contoh penggunaan:
$jumlah = 10;
hitungPembagi($jumlah);
?>
