<!DOCTYPE html>
<html>
    <head>
        <title>Document Upload</title>
    </head>
    <body>
        <form action="upload_document.php" method="post" enctype="multipart/form-data">
            <input type="file" name="documentToUpload" id="documentToUpload"><br><br>
            <input type="submit" value="Upload File" name="submit">
        </form>
    </body>
</html>