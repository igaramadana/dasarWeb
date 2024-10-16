<?php 
    if (isset($_POST["submit"])) {
        $targetDirectory = "uploads/"; //Direktori tujuan untuk menyimpan file
        $targetFile = $targetDirectory. basename($_FILES["fileToUpload"]["name"]);
        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        $allowedExtensions = array("jpg", "jpeg", "png", "gif");

        $maxFileSize = 5 * 1024 * 1024;
        
        if (in_array($fileType, $allowedExtensions) && $_FILES["fileToUpload"]["size"] <= $maxFileSize) {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
                // Menambahkan script langkah 5 untuk membuat file gambar thumbnail dengan lebar 200px dan tinggi mengikuti perubahan otomatis
                $thumbnailWidth = 200;

                list($originalWidth, $originalHeight) = getimagesize($targetFile);
                $thumbnailHeight = ($originalHeight / $originalWidth) * $thumbnailWidth;

                $thumbnail = imagecreatetruecolor($thumbnailWidth, $thumbnailHeight);

                // Membuka file gambar asli
                switch ($fileType) {
                    case 'jpg':
                    case 'jpeg':
                        $sourceImage = imagecreatefromjpeg($targetFile);
                        break;
                    case 'png':
                        $sourceImage = imagecreatefrompng($targetFile);
                        break;
                    case 'gif':
                        $sourceImage = imagecreatefromgif($targetFile);
                        break;
                    default:
                        echo "Format file tidak didukung.";
                        exit;
                }

                // Menyalin dan mengubah ukuran gambar ke thumbnail
                imagecopyresampled($thumbnail, $sourceImage, 0, 0, 0, 0, $thumbnailWidth, $thumbnailHeight, $originalWidth, $originalHeight);

                // Menyimpan thumbnail
                $thumbnailPath = $targetDirectory . 'thumb_' . basename($targetFile);
                switch ($fileType) {
                    case 'jpg':
                    case 'jpeg':
                        imagejpeg($thumbnail, $thumbnailPath);
                        break;
                    case 'png':
                        imagepng($thumbnail, $thumbnailPath);
                        break;
                    case 'gif':
                        imagegif($thumbnail, $thumbnailPath);
                        break;
                }

                // Membersihkan memori
                imagedestroy($thumbnail);
                imagedestroy($sourceImage);
                echo "File berhasil diunggah, thumbnail berhasil dibuat.";
            } else {
                echo "Gagal mengunggah file.";
            }
        } else {
            echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan.";
        }
    }
?>