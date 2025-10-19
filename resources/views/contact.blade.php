@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <h1>Halaman Contact</h1>

    {{-- Pesan sukses --}}
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    {{-- Form --}}
    <form method="POST" action="/contact">
        @csrf
        <p>
            <label>Nama:</label><br>
            <input type="text" name="name" value="{{ old('name') }}">
            @error('name') <small style="color:red">{{ $message }}</small> @enderror
        </p>

        <p>
            <label>Email:</label><br>
            <input type="email" name="email" value="{{ old('email') }}">
            @error('email') <small style="color:red">{{ $message }}</small> @enderror
        </p>

        <p>
            <label>Pesan:</label><br>
            <textarea name="message">{{ old('message') }}</textarea>
            @error('message') <small style="color:red">{{ $message }}</small> @enderror
        </p>

        <button type="submit">Kirim</button>
    </form>
@endsection
