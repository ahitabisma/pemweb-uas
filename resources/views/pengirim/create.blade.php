@extends('layout.main')

@section('content')
    <div class="row">
        <div class="col">
            <h1 class="text-center">Tambah Pengirim</h1>
        </div>
    </div>
    <a href="/">
        <button class="btn btn-primary mt-4">Back</button>
    </a>

    <div class="card mt-3">
        <div class="card-body">

            <form action="/pengirim/store" method="POST">
                @csrf

                <div class="input-group input-group-outline my-3">
                    <input type="text" name="nama_pengirim"
                        class="form-control @error('nama_pengirim') is-invalid @enderror" value="{{ old('nama_pengirim') }}"
                        placeholder="Nama Pengirim" required>
                    @error('nama_pengirim')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="input-group input-group-outline my-3">
                    <input type="text" name="alamat_pengirim"
                        class="form-control @error('alamat_pengirim') is-invalid @enderror"
                        value="{{ old('alamat_pengirim') }}" placeholder="Alamat Pengirim" required>
                    @error('alamat_pengirim')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="input-group input-group-outline my-3">
                    <input type="number" name="telepon_pengirim"
                        class="form-control @error('telepon_pengirim') is-invalid @enderror"
                        value="{{ old('telepon_pengirim') }}" placeholder="Telepon Pengirim" required>
                    @error('telepon_pengirim')
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
