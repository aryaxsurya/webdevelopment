@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <h2 class="text-2xl font-bold mb-4">Daftar Post</h2>

    {{-- Pakai komponen untuk pesan --}}
    <x-alert type="success">
        Data berhasil dimuat dari database!
    </x-alert>

    {{-- Looping data dari database --}}
    @forelse($posts as $post)
        <div class="mb-4 p-4 border rounded bg-grey">
            <h3 class="text-xl font-semibold">{{ $post->title }}</h3>
            <p>{{ $post->content }}</p>
            <small class="text-gray-500">Dibuat: {{ $post->created_at->format('d M Y H:i') }}</small>
        </div>
    @empty
        <p class="text-gray-500">Belum ada data post.</p>
    @endforelse
@endsection
