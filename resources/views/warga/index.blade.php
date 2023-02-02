@extends('layouts.master')

@section('content')
    <div class="container" style="margin-top: 30px;">
        <a class="btn btn-primary margin-top-xl" href="/warga/create">Add Data</a>
        <table class="table table-hover">
            <tr>
                <th>N0</th>
                <th>Nama</th>
                <th>NIK</th>
                <th>No KK</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>AKSI</th>
            </tr>
            @foreach ($warga as $w)
                <tr>
                    <td>{{ $w->id }}</td>
                    <td>{{ $w->nama }}</td>
                    <td>{{ $w->nik }}</td>
                    <td>{{ $w->no_kk }}</td>
                    <td>{{ $w->jenis_kelamin }}</td>
                    <td>{{ $w->alamat }}</td>
                    <td>
                        <div class="btn-group">
                            <a class="btn btn-warning" href="/warga/{{ $w->id }}/edit">Edit</a>
                        </div>
                       
                        <div class="btn-group">
                            <form action="/warga/{{ $w->id }}" method="POST">
                                @csrf
                                @method('delete')
                                <input class="btn btn-danger" type="submit" value="Delete">
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection



