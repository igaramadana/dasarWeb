<!DOCTYPE html>
<html>
    <head>
        <title>Unggah File Dokumen</title>
    </head>
    <body>
        <form action="upload_ajax.php" id="upload-form" method="post" enctype="multipart/form-data">
        <input type="file" name="files[]" multiple="multiple" id="file"><br><br>
        <input type="submit" name="submit" value="Unggah">
        </form>
        <div id="status"></div>
        
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="upload.js"></script>
    </body>
</html>