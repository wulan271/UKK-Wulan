<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hai ini adalah biodata saya</h1>
    <a herf="<?= base_url('profile/tambah_data') ?>"> ~ Tamabah Data ~ </a>
    <p>Nama Depan : <?= $nama_depan ?></p>
    <p>Nama Belakang :<?= $namabe_lakang ?></p>
    <p>Tempat Lahir :<?= $temapat_lahir ?></p>
    <p>Tanggal Lahir :<?= $tanggal_lahir ?></p>
    <p>jenis kelamin :<?= $jenis_kelamin ?></p>
    <p>Alamat :<?= $alamat ?></p>
    <p>Jeng pendidikan:<?= $jenjang_pendidikan ?></p>
</body>

</html>