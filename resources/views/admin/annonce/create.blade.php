<x-app-layout>
    <x-slot name="header">
        <h2 class="custom-header font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Annonce') }}
        </h2>
    </x-slot>
    <link rel="stylesheet" href="{{ asset('CSS/style.css') }}">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg custom-container">
                <div class="p-6 text-gray-900">
                    <h1 class="font-semibold text-xl text-gray-800 leading-tight custom-heading">Add Annonce</h1>
                    <hr class="mb-4 custom-hr"/>
                    @if(session()->has('error'))
                        <div class="custom-alert">
                            {{ session('error') }}
                        </div>
                    @endif
                    <a href="{{ route('admin/annonces') }}" class="custom-button custom-hover-button custom-button-blue">Go back</a></br></br>
                    <form action="{{ route('admin/annonces/store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4 custom-form-group">
                            <label for="titre" class="custom-label">Titre</label>
                            <input type="text" name="titre" id="titre" class="custom-input" required>
                            @error('titre')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4 custom-form-group">
                            <label for="contenu" class="custom-label">Contenu</label>
                            <textarea name="contenu" id="contenu" class="custom-textarea" rows="4" required></textarea>
                        </div>
                        <div class="mb-4 custom-form-group">
                            <label for="image" class="custom-label">Image</label>
                            <input type="file" name="image" id="image" class="custom-input">
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="custom-button custom-hover-button custom-button-blue">Create Annonce</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>