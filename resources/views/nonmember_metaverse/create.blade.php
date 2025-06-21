@extends('layout.pages.metaverse')

@section('konten')
    <!-- START FORM -->
    <div class="container mt-4">
        <form class="bg-light p-4 rounded" action="{{ url('nonmember_metaverse') }}" method="POST">
            @csrf
            <div class="form-group row mb-4">
                <label class="col-sm-2 col-form-label">Nama Pengunjung</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('nama')is-invalid @enderror" name="nama" value="{{ old('nama') }}" autofocus>
                    @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group row mb-4">
                <label class="col-sm-2 col-form-label">Event</label>
                <div class="col-sm-10">
                    <input type="text" id="disabledTextInput" class="form-control" name="event_id" placeholder="Metaverse" value='3' readonly>
                </div>
            </div>
            <div class="form-group row mb-4">
                <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                    <div class="form-check form-check-inline ">
                        <input class="form-check-input @error('jenis_kelamin')is-invalid @enderror" type="radio" name="jenis_kelamin" id="maleRadio" value="1" {{ old('jenis_kelamin') == '1' ? 'checked' : '' }}>
                        <label class="form-check-label" for="maleRadio">Laki-Laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input @error('jenis_kelamin') is-invalid @enderror" type="radio" name="jenis_kelamin" id="femaleRadio" value="2" {{ old('jenis_kelamin') == '2' ? 'checked' : '' }}>
                        <label class="form-check-label" for="femaleRadio">Perempuan</label>
                    </div>
                    @error('jenis_kelamin')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group row mb-4">
                <label class="col-sm-2 col-form-label">Pekerjaan</label>
                <div class="col-sm-10">
                    <select name="Profesi_id" class="form-control @error('Profesi_id') is-invalid @enderror">
                        <option value="">-Pilih-</option>
                        @foreach ($jobs as $item)
                        <option value="{{ $item->id }}" {{ old('Profesi_id') == $item->id ? 'selected' : null }}>{{ $item->Pekerjaan }}</option>
                        @endforeach
                    </select>
                    @error('Profesi_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group row mb-4">
                <label class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
                <div class="col-sm-10">
                    <select name="PendidikanTerakhir_id" class="form-control @error('PendidikanTerakhir_id')is-invalid @enderror">
                        <option value="">-Pilih-</option>
                        @foreach ($edu as $item)
                        <option value="{{ $item->id }}" {{ old('PendidikanTerakhir_id') == $item->id ? 'selected' : null }}>{{ $item->Nama }}</option>
                        @endforeach
                    </select>
                    @error('PendidikanTerakhir_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group row mb-4">
                <label class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <textarea type="text"  name="alamat" class="form-control @error('alamat')is-invalid @enderror" >{{ old('alamat') }}</textarea>
                    @error('alamat')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group row mb-4">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-success">Submit</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
            </div>
        </form>

        <footer class="bg-body-tertiary text-center text-lg-start" style="padding-top: 50px;">
            <div class="text-center p-3">
                <a class="text-body" href="https://inlislite.perpusnas.go.id/">Hak Cipta © 2024 Perpustakaan Nasional
                    Republik Indonesia</a>
            </div>
        </footer>
    </div>
    <!-- AKHIR FORM -->
@endsection
