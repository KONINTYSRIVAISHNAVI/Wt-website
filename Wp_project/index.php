<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload and Download</title>
</head>
<body>
    <h2>Upload Files</h2>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file" required><br><br>
        <button type="submit" name="upload" style="width:30%;height:20%;color:blue">Upload</button>
    </form>
</body>
</html>