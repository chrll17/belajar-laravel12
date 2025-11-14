<x-layout>
    <x-slot:title>create</x-slot:title>
    <h1>selamat datang di halaman create</h1>
    <form action="{{ route('siswa.store') }}" method="POST">
        @csrf
        <table border="0" cellspacing='0' cellpadding='5'>

            {{-- name form inputnya harus sama dengan name tabel database --}}

            <tr>
                <td>nama</td>
                <td>
                    : <input type="text" name="nama" id="" value="{{ old('nama') }}">
                    @error('nama')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </td>
            </tr>
            <tr>
                <td>tanggal lahir</td>
                <td>
                    : <input type="date" name="tgl_lahir" id="" value="{{ old('tgl_lahir') }}">
                    @error('tgl_lahir')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </td>
            </tr>
            <tr>
                <td>jurusan</td>
                <td>
                    : <input type="text" name="jurusan" id="" value="{{ old('jurusan') }}">
                    @error('jurusan')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </td>
            </tr>
            <tr>
                <td>nilai</td>
                <td>
                    : <input type="number" name="nilai" id="" value="{{ old('nilai') }}">
                    @error('nilai')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </td>
            </tr>
            <tr>
                <td>mentor</td>
                <td>
                    : <select name="mentor_id" id="" value="{{ old('mentor_id') }}">
                        <option value="">pilih mentor</option>
                        @foreach ($mentors as $mentor)
                            <option value="{{ $mentor['id'] }}" {{ old('mentor_id') == $mentor['id'] ? 'selected' : '' }}>
                                {{ $mentor['nama'] }}
                            </option>
                        @endforeach
                    </select>
                    @error('mentor_id')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </td>
            </tr>
        </table>
        <button type="submit">simpan data</button>
    </form>
</x-layout>