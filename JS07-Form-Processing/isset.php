<?php 
    $umur;
    if (isset($umur) && $umur >= 10) {
        echo "Anda sudah dewasa.";
    } else {
        echo "Anda belum dewasa atau variabel 'umur' tidak ditemukan.<br><br>";
    }

    $data = array("nama" => "Jane", "Usia" => 25);
    if (isset($data["nama"])) {
        echo "Nama: " . $data["nama"];
    } else {
        echo "Variabel 'nama' tidak ditemukan dalam array.";
    }
?>