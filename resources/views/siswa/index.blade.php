<x-layout>
    <x-slot:title>
        siswa
    </x-slot:title>
    <h1>selamat datang di halaman siswa</h1>
    <u>daftar siswa</u><br>



    @foreach ($data_siswa as $data)
        <li>
            <a href="/siswa/{{ $data['id'] }}">view detail</a>
             - {{ $data['nama'] }}
             - {{ $data['tgl_lahir'] }}
             - {{ $data['jurusan'] }}
             - {{ $data['nilai'] }}
        </li>
    @endforeach

    {{ $data_siswa->links() }} {{-- untuk mengakses pagination --}}
</x-layout>