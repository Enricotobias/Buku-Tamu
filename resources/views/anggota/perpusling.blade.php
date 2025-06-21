<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        a {
            text-decoration: none;
            color: black;
        }

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: red;
            color: white;
            text-align: center;
        }
    </style>
    <title>Anggota Form</title>
</head>


<body class="bg-light d-flex justify-content-center align-items-center">
    @include('sweetalert::alert')
    <div class="container">
        @include('layout.navbar.perpusling.anggota')
        <form action="/anggota" method="post">
            @csrf

            <div class="row align-items-center">
                <div class="input-group mb-3 mt-5">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Nama Anggota</span>
                    </div>
                    <input name="namaPengguna" id="namaPengguna" type="text"
                        class="form-control  @error('namaPengguna')is-invalid @enderror"
                        value="{{ old('namaPengguna') }}" autofocus aria-label="Default"
                        aria-describedby="inputGroup-sizing-default">
                    @error('namaPengguna')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="input-group mb-3 mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Event</span>
                    </div>
                    <input type="text" id="disabledTextInput" class="form-control" name="event_id"
                        placeholder="Perpustakaan Keliling" value='2' readonly>

                </div>

                <div class="input-group mb-3 mt-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Nomor Anggota</span>
                    </div>
                    <input type="number" placeholder="0" name="nomorAnggota" id="nomorAnggota"
                        class="form-control @error('nomorAnggota')is-invalid @enderror"
                        value="{{ old('nomorAnggota') }}" aria-label="Default"
                        aria-describedby="inputGroup-sizing-default">
                    @error('namaPengguna')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row gap-2 mt-4 justify-content-md-start mt-5">
                <button type="submit" class="btn btn-success col-sm-3">Simpan</button>&nbsp;
                <button type="reset" class="btn btn-outline-secondary col-sm-3">Ulangi</button>
            </div>

            <div class="d-flex justify-content-end">
                <button type="button" class="btn btn-info col-sm-2 mt-5"><a
                        href="https://perpustakaan.semarangkota.go.id/pendaftaran">
                        Daftarkan Anggota Disini</a></button>
            </div>
    </div>
    <div class="footer">
        <footer class="bg-body-tertiary text-center text-lg-start" style="padding-top: 50px;">
            <div class="text-center p-3">
                <a class="text-body" href="https://inlislite.perpusnas.go.id/" target="_blank">Hak Cipta © 2024
                    Perpustakaan
                    Nasional
                    Republik Indonesia</a>
            </div>
        </footer>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>
