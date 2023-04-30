<section>
    <x-primary-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'create-enquestador')"
    >{{ __('Afegir enquestador') }}</x-primary-button>

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
                    type="nom"
                    class="mt-1 block w-3/4"
                    placeholder="{{ __('Nom') }}"
                />
            </div>

            <div class="mt-6">
                <x-input-label for="localitzacio" value="{{ __('Localitzacio') }}" class="sr-only" />

                <x-text-input
                    id="localitzacio"
                    name="localitzacio"
                    type="localitzacio"
                    class="mt-1 block w-3/4"
                    placeholder="{{ __('Localitzacio') }}"
                />
            </div>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
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