<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Bootstrap</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Style -->
    <style>
        body {
            background-color: #e35c5ce0; /* abu muda */
        }

        .btn-dark-gray {
            background-color: #780303; /* abu tua */
            color: #ffffff;
            /* border: none; */
        }
        h1 {
            text-align: center;
            color: white;
        }

        .btn-dark-gray:hover {
            background-color: #152a3e;
            color: #ffffff;
        }

      table thead th {
    background-color: #7b3232 !important;
    color: white !important;
    text-align: center;
}


td {
    text-align: center;
}

        
        
    </style>
</head>
<body>

<div class="container mt-5">
    <h1 class="mb-4">Data Anggota Baru HIMANIKA</h1>
    
    <table class="table table-striped table-hover table-bordered">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nim</th>
                <th>Angkatan</th>
                <th>Golongan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Filia Rachmawati</td>
                <td>E31251234</td>
                <td>2025</td>
                <td>B</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Resya Cinta Aulya</td>
                <td>E31251765</td>
                <td>2025</td>
                <td>A</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Machika Elvarina</td>
                <td>E31252456</td>
                <td>2025</td>
                <td>E</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Tristan Juliano</td>
                <td>E3124231</td>
                <td>2024</td>
                <td>C</td>
            </tr>
        </tbody>
</table>
</div>

    <div class="text-center mt-3">
    <a href="form.php" class="btn btn-dark-gray me-2">Input Form</a>
    <a href="belajar.php" class="btn btn-dark-gray">Kembali ke Halaman Belajar</a>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
