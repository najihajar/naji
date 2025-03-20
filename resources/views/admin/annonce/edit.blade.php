<x-app-layout>
    <x-slot name="header">
        <h2 class="custom-header font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Annonce') }}
        </h2>
    </x-slot>
<!-- Lien vers le fichier CSS -->
<link rel="stylesheet" href="{{ asset('CSS/style.css') }}">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg custom-container">
                <div class="p-6 text-gray-900">
                    <h1 class="font-semibold text-xl text-gray-800 leading-tight custom-heading">Edit Annonce</h1>
                    <hr class="mb-4 custom-hr" />
                    <form action="{{ route('admin/annonces/update', $annonce->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4 custom-form-group">
                            <label for="titre" class="custom-label">Titre</label>
                            <input type="text" name="titre" id="titre" class="custom-input" value="{{ $annonce->titre }}" required>
                        </div>
                        <div class="mb-4 custom-form-group">
                            <label for="contenu" class="custom-label">Contenu</label>
                            <textarea name="contenu" id="contenu" class="custom-textarea" rows="4" required>{{ $annonce->contenu }}</textarea>
                        </div>
                        <button type="submit" class="custom-button custom-hover-button custom-button-blue">Update Annonce</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
