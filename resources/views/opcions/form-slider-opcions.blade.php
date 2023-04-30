<section>
    <div class="mt-6">
            <div class="flex flex-row grid w-full gap-6">
            <span class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">{{ $pregunta->valorRangA }}</span>
            <input id="large-range" type="range" min="{{$pregunta->valorRangA}}" max="{{$pregunta->valorRangB}}" class="w-full h-3 bg-gray-200 rounded-lg appearance-none cursor-pointer range-lg dark:bg-gray-700">
            <span class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">{{ $pregunta->valorRangB }}</span>    
            <x-text-input
            id="valorTriat"
            name="valorTriat"
            type="number"
            class="mt-1 block w-full"
            placeholder="{{ __('Valor') }}"
            disabled="true"
            value=""
            />
            </div>

            <script>

            $(document).ready(function () {

                $("#large-range").change(
                    function () {
                        canvia()
                    }
                );
            });

            function canvia(){

                let valor = document.getElementById("large-range").value;
                
                document.getElementById("valorTriat").value = valor;

            }

            </script>
    </div>  
</section>