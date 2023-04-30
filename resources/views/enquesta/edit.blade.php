<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Estàs editant la enquesta:') }} {{ $enquesta->nom }}
        </h2>

    </x-slot>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <form method="post" action="{{ route('enquesta.update', $enquesta->id) }}" class="p-6">
                    @csrf
                    @method('PUT')
                    <div class="mt-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="nom">
                            {{ __('Nom') }}
                        </label>
                        <x-input-label for="nom" class="sr-only" />
        
                        <x-text-input
                            id="nom"
                            name="nom"
                            type="text"
                            class="mt-1 block w-full"
                            value="{{ $enquesta->nom }}"
                        />
                    </div>
        
                    <div class="mt-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="descripcio">
                            {{ __('Descripcio') }}
                        </label>
                        <x-input-label for="descripcio" class="sr-only" />
        
                        <x-text-input
                            id="descripcio"
                            name="descripcio"
                            type="text"
                            class="mt-1 block w-full"
                            value="{{ $enquesta->descripcio }}"
                        />
                    </div>
        
                    <div class="mt-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="data">
                            {{ __('Data') }}
                        </label>
                        <x-input-label for="data" class="sr-only" />
        
                        <x-text-input
                            id="data"
                            name="data"
                            type="date"
                            class="mt-1 block w-full"
                            value="{{ $enquesta->data }}"
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

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                @include('enquesta.partials.add-pregunta-to-enquesta')
                <br>
                @include('enquesta.partials.list-preguntas-enquesta')
            </div>
        </div>
    </div>

    @push('slider-script')
    <script>

        const tipusSelect = document.querySelector('#tipus');
        const tipus2Div = document.querySelector('#tipus2Div');
        
        tipusSelect.addEventListener('change', () => {
            if (tipusSelect.value === 'tipus2') {
            tipus2Div.classList.remove('hidden');
            } else {
            tipus2Div.classList.add('hidden');
            }
        });
    </script>
    @endpush
    
</x-app-layout>