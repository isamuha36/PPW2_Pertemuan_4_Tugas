<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
</head>
<body>
    <h1>To-Do List</h1>

    <!-- Form untuk menambah tugas baru -->
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Enter new task">
        <button type="submit">Add Task</button>
    </form>

    <!-- Daftar tugas -->
    <ul>
        @foreach ($tasks as $task)
            <li>{{ $task->name }}</li>
        @endforeach
    </ul>
</body>
</html>
