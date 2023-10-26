<!DOCTYPE html>
<html>
<head>
    <title>Tambah Buku</title>
</head>
<body>
    <form action="<?php echo site_url('Tambah_buku/tambah');?>" method="post">
        Judul: <input type="text" name="judul"><br>
        Pengarang: <input type="text" name="pengarang"><br>
        Penerbit: <input type="text" name="penerbit"><br>
        Tahun Terbit: <input type="text" name="tahun_terbit"><br>
        Status: <input type="text" name="status"><br>
        <input type="submit" value="Tambah Buku">
    </form>
</body>
</html>
