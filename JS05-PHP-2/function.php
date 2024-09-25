<?php 
    function perkenalan($nama, $salam="Assalamualaikum") {
        echo $salam.", ";
        echo "Perkenalkan, nama saya ".$nama."<br/>";
        echo "Senang berkenalan dengan anda<br/>";
    }
    // Memanggil fungsi yang dibuat
    perkenalan("Iga", "Hallo");

    echo "<hr>";

    $saya = "Iga";
    $ucapanSalam = "Selamat pagi";

    // memanggil lagi
    perkenalan($saya);
?>