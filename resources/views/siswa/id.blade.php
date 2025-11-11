<x-layout>
    <x-slot:title>id</x-slot:title>
    <h1>selamat datang di halaman id</h1>
    <table border="1" cellspacing='0' cellpadding='5'>
        <tr>
            <th>nama</th>
            <th>tgl lahir</th>
            <th>jurusan</th>
            <th>nilai</th>
            <th>mentor siswa</th>
        </tr>
        <tr>
            <td>{{ $siswa['nama'] }}</td>
            <td>{{ $siswa['tgl_lahir'] }}</td>
            <td>{{ $siswa['jurusan'] }}</td>
            <td>{{ $siswa['nilai'] }}</td>
            <td>{{ $siswa->mentor->nama }}</td>
        </tr>
    </table>
</x-layout>