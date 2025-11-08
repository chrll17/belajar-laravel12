<x-layout>
    <x-slot:title>
        siswa
    </x-slot:title>
    <h1>selamat datang di halaman siswa</h1>
    <u>daftar siswa</u><br>



    @foreach ($data_siswa as $data)
        <li>{{ $data['nama'] }} - {{ $data['nilai'] }} - {{ $data['id'] }}</li>
    @endforeach
</x-layout>