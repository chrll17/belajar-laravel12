<x-layout>
    <x-slot:title>create</x-slot:title>
    <h1>selamat datang di halaman create</h1>
    <form action="" method="POST">
        @csrf
        <table border="0" cellspacing='0' cellpadding='5'>
            <tr>
                <td>nama</td>
                <td>: <input type="text" name="nama" id=""></td>
            </tr>
            <tr>
                <td>tanggal lahir</td>
                <td>: <input type="date" name="tgl_lahir" id=""></td>
            </tr>
            <tr>
                <td>jurusan</td>
                <td>: <input type="text" name="jurusan" id=""></td>
            </tr>
            <tr>
                <td>nilai</td>
                <td>: <input type="number" name="nilai" id=""></td>
            </tr>
            <tr>
                <td>mentor</td>
                <td>: <select name="mentor" id="">
                    <option value="">pilih mentor</option>
                    @foreach ($mentors as $mentor)
                        <option value="{{ $mentor['id'] }}">{{ $mentor['nama'] }}</option>
                    @endforeach
                    </select>
                </td>
            </tr>
        </table>
        <button type="submit">simpan data</button>
    </form>
</x-layout>