@extends('layouts.app')

@section('title', 'Edit Pesan')

@section('content')
    <h1>Edit Pesan</h1>

    <form method="POST" action="{{ route('contacts.update', $contact->id) }}">
        @csrf
        @method('PUT')

        <p>
            <label>Nama:</label><br>
            <input type="text" name="name" value="{{ old('name', $contact->name) }}">
            @error('name') <small style="color:red">{{ $message }}</small> @enderror
        </p>
        <p>
            <label>Email:</label><br>
            <input type="email" name="email" value="{{ old('email', $contact->email) }}">
            @error('email') <small style="color:red">{{ $message }}</small> @enderror
        </p>
        <p>
            <label>Pesan:</label><br>
            <textarea name="message">{{ old('message', $contact->message) }}</textarea>
            @error('message') <small style="color:red">{{ $message }}</small> @enderror
        </p>
        <button type="submit">Update</button>
    </form>
@endsection
