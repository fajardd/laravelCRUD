<table border="1">
    <tr>
        <th>NO</th>
        <th>NAMA</th>
        <th>NIK</th>
        <th>No KK</th>
        <th>JENIS KELAMIN</th>
        <th>ALAMAT</th>
    </tr>
    @foreach ($warga as $w)
        <tr>
            <td>{{ $w->id }}</td>
            <td>{{ $w->nama }}</td>
            <td>{{ $w->nik }}</td>
            <td>{{ $w->no_kk }}</td>
            <td>{{ $w->jenis_kelamin }}</td>
            <td>{{ $w->alamat }}</td>
        </tr>
    @endforeach
</table>