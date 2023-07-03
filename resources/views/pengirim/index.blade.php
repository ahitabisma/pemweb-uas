@extends('layout.main')

@section('content')
    <div class="row">
        <div class="col">
            <h1 class="text-center">Pengirim Surat</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="/pengirim/create">
                <button class="btn btn-primary mt-4">Insert</button>
            </a>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-body">
            @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    <span>{{ session('success') }} </span>
                </div>
            @endif
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pengirim</th>
                        <th>Alamat Pengirim</th>
                        <th>Telepon Pengirim</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pengirims as $pengirim)
                        <tr>
                            <td>
                                <p>{{ $pengirim->id }}</p>
                            </td>
                            <td>
                                <p>{{ $pengirim->nama_pengirim }}</p>
                            </td>
                            <td>
                                <p>{{ $pengirim->alamat_pengirim }}</p>
                            </td>
                            <td>
                                <p>{{ $pengirim->telepon_pengirim }}</p>
                            </td>
                            <td>
                                <a href="/pengirim/edit/{{ $pengirim->id }}"><i class="fa-solid fa-pen-to-square"></i></a>
                                <form action="/pengirim/destroy/{{ $pengirim->id }}" method="post" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="border-0" onclick="return confirm('Hapus data?')"><i
                                            class="fa-solid fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                    </tfoot>
            </table>
        </div>
    </div>
@endsection
