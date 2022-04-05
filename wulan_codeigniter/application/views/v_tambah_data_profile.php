<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<body>
    <div class="container">
       <div class="row justify-content-md-conter">
         <div class=""
    
    <h1>Tambah Data</h1>
    <form action="<?= base_url('profile/action_tambah_data') ?>" method="post">
        <table>
            <tr>
                <td>Nama Depan</td>
                <td>:</td>
                <td><input type="text" name="nama_depan" class="form-control"></td>
            </tr>
            <tr>
                <td>Nama Belakang</td>
                <td>:</td>
                <td><input type="text" name="nama_belakang" class="form-control"></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><input type="text" name="tempat_lahir" class="form-control"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type="date" name="tanggal_lahir" class="form-control"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <input type="radio" name="jenis_kelamin" value="L">L
                    <input type="radio" name="jenis_kelamin" value="P">P
                </td>
            </tr>
            <tr>
            <td>Alamat</td>
                <td>:</td>
                <td><textarea type="text" name="alamat" class="from-control"></textarea></td>
            </tr>
            <tr>
            <td>Jenjang pendidikan</td>
                <td>:</td>
                <td>
                    <select name="jenjang_pendidikan" id="" class="from-control">
                        <option value="smk">SMK Sederajat</option>
                        <option value="D3">D3</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="3"><hr></td>
            </tr>
            <tr>
                <td colspan="3" class="text-center">
                    <button type="submit" class="btn btn-primary"> simpan </button>
                    <a href="" class="btn btn-warning">kembali</a> 
                </td>
            </tr>
        </table>         
                