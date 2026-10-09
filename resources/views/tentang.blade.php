<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang</title>
</head>
<body>
    {{-- Ini adalah tampilan Blade yang dipanggil oleh route /tentang. --}}
    <h1>Tentang {{ $nama }}</h1>
    <p>Saya sedang belajar Laravel 13.</p>
    <p>Materi saat ini: {{ $materi }}</p>
</body>
</html>
