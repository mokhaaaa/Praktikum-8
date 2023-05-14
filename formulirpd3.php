<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>


    <style>
        .warning {
            color: #FF0000;
        }
    </style>
</head>

<body>

    <?php
    $error_nama_ayah = "";
    $error_tahun_lahir_ayah = "";
    $error_pendidikan_ayah = "";
    $error_pekerjaan_ayah = "";
    $error_penghasilan_bulanan_ayah = "";
    $error_berkebutuhan_khusus_ayah = "";
    $error_nama_ibu = "";
    $error_tahun_lahir_ibu = "";
    $error_pendidikan_ibu = "";
    $error_pekerjaan_ibu = "";
    $error_penghasilan_bulanan_ibu = "";
    $error_berkebutuhan_khusus_ibu = "";

    $nama_ayah = "";
    $tahun_lahir_ayah = "";
    $pendidikan_ayah = "";
    $pekerjaan_ayah = "";
    $penghasilan_bulanan_ayah = "";
    $berkebutuhan_khusus_ayah = "";
    $nama_ibu = "";
    $tahun_lahir_ibu = "";
    $pendidikan_ibu = "";
    $pekerjaan_ibu = "";
    $penghasilan_bulanan_ibu = "";
    $berkebutuhan_khusus_ibu = "";
    $alert_message = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["nama_ayah"])) {
            $error_nama_ayah = "Nama tidak boleh kosong";
        } else {
            $nama_ayah = cek_input($_POST["nama_ayah"]);
            if (!preg_match("/^[a-zA-Z ]*$/", $nama_ayah)) {
                $error_nama_ayah = "Inputan Hanya boleh huruf dan spasi";
            }
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["tahun_lahir_ayah"])) {
            $error_tahun_lahir_ayah = "Tahun lahir tidak boleh kosong";
        } else {
            $tahun_lahir_ayah = cek_input($_POST["tahun_lahir_ayah"]);
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["pendidikan_ayah"])) {
            $error_pendidikan_ayah = "Pilih salah satu pendidikan";
        } else {
            $pendidikan_ayah = cek_input($_POST["pendidikan_ayah"]);
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["pekerjaan_ayah"])) {
            $error_pekerjaan_ayah = "Pilih salah satu pekerjaan";
        } else {
            $pekerjaan_ayah = cek_input($_POST["pekerjaan_ayah"]);
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["penghasilan_bulanan_ayah"])) {
            $error_penghasilan_bulanan_ayah = "Pilih salah satu penghasilan bulanan";
        } else {
            $penghasilan_bulanan_ayah = cek_input($_POST["penghasilan_bulanan_ayah"]);
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["berkebutuhan_khusus_ayah"])) {
            $error_berkebutuhan_khusus_ayah = "Pilih salah satu";
        } else {
            $berkebutuhan_khusus_ayah = cek_input($_POST["berkebutuhan_khusus_ayah"]);
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["nama_ibu"])) {
            $error_nama_ibu = "Nama tidak boleh kosong";
        } else {
            $nama_ibu = cek_input($_POST["nama_ibu"]);
            if (!preg_match("/^[a-zA-Z ]*$/", $nama_ibu)) {
                $error_nama_ibu = "Inputan Hanya boleh huruf dan spasi";
            }
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["tahun_lahir_ibu"])) {
            $error_tahun_lahir_ibu = "Tahun lahir tidak boleh kosong";
        } else {
            $tahun_lahir_ibu = cek_input($_POST["tahun_lahir_ibu"]);
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["pendidikan_ibu"])) {
            $error_pendidikan_ibu = "Pilih salah satu pendidikan";
        } else {
            $pendidikan_ibu = cek_input($_POST["pendidikan_ibu"]);
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["pekerjaan_ibu"])) {
            $error_pekerjaan_ibu = "Pilih salah satu pekerjaan";
        } else {
            $pekerjaan_ibu = cek_input($_POST["pekerjaan_ibu"]);
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["penghasilan_bulanan_ibu"])) {
            $error_penghasilan_bulanan_ibu = "Pilih salah satu penghasilan bulanan";
        } else {
            $penghasilan_bulanan_ibu = cek_input($_POST["penghasilan_bulanan_ibu"]);
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["berkebutuhan_khusus_ibu"])) {
            $error_berkebutuhan_khusus_ibu = "Pilih salah satu";
        } else {
            $berkebutuhan_khusus_ibu = cek_input($_POST["berkebutuhan_khusus_ibu"]);
        }
    }
    function cek_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    include 'koneksi.php'; // file yang berisi koneksi ke database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan data dari form
    $nama_ayah = $_POST['nama_ayah'];
    $tahun_lahir_ayah = $_POST['tahun_lahir_ayah'];
    $pendidikan_ayah = $_POST['pendidikan_ayah'];
    $pekerjaan_ayah = $_POST['pekerjaan_ayah'];
    $penghasilan_bulanan_ayah = $_POST['penghasilan_bulanan_ayah'];
    $berkebutuhan_khusus_ayah = $_POST['berkebutuhan_khusus_ayah'];
    $nama_ibu = $_POST['nama_ibu'];
    $tahun_lahir_ibu = $_POST['tahun_lahir_ibu'];
    $pendidikan_ibu = $_POST['pendidikan_ibu'];
    $pekerjaan_ibu = $_POST['pekerjaan_ibu'];
    $penghasilan_bulanan_ibu = $_POST['penghasilan_bulanan_ibu'];
    $berkebutuhan_khusus_ibu = $_POST['berkebutuhan_khusus_ibu'];
 
    // Dapatkan ID terbaru dari database
    $query_id = "SELECT MAX(id) AS id_terbaru FROM peserta_didik";
    $result_id = mysqli_query($koneksi, $query_id);
    $row_id = mysqli_fetch_assoc($result_id);
    $id_terbaru = $row_id['id_terbaru'];

    // Query SQL untuk update data menggunakan id
    $query = "UPDATE peserta_didik SET
            nama_ayah = '$nama_ayah',
            tahun_lahir_ayah = '$tahun_lahir_ayah',
            pendidikan_ayah = '$pendidikan_ayah',
            pekerjaan_ayah = '$pekerjaan_ayah',
            penghasilan_bulanan_ayah = '$penghasilan_bulanan_ayah',
            berkebutuhan_khusus_ayah = '$berkebutuhan_khusus_ayah',
            nama_ibu = '$nama_ibu',
            tahun_lahir_ibu = '$tahun_lahir_ibu',
            pendidikan_ibu = '$pendidikan_ibu',
            pekerjaan_ibu = '$pekerjaan_ibu',
            penghasilan_bulanan_ibu = '$penghasilan_bulanan_ibu',
            berkebutuhan_khusus_ibu = '$berkebutuhan_khusus_ibu'
        WHERE id = $id_terbaru";
        // Jalankan query SQL
    if (mysqli_query($koneksi, $query)) {
        // Data berhasil disimpan
        $alert_message = "Data berhasil disimpan";
    } else {
        // Terjadi kesalahan saat menyimpan data
        $alert_message = "Terjadi kesalahan saat menyimpan data";
    }
}
    ?>
    <!-- Tampilan inputan form peserta didik part 3 -->
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header text-black text-center">
                    <h3 class="mb-0">FORMULIR PESERTA DIDIK</h3>
                    <br>
                    <div class="text-right">
                        <?php
                        $tanggal = date('d F Y');
                        echo "Tanggal: " . $tanggal;
                        ?>
                    </div>
                </div>
                <div class="card-header bg-dark text-white text-center">
                    Data Ayah Kandung
                </div>
                <div class="card-body">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <div class="form-group row">
                            <label for="nama_ayah" class="col-sm-2 col-form-label">Nama Ayah</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama_ayah"
                                    class="form-control <?php echo ($error_nama_ayah != "" ? "is-invalid" : ""); ?>"
                                    id="nama_ayah" placeholder="Nama Ayah" value="<?php echo $nama_ayah; ?>">
                                <?php if ($error_nama_ayah != ""): ?>
                                    <div class="invalid-feedback">
                                        <?php echo $error_nama_ayah; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tahun_lahir_ayah" class="col-sm-2 col-form-label">Tahun Lahir</label>
                            <div class="col-sm-10">
                                <input type="text" name="tahun_lahir_ayah"
                                    class="form-control <?php echo ($error_tahun_lahir_ayah != "" ? "is-invalid" : ""); ?>"
                                    id="tahun_lahir_ayah" placeholder="Tahun Lahir"
                                    value="<?php echo $tahun_lahir_ayah; ?>">
                                <?php if ($error_tahun_lahir_ayah != ""): ?>
                                    <div class="invalid-feedback">
                                        <?php echo $error_tahun_lahir_ayah; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pendidikan_ayah" class="col-sm-2 col-form-label">Pendidikan</label>
                            <div class="col-sm-10">
                                <select name="pendidikan_ayah"
                                    class="form-control <?php echo ($error_pendidikan_ayah != "" ? "is-invalid" : ""); ?>"
                                    id="pendidikan_ayah">
                                    <option value="">Pilih Pendidikan</option>
                                    <option value="Tidak Sekolah" <?php echo ($pendidikan_ayah == "Tidak Sekolah" ? "selected" : ""); ?>>Tidak Sekolah</option>
                                    <option value="Putus SD" <?php echo ($pendidikan_ayah == "Putus SD" ? "selected" : ""); ?>>Putus SD</option>
                                    <option value="SD Sederajat" <?php echo ($pendidikan_ayah == "SD Sederajat" ? "selected" : ""); ?>>SD Sederajat</option>
                                    <option value="SMP Sederajat" <?php echo ($pendidikan_ayah == "SMP Sederajat" ? "selected" : ""); ?>>SMP Sederajat</option>
                                    <option value="SMA Sederajat" <?php echo ($pendidikan_ayah == "SMA Sederajat" ? "selected" : ""); ?>>SMA Sederajat</option>
                                    <option value="D1" <?php echo ($pendidikan_ayah == "D1" ? "selected" : ""); ?>>D1
                                    </option>
                                    <option value="D2" <?php echo ($pendidikan_ayah == "D2" ? "selected" : ""); ?>>D2
                                    </option>
                                    <option value="D3" <?php echo ($pendidikan_ayah == "D3" ? "selected" : ""); ?>>D3
                                    </option>
                                    <option value="D4/S1" <?php echo ($pendidikan_ayah == "D4/S1" ? "selected" : ""); ?>>
                                        D4/S1</option>
                                    <option value="S2" <?php echo ($pendidikan_ayah == "S2" ? "selected" : ""); ?>>S2
                                    </option>
                                    <option value="S3" <?php echo ($pendidikan_ayah == "S3" ? "selected" : ""); ?>>S3
                                    </option>
                                </select>
                                <?php if ($error_pendidikan_ayah != ""): ?>
                                    <span class="invalid-feedback">
                                        <?php echo $error_pendidikan_ayah; ?>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pekerjaan_ayah" class="col-sm-2 col-form-label">Pekerjaan</label>
                            <div class="col-sm-10">
                                <select name="pekerjaan_ayah"
                                    class="form-control <?php echo ($error_pekerjaan_ayah != "" ? "is-invalid" : ""); ?>"
                                    id="pekerjaan_ayah">
                                    <option value="">Pilih Pekerjaan</option>
                                    <option value="Tidak Bekerja" <?php echo ($pekerjaan_ayah == "Tidak Bekerja" ? "selected" : ""); ?>>Tidak Bekerja</option>
                                    <option value="Nelayan" <?php echo ($pekerjaan_ayah == "Nelayan" ? "selected" : ""); ?>>Nelayan</option>
                                    <option value="Petani" <?php echo ($pekerjaan_ayah == "Petani" ? "selected" : ""); ?>>
                                        Petani</option>
                                    <option value="Peternak" <?php echo ($pekerjaan_ayah == "Peternak" ? "selected" : ""); ?>>Peternak</option>
                                    <option value="PNS/TNI/POLRI" <?php echo ($pekerjaan_ayah == "PNS/TNI/POLRI" ? "selected" : ""); ?>>PNS/TNI/POLRI</option>
                                    <option value="Karyawan Swasta" <?php echo ($pekerjaan_ayah == "Karyawan Swasta" ? "selected" : ""); ?>>Karyawan Swasta</option>
                                    <option value="Pedagang Kecil" <?php echo ($pekerjaan_ayah == "Pedagang Kecil" ? "selected" : ""); ?>>Pedagang Kecil</option>
                                    <option value="Pedagang Besar" <?php echo ($pekerjaan_ayah == "Pedagang Besar" ? "selected" : ""); ?>>Pedagang Besar</option>
                                    <option value="Wiraswasta" <?php echo ($pekerjaan_ayah == "Wiraswasta" ? "selected" : ""); ?>>Wiraswasta</option>
                                    <option value="Wirausaha" <?php echo ($pekerjaan_ayah == "Wirausaha" ? "selected" : ""); ?>>Wirausaha</option>
                                    <option value="Buruh" <?php echo ($pekerjaan_ayah == "Buruh" ? "selected" : ""); ?>>
                                        Buruh</option>
                                    <option value="Pensiunan" <?php echo ($pekerjaan_ayah == "Pensiunan" ? "selected" : ""); ?>>Pensiunan</option>
                                    <option value="Lain-lain" <?php echo ($pekerjaan_ayah == "Lain-lain" ? "selected" : ""); ?>>Lain-lain</option>
                                </select>
                                <?php if ($error_pekerjaan_ayah != ""): ?>
                                    <span class="invalid-feedback">
                                        <?php echo $error_pekerjaan_ayah; ?>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="penghasilan_bulanan_ayah" class="col-sm-2 col-form-label">Penghasilan
                                Bulanan</label>
                            <div class="col-sm-10">
                                <select name="penghasilan_bulanan_ayah"
                                    class="form-control <?php echo ($error_penghasilan_bulanan_ayah != "" ? "is-invalid" : ""); ?>"
                                    id="penghasilan_bulanan_ayah">
                                    <option value="">Pilih Penghasilan Bulanan</option>
                                    <option value="Kurang dari 500.000" <?php echo ($penghasilan_bulanan_ayah == "Kurang dari 500.000" ? "selected" : ""); ?>>Kurang dari 500.000</option>
                                    <option value="500.000 - 999.999" <?php echo ($penghasilan_bulanan_ayah == "500.000 - 999.999" ? "selected" : ""); ?>>500.000 - 999.999</option>
                                    <option value="1 Juta - 1.999.999" <?php echo ($penghasilan_bulanan_ayah == "1 Juta - 1.999.999" ? "selected" : ""); ?>>1 Juta - 1.999.999</option>
                                    <option value="2 Juta - 4.999.999" <?php echo ($penghasilan_bulanan_ayah == "2 Juta - 4.999.999" ? "selected" : ""); ?>>2 Juta - 4.999.999</option>
                                    <option value="5 Juta - 20 Juta" <?php echo ($penghasilan_bulanan_ayah == "5 Juta - 20 Juta" ? "selected" : ""); ?>>5 Juta - 20 Juta</option>
                                    <option value="Lebih dari 20 Juta" <?php echo ($penghasilan_bulanan_ayah == "Lebih dari 20 Juta" ? "selected" : ""); ?>>Lebih dari 20 Juta</option>
                                </select>
                                <?php if ($error_penghasilan_bulanan_ayah != ""): ?>
                                    <span class="invalid-feedback">
                                        <?php echo $error_penghasilan_bulanan_ayah; ?>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="berkebutuhan_khusus_ayah" class="col-sm-2 col-form-label">Berkebutuhan
                                Khusus</label>
                            <div class="col-sm-10">
                                <select name="berkebutuhan_khusus_ayah"
                                    class="form-control <?php echo ($error_berkebutuhan_khusus_ayah != "" ? "is-invalid" : ""); ?>"
                                    id="berkebutuhan_khusus_ayah">
                                    <option value="">Pilih Berkebutuhan Khusus</option>
                                    <option value="Tidak" <?php echo ($berkebutuhan_khusus_ayah == "Tidak" ? "selected" : ""); ?>>Tidak</option>
                                    <option value="Netra" <?php echo ($berkebutuhan_khusus_ayah == "Netra" ? "selected" : ""); ?>>Netra</option>
                                    <option value="Rungu" <?php echo ($berkebutuhan_khusus_ayah == "Rungu" ? "selected" : ""); ?>>Rungu</option>
                                    <option value="Grahita Ringan" <?php echo ($berkebutuhan_khusus_ayah == "Grahita Ringan" ? "selected" : ""); ?>>Grahita Ringan</option>
                                    <option value="Grahita Sedang" <?php echo ($berkebutuhan_khusus_ayah == "Grahita Sedang" ? "selected" : ""); ?>>Grahita Sedang</option>
                                    <option value="Daksa Ringan" <?php echo ($berkebutuhan_khusus_ayah == "Daksa Ringan" ? "selected" : ""); ?>>Daksa Ringan</option>
                                    <option value="Daksa Sedang" <?php echo ($berkebutuhan_khusus_ayah == "Daksa Sedang" ? "selected" : ""); ?>>Daksa Sedang</option>
                                    <option value="Laras" <?php echo ($berkebutuhan_khusus_ayah == "Laras" ? "selected" : ""); ?>>Laras</option>
                                    <option value="Wicara" <?php echo ($berkebutuhan_khusus_ayah == "Wicara" ? "selected" : ""); ?>>Wicara</option>
                                    <option value="Tuna Ganda" <?php echo ($berkebutuhan_khusus_ayah == "Tuna Ganda" ? "selected" : ""); ?>>Tuna Ganda</option>
                                    <option value="Hiper Aktif" <?php echo ($berkebutuhan_khusus_ayah == "Hiper Aktif" ? "selected" : ""); ?>>Hiper Aktif</option>
                                    <option value="Cerdas Istimewa" <?php echo ($berkebutuhan_khusus_ayah == "Cerdas Istimewa" ? "selected" : ""); ?>>Cerdas Istimewa</option>
                                    <option value="Bakat Istimewa" <?php echo ($berkebutuhan_khusus_ayah == "Bakat Istimewa" ? "selected" : ""); ?>>Bakat Istimewa</option>
                                    <option value="Kesulitan Belajar" <?php echo ($berkebutuhan_khusus_ayah == "Kesulitan Belajar" ? "selected" : ""); ?>>Kesulitan Belajar</option>
                                    <option value="Narkoba" <?php echo ($berkebutuhan_khusus_ayah == "Narkoba" ? "selected" : ""); ?>>Narkoba</option>
                                    <option value="Indigo" <?php echo ($berkebutuhan_khusus_ayah == "Indigo" ? "selected" : ""); ?>>Indigo</option>
                                    <option value="Down Sindrome" <?php echo ($berkebutuhan_khusus_ayah == "Down Sindrome" ? "selected" : ""); ?>>Down Sindrome</option>
                                    <option value="Autis" <?php echo ($berkebutuhan_khusus_ayah == "Autis" ? "selected" : ""); ?>>Autis</option>
                                </select>
                                <?php if ($error_berkebutuhan_khusus_ayah != ""): ?>
                                    <span class="invalid-feedback">
                                        <?php echo $error_berkebutuhan_khusus_ayah; ?>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header bg-dark text-white text-center">
                    Data Ibu Kandung
                </div>
                <div class="card-body">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <div class="form-group row">
                            <label for="nama_ibu" class="col-sm-2 col-form-label">Nama Ibu</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama_ibu"
                                    class="form-control <?php echo ($error_nama_ibu != "" ? "is-invalid" : ""); ?>"
                                    id="nama_ibu" placeholder="Nama Ibu" value="<?php echo $nama_ibu; ?>">
                                <?php if ($error_nama_ibu != ""): ?>
                                    <div class="invalid-feedback">
                                        <?php echo $error_nama_ibu; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tahun_lahir_ibu" class="col-sm-2 col-form-label">Tahun Lahir</label>
                            <div class="col-sm-10">
                                <input type="text" name="tahun_lahir_ibu"
                                    class="form-control <?php echo ($error_tahun_lahir_ibu != "" ? "is-invalid" : ""); ?>"
                                    id="tahun_lahir_ibu" placeholder="Tahun Lahir"
                                    value="<?php echo $tahun_lahir_ibu; ?>">
                                <?php if ($error_tahun_lahir_ibu != ""): ?>
                                    <div class="invalid-feedback">
                                        <?php echo $error_tahun_lahir_ibu; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pendidikan_ibu" class="col-sm-2 col-form-label">Pendidikan</label>
                            <div class="col-sm-10">
                                <select name="pendidikan_ibu"
                                    class="form-control <?php echo ($error_pendidikan_ibu != "" ? "is-invalid" : ""); ?>"
                                    id="pendidikan_ibu">
                                    <option value="">Pilih Pendidikan</option>
                                    <option value="Tidak Sekolah" <?php echo ($pendidikan_ibu == "Tidak Sekolah" ? "selected" : ""); ?>>Tidak Sekolah</option>
                                    <option value="Putus SD" <?php echo ($pendidikan_ibu == "Putus SD" ? "selected" : ""); ?>>Putus SD</option>
                                    <option value="SD Sederajat" <?php echo ($pendidikan_ibu == "SD Sederajat" ? "selected" : ""); ?>>SD Sederajat</option>
                                    <option value="SMP Sederajat" <?php echo ($pendidikan_ibu == "SMP Sederajat" ? "selected" : ""); ?>>SMP Sederajat</option>
                                    <option value="SMA Sederajat" <?php echo ($pendidikan_ibu == "SMA Sederajat" ? "selected" : ""); ?>>SMA Sederajat</option>
                                    <option value="D1" <?php echo ($pendidikan_ibu == "D1" ? "selected" : ""); ?>>D1
                                    </option>
                                    <option value="D2" <?php echo ($pendidikan_ibu == "D2" ? "selected" : ""); ?>>D2
                                    </option>
                                    <option value="D3" <?php echo ($pendidikan_ibu == "D3" ? "selected" : ""); ?>>D3
                                    </option>
                                    <option value="D4/S1" <?php echo ($pendidikan_ibu == "D4/S1" ? "selected" : ""); ?>>
                                        D4/S1</option>
                                    <option value="S2" <?php echo ($pendidikan_ibu == "S2" ? "selected" : ""); ?>>S2
                                    </option>
                                    <option value="S3" <?php echo ($pendidikan_ibu == "S3" ? "selected" : ""); ?>>S3
                                    </option>
                                </select>
                                <?php if ($error_pendidikan_ibu != ""): ?>
                                    <span class="invalid-feedback">
                                        <?php echo $error_pendidikan_ibu; ?>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pekerjaan_ibu" class="col-sm-2 col-form-label">Pekerjaan</label>
                            <div class="col-sm-10">
                                <select name="pekerjaan_ibu"
                                    class="form-control <?php echo ($error_pekerjaan_ibu != "" ? "is-invalid" : ""); ?>"
                                    id="pekerjaan_ibu">
                                    <option value="">Pilih Pekerjaan</option>
                                    <option value="Tidak Bekerja" <?php echo ($pekerjaan_ibu == "Tidak Bekerja" ? "selected" : ""); ?>>Tidak Bekerja</option>
                                    <option value="Nelayan" <?php echo ($pekerjaan_ibu == "Nelayan" ? "selected" : ""); ?>>Nelayan</option>
                                    <option value="Petani" <?php echo ($pekerjaan_ibu == "Petani" ? "selected" : ""); ?>>
                                        Petani</option>
                                    <option value="Peternak" <?php echo ($pekerjaan_ibu == "Peternak" ? "selected" : ""); ?>>Peternak</option>
                                    <option value="PNS/TNI/POLRI" <?php echo ($pekerjaan_ibu == "PNS/TNI/POLRI" ? "selected" : ""); ?>>PNS/TNI/POLRI</option>
                                    <option value="Karyawan Swasta" <?php echo ($pekerjaan_ibu == "Karyawan Swasta" ? "selected" : ""); ?>>Karyawan Swasta</option>
                                    <option value="Pedagang Kecil" <?php echo ($pekerjaan_ibu == "Pedagang Kecil" ? "selected" : ""); ?>>Pedagang Kecil</option>
                                    <option value="Pedagang Besar" <?php echo ($pekerjaan_ibu == "Pedagang Besar" ? "selected" : ""); ?>>Pedagang Besar</option>
                                    <option value="Wiraswasta" <?php echo ($pekerjaan_ibu == "Wiraswasta" ? "selected" : ""); ?>>Wiraswasta</option>
                                    <option value="Wirausaha" <?php echo ($pekerjaan_ibu == "Wirausaha" ? "selected" : ""); ?>>Wirausaha</option>
                                    <option value="Buruh" <?php echo ($pekerjaan_ibu == "Buruh" ? "selected" : ""); ?>>
                                        Buruh</option>
                                    <option value="Pensiunan" <?php echo ($pekerjaan_ibu == "Pensiunan" ? "selected" : ""); ?>>Pensiunan</option>
                                    <option value="Lain-lain" <?php echo ($pekerjaan_ibu == "Lain-lain" ? "selected" : ""); ?>>Lain-lain</option>
                                </select>
                                <?php if ($error_pekerjaan_ibu != ""): ?>
                                    <span class="invalid-feedback">
                                        <?php echo $error_pekerjaan_ibu; ?>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="penghasilan_bulanan_ibu" class="col-sm-2 col-form-label">Penghasilan
                                Bulanan</label>
                            <div class="col-sm-10">
                                <select name="penghasilan_bulanan_ibu"
                                    class="form-control <?php echo ($error_penghasilan_bulanan_ibu != "" ? "is-invalid" : ""); ?>"
                                    id="penghasilan_bulanan_ibu">
                                    <option value="">Pilih Penghasilan Bulanan</option>
                                    <option value="Kurang dari 500.000" <?php echo ($penghasilan_bulanan_ibu == "Kurang dari 500.000" ? "selected" : ""); ?>>Kurang dari 500.000</option>
                                    <option value="500.000 - 999.999" <?php echo ($penghasilan_bulanan_ibu == "500.000 - 999.999" ? "selected" : ""); ?>>500.000 - 999.999</option>
                                    <option value="1 Juta - 1.999.999" <?php echo ($penghasilan_bulanan_ibu == "1 Juta - 1.999.999" ? "selected" : ""); ?>>1 Juta - 1.999.999</option>
                                    <option value="2 Juta - 4.999.999" <?php echo ($penghasilan_bulanan_ibu == "2 Juta - 4.999.999" ? "selected" : ""); ?>>2 Juta - 4.999.999</option>
                                    <option value="5 Juta - 20 Juta" <?php echo ($penghasilan_bulanan_ibu == "5 Juta - 20 Juta" ? "selected" : ""); ?>>5 Juta - 20 Juta</option>
                                    <option value="Lebih dari 20 Juta" <?php echo ($penghasilan_bulanan_ibu == "Lebih dari 20 Juta" ? "selected" : ""); ?>>Lebih dari 20 Juta</option>
                                </select>
                                <?php if ($error_penghasilan_bulanan_ibu != ""): ?>
                                    <span class="invalid-feedback">
                                        <?php echo $error_penghasilan_bulanan_ibu; ?>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="berkebutuhan_khusus_ibu" class="col-sm-2 col-form-label">Berkebutuhan
                                Khusus</label>
                            <div class="col-sm-10">
                                <select name="berkebutuhan_khusus_ibu"
                                    class="form-control <?php echo ($error_berkebutuhan_khusus_ibu != "" ? "is-invalid" : ""); ?>"
                                    id="berkebutuhan_khusus_ibu">
                                    <option value="">Pilih Berkebutuhan Khusus</option>
                                    <option value="Tidak" <?php echo ($berkebutuhan_khusus_ibu == "Tidak" ? "selected" : ""); ?>>Tidak</option>
                                    <option value="Netra" <?php echo ($berkebutuhan_khusus_ibu == "Netra" ? "selected" : ""); ?>>Netra</option>
                                    <option value="Rungu" <?php echo ($berkebutuhan_khusus_ibu == "Rungu" ? "selected" : ""); ?>>Rungu</option>
                                    <option value="Grahita Ringan" <?php echo ($berkebutuhan_khusus_ibu == "Grahita Ringan" ? "selected" : ""); ?>>Grahita Ringan</option>
                                    <option value="Grahita Sedang" <?php echo ($berkebutuhan_khusus_ibu == "Grahita Sedang" ? "selected" : ""); ?>>Grahita Sedang</option>
                                    <option value="Daksa Ringan" <?php echo ($berkebutuhan_khusus_ibu == "Daksa Ringan" ? "selected" : ""); ?>>Daksa Ringan</option>
                                    <option value="Daksa Sedang" <?php echo ($berkebutuhan_khusus_ibu == "Daksa Sedang" ? "selected" : ""); ?>>Daksa Sedang</option>
                                    <option value="Laras" <?php echo ($berkebutuhan_khusus_ibu == "Laras" ? "selected" : ""); ?>>Laras</option>
                                    <option value="Wicara" <?php echo ($berkebutuhan_khusus_ibu == "Wicara" ? "selected" : ""); ?>>Wicara</option>
                                    <option value="Tuna Ganda" <?php echo ($berkebutuhan_khusus_ibu == "Tuna Ganda" ? "selected" : ""); ?>>Tuna Ganda</option>
                                    <option value="Hiper Aktif" <?php echo ($berkebutuhan_khusus_ibu == "Hiper Aktif" ? "selected" : ""); ?>>Hiper Aktif</option>
                                    <option value="Cerdas Istimewa" <?php echo ($berkebutuhan_khusus_ibu == "Cerdas Istimewa" ? "selected" : ""); ?>>Cerdas Istimewa</option>
                                    <option value="Bakat Istimewa" <?php echo ($berkebutuhan_khusus_ibu == "Bakat Istimewa" ? "selected" : ""); ?>>Bakat Istimewa</option>
                                    <option value="Kesulitan Belajar" <?php echo ($berkebutuhan_khusus_ibu == "Kesulitan Belajar" ? "selected" : ""); ?>>Kesulitan Belajar</option>
                                    <option value="Narkoba" <?php echo ($berkebutuhan_khusus_ibu == "Narkoba" ? "selected" : ""); ?>>Narkoba</option>
                                    <option value="Indigo" <?php echo ($berkebutuhan_khusus_ibu == "Indigo" ? "selected" : ""); ?>>Indigo</option>
                                    <option value="Down Sindrome" <?php echo ($berkebutuhan_khusus_ibu == "Down Sindrome" ? "selected" : ""); ?>>Down Sindrome</option>
                                    <option value="Autis" <?php echo ($berkebutuhan_khusus_ibu == "Autis" ? "selected" : ""); ?>>Autis</option>
                                </select>
                                <?php if ($error_berkebutuhan_khusus_ibu != ""): ?>
                                    <span class="invalid-feedback">
                                        <?php echo $error_berkebutuhan_khusus_ibu; ?>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <br>
                        <br>
                        <!-- Button untuk menyimpan ke database dan kembali ke halaman awal-->
                        <div class="form-group row text-right">
    <div class="col-sm-10 offset-sm-2">
        <button type="submit" class="btn btn-primary">Submit</button>
        
    </div>
                        </div>

                </div>

                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <?php if ($alert_message != ""): ?>
        <!-- Tampilkan pesan alert jika $alert_message tidak kosong -->
        <script>
            alert("<?php echo $alert_message; ?>");
            // mengalihkan ke form peserta didik part 3
            window.location.href = "formulirpd1.php";
        </script>
    <?php endif; ?>
</body>

</html>