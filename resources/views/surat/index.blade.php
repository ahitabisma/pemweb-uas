@extends('layout.main')

@section('content')
    <div class="row">
        <div class="col">
            <h1 class="text-center">Surat Menyurat</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="/create">
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
                        <th>No Surat</th>
                        <th>Tanggal Surat</th>
                        <th>Judul</th>
                        <th>Isi</th>
                        <th>Pengirim</th>
                        <th>Penerima</th>
                        <th>Kategori</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($surats as $surat)
                        <tr>
                            <td>
                                <p>{{ $surat->nomor_surat }}</p>
                            </td>
                            <td>
                                <p>{{ $surat->tanggal_surat }}</p>
                            </td>
                            <td>
                                <p>{{ $surat->judul }}</p>
                            </td>
                            <td>
                                <p>{{ $surat->isi }}</p>
                            </td>
                            <td>
                                <p>{{ $surat->pengirim_id }}</p>
                            </td>
                            <td>
                                <p>{{ $surat->penerima_id }}</p>
                            </td>
                            <td>
                                <p>{{ $surat->kategori_id }}</p>
                            </td>
                            <td>
                                {{-- <a href="/surats/{{ $surat->id }}"><i class="fa-solid fa-eye"></i></a> --}}
                                <a href="/edit/{{ $surat->id }}"><i class="fa-solid fa-pen-to-square"></i></a>
                                <form action="/destroy/{{ $surat->id }}" method="post" class="d-inline">
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
