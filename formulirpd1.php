<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


<style>
.warning {color: #FF0000;}
</style>
</head>
<body>

<?php
$error_jenispendaftaran = " ";
$error_tanggal_masuk = " ";
$error_nis = "";
$error_nomor_peserta = "";
$error_pernah_paud = "";
$error_pernah_tk = "";
$error_skhun_sebelumnya = "";
$error_ijazah_sebelumnya = "";
$error_hobi = "";
$error_cita = "";


$jenispendaftaran= "";
$tanggal_masuk = "";
$nis = "";  
$nomor_peserta = "";
$pernah_paud = "";
$pernah_tk = "";
$skhun_sebelumnya = "";
$ijazah_sebelumnya = "";
$hobi = "";
$cita = "";
$alert_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["jenispendaftaran"])) {
      $error_jenispendaftaran = "Pilih salah satu jenis pendaftaran";
    } else {
      $jenispendaftaran = cek_input($_POST["jenispendaftaran"]);
    }
  }

  
  if (empty($_POST["tanggal_masuk"])) {
    $error_tanggal_masuk = "Tanggal Masuk tidak boleh kosong";
  } else {
    $tanggal_masuk = cek_input($_POST["tanggal_masuk"]);
  }
  


  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nis"])) {
        $error_nis = "NIS tidak boleh kosong";
    } else {
        $nis = cek_input($_POST["nis"]);
        if (!is_numeric($nis)) {
            $error_nis = "NIS hanya boleh angka";
        } elseif (strlen($nis) != 10) {
            $error_nis = "NIS harus terdiri dari 10 digit";
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["nomor_peserta"])) {
      $error_nomor_peserta = "Nomor Peserta Ujian tidak boleh kosong";
  } else {
      $nomor_peserta = cek_input($_POST["nomor_peserta"]);
      if (!is_numeric($nomor_peserta)) {
          $error_nomor_peserta = "Nomor Peserta Ujian hanya boleh angka";
      }
  }
}



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["pernah_paud"])) {
      $error_pernah_paud = "Pilih salah satu opsi";
  } else {
      $pernah_paud = cek_input($_POST["pernah_paud"]);
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["pernah_tk"])) {
      $error_pernah_tk = "Pilih salah satu opsi";
  } else {
      $pernah_tk = cek_input($_POST["pernah_tk"]);
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["skhun_sebelumnya"])) {
      $error_skhun_sebelumnya = "Nomor Seri SKHUN sebelumnya tidak boleh kosong";
  } else {
      $skhun_sebelumnya = cek_input($_POST["skhun_sebelumnya"]);
      if (!is_numeric($skhun_sebelumnya)) {
          $error_skhun_sebelumnya = "Nomor Seri SKHUN sebelumnya hanya boleh berisi angka";
      }
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["ijazah_sebelumnya"])) {
      $error_ijazah_sebelumnya = "Nomor Seri Ijazah sebelumnya tidak boleh kosong";
  } else {
      $ijazah_sebelumnya = cek_input($_POST["ijazah_sebelumnya"]);
      if (!is_numeric($ijazah_sebelumnya)) {
          $error_ijazah_sebelumnya = "Nomor Seri Ijazah sebelumnya hanya boleh berisi angka";
      }
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["hobi"])) {
      $error_hobi = "Pilih salah satu ";
  } else {
      $hobi = cek_input($_POST["hobi"]);
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["cita"])) {
      $error_cita = "Pilih salah satu ";
  } else {
      $cita = cek_input($_POST["cita"]);
  }
}

function cek_input($data) {
$data = trim($data);
$data = stripslashes($data); 
$data = htmlspecialchars($data); 
return $data;
}

include 'koneksi.php'; // file yang berisi koneksi ke database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan data dari form
    $jenispendaftaran = $_POST['jenispendaftaran'];
    $tanggal_masuk = $_POST['tanggal_masuk'];
    $nis = $_POST['nis'];
    $nomor_peserta = $_POST['nomor_peserta'];
    $pernah_paud = $_POST['pernah_paud'];
    $pernah_tk = $_POST['pernah_tk'];
    $skhun_sebelumnya = $_POST['skhun_sebelumnya'];
    $ijazah_sebelumnya = $_POST['ijazah_sebelumnya'];
    $hobi = $_POST['hobi'];
    $cita = $_POST['cita'];

    // Query SQL untuk insert data
    $query = "INSERT INTO peserta_didik (jenispendaftaran, tanggal_masuk, nis, nomor_peserta, pernah_paud, pernah_tk, skhun_sebelumnya, ijazah_sebelumnya, hobi, cita) 
              VALUES ('$jenispendaftaran', '$tanggal_masuk', '$nis', '$nomor_peserta', '$pernah_paud', '$pernah_tk', '$skhun_sebelumnya', '$ijazah_sebelumnya', '$hobi', '$cita')";

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
<!-- Tampilan inputan form peserta didik part 1 -->
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
Registrasi Peserta Didik
</div>
<div class="card-body">
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div class="form-group row"> 
      <label for="jenispendaftaran" class="col-sm-2 col-form-label">Jenis Pendaftaran</label>
      <div class="col-sm-10">
        <select name="jenispendaftaran" class="form-control <?php echo (cek_pilihan($jenispendaftaran) ? "" : "is-invalid"); ?>" id="jenispendaftaran">
          <option value="">Pilih Jenis Pendaftaran</option>
          <option value="Siswa Baru" <?php echo ($jenispendaftaran == "Siswa Baru" ? "selected" : ""); ?>>Siswa Baru</option>
          <option value="Pindahan" <?php echo ($jenispendaftaran == "Pindahan" ? "selected" : ""); ?>>Pindahan</option>
        </select>
        <?php if (!cek_pilihan($jenispendaftaran)): ?>
          <span class="invalid-feedback">Pilih salah satu jenis pendaftaran</span>
        <?php endif; ?>
      </div>
    </div>
