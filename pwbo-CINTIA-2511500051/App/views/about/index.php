<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Halaman About</title>
</head>
<body>
    <h1>About me</h1>

    <?php
    $nama = $data['nama'] ?? '';
    $pekerjaan = $data['pekerjaan'] ?? '';
    ?>

    <p>
        Hallo, nama saya <?php echo $nama; ?>,
        saya adalah seorang <?php echo $pekerjaan; ?>
    </p>
</body>
</html>