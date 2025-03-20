<x-app-layout>
    <x-slot name="header">
        <h2 class="custom-header font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Annonce Details') }}
        </h2>
    </x-slot>
<!-- Lien vers le fichier CSS -->
<link rel="stylesheet" href="{{ asset('CSS/style.css') }}">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg custom-container">
                <div class="p-6 text-gray-900">
                    <h1 class="font-semibold text-xl text-gray-800 leading-tight custom-heading">{{ $annonce->titre }}</h1>
                    <hr class="mb-4 custom-hr" />
                    <p class="custom-text-content">{{ $annonce->contenu }}</p>
                    <a href="{{ route('admin/annonces') }}" class="custom-button custom-hover-button custom-button-blue">Back to list</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