<?php
function cek_pilihan($value) {
  return ($value !== "");
}
?>

<div class="form-group row">
  <label for="tanggal_masuk" class="col-sm-2 col-form-label">Tanggal Masuk Sekolah</label>
  <div class="col-sm-10">
    <input type="date" name="tanggal_masuk" class="form-control <?php echo (cek_pilihan($tanggal_masuk) ? "" : "is-invalid"); ?>" 
    id="tanggal_masuk" value="<?php echo $tanggal_masuk; ?>">
    <?php if (!cek_pilihan($tanggal_masuk)): ?>
      <div class="invalid-feedback">Atur tanggal masuk sekolah</div>
    <?php endif; ?>
  </div>
</div>

<div class="form-group row">
    <label for="nis" class="col-sm-2 col-form-label">NIS</label>
    <div class="col-sm-10">
        <input type="text" name="nis" class="form-control <?php echo ($error_nis != "" ? "is-invalid" : ""); ?>" id="nis" placeholder="NIS" value="<?php echo $nis; ?>">
        <?php if ($error_nis != ""): ?>
            <span class="invalid-feedback"><?php echo $error_nis; ?></span>
        <?php endif; ?>
    </div>
</div>

<div class="form-group row">
    <label for="nomor_peserta" class="col-sm-2 col-form-label">Nomor Peserta Ujian</label>
    <div class="col-sm-10">
        <input type="text" name="nomor_peserta" class="form-control <?php echo ($error_nomor_peserta != "" ? "is-invalid" : ""); ?>" 
        id="nomor_peserta" placeholder="Nomor Peserta Ujian" value="<?php echo $nomor_peserta; ?>">
        <?php if ($error_nomor_peserta != ""): ?>
            <span class="invalid-feedback"><?php echo $error_nomor_peserta; ?></span>
        <?php endif; ?>
    </div>
