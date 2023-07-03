@extends('layout.main')

@section('content')
    <div class="row">
        <div class="col">
            <h1 class="text-center">Tambah Penerima</h1>
        </div>
    </div>
    <a href="/">
        <button class="btn btn-primary mt-4">Back</button>
    </a>

    <div class="card mt-3">
        <div class="card-body">

            <form action="/penerima/store" method="POST">
                @csrf

                <div class="input-group input-group-outline my-3">
                    <input type="text" name="nama_penerima"
                        class="form-control @error('nama_penerima') is-invalid @enderror" value="{{ old('nama_penerima') }}"
                        placeholder="Nama Penerima" required>
                    @error('nama_penerima')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="input-group input-group-outline my-3">
                    <input type="text" name="alamat_penerima"
                        class="form-control @error('alamat_penerima') is-invalid @enderror"
                        value="{{ old('alamat_penerima') }}" placeholder="Alamat Penerima" required>
                    @error('alamat_penerima')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="input-group input-group-outline my-3">
                    <input type="number" name="telepon_penerima"
                        class="form-control @error('telepon_penerima') is-invalid @enderror"
                        value="{{ old('telepon_penerima') }}" placeholder="Telepon Penerima" required>
                    @error('telepon_penerima')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button class="btn btn-primary" type="submit">Create</button>
            </form>
        </div>
    </div>
@endsection
