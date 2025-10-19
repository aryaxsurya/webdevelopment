@extends('layouts.app')

@section('title', 'Tambah Pesan')

@section('content')
    <h1>Tambah Pesan Baru</h1>

    <form method="POST" action="{{ route('contacts.store') }}">
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
        <button type="submit">Simpan</button>
    </form>
@endsection
