@extends('layouts.app')

@section('title', 'Daftar Kontak')

@section('content')
    <h1>Daftar Pesan Kontak</h1>

    @if(session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif

    <a href="{{ route('contacts.create') }}">Tambah Pesan</a>

    <ul>
        @foreach($contacts as $c)
            <li>
                <strong>{{ $c->name }}</strong> ({{ $c->email }})<br>
                {{ $c->message }}<br>
                <a href="{{ route('contacts.show', $c->id) }}">Detail</a> |
                <a href="{{ route('contacts.edit', $c->id) }}">Edit</a> |
                <form action="{{ route('contacts.destroy', $c->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Yakin hapus?')">Hapus</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
