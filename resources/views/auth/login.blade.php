<x-auth-layout>
    <x-slot:title>
        login
    </x-slot:title>
    <h1>login</h1>
    <form action="{{ route('auth.login') }}" method="post">
        @csrf
        <label for="email">email :</label>
        <input type="email" name="email" id="email">
        @error('email')
            {{ $message }}
        @enderror<br>

        <label for="password">password :</label>
        <input type="password" name="password" id="password">
        @error('password')
            {{ $message }}
        @enderror<br>

        <button type="submit">login</button>
    </form>
    belum punya akun? <a href="{{ route('auth.register') }}">register</a>
</x-auth-layout>