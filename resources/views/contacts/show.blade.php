@extends('layouts.app')

@section('title', 'Detail Pesan')

@section('content')
    <h1>Detail Pesan</h1>
    <p><b>Nama:</b> {{ $contact->name }}</p>
    <p><b>Email:</b> {{ $contact->email }}</p>
    <p><b>Pesan:</b> {{ $contact->message }}</p>

    <a href="{{ route('contacts.index') }}">Kembali</a>
@endsection
