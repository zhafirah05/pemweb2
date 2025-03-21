<!DOCTYPE html>
<?php 
  require_once 'fungsiku.php'; 
?>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Nilai Mahasiswa</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    body {
      background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
      font-family: 'Poppins', sans-serif;
      padding: 20px;
    }
    .form-container {
      background: #ffffff;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      max-width: 800px;
      margin: 0 auto;
    }
    .form-container h3 {
      color: #2c3e50;
      font-weight: 700;
      margin-bottom: 20px;
      text-align: center;
    }
    .form-group label {
      font-weight: 600;
      color: #34495e;
    }
    .form-control {
      border-radius: 10px;
      border: 2px solid #dfe6e9;
      transition: all 0.3s ease;
    }
    .form-control:focus {
      border-color: #3498db;
      box-shadow: 0 0 10px rgba(52, 152, 219, 0.2);
    }
    .btn-primary {
      background: linear-gradient(135deg, #3498db, #2980b9);
      border: none;
      border-radius: 10px;
      padding: 10px 20px;
      font-weight: 600;
      transition: all 0.3s ease;
    }
    .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(52, 152, 219, 0.4);
    }
    .hasil-container {
      background: #ffffff;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      max-width: 800px;
      margin: 20px auto;
      animation: fadeIn 0.5s ease-in-out;
    }
    .hasil-container h3 {
      color: #27ae60;
      font-weight: 700;
      margin-bottom: 20px;
      text-align: center;
    }
    .hasil-container p {
      font-size: 18px;
      color: #2c3e50;
      margin-bottom: 10px;
    }
    .hasil-container p strong {
      color: #3498db;
    }
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h3>Form Nilai Mahasiswa</h3>
    <?php 
      $ar_matkul = [
        'DDP' => 'Dasar-Dasar Pemrograman',
        'WEB1' => 'Pemrograman Web 1',
        'WEB2' => 'Pemrograman Web 2',
        'BASDAT' => 'Basis Data',
        'UI/UX' => 'UI/UX',
        'JARKOM' => 'Jaringan Komputer',
        'SE' => 'Sistem Enterprise',
      ];
    ?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
        <div class="col-8">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fas fa-user"></i>
              </div>
            </div> 
            <input id="nama" name="nama" type="text" class="form-control" required>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
        <div class="col-8">
          <select id="matkul" name="matkul" class="custom-select" required>
            <option value="0">-- Pilih Mata Kuliah --</option>
            <?php 
              foreach($ar_matkul as $kode => $matkul) {
                echo "<option value='$kode'>$matkul</option>";
              }
            ?>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
        <div class="col-8">
          <input id="nilai_uts" name="nilai_uts" type="number" class="form-control" min="0" max="100" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
        <div class="col-8">
          <input id="nilai_uas" name="nilai_uas" type="number" class="form-control" min="0" max="100" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="nilai_tugas" class="col-4 col-form-label">Tugas/Praktikum</label> 
        <div class="col-8">
          <input id="nilai_tugas" name="nilai_tugas" type="number" class="form-control" min="0" max="100" required>
        </div>
      </div> 
      <div class="form-group row">
        <div class="offset-4 col-8">
          <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </form>
  </div>

  <?php 
    if(isset($_POST['submit'])) { 
      $_nama = $_POST['nama'];
      $_matkul = $_POST['matkul'];    
      $_nilai_uts = $_POST['nilai_uts'];
      $_nilai_uas = $_POST['nilai_uas'];
      $_nilai_tugas = $_POST['nilai_tugas'];

      // Validasi mata kuliah
      if (!array_key_exists($_matkul, $ar_matkul)) {
        echo "<div class='hasil-container'><h3>Error</h3><p>Mata kuliah tidak valid.</p></div>";
      } else {
        $_nilai_akhir = hitung_nilai($_nilai_uts, $_nilai_uas, $_nilai_tugas);
        $_ket_lulus = ($_nilai_akhir);
  ?>
  <div class="hasil-container">
    <h3>Hasil Input Data</h3>
    <p><strong>Nama Mahasiswa:</strong> <?php echo $_nama; ?></p>
    <p><strong>Mata Kuliah:</strong> <?php echo $ar_matkul[$_matkul]; ?></p>       
    <p><strong>Nilai UTS:</strong> <?php echo $_nilai_uts; ?></p>
    <p><strong>Nilai UAS:</strong> <?php echo $_nilai_uas; ?></p>
    <p><strong>Nilai Tugas:</strong> <?php echo $_nilai_tugas; ?></p>
    <p><strong>Nilai Akhir:</strong> <?php echo $_nilai_akhir; ?></p>
    <p><strong>Hasil Kelulusan:</strong> <?php echo $_ket_lulus; ?></p>
  </div>
  <?php 
      }
    } 
  ?>
</body>
<?php include_once 'daftar_mahasiswa.php'; ?>
</html>