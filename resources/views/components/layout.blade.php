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
        <x-nav-link href='/home'>
            home
        </x-nav-link>
        <x-nav-link href='/siswa'>
            siswa
        </x-nav-link>
        <x-nav-link href='/siswa/{id}'>
            id
        </x-nav-link>
    </nav>
    {{ $slot }} {{-- default slot, cara aksesnya langsung isi dalam x-[nama file] --}}
</body>
</html>