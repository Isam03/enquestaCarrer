<section>
    <header>
        <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/ripple.js"></script>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Preguntes') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Llista de totes les preguntes de l'enquesta") }}
        </p>

        <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </header>

    @csrf
    <br>
    <form method="post" action="">
    @csrf
    
    @foreach ($enquesta->preguntes as $pregunta)
        @if($pregunta->enquesta_id == $enquesta->id)
        <br>
        <div class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="flex grid grid-cols-2 px-6 pt-4">
                <div class="flex justify-start">
                    <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ $pregunta->descripcio }}</h5>
                </div>
                <div class="flex justify-end">
                    @include('enquesta.partials.delete-pregunta')
                </div>
            </div>
            <div class="items-center px-6 pt-2 pb-10">
                @if($pregunta->tipus == 'tipus0')
                    @include('opcions.form-text-opcions')
                @endif
                @if($pregunta->tipus == 'tipus1')
                    @include('opcions.form-radio-opcions')
                @endif
                @if($pregunta->tipus == 'tipus2')
                    @include('opcions.form-slider-opcions')
                @endif
                @if($pregunta->tipus == 'tipus3')
                    {{ __('Imatge')}}
                @endif
            </div>
        </div>
        @endif
    @endforeach
    </form>
</section>