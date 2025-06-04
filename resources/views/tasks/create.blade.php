<h1>Buat Tugas</h1>
<form method="POST" action="{{ route('tasks.store') }}">
    @csrf
    Judul: <input name="title"><br>
    Deskripsi: <textarea name="description"></textarea><br>
    <button type="submit">Simpan</button>
</form>