</div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Apakah pernah PAUD?</label>
                <div class="col-sm-10">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input <?php echo ($error_pernah_paud != "" ? "is-invalid" : ""); ?>" type="radio" 
                        name="pernah_paud" id="pernah_paud_ya" value="Ya" <?php echo ($pernah_paud == "Ya" ? "checked" : ""); ?>>
                        <label class="form-check-label" for="pernah_paud_ya">Ya</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input <?php echo ($error_pernah_paud != "" ? "is-invalid" : ""); ?>" type="radio" 
                        name="pernah_paud" id="pernah_paud_tidak" value="Tidak" <?php echo ($pernah_paud == "Tidak" ? "checked" : ""); ?>>
                        <label class="form-check-label" for="pernah_paud_tidak">Tidak</label>
                    </div>
                    <?php if ($error_pernah_paud != ""): ?>
                        <span class="invalid-feedback"><?php echo $error_pernah_paud; ?></span>
                    <?php endif; ?>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Apakah pernah TK?</label>
                <div class="col-sm-10">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input <?php echo ($error_pernah_tk != "" ? "is-invalid" : ""); ?>" type="radio" 
                        name="pernah_tk" id="pernah_tk_ya" value="Ya" <?php echo ($pernah_tk == "Ya" ? "checked" : ""); ?>>
                        <label class="form-check-label" for="pernah_tk_ya">Ya</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input <?php echo ($error_pernah_tk != "" ? "is-invalid" : ""); ?>" type="radio"
                         name="pernah_tk" id="pernah_tk_tidak" value="Tidak" <?php echo ($pernah_tk == "Tidak" ? "checked" : ""); ?>>
                        <label class="form-check-label" for="pernah_tk_tidak">Tidak</label>
                    </div>
                    <?php if ($error_pernah_tk != ""): ?>
                        <span class="invalid-feedback"><?php echo $error_pernah_tk; ?></span>
                    <?php endif; ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="skhun_sebelumnya" class="col-sm-2 col-form-label">No Seri SKHUN Sebelumnya</label>
                <div class="col-sm-10">
                    <input type="text" name="skhun_sebelumnya" class="form-control <?php echo ($error_skhun_sebelumnya != "" ? "is-invalid" : ""); ?>" 
                    id="skhun_sebelumnya" placeholder="No Seri SKHUN Sebelumnya" value="<?php echo $skhun_sebelumnya; ?>">
                    <?php if ($error_skhun_sebelumnya != ""): ?>
                        <span class="invalid-feedback"><?php echo $error_skhun_sebelumnya; ?></span>
                    <?php endif; ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="ijazah_sebelumnya" class="col-sm-2 col-form-label">No Seri Ijazah Sebelumnya</label>
                <div class="col-sm-10">
                    <input type="text" name="ijazah_sebelumnya" class="form-control <?php echo ($error_ijazah_sebelumnya != "" ? "is-invalid" : ""); ?>" 
                    id="ijazah_sebelumnya" placeholder="No Seri Ijazah Sebelumnya" value="<?php echo $ijazah_sebelumnya; ?>">
                    <?php if ($error_ijazah_sebelumnya != ""): ?>
                        <span class="invalid-feedback"><?php echo $error_ijazah_sebelumnya; ?></span>
                    <?php endif; ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="hobi" class="col-sm-2 col-form-label">Hobi</label>
                <div class="col-sm-10">
                    <select name="hobi" class="form-control <?php echo ($error_hobi != "" ? "is-invalid" : ""); ?>" id="hobi">
                        <option value="">Pilih Hobi</option>
                        <option value="Olah Raga" <?php echo ($hobi == "Olah Raga" ? "selected" : ""); ?>>Olah Raga</option>
                        <option value="Kesenian" <?php echo ($hobi == "Kesenian" ? "selected" : ""); ?>>Kesenian</option>
                        <option value="Membaca" <?php echo ($hobi == "Membaca" ? "selected" : ""); ?>>Membaca</option>
                        <option value="Menulis" <?php echo ($hobi == "Menulis" ? "selected" : ""); ?>>Menulis</option>
                        <option value="Traveling" <?php echo ($hobi == "Traveling" ? "selected" : ""); ?>>Traveling</option>
                        <option value="Lainnya" <?php echo ($hobi == "Lainnya" ? "selected" : ""); ?>>Lainnya</option>
                    </select>
                    <?php if ($error_hobi != ""): ?>
                        <span class="invalid-feedback"><?php echo $error_hobi; ?></span>
                    <?php endif; ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="cita" class="col-sm-2 col-form-label">Cita - Cita</label>
                <div class="col-sm-10">
                    <select name="cita" class="form-control <?php echo ($error_cita != "" ? "is-invalid" : ""); ?>" id="cita">
                        <option value="">Pilih Cita - Cita</option>
                        <option value="pns" <?php echo ($cita == "pns" ? "selected" : ""); ?>>PNS</option>
                        <option value="tnipolri" <?php echo ($cita == "tnipolri" ? "selected" : ""); ?>>TNI/POLRI</option>
                        <option value="gurudosen" <?php echo ($cita == "gurudosen" ? "selected" : ""); ?>>Guru/Dosen</option>
                        <option value="dokter" <?php echo ($cita == "dokter" ? "selected" : ""); ?>>Dokter</option>
                        <option value="politikus" <?php echo ($cita == "politikus" ? "selected" : ""); ?>>Politikus</option>
                        <option value="wiraswasta" <?php echo ($cita == "wiraswasta" ? "selected" : ""); ?>>Wiraswasta</option>
                        <option value="seni" <?php echo ($cita == "seni" ? "selected" : ""); ?>>Seni/Lukis</option>
                        <option value="lainnya" <?php echo ($cita == "lainnya" ? "selected" : ""); ?>>Lainnya</option>
                    </select>
                    <?php if ($error_cita != ""): ?>
                        <span class="invalid-feedback"><?php echo $error_cita; ?></span>
                    <?php endif; ?>
                </div>
            </div>
            <!-- Button untuk ke next halaman dan menyimpan ke database-->
            <div class="form-group row text-right">
    <div class="col-sm-10 offset-sm-2">
        <button type="submit" class="btn btn-primary">Selanjutnya</button>
        
    </div>
</div>

</form>
</div>
</div> 
</div>
</div>
<?php if ($alert_message != ""): ?>
        <!-- Tampilkan pesan alert jika $alert_message tidak kosong -->
        <script>
            alert("<?php echo $alert_message; ?>");
            // mengalihkan ke form peserta didik part 2
            window.location.href = "formulirpd2.php?id=$id_terbaru";
        </script>
    <?php endif; ?>
</body>
 </html>