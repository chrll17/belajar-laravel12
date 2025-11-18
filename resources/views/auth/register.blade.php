<x-auth-layout>
    <x-slot:title>
        register
    </x-slot:title>
    <h1>register</h1>
    <form action="{{ route('auth.register') }}" method="post">
        @csrf
        <label for="nama">nama :</label>
        <input type="text" name="name" id="nama" value="{{ old('name') }}">
        @error('name')
            {{ $message }}
        @enderror<br>

        <label for="email">email :</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}">
        @error('email')
            {{ $message }}
        @enderror<br>

        <label for="password">password :</label>
        <input type="password" name="password" id="password">
        @error('password')
            {{ $message }}
        @enderror<br>

        <label for="password2">confirm password :</label>
        <input type="password" name="password_confirmation" id="password2"><br>

        <button type="submit">register</button>
    </form>
    sudah punya akun? <a href="{{ route('auth.login') }}">login</a>
</x-auth-layout>