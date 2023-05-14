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
$error_nama = "";
$error_tanggal_lahir = " ";
$error_jenis_kelamin = "";
$error_nik = "";
$error_nisn="";
$error_tempat_lahir="";
$error_agama="";
$error_khusus="";
$error_alamat="";
$error_rt="";
$error_rw="";
$error_dusun="";
$error_kelurahan="";
$error_kecamatan="";
$error_pos="";
$error_tinggal="";
$error_transportasi="";
$error_hp="";
$error_telp="";
$error_email = "";
$error_kps="";
$error_nokps="";
$error_kwn="";
$error_negara="";

$nama = "";
$jenis_kelamin="";
$tanggal_lahir = "";
$nisn="";
$nik="";
$tempat_lahir="";
$agama="";
$khusus="";
$alamat="";
$rt="";
$rw="";
$dusun="";
$kelurahan="";
$kecamatan="";
$pos="";
$tinggal="";
$transportasi="";
$hp="";
$telp="";
$email = "";
$kps="";
$nokps="";
$kwn="";
$negara="";
$alert_message = "";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nama"])) {
        $error_nama = "Nama tidak boleh kosong";
    } else {
        $nama = cek_input($_POST["nama"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $nama)) {
            $error_nama = "Inputan Hanya boleh huruf dan spasi";
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["jenis_kelamin"])) {
        $error_jenis_kelamin = "Pilih salah satu opsi";
    } else {
        $jenis_kelamin = cek_input($_POST["jenis_kelamin"]);
    }
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nisn"])) {
        $error_nisn = "NISN tidak boleh kosong";
    } else {
        $nisn = cek_input($_POST["nisn"]);
        if (!is_numeric($nisn)) {
            $error_nisn = "NISN hanya boleh angka";
        } elseif (strlen($nisn) != 10) {
            $error_nisn = "NISN harus terdiri dari 10 digit";
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nik"])) {
        $error_nik = "NIK tidak boleh kosong";
    } else {
        $nik = cek_input($_POST["nik"]);
        if (!is_numeric($nik)) {
            $error_nik = "NIK hanya boleh angka";
        }
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["tempat_lahir"])) {
        $error_tempat_lahir = "Tempat Lahir tidak boleh kosong";
    } else {
        $tempat_lahir = cek_input($_POST["tempat_lahir"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $tempat_lahir)) {
            $error_tempat_lahir = "Inputan Hanya boleh huruf dan spasi";
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["agama"])) {
      $error_agama = "Pilih salah satu agama";
    } else {
      $agama = cek_input($_POST["agama"]);
    }
  }

  
  if (empty($_POST["tanggal_lahir"])) {
    $error_tanggal_lahir = "Tanggal Lahir tidak boleh kosong";
  } else {
    $tanggal_lahir = cek_input($_POST["tanggal_lahir"]);
  }
  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["khusus"])) {
      $error_khusus = "Pilih salah satu";
    } else {
      $khusus = cek_input($_POST["khusus"]);
    }
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["alamat"])) {
        $error_alamat = "Alamat tidak boleh kosong";
    } else {
        $alamat = cek_input($_POST["alamat"]);
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["rt"])) {
        $error_rt = "RT tidak boleh kosong";
    } else {
        $rt = cek_input($_POST["rt"]);
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["rw"])) {
        $error_rw = "RW tidak boleh kosong";
    } else {
        $rw = cek_input($_POST["rw"]);
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["dusun"])) {
        $error_dusun = "Nama dusun tidak boleh kosong";
    } else {
        $dusun = cek_input($_POST["dusun"]);
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["kelurahan"])) {
        $error_kelurahan = "Nama kelurahan tidak boleh kosong";
    } else {
        $kelurahan = cek_input($_POST["kelurahan"]);
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["kecamatan"])) {
        $error_kecamatan = "Nama kecamatan tidak boleh kosong";
    } else {
        $kecamatan = cek_input($_POST["kecamatan"]);
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["pos"])) {
        $error_pos = "Kode Pos tidak boleh kosong";
    } else {
        $pos = cek_input($_POST["pos"]);
        if (!is_numeric($pos)) {
            $error_pos = "Kode Pos hanya boleh angka";
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["tinggal"])) {
      $error_tinggal = "Pilih salah satu";
    } else {
      $tinggal = cek_input($_POST["tinggal"]);
    }
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["transportasi"])) {
      $error_transportasi = "Pilih salah satu transportasi";
    } else {
      $transportasi = cek_input($_POST["transportasi"]);
    }
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["hp"])) {
        $error_hp = "Nomor HP tidak boleh kosong";
    } else {
        $hp = cek_input($_POST["hp"]);
        if (!is_numeric($hp)) {
            $error_hp = "Nomor HP hanya boleh angka";
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["telp"])) {
        $error_telp = "(-) Jika tidak ada";
    } else {
        $telp = cek_input($_POST["telp"]);
    }
}
if (empty($_POST["email"])) {
    $error_email = "Email tidak boleh kosong";
  } else {
    $email = cek_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $error_email = "Format email invalid";
    }
  }
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["kps"])) {
        $error_kps = "Pilih salah satu opsi";
    } else {
        $kps = cek_input($_POST["kps"]);
    }
  }
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nokps"])) {
        $error_nokps = "(-) Jika tidak ada";
    } else {
        $nokps = cek_input($_POST["nokps"]);
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["kwn"])) {
        $error_kwn = "Pilih salah satu opsi";
    } else {
        $kwn = cek_input($_POST["kwn"]);
    }
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["negara"])) {
        $error_negara = "Negara tidak boleh kosong";
    } else {
        $negara = cek_input($_POST["negara"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $negara)) {
            $error_negara = "Inputan Hanya boleh huruf dan spasi";
        }
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
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $nisn = $_POST['nisn'];
    $nik = $_POST['nik'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $agama = $_POST['agama'];
    $khusus = $_POST['khusus'];
    $alamat = $_POST['alamat'];
    $rt = $_POST['rt'];
    $rw = $_POST['rw'];
    $dusun = $_POST['dusun'];
    $kelurahan = $_POST['kelurahan'];
    $kecamatan = $_POST['kecamatan'];
    $pos = $_POST['pos'];
    $tinggal = $_POST['tinggal'];
    $transportasi = $_POST['transportasi'];
    $hp = $_POST['hp'];
    $telp = $_POST['telp'];
    $email = $_POST['email'];
    $kps = $_POST['kps'];
    $nokps = $_POST['nokps'];
    $kwn = $_POST['kwn'];
    $negara = $_POST['negara'];

    // Dapatkan ID terbaru dari database
    $query_id = "SELECT MAX(id) AS id_terbaru FROM peserta_didik";
    $result_id = mysqli_query($koneksi, $query_id);
    $row_id = mysqli_fetch_assoc($result_id);
    $id_terbaru = $row_id['id_terbaru'];



    // Query SQL untuk update data menggunakan id
    $query = "UPDATE peserta_didik SET
    nama = '$nama',
    jenis_kelamin = '$jenis_kelamin',
    tanggal_lahir = '$tanggal_lahir',
    nisn = '$nisn',
    nik = '$nik',
    tempat_lahir = '$tempat_lahir',
    agama = '$agama',
    khusus = '$khusus',
    alamat = '$alamat',
    rt = '$rt',
    rw = '$rw',
    dusun = '$dusun',
    kelurahan = '$kelurahan',
    kecamatan = '$kecamatan',
    pos = '$pos',
    tinggal = '$tinggal',
    transportasi = '$transportasi',
    hp = '$hp',
    telp = '$telp',
    email = '$email',
    kps = '$kps',
    nokps = '$nokps',
    kwn = '$kwn',
    negara = '$negara'
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
<!-- Tampilan inputan form peserta didik part 2 -->
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
Data Pribadi
</div>
<div class="card-body">
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div class="form-group row"> 
      <label for="nama" class="col-sm-2 col-form-label">Nama</label>
      <div class="col-sm-10">
        <input type="text" name="nama" class="form-control <?php echo ($error_nama != "" ? "is-invalid" : ""); ?>" id="nama" placeholder="Nama" value="<?php echo $nama; ?>">
        <?php if ($error_nama != ""): ?>
          <div class="invalid-feedback"><?php echo $error_nama; ?></div>
        <?php endif; ?>
      </div>
    </div>

    <div class="form-group row">
  <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
  <div class="col-sm-10">
    <div class="form-check form-check-inline">
      <input class="form-check-input <?php echo ($error_jenis_kelamin != "" ? "is-invalid" : ""); ?>" type="radio" 
      name="jenis_kelamin" id="jenis_kelamin_laki" value="Laki-laki" <?php echo ($jenis_kelamin == "Laki-laki" ? "checked" : ""); ?>>
      <label class="form-check-label" for="jenis_kelamin_laki">Laki-laki</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input <?php echo ($error_jenis_kelamin != "" ? "is-invalid" : ""); ?>" type="radio" 
      name="jenis_kelamin" id="jenis_kelamin_perempuan" value="Perempuan" <?php echo ($jenis_kelamin == "Perempuan" ? "checked" : ""); ?>>
      <label class="form-check-label" for="jenis_kelamin_perempuan">Perempuan</label>
    </div>
    <?php if ($error_jenis_kelamin != ""): ?>
      <span class="invalid-feedback"><?php echo $error_jenis_kelamin; ?></span>
    <?php endif; ?>
  </div>
</div>

<div class="form-group row">
                <label for="nisn" class="col-sm-2 col-form-label">NISN</label>
                <div class="col-sm-10">
                    <input type="text" name="nisn" class="form-control <?php echo ($error_nisn != "" ? "is-invalid" : ""); ?>" id="nisn" 
                    placeholder="NISN" value="<?php echo $nisn; ?>">
                    <?php if ($error_nisn != ""): ?>
                        <span class="invalid-feedback"><?php echo $error_nisn; ?></span>
                    <?php endif; ?>
                </div>
            </div>
            
<div class="form-group row">
                <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                <div class="col-sm-10">
                    <input type="text" name="nik" class="form-control <?php echo ($error_nik != "" ? "is-invalid" : ""); ?>" id="nik" 
                    placeholder="NIK" value="<?php echo $nik; ?>">
                    <?php if ($error_nik != ""): ?>
                        <span class="invalid-feedback"><?php echo $error_nik; ?></span>
                    <?php endif; ?>
                </div>
            </div>

            <div class="form-group row"> 
      <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
      <div class="col-sm-10">
        <input type="text" name="tempat_lahir" class="form-control <?php echo ($error_tempat_lahir != "" ? "is-invalid" : ""); ?>" id="tempat_lahir" 
        placeholder="Tempat Lahir" value="<?php echo $tempat_lahir; ?>">
        <?php if ($error_tempat_lahir != ""): ?>
          <div class="invalid-feedback"><?php echo $error_tempat_lahir; ?></div>
        <?php endif; ?>
      </div>
    </div>

    

<div class="form-group row">
  <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
  <div class="col-sm-10">
    <input type="date" name="tanggal_lahir" class="form-control <?php echo (cek_pilihan($tanggal_lahir) ? "" : "is-invalid"); ?>" id="tanggal_lahir" 
    value="<?php echo $tanggal_lahir; ?>">
    <?php if (!cek_pilihan($tanggal_lahir)): ?>
      <div class="invalid-feedback">Atur tanggal Lahir</div>
    <?php endif; ?>
  </div>
</div>

<div class="form-group row"> 
      <label for="agama" class="col-sm-2 col-form-label">Agama</label>
      <div class="col-sm-10">
        <select name="agama" class="form-control <?php echo (cek_pilihan($agama) ? "" : "is-invalid"); ?>" id="agama">
          <option value="">Agama</option>
          <option value="islam" <?php echo ($agama == "islam" ? "selected" : ""); ?>>Islam</option>
          <option value="protestan" <?php echo ($agama == "protestan" ? "selected" : ""); ?>>Protestean</option>
          <option value="katholik" <?php echo ($agama == "katholik" ? "selected" : ""); ?>>Katholik</option>
          <option value="hindu" <?php echo ($agama == "hindu" ? "selected" : ""); ?>>Hindu</option>
          <option value="buddha" <?php echo ($agama == "buddha" ? "selected" : ""); ?>>Buddha</option>
          <option value="khonghuchu" <?php echo ($agama == "khonghuchu" ? "selected" : ""); ?>>Khong Hu Chu</option>
          <option value="lainnya" <?php echo ($agama == "lainnya" ? "selected" : ""); ?>>lainnya</option>
        </select>
        <?php if (!cek_pilihan($agama)): ?>
          <span class="invalid-feedback">Pilih salah satu</span>
        <?php endif; ?>
      </div>
    </div>
<?php
function cek_pilihan($value) {
  return ($value !== "");
}
?>

<div class="form-group row"> 
      <label for="khusus" class="col-sm-2 col-form-label">Berkebutuhan Khusus</label>
      <div class="col-sm-10">
        <select name="khusus" class="form-control <?php echo (cek_pilihan($khusus) ? "" : "is-invalid"); ?>" id="khusus">
          <option value="">Berkebutuhan Khusus</option>
          <option value="tidak" <?php echo ($khusus == "tidak" ? "selected" : ""); ?>>Tidak</option>
          <option value="netra" <?php echo ($khusus == "netra" ? "selected" : ""); ?>>Netra</option>
          <option value="rungu" <?php echo ($khusus == "rungu" ? "selected" : ""); ?>>Rungu</option>
          <option value="gr" <?php echo ($khusus == "gr" ? "selected" : ""); ?>>Grahita Ringan</option>
          <option value="gs" <?php echo ($khusus == "gs" ? "selected" : ""); ?>>Grahita Sedang</option>
          <option value="dr" <?php echo ($khusus == "dr" ? "selected" : ""); ?>>Daksa Ringan Hu Chu</option>
          <option value="ds" <?php echo ($khusus == "ds" ? "selected" : ""); ?>>Daksa Sedang</option>
          <option value="laras" <?php echo ($khusus == "laras" ? "selected" : ""); ?>>Laras</option>
          <option value="wicara" <?php echo ($khusus == "wicara" ? "selected" : ""); ?>>Wicara</option>
          <option value="tg" <?php echo ($khusus == "tg" ? "selected" : ""); ?>>Tuna Ganda</option>
          <option value="ha" <?php echo ($khusus == "ha" ? "selected" : ""); ?>>Hiper Aktif</option>
          <option value="ci" <?php echo ($khusus == "ci" ? "selected" : ""); ?>>Cerdas Istimewa</option>
          <option value="bi" <?php echo ($khusus == "bi" ? "selected" : ""); ?>>Bakat Istimewa</option>
          <option value="ks" <?php echo ($khusus == "ks" ? "selected" : ""); ?>>Kesulitan Belajar</option>
          <option value="narkoba" <?php echo ($khusus == "narkoba" ? "selected" : ""); ?>>Narkoba</option>
          <option value="indigo" <?php echo ($khusus == "indigo" ? "selected" : ""); ?>>Indigo</option>
          <option value="ds" <?php echo ($khusus == "ds" ? "selected" : ""); ?>>Down Sindrome</option>
          <option value="autis" <?php echo ($khusus == "autis" ? "selected" : ""); ?>>Autis</option>
        </select>
        <?php if (!cek_pilihan($khusus)): ?>
          <span class="invalid-feedback">Pilih salah satu</span>
        <?php endif; ?>
      </div>
    </div>

    <div class="form-group row"> 
      <label for="alamat" class="col-sm-2 col-form-label">Alamat Jalan</label>
      <div class="col-sm-10">
        <input type="text" name="alamat" class="form-control <?php echo ($error_alamat != "" ? "is-invalid" : ""); ?>" id="alamat" 
        placeholder="Alamat" value="<?php echo $alamat; ?>">
        <?php if ($error_alamat != ""): ?>
          <div class="invalid-feedback"><?php echo $error_alamat; ?></div>
        <?php endif; ?>
      </div>
    </div>

    <div class="form-group row">
                <label for="rt" class="col-sm-2 col-form-label">RT</label>
                <div class="col-sm-10">
                    <input type="text" name="rt" class="form-control <?php echo ($error_rt != "" ? "is-invalid" : ""); ?>" id="rt" 
                    placeholder="RT" value="<?php echo $rt; ?>">
                    <?php if ($error_rt != ""): ?>
                        <span class="invalid-feedback"><?php echo $error_rt; ?></span>
                    <?php endif; ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="rw" class="col-sm-2 col-form-label">RW</label>
                <div class="col-sm-10">
                    <input type="text" name="rw" class="form-control <?php echo ($error_rw != "" ? "is-invalid" : ""); ?>" id="rw" 
                    placeholder="RW" value="<?php echo $rw; ?>">
                    <?php if ($error_rw != ""): ?>
                        <span class="invalid-feedback"><?php echo $error_rw; ?></span>
                    <?php endif; ?>
                </div>
            </div>

<div class="form-group row"> 
      <label for="dusun" class="col-sm-2 col-form-label">Nama Dusun</label>
      <div class="col-sm-10">
        <input type="text" name="dusun" class="form-control <?php echo ($error_dusun != "" ? "is-invalid" : ""); ?>" id="dusun" 
        placeholder="Nama Dusun" value="<?php echo $dusun; ?>">
        <?php if ($error_dusun != ""): ?>
          <div class="invalid-feedback"><?php echo $error_dusun; ?></div>
        <?php endif; ?>
      </div>
    </div>

    <div class="form-group row"> 
      <label for="kelurahan" class="col-sm-2 col-form-label">Nama Kelurahan</label>
      <div class="col-sm-10">
        <input type="text" name="kelurahan" class="form-control <?php echo ($error_kelurahan != "" ? "is-invalid" : ""); ?>" id="kelurahan" 
        placeholder="Nama Kelurahan" value="<?php echo $kelurahan; ?>">
        <?php if ($error_kelurahan != ""): ?>
          <div class="invalid-feedback"><?php echo $error_kelurahan; ?></div>
        <?php endif; ?>
      </div>
    </div>

    <div class="form-group row"> 
      <label for="kecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
      <div class="col-sm-10">
        <input type="text" name="kecamatan" class="form-control <?php echo ($error_kecamatan != "" ? "is-invalid" : ""); ?>" id="kecamatan" 
        placeholder="Kecamatan" value="<?php echo $kecamatan; ?>">
        <?php if ($error_kecamatan != ""): ?>
          <div class="invalid-feedback"><?php echo $error_kecamatan; ?></div>
        <?php endif; ?>
      </div>
    </div>

    <div class="form-group row">
                <label for="pos" class="col-sm-2 col-form-label">Kode Pos</label>
                <div class="col-sm-10">
                    <input type="text" name="pos" class="form-control <?php echo ($error_pos != "" ? "is-invalid" : ""); ?>" id="pos" 
                    placeholder="Kode Pos" value="<?php echo $pos; ?>">
                    <?php if ($error_pos != ""): ?>
                        <span class="invalid-feedback"><?php echo $error_pos; ?></span>
                    <?php endif; ?>
                </div>
            </div>

            <div class="form-group row"> 
      <label for="tinggal" class="col-sm-2 col-form-label">Tempat Tinggal</label>
      <div class="col-sm-10">
        <select name="tinggal" class="form-control <?php echo (cek_pilihan($tinggal) ? "" : "is-invalid"); ?>" id="tinggal">
          <option value="">Tempat Tinggal</option>
          <option value="Bersama" <?php echo ($tinggal == "Bersama" ? "selected" : ""); ?>>Bersama Orang Tua</option>
          <option value="Wali" <?php echo ($tinggal == "Wali" ? "selected" : ""); ?>>Wali</option>
          <option value="Kos" <?php echo ($tinggal == "Kos" ? "selected" : ""); ?>>Kos</option>
          <option value="Asrama" <?php echo ($tinggal == "Asrama" ? "selected" : ""); ?>>Asrama</option>
          <option value="PantiAsuhan" <?php echo ($tinggal == "PantiAsuhan" ? "selected" : ""); ?>>Panti Asuhan</option>
          <option value="Lainnya" <?php echo ($tinggal == "Lainnya" ? "selected" : ""); ?>>Lainnya</option>
          </select>
        <?php if (!cek_pilihan($tinggal)): ?>
          <span class="invalid-feedback">Pilih salah satu</span>
        <?php endif; ?>
      </div>
    </div>    

    <div class="form-group row"> 
      <label for="transportasi" class="col-sm-2 col-form-label">Mode Transportasi</label>
      <div class="col-sm-10">
        <select name="transportasi" class="form-control <?php echo (cek_pilihan($transportasi) ? "" : "is-invalid"); ?>" id="transportasi">
          <option value="">Mode Transportasi</option>
          <option value="jk" <?php echo ($transportasi == "jk" ? "selected" : ""); ?>>Jalan Kaki</option>
          <option value="kp" <?php echo ($transportasi == "kp" ? "selected" : ""); ?>>Kendaraan Pribadi</option>
          <option value="angkot" <?php echo ($transportasi == "angkot" ? "selected" : ""); ?>>Kendaraan Umum/angkot/Pete-pete</option>
          <option value="js" <?php echo ($transportasi == "js" ? "selected" : ""); ?>>Jemputan Sekolah</option>
          <option value="ka" <?php echo ($transportasi == "ka" ? "selected" : ""); ?>>Kereta Api</option>
          <option value="ojek" <?php echo ($transportasi == "ojek" ? "selected" : ""); ?>>Ojek</option>
          <option value="andong" <?php echo ($transportasi == "andong" ? "selected" : ""); ?>>Andong/Bendi/Sado/Dokar/Delman/Beca</option>
          <option value="perahu" <?php echo ($transportasi == "perahu" ? "selected" : ""); ?>>Perahu penyebrangan/Rakit/Gelek</option>
          <option value="Lainnya" <?php echo ($transportasi == "Lainnya" ? "selected" : ""); ?>>Lainnya</option>
        </select>
        <?php if (!cek_pilihan($transportasi)): ?>
          <span class="invalid-feedback">Pilih salah satu</span>
        <?php endif; ?>
      </div>
    </div>    

    <div class="form-group row">
                <label for="hp" class="col-sm-2 col-form-label">Nomor HP</label>
                <div class="col-sm-10">
                    <input type="text" name="hp" class="form-control <?php echo ($error_hp != "" ? "is-invalid" : ""); ?>" id="hp" 
                    placeholder="Nomor HP" value="<?php echo $hp; ?>">
                    <?php if ($error_hp != ""): ?>
                        <span class="invalid-feedback"><?php echo $error_hp; ?></span>
                    <?php endif; ?>
                </div>
            </div>

            <div class="form-group row"> 
      <label for="telp" class="col-sm-2 col-form-label">Nomor Telepon</label>
      <div class="col-sm-10">
        <input type="text" name="telp" class="form-control <?php echo ($error_telp != "" ? "is-invalid" : ""); ?>" id="telp" 
        placeholder="Nomor Telepon" value="<?php echo $telp; ?>">
        <?php if ($error_telp != ""): ?>
          <div class="invalid-feedback"><?php echo $error_telp; ?></div>
        <?php endif; ?>
      </div>
    </div>

    
<div class="form-group row">
  <label for="email" class="col-sm-2 col-form-label">E-mail</label>
  <div class="col-sm-10">
    <input type="text" name="email" class="form-control <?php echo ($error_email != "" ? "is-invalid" : ""); ?>" id="email" 
    placeholder="E-mail" value="<?php echo $email; ?>">
    <?php if ($error_email != ""): ?>
      <div class="invalid-feedback"><?php echo $error_email; ?></div>
    <?php endif; ?>
  </div>
</div>

<div class="form-group row">
  <label class="col-sm-2 col-form-label">Penerima KPS/PKH/KIP</label>
  <div class="col-sm-10">
    <div class="form-check form-check-inline">
      <input class="form-check-input <?php echo ($error_kps != "" ? "is-invalid" : ""); ?>" type="radio" 
      name="kps" id="kps_ya" value="Ya" <?php echo ($kps == "Ya" ? "checked" : ""); ?>>
      <label class="form-check-label" for="kps_ya">Ya</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input <?php echo ($error_kps != "" ? "is-invalid" : ""); ?>" type="radio" 
      name="kps" id="kps_tidak" value="Tidak" <?php echo ($kps == "Tidak" ? "checked" : ""); ?>>
      <label class="form-check-label" for="kps_tidak">Tidak</label>
    </div>
    <?php if ($error_kps != ""): ?>
      <span class="invalid-feedback"><?php echo $error_kps; ?></span>
    <?php endif; ?>
  </div>
</div>

<div class="form-group row"> 
      <label for="nokps" class="col-sm-2 col-form-label">Nomor KPS/KKS/PKH/KIP</label>
      <div class="col-sm-10">
        <input type="text" name="nokps" class="form-control <?php echo ($error_nokps != "" ? "is-invalid" : ""); ?>" id="nokps" 
        placeholder="Nomor KPS/KKS/PKH/KIP" value="<?php echo $nokps; ?>">
        <?php if ($error_nokps != ""): ?>
          <div class="invalid-feedback"><?php echo $error_nokps; ?></div>
        <?php endif; ?>
      </div>
    </div>

    <div class="form-group row">
  <label class="col-sm-2 col-form-label">Kewarganegaraan</label>
  <div class="col-sm-10">
    <div class="form-check form-check-inline">
      <input class="form-check-input <?php echo ($error_kwn != "" ? "is-invalid" : ""); ?>" type="radio" 
      name="kwn" id="kwn_ya" value="Indonesia(WNI)" <?php echo ($kwn == "Indonesia(WNI)" ? "checked" : ""); ?>>
      <label class="form-check-label" for="kwn_ya">Indonesia(WNI)</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input <?php echo ($error_kwn != "" ? "is-invalid" : ""); ?>" type="radio" 
      name="kwn" id="kwn_tidak" value="Asing(WNA)" <?php echo ($kwn == "Asing(WNA)" ? "checked" : ""); ?>>
      <label class="form-check-label" for="kwn_tidak">Asing(WNA)</label>
    </div>
    <?php if ($error_kwn != ""): ?>
      <span class="invalid-feedback"><?php echo $error_kwn; ?></span>
    <?php endif; ?>
  </div>
</div>


<div class="form-group row"> 
      <label for="negara" class="col-sm-2 col-form-label">Nama Negara</label>
      <div class="col-sm-10">
        <input type="text" name="negara" class="form-control <?php echo ($error_negara != "" ? "is-invalid" : ""); ?>" id="negara" 
        placeholder="Nama Negara" value="<?php echo $negara; ?>">
        <?php if ($error_negara != ""): ?>
          <div class="invalid-feedback"><?php echo $error_negara; ?></div>
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
             // mengalihkan ke form peserta didik part 3
            window.location.href = "formulirpd3.php";
        </script>
    <?php endif; ?>
</body>
 </html>