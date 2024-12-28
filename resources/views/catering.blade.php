@extends('layouts.app')

@section('title', 'Catering')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-4xl font-bold text-gray-800 mb-4">Catering</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Paket A -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img src="/img/paket-a.jpg" alt="Paket A" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-xl font-bold">Paket A</h2>
                <p class="text-gray-600">Detail tentang Paket A.</p>
            </div>
        </div>
        <!-- Paket B -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img src="/img/paket-b.jpg" alt="Paket B" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-xl font-bold">Paket B</h2>
                <p class="text-gray-600">Detail tentang Paket B.</p>
            </div>
        </div>
        <!-- Paket C -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img src="/img/paket-c.jpg" alt="Paket C" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-xl font-bold">Paket C</h2>
                <p class="text-gray-600">Detail tentang Paket C.</p>
            </div>
        </div>
        <!-- Paket D -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img src="/img/paket-d.jpg" alt="Paket D" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-xl font-bold">Paket D</h2>
                <p class="text-gray-600">Detail tentang Paket D.</p>
            </div>
        </div>
    </div>
</div>
@endsection
