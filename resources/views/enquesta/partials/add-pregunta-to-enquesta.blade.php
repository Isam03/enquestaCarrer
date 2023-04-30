<section>

    <button
    class="middle none center mr-4 rounded-lg bg-green-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
    data-ripple-light="true"
    x-data=""
    x-on:click.prevent="$dispatch('open-modal', 'add-pregunta')"
    >
    Afegir pregunta
    </button>

    

    <x-modal name="add-pregunta" focusable>
        <form method="post" action="{{ route('pregunta.store',$enquesta->id) }}" class="p-6">
            @csrf
            <input type="hidden" name="enquesta_id" value="{{ $enquesta->id }}">
            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ __('Afegir pregunta') }}
            </h2>

            <div class="mt-6">
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
                <x-input-label for="tipus" class="sr-only" />

                <select id="tipus" name="{{ __('tipus') }}" class="block w-full px-4 py-3 text-base text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Tipus de pregunta</option>
                    <option value="{{ __('tipus0') }}">{{ __('Text') }}</option>
                    <option value="{{ __('tipus1') }}">{{ __('Si/No') }}</option>
                    <option value="{{ __('tipus2') }}">{{ __('Slider (entre dos valors)') }}</option>
                    <option value="{{ __('tipus3') }}">{{ __('Imatge') }}</option>
                </select>
            </div>

            <div class="mt-6 grid grid-cols-2 hidden" id="tipus2Div">
                <div>
                    <x-input-label for="rangeA" value="{{ __('Numero inici') }}" class="sr-only" />

                    <x-text-input
                        id="rangeA"
                        name="valorRangA"
                        type="number"
                        class="mt-1 block w-full"
                        placeholder="{{ __('Numero inici') }}"
                    />
                </div>
                <div>
                    <x-input-label for="rangeB" value="{{ __('Numero final') }}" class="sr-only" />

                    <x-text-input
                        id="rangeB"
                        name="valorRangB"
                        type="number"
                        class="mt-1 block w-full"
                        placeholder="{{ __('Numero final') }}"
                    />
                </div>

                
            </div>
            

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancelar') }}
                </x-secondary-button>

                <x-primary-button class="ml-3">
                    {{ __('Afegir') }}
                </x-primary-button>
            </div>
        </form>
    </x-modal>
</section>