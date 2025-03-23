<x-admin-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between bg-gradient-to-r from-blue-600 to-purple-600 p-4 shadow-lg">
            <div class="flex items-center">
                
                <h2 class="font-bold text-2xl text-black tracking-wide ">
                    {{ __('Admin Dashboard') }}
                </h2>
                
            </div>
        </div>
    </x-slot>

    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-900 text-white p-6 shadow-xl fixed h-full">
            <nav>
                <ul class="space-y-4">
                    <li>
                        <a href="{{ route('admin/annonces') }}" class="flex items-center justify-center w-full text-center bg-blue-500 hover:bg-blue-700 text-black font-semibold py-2 px-4 rounded-lg shadow-md transition duration-300">
                            
                            Annonces
                        </a>
                    </li>
                    
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 ml-64 p-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <!-- Content will be loaded here dynamically -->
                        
                    </div>
                </div>
            </div>
        </main>
    </div>
</x-admin-app-layout>