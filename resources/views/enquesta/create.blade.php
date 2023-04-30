<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Crea una nova enquesta') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <form method="post" action="{{ route('enquesta.store') }}" class="p-6">
                    @csrf
        
                    <div class="mt-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="nom">
                            {{ __('Nom') }}
                        </label>
                        <x-input-label for="nom" value="{{ __('Nom') }}" class="sr-only" />
        
                        <x-text-input
                            id="nom"
                            name="nom"
                            type="text"
                            class="mt-1 block w-full"
                            placeholder="{{ __('Nom') }}"
                        />
                    </div>
        
                    <div class="mt-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="descripcio">
                            {{ __('Descripcio') }}
                        </label>
                        <x-input-label for="descripcio" value="{{ __('Descripcio') }}" class="sr-only" />
        
                        <x-text-input
                            id="descripcio"
                            name="descripcio"
                            type="text"
                            class="mt-1 block w-full"
                            placeholder="{{ __('Descripcio') }}"
                        />
                    </div>
        
                    <div class="mt-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="data">
                            {{ __('Data') }}
                        </label>
                        <x-input-label for="data" value="{{ __('Data') }}" class="sr-only" />
        
                        <x-text-input
                            id="data"
                            name="data"
                            type="date"
                            class="mt-1 block w-full"
                            placeholder="{{ __('Data') }}"
                        />
                    </div>
        
                    <div class="mt-6 flex justify-end">
                        <x-secondary-button x-on:click="$dispatch('close')">
                            {{ __('Cancelar') }}
                        </x-secondary-button>
        
                        <x-primary-button class="ml-3">
                            {{ __('Crear') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>