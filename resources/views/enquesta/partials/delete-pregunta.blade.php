<section>

    <button
        class="middle none center mr-4 h-8 max-h-[32px] w-8 max-w-[32px] rounded-lg bg-red-500 font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-pink-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
        data-ripple-light="true"
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'delete-pregunta-{{$pregunta->id}}')"
    >
    <i class="material-icons-round text-base">delete_outline</i>
    </button>

    <x-modal name="delete-pregunta-{{$pregunta->id}}" focusable>
        <form method="post" action="{{ route('pregunta.destroy', $pregunta->id) }}" class="p-6">
            @csrf
            @method('delete')

            

            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ __('Estas segur que vols eliminar aquesta pregunta?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Un cop eliminada aquesta pregunta no es podra recuperar.') }}
            </p>
            <br>
            <h2 class="text-center text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ $pregunta->descripcio }}
            </h2>
            <br>

            <div class="mt-6 flex justify-center">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-danger-button class="ml-3">
                    {{ __('Eliminar') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
