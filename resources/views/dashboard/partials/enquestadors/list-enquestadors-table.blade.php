<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Enquestadors') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Llista de tots els enquestadors') }}
        </p>

        <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    </header>

    @csrf

    <br>   
    @include('dashboard.partials.enquestadors.create-enquestadors-form') 
    <br>
    <br>
    <table class="w-full border text-center text-sm font-light dark:border-neutral-500 ">
        <thead class="border-b font-medium dark:border-neutral-500">
            <tr>
                <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500">{{ __('Nom') }}</th>
                <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500">{{ __('Localització') }}</th>
                <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500">{{ __('Password') }}</th>
                <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500">{{ __('Accions') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($enquestadors as $enquestador)
                <tr class="border-b dark:border-neutral-500">
                    <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $enquestador->nom }}</td>
                    <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $enquestador->localitzacio }}</td>
                    <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $enquestador->password }}</td>
                    <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">
                        <div class="grid grid-cols-2">
                            @include('dashboard.partials.enquestadors.edit-enquestadors-form') @include('dashboard.partials.enquestadors.delete-enquestador')
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>