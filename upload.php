<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['fileToUpload'])) {
    $currentDir = dirname(__FILE__);
    $previousDir = dirname($currentDir);
    $targetFile = $previousDir . '/' . basename($_FILES['fileToUpload']['name']);
    move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $targetFile);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Upload File</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        Select a file to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload File" name="submit">
    </form>
</body>
</html>
