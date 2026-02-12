<?php
if (isset($_POST['upload'])) {

    $uploadDir = "uploads/";
    $fileName = basename($_FILES["file"]["name"]);
    $targetFile = $uploadDir . $fileName;

    if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
        echo "<h3>File uploaded successfully!</h3>";
        echo "<a href='download.php?file=$fileName'>
                <button>Download File</button>
              </a>";
    } else {
        echo "File upload failed!";
    }
}
?>