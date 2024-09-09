<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Menampilkan semua tugas
    public function index()
    {
        $tasks = Task::all(); // Mengambil semua tugas dari database
        return view('tasks.index', compact('tasks')); // Mengirim data ke view
    }

    // Menambahkan tugas baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required' // Validasi agar 'name' tidak boleh kosong
        ]);

        Task::create($request->all()); // Menyimpan tugas baru ke database
        return redirect()->route('tasks.index'); // Redirect kembali ke halaman utama
    }
}
