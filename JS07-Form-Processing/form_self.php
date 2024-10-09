<!DOCTYPE html>
<html>
    <head>
        <title>Form Input PHP</title>
    </head>
    <body>
        <h2>Form Input PHP</h2>
        <?php 
            // inisialisai variabel
            $namaErr = "";
            $nama = "";

            // cek apakah form sudah disubmit
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Validasi nama (contoh: pastikan nama tidak kosong)
                if (empty($_POST["nama"])) {
                    $namaErr = "Nama harus diisi!";
                } else {
                    $nama = $_POST["nama"];
                    echo "Data berhasil disimpan";
                }
            }
        ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="nama">Nama:</label>
            <input type="tex" name="nama" id="nama" value="<?php echo $nama;?>">
            <span class="error"><?php $namaErr;?></span>

            <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>