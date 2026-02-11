<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- Custom Style -->
    <style>
        body {
            background-color: #8e4646; /* abu muda */
        }

        .card {
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
        }

        .card {
    background-color: #ffffff; /* maroon */
    color: black;              /* teks jadi putih */
    border: none;
}

.card-header {
    background-color: #6c1212; /* samakan dengan card */
    color: white;
    border-bottom: none;
}

.btn-maroon {
    background-color: #9c2f2f; /* merah maroon */
    color: white;
    border: none;
}

.btn-maroon:hover {
    background-color: #c00000; /* lebih terang saat hover */
    color: white;
}

    </style>
</head>
<body>

<div class="container-fluid min-vh-100 d-flex justify-content-center align-items-center">
    <div class="col-md-6">
        <div class="card text-center shadow" style="border-radius: 30px;">
            
            <div class="card-header" style="border-radius: 30px 30px 0 0;">
                <h1 class="card-title">Selamat Datang HIMANIKA Baru</h1>
            </div>

            <div class="card-body">
                <p class="card-text">Mari menjadi bagian dari keluarga HIMANIKA.</p>
                <a href="tabel2.php" class="btn btn-maroon px-4" style="border-radius: 20px;">
                    Klik Untuk Bergabung
                </a>
            </div>

        </div>
    </div>
</div>


<!-- JS -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
