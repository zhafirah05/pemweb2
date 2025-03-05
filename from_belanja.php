<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja Online</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet"> <!-- Font dengan Cairo -->
    <style>
        body {
            background-color: #1a1a1a; /* Warna latar belakang gelap */
            color: #f0f0f0; /* Warna teks terang */
            font-family: 'Cairo', sans-serif; /* font dengan Cairo */
        }
        .card {
            background: linear-gradient(145deg, #3a3a3a, #4a4a4a); /* Gradient abu-abu */
            color: #f0f0f0; /* Warna teks terang */
            border-radius: 15px;
            border: 2px solid #ffcc00; /* Border kuning */
            box-shadow: 0 4px 15px rgba(255, 204, 0, 0.6); /* Shadow kuning */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card:hover {
            transform: translateY(-10px); /* Efek hover naik */
            box-shadow: 0 8px 25px rgba(255, 204, 0, 0.8); /* Shadow lebih kuat saat hover */
        }
        .btn-primary {
            background-color: #ffcc00; /* Warna tombol kuning */
            border-color: #ffcc00;
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #e6b800; /* Warna tombol kuning lebih gelap saat hover */
            border-color: #e6b800;
        }
        .alert-success {
            background-color: #ffcc00; /* Warna alert kuning */
            border-color: #ffcc00;
            color: #000000; /* Warna teks hitam */
            box-shadow: 0 4px 10px rgba(255, 204, 0, 0.6); /* Shadow kuning */
        }
        .form-control {
            background-color: rgba(255, 255, 255, 0.1); /* Input field semi-transparent */
            color: #f0f0f0; /* Warna teks terang */
            border: 1px solid #ffcc00; /* Border kuning */
        }
        .form-control:focus {
            background-color: rgba(255, 255, 255, 0.2); /* Input field lebih terang saat focus */
            border-color: #ffcc00; /* Border kuning saat focus */
            box-shadow: 0 0 8px rgba(255, 204, 0, 0.6); /* Shadow kuning saat focus */
        }
        .ramadhan-theme {
            font-family: 'Cairo', sans-serif; /* font dengan Cairo */
            color: #ffcc00; /* Warna kuning untuk tema Ramadhan */
            text-shadow: 0 0 10px rgba(255, 204, 0, 0.8), 0 0 20px #ffd700; /* Efek glow */
            font-size: 2.5rem; /* Ukuran font lebih besar */
            font-weight: bold; /* Tebal */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="card p-4">
            <h2 class="text-center ramadhan-theme">finiya trasport 🚗🏍️</h2>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="form-group">
                    <label for="namaCustomer">Nama Customer</label>
                    <input type="text" class="form-control" id="namaCustomer" name="namaCustomer" required>
                </div>
                <div class="form-group">
                    <label for="produk">Pilih Produk</label>
                    <select class="form-control" id="produk" name="produk" required>
                        <option value="Mobil">Mobil</option>
                        <option value="Motor">Motor</option>
                        <option value="Mobil Listrik">Mobil Listrik</option>
                        <option value="Motor Listrik">Motor Listrik</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="jumlah">Jumlah</label>
                    <input type="number" class="form-control" id="jumlah" name="jumlah" required min="1">
                </div>
                <button type="submit" class="btn btn-primary">Kirim</button>
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $namaCustomer = $_POST['namaCustomer'];
                $produk = $_POST['produk'];
                $jumlah = $_POST['jumlah'];

                $harga = [
                    'Mobil' => 172600000,
                    'Motor' => 30000000,
                    'Mobil Listrik' => 500000000,
                    'Motor Listrik' => 15000000,
                ];

                $totalBelanja = $harga[$produk] * $jumlah;

                echo "<div class='mt-4'>
                        <h4>Detail Belanja</h4>
                        <p>Nama Customer: $namaCustomer</p>
                        <p>Produk: $produk</p>
                        <p>Jumlah: $jumlah</p>
                        <p>Total Belanja: Rp. " . number_format($totalBelanja, 0, ',', '.') . ",-</p>
                        <div class='alert alert-success mt-3'>
                            Terima kasih telah berbelanja di toko kami 🙏🏼
                        </div>
                      </div>";
            }
            ?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>