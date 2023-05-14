<h2>List Kontak</h2>
<table border="1">
    <tr><th>ID</th><th>NAMA</th><th>JENIS KELAMIN</th><th>EMAIL</th><th>ALAMAT</th><th>KOTA</th><th>PESAN</th></tr>
    <?php
    include 'koneksi.php';
    $kontak = mysqli_query($koneksi, "SELECT * from kontak");
    foreach ($kontak as $row){
        $jenis_kelamin = $row['jkel']=='P'?'Perempuan':'Laki Laki';
        echo "<tr>
            <td>".$row['id']."</td>
            <td>".$row['nama']."</td>
            <td>".$jenis_kelamin."</td>
            <td>".$row['email']."</td>
            <td>".$row['alamat']."</td>
            <td>".$row['kota']."</td>
            <td>".$row['pesan']."</td>
                </tr>";
    }
    ?>
</table>