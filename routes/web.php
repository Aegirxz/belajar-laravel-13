<?php

use Illuminate\Support\Facades\Route;

// Route GET untuk URL /halo; teks yang dikembalikan akan tampil langsung di browser.
Route::get('/halo', function () {
    return 'Halo, Laravel 13!!';
});

// Route GET untuk URL /tentang; view() memuat resources/views/tentang.blade.php.
Route::get('/tentang', function () {
    // Data array ini dikirim sebagai variabel yang bisa dipakai di view.
    return view('tentang', [
        'nama' => 'Bima',
        'materi' => 'Blade dan data dinamis',
    ]);
});