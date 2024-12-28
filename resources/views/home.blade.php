@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div class="bg-cover bg-center h-64" style="background-image: url('/img/beranda.jpg');">
    <div class="flex items-center justify-center h-full bg-gray-900 bg-opacity-50">
        <h1 class="text-white text-3xl font-bold">Badan Usaha Milik Desa</h1>
    </div>
</div>

<!-- Grid Section -->
<div class="grid grid-cols-2 gap-4 mt-8 max-w-screen-lg mx-auto">
    <!-- Playground -->
    <a href="/playground" class="block bg-white p-4 shadow-md hover:shadow-lg transition-shadow duration-200">
        <img src="/img/playground.jpg" alt="Playground" class="w-full h-32 object-cover rounded-md">
        <h2 class="mt-2 text-lg font-bold text-gray-800">Playground</h2>
        <p class="text-gray-600">Area bermain anak yang aman dan menyenangkan.</p>
    </a>

    <!-- Catering -->
    <a href="{{ route('catering') }}" class="block bg-white p-4 shadow-md hover:shadow-lg transition-shadow duration-200">
        <img src="/img/catering.jpg" alt="Catering" class="w-full h-32 object-cover rounded-md">
        <h2 class="mt-2 text-lg font-bold text-gray-800">Catering</h2>
        <p class="text-gray-600">Layanan katering untuk kebutuhan acara Anda.</p>
    </a>
</div>
@endsection
