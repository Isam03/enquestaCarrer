<section>
    <header>
        <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/ripple.js"></script>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Enquestes') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Llista de totes les enquestes') }}
        </p>

        <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    </header>

    @csrf
    
    <br>  
    <a href="{{ route('enquesta.create') }}" class="middle none center mr-4 rounded-lg bg-blue-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:shadow-blue-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
    {{ __('Nova enquesta') }}
    </a>
    <br>
    <br>
    <br>
    <table class="w-full border text-center text-sm font-light dark:border-neutral-500 ">
        <thead class="border-b font-medium dark:border-neutral-500">
            <tr>
                <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500">{{ __('Id') }}</th>
                <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500">{{ __('Nom') }}</th>
                <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500">{{ __('Descripcio') }}</th>
                <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500">{{ __('Data') }}</th>
                <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500">{{ __('Accions') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($enquestas as $enquesta)
                <tr class="border-b dark:border-neutral-500">
                    <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $enquesta->id }}</td>
                    <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $enquesta->nom }}</td>
                    <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $enquesta->descripcio }}</td>
                    <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $enquesta->data }}</td>
                    <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">
                        <div class="grid grid-cols-2">
                            <a
                                class="middle none center mr-4 h-8 max-h-[32px] w-8 max-w-[32px] rounded-lg bg-green-500 font-sans text-xs font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                data-ripple-light="true"
                                href="{{ route('enquesta.edit', $enquesta->id) }}"
                            >
                            <i class="material-icons-outlined text-base">edit</i>
                            </a>
                            @include('dashboard.partials.enquestes.delete-enquesta')
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>