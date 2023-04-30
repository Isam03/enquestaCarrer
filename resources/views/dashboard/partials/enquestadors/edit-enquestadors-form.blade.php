<section>
    <button
        class="middle none center mr-4 h-8 max-h-[32px] w-8 max-w-[32px] rounded-lg bg-green-500 font-sans text-xs font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
        data-ripple-light="true"
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'edit-enquestador-{{$enquestador->id}}')"
    >
    <i class="material-icons-outlined text-base">edit</i>
    </button>

    <x-modal name="edit-enquestador-{{$enquestador->id}}" focusable>
        <form method="post" action="{{ route('enquestador.update', $enquestador->id) }}" class="p-6">
            @csrf
            @method('PUT')

            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ __('Actualitzar enquestador') }}
            </h2>

            <div class="mt-6">
                <x-input-label for="nom" value="{{ $enquestador->nom }}" class="sr-only" />

                <x-text-input
                    id="nom"
                    name="nom"
                    type="text"
                    class="mt-1 block w-full"
                    placeholder="{{ $enquestador->nom }}"
                />
            </div>

            <div class="mt-6">
                <x-input-label for="localitzacio" value="{{ $enquestador->localitzacio }}" class="sr-only" />

                <x-text-input
                    id="localitzacio"
                    name="localitzacio"
                    type="text"
                    class="mt-1 block w-full"
                    placeholder="{{ $enquestador->localitzacio }}"
                />
            </div>

            <div class="mt-6">
                <x-input-label for="password" value="{{ $enquestador->password }}" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-full"
                    placeholder="{{ $enquestador->password }}"
                />
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancelar') }}
                </x-secondary-button>

                <x-primary-button class="ml-3">
                    {{ __('Actualizar') }}
                </x-primary-button>
            </div>
        </form>
    </x-modal>
</section>