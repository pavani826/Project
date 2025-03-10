<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['file'])) {
    $upload_dir = "PHP/";
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }
    $upload_file = $upload_dir . basename($_FILES["file"]["name"]);
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $upload_file)) {
        echo "File uploaded successfully: " . $upload_file;
    } else {
        echo "File upload failed.";
    }
}
?>
<!DOCTYPE html>
<html>
<body>
    <form action="fileupload.php" method="post" enctype="multipart/form-data">
        Select file to upload:
        <input type="file" name="file">
        <input type="submit" value="Upload File">
    </form>
</body>
</html>