<h1>Edit Tugas</h1>
<form method="POST" action="{{ route('tasks.update', $task) }}">
    @csrf @method('PUT')
    Judul: <input name="title" value="{{ $task->title }}"><br>
    Deskripsi: <textarea name="description">{{ $task->description }}</textarea><br>
    <button type="submit">Update</button>
</form>
