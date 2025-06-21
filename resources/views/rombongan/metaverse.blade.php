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
        h3 {
            font-family: "Source Sans Pro", sans-serif;
            font-weight: 500;
            font-size: 24px;
        }

        label {
            font-family: Corbel, Arial, Helvetica, sans-serif;
            font-size: 14px;
            font-weight: 700;
            padding: 5px !important;
        }

        header {
            margin-bottom: 30px;
        }
    </style>
    <title>Rombongan Form</title>
</head>


@include('sweetalert::alert')

<body class="bg-light d-flex justify-content-center align-items-center">
    <div class="container">
        @include('layout.navbar.metaverse.rombongan')
        <form class="mt-4" action="/rombo" method="post">
            @csrf
            <div class="row">
                <div class="col-3">
                    <label for="NamaKetua" class="form-label"><b>Nama Ketua Rombongan</b></label>
                </div>
                <div class="col-6">
                    <input id="NamaKetua" type="text" name="NamaKetua"
                        class="form-control  @error('NamaKetua')is-invalid @enderror" value="{{ old('NamaKetua') }}"
                        autofocus>
                    @error('NamaKetua')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <label class="form-label">Event</label>
                </div>
                <div class="col-6">
                    <input type="text" id="disabledTextInput" class="form-control" name="event_id"
                        placeholder="Perpustakaan Keliling" value='3' readonly>
                </div>
            </div>
            <div class="row ">
                <div class="col-3">
                    <label for="NomerTelponKetua" class="form-label"><b>Nomor Telepon Ketua Rombongan</b></label>
                </div>
                <div class="col-6">
                    <input id="NomerTelponKetua" type="number" name="NomerTelponKetua"
                        class="form-control mt-2  @error('NomerTelponKetua')is-invalid @enderror"
                        value="{{ old('NomorTelponKetua') }}">
                    @error('NomerTelponKetua')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row ">
                <div class="col-3">
                    <label for="AsalInstansi"><b>Nama Instansi Lembaga</b></label>
                </div>
                <div class="col-6">
                    <input type="text" name="AsalInstansi"
                        class="form-control mt-2  @error('AsalInstansi')is-invalid @enderror"
                        value="{{ old('AsalInstansi') }}">
                    @error('AsalInstansi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>


            <div class="row ">
                <div class="col-3">
                    <label for="AlamatInstansi"><b>Alamat Instansi Lembaga</b></label>
                </div>
                <div class="col-6">
                    <textarea class="form-control mt-2  @error('AlamatInstansi')is-invalid @enderror" value="{{ old('AlamatInstansi') }}"
                        name="AlamatInstansi" id="floatingTextarea" value="{{ old('AsalInstansi') }}"></textarea>
                    @error('AlamatInstansi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row ">
                <div class="col-3">
                    <label for="TeleponInstansi"><b>Nomor Telepon Instansi Lembaga</b></label>
                </div>
                <div class="col-6">
                    <input type="number" name="TeleponInstansi"
                        class="form-control mt-2  @error('TeleponInstansi')is-invalid @enderror"
                        value="{{ old('TeleponInstansi') }}">
                    @error('TeleponInstansi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row ">
                <div class="col-3">
                    <label for="EmailInstansi"><b>Alamat Email Instansi Lembaga</b></label>
                </div>
                <div class="col-6">
                    <input type="text" name="EmailInstansi"
                        class="form-control mt-2  @error('EmailInstansi')is-invalid @enderror"
                        value="{{ old('EmailInstansi') }}">
                    @error('EmailInstansi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row ">
                <div class="col-3">
                    <label for="CountPersonel"><b>Jumlah Personil</b></label>
                </div>
                <div class="col-6">
                    <input type="number" name="CountPersonel" placeholder="0"
                        class="form-control mt-2  @error('CountPersonel')is-invalid @enderror"
                        value="{{ old('CountPersonel') }}">
                    @error('CountPersonel')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-3">
                    <label for="jumlah" class="control-label"><b>Jenis Kelamin</b></label>
                </div>
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-sm-3">
                            <label class="visually-hidden" for="CountLaki"></label>
                            <div class="input-group">
                                <div class="input-group-text">Laki-Laki </div>
                                <input type="number" name="CountLaki" class="form-control" id="CountLaki"
                                    placeholder="0">
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <label class="visually-hidden" for="CountPerempuan"></label>
                            <div class="input-group">
                                <div class="input-group-text">Perempuan</div>
                                <input type="number" name="CountPerempuan" class="form-control" id="CountPerempuan"
                                    placeholder="0">
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row form-group mt-4">
                <div class="col-3">
                    <label for="pekerjaan" class="control-label"><b>Pekerjaan</b></label>
                </div>
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-sm-3">
                            <label for="CountPNS" class="visually-hidden"><b></b></label>
                            <div class="input-group">
                                <div class="input-group-text">PNS</div>
                                <input id="CountPNS" class="form-control" type="number" placeholder="0"
                                    name="CountPNS">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label for="CountPSwasta" class="visually-hidden"><b></b></label>
                            <div class="input-group">
                                <div class="input-group-text">Pegawai Swasta</div>
                                <input id="CountPSwasta" class="form-control" type="number" placeholder="0"
                                    name="CountPSwasta">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label for="CountPeneliti" class="visually-hidden"><b></b></label>
                            <div class="input-group">
                                <div class="input-group-text">Peneliti</div>
                                <input id="CountPeneliti" class="form-control" type="number" placeholder="0"
                                    name="CountPeneliti">
                            </div>
                        </div>
                    </div>

                    <div class="row form-group mt-3">
                        <div class="col-sm-3">
                            <label for="CountGuru" class="visually-hidden"><b></b></label>
                            <div class="input-group">
                                <div class="input-group-text">Guru</div>
                                <input id="CountGuru" class="form-control" type="number" placeholder="0"
                                    name="CountGuru">
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <label for="CountDosen" class="visually-hidden"><b></b></label>
                            <div class="input-group">
                                <div class="input-group-text">Dosen</div>
                                <input id="CountDosen" class="form-control" type="number" placeholder="0"
                                    name="CountDosen">
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <label for="CountPensiunan" class="visually-hidden"><b></b></label>
                            <div class="input-group">
                                <div class="input-group-text">Pensiunan</div>
                                <input id="CountPensiunan" class="form-control" type="number" placeholder="0"
                                    name="CountPensiunan">
                            </div>
                        </div>
                    </div>

                    <div class="row form-group mt-3">
                        <div class="col-sm-3">
                            <label for="CountTNI" class="visually-hidden"><b></b></label>
                            <div class="input-group">
                                <div class="input-group-text">TNI</div>
                                <input id="CountTNI" class="form-control" type="number" placeholder="0"
                                    name="CountTNI">
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <label for="CountWiraswasta" class="visually-hidden"><b></b></label>
                            <div class="input-group">
                                <div class="input-group-text">Wiraswasta</div>
                                <input id="CountWiraswasta" class="form-control" type="number" placeholder="0"
                                    name="CountWiraswasta">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label for="CountPelajar" class="visually-hidden"><b></b></label>
                            <div class="input-group">
                                <div class="input-group-text">Pelajar</div>
                                <input id="CountPelajar" class="form-control" type="number" placeholder="0"
                                    name="CountPelajar">
                            </div>
                        </div>
                    </div>

                    <div class="row form-group mt-3">
                        <div class="col-sm-3">
                            <label for="CountMahasiswa" class="visually-hidden"><b></b></label>
                            <div class="input-group">
                                <div class="input-group-text">Mahasiswa</div>
                                <input id="CountMahasiswa" class="form-control" type="number" placeholder="0"
                                    name="CountMahasiswa">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label for="CountLainnya" class="visually-hidden"><b></b></label>
                            <div class="input-group">
                                <div class="input-group-text">Lainnya</div>
                                <input id="CountLainnya" class="form-control" type="number" placeholder="0"
                                    name="CountLainnya">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row form-group mt-4">
                <div class="col-3">
                    <label for="pekerjaan" class="col-3 control-label"><b>Pendidikan Terakhir </b></label>
                </div>
                <div class="col-sm-9">
                    <div class="row form-group mt-3">
                        <div class="col-sm-3">
                            <label for="CountSD" class="visually-hidden"><b></b></label>
                            <div class="input-group">
                                <div class="input-group-text">SD</div>
                                <input id="CountSD" class="form-control" type="number" placeholder="0"
                                    name="CountSD">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label for="CountSMP" class="visually-hidden"><b></b></label>
                            <div class="input-group">
                                <div class="input-group-text">SMP(sederajat)</div>
                                <input id="CountSMP" class="form-control" type="number" placeholder="0"
                                    name="CountSMP">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label for="CountSMA" class="visually-hidden"><b></b></label>
                            <div class="input-group">
                                <div class="input-group-text">SMA(sederajat)</div>
                                <input id="CountSMA" class="form-control" type="number" placeholder="0"
                                    name="CountSMA">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-sm-3">
                            <label for="CountD1" class="visually-hidden"><b></b></label>
                            <div class="input-group">
                                <div class="input-group-text">Diploma(D1)</div>
                                <input id="CountD1" class="form-control" type="number" placeholder="0"
                                    name="CountD1">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label for="CountD2" class="visually-hidden"><b></b></label>
                            <div class="input-group">
                                <div class="input-group-text">Diploma(D2)</div>
                                <input id="CountD2" class="form-control" type="number" placeholder="0"
                                    name="CountD2">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label for="CountD3" class="visually-hidden"><b></b></label>
                            <div class="input-group">
                                <div class="input-group-text">Diploma(D3)</div>
                                <input id="CountD3" class="form-control" type="number" placeholder="0"
                                    name="CountD3">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-sm-3">
                            <label for="CountS1" class="visually-hidden"><b></b></label>
                            <div class="input-group">
                                <div class="input-group-text">Sarjana(S1)</div>
                                <input id="CountS1" class="form-control" type="number" placeholder="0"
                                    name="CountS1">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label for="CountS2" class="visually-hidden"><b></b></label>
                            <div class="input-group">
                                <div class="input-group-text">Magister(S2)</div>
                                <input id="CountS2" class="form-control" type="number" placeholder="0"
                                    name="CountS2">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label for="CountS3" class="visually-hidden"><b></b></label>
                            <div class="input-group">
                                <div class="input-group-text">Doktor(S3)</div>
                                <input id="CountS3" class="form-control" type="number" placeholder="0"
                                    name="CountS3">
                            </div>
                        </div>
                        <div class="row gap-2 mt-4 justify-content-md-start">

                            <button type="submit" class="btn btn-success col-sm-3">Simpan</button>&nbsp;
                            <button type="reset" class="btn btn-outline-secondary col-sm-3">Ulangi</button>
                        </div>
                    </div>
                </div>

            </div>
        </form>
        <footer class="bg-body-light text-center text-lg-start" style="padding-top: 50px;">
            <div class="text-center p-3">
                <a class="text-body" href="https://inlislite.perpusnas.go.id/">Hak Cipta © 2024 Perpustakaan Nasional
                    Republik Indonesia</a>
            </div>
        </footer>
    </div>
</body>
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
