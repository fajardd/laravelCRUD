<h1>Create Data Warga</h1>

<form action="/warga/store" method="POST">
    @csrf
    <input type="text" name="nama" placeholder="Masukkan Nama" autocomplete="off"><br>
    <input type="text" name="nik" placeholder="Masukkan NIK" autocomplete="off"><br>
    <input type="text" name="no_kk" placeholder="Masukkan No KK" autocomplete="off"><br>
    <select name="jenis_kelamin">
        <option value="">Pilih Jenis Kelamin</option>
        <option value="L">Laki Laki</option>
        <option value="P">Perempuan</option>
    </select><br>
    <textarea name="alamat" autocomplete="off"></textarea><br>
    <input type="submit" name="submit" value="save">
</form>