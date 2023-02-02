<h1>Edit Data Warga</h1>

<form action="/warga/{{ $warga->id }}" method="POST">
    @method('put')
    @csrf
    <input type="text" name="nama" autocomplete="off" value="{{ $warga->nama }}"><br>
    <input type="text" name="nik" autocomplete="off" value="{{ $warga->nik }}"><br>
    <input type="text" name="no_kk" autocomplete="off" value="{{ $warga->no_kk }}"><br>
    <select name="jenis_kelamin">
        <option value="">Pilih Jenis Kelamin</option>
        <option value="L" @if($warga->jenis_kelamin == "L") selected @endif>Laki Laki</option>
        <option value="P" @if($warga->jenis_kelamin == "P") selected @endif>Perempuan</option>
    </select><br>
    <textarea autocomplete="off" name="alamat">{{ $warga->alamat }}</textarea><br>
    <input type="submit" name="submit" value="update">
</form>