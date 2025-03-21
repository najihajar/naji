<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Annonce') }}
        </h2>
    </x-slot>
    <link rel="stylesheet" href="{{ asset('CSS/style.css') }}">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-lg rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex items-center justify-between mb-6">
                        <h1 class="text-3xl font-extrabold text-gray-800">📢 Liste des Annonces</h1>
                        <a href="{{ route('admin/annonces/create') }}" class="bg-blue-200 text-black px-4 py-2 rounded-lg shadow hover:bg-blue-300 transition">
                            ➕ Ajouter une Annonce
                        </a>
                    </div>
                    <hr class="mb-4 border-gray-300"/>
                    @if(Session::has('success'))
                        <div class="bg-green-100 border border-green-500 text-green-800 px-4 py-3 rounded-lg mb-4 shadow" role="alert">
                            ✅ {{ Session::get('success') }}
                        </div>
                    @endif
                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-lg">
                            <thead class="bg-gray-700 text-white">
                                <tr>
                                    <th class="px-6 py-4 text-left font-semibold">Titre</th>
                                    <th class="px-6 py-4 text-left font-semibold">Contenu</th>
                                    <th class="px-6 py-4 text-left font-semibold">Image</th>
                                    <th class="px-6 py-4 text-center font-semibold">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($annonces as $annonce)
                                    <tr class="border-b hover:bg-gray-100 transition">
                                        <td class="px-6 py-4 text-gray-900 font-medium text-lg">{{ $annonce->titre }}</td>
                                        <td class="px-6 py-4 text-gray-700 text-lg">{{ $annonce->contenu }}</td>
                                        <td class="px-6 py-4">
                                            @if($annonce->image)
                                                <img src="{{ asset('storage/' . $annonce->image) }}" alt="Annonce Image" class="w-20 h-20 object-cover">
                                            @else
                                                <span>No Image</span>
                                            @endif
                                        </td>
                                        <td class="px-6 py-4 flex justify-center space-x-3">
                                            <a href="{{ route('admin/annonces/show', $annonce->id) }}" 
                                               class="bg-blue-200 text-black px-4 py-2 rounded-lg shadow hover:bg-blue-300 transition">
                                                👁 Voir
                                            </a>
                                            <a href="{{ route('admin/annonces/edit', $annonce->id) }}" 
                                               class="bg-yellow-200 text-black px-4 py-2 rounded-lg shadow hover:bg-yellow-300 transition">
                                                ✏ Modifier
                                            </a>
                                            <form action="{{ route('admin/annonces/destroy', $annonce->id) }}" method="POST" 
                                                  onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette annonce ?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" 
                                                        class="bg-red-200 text-black px-4 py-2 rounded-lg shadow hover:bg-red-300 transition">
                                                    🗑 Supprimer
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>