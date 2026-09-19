<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-light d-flex flex-column min-vh-100">

    <nav class="navbar navbar-dark bg-primary shadow-sm mb-4">
        <div class="container">
            <a href="#" class="navbar-brand fw-bold">
                Mahasiswa
            </a>
        </div>
    </nav>

    <div class="container flex-grow-1">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">

                    <div class="card-header bg-white text-center py-4">
                        <img
                            src="{{ asset('Gunawan.png') }}"
                            alt="Foto Mahasiswa"
                            class="rounded-circle img-thumbnail shadow-sm"
                            style="max-width: 120px; height: 120px;"
                        >
                    </div>

                    <div class="card-body">
                        <p><strong>Nama :</strong> {{ $mahasiswa['nama'] }}</p>
                        <p><strong>NIM :</strong> {{ $mahasiswa['nim'] }}</p>
                        <p><strong>Prodi :</strong> {{ $mahasiswa['prodi'] }}</p>
                        <p><strong>Email :</strong> {{ $mahasiswa['email'] }}</p>
                        <p><strong>Kampus :</strong> {{ $mahasiswa['kampus'] }}</p>
                        <p><strong>Status :</strong> {{ $mahasiswa['status'] }}</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

</body>
</html>