<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title> {{-- lebih dari 1 slot, cara aksesnya x-slot:[nama slot] --}}
</head>
<body>
    <nav>
        <a href="/home">home</a>
        <a href="/siswa">siswa</a>
        <a href="/siswa/{id}">id</a>
    </nav>
    {{ $slot }} {{-- default slot, cara aksesnya langsung isi dalam x-layout --}}
</body>
</html>