<section>
    <button
        class="middle none center mr-4 rounded-lg bg-blue-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:shadow-blue-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" 
        data-ripple-light="true"
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'create-enquestador')"
        
    >{{ __('Afegir enquestador') }}</button>

    <x-modal name="create-enquestador" focusable>
        <form method="post" action="{{ route('enquestadors.store') }}" class="p-6">
            @csrf
            
            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ __('Crear enquestador') }}
            </h2>

            <div class="mt-6">
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
                <x-input-label for="localitzacio" value="{{ __('Localitzacio') }}" class="sr-only" />

                <x-text-input
                    id="localitzacio"
                    name="localitzacio"
                    type="text"
                    class="mt-1 block w-full"
                    placeholder="{{ __('Localitzacio') }}"
                />
            </div>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-full"
                    placeholder="{{ __('Password') }}"
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
    </x-modal>
</section>