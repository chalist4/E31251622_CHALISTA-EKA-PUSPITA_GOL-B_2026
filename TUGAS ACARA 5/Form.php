<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data Mahasiswa</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Style -->
    <style>
        body {
            background-color: #e35c5ce0; /* abu muda */
        }

        .card-header {
            background-color: #a80d0d; /* abu tua */
            color: white;
        }

        .btn-dark-gray {
            background-color: #a80d0d;
            color: white;
            border: none;
        }

        .btn-dark-gray:hover {
            background-color: #a80d0d;
            color: white;
        }

        .btn-outline-dark-gray {
            background-color: #a80d0d;
            color: #ffffff;
        }

        .btn-outline-dark-gray:hover {
            background-color: #495057;
            color: white;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header">
                    <h3 class="card-title mb-0">Form Pendaftaran calon HIMANIKA</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Mahasiswa</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama mahasiswa" required>
                        </div>

                        <div class="mb-3">
                            <label for="nim" class="form-label">NIM Mahasiswa</label>
                            <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan nomor induk mahasiswa" required>
                        </div>

                        <div class="mb-3">
                            <label for="angkatan" class="form-label">Angkatan</label>
                            <select class="form-select" id="angkatan" name="angkatan" required>
                                <option value="">-- Pilih Angkatan --</option>
                                <option value="2025">2025</option>
                                <option value="2024">2024</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="golongan" class="form-golongan">Golongan</label>
                            <select class="form-select" id="golongan" name="golongan" required>
                                <option value="">-- Pilih Golongan --</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                            </select>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-dark-gray">Simpan Data</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="mt-3">
                <a href="belajar.php" class="btn btn-outline-dark-gray">
                    Kembali ke Halaman Belajar
                </a>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
// Cek apakah form sudah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama   = $_POST['nama'];
    $nim    = $_POST['nim'];
    $prodi  = $_POST['prodi'];
    $alamat = $_POST['golongan'];
    
    echo "<div class='container mt-4'>";
    echo "<div class='card'>";
    echo "<div class='card-body'>";
    echo "<h4>Data Mahasiswa</h4>";
    echo "Nama : $nama <br>";
    echo "NIM : $nim <br>";
    echo "Program Studi : $prodi <br>";
    echo "Golongan : $golongan <br>";
    echo "</div></div></div>";
}
?>
